<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoyalityController extends Controller
{
    //
    public function loyalityList(){
        return view('loyality.loyality_list');
    }
    //
    public function loyalityPointsAvailRequest(){
        return view('loyality.loyality_points_avail');
    }
    //
    public function loyalityNotification(){
        return view('loyality.loyality_notification');
    }
}
