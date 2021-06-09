<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use App\Models\Mechanic;
use Illuminate\Http\Request;


class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $truck = Truck::all();
        if($request->sort) {
            if ('asc' == $request->order) {
                if ('year' == $request->sort) {
                    $truck = $truck->sortBy('year');
                    $order = 'asc';
                    $sort = 'year';
                }
                if ('plate' == $request->sort) {
                    $truck = $truck->sortBy('plate');
                    $order = 'asc';
                    $sort = 'plate';
                }
            }
            if ('desc' == $request->order) {
                if ('year' == $request->sort) {
                    $truck = $truck->sortByDesc('year');
                    $order = 'desc';
                    $sort = 'year';
                }
                if ('plate' == $request->sort) {
                    $truck = $truck->sortByDesc('plate');
                    $order = 'desc';
                    $sort = 'plate';
                }
            }
        }

        return view ('truck.index', ['order' => $order ?? '', 'sort' => $sort ?? ' ', 'trucks' => $truck]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mechanics = Mechanic::all();
        return view('truck.create', ['mechanics' => $mechanics]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $truck = new Truck;
        $truck->maker = $request->maker;
        $truck->plate = $request->plate;
        $truck->year = $request->year;
        $truck->notes = $request->notes;
        $truck->mechanic_id = $request->mechanic_id;
        $truck->save();
        return redirect()->route('truck.index')->with('success_message', 'Moki paspaust buttoną!..');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function show(Truck $truck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function edit(Truck $truck)
    {
        $mechanics = Mechanic::all();
        return view('truck.edit', ['truck' => $truck, 'mechanics' => $mechanics]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Truck $truck)
    {
        $truck->maker = $request->maker;
        $truck->plate = $request->plate;
        $truck->year = $request->year;
        $truck->notes = $request->notes;
        $truck->mechanic_id = $request->mechanic_id;
        $truck->save();
        return redirect()->route('truck.index')->with('success_message', 'Tai jau apdeitinai!..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function destroy(Truck $truck)
    {
        
        $truck->delete();
        return redirect()->route('truck.index')->with('success_message', 'Successfully dismissed!..');
    }
}
