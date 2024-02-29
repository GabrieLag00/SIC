<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Student\StudentsController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Faker\Guesser\Name;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware('auth')->group(function() {
//incluye todo los metodos
Route::resource('estudiantes', StudentController::class);//->middleware('auth');

//Al entrar a la ruta alumnos se llamara al controlador, el formulario
//Route::middleware('auth')->group(function (){
Route::get('/alumnos', [StudentsController::class, 'index']);

//Almacena los datos
Route::post('/alumnos', [StudentsController::class, 'store']);
//});
});
// Añade esta línea
Route::view('/no-autorizado', 'no-autorizado')->name('no-autorizado');

require __DIR__.'/auth.php';
