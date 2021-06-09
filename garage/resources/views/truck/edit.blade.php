

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">PAVADINIMAS</div>

               <div class="card-body">
                <form method="POST" action="{{route('truck.update', [$truck->id])}}">
                    <div class="form-group">
                    <label>Markė</label>
                    <input type="text" name="maker" class="form-control" value="{{$truck->maker}}">
                    <small class="form-text text-muted">Markė</small>
                    </div>
                    Plate: <input type="text" name="plate" value="{{$truck->plate}}">
                    Year: <input type="text" name="year" value="{{$truck->year}}">
                    Comment about it: <textarea name="notes" id="summernote">{{$truck->notes}}</textarea>
                    <select name="mechanic_id">
                        @foreach ($mechanics as $mechanic)
                            <option value="{{$mechanic->id}}" @if ($mechanic->id == $truck->mechanic_id) selected @endif>{{$mechanic->name}} {{$mechanic->surname}}</option>
                        @endforeach
                    @csrf
                    <button type="submit">EDIT</button>
                    </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection