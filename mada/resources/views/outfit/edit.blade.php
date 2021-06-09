  
@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-9">
           <div class="card">
               <div class="card-header"><h1>Edit New Outfit</h1></div>
               <div class="card-body">
                <form method="POST" action="{{route('outfit.update', $outfit)}}">
                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" name="outfit_type" class="form-control" value="{{old('outfit_type', $outfit->type)}}">
                        <small class="form-text text-muted">Outfit type (dress, shorts etc.)</small>
                    </div>
                    <div class="form-group">
                        <label>Color</label>
                        <input type="text" name="outfit_color" class="form-control" value="{{old('outfit_color', $outfit->color)}}">
                        <small class="form-text text-muted">Ottfit color</small>
                    </div>
                    <div class="form-group">
                        <label>Size</label>
                        <input type="text" name="outfit_size" class="form-control" value="{{old('outfit_size', $outfit->size)}}">
                        <small class="form-text text-muted">Otfit size (integer number 12, 48 etc.)</small>
                    </div>
                    <div class="form-group">
                        <label>About</label>
                        <textarea name="outfit_about" id="summernote">{{old('outfit_about', $outfit->about)}}</textarea>
                        <small class="form-text text-muted">Client or Master comments about outfit</small>
                    </div>
                    <div class="form-group">
                        <label>Master</label>
                        <select class="form-select" name="master_id">
                            <option value="0">Select Master</option>
                            @foreach ($masters as $master)
                                <option value="{{$master->id}}" @if($master->id == old('master_id', $outfit->master_id)) selected @endif>{{$master->name}} {{$master->surname}}</option>
                            @endforeach
                        </select>
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-primary">EDIT</button>
                </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection



