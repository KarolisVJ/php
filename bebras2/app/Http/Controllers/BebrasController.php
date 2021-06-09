<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Session;
use Illuminate\Support\Facades\Session;

class BebrasController extends Controller
{
    public function sayHello() {
        return 'Hello is kontrolerio';
    }

    public function blade($param) {
        return view ('glasses.bebrai', ['parametras'=>$param]);
    }

    public function rodytiMinusatoriu(){
        $rez = Session::pull('rezultatas', 'nera');
        // Session::put('rezultatas', null);
        return view ('glasses.minusatorius', ['rezultatas'=>$rez]);
    }

    public function darytiMinusatoriu(Request $r) {
        $x = $r->minus_x;
        $y = $r->minus_y;
        $rez = $x - $y;
        Session::put('rezultatas', $rez);
        return redirect()->route('rodyti');
        
    }
}
