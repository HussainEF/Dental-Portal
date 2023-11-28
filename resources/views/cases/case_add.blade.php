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
                                <form method="post" action="case-save" class="validation-wizard wizard-circle mt-5">
                                    @csrf
                                    <!-- Step 1 -->
                                    <h6>Patient Information</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                <label for="wfirstName2"> Patient Name : <span class="danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="wfirstName2" name="patient_name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                <label for="wlastName2"> Patient Age : <span class="danger">*</span>
                                                </label>
                                                <input type="number" class="form-control" id="wlastName2" min="1" class="form-control" name="age" />
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
                                                    @livewire('case-add.patient-nature')
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
                                                    @livewire('case-add.clinic-list')
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
                                                    @livewire('case-add.impression-type')
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
                                                    @livewire('case-add.passive-aligner')
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
                                        @livewire('case-add.location')
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
                                            <div class="col-md-12 mb-3">
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
                                                        <input id="chemo_checkbox" name="chemo_radiotherapy" class="me-2" value="" type="checkbox">
                                                        <label for="chemo_checkbox">CHEMO/RADIOTHERAPY</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="steriods_checkbox" name="steriods_bisphosphonates" class="me-2" value=""  type="checkbox">
                                                        <label for="steriods_checkbox">STEROIDS/BISPHOSPHONATES</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @livewire('case-add.diseases')
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
                                                            <input id="gingivits_checkbox" name="gingivits" class="me-2" value="" type="checkbox">
                                                            <label for="gingivits_checkbox">GINGIVITIS</label>
                                                        </div>                                            
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input id="recession_checkbox" name="recession" class="me-2" value="" type="checkbox">
                                                            <label for="recession_checkbox">RECESSION</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input id="mobility_checkbox" name="mobility" class="me-2" value="" type="checkbox">
                                                            <label for="mobility_checkbox">MOBILITY</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input id="bone_loss_checkbox" name="bone_loss" class="me-2" value="" type="checkbox">
                                                            <label for="bone_loss_checkbox">BONE LOSS</label>
                                                        </div>                                            
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input id="tmj_issues_checkbox" name="tmj_issues" class="me-2" value="" type="checkbox">
                                                            <label for="tmj_issues_checkbox">TMJ ISSUES</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <input id="dental_history_none_checkbox" name="dental_history_none" class="me-2" value="" type="checkbox">
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
                                        <div class="row mb-3">
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
                                                        <input id="treatment_checkbox_upper" name="treatment_indicated_upper" class="me-2" value="" type="checkbox">
                                                        <label for="treatment_checkbox_upper">Upper</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input id="treatment_checkbox_lower" name="treatment_indicated_lower" class="me-2" value="" type="checkbox">
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
                                                                <input id="black_triangle_present_checkbox" name="black_triangle_present" class="me-2" value="" type="checkbox">
                                                                <label for="black_triangle_present_checkbox">Present</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="black_triangle_absent_checkbox" name="black_triangle_absent" class="me-2" value="" type="checkbox">
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
                                                                <input id="skeletal_checkbox" name="skeletal" class="me-2" value="" type="checkbox">
                                                                <label for="skeletal_checkbox">Skeletal</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="dental_checkbox" name="dental" class="me-2" value="" type="checkbox">
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
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label class="" for="overjet">Overjet</label>
                                                        <input id="overjet" name="overjet" value="" class="form-control" type="text">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="" for="overbite">Overbite</label>
                                                        <input id="overbite" name="overbite" value="" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
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
                                                                <input id="sc_upper_complete_checkbox" name="sc_upper_complete" class="me-2" value="" type="checkbox">
                                                                <label for="sc_upper_complete_checkbox">Complete</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="sc_upper_leave_checkbox" name="sc_upper_leave" class="me-2" value="" type="checkbox">
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
                                                                <input id="sc_lower_complete_checkbox" name="sc_lower_complete" class="me-2" value="" type="checkbox">
                                                                <label for="sc_lower_complete_checkbox">Complete</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input id="sc_lower_leave_checkbox" name="sc_lower_leave" class="me-2" value="" type="checkbox">
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
                                                        <input id="cr_ipr_checkbox" name="cr_ipr" class="me-2" value="" type="checkbox">
                                                        <label for="cr_ipr_checkbox">IPR</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input id="cr_proclination_checkbox" name="cr_proclination" class="me-2" value=""  type="checkbox">
                                                        <label for="cr_proclination_checkbox">Proclination</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input id="cr_expansion_checkbox" name="cr_expansion" class="me-2" value=""  type="checkbox">
                                                        <label for="cr_expansion_checkbox">Expansion</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input id="cr_extraction_checkbox" name="cr_extraction" class="me-2" value=""  type="checkbox">
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
                                                        <input id="treatment_setup_checkbox" name="treatment_setup" class="me-2" value="" type="checkbox">
                                                        <label for="treatment_setup_checkbox">As per treatment setup</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="other_extraction_checkbox" name="other_extraction" class="me-2" value="" type="checkbox">
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
                                                        <input id="midline_maintain_checkbox" name="midline_maintain" class="me-2" value="" type="checkbox">
                                                        <label for="midline_maintain_checkbox">Maintain</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input id="midline_correct_checkbox" name="midline_correct" class="me-2" value="" type="checkbox">
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
                                                        <div class="form-group d-flex align-items-baseline ms-4 me-4">
                                                            <input id="canine_class_one_r_checkbox" name="canine_class_one_r" class="me-2" value="" type="checkbox">
                                                            <label for="canine_class_one_r_checkbox">R</label>
                                                        </div>
                                                        <div class="form-group d-flex align-items-baseline">
                                                            <input id="canine_class_one_l_checkbox" name="canine_class_one_l" class="me-2" value="" type="checkbox">
                                                            <label for="canine_class_one_l_checkbox">L</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 d-flex">
                                                        <label class="" for="">Class ||</label>
                                                        <div class="form-group d-flex align-items-baseline ms-4 me-4">
                                                            <input id="canine_class_two_r_checkbox" name="canine_class_two_r" class="me-2" value="" type="checkbox">
                                                            <label for="canine_class_two_r_checkbox">R</label>
                                                        </div>
                                                        <div class="form-group d-flex align-items-baseline">
                                                            <input id="canine_class_two_l_checkbox" name="canine_class_two_l" class="me-2" value="" type="checkbox">
                                                            <label for="canine_class_two_l_checkbox">L</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 d-flex">
                                                        <label class="" for="">Class |||</label>
                                                        <div class="form-group d-flex align-items-baseline ms-4 me-4">
                                                            <input id="canine_class_three_r_checkbox" name="canine_class_three_r" class="me-2" value="" type="checkbox">
                                                            <label for="canine_class_three_r_checkbox">R</label>
                                                        </div>
                                                        <div class="form-group d-flex align-items-baseline">
                                                            <input id="canine_class_three_l_checkbox" name="canine_class_three_l" class="me-2" value="" type="checkbox">
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
                                                        <div class="form-group d-flex align-items-baseline ms-4 me-4">
                                                            <input id="molar_class_one_r_checkbox" name="molar_class_one_r" class="me-2" value="" type="checkbox">
                                                            <label for="molar_class_one_r_checkbox">R</label>
                                                        </div>
                                                        <div class="form-group d-flex align-items-baseline">
                                                            <input id="molar_class_one_l_checkbox" name="molar_class_one_l" class="me-2" value="" type="checkbox">
                                                            <label for="molar_class_one_l_checkbox">L</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 d-flex">
                                                        <label class="" for="">Class ||</label>
                                                        <div class="form-group d-flex align-items-baseline ms-4 me-4">
                                                            <input id="molar_class_two_r_checkbox" name="molar_class_two_r" class="me-2" value="" type="checkbox">
                                                            <label for="molar_class_two_r_checkbox">R</label>
                                                        </div>
                                                        <div class="form-group d-flex align-items-baseline">
                                                            <input id="molar_class_two_l_checkbox" name="molar_class_two_l" class="me-2" value="" type="checkbox">
                                                            <label for="molar_class_two_l_checkbox">L</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 d-flex">
                                                        <label class="" for="">Class |||</label>
                                                        <div class="form-group d-flex align-items-baseline ms-4 me-4">
                                                            <input id="molar_class_three_r_checkbox" name="molar_class_three_r" class="me-2" value="" type="checkbox">
                                                            <label for="molar_class_three_r_checkbox">R</label>
                                                        </div>
                                                        <div class="form-group d-flex align-items-baseline">
                                                            <input id="molar_class_three_l_checkbox" name="molar_class_three_l" class="me-2" value="" type="checkbox" >
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
                                        <!-- <div class="row mb-3">
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
                                        </div> -->
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <label for="">Special Instructions</label>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea name="comments" class="form-control" rows="10" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        @livewire('case-add.terms-and-conditions')
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="" class=""></label>
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