<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PostController;
use  App\Http\Controllers\UserController;
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

//******************************************************************************************************************************* */
//page web.php  ==>   hya ally bt7ddly al 7agat ally feh url ally aktbha w hro7 fen lma aktbha
//******************************************************************************************************************************* */

// Route::get('/', function () {  //fun get (write in url , call back fun ) // be3ml call l get lma request bta3y ykon mn noo3 get 
//     return view('welcome');     // calling fun asmha view ( bdwar f folder view (3la file welcome ))  or mmkn aktb any text ytb3o 
// });

// Route::get('/profile', function () {  //fun get (write in url , call back fun ) // be3ml call l get lma request bta3y ykon mn noo3 get 
//     return view('profile');     // calling fun asmha view ( bdwar f folder view (3la file profile ))  or mmkn aktb any text ytb3o 
// });
// //Route::view("/hi",'welcome');    //lo ktbt /hi in url , load page (welcome)

// Route::redirect("/test",'/profile');  // lma aktb /test in url  , bwadeny l /profile in url w y run el fun ally gwah




//Route::resource('posts', PostController::class) ;

// Route::get("/users/create",[UserController::class,"create"]) ; // exe page create 
// Route::post("/users",[UserController::class,"store"]) ;   // exe page store
// Route::get('/posts', [PostController::class,"index"])->name('posts');

// Route::get('/posts/{id}', [PostController::class,"show"]) ->name('posts.show');
// Route::get('/posts/{id}/edit',[PostController::class,"edit"]) ->name('posts.edit');


// Route::post('/posts/{id}', [PostController::class,"update"]) ;


// Route::get('/posts/create',  [PostController::class,"create"]) ;

// Route::post('/posts/{id}',  [PostController::class,"destroy"]) ;
// Route::post('/posts',  [PostController::class,"store"]) ;

Route::get('/',function (){
    return view('welcome');
});
Route::get('/dashboard',function (){
    return redirect('/posts');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
Route::resource("posts", PostController::class)->middleware('auth');