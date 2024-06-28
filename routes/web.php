<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\EtudiantController;

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

Route::get('/mets',[RecetteController::class, 'index'])->name('mets.index');
Route::get('/mets/{met}', [RecetteController::class, 'details'])->name('mets.show');
Route::get('/search', [RecetteController::class, 'search'])->name('search');
Route::get('/Rejoinez-nous', [EtudiantController::class, 'index'])->name('rejoineznous');
Route::post('/ajouter', [EtudiantController::class, 'addstudent'])->name('add.store');
//Route::post('/ajouterUn')

//Route vers acceuil
Route::get('/recette', function() {
    return view('recette');
});

Route::get('/equipe',[EquipeController::class, 'equipe']);

Route::get('/connect', function(){
    return view('connect');
});



//pour gerer la bare de recherche
