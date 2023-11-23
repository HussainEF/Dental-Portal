<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    //
    public function patientList(){
        return view('patient.patient_list');
    }

    //
    public function patientCaseDetails(){
        return view('patient.patient_case_details');
    }

    //
    public function patientProgress(){
        return view('patient.patient_progress');
    }
}
