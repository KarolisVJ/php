<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;
use Validator;

class MechanicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mechanic = Mechanic::all();
        return view ('mechanic.index', ['mechanics' => $mechanic]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mechanic.create');
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
            'name' => ['required', 'min:3', 'max:64'],
            'surname' => ['required', 'min:3', 'max:64'],
        ],
        [ 'name.min' => "The name's too short!",
        'surname.min' => 'The surname is too short!'
        ]
        );
        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }

        $mechanic = new Mechanic;
        $mechanic->name = $request->name;
        $mechanic->surname = $request->surname;
        $mechanic->save();
        return redirect()->route('mechanic.index')->with('success_message', 'Kietai čia įrašei!..');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mechanic  $mechanic
     * @return \Illuminate\Http\Response
     */
    public function show(Mechanic $mechanic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mechanic  $mechanic
     * @return \Illuminate\Http\Response
     */
    public function edit(Mechanic $mechanic)
    {
        return view('mechanic.edit', ['mechanic' => $mechanic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mechanic  $mechanic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mechanic $mechanic)
    {
        $validator = Validator::make($request->all(),
        [
            'name' => ['required', 'min:3', 'max:64'],
            'surname' => ['required', 'min:3', 'max:64'],
        ],
        [ 'name.min' => "The name's too short!",
        'surname.min' => 'The surname is too short!'
        ]
        );
        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        } 

        $mechanic->name = $request->name;
        $mechanic->surname = $request->surname;
        $mechanic->save();
        return redirect()->route('mechanic.index')->with('success_message', 'Tai jau apdeitinai!..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mechanic  $mechanic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mechanic $mechanic)
    {
        if($mechanic->mechanicTruck()->count()){
            return redirect()->route('mechanic.index')->with('info_message', 'Cant fire the mechanic till they have finished all the jobs');
        }

        $mechanic->delete();
        return redirect()->route('mechanic.index')->with('success_message', 'Successfully sacked!!.');
    }
}
