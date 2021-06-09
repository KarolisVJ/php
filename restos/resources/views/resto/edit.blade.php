<h1>You can now edit your restaurant</h1>
<form action="{{route('resto.update', [$resto])}}" method="POST">
Resto name: <input type="text" name="title" value="{{$resto->title}}">
Resto customers: <input type="text" name="customers" value="{{$resto->customers}}">
Resto employees: <input type="text" name="employees" value="{{$resto->employees}}">
<select name="menu_id">
@foreach ($dishes as $dish)
    
    <option value="{{$dish->id}}" @if ($resto->menu_id == $dish->id) selected @endif>{{$dish->title}}</option>
@endforeach
</select>
@csrf
<button type="submit">Edit</button>
</form>