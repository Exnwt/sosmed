<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\dashboardcontroller;

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

Route::get('/welcome', function () {
    return view('welcome');
    
});
Route::get('/greeting', function () {
    return 'Hello World';
});



// Route::prefix('/login')->group(function(){
//     Route::get('/',function(){
//         if(\Auth::user()) return redirect('/');
//         return view('login');
//     })->name('login');

//     Route::post('/',[logincontroller::class, 'login']);
// });



// Route::prefix('/regis')->group(function(){
//     Route::get('/',function(){
//         return view('regis');
//     });

    Route::get('/regis',[logincontroller::class, 'regis']);
    Route::post('/registration',[logincontroller::class, 'registration']);

// })

route::get('/login',[logincontroller::class, 'login']);
route::post('/loginp',[logincontroller::class, 'loginp']);

// route::get('/dashboard',[dashboardcontroller::class,'home']);
// route::post('/post',[dashboardcontroller::class,'post']);

// Route::get('/comment/{id}', [dashboardcontroller::class, 'commentid']);

// route::post('/savcom/{id}',[dashboardcontroller::class,'savcom']);

// route::get('/commentdel/{id}',[dashboardcontroller::class,'dele']);

// route::middleware(cekbanned::class)->namespace('\App\Http\Controllers\Api')->group(function(){

route::get('/dashboard',[dashboardcontroller::class,'home']);
route::post('/post',[dashboardcontroller::class,'post'])->middleware(['cekbanned']);
Route::get('/comment/{id}', [dashboardcontroller::class, 'commentid'])->middleware(['cekbanned']);

route::post('/savcom/{id}',[dashboardcontroller::class,'savcom']);

route::get('/commentdel/{id}',[dashboardcontroller::class,'dele']);
// });


// Route::middleware('auth')->group(function(){
//     Route::get('/logout',function(){
//         Auth::logout();
//         return redirect('/login');
//     });

// });