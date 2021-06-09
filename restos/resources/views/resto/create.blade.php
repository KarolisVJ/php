@extends('layouts.app')

@section('content')

<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Resto List</div>

               <div class="card-body">

<h1>Choose and create your restaurant</h1>
<form action="{{route('resto.store')}}" method="POST">
Resto name: <input type="text" name="title">
Resto customers: <input type="text" name="customers">
Resto employees: <input type="text" name="employees">
<select name="menu_id">
@foreach ($dishes as $dish)
    
    <option value="{{$dish->id}}">{{$dish->title}}</option>
@endforeach
</select>
@csrf
<button type="submit">Create</button>
</form>


</div>
           </div>
       </div>
   </div>
</div>
@endsection