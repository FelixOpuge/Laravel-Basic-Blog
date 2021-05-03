<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AboutsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashboardController;

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

/*
Route::get('/', function() {
    return view('welcome');
});
*/

Route::get("/about", [AboutsController::class, 'about']);
Route::view("contact", 'contact');

//Route::get("path", "controller file");
Route::get("/", [PagesController::class, 'index']);
Route::get("/services", [PagesController::class, 'services']);
/*
Route::get('/users/{id}/{name}', function ($id, $name){
    return 'This is user '.$name. ' with an id of ' .$id;
});
*/
Route::resource('posts', PostsController::class);



Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);


