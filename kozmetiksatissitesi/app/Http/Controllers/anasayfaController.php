<?php

namespace App\Http\Controllers;

use App\Models\product;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class anasayfaController extends Controller
{
   
    public function productlistele()
    {
        $location = 'Istanbul';
        $apiKey = 'cc679397cc37a45d7ecbfc9245e468c5';
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$location}&appid={$apiKey}&units=metric");
        $data = $response->json();
        $products = product::whereIn('kategori_id', [2, 3, 5, 6, 7, 8])->get();
        return view('anasayfa', compact('products', 'data'));
    }
}
