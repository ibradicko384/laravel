<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant'])->name('liste');
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant']);
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']);
Route::get('/etudiant/{id}/delete', [EtudiantController::class, 'delete'])->name('supprimer');


Route::get('/etudiant/{id}/modifier', [EtudiantController::class, 'modifier'])->name('modifier');
Route::post('/etudiant/{id}/mettre-a-jour', [EtudiantController::class, 'mettreAJour'])->name('mettre_a_jour');


Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant'])->name('etudiant');


Route::get('/etudiant/{id}', [EtudiantController::class, 'detail'])->name('detail');










