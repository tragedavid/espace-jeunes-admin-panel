<form action='{{url("/formule/update/$formule->id")}}' method="POST">
    @csrf

    <input type="text" name="libelle" placeholder="{{$formule->libelle}}" value="{{$formule->libelle}}">
    @error('libelle')
        {{$message}}
    @enderror
    <input type="submit" value="SOUMETTRE">
</form>
<form action="{{url("/formule/ajouterticket/$formule->id")}}" method="POST">
    @csrf

    <select name="id_ticket_type" id="id_ticket_type">
        @foreach ($ticketTypes as $ticketType)
            <option value="{{$ticketType->id}}">{{$ticketType->libelle}}</option>
        @endforeach
    </select>

    <input type="number" name="quantite" placeholder="quantite">
    {{-- @error('quantite')
        {{$message}}
    @enderror --}}
    <input type="submit" value="SOUMETTRE">
</form>