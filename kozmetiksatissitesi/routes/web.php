<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anasayfaController;
use App\Http\Controllers\userController;
use App\Http\Controllers\productController;
use App\Http\Controllers\AdminController;

// <-- Admin Routes -->
Route::view('adminGiris', 'admin.admingiris');
Route::post('adminLogin', [AdminController::class, 'login']);
Route::view('adminAnasayfa', 'admin.adminAnasayfa');
Route::get('kullaniciListesi', [AdminController::class, 'usersList']);
Route::view('sifreGuncelle', 'admin.sifreGuncelle');
Route::get('siparisTakip', [AdminController::class, 'orderList'])->name('siparisTakip');
Route::get('onaylananSiparis', [AdminController::class, 'orderList'])->name('gelenSiparis');
Route::post('confirmOrder', [AdminController::class, 'confirmOrder']);
Route::view('urunEkle', 'admin.urunEkle');
Route::post('addProduct', [AdminController::class, 'addProduct']);
Route::get('urunGuncelle/{id}', [AdminController::class, 'getProduct']);
Route::post('updateProduct', [AdminController::class, 'updateProduct']);
Route::post('deleteProduct', [AdminController::class, 'deleteProduct']);
Route::post('addPhoto', [AdminController::class, 'addPhoto']);
Route::post('deletePhoto', [AdminController::class, 'deletePhoto']);
Route::post('deleteUser', [AdminController::class, 'deleteUser']);
Route::get('urunler', [AdminController::class, 'productList']);
Route::get('profil/{id}', [AdminController::class, 'danismanPanel']);
Route::post('bilgiGuncelle', [AdminController::class, 'bilgiGuncelle']);
Route::post('sifreGuncellendi', [AdminController::class, 'sifreGuncelle']);

// <-- User Routes -->
Route::post('userLogin', [userController::class, 'login']);
Route::get('/logout', [userController::class, 'logout']);
Route::post('userSave', [userController::class, 'userSave']);
Route::get('/', [anasayfaController::class, 'productlistele']);


Route::get('/iletisim', function () {
    return view('iletisim');
});
Route::get('/giris', function () {
    return view('giris');
});

Route::get('/kullanicibilgi/{id}', [userController::class, 'getStudent']);
Route::get('/kullanicisayfa/{id}', [userController::class, 'getUpdate'])->name('kullanicisayfa');
Route::post('/setUpdate', [userController::class, 'setUpdate'])->name('post.kullanicisayfa');

Route::get('/kayit', function () {
    return view('kayit');
});
Route::get('/sepet', [userController::class, 'getChart'])->name('sepet');
Route::post('addToChart', [userController::class, 'addToChart']);
Route::post('deleteFromCart', [userController::class, 'deleteFromCart']);
Route::post('siparisOlustur', [userController::class, 'siparisOlustur']);
Route::get('satinal', [userController::class, 'getChart'])->name('satinal');
Route::get('/sacbakim', [productController::class, 'sacbakimlistele'])->name('sacbakimlist');
Route::get('/makyaj', [productController::class, 'makyajlistele'])->name('makyajlist');
Route::get('/goz', [productController::class, 'gozlistele'])->name('gozlist');
Route::get('/urunDetay', [productController::class, 'getDetails']);
Route::get('/dudak', [productController::class, 'dudaklistele'])->name('dudaklist');
Route::get('/yuz', [productController::class, 'yuzlistele'])->name('yuzlist');
Route::get('/tırnak', [productController::class, 'tırnaklistele'])->name('tırnaklist');
Route::get('/parfum', [productController::class, 'parfumlistele'])->name('parfumlist');
Route::get('/ciltbakim', [productController::class, 'ciltbakimlistele'])->name('ciltbakimlist');
Route::get('/yuzbakim', [productController::class, 'yuzbakimlistele'])->name('yuzbakimlist');
Route::get('/vucutbakim', [productController::class, 'vucutbakimlistele'])->name('vucutbakimlist');
