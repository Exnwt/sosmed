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

route::get('/',[logincontroller::class, 'login']);
route::post('/loginp',[logincontroller::class, 'loginp']);

route::get('/dashboard',[dashboardcontroller::class,'home']);
route::post('/post',[dashboardcontroller::class,'post']);

    Route::get('/',[HomeController::class, 'posts']);

    Route::prefix('/post')->group(function(){
        Route::post('/',[HomeController::class, 'savePost']);

        Route::get('/e/{id}',[HomeController::class, 'editPost']);
        Route::post('/e/{id}',[HomeController::class, 'savePost']);

        Route::get('/d/{id}',[HomeController::class, 'deletePost']);

        Route::get('/v/{id}',[HomeController::class, 'showPost']);

        Route::post('/{post}/comment',[HomeController::class, 'saveComment']);

});


// Route::middleware('auth')->group(function(){
//     Route::get('/logout',function(){
//         Auth::logout();
//         return redirect('/login');
//     });

// });