<form class="" action="/actors/search​​" method="get">
 <input type="text" name="busqueda" value="">
 <button type="submit" name="button">Buscar</button>
</form>


@foreach ($actores as $actor)
{{-- $actores es una variable que cree con el with en el controller--}}
<a href="actors/{{$actor->id}}"> {{ $actor->first_name }} </a> <br>
@endforeach
