<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Detail;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $req)
    {
        $id = $req->id;
        $sifre = $req->password;
        $cryptedPass = base64_encode($sifre);
        $danisman = Admin::where('id', $id)->value('sifre');

        echo "danisman sifre : , $danisman";
        echo "crypted sifre : , $cryptedPass";

        if ($danisman != null) {
            if ($cryptedPass == $danisman) {
                return redirect('profil/' . $id);
            }
        }

        return redirect('/adminGiris');
    }
    public function danismanPanel(Request $request)
    {
        $id = $request->id;
        $admin = Admin::where('id', $request->id)->get();
        return view('admin.profil', compact('admin', 'id'));
    }

    public function usersList()
    {
        $users = User::all();
        return view('admin.kullaniciListesi', compact('users'));
    }
    public function productList()
    {
        $products = Product::all();
        return view('admin.urunler', compact('products'));
    }
    public function getProduct(Request $req)
    {
        $product = Product::where('id', $req->id)->get();
        return view('admin.urunGuncelle', compact('product'));
    }
    public function addProduct(Request $req)
    {
        $urun_adi = $req->urun_adi;
        $urunMarka = $req->marka;
        $urunKategori = $req->kategori;
        $urunStok = $req->stok_adedi;
        $urunFiyat = $req->fiyat;
        $urunAciklama = $req->aciklama;
        $urunIcindekiler = $req->icindekiler;

        $urun = new Product();
        $urun->urun_adi = $urun_adi;
        $urun->marka_id = $urunMarka;
        $urun->kategori_id = $urunKategori;
        $urun->stok_adedi = $urunStok;
        $urun->aciklama = $urunAciklama;
        $urun->fiyat = $urunFiyat;
        $urun->icindekiler = $urunIcindekiler;
        $urun->enable = "y";

        if ($req->hasFile('fotograf')) {
            $image = $req->file('fotograf');
            $filename = $urun_adi . ".jpg";
            $path = $filename;
            $image->move("assets/fotolar/", $filename);
            $urun->foto = $path;
        }
        if ($req->hasFile('fotograf1')) {
            $image = $req->file('fotograf1');
            $filename = $urun_adi . ".jpg";
            $path = $filename;
            $image->move("assets/fotolar/", $filename);
            $urun->fotograf1 = $path;
        }
        if ($req->hasFile('fotograf2')) {
            $image = $req->file('fotograf2');
            $filename = $urun_adi . ".jpg";
            $path = $filename;
            $image->move("assets/fotolar/", $filename);
            $urun->fotograf2 = $path;
        }
        $urun->save();

        return redirect()->back();
    }

    public function updateProduct(Request $req)
    {
        $id = $req->urun_id;
        echo "$id";
        $urun = Product::where('id', $id)->first();
        echo "$urun";
        $urun->urun_adi = $req->urun_adi;
        $urun->stok_adedi = $req->stok_adedi;
        $urun->aciklama = $req->aciklama;
        $urun->fiyat = $req->fiyat;
        $urun->icindekiler = $req->icindekiler;
        $urun->update();

        return redirect('urunler');
    }
    public function addPhoto(Request $req)
    {
        $id = $req->id;
        echo "$id";
        $urun = Product::where('id', $id)->first();
        if ($req->hasFile('fotograf')) {
            $image = $req->file('fotograf');
            $filename = $id . ".jpg";
            $path = $filename;
            $image->move("assets/fotolar/", $filename);
            $urun->foto = $path;
        }
        $urun->update();
        return redirect('urunler');
    }
    public function deletePhoto(Request $req)
    {
        $id = $req->id;
        echo "$id";
        $urun = Product::where('id', $id)->first();
        echo "$urun";
        $urun->foto = "";
        $urun->update();
        echo " ";
        echo "$urun";
        return redirect('urunler');
    }
    public function orderList()
    {
        $orders = Order::all();
        if (Route::currentRouteName() == 'siparisTakip') {
            return view('admin.siparisTakip', compact('orders'));
        } else {
            return view('admin.onaylananSiparis', compact('orders'));
        }
    }

    public function bilgiGuncelle(Request $req)
    {
        $id = $req->id;
        echo "$id";
        $admin = Admin::where('id', $req->id)->first();
        echo "$admin";
        $admin->telefon = $req->telefon;
        $admin->eposta = $req->eposta;
        $admin->adres = $req->adres;
        $admin->update();

        return redirect('profil/' . $id);
    }

    public function sifreGuncelle(Request $req)
    {
        $id = $req->id;
        echo "$id";
        $admin = Admin::where('id', $req->id)->first();
        echo "$admin";
        $yeniSifre = base64_encode($req->yeniSifre);
        $admin->sifre = $yeniSifre;
        $admin->update();

        return redirect('profil/' . $id);
    }
    public function deleteUser(Request $req)
    {
        if (isset($_POST['deleteUser'])) {
            $id = $req->id;
            $user = User::where('user_id', $id)->first();
            $user->enable = 'n';
            $user->update();
        }
        if (isset($_POST['hesapDondur'])) {
            $id = $req->id;
            echo "$id";
            $user = User::where('user_id', $id)->first();
            echo "$user";
            $user->statu = 'n';
            $user->update();
        }
        return redirect('kullaniciListesi');
    }
    public function deleteProduct(Request $req)
    {
        $id = $req->id;
        $product = Product::where('id', $id)->first();
        $product->enable = 'n';
        $product->update();
        return redirect('urunler');
    }

    public function confirmOrder(Request $req)
    {
        $id = $req->id;
        $order = Order::where('order_id', $id)->first();
        $order->durum_id = 2;
        $order->update();
        return redirect('siparisTakip');
    }
}
