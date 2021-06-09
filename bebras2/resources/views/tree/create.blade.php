
<form action="{{route('tree_store')}}" method="post">
Name: <input type="text" name="tree_name">
Height: <input type="text" name="tree_height">
Type: <select name="tree_type">
    <option value="1">Broadleaf</option>
    <option value="2">Conifer</option>
    <option value="3">Palm</option>
    </select>
<button type="submit">Submit</button>
@csrf
</form>