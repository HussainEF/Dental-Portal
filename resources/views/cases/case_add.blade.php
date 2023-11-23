@extends('layouts.main_layout')
    @section('content')
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme"  data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        @include('includes.sidebar')
        <div class="body-wrapper">
            @include('includes.header')
            <div class="container-fluid">
                <h1 class>Cases (New)</h1>
                <div class="row">
                    <div class="col-12">
                        <!-- ------------------------------- -->
                        <!-- Start Form Wizard Design With Validation-->
                        <!-- ------------------------------- -->
                        <div class="card">
                            <div class="card-body wizard-content">
                                <form action="#" class="validation-wizard wizard-circle mt-5">
                                    <!-- Step 1 -->
                                    <h6>Patient Information</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                <label for="wfirstName2"> Patient Name : <span class="danger">*</span>
                                                </label>
                                                <input type="text" class="form-control required" id="wfirstName2" name="patient_name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                <label for="wlastName2"> Patient Age : <span class="danger">*</span>
                                                </label>
                                                <input type="number" class="form-control required" id="wlastName2" min="1" class="form-control" name="age" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="">Gender: <span class="danger">*</span>
                                                    </label>
                                                    <div class="row">
                                                        <div class="col-md-6 form-group d-flex align-items-baseline">
                                                            <input name="gender" value="Male" id="Option_8" type="radio" class="me-2">
                                                            <label for="Option_8">Male</label>
                                                        </div>
                                                        <div class="col-md-6 form-group d-flex align-items-baseline">
                                                            <input name="gender" value="Female" id="Option_9" type="radio" class="me-2">
                                                            <label for="Option_9">Female</label>              
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="">Nature Of Patient: <span class="danger">*</span></label>
                                                    <div class="row">
                                                        <div class="col-md-6 form-group d-flex align-items-baseline">
                                                            <input type="radio" id="Option_3" name="nature_of_patient" value="Overseas" class="me-2">
                                                            <label for="Option_3">Overseas</label>
                                                        </div>
                                                        <div class="col-md-6 form-group d-flex align-items-baseline">
                                                            <input type="radio" id="Option_4" name="nature_of_patient" value="Local" class="me-2">
                                                            <label for="Option_4">Local</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row" id="adjunctive_procedure" style="display:none">
                                            <label for="" class="col-sm-2 col-form-label">Adjunctive Procedure Required</label>
                                            <div class="col-sm-10">
                                                <div class="demo-checkbox">
                                                    <input id="md_checkbox_11" name="adjunctive_ebt" value="YES" class="chk-col-yellow" type="checkbox">
                                                    <label for="md_checkbox_11">EBT</label>
                                                    <input id="md_checkbox_14" name="adjunctive_attachment" value="YES" class="chk-col-green" type="checkbox">
                                                    <label for="md_checkbox_14">Attachments</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="postal_code" class="">Zip Code</label>
                                                    <input type="text" id="postal_code" class="form-control" name="patient_zip_code" value=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="emailAddress" class="">Email: <span class="danger"> *</span></label>
                                                    <input type="text" id="emailAddress" class="form-control required" name="patient_email" value=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="wphoneNumber2">Phone Number :</label>
                                                    <input type="tel" class="form-control" id="wphoneNumber2" name="patient_phone"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="clinic_id" class="">Clinic</label>
                                                    <select name="clinic_id" id="clinic_id" class="form-select">
                                                        <option value="">Select Clinic</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="" class="">Address</label>
                                                <div class="mb-3">
                                                    <input type="text" id="autocomplete" name="patient_address_1" value="" class="form-control" placeholder="Address 1"/>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="patient_address_2" value="" class="form-control" placeholder="Address 2"/>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="patient_address_3" value="" class="form-control" placeholder="Address 3"/>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 2 -->
                                    <h6>Case Information</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="" class="">Impression Type</label>
                                                    <div class="row">
                                                        <div class="col-md-6 form-group d-flex align-items-baseline">
                                                            <input type="radio" name="impression" value="" id="Option_1" class="me-2"/>
                                                            <label for="Option_1">Physical Impression</label>                    
                                                        </div>
                                                        <div class="col-md-6 form-group d-flex align-items-baseline">
                                                            <input type="radio" name="impression" value="" id="Option_2" class="me-2"/>
                                                            <label for="Option_2">STL</label>                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="">Radiographs<span class="danger"> *</span></label>
                                                    <div class="row">
                                                        <div class="col-md-6 form-group">
                                                            <input type="checkbox" id="md_checkbox_3" name="radio_graph_opg" value="" class="me-2"/>
                                                            <label for="md_checkbox_3">OPG</label>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <input type="checkbox" id="md_checkbox_4" name="radio_graph_ceph" value="" class="me-2"/>
                                                            <label for="md_checkbox_4">Lateral Cephalogram</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="">Arch (es) <span class="danger"> *</span></label>
                                                    <div class="row">
                                                        <div class="col-md-6 form-group">
                                                            <input type="checkbox" id="md_checkbox_1" name="arch_upper" value="" class="me-2"/>
                                                            <label for="md_checkbox_1">Upper</label>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <input type="checkbox" id="md_checkbox_2" name="arch_lower" value="" class="me-2"/>
                                                            <label for="md_checkbox_2">Lower</label>
                                                        </div> 
                                                    </div>                
                                                </div>                 
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="">Passive Aligners</label>
                                                    <div class="row">
                                                        <div class="col-md-6 form-group d-flex align-items-baseline">
                                                            <input type="radio" name="zero_aligner" value="" id="Option_23" class="me-2"/>
                                                            <label for="Option_23">Yes</label>
                                                        </div>
                                                        <div class="col-md-6 form-group d-flex align-items-baseline">
                                                            <input type="radio" name="zero_aligner" value="" id="Option_24" class="me-2"/>
                                                            <label for="Option_24">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9" id="zero_aligner_charged" style="display:none;">
                                                    <b>ON CHARGE</b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="">Case Recieved Date</label>
                                                    <input type="date" class="form-control" name="receive_date" id="receive_date" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="country">Country</label>
                                                    <select name="country" id="country" class="form-select">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="city">City</label>
                                                    <select name="city" id="city" class="form-select">
                                                        <option value="">Select a City</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="area">Area</label>
                                                    <select name="area_id" id="area" class="form-select">
                                                        <option value="">Select area</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="wint1">Interview For :</label>
                                                    <input type="text" class="form-control required" id="wint1" />
                                                    </div>
                                                <div class="mb-3">
                                                    <label for="wintType1">Interview Type :</label>
                                                    <select class="form-select required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                        <option value="Banquet">Normal</option>
                                                        <option value="Fund Raiser">Difficult</option>
                                                        <option value="Dinner Party">Hard</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="wLocation1">Location :</label>
                                                    <select class="form-select required" id="wLocation1" name="wlocation">
                                                        <option value="">Select City</option>
                                                        <option value="India">India</option>
                                                        <option value="USA">USA</option>
                                                        <option value="Dubai">Dubai</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="wjobTitle2">Interview Date :</label>
                                                    <input type="date" class="form-control required" id="wjobTitle2" />
                                                </div>
                                                <div class="mb-3">
                                                    <label>Requirements :</label>
                                                    <div class="c-inputs-stacked">
                                                        <div class="form-check">
                                                            <input type="radio" id="customRadio16" name="customRadio" class="form-check-input" />
                                                            <label class="form-check-label" for="customRadio16">Employee</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                                                            <label class="form-check-label" for="customRadio17">Contract</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </section>
                                    <!-- Step 3 -->
                                    <h6>Attachments & Chief Complaint</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div class="row d-flex align-items-baseline">
                                                        <label for="" class="col-md-3">STL Upper</label>
                                                        <div class="col-md-9">
                                                            <input id="file_data_stl_1" name="file_data_stl_1"  class="form-control" type="file">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div class="row d-flex align-items-baseline">
                                                        <label for="" class="col-md-3">X-rays (OPG)</label>
                                                        <div class="col-md-9">
                                                            <input id="file_data_x_ray_opg" name="file_data_x_ray_opg" class="form-control" type="file">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div class="row d-flex align-items-baseline">
                                                        <label for="" class="col-md-3">STL Lower</label>
                                                        <div class="col-md-9">
                                                            <input id="file_data_stl_2" name="file_data_stl_2" class="form-control" type="file">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div class="row d-flex align-items-baseline">
                                                        <label for="" class="col-md-3">X-rays (Ceph)</label>
                                                        <div class="col-md-9">
                                                            <input id="file_data_x_ray_ceph" name="file_data_x_ray_ceph" class="form-control" type="file">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div class="row d-flex align-items-baseline">
                                                        <label for="" class="col-md-3">RX Form</label>
                                                        <div class="col-md-9">
                                                            <input id="file_data_rx" name="file_data_rx" class="form-control" type="file">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Chief Complaint<span class="danger"> *</span></label>
                                                <textarea name="chief_complaint" class="form-control" rows="5" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 4 -->
                                    <h6>Medical History</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="illness">ILLNESS<span class="danger"> *</span></label>
                                                    <input class="form-control" type="text" name="illness" id="illness">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="medications">MEDICATIONS<span class="danger"> *</span></label>
                                                    <input class="form-control" type="text" name="medications" id="medications">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="">Does the patient have any allergies?<span class="danger"> *</span></label>
                                                    <input type="text" class="form-control" name="patient_allergy" id="patient_allergy">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="mb-3">
                                                    <div class="form-group">
                                                        <input id="chemo_checkbox" name="chemo_radiotherapy" value="" type="checkbox">
                                                        <label for="chemo_checkbox">CHEMO/RADIOTHERAPY</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="steriods_checkbox" name="steriods_bisphosphonates" value=""  type="checkbox">
                                                        <label for="steriods_checkbox">STEROIDS/BISPHOSPHONATES</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="">Does the patient have any of the following diseases?<span class="danger"> *</span></label>
                                                    <div class="form-group">
                                                        <input type="checkbox" name="medical_history_diseases[]" id="" value="other">
                                                        <label for="">other</label>
                                                    </div>
                                                </div>
                                                <div id="other_diseas_field" style="display: none;">
                                                    <label for="other_diseas">Remarks:</label>
                                                    <input type="text" class="form-control" id="other_diseas" name="other_diseas">
                                                </div>
                                            </div>
                                    </section>
                                    <!-- Step 5 -->
                                    <h6>Dental History</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input id="gingivits_checkbox" name="gingivits" value="" type="checkbox">
                                                            <label for="gingivits_checkbox">GINGIVITIS</label>
                                                        </div>                                            
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input id="recession_checkbox" name="recession" id="recession" value="" type="checkbox">
                                                            <label for="recession_checkbox">RECESSION</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input id="mobility_checkbox" name="mobility" id="mobility" value="" type="checkbox">
                                                            <label for="mobility_checkbox">MOBILITY</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input id="bone_loss_checkbox" name="bone_loss" id="bone_loss" value="" type="checkbox">
                                                            <label for="bone_loss_checkbox">BONE LOSS</label>
                                                        </div>                                            
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input id="tmj_issues_checkbox" name="tmj_issues" id="tmj_issues" value="" type="checkbox">
                                                            <label for="tmj_issues_checkbox">TMJ ISSUES</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input id="dental_history_none_checkbox" name="dental_history_none" id="dental_history_none" value="" type="checkbox">
                                                            <label for="dental_history_none_checkbox">NONE</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="ankylosed_deciduous_teeth">IMPACTED / MISSING / ANKYLOSED / DECIDUOUS TEETH</label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="ankylosed_deciduous_teeth" id="ankylosed_deciduous_teeth">
                                                        <small class="danger"><strong>(These teeth might not be suitable for EBT, Attachments, Movement etc)</strong></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label>Does the patient have any crowns/RCT treated teeth?<span class="danger"> *</span></label><br>
                                                        <div class="form-group d-flex">
                                                            <div class="form-group d-flex align-items-baseline me-2">
                                                                <input name="dental_history_rct" value="" id="dental_history_rct_yes" type="radio" class="me-2">
                                                                <label for="dental_history_rct_yes">Yes</label>
                                                            </div>
                                                            <div class="form-group d-flex align-items-baseline me-2">
                                                                <input name="dental_history_rct" value="" id="dental_history_rct_no" type="radio" class="me-2">
                                                                <label for="dental_history_rct_no">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div id="loose-dental-crowns-missing-teeth-data-area"></div>
                                                        <table class="w-100">
                                                            <tr class="row border-bottom">
                                                                <td class="col-md-6 border-end p-1">
                                                                    <table class="w-100">
                                                                        <tr>
                                                                            @for($i=8; $i>=1; $i--)
                                                                                <td><a href="javascript:void(0)" id="CRCT_TMQ2_MISSING_{{$i}}" onClick="return setMissingTeeth_CRCT('2','CRCT_TMQ',{{$i}})">{{$i}}</a></td>
                                                                            @endfor
                                                                        </tr>
                                                                        <tr>
                                                                            @for($i=8; $i>=1; $i--)
                                                                                <td class="TR_CRCT_TMQ2_{{$i}}">
                                                                                    <input id="CRCT_TMQ2_{{$i}}" name="CRCT_TMQ2[]" value="{{$i}}" type="checkbox">
                                                                                    <label for="CRCT_TMQ2_{{$i}}" style="padding-left:0px; line-height: 0px;">&nbsp;</label>
                                                                                </td>
                                                                            @endfor
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                                <td class="col-md-6 p-1">
                                                                    <table class="w-100">
                                                                        <tr>
                                                                            @for($i=1; $i<=8; $i++)
                                                                                <td><a title="Missing Teeth" href="javascript:void(0)" id="CRCT_TMQ1_MISSING_{{$i}}" onClick="return setMissingTeeth_CRCT('1','CRCT_TMQ',{{$i}})">{{$i}}</a></td>
                                                                            @endfor
                                                                        </tr>
                                                                        <tr>
                                                                            @for($i=1; $i<=8; $i++)
                                                                                <td class="TR_CRCT_TMQ1_{{$i}}">
                                                                                    <input id="CRCT_TMQ1_{{$i}}" name="CRCT_TMQ1[]" value="{{$i}}" type="checkbox">
                                                                                    <label title="Teeth Movement" for="CRCT_TMQ1_{{$i}}" style="padding-left:0px; line-height: 0px;">&nbsp;</label>
                                                                                </td>
                                                                            @endfor
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr class="row">       
                                                                <td class="col-md-6 border-end p-1">
                                                                    <table class="w-100">
                                                                        <tr>
                                                                            @for($i=8; $i>=1; $i--)
                                                                                <td><a href="javascript:void(0)" id="CRCT_TMQ3_MISSING_{{$i}}" onClick="return setMissingTeeth_CRCT('3','CRCT_TMQ',{{$i}})">{{$i}}</a></td>
                                                                            @endfor
                                                                        </tr>
                                                                        <tr>
                                                                            @for($i=8; $i>=1; $i--)     
                                                                                <td class="TR_CRCT_TMQ3_{{$i}}">
                                                                                    <input id="CRCT_TMQ3_{{$i}}" name="CRCT_TMQ3[]" value="{{$i}}" type="checkbox">
                                                                                    <label for="CRCT_TMQ3_{{$i}}" style="padding-left:0px; line-height: 0px;">&nbsp;</label>
                                                                                </td>  
                                                                            @endfor
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                                <td class="col-md-6 p-1">
                                                                    <table class="w-100">
                                                                        <tr>
                                                                            @for($i=1; $i<=8; $i++)
                                                                                <td><a href="javascript:void(0)" id="CRCT_TMQ4_MISSING_{{$i}}" onClick="return setMissingTeeth_CRCT('4','CRCT_TMQ',{{$i}})">{{$i}}</a></td>
                                                                            @endfor
                                                                        </tr>
                                                                        <tr>
                                                                            @for($i=1; $i<=8; $i++)
                                                                                <td class="TR_CRCT_TMQ4_{{$i}}">
                                                                                    <input id="CRCT_TMQ4_{{$i}}" name="CRCT_TMQ4[]" value="{{$i}}" type="checkbox">
                                                                                    <label for="CRCT_TMQ4_{{$i}}" style="padding-left:0px; line-height: 0px;">&nbsp;</label>
                                                                                </td>
                                                                            @endfor
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label>Does the patient have any restorations/veneers?<span class="danger"> *</span></label>
                                                        <div class="form-group d-flex">
                                                            <div class="form-group d-flex align-items-baseline me-2">
                                                                <input name="dental_history_restorations" value="" id="dental_history_restorations_yes" type="radio" class="me-2">
                                                                <label for="dental_history_restorations_yes">Yes</label>
                                                            </div>
                                                            <div class="form-group d-flex align-items-baseline me-2">
                                                                <input name="dental_history_restorations" value="" id="dental_history_restorations_no" type="radio" class="me-2">
                                                                <label for="dental_history_restorations_no">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div id="loose-dental-crowns-missing-teeth-data-area"></div>
                                                            <table class="w-100">
                                                                <tr class="row border-bottom">
                                                                    <td class="col-md-6 border-end p-1">
                                                                        <table class="w-100">
                                                                            <tr>
                                                                                @for($i=8; $i>=1; $i--)
                                                                                    <td><a href="javascript:void(0)" id="RV_TMQ2_MISSING_{{$i}}" >{{$i}}</a></td>
                                                                                @endfor
                                                                            </tr>
                                                                            <tr>
                                                                                @for($i=8; $i>=1; $i--)
                                                                                    <td class="TR_RV_TMQ2_{{$i}}">
                                                                                        <input id="RV_TMQ2_{{$i}}" name="RV_TMQ2[]" value="{{$i}}" type="checkbox">
                                                                                        <label for="RV_TMQ2_{{$i}}">&nbsp;</label>
                                                                                    </td>
                                                                                @endfor
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                    <td class="col-md-6 p-1">
                                                                        <table class="w-100">
                                                                            <tr>
                                                                                @for($i=1; $i<=8; $i++)
                                                                                <td><a title="Missing Teeth" href="javascript:void(0)" id="RV_TMQ1_MISSING_{{$i}}" >{{$i}}</a></td>
                                                                                @endfor
                                                                            </tr>
                                                                            <tr>
                                                                                @for($i=1; $i<=8; $i++)
                                                                                    <td height="24" class="TR_RV_TMQ1_{{$i}}">
                                                                                        <input id="RV_TMQ1_{{$i}}" name="RV_TMQ1[]" value="{{$i}}" type="checkbox">
                                                                                        <label title="Teeth Movement" for="RV_TMQ1_{{$i}}">&nbsp;</label>
                                                                                    </td>
                                                                                @endfor
                                                                            </tr>
                                                                        </table>
                                                                    </td>   
                                                                </tr>
                                                                <tr class="row">    
                                                                    <td class="col-md-6 border-end p-1">
                                                                        <table class="w-100">
                                                                            <tr>
                                                                                @for($i=8; $i>=1; $i--)
                                                                                    <td><a href="javascript:void(0)" id="RV_TMQ3_MISSING_{{$i}}" onClick="return setMissingTeeth_RV('3','RV_TMQ',{{$i}})">{{$i}}</a></td>
                                                                                @endfor
                                                                            </tr>
                                                                            <tr>
                                                                                @for($i=8; $i>=1; $i--)
                                                                                    <td height="24" class="TR_RV_TMQ3_{{$i}}">
                                                                                        <input id="RV_TMQ3_{{$i}}" name="RV_TMQ3[]" value="{{$i}}" type="checkbox">
                                                                                        <label for="RV_TMQ3_{{$i}}">&nbsp;</label>
                                                                                    </td>  
                                                                                @endfor
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                    <td class="col-md-6 p-1">
                                                                        <table class="w-100">
                                                                            <tr>
                                                                                @for($i=1; $i<=8; $i++)
                                                                                    <td><a href="javascript:void(0)" id="RV_TMQ4_MISSING_{{$i}}" onClick="return setMissingTeeth_RV('4','RV_TMQ',{{$i}})">{{$i}}</a></td>
                                                                                @endfor
                                                                            </tr>
                                                                            <tr>
                                                                                @for($i=1; $i<=8; $i++)
                                                                                    <td class="TR_RV_TMQ4_{{$i}}">
                                                                                        <input id="RV_TMQ4_{{$i}}" name="RV_TMQ4[]" value="{{$i}}" type="checkbox">
                                                                                        <label for="RV_TMQ4_{{$i}}">&nbsp;</label>
                                                                                    </td>
                                                                                @endfor
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label>Does the patient have any bridges/implants?<span class="danger"> *</span></label>
                                                        <div class="form-group d-flex">
                                                            <div class="form-group d-flex align-items-baseline me-2">
                                                                <input name="dental_history_implants" value="" id="dental_history_implants_yes" type="radio" class="me-2">
                                                                <label for="dental_history_implants_yes">Yes</label>
                                                            </div>
                                                            <div class="form-group d-flex align-items-baseline me-2">
                                                                <input name="dental_history_implants" value="" id="dental_history_implants_no" type="radio" class="me-2">
                                                                <label for="dental_history_implants_no">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div id="loose-dental-crowns-missing-teeth-data-area"></div>
                                                            <table class="w-100">
                                                                <tr class="row border-bottom">
                                                                    <td class="col-md-6 border-end p-1">
                                                                        <table class="w-100">
                                                                            <tr>
                                                                                @for($i=8; $i>=1; $i--)
                                                                                    <td><a href="javascript:void(0)" id="BI_TMQ2_MISSING_{{$i}}" onClick="return setMissingTeeth_BI('2','BI_TMQ',{{$i}})">{{$i}}</a></td>
                                                                                @endfor
                                                                            </tr>
                                                                            <tr>
                                                                                @for($i=8; $i>=1; $i--)
                                                                                    <td class="TR_BI_TMQ2_{{$i}}">
                                                                                        <input id="BI_TMQ2_{{$i}}" name="BI_TMQ2[]" value="{{$i}}" type="checkbox">
                                                                                        <label for="BI_TMQ2_{{$i}}">&nbsp;</label>
                                                                                    </td>
                                                                                @endfor
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                    <td class="col-md-6 p-1">
                                                                        <table class="w-100">
                                                                            <tr>
                                                                                @for($i=1; $i<=8; $i++)
                                                                                <td><a title="Missing Teeth" href="javascript:void(0)" id="BI_TMQ1_MISSING_{{$i}}" onClick="return setMissingTeeth_BI('1','BI_TMQ',{{$i}})">{{$i}}</a></td>
                                                                                @endfor
                                                                            </tr>
                                                                            <tr>
                                                                                @for($i=1; $i<=8; $i++)
                                                                                    <td class="TR_BI_TMQ1_{{$i}}">
                                                                                        <input id="BI_TMQ1_{{$i}}" name="BI_TMQ1[]" value="{{$i}}" class="chk-col-purple TM" type="checkbox">
                                                                                        <label title="Teeth Movement" for="BI_TMQ1_{{$i}}">&nbsp;</label>
                                                                                    </td> 
                                                                                @endfor
                                                                            </tr>
                                                                        </table>
                                                                    </td>   
                                                                </tr>
                                                                <tr class="row">       
                                                                    <td class="col-md-6 border-end p-1">
                                                                        <table class="w-100">
                                                                            <tr>
                                                                                @for($i=8; $i>=1; $i--)
                                                                                <td><a href="javascript:void(0)" id="BI_TMQ3_MISSING_{{$i}}" onClick="return setMissingTeeth_BI('3','BI_TMQ',{{$i}})">{{$i}}</a></td>
                                                                                @endfor
                                                                            </tr>
                                                                            <tr>
                                                                                @for($i=8; $i>=1; $i--)       
                                                                                    <td class="TR_BI_TMQ3_{{$i}}">
                                                                                        <input id="BI_TMQ3_{{$i}}" name="BI_TMQ3[]" value="{{$i}}" type="checkbox">
                                                                                        <label for="BI_TMQ3_{{$i}}">&nbsp;</label>
                                                                                    </td>   
                                                                                @endfor
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                    <td class="col-md-6">
                                                                        <table class="w-100">
                                                                            <tr>
                                                                                @for($i=1; $i<=8; $i++)
                                                                                    <td><a href="javascript:void(0)" id="BI_TMQ4_MISSING_{{$i}}" onClick="return setMissingTeeth_BI('4','BI_TMQ',{{$i}})">{{$i}}</a></td>
                                                                                @endfor
                                                                            </tr>
                                                                            <tr>
                                                                                @for($i=1; $i<=8; $i++)
                                                                                    <td class="TR_BI_TMQ4_{{$i}}">
                                                                                        <input id="BI_TMQ4_{{$i}}" name="BI_TMQ4[]" value="{{$i}}" type="checkbox">
                                                                                        <label for="BI_TMQ4_{{$i}}">&nbsp;</label>
                                                                                    </td>
                                                                                @endfor
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 6 -->
                                    <h6>Dental Exmination</h6>
                                    <section>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label class="" for="">TREATMENT INDICATED<span class="danger"> *</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input id="treatment_checkbox_upper" name="treatment_indicated_upper" value="" type="checkbox">
                                                        <label for="treatment_checkbox_upper">Upper</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input id="treatment_checkbox_lower" name="treatment_indicated_lower" value="" type="checkbox">
                                                        <label for="treatment_checkbox_lower">Lower</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label class="" for="">TEETH TO BE MOVED<span class="danger"> *</span></label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="">Upper</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="">Lower</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="">3 To 3</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="teeth_moved_upper_3_checkbox" name="teeth_moved_upper_3" value="" type="checkbox">
                                                                <label for="teeth_moved_upper_3_checkbox"></label>        
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="teeth_moved_lower_3_checkbox" name="teeth_moved_lower_3" value="" type="checkbox">
                                                                <label for="teeth_moved_lower_3_checkbox"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="">5 To 5</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="teeth_moved_upper_5_checkbox" name="teeth_moved_upper_5" value="" type="checkbox">
                                                                <label for="teeth_moved_upper_5_checkbox"></label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="teeth_moved_lower_5_checkbox" name="teeth_moved_lower_5" value="" type="checkbox">
                                                                <label for="teeth_moved_lower_5_checkbox"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="">7 To 7</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="teeth_moved_upper_7_checkbox" name="teeth_moved_upper_7" value="" type="checkbox">
                                                                <label for="teeth_moved_upper_7_checkbox"></label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="teeth_moved_lower_7_checkbox" name="teeth_moved_lower_7" value="" type="checkbox">
                                                                <label for="teeth_moved_lower_7_checkbox"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label  class="writing-color" for="">BLACK TRIANGLES</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="black_triangle_present_checkbox" name="black_triangle_present" value="" type="checkbox">
                                                                <label for="black_triangle_present_checkbox">Present</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="black_triangle_absent_checkbox" name="black_triangle_absent" value="" type="checkbox">
                                                                <label for="black_triangle_absent_checkbox">Absent</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3"> 
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="">MIDLINE<span class="danger"> *</span></label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="">Upper</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="">Lower</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="">Centered</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="upper_centered_checkbox" name="upper_centered" value="" type="checkbox">
                                                                <label for="upper_centered_checkbox"></label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="lower_centered_checkbox" name="lower_centered" value="" type="checkbox">
                                                                <label for="lower_centered_checkbox"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row"> 
                                                            <div class="col-md-4">
                                                                <label for="">Shift to Left</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="upper_left_checkbox" name="upper_left" value="" type="checkbox">
                                                                <label for="upper_left_checkbox"></label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="lower_left_checkbox" name="lower_left" value="" type="checkbox">
                                                                <label for="lower_left_checkbox"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">  
                                                            <div class="col-md-4">
                                                                <label for="">Shift to Right</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="upper_right_checkbox" name="upper_right" value="" type="checkbox">
                                                                <label for="upper_right_checkbox"></label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="lower_right_checkbox" name="lower_right" value="" type="checkbox">
                                                                <label for="lower_right_checkbox"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="cross_bite">CROSS BITE</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="skeletal_checkbox" name="skeletal" value="" type="checkbox">
                                                                <label for="skeletal_checkbox">Skeletal</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="dental_checkbox" name="dental" value="" type="checkbox">
                                                                <label for="dental_checkbox">Dental</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="" for="incisor_relationship">INCISOR RELATIONSHIP</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="" for="overjet">Overjet</label>
                                                        <input id="overjet" name="overjet" value="" class="form-control" type="text">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="" for="overbite">Overbite</label>
                                                        <input id="overbite" name="overbite" value="" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="" for="teeth_not_to_be_moved">TEETH NOT TO BE MOVED</label>
                                                        <input id="teeth_not_to_be_moved" name="teeth_not_to_be_moved" value="" class="form-control" type="text">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="" for="other_input">OTHER</label>
                                                        <input id="other_input" name="other_input" value="" class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>      
                                    <!-- Step 7 -->
                                    <h6>Advised Tx</h6>
                                    <section>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="row mb-1">
                                                    <div class="col-md-12">
                                                        <label class="" for="">SPACE CLOSURE<span class="danger"> *</span></label>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="">Upper arch</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="sc_upper_complete_checkbox" name="sc_upper_complete" value="" type="checkbox">
                                                                <label for="sc_upper_complete_checkbox">Complete</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="sc_upper_leave_checkbox" name="sc_upper_leave" value="" type="checkbox">
                                                                <label for="sc_upper_leave_checkbox">Leave Space</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="cross_bite">Lower arch</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="sc_lower_complete_checkbox" name="sc_lower_complete" value="" type="checkbox">
                                                                <label for="sc_lower_complete_checkbox">Complete</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="sc_lower_leave_checkbox" name="sc_lower_leave" value="" type="checkbox">
                                                                <label for="sc_lower_leave_checkbox">Leave Space</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <small class="danger"><strong>(Complete space closure may require IPR. Specify where and how much space would be left)</strong></small>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label class="" for="">CROWDING RESOLUTION<span class="danger"> *</span></label>
                                                <div class="row mt-1 mb-1">
                                                    <div class="col-md-3">
                                                        <input id="cr_ipr_checkbox" name="cr_ipr" value="" type="checkbox">
                                                        <label for="cr_ipr_checkbox">IPR</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input id="cr_proclination_checkbox" name="cr_proclination" value=""  type="checkbox">
                                                        <label for="cr_proclination_checkbox">Proclination</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input id="cr_expansion_checkbox" name="cr_expansion" value=""  type="checkbox">
                                                        <label for="cr_expansion_checkbox">Expansion</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input id="cr_extraction_checkbox" name="cr_extraction" value=""  type="checkbox">
                                                        <label for="cr_extraction_checkbox">Extraction</label>
                                                    </div>                      
                                                </div>                      
                                                <small class="danger">(Please specify your prefernce by writing in the boxes above)</strong></small>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label class="" for="">PREFERRED EXTRACION</label>
                                                <div class="row mt-1 mb-1">
                                                    <div class="col-md-6">
                                                        <input id="treatment_setup_checkbox" name="treatment_setup" value="" type="checkbox">
                                                        <label for="treatment_setup_checkbox">As per treatment setup</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="other_extraction_checkbox" name="other_extraction" value="" type="checkbox">
                                                        <label for="other_extraction_checkbox">Other</label>                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="" for="">CORRECTION OF DENTAL CROSS BITE</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input id="dental_cross_bite_checkbox" name="dental_cross_bite" value="" type="checkbox">
                                                <label for="dental_cross_bite_checkbox"></label>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="row mb-2">
                                                    <div class="col-md-3">
                                                        <label for="">MIDLINE<span class="danger"> *</span></label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input id="midline_maintain_checkbox" name="midline_maintain" value="" type="checkbox">
                                                        <label for="midline_maintain_checkbox">Maintain</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input id="midline_correct_checkbox" name="midline_correct" value="" type="checkbox">
                                                        <label for="midline_correct_checkbox">Correct</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="midline_move_upper">Move Upper</label>
                                                        <input id="midline_move_upper" name="midline_move_upper" value="" class="form-control" type="text">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="midline_move_lower">Move Lower</label>
                                                        <input id="midline_move_lower" name="midline_move_lower" value="" class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label class="" for="">PERMANENT CANINE OCCLUSION GOAL<span class="danger"> *</span></label>
                                                <div class="row mt-1">
                                                    <div class="col-md-4 d-flex">
                                                        <label class="" for="">Class |</label>
                                                        <div class="form-group">
                                                            <input id="canine_class_one_r_checkbox" name="canine_class_one_r" value="" type="checkbox">
                                                            <label for="canine_class_one_r_checkbox">R</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="canine_class_one_l_checkbox" name="canine_class_one_l" value="" type="checkbox">
                                                            <label for="canine_class_one_l_checkbox">L</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 d-flex">
                                                        <label class="" for="">Class ||</label>
                                                        <div class="form-group">
                                                            <input id="canine_class_two_r_checkbox" name="canine_class_two_r" value="" type="checkbox">
                                                            <label for="canine_class_two_r_checkbox">R</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="canine_class_two_l_checkbox" name="canine_class_two_l" value="" type="checkbox">
                                                            <label for="canine_class_two_l_checkbox">L</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 d-flex">
                                                        <label class="" for="">Class |||</label>
                                                        <div class="form-group">
                                                            <input id="canine_class_three_r_checkbox" name="canine_class_three_r" value="" type="checkbox">
                                                            <label for="canine_class_three_r_checkbox">R</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="canine_class_three_l_checkbox" name="canine_class_three_l" value="" type="checkbox">
                                                            <label for="canine_class_three_l_checkbox">L</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label class="" for="">PERMANENT Molar Occlusion Goal<span class="danger"> *</span></label>
                                                <div class="row mt-1">
                                                    <div class="col-md-4 d-flex">
                                                        <label class="" for="">Class |</label>
                                                        <div class="form-group">
                                                            <input id="molar_class_one_r_checkbox" name="molar_class_one_r" value="" type="checkbox">
                                                            <label for="molar_class_one_r_checkbox">R</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="molar_class_one_l_checkbox" name="molar_class_one_l" value="" type="checkbox">
                                                            <label for="molar_class_one_l_checkbox">L</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 d-flex">
                                                        <label class="" for="">Class ||</label>
                                                        <div class="form-group">
                                                            <input id="molar_class_two_r_checkbox" name="molar_class_two_r" value="" type="checkbox">
                                                            <label for="molar_class_two_r_checkbox">R</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="molar_class_two_l_checkbox" name="molar_class_two_l" value="" type="checkbox">
                                                            <label for="molar_class_two_l_checkbox">L</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 d-flex">
                                                        <label class="" for="">Class |||</label>
                                                        <div class="form-group">
                                                            <input id="molar_class_three_r_checkbox" name="molar_class_three_r" value="" type="checkbox">
                                                            <label for="molar_class_three_r_checkbox">R</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="molar_class_three_l_checkbox" name="molar_class_three_l" value="" type="checkbox" >
                                                            <label for="molar_class_three_l_checkbox">L</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label for="">INCISOR RELATIONSHIP</label>
                                                <div class="row mt-1">
                                                    <div class="col-md-6">
                                                        <label for="incisor_required_overjet">Required Overjet</label>
                                                        <input id="incisor_required_overjet" name="incisor_required_overjet" value="" class="form-control" type="text">     
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="incisor_required_overbite">Required Overbite</label>
                                                        <input id="incisor_required_overbite" name="incisor_required_overbite" class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <label for="" class="">Conclusion</label>
                                            </div>
                                            <div class="col-md-3">
                                                <input name="doable" value="" id="Option_27" type="radio" class="radio-col-light-blue">
                                                <label for="Option_27">Doable</label>
                                            </div>
                                            <div class="col-md-3">
                                                <input name="doable" value="" id="Option_28" type="radio" class="radio-col-light-blue">
                                                <label for="Option_28">Not Doable</label>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <label for="">Special Instructions</label>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea name="comments" class="form-control" rows="10" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <label for="" class="">Terms & Conditions </label>
                                            </div>
                                            <div class="col-md-9">
                                                <input id="terms_condition_checkbox_1" name="terms_condition" value="" type="checkbox">
                                                <label for="terms_condition_checkbox_1"></label>
                                            </div>
                                            <!-- Terms and Condition Modal -->
                                            <div class="modal" id="termsConditionsModal">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Terms and Conditions</h5>
                                                            <button type="button" class="close" data-dismiss="modal">
                                                            <span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p style="text-align : justify; font-size : 8pt;"><b></b>
                                                                <br>

                                                                The following Terms and Conditions Agreement (“Agreement”) constitutes a binding contract between you
                                                                (“Doctor”) and ClearPath Orthodontics Pvt. Ltd. /ClearPath Manufacturing Pvt. Ltd. By submitting a case to
                                                                ClearPath Orthodontics Pvt. Ltd. /ClearPath Manufacturing Pvt. Ltd. Doctor agrees to abide by the following Terms
                                                                and Conditions. Doctor &amp; ClearPath may each be referred to herein as a “Party” or collectively as the “Parties”.
                                                                <br><br>

                                                                <b>1. Product Information</b><br>
                                                                ClearPath manufactures clear, removable, medical grade plastic appliances (“aligners”) customized to fit the
                                                                patients&#39; teeth. When both arches are being treated, a pair of aligners (one for each arch) is referred to as an
                                                                “aligner”. In single-arch treatment, one aligner constitutes a stage by itself. Aligners are manufactured and
                                                                delivered over time altogether, and also as groups, referred to as “batches”, as per the treatment requirements.
                                                                There are two types of aligners. “Active aligners” are designed to apply pressure to specific teeth to induce
                                                                movement. “Retainers” (also known as “Passive aligners”) are designed to maintain the existing position of teeth.
                                                                <br><br>

                                                                <b>2. Case submission and payment</b><br>
                                                                A sequence of treatment with aligners (a “case) can be prescribed either via the website located at
                                                                http://www.clearpathortho.com or by submitting a printed case submission form to ClearPath Orthodontics. 100%
                                                                of the amount is due at the time of case submission. By submitting a case Doctor authorizes ClearPath
                                                                Orthodontics to charge the fee associated to the case procedures. If the Doctor, after the case submission
                                                                terminates the treatment up till the Digital Diagnostic Setup, ClearPath has the right to recover 40% of the total
                                                                amount received/receivable from him in order to cover the cost expenditures after the case submission. If the
                                                                Doctor discontinues the treatment once the Digital Diagnostic Setup has been approved and aligner manufacturing
                                                                has started, ClearPath has the right to recover 100% of the amount in order to cover the cost expenditures.
                                                                <br><br>
                                                                
                                                                <b>3. Active and Inactive cases</b><br>
                                                                Aligners can only be requested for a case while it is active.
                                                                Cases are automatically inactivated (“closed”) when “Doctor requests a final retainer.
                                                                A case may also be closed if required records are not received within 30 days of case submission”.
                                                                A case may also be closed if the amount is not received within 03 days of case submission”.
                                                                <br><br>

                                                                <b>4. Treatment options</b><br>
                                                                ClearPath offers the following treatment options:
                                                                CP-A: Includes Digital Setup and all Aligners (Max 20 aligners) with Retainer. No Mid-course correction and No
                                                                Refinement aligners.
                                                                <br><br>

                                                                <b>CP-B:</b> Includes Digital Setup and aligners dispatched in batches of 5, with Retainer in last batch Mid-course
                                                                correction and 5 Refinement aligners (One time only).
                                                                <br><br>
                                                                <b>CP-S:</b> Includes Digital Setup and all aligners (for single arch/ Max 20 aligners) with Retainer. No Mid-course
                                                                correction and No Refinement Aligners.
                                                                <br><br>
                                                                <b>CP-E:</b> Maximum up to 10 aligners. Includes Digital Setup and all aligners (for single OR both arches) with Retainer.
                                                                No Mid-course correction and No Refinement Aligners.
                                                                <br><br>
                                                                <b>CPB +:</b> Maximum up to 45 aligners. Retainers included in the charges. Refinements, Mid-Course Correction and
                                                                Finishing Aligners included Max 45 aligners inclusive of shipped aligners. Over and above aligners will be on
                                                                charged. Delays more than 06 months will not be entertained. Issues have to be reported on time (within 48
                                                                hours) based on ClearPath aligners wearing timeline of 10 days each aligner.
                                                                (NOTE: All extraction cases and/or cases requiring more than 20 Aligners fall in CP-B and CP-B+ category.)
                                                                <br><br>
                                                                <b>Retainers:</b> To get retainers Doctor to provide post treatment pictures &amp; cast model.
                                                                <br><br>
                                                                <b>Refinement Aligners</b> are included in CP-B and CP-B+ category, but are also available for individual purchase.
                                                                <br><br>

                                                                <b>Digital Setup:</b>
                                                                At the beginning of all active treatment cases, ClearPath generates a representation of the treatment plan (a
                                                                “digital setup”). This includes digital models representing the estimated position of the teeth pre- and post-
                                                                treatment, as well as estimates of the duration of the case and the amount of recommended IPR.
                                                                Doctor can request a case evaluation without committing to a full course of treatment:
                                                                Case review (free): Includes a case type recommendation, based on photos, x-rays and Doctor&#39;s description.
                                                                <br><br>

                                                                <b>5. Revisions</b>
                                                                Doctor may request a revision to any active case by submitting a case revision form to ClearPath Orthodontics,
                                                                along with new impressions if necessary. Doctor is responsible for any additional cost incurring due to the revision
                                                                requested by doctor.
                                                                If a case revision extends the length of planned treatment beyond the number of steps included with the case,
                                                                Doctor must upgrade to another treatment option with sufficient steps to complete the revision, or purchase extra
                                                                aligners. Any aligner that shipped before a revision request is processed will be counted against the number of
                                                                steps allowed for the case. To avoid wasting aligners, Doctor should notify ClearPath Orthodontics as soon as a
                                                                revision is anticipated.
                                                                <br><br>

                                                                <b>6. Curtailment</b><br>
                                                                The following restrictions apply to all cases:
                                                                 ClearPath Orthodontics will not manufacture aligners for closed cases.
                                                                 A case cannot be reopened once closed. Doctor must submit a new case to request additional aligners.
                                                                 Doctor agrees to request no more aligners than necessary to achieve the approved treatment plan.

                                                                 ClearPath Orthodontics reserves the right to reject case revisions if the patient or Doctor has failed to
                                                                defer to the product instructions or the treatment plan has changed.
                                                                 ClearPath Orthodontics reserves the right to cancel the treatment without refund if Doctor is suspected of
                                                                abusing these policies.
                                                                <br><br>

                                                                <b>7. Cancellation and refunds</b><br>
                                                                If Doctor cancels a case before approving a treatment setup, ClearPath Orthodontics will have the right to recover
                                                                40% of the amount given by the doctor / Doctor will be responsible to pay 60% of the case charges.
                                                                If Doctor cancels a case after approving a treatment setup, ClearPath Orthodontics will not refund any of the case
                                                                fee paid for that case in order to cover the cost expenditures / Doctor will be responsible to pay up till 100% of the
                                                                case charges.
                                                                <br><br>

                                                                <b>8. Validity</b><br>
                                                                For all case categories validity of the case is bases on 10 days each aligner wearing, 22 hours per day. Treating
                                                                dentist to ensure compliance as per ClearPath protocols &amp; any issue should be reported on time within validity of
                                                                the case.
                                                                <br><br>

                                                                <b>9. Records</b><br>
                                                                All submissions and requests must be accurate and complete.

                                                                <br><br>

                                                                <b>For a Case Review</b><br>
                                                                Intra oral photos (upper &amp; lower occlusal, frontal, right &amp; left buccal in occlusion) and Extra oral photos (frontal
                                                                profile, frontal profile with smile, right lateral profile and left lateral profile)
                                                                <br><br>

                                                                
                                                                <b>For Aligner Treatment</b><br>
                                                                 Upper and lower impressions in rubber-base material or intra oral scanned files
                                                                 Bite Registration (Not in Wax) or intra oral scanned files
                                                                 Extra oral photos (frontal profile, frontal profile with smile, right lateral profile and left lateral profile)
                                                                 Intra oral photos (upper &amp; lower occlusal, frontal, right &amp;
                                                                 left buccal in occlusion)
                                                                 X-rays (Lateral Cephalogram and OPG)
                                                                <br><br>

                                                                Records submitted to ClearPath Orthodontics become the property of ClearPath Orthodontics and will not be
                                                                returned to Doctor. Doctor shall obtain patient&#39;s informed consent for Doctor to provide such patient&#39;s medical
                                                                records to ClearPath Orthodontics as necessary for Doctor&#39;s treatment of the patient. ClearPath Orthodontics is
                                                                not responsible for verifying the quality or accuracy of submitted dental impressions or other records.
                                                                <br><br>

                                                                <b>10. Aligner Shipment and Delivery</b><br>

                                                                Within seven working, after receiving complete and accurate required case records along with complete amount,
                                                                ClearPath will email the digital set up to the concerned doctor.
                                                                Zero set of aligners may be shipped in some cases, but complete set of aligners will not be fabricated until Doctor
                                                                approves the Digital setup.
                                                                Once the Digital setup is approved subsequent aligners are scheduled to ship automatically unless amount is due
                                                                or otherwise requested by the Doctor. Delivery dates are estimated to be within 14 working days after the Digital
                                                                Setup approval.
                                                                ClearPath Orthodontics shall not be held culpable for any damages, losses or expenses incurred by Doctor if
                                                                ClearPath Orthodontics fails to meet the estimated delivery dates.
                                                                Title to products shipped under this Agreement and risk of loss or damage during shipment pass from ClearPath to
                                                                Doctor upon delivery to the address specified by Doctor.
                                                                One time shipping cost (within Pakistan) is included in the case fee. Doctor is responsible for the cost of shipping
                                                                any additional materials to ClearPath, including records required for case revisions.
                                                                <br><br>

                                                                <b>11. Doctor&#39;s asseveration</b><br>
                                                                Doctor represents and warrants to ClearPath Orthodontics that:
                                                                (i) Doctor is licensed to practice dentistry and/or orthodontics in the location where and at all times during which,
                                                                treatment is being provided.
                                                                (ii) Doctor has the certification, proper training, and/or expertise to perform procedures associated with and/or
                                                                using ClearPath Orthodontics Aligner products.
                                                                (iii) Doctor&#39;s use of ClearPath aligners will be in accordance with all applicable medical and dental standards and
                                                                used in compliance with ClearPath Orthodontics&#39; aligner specifications.
                                                                (iv) Doctor has obtained an executed Informed Consent and Agreement from each patient, Doctor treats using
                                                                ClearPath aligner products.
                                                                (v) Doctor further consents to ClearPath to use patient’s medical data for all educational &amp; research purposes.
                                                                <br><br>

                                                                <b>12. Warranties and disclaimer</b><br>
                                                                ClearPath Orthodontics warrants that its products:
                                                                (i) Shall conform to the specifications provided by Doctor at the time of case submission and as contained in the
                                                                digital setup approved by the Doctor
                                                                ClearPath Orthodontics shall not be liable for:
                                                                (i) Any defects that are caused by neglect, misuse, or mistreatment of its products by any third party.

                                                                (ii) Any products that have been altered or modified in any way by an individual or entity other than ClearPath
                                                                Orthodontics
                                                                (iii) Any products being used in combination with other third party products
                                                                (iv) Any defects that result from Doctor&#39;s errors or in submitted records or instructions for such products.
                                                                This limited warranty expires 90 days after shipment of the product. If any ClearPath product fails to conform to
                                                                the warranty set forth above, ClearPath Orthodontics&#39; sole liability, at its option, shall be to: Replace such
                                                                product
                                                                If ClearPath decides to replace such product, it shall have a reasonable time to provide replacements. Replaced
                                                                products shall be warranted for a 90-days warranty period.
                                                                Except as set forth above, ClearPath Orthodontics hereby disclaims any and all warranties implied, including any
                                                                warranty of merchantability, or fitness for any specific purpose.
                                                                <br><br>

                                                                <b>13. Limitations of liability</b><br>
                                                                In no event shall ClearPath Orthodontics be liable for any incidental, indirect, exemplary, punitive or special
                                                                damages in connection with or arising out of this agreement or the use of the products provided hereunder,
                                                                however caused, and under any theory of liability whether in negligence, breach of warranty, strict liability,
                                                                contract, tort, indemnity or any other cause or theory whatsoever.
                                                                Excluded damages include loss of profits, loss of use and costs of replacement or substitute products.
                                                                In no event shall ClearPath Orthodontics&#39; aggregate monetary liability for damages of any kind arising out of or in
                                                                connection with this agreement, or any use of product provided hereunder, exceed the total amount paid to
                                                                ClearPath Orthodontics by Doctor for the particular products sold under the agreement for which losses or
                                                                damages are claimed. The existence of more than one claim against the particular products sold to Doctor under
                                                                this agreement, or the existence of more than one agreement with the Doctor or the sales of additional products
                                                                to the Doctor shall not enlarge or extend this limit.
                                                                <br><br>

                                                                <b>14. Indemnification</b><br>
                                                                Doctor agrees to indemnify, defend and hold harmless ClearPath Orthodontics and/or its officers, agents,
                                                                employees, contractors, successors and assigns from and against any and all liability, obligations, losses, claims,
                                                                actions, damages, penalties, fines, demands or suits and all related costs, attorney&#39;s fees and expenses of any kind
                                                                and nature whatsoever arising under any theory of legal liability
                                                                (“a Claim”) that may be asserted against ClearPath Orthodontics arising out of, or resulting from, or relating to:
                                                                (i) This agreement or use of products sold under this Agreement.
                                                                (ii) Any breach of or failure of Doctor to abide by any term of this agreement;
                                                                (iii) Any breach or alleged breach of any representations or warranties made by Doctor in this agreement or any
                                                                incorrect information provided by Doctor or Doctor&#39;s patient to ClearPath Orthodontics or
                                                                (iv) ClearPath Orthodontics&#39; providing of or failure to provide products to Doctor, unless the providing of or failure
                                                                to provide such products was due to ClearPath Orthodontics willful misconduct or gross negligence.

                                                                The obligation of the Doctor to defend ClearPath Orthodontics against any Claim is separate and distinct from the
                                                                obligation of indemnity set forth in this Agreement.
                                                                Doctor has the right and obligation to assume the defense of any Claim with counsel chosen by Doctor and
                                                                reasonably acceptable to ClearPath Orthodontics provided that counsel to ClearPath Orthodontics may participate
                                                                in the defense of the Claim with counsel for Doctor, at the expense of ClearPath Orthodontics.
                                                                Doctor will not have the right to assume the defense of a Claim made against both ClearPath Orthodontics and
                                                                Doctor if counsel for ClearPath Orthodontics advises in writing that a conflict in interest between ClearPath
                                                                Orthodontics and Doctor would under applicable ethical principles interdict a single counsel or firm from
                                                                defending both Parties.
                                                                <br><br>

                                                                <b>15. Relationship of parties</b><br>
                                                                The Parties intend by this Agreement that Doctor is and at all times shall be an independent contractor and not the
                                                                agent or employee of ClearPath Orthodontics. Neither this Agreement nor any contract with ClearPath
                                                                Orthodontics nor any course of dealing or practice shall be interpreted as creating, or shall be deemed to create,
                                                                any employer-employee, principal-agent, partnership, joint venture or other relationship between Doctor and
                                                                ClearPath Orthodontics.
                                                                <br><br>

                                                                <b>16. Assignment</b><br>
                                                                This Agreement shall not be assigned by either Party hereto without the prior written consent of the other Party.
                                                                <br><br>

                                                                <b>17. Successor and assigns</b><br>
                                                                This Agreement shall be binding upon and shall inure solely to the benefit of the Parties hereto and their
                                                                respective successors and shall not be for the benefit of any other person, persons, or legal entities.
                                                                <br><br>

                                                                <b>18. Entire agreement and amendment</b><br>
                                                                This Agreement, the ClearPath Orthodontics Diagnostic and Treatment Form, and the Informed Consent &amp;
                                                                Agreement shall constitute and contain the entire agreement of the Parties and supersede any and all prior
                                                                negotiations, correspondence, understandings and agreements between the Parties respecting the subject matter
                                                                hereof. This Agreement can only be modified by an authorized representative of ClearPath Orthodontics.
                                                                <br><br>

                                                                <b>19. Severability</b><br>
                                                                If any provision of this Agreement is or shall be deemed a violation of any applicable law, rule or regulation, such
                                                                legal invalidity shall not void this Agreement or affect the remaining terms and provision of this Agreement and
                                                                this Agreement shall be construed and interpreted to comply with all laws, rules or regulations.
                                                                <br><br>

                                                                <b>20. Force majeure</b><br>
                                                                ClearPath Orthodontics cannot be in default or breach by reason of any failure of its performance under this
                                                                Agreement if such failure results, whether directly or indirectly, from fire, explosion, strike, freight embargo, act of
                                                                God, or of war, civil disturbance, act of any government, de jure or de facto, or any agency or official thereof, labor
                                                                shortage, transportation contingencies, severe weather, default of manufacturer or supplier, quarantine or
                                                                restriction, epidemic or catastrophe, lack of timely instructions or essential information from Doctor or any other
                                                                third party, or other conditions beyond the control of ClearPath Orthodontics.
                                                                <br><br>

                                                                <b>21. Notices</b><br>
                                                                All notices, demands, requests, approvals and other communications given or made pursuant hereto shall be in
                                                                writing and shall be deemed to have been given or made as of the date delivered or mailed if delivered personally
                                                                or mailed by certified mail (postage prepaid, return receipt requested), or on the date transmitted if transmitted
                                                                by facsimile or electronic mail, to Doctor at the address provided by Doctor.
                                                                <br><br>

                                                                <b>22. Waiver</b><br>
                                                                The failure of either Party at any time or times to require performance of any provision hereof shall in no manner
                                                                affect the right to enforce the same. No waiver by either Party of any condition, or of the breach of any term,
                                                                provision, entente or warranty contained in this Agreement, shall be deemed to be or construed as a further or
                                                                continuing waiver of any such condition or breach or a waiver of any other condition or of the breach of any other
                                                                term, agreement, entente or warranty.
                                                                <br><br>

                                                                <b>23. Governing law</b><br>
                                                                This Agreement shall be construed and governed under and by the governing laws of Pakistan.
                                                                In case of any dispute between the parties, the matter shall be referred to arbitrators to be appointed by each
                                                                party.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="" class=""></label>
                                            </div>
                                            <div class="col-md-9 offset-md-2">
                                                <button type="submit" name="submit" value="Save" class="btn btn-blue"><i class="glyphicon glyphicon-floppy-disk"></i> Save</button>
                                                <button type="submit" name="submit" value="Save & New" class="btn btn-blue"><i class="glyphicon glyphicon-floppy-open"></i> Save & New</button>
                                                <button type="button" class="btn btn-warning " onclick="window.location.href='{{url('cases-list/')}}'">Cancel</button>
                                            </div>
                                        </div>
                                    </section>
                                </form>
                            </div>
                        </div>
                        <!-- ------------------------------- -->
                        <!-- End Form Wizar Design With Validation-->
                        <!-- ------------------------------- -->
                    </div>
                </div>
            </div>
        </div>
    </div>