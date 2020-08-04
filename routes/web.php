<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
Use App\User;
use Illuminate\Http\Request;
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


Route::resource('landing_blog', 'LandingBlogController')->names([
  'show' => 'landing_blog.show'
]);
Route::resource('/', 'LandingBlogController')->names([
  'index' => '/'
]);
Route::resource('landing_kecamatan', 'LandingKecamatanController')->names([
  'show' => 'landing_kecamatan.show'
]);
Route::resource('landing_organisasi', 'LandingOrganisasiController')->names([
  'index' => 'landing_organisasi',
  'show' => 'landing_organisasi.show'
]);
Route::resource('landing_kelurahan', 'LandingKelurahanController')->names([
  'show' => 'landing_kelurahan.show'
]);
Route::resource('peminjamans', 'LandingPeminjamanController')->names([
  'index' => 'peminjamans',
  'store' => 'peminjamans.store'
]);


// LandingPeminjaman Controller
// Route::get('/peminjaman', 'c_kepemudaan@halaman_ajukan_peminjaman');
// Route::post('/peminjaman/aksi', 'c_peminjaman_sarana@ajukan');
Route::get('/list_organisasi/{id}', 'KepemudaanController@halaman_list_organisasi')->name('list_organisasi');
Route::get('/logout', 'kepemudaanController@logout')->name('logout');

// LoginController
Auth::routes(['register' => false]);
