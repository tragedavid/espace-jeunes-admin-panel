<form action="{{url('/ticket/insérer')}}" method="POST">
    @csrf

    <input type="text" name="libelle" placeholder="libellé">
    @error('libelle')
        {{$message}}
    @enderror
    <select name="id_partenaire" id="partenaires">
        @foreach ($partenaires as $partenaire)
            <option value="{{$partenaire->id}}">{{$partenaire->libelle}}</option>
        @endforeach
    </select>
    <select name="id_formule" id="formules">
        @foreach ($formules as $formule)
            <option value="{{$formule->id}}">{{$formule->libelle}}</option>
        @endforeach
    </select>
    <input type="submit" value="SOUMETTRE">
</form>