@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header"><h1>Masters</h1></div>

               <div class="card-body">
                <ul class="list-group">
                 @foreach ($masters as $master)
                  <li class="list-group-item">
                    <div class="list-bin">

                      <div class="list-title">
                        {{$master->name}} {{$master->surname}}
                      </div>

                      <div class="list-buttons">
                        <a class="btn btn-info" href="{{route('master.edit',[$master])}}">
                          Edit
                        </a>
                        <form method="POST" action="{{route('master.destroy', $master)}}">
                          @csrf
                          <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                      </div>

                    </div>

                  </li>
                @endforeach
                </ul>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

