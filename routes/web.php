<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BobotController;
use App\Http\Controller\SawController;
use Mpdf\Tag\SetHtmlPageHeader;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index');
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/saw', 'SawController@hitungsaw')->name('lihatSaw');

Route::get('/inputdatasiswa', 'SiswaController@create')->name('inputDataSiswa');
Route::get('/export', 'App\Http\Controllers\SawController@export')->name('hasil.export');   
Route::get('/lihatdatasiswa', 'SiswaController@index')->name('lihatDataSiswa');
Route::resource('siswa', 'App\Http\Controllers\SiswaController');


Route::get('/createRuangan', 'RuanganController@create')->name('createRuangan');
Route::resource('ruangan', 'App\Http\Controllers\RuanganController');

Route::resource('jenisRuangan', 'App\Http\Controllers\JenisRuanganController');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');


Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('/saw','SawController@hitungsaw')->name('home');


// Route::get('/laporan', 'App\Http\Controllers\SawController@index');
// Route::get('/exportlaporan', 'App\Http\Controllers\SawController@export');