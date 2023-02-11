<a href="{{url('/formule/créer')}}">AJOUTER UNE FORMULE</a>

@foreach ($formules as $formule)
    <li><a href='{{url("/formule/modifier/$formule->id")}}'>Modifier</a> {{$formule->libelle}} <a href="{{url("/formule/archiver/$formule->id")}}">SUPPRIMER</a></li>


@endforeach