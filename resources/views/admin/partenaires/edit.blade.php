<form action='{{url("/partenaire/update/$partenaire->id")}}' method="POST">
    @csrf

    <input type="text" name="libelle" placeholder="{{$partenaire->libelle}}" value="{{$partenaire->libelle}}">
    @error('libelle')
        {{$message}}
    @enderror
    <input type="submit" value="SOUMETTRE">
</form>