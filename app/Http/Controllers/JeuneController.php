<?php

namespace App\Http\Controllers;

use App\Http\Requests\JeuneRequest;
use App\Http\Requests\JeuneUpdateRequest;
use App\Models\Jeune;
use Illuminate\Http\Request;

class JeuneController extends Controller
{
    public function list() {
        $jeunes = Jeune::all();

        return view('jeunes.index')
        ->withJeunes($jeunes)
        ;
    }

    public function create() {
        return view('jeunes.create');
    }

    public function insert(JeuneRequest $request) {
        $data = $request->all();
        jeune::create($data);

        return redirect(url('/jeunes'));
    }

    public function edit($id) {
        $jeune = jeune::find($id);

        return view('jeunes.edit')
        ->withJeune($jeune)
        ;
    }

    public function update(JeuneUpdateRequest $request, $id) {
        $jeune = jeune::find($id);
        $query = $request->all();
        $jeune->nom = $query['nom'] ?? $jeune->nom;
        $jeune->prenom = $query['prenom'] ?? $jeune->prenom;
        $jeune->mail = $query['mail'] ?? $jeune->mail;
        $jeune->mdp = $query['mdp'] ?? $jeune->mdp;
        $jeune->save();
        // todo : /jeune/{id} quand la page sera faite
        return redirect(url("/jeunes"));

    }

    public function archive($id) {
        // todo : archiver plutôt que supprimer
        $jeune = jeune::destroy($id);

        return redirect(url("/jeunes"));
    }
}
