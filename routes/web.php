<?php

use Illuminate\Support\Facades\Route;
//Ruta para tener acceso a la clase del controlador EmpleadoController de las vistas de la carpeta empleado
use App\Http\Controllers\EmpleadoController;
//Ruta para tener acceso a la clase del controlador HomeController de la vista home
use App\Http\Controllers\HomeController;
//Ruta para tener acceso a la clase del controlador RolController
use App\Http\Controllers\RolController;
//Ruta para tener acceso a la clase del controlador UsuarioController
use App\Http\Controllers\UsuarioController;
//Ruta para tener acceso a la clase del controlador UsuarioController
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


//Al iniciar sesión redirige a la vista home
Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

//Muestra la vista de usuarios y roles
Route::resource('/dashboard', DashboardController::class)->middleware('auth');

//Muestra la vista home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Desactiva la vista de la opciòn reset y llama las vistas de la carpeta auth
Auth::routes(['register'=>true,'reset'=>false]);

//Acede a todas las rutas del controlador para mostrar sus vistas
Route::resource('/empleado', EmpleadoController::class)->middleware('auth');

//Rutas para crud usuario y roles
Route::resource('/usuarios', UsuarioController::class)->middleware('auth');
Route::resource('/roles', RolController::class)->middleware('auth');

Route::get('/community', function(){
    return view('comunidad');
});

Route::get('/first_steps', function(){
    return view('primerospasos');
});

//Verifica el rol de un usuario para dar acceso a la ruta    
/*Route::group(['middleware' => ['role:Administrador']], function () {
    //
});*/

/*if (Auth::check(true)) {
    Auth::routes(['register'=>true,'reset'=>false]);
}*/