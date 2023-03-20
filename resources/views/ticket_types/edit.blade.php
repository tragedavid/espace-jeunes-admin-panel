<form action='{{url("/ticket/update/$ticket->id")}}' method="POST">
    @csrf

    <input type="text" name="libelle" placeholder="{{$ticket->libelle}}" value="{{$ticket->libelle}}">
    @error('libelle')
        {{$message}}
    @enderror
    <input type="submit" value="SOUMETTRE">
</form>