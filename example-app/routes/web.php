
<?php

use App\Http\Controllers\CursosController;
use App\Http\Controllers\UsuariosController;
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

Route::get('/',[CursosController::class,'index'])->name('welcome');
Route::get('/cursos',[CursosController::class,'cursos']);
Route::get('cursos/{id}',[CursosController::class,'show']);
Route::get('/frameworks',[CursosController::class,'frameworks']);
Route::get('/sejaparceiro',[CursosController::class,'sejaparceiro']);
Route::get('/cadastroCursos',[CursosController::class,'cadastroCursos'])->name('cadastroCursos');
Route::post('/salvarCurso',[CursosController::class,'store'])->name('salvarCurso');



Route::get('/login',[UsuariosController::class,'login'])->name('login');
Route::post('/logar',[UsuariosController::class,'auth'])->name('logar');
Route::get('/cadastrar',[UsuariosController::class,'cadastrar'])->name('cadastrar');
Route::post('/registrar',[UsuariosController::class,'store'])->name('registrar');
Route::get('/logout',[UsuariosController::class,'logout'])->name('logout');




