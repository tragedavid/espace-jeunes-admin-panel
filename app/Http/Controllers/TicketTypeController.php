<?php

namespace App\Http\Controllers;

use App\Models\TicketType;
use Illuminate\Http\Request;
use App\Http\Requests\TicketTypeRequest;

class TicketTypeController extends Controller
{
    public function list() {
        $tickets = TicketType::all();

        return view('ticket_types.index')
        ->withTickets($tickets)
        ;
    }

    public function create() {
        return view('ticket_types.create');
    }

    public function insert(TicketTypeRequest $request) {
        $data = $request->all();
        TicketType::create($data);

        return redirect(url('/tickets'));
    }

    public function edit($id) {
        $ticket = TicketType::find($id);

        return view('ticket_types.edit')
        ->withTicket($ticket)
        ;
    }

    public function update(TicketTypeRequest $request, $id) {
        $ticket = TicketType::find($id);
        $query = $request->all();
        $ticket->libelle = $query['libelle'];
        $ticket->save();

        return redirect(url("/tickets"));
    }

    public function archive($id) {
        TicketType::destroy($id);

        return redirect(url('/tickets'));
    }
}
