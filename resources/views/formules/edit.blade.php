<form action='{{url("/formule/update/$formule->id")}}' method="POST">
    @csrf

    <input type="text" name="libelle" placeholder="{{$formule->libelle}}" value="{{$formule->libelle}}">
    @error('libelle')
        {{$message}}
    @enderror
    <input type="submit" value="SOUMETTRE">
</form>