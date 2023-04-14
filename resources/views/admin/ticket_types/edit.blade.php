<form action='{{url("/ticket/update/$ticket->id")}}' method="POST">
    @csrf

    <input type="text" name="libelle" placeholder="{{$ticket->libelle}}" value="{{$ticket->libelle}}">
    @error('libelle')
        {{$message}}
    @enderror
    <input type="text" name="libelle" placeholder="{{$ticket->code}}" value="{{$ticket->code}}">
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
    <select name="id_formule" id="formules">
        @foreach ($formules as $formule)
            <option 
                value="{{$formule->id}}"
                @if ($formule->id == $ticket->id_formule)
                    selected
                @endif
            >
                {{$formule->libelle}}
            </option>
        @endforeach
    </select>
    </select>
    <input type="submit" value="SOUMETTRE">
</form>