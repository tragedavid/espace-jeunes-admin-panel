<a href="{{url('/partenaire/créer')}}">AJOUTER UN PARTENAIRE</a>

@foreach ($partenaires as $partenaire)
    <li><a href='{{url("/partenaire/modifier/$partenaire->id")}}'>Modifier</a> {{$partenaire->libelle}} <a href="{{url("/partenaire/archiver/$partenaire->id")}}">SUPPRIMER</a></li>


@endforeach