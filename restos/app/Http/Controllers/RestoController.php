<?php

namespace App\Http\Controllers;


use App\Models\Resto;
use Illuminate\Http\Request;
use App\Models\Menu;
use Validator;

class RestoController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

  
        // $restos_uns = Resto::all();
        // $restos = $restos_uns->sortBy('title');

        $dishes = Menu::all();
        $restos = Resto::all();
        $menu_id = 0;
        if($request->menu_id) {
            $restos = Resto::where('menu_id', $request->menu_id)->get();
            $menu_id = $request->menu_id;
        } else {
            $restos = Resto::all();
            $restos = $restos->sortBy('title');
            $menu_id = 0;
        }

       
        if ($request->sort) {
          

            if ($request->sort == 'customers') {
            $restos = $restos->sortBy('customers');       
            }
            if ($request->sort == 'employees') {
                $restos = $restos->sortBy('employees');
            }
        } 
        else {
            $restos = $restos->sortBy('title');
        }
 
        return view('resto.index', ['restos'=>$restos, 'dishes' =>$dishes, 'menu_id'=>$menu_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dishes_uns = Menu::all();
        $coll = collect($dishes_uns);
        $dishes = $coll->sortBy('title');
        return view('resto.create', ['dishes'=>$dishes]);
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
           'customers' => ['required', 'integer'],
           'employees' => ['required', 'integer'],
           'menu_id' => ['required']
       ],
        [
        'title.min' => 'Must have a name',
        'title.required' => "Surely, must have a name!",
        'customers.required' => 'Must have a capacity!',
        'employees.required' => 'Must have help!',
        'menu_id.required' => 'Must have smth on the menu!'
        ]
       );
       if ($validator->fails()) {
           $request->flash();
           return redirect()->back()->withErrors($validator);
       }

        $resto = new Resto();
        $resto->title = $request->title;
        $resto->customers = $request->customers;
        $resto->employees = $request->employees;
        $resto->menu_id = $request->menu_id;
        $resto->save();
        return redirect()->route('resto.index')->with('success_message', 'restoranas Sėkmingai įrašytas');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resto  $resto
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {       $item = $request->toSort;
            $dishes = Menu::all();
            $restos = Resto::all();
            $filtered = $restos->filter(function($item, $key){
                global $item;
                return data_get($item, 'menu_id') == $item;
            });
            $restos = $filtered->all();
            return redirect()->route('resto.index', ['restos'=>$restos, 'dishes' =>$dishes]);

        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resto  $resto
     * @return \Illuminate\Http\Response
     */
    public function edit(Resto $resto)
    {
        $dishes = Menu::all();
        return view('resto.edit', ['resto'=>$resto, 'dishes'=>$dishes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resto  $resto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resto $resto)
    {
        $resto->title = $request->title;
        $resto->customers = $request->customers;
        $resto->employees = $request->employees;
        $resto->menu_id = $request->menu_id;
        $resto->save();
        return redirect()->route('resto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resto  $resto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resto $resto)
    {
        $resto->delete();
        return redirect()->route('resto.index');
    }
}
