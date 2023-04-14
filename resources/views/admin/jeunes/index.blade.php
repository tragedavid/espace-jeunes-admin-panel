<a href="{{url('/jeune/créer')}}">AJOUTER UN COMPTE JEUNE</a>

@foreach ($jeunes as $jeune)
    <li><a href='{{url("/jeune/modifier/$jeune->id")}}'>Modifier</a> {{$jeune->prenom}} {{$jeune->nom}} {{$jeune->mail}} <a href="{{url("/jeune/archiver/$jeune->id")}}">SUPPRIMER</a></li>
    
@endforeach