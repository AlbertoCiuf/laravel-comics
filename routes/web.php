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
  $links = [
    [
      "url" =>'#',
      "text" =>'characters',
      "isActive" => false
    ],
    [
      "url" =>'#',
      "text" =>'comics',
      "isActive" => true
    ],
    [
      "url" =>'#',
      "text" =>'movies',
      "isActive" => false
    ],
    [
      "url" =>'#',
      "text" =>'tv',
      "isActive" => false
    ],
    [
      "url" =>'#',
      "text" =>'games',
      "isActive" => false
    ],
    [
      "url" =>'#',
      "text" =>'collectibles',
      "isActive" => false
    ],
    [
      "url" =>'#',
      "text" =>'videos',
      "isActive" => false
    ],
    [
      "url" =>'#',
      "text" =>'fans',
      "isActive" => false
    ],
    [
      "url" =>'#',
      "text" =>'news',
      "isActive" => false
    ],
    [
      "url" =>'#',
      "text" =>'shop',
      "isActive" => false
    ],
  ];
    return view('home', compact('links'));
})->name('home');
