<form action='{{url("/jeune/update/$jeune->id")}}' method="POST">
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

<h2>Ajouter une formule à {{$jeune->prenom}} {{$jeune->nom}}</h2>

<form action="{{url("/jeune/insererformule/$jeune->id")}}" method="POST">
    @csrf

    <select name="id_formule" id="formule">
        @foreach ($formules as $formule)
            <option value="{{$formule->id}}">{{$formule->libelle}}</option>
        @endforeach
    </select>

    <input type="submit" value="AJOUTER FORMULE">
</form>