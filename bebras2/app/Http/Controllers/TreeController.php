<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use Illuminate\Http\Request;

class TreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trees = Tree::all();
        return view('tree.index', ['trees'=>$trees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tree.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tree = new Tree;
        $tree->name = $request->tree_name;
        $tree->height = $request->tree_height;
        $tree->type = $request->tree_type;
        $tree->save();
        return redirect()->route('tree_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function show(Tree $tree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function edit(Tree $tree)
    {
        return view('tree.edit', ['tree'=>$tree]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tree $tree)
    {
        $tree->name = $request->tree_name;
        $tree->height = $request->tree_height;
        $tree->type = $request->tree_type;
        $tree->save();
        return redirect()->route('tree_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tree $tree)
    {
        $tree->delete();
        return redirect()->route('tree_index');
    }
}
