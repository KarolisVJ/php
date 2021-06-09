<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\Resto;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes_uns = Menu::all();
        $dishes = $dishes_uns->sortBy('price');
        return view('menu.index', ['dishes'=>$dishes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           
        $validator = Validator::make($request->all(),
        [
            'title' => ['required', 'min:1', 'max:64'],
            'price' => ['required', 'integer'],
            'weight' => ['required', 'integer'],
            'meat' => ['required'],
            'about' 
        ],
         [
         'title.min' => 'Must have a name',
         'title.required' => "Surely, must have a name!",
         'customers.required' => 'Must have a capacity!',
         'employees.required' => 'Must have help!',
         'menu_id.required' => 'Must have smth on the menu!'
         ]
        );
        $dish = new Menu();
        $dish->title = $request->dish;
        $dish->price = $request->price;
        $dish->weight = $request->weight;
        $dish->meat = $request->meat;
        $dish->about = $request->about;
        $dish->save();
        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view ('menu.edit', ['menu'=>$menu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $menu->title = $request->dish;
        $menu->price = $request->price;
        $menu->weight = $request->weight;
        $menu->meat = $request->meat;
        $menu->about = $request->about;
        $menu->save();
        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        if($menu->menuRestos()->count()){
            return 'Trinti negalima, nes yra priskirtas';
        }
        
        $menu->delete();
        return redirect()->route('menu.index');
    }
}
