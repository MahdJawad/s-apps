<?php

  

use Illuminate\Support\Facades\Route;

  

use App\Http\Controllers\HomeController;

use App\Http\Controllers\RoleController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\FonctionController;
use App\Http\Controllers\AvancementController;
use App\Http\Controllers\TypeContratController;
use App\Http\Controllers\EchelonController;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\TypeCongeController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\AffectationController;
use App\Http\Controllers\AbscenceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\GrilleController;
use App\Http\Controllers\BanqueController;
use App\Http\Controllers\ChargeFamilleController;
use App\Http\Controllers\FullCalenderController;

  

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

    return view('auth.login');

});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('employes', EmployeController::class);
    Route::resource('categories', CategorieController::class);
    Route::resource('contrats', ContratController::class);
    Route::resource('fonctions', FonctionController::class);
    Route::resource('directions', DirectionController::class);
    Route::resource('types', TypeContratController::class);
    Route::resource('echelons', EchelonController::class);
    Route::resource('avancements', AvancementController::class);
    Route::resource('type', TypeCongeController::class);
    Route::resource('charges', ChargeFamilleController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('missions', MissionController::class);
    Route::resource('banques', BanqueController::class);
    Route::resource('affectations', AffectationController::class);
    Route::resource('grilles', GrilleController::class);
    Route::resource('departements', DepartementController::class);
    Route::resource('conges', CongeController::class);
    Route::resource('abscences', AbscenceController::class);
    Route::resource('banques', BanqueController::class);
    Route::resource('banques', ChargeFamilleController::class);
    Route::resource('departements', DepartementController::class);
    Route::resource('full-calender', FullCalenderController::class);







});