<?php
use App\Http\Controllers\Dashboard\PostController;
//use App\Http\Controllers\dashboard\PostController;
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
    return view('welcome');
});


Route::get('/financiamiento', function () {
    return view('financiamiento');
})->name('financiamiento');


Route::get('/acerca-de', function () {
    return '<h1>Toda la información sobre nosotros</h1>';
});



Route::get('/hola/{nombre?}/{apellido?}', function ($nombre= "pepe", $apellido= "valera") {
    return "Hola: $nombre $apellido conocenos: <a href='".route('nosotros')."'>nosotros</a>";
});



Route::get('/sobre-nosotros', function () {
    return "<h1>Toda la información sobre nosotros</h1>";
})->name('nosotros');


Route::get('/home/{nombre?}/{apellido?}', function ($nombre= "Pepe", $apellido="Mujica") {
    //return view ('home')->with('nombre', $nombre)->with('apellido', $apellido);

    $Posts= ['Post1', 'Post2', 'Post3', 'Post4'];

    return view('home', ['nombre' => $nombre, 'apellido' => $apellido, 'Posts' => $Posts]);


})->name('home');


//Route::get('post', [PostController::class, 'index'])->name('post');

Route::prefix('admin')->group(function () {
    
    Route::resource('post', PostController::class);
});



