<a href="{{url('/ticket/créer')}}">AJOUTER UN TICKET</a>

@foreach ($tickets as $ticket)
    <li><a href='{{url("/ticket/modifier/$ticket->id")}}'>Modifier</a> {{$ticket->libelle}} <a href="{{url("/ticket/archiver/$ticket->id")}}">SUPPRIMER</a></li>


@endforeach