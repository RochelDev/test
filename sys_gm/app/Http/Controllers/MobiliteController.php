<?php

namespace App\Http\Controllers;

use App\Models\Mobilite;
use App\Models\DocumentMobilite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MobiliteController extends Controller
{
    public function create()
    {
        return view('mobilites.create');
    }

    public function store(Request $request)
    {
        // 1. Validation des données entrantes
        $validated = $request->validate([
            'nom_agent' => 'required|string|max:255',
            'poste_actuel' => 'required|string|max:255',
            'poste_souhaite' => 'required|string|max:255',
            'motif' => 'required|string|max:1000',
            'documents' => 'required|array',
            'documents.*' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
        ]);

        // 2. Création de la mobilité
        $mobilite = Mobilite::create([
            'nom_agent' => $validated['nom_agent'],
            'poste_actuel' => $validated['poste_actuel'],
            'poste_souhaite' => $validated['poste_souhaite'],
            'motif' => $validated['motif'],
        ]);

        // 3. Traitement et stockage des documents
        if ($request->hasFile('documents')) {
            foreach ($request->file('documents') as $file) {
                // Stockage du fichier dans 'public/documents_mobilite'
                $path = $file->store('documents_mobilite', 'public');

                // Enregistrement dans la table DocumentMobilite
                DocumentMobilite::create([
                    'mobilite_id' => $mobilite->id,
                    'type_document' => $file->getClientOriginalName(),
                    'chemin_fichier' => $path,
                ]);
            }
        }

        // 4. Redirection avec message de succès
        return redirect()->route('mobilites.create')->with('success', 'Votre demande de mobilité a été soumise avec succès.');
    }
}
