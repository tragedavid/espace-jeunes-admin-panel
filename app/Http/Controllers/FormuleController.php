<?php

namespace App\Http\Controllers;

use App\Models\Formule;
use App\Http\Requests\FormuleRequest;
use App\Http\Requests\FormuleTicketTypeRequest;
use App\Models\FormuleTicketType;
use App\Models\TicketType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FormuleController extends Controller
{
    public function list() {
        $formules = Formule::all();

        return view('admin.formules.index')
        ->withFormules($formules)
        ;
    }

    public function create() {
        return view('admin.formules.create');
    }

    public function insert(FormuleRequest $request) {
        $data = $request->all();
        Formule::create($data);

        return redirect(url('/formules'));
    }

    public function edit($id) {
        $formule = Formule::find($id);
        $ticketTypes = TicketType::all();

        return view('admin.formules.edit')
        ->withFormule($formule)
        ->withTicketTypes($ticketTypes)
        ;
    }

    public function update(FormuleRequest $request, $id) {
        $formule = Formule::find($id);
        $query = $request->all();
        $formule->libelle = $query['libelle'];
        $formule->save();
        // todo : /formule/{id} quand la page sera faite
        return redirect(url("/formules"));

    }

    public function addTicketIntoFormule(FormuleTicketTypeRequest $request, $id) {
        $data = $request->all();
        $data['id_formule'] = $id;
        FormuleTicketType::create($data);

        return redirect(url("/formule/modifier/$id"));
    }

    public function archive($id) {
        // todo : archiver plutôt que supprimer
        $formule = Formule::destroy($id);

        return redirect(url("/formules"));
    }
}
