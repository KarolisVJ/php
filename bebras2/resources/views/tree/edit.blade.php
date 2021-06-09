
<form action="{{route('tree_update', $tree)}}" method="post">
Name: <input type="text" name="tree_name" value="{{$tree->name}}">
Height: <input type="text" name="tree_height" value="{{$tree->height}}">
Type: <select name="tree_type">
    <option value="1" @if ($tree->type == 1) selected @endif>Broadleaf</option>
    <option value="2" @if ($tree->type == 2) selected @endif>Conifer</option>
    <option value="3" @if ($tree->type == 3) selected @endif>Palm</option>
    </select>
<button type="submit">Submit</button>
@csrf
</form>