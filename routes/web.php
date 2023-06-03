<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

// Route::get('/hello',function(){
// return 'hello world';
// });

// Route::get('/',function(){
//   return view('homePage');
// });

// Route::get('/about',function(){
//     return view('aboutUs');
// });

// Route::get('/','SiteController@Home');

// Route::get('/','SiteController@');

 
// Route::get('/aboutUs', [SiteController::class, 'About']);

Route::get("/",function(){
    return view('homePage');
});      

// Route::view("",'homePage');
Route::view("aboutUs",'aboutUs');
Route::view("contact",'contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
