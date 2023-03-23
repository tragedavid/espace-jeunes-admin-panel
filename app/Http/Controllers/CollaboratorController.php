<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartenaireRequest;
use App\Models\Partenaire;
use Illuminate\Http\Request;

class CollaboratorController extends Controller
{
    public function list() {
        $partenaires = Partenaire::all();

        return view("partenaires.index")
        ->withPartenaires($partenaires);
        ;
    }

    public function create() {
        return view("partenaires.create");
    }

    public function insert(PartenaireRequest $request) {
        $data = $request->all();
        Partenaire::create($data);

        return redirect(url('/partenaires'));
    }

    public function edit($id) {
        $partenaire = Partenaire::find($id);

        return view('partenaires.edit')
        ->withPartenaire($partenaire)
        ;
    }

    public function update(PartenaireRequest $request, $id) {
        $partenaire = Partenaire::find($id);
        $query = $request->all();
        $partenaire->libelle = $query['libelle'];
        $partenaire->save();

        return redirect(url("/partenaires"));

    }

    public function archive($id) {
        Partenaire::destroy(($id));

        return redirect(url("/partenaires"));
    }
}
