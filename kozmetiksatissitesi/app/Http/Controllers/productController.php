<?php

namespace App\Http\Controllers;

use App\Models\product;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function makyajlistele()
    {

        $products = product::where("kategori_id", "<", 5)->get();
        return view('makyaj', compact('products'));
    }

    public function gozlistele()
    {

        $products = product::where("kategori_id", "=", 1)->get();
        return view('goz', compact('products'));
    }
    public function getDetails(Request $req)
    {
        $urun = $req->urun_id;
        $product = product::where("id",  $urun)->get();
        return view('urunDetay', compact('product'));
    }


    public function dudaklistele()
    {

        $products = product::where("kategori_id", "=", 2)->get();
        return view('dudak', compact('products'));
    }

    public function yuzlistele()
    {

        $products = product::where("kategori_id", "=", 3)->get();
        return view('yuz', compact('products'));
    }

    public function tırnaklistele()
    {

        $products = product::where("kategori_id", "=", 4)->get();
        return view('tırnak', compact('products'));
    }
    public function ciltbakimlistele()
    {

        $products = product::whereIn('kategori_id', [5, 6])->get();
        return view('makyaj', compact('products'));
    }
    public function yuzbakimlistele()
    {

        $products = product::where("kategori_id", "=", 5)->get();
        return view('yuzbakim', compact('products'));
    }
    public function vucutbakimlistele()
    {

        $products = product::where("kategori_id", "=", 6)->get();
        return view('vucutbakim', compact('products'));
    }
    public function sacbakimlistele()
    {

        $products = product::where("kategori_id", "=", 7)->get();
        return view('sacbakim', compact('products'));
    }
    public function parfumlistele()
    {

        $products = product::where("kategori_id", "=", 8)->get();
        return view('parfum', compact('products'));
    }
}
