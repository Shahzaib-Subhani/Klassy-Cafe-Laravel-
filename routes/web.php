<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Admincontroller;
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

Route::get('/', [Homecontroller::class,'index']);

Route::get('/redirects', [Homecontroller::class,'admin']);

Route::post("/addcart/{id}",[Homecontroller::class,'cart']);

Route::get('/cart/{id}', [Homecontroller::class,'showcart']);

Route::get('/deletecart/{id}', [Homecontroller::class,'delcart']);


// Gorup Routing
Route::group([],function(){
    
Route::get('/users', [Admincontroller::class,'index']);

Route::get('/deleteuser/{id}', [Admincontroller::class,'deluser']);

Route::get('/foods', [Admincontroller::class,'foodmenu']);

Route::get('/createfood', [Admincontroller::class,'create']);

Route::post('/uploadfood', [Admincontroller::class,'upload']);

Route::get('/deletefood/{id}', [Admincontroller::class,'del']);

Route::get('/editfood/{id}', [Admincontroller::class,'edit']);

Route::post('/update/{id}', [Admincontroller::class,'update']);

Route::get('/reservation', [Admincontroller::class,'reserve']);

Route::get('/reservation_watch', [Admincontroller::class,'watch']);

Route::get('/reservation_delete/{id}', [Admincontroller::class,'delreserve']);

Route::get('/chefs', [Admincontroller::class,'chef']);

Route::get('/createchef', [Admincontroller::class,'createchef']);

Route::post('/addchef', [Admincontroller::class,'Addchef']);

Route::get('/editchef/{id}', [Admincontroller::class,'editchef']);

Route::post('/updatechef/{id}', [Admincontroller::class,'updatechef']);

Route::get('/deletechef/{id}', [Admincontroller::class,'deletechef']);

});

// End Group Routin
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
