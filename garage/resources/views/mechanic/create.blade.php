@extends('layouts.app')

@section('content')
<!-- <div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8"> -->
           <div class="card">
               <div class="card-header">Kreate a mechanic</div>

               <div class="card-body">
                 
                  <form method="POST" action="{{route('mechanic.store')}}">
                     Name: <input type="text" name="name" value="{{old('name')}}">
                     Surname: <input type="text" name="surname" value="{{old('surname')}}">
                     @csrf
                     <button type="submit">Conceive a mechanic</button>
                  </form>
               </div>
           </div>
       <!-- </div>
   </div>
</div> -->
@endsection
