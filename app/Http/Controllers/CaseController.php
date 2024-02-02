<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseController extends Controller
{
    //Return the Dashboard Page View
    public function casesDashboard(){
        return view('cases.cases_dashboard');
    }

    //Return the Case Add Page View
    public function caseAdd(){
        return view('cases.case_add');
    }

    //Return the Case Detail of Specific Case Number
    public function caseDetail(Request $data){
        $id = $data['caseId'];
        return view('cases.case_detail', ['caseId' => $id]);
    }

    //Storing the RX form Data into Database and Return the Unique CaseID as a Pop-up
    public function caseSave(Request $request){
        dd($request);
        dd( 'mudassar hussain');
        return redirect()->intended('dashboard');
    }
}