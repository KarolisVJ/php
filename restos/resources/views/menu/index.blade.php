What's up?

@foreach ($dishes as $dish)

{{$dish->title}} || {{$dish->price}} || {{$dish->about}} 
    <form method="get" action="{{route('menu.edit', [$dish])}}">
    @csrf
    <button type="submit">Edit</button><br>
    
    </form>
    <form method="post" action="{{route('menu.destroy', [$dish])}}">
    @csrf
    <button type="submit">Delete</button><br>
    
    </form>
    
@endforeach