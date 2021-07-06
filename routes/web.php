<?php

use Illuminate\Routing\RouteUri;
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
    return view('v_home');
});

Route::get('/v_siswa', function () {
    return view('siswa', [
        'nama'  =>  'Reza Febriansyah',
        'nim'   =>  '183200031'
    ]);
});

Route::get('/guru/{nama_guru?}', function ($nama_guru = 'Endah Nurista') {
    return view('v_guru', [
        'nama_guru' =>  $nama_guru
        
        
    ]);
});
