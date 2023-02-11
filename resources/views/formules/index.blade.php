<a href="{{url('/formule/créer')}}">AJOUTER UNE FORMULE</a>

@foreach ($formules as $formule)
    <li><a href='{{url("/formule/modifier/$formule->id")}}'>Modifier</li>{{$formule->libelle}}</a>
@endforeach