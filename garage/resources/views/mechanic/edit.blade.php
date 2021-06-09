
@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">PAVADINIMAS</div>

               <div class="card-body">
                  <form method="POST" action="{{route('mechanic.update',[$mechanic->id])}}">
                  Name: <input type="text" name="name" value="{{old('name',$mechanic->name)}}">
                  Surname: <input type="text" name="surname" value="{{old('surname',$mechanic->surname)}}">
                  @csrf
                  <button type="submit">EDIT</button>
                 </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection


