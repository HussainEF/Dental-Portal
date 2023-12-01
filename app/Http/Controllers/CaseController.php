<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseController extends Controller
{
    //Return the Case Add Page View
    public function caseAdd(){
        return view('cases.case_add');
    }
    
    //Return the Dashboard Page View
    public function casesDashboard(){
        return view('cases.cases_dashboard');
    }

    //Storing the RX form Data into Database and Return the Unique CaseID as a Pop-up
    public function caseSave(Request $request){
        // $request->validate([
        //     //Patient Information Section
        //     'patient_name' => 'required',
        //     'age' => 'required',
        //     'gender' => 'required',
        //     'nature_of_patient' => 'required',
        //     'adjunctive_ebt',
        //     'adjunctive_attachment',
        //     'patient_zip_code',
        //     'patient_email' => 'required',
        //     'patient_phone',
        //     'clinic_id',
        //     'patient_address_1',
        //     'patient_address_2',
        //     'patient_address_3',
        //     //Case Information Section
        //     'radio_graph_opg' => 'required',
        //     'radio_graph_ceph' => 'required',
        //     'arch_upper' => 'required',
        //     'arch_lower' => 'required',
        //     'zero_aligner',
        //     'receive_date',
        //     'country',
        //     'city',
        //     'area_id',
        //     // Attachments & Chief Complaint Section
        //     'file_data_stl_1',
        //     'file_data_x_ray_opg',
        //     'file_data_stl_2',
        //     'file_data_x_ray_ceph',
        //     'file_data_rx',
        //     'chief_complaint' => 'required',
        //     //Medical History Section
        //     'illness' => 'required',
        //     'medications' => 'required',
        //     'patient_allergy' => 'required',
        //     'chemo_radiotherapy',
        //     'steriods_bisphosphonates',
        //     'medical_history_diseases' => 'required',//
        //     //Dental History Section
        //     'gingivits',
        //     'recession',
        //     'mobility',
        //     'bone_loss',
        //     'tmj_issues',
        //     'dental_history_none',
        //     'ankylosed_deciduous_teeth',
        //     'dental_history_rct' => 'required',
        //     'CRCT_TMQ2',//
        //     'CRCT_TMQ1',//
        //     'CRCT_TMQ3',//
        //     'CRCT_TMQ4',//
        //     'dental_history_restorations' => 'required',
        //     'RV_TMQ2',//
        //     'RV_TMQ1',//
        //     'RV_TMQ3',//
        //     'RV_TMQ4',//
        //     'dental_history_implants' => 'required',
        //     'BI_TMQ2',//
        //     'BI_TMQ1',//
        //     'BI_TMQ3',//
        //     'BI_TMQ4',//
        //     // Dental Exmination Section
        //     'treatment_indicated_upper' => 'required',
        //     'treatment_indicated_lower' => 'required',
        //     'teeth_moved_upper_3' => 'required',
        //     'teeth_moved_lower_3' => 'required',
        //     'teeth_moved_upper_5' => 'required',
        //     'teeth_moved_lower_5' => 'required',
        //     'teeth_moved_upper_7' => 'required',
        //     'teeth_moved_lower_7' => 'required',
        //     'black_triangle_present',
        //     'black_triangle_absent',
        //     'upper_centered' => 'required', 
        //     'lower_centered' => 'required',
        //     'upper_left' => 'required',
        //     'lower_left' => 'required',
        //     'upper_right' => 'required',
        //     'lower_right' => 'required',
        //     'skeletal',
        //     'dental',
        //     'overjet',
        //     'overbite',
        //     'teeth_not_to_be_moved',
        //     'other_input',
        //     //Advise Tx Section
        //     'sc_upper_complete' => 'required',
        //     'sc_upper_leave' => 'required',
        //     'sc_lower_complete' => 'required',
        //     'sc_lower_leave' => 'required',
        //     'cr_ipr' => 'required',
        //     'cr_proclination' => 'required',
        //     'cr_expansion' => 'required',
        //     'cr_extraction' => 'required',
        //     'treatment_setup',
        //     'other_extraction',
        //     'dental_cross_bite',
        //     'midline_maintain' => 'required',
        //     'midline_correct' => 'required',
        //     'midline_move_upper',
        //     'midline_move_lower',
        //     'canine_class_one_r' => 'required',
        //     'canine_class_one_l' => 'required',
        //     'canine_class_two_r' => 'required',
        //     'canine_class_two_l' => 'required',
        //     'canine_class_three_r' => 'required',
        //     'canine_class_three_l' => 'required',
        //     'molar_class_one_r' => 'required',
        //     'molar_class_one_l' => 'required',
        //     'molar_class_two_r' => 'required',
        //     'molar_class_two_l' => 'required',
        //     'molar_class_three_r' => 'required',
        //     'molar_class_three_l' => 'required',
        //     'incisor_required_overjet',
        //     'incisor_required_overbite',
        //     // 'doable',
        //     'comments',
        //     'terms_condition' => 'required',
        // ]);
        dd( 'mudassar hussain');
        return redirect()->intended('dashboard');
    }
}