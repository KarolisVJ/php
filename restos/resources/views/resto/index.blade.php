@extends('layouts.app')

@section('content')

<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-12">
           <div class="card">
               <div class="card-header">Resto List</div>

               <div class="card-body">
                <ul class="list-group">
                @forelse ($restos as $resto)
                <li class="list-group-item">
                <div style="display: flex; justify-content: space-between;">   
                    {{$resto->title}} // {{$resto->customers}} // {{$resto->employees}} // {{$resto->restoMenu->title}} 
                    <form  method="get" action="{{route('resto.edit', [$resto->id])}}">
                    @csrf
                    @if (Auth::user())
                    <div style="display: flex; justify-content: flex-end;">
                        <button type="submit" style="margin-right: 10px;">Edit</button>
                    </form>
                        <form action="{{route('resto.destroy', [$resto])}}" method="post">
                    @csrf
                        <button type="submit">Delete</button>
                    </div>
                    @endif
                </div>
                </form>
                </li>
                @empty
                <h2>Nothing to show</h2>
                @endforelse
                </ul>
                
<form method="get" action="{{route('resto.index')}}">
<fieldset style="border: 1px solid">
    <legend>Sort by:</legend>
    <div class="inputs">
    <label for="_1">Customers</label><input type="radio" name="sort" value="customers" id="_1">
    <label for="_2">Employees</label><input type="radio" name="sort" value="employees"id="_2">
    <span class="border"></span>
    <label for="_3">up</label><input type="radio" name="order" value="asc" id="_3">
    <label for="_4">down</label><input type="radio" name="order" value="desc" id="_4">
    </div>
</fieldset>
        <fieldset class="sort">
                <legend>Filter by:</legend>
                  <div class="inputs">
                  
                        <select class="form-select" name="menu_id">
                          <option value="0">Select dish to filter</option>
                          @foreach ($dishes as $dish)
                              <option value="{{$dish->id}}" @if ($menu_id == $dish->id) selected @endif>{{$dish->title}} {{$dish->price}}</option>
                          @endforeach
                     </select>
                      @csrf
                      <button>Select2filter</button>
                      <button><a href="{{route('resto.index')}}" class="btn btn-info">Reset</a></button>
                        </form>
                  </div>
            </fieldset>

            </div>
           </div>
       </div>
   </div>
</div>
@endsection
