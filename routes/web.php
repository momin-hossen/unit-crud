<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Github a second time kivabe upload korbi dekh, 
// 1dom simple

// First time

// Porer bar theke kono change paile ey jaygay files er list gulu dekhte parbi.

// Jemon dekh, web.php te change korsi, oi jonnoi ey jaygay list chole ashche,

// ekhn toi oi file a click korle dekhte parbi ki ki change korsos, 

// so, eto kisu dekha tur kaj nah
// Uporer jei 1ta input field ase(Message sidebar a ), oi jaygay just 1ta message dibi, jekono (Or tui ki kaj korli oita dite paros) ---- Like -> Category list show.

// Ekhno dekh kivabe kori,

// then just commit a click korlei kaj sesh--- 1dom simple. and then oi buttun ta te jokhon sync change likha uthbo tokhon oi button a click korbi,

// Ekhn abar change korsi dekhe dekh web.php chole ashche, jodi onno file a change kori tahole oitau ashbe, 

// Eta hocche first time uplaod korar por.

Route::get('/', function () {
    return view('welcome');
});
