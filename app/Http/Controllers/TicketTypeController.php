<?php

namespace App\Http\Controllers;

use App\Models\TicketType;
use Illuminate\Http\Request;
use App\Http\Requests\TicketTypeRequest;
use App\Models\Partenaire;

class TicketTypeController extends Controller
{
    public function list() {
        $tickets = TicketType::all();

        return view('ticket_types.index')
        ->withTickets($tickets)
        ;
    }

    public function create() {
        $partenaires = Partenaire::all();
        return view('ticket_types.create')
        ->withPartenaires($partenaires)
        ;
    }

    public function insert(TicketTypeRequest $request) {
        $data = $request->all();
        TicketType::create($data);

        return redirect(url('/tickets'));
    }

    public function edit($id) {
        $ticket = TicketType::find($id);
        $partenaires = Partenaire::all();

        return view('ticket_types.edit')
        ->withTicket($ticket)
        ->withPartenaires($partenaires)
        ;
    }

    public function update(TicketTypeRequest $request, $id) {
        $ticket = TicketType::find($id);
        $query = $request->all();
        $ticket->libelle = $query['libelle'];
        $ticket->id_partenaire = $query['id_partenaire'];
        $ticket->save();

        return redirect(url("/tickets"));
    }

    public function archive($id) {
        TicketType::destroy($id);

        return redirect(url('/tickets'));
    }
}
