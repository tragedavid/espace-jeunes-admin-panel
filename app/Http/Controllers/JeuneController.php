<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddFormuleToJeuneRequest;
use App\Http\Requests\JeuneRequest;
use App\Http\Requests\JeuneUpdateRequest;
use App\Models\Formule;
use App\Models\FormuleTicketType;
use App\Models\Jeune;
use App\Models\Ticket;
use App\Models\TicketType;
use Illuminate\Http\Request;

class JeuneController extends Controller
{
    public function list() {
        $jeunes = Jeune::all();

        return view('admin.jeunes.index')
        ->withJeunes($jeunes)
        ;
    }

    public function create() {
        return view('admin.jeunes.create');
    }

    public function insert(JeuneRequest $request) {
        $data = $request->all();
        Jeune::create($data);

        return redirect(url('/jeunes'));
    }

    public function edit($id) {
        $jeune = jeune::find($id);
        $formules = Formule::all();
        $ticket_types = TicketType::all();

        return view('admin.jeunes.edit')
        ->withJeune($jeune)
        ->withFormules($formules)
        ->withTicketTypes($ticket_types)
        ;
    }

    public function update(JeuneUpdateRequest $request, $id) {
        $jeune = Jeune::find($id);
        $query = $request->all();
        $jeune->nom = $query['nom'] ?? $jeune->nom;
        $jeune->prenom = $query['prenom'] ?? $jeune->prenom;
        $jeune->mail = $query['mail'] ?? $jeune->mail;
        $jeune->mdp = $query['mdp'] ?? $jeune->mdp;
        $jeune->save();
        // todo : /jeune/{id} quand la page sera faite
        return redirect(url("/jeunes"));

    }

    public function addFormule(AddFormuleToJeuneRequest $request, $id_jeune) {
        $jeune = Jeune::find($id_jeune);
        $data = $request->all();
        $ticketTypes = TicketType::where('id_formule', $data['id_formule'])->get();
        foreach ($ticketTypes as $ticketType) {
            $data['id_ticket_type'] = $ticketType->id;
            // todo : demander s'ils préfèrent entrer le code à la main
            do {
                $data['code'] = mt_rand(100000000, 999999999);
            }
            while (Ticket::where('code', $data['code'])->exists());
            $data['id_jeune'] = $id_jeune;
            Ticket::create($data);
        }
        return redirect(url("/jeune/modifier/$id_jeune"));
    }

    public function archive($id) {
        // todo : archiver plutôt que supprimer
        $jeune = jeune::destroy($id);

        return redirect(url("/jeunes"));
    }
}
