<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoyalityController extends Controller
{
    //
    public function loyality(Request $request){
        $cardNumber = $request->value;
        return view('loyality.loyality', ['cardNumber' => $cardNumber]);
    }
}