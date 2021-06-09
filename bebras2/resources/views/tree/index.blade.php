<ul>
@foreach ($trees as $tree)
    <li>{{$tree->name}} {{$tree->height}}  {{$tree->type}}
    <a href="{{route('tree_edit', $tree)}}">[dead-it]</a>
    <form action="{{route('tree_destroy', $tree)}}" method="post">
    @csrf
    <button type="submit">DeL</button>
    </form>

    </li>
@endforeach
</ul>