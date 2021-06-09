
@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Index the trucks!</div>
               <form action="{{route('truck.index')}}" method="GET">
                <fieldset class="sort">
                <legend>Sort by:</legend>
                  <div class="inputs">
                    <label for="_1">Plate</label><input type="radio" name="sort" value="plate" 
                    @if ($sort == 'plate') checked @endif
                    id="_1">
                    <label for="_2">Year</label><input type="radio" name="sort" value="year"
                    @if ($sort == 'year') checked @endif
                      id="_2">
                    <span class="border"></span>
                    <label for="_3">Ascend</label><input type="radio" name="order" value="asc" 
                    @if ($order == '' || $order == 'asc') checked @endif
                     id="_3">
                    <label for="_4">Descend</label><input type="radio" name="order" value="desc"
                    @if ($order == 'desc') checked @endif
                    id="_4">
                  </div>
                </fieldset>
                <button class="btn btn-info">Sort</button>
                <a href="{{route('truck.index')}}" class="btn btn-info">Reset</a>
               </form>
               </div>
               <div class="card-body">
               <ul class="list-group">
                    @foreach ($trucks as $truck)
                        
                            <li class="list-group-item">
                            {{$truck->maker}} | {{$truck->plate}} | {{$truck->year}} | {{$truck->truckMechanic->name}} {{$truck->truckMechanic->surname}} 
                            <div class="list-buttons">
                                <form method="get" action="{{route('truck.edit', [$truck])}}">
                                <button type="submit" >Edit</button>
                                </form>
                                <form method="post" action="{{route('truck.destroy', [$truck])}}">
                                @csrf
                                <button type="submit">Del nx</button>
                                </form>
                             
                            </div>
                            </li>
                            

                        @endforeach
                </ul>
                </div>
                </div>
               </div>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection