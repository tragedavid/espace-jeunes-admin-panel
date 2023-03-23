<form action='{{url("/ticket/update/$ticket->id")}}' method="POST">
    @csrf

    <input type="text" name="libelle" placeholder="{{$ticket->libelle}}" value="{{$ticket->libelle}}">
    @error('libelle')
        {{$message}}
    @enderror
    <select name="id_partenaire" id="partenaires">
        @foreach ($partenaires as $partenaire)
            <option 
                value="{{$partenaire->id}}"
                @if ($partenaire->id == $ticket->id_partenaire)
                    selected
                @endif
            >
                {{$partenaire->libelle}}
            </option>
        @endforeach
    </select>
    <input type="submit" value="SOUMETTRE">
</form>