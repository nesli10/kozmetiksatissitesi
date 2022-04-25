<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\Detail;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

class userController extends Controller
{

    public function login(Request $req)
    {
        $eposta = $req->id;
        echo "$eposta";
        $sifre = $req->password;
        $cryptedPass = base64_encode($sifre);
        $user = user::where('eposta', $eposta)->value('sifre');
        $id = user::where('eposta', $eposta)->value('user_id');
        echo "danisman sifre : , $user";
        echo "crypted sifre : , $cryptedPass";

        if ($user != null) {
            if ($cryptedPass == $user) {
                $userModel = user::find($id);
                Cache::put("loginedUser", $userModel);

                return redirect('kullanicibilgi/' . $id);
            }
        }

        return redirect('/giris');
    }

    public function logout()
    {
        Cache::put("loginedUser", "");
        return redirect("/");
    }
    public function userSave(Request $req)
    {
        
        $user =  $user =  mt_rand(100000000, 999999999);
        $varMi = user::where('user_id', $user)->value('user_id');
        if ($varMi != null) {
            $user =  mt_rand(100000000, 999999999);
        }
        $ad = $req->ad;
        $soyad = $req->soyad;
        $eposta = $req->eposta;
        $telefon = $req->telefon;
        $adres = $req->adres;
        $dogumT = $req->dogumT;
        $sifre = base64_encode($req->sifre);
        $newUser = new user();
        $newUser->user_id = $user;
        $newUser->ad = $ad;
        $newUser->soyad = $soyad;
        $newUser->eposta = $eposta;
        $newUser->telefon = $telefon;
        $newUser->adres = $adres;
        $newUser->dogumTarihi = $dogumT;
        $newUser->sifre = $sifre;
        $newUser->enable = 'y';
        $newUser->statu = 'y';
            $newUser->save();
            return redirect('/giris' );
    }


    function getStudent(Request $request)
    {
        $id = $request->id;
        $users = user::where('user_id', $id)->get();
        $orders = Order::where('user_id', $id)->get();

        return view('kullanicibilgi', compact('users', 'id', 'orders'));
    }
    public function getUpdate($id)
    {
        $getUpdate = user::find($id);
        return view(
            'kullanicisayfa',
            ['guncelle' =>  $getUpdate],
            ['user_id' =>  $id]
        );
    }
    public function setUpdate(Request $request)
    {

        $insert = user::find($request->user_id);
        $insert->telefon = $request->telefon;
        $insert->eposta = $request->eposta;
        $insert->adres = $request->adres;
        $insert->sifre = base64_encode($request->sifre);
        $insert->update();

        return redirect()->back()->with('success', 'Profil Güncellendi');
    }
    public function getChart(Request $req)
    {
        $loginedUser = Cache::get("loginedUser", "");
        if( $loginedUser != null){
        $id = $loginedUser->user_id;
        
        $order = Cart::where('user_id', $id)->get();
        if (Route::currentRouteName() == 'sepet') {
            
            return view('sepet', compact('order'));
        } else {
            return view('satinal', compact('order'));
        }
        }
        // else{
        //        return redirect('sepet');
        //      }
    }


    public function addToChart(Request $req)
    {
        $id = $req->user_id;
        $urun = $req->urun_id;
        if ($req->adet == null) {
            $count = '1';
        } else {
            $count = $req->adet;
        }
        $t = "false";
        $cartItem = new Cart();
        $cartItem->urun_id = $urun;
        $cartItem->user_id = $id;
        $varMi = $cartItem;
        $order = Cart::where('user_id',  $id)->get();
        foreach ($order as $item) {
            if ($urun == $item->urun_id) {
                $varMi = $item;
                $t = "true";
                echo "$t";
                $count = $item->adet + 1;
                break;
            }
        }
        if ($t == "true") {
            $varMi->adet = $count;
            $varMi->update();
        } else {
            $cartItem->adet = $count;
            $cartItem->save();
        }
        return redirect('sepet');
    }
    public function deleteFromCart(Request $req)
    {
        $urun = $req->urun_id;
        $count = $req->adet;
        $cartItem = Cart::where('urun_id', $urun)->first();
        if ($count == 1) {
            $cartItem->delete();
        } else {
            $cartItem->adet = $count - 1;
            $cartItem->save();
        }

        return redirect('sepet');
    }
    public function siparisOlustur(Request $req)
    {
        $loginedUser = Cache::get("loginedUser", "");
        $user = $loginedUser->user_id;
        $insert = user::find($user);
        if ($insert == null) {
            return redirect('kayit');
        } else {
            $cartItem = Cart::where('user_id', $user)->get();
            $orderId = rand(100000, 999999);
            $kargoId = rand(10000000, 99999999);
            $newOrder = new Order();
            $newOrder->order_id = $orderId;
            $newOrder->siparisTarih = date("Y-m-d");
            $newOrder->adres = $req->adres;
            $newOrder->user_id = $user;
            $newOrder->durum_id = "1";
            $newOrder->kargoId = $kargoId;
            $newOrder->save();
            foreach ($cartItem as $item) {
                $orderDetail = new Detail();
                $orderDetail->order_id = $orderId;
                $orderDetail->urun_id = $item->urun_id;
                $orderDetail->user_id = $item->user_id;
                $orderDetail->adet = $item->adet;
                //$orderDetail->save();
                $urun = Product::where('id', $item->urun_id)->first();
                echo "$urun->stok_adedi";
                $urun_stok = $urun->stok_adedi;
                $urun->stok_adedi = $urun_stok - $item->adet;
                $urun->update();
            }
            $cartItem = Cart::where('user_id', $user)->get();
            foreach ($cartItem as $item) {
                $item->delete();
            }

            return redirect('kullanicibilgi/' . $user);
        }
    }
}
