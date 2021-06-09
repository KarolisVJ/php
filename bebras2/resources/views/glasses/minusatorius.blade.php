@extends('layouts.app')


@section('content')
<h3>Gaunasi {{$rezultatas}}</h3>

<form action="{{route('rodyti')}}" method="post">
XXX: <input type="text" name="minus_x">
YYY: <input type="text" name="minus_y">
<button type="submit">Minusuoti</button>
@csrf
</form>
@endsection