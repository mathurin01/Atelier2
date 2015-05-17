<?php

namespace App\Http\Controllers;

class PlayerController extends Controller {

    public function show($n)
    {
        return view('player')->with('numero', $n);
    }

}