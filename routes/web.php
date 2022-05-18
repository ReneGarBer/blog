<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicMath;
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
    return view('welcome');
});

Route::controller(BasicMath::class)->group(function(){
    Route::get('suma/{a}+{b}','suma');
    Route::get('resta/{a}-{b}','resta');
    Route::get('multiplicacion/{a}*{b}','multiplicacion');
    Route::get('division/{a}/{b}','division');
});
