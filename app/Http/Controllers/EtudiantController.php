<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;


class EtudiantController extends Controller
{

    public function liste_etudiant()
    {
        $etudiant = Etudiant::all();
        return view('liste', compact('etudiant'));
    }

    public function ajouter_etudiant()
    {
        return view('ajouter');
    }

    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'telephone' => 'required',
        ]);

        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->email = $request->email;
        $etudiant->telephone = $request->telephone;
        $etudiant->save();

        return redirect('/ajouter')->with('status', 'L\'étudiant a bien été ajouté avec succès.');
        
    }

    public function supprimer_etudiant($id)
    {
        $etudiant = Etudiant::find($id);

        if (!$etudiant) {
            return redirect()->route('etudiant.index')->with('error', 'Étudiant non trouvé.');
        }

        $etudiant->delete();

        return redirect()->route('etudiant.index')->with('status', 'Étudiant supprimé avec succès.');
    }
}