<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseController extends Controller
{
    //
    public function caseAdd(){
        return view('cases.case_add');
    }
    
    public function casesDashboard(){
        return view('cases.cases_dashboard');
    }

}