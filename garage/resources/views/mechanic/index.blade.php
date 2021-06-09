

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">PAVADINIMAS</div>

               <div class="card-body">
               @foreach ($mechanics as $mechanic)
                <a href="{{route('mechanic.edit', [$mechanic])}}">{{$mechanic->name}} {{$mechanic->surname}}</a>
                
                <form method="post" action="{{route('mechanic.destroy', [$mechanic])}}">
                @csrf
                <button type="submit">Delete dis</button></form><br>
                @endforeach
              </div>
           </div>
       </div>
   </div>
</div>
@endsection