<form action="{{url('/ticket/insérer')}}" method="POST">
    @csrf

    <input type="text" name="libelle">
    @error('libelle')
        {{$message}}
    @enderror
    <select name="id_partenaire" id="partenaires">
        @foreach ($partenaires as $partenaire)
            <option value="{{$partenaire->id}}">{{$partenaire->libelle}}</option>
        @endforeach
    </select>
    <input type="submit" value="SOUMETTRE">
</form>