<form action="{{url('/jeune/insérer')}}" method="POST">
    @csrf

    <input type="text" name="nom" placeholder="nom">
    @error('nom')
        {{$message}}
    @enderror
    <input type="text" name="prenom" placeholder="prénom">
    @error('prenom')
        {{$message}}
    @enderror
    <input type="text" name="mail" placeholder="e-mail">
    @error('mail')
        {{$message}}
    @enderror
    <input type="text" name="mdp" placeholder="mdp">
    @error('mdp')
        {{$message}}
    @enderror
    <input type="submit" value="SOUMETTRE">
</form>