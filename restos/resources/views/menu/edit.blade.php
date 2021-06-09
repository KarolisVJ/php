@extends('layouts.app')

@section('content')

<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Resto List</div>

               <div class="card-body">
<h1>You now can edit your dishes</h1>
<form method="POST" action="{{route('menu.update', [$menu])}}">
Dish: <input type="text" name="dish" value="{{$menu->title}}">
Price: <input type="text" name="price" value="{{$menu->price}}">
Weight: <input type="text" name="weight" value="{{$menu->weight}}">
Amount of meat: <input type="text" name="meat" value="{{$menu->weight}}">
Description: <textarea id="summernote" name="about">{{$menu->about}}</textarea>
@csrf
<button type="submit">Edit</button>
</form>

</div>
           </div>
       </div>
   </div>
</div>
<script>
$(document).ready(function() {
   $('#summernote').summernote();
 });
</script>
@endsection