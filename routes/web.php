<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\InstrumentoController;

use App\Models\Publicacion;
use App\Models\Instrumento;

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

// Ruta de la página principal, para usuarios no registrados.
Route::get('/', function () {
    return view('welcome');
});

// Rutas del administrador.
Route::get('/admin/nuevaPublicacion', function () {
    return view('admin/nuevaPublicacion');
});

Route::get('/admin/mostrarPublicaciones', function () {
    $datos['publicacions'] = Publicacion::paginate(5);
    return view('admin/mostrarPublicaciones', $datos);
});

Route::get('/admin/eliminarPublicacion', function () {
    $datos['publicacions'] = Publicacion::paginate(5);
    return view('admin/eliminarPublicacion', $datos);
});

Route::get('/admin/nuevoInstrumento', function () {
    return view('admin/nuevoInstrumento');
});

Route::get('/admin/mostrarInstrumentos', function () {
    $datos['instrumentos'] = Instrumento::paginate(5);
    return view('admin/mostrarInstrumentos', $datos);
});

Route::get('/admin/eliminarInstrumento', function () {
    $datos['instrumentos'] = Instrumento::paginate(5);
    return view('admin/eliminarInstrumento', $datos);
});

Route::get('/admin', ['middleware' => 'esadministrador', function () {
    return view('admin');
}]);

// Rutas de usuario regustrado.
Route::get('/home', function () {
    $datos['publicacions'] = Publicacion::paginate(5);
    $datos['instrumentos'] = Instrumento::paginate(5);
    return view('home', $datos);
});

Route::get('/usuario/perfilUsuario', function () {
    return view('usuario/perfilUsuario');
});

Route::get('/usuario/nuevoInstrumento', function () {
    return view('usuario/nuevoInstrumento');
});

Route::get('/usuario/mostrarInstrumentos', function () {
    $datos['instrumentos'] = Instrumento::paginate(5);
    return view('usuario/mostrarInstrumentos', $datos);
});

Route::get('/usuario/eliminarInstrumento', function () {
    $datos['instrumentos'] = Instrumento::paginate(5);
    return view('usuario/eliminarInstrumento', $datos);
});

Route::get('/usuario/guitarras', function () {
    $datos['instrumentos'] = Instrumento::paginate(5);
    return view('guitarras', $datos);
});

Route::resource('publicacion', PublicacionController::class);
Route::resource('instrumento', InstrumentoController::class);
Auth::routes();
