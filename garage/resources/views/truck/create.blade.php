

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Create a job</div>

               <div class="card-body">
                <form method="POST" action="{{route('truck.store')}}">
                    Maker: <input type="text" name="maker">
                    Plate: <input type="text" name="plate">
                    Year: <input type="text" name="year">
                    Comment about it: <textarea name="notes" id="summernote"></textarea>
                    <select name="mechanic_id">
                        @foreach ($mechanics as $mechanic)
                            <option value="{{$mechanic->id}}" @if($mechanic->id == old('master_id', 0)) selected @endif>{{$mechanic->name}} {{$mechanic->surname}}</option>
                        @endforeach
                    @csrf
                    <button type="submit">ADD</button>
                </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection