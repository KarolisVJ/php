@extends('layouts.app')

@section('content')

<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Resto List</div>

               <div class="card-body">

<h1>How can I help you today?</h1>
<form method="POST" action="{{route('menu.store')}}">
Dish: <input type="text" name="dish">
Price: <input type="text" name="price">
Weight: <input type="text" name="weight">
Amount of meat: <input type="text" name="meat">
Description: <textarea name="about" id="summernote"></textarea>
@csrf
<button type="submit">Create</button>
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