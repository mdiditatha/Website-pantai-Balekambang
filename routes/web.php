<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('beranda');
});
//route efektif
Route::get('/destinasi/{nama}', function($nama) {
  return view('destinasi.'.$nama);
});
Route::get('/reservasi/{nama}', function($nama) {
  return view('reservasi.'.$nama);
});
Route::get('/virtual-360/{page}', function($page) {
  return view('virtual360.'.$page);
});
// custom menu

// Route::get('/destinasi/detail', function () {
//     return view('destinasi.show');
// });

// Route::get('destinasi/pulau-ismoyo', function () {
//   return view('destinasi.pulau_ismoyo');
// });
// Route::get('destinasi/pulau-anoman', function () {
//   return view('destinasi.pulau_anoman');
// });
// Route::get('destinasi/pulau-wisanggeni', function () {
//   return view('destinasi.pulau_wisanggeni');
// });
// Route::get('/akomondasi', function () {
//     return view('page.akomondasi');
// });


// Route::get('/reservasi/homestay-dhilpratis', function () {
//   return view('reservasi.homestay-dhilpratis');
// });
// Route::get('/slide', function () {
//     return view('page.slide');
// });

Route::get('/reservasi', function () {
  return view('reservasi.index');
});
Route::get('/destinasi', function () {
  return view('destinasi.index');
});
Route::get('/peta_wisata', function () {
    return view('peta.index');
});

// halaman rekomendasi
Route::get('/rekomendasi', function () {
  return view('rekomendasi.index');
});
// halaman rekomendasi
Route::get('/akomondasi', function () {
  return view('rekomendasi.akomondasi');
});
