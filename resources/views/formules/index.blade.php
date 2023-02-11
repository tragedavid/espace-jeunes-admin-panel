<a href="{{url('/formule/créer')}}">AJOUTER UNE FORMULE</a>

@foreach ($formules as $formule)
    <li>{{$formule->libelle}}</li>
@endforeach