<!-- Core JS files -->
<script src="{{asset('limitless/global_assets/assets/demo/demo_configurator.js')}}"></script>
<script src="{{asset('limitless/global_assets/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
    <script src="{{asset('limitless/global_assets/assets/js/jquery/jquery.min.js')}}"></script>
    <!-- Form Wizards -->
    <!-- <script src="{{asset('limitless/global_assets/assets/js/vendor/forms/validation/validate.min.js')}}"></script> -->
    <!-- <script src="{{asset('limitless/global_assets/assets/js/vendor/forms/wizards/steps.min.js')}}"></script> -->
    
    <!-- CK Editor -->
    <!-- <script src="{{asset('limitless/global_assets/assets/js/vendor/editors/ckeditor/ckeditor_classic.js')}}"></script> -->

    <!-- Dropzone Uploader -->
    <!-- <script src="{{asset('limitless/global_assets/assets/js/vendor/uploaders/dropzone.min.js')}}"></script> -->

    <!-- <script src="{{asset('js/signature_pad.min.js')}}"></script> -->
    <script src="{{asset('limitless/layout1/assets/js/app.js')}}"></script>
    <script src="{{asset('limitless/layout1/assets/js/custom.js')}}"></script>
    <!-- <script src="{{asset('limitless/global_assets/assets/demo/pages/form_wizard.js')}}"></script> -->
<!-- /theme JS files -->

<!-- <script>
      $("#rxForm").validate({
                rules: {
                    //step1
                    patient_name: "required", 
                    age: "required",
                    gender: "required",
                    nature_of_patient: "required",
                    patient_email: "required",
                    patient_phone: "digits",

                    //step2
                    impression: "required",
                    radio_graph: "required",
                    arch: "required",

                    //step3
                    chief_complaint: "required",

                    //step4
                    illness:"required",
                    medications:"required",
                    patient_allergy:"required",

                    // step5
                    dentalHistory: "required",
                    dental_history_rct: "required",
                    dental_history_restorations: "required",
                    dental_history_implants: "required",

                    //step6
                    treatment_indicated: "required",
                    teeth_moved: "required",
                    black_triangle: "required",
                    midline: "required",

                    //step7
                    space_closure: "required",
                    crowding_resolution: "required",
                    midline_2: "required",
                    // //file upload
                    // file_data_stl_1: "required",
                    // file_data_stl_2: "required",
                    // file_data_x_ray_opg: "required",
                    // file_data_x_ray_ceph: "required",
                    // file_data_rx: "required",
                    terms_condition: "required",
                }, 
                messages: {
                    //step1
                    patient_name: "The patient name field is required.", 
                    age: "The patient age field is required.",
                    gender: "The gender field is required.",
                    nature_of_patient: "The nature of patient field is required.",
                    patient_email: "The patient email field is required.",
                    patient_phone: "Only Digit 0-9 can be inputted.",

                    //step2
                    impression: "The impression field is required.",
                    radio_graph: "The radio graph Ceph or OPG field is required.",
                    arch: "The arch Upper or Lower field is required.",

                    //step3
                    chief_complaint: "The chief complaint field is required.",

                    //step4
                    illness:"The illness field is required.",
                    medications:"The illness field is required.",
                    patient_allergy:"The patient allergy field is required.",

                    //step5
                    dentalHistory: "One CheckBox field is required.",
                    dental_history_rct: "The dental history rct field is required.",
                    dental_history_restorations: "The dental history restorations field is required.",
                    dental_history_implants: "The dental history implants field is required.",

                    //step6
                    treatment_indicated: "The treatment indicated field is required.",
                    teeth_moved: "The teeth upper or lower field is required.",
                    black_triangle: " The black triangles field is required.",
                    midline: "The midline upper or lower field is required.",

                    //step7
                    space_closure: "The space closure field is required.",
                    crowding_resolution: "The crowding resolution field is required.",
                    midline_2: "The midline field is required.",
                    //file upload
                    // file_data_stl_1: "required",
                    // file_data_stl_2: "required",
                    // file_data_x_ray_opg: "required",
                    // file_data_x_ray_ceph: "required",
                    // file_data_rx: "required",
                    terms_condition: "Please Read Terms & Conditions for proceed."
                },
                errorContainer: "#errorGender, #errorNatureOfPatient, #errorImpressionType, #errorRadioGraph, #errorArch, #errorDentalHistory, #errorDentalHistoryRCT, #errorDentalHistoryRestoration, #errorDentalHistoryImplants, #errorTreatmentIndicated, #errorTeethMoved, #errorBlackTriangle, #errorMidline, #errorBlackTriangle, #errorSpaceClosure, #errorMidline2, #errorCrowdingResolution",
                errorPlacement: function(error, element){
                    if(element.attr("name") === "gender"){
                        error.appendTo("#errorGender");
                    }else if(element.attr("name") === "nature_of_patient"){
                        error.appendTo("#errorNatureOfPatient");
                    }else if(element.attr("name") === "impression"){
                        error.appendTo("#errorImpressionType");
                    }else if(element.attr("name") === "radio_graph"){
                        error.appendTo("#errorRadioGraph");
                    }else if(element.attr("name") === "arch"){
                        error.appendTo("#errorArch");
                    }else if(element.attr("name") === "dentalHistory"){
                        error.appendTo("#errorDentalHistory");
                    }else if(element.attr("name") === "dental_history_rct"){
                        error.appendTo("#errorDentalHistoryRCT");
                    }else if(element.attr("name") === "dental_history_restorations"){
                        error.appendTo("#errorDentalHistoryRestoration");
                    }else if(element.attr("name") === "dental_history_implants"){
                        error.appendTo("#errorDentalHistoryImplants");
                    }else if(element.attr("name") === "treatment_indicated"){
                        error.appendTo("#errorTreatmentIndicated");
                    }else if(element.attr("name") === "errorTeethMoved"){
                        error.appendTo("#errorTeethMoved");
                    }else if(element.attr("name") === "black_triangle"){
                        error.appendTo("#errorBlackTriangle");
                    }else if(element.attr("name") === "midline"){
                        error.appendTo("#errorMidline");
                    }else if(element.attr("name") === "space_closure"){
                        error.appendTo("#errorSpaceClosure");
                    }else if(element.attr("name") === "crowding_resolution"){
                        error.appendTo("#errorCrowdingResolution");
                    }else if(element.attr("name") === "midline_2"){
                        error.appendTo("#errorMidline2");
                    }else if(element.attr("name") === "terms_condition"){
                        error.appendTo("#errorTermsCondtion");
                    }else{
                        error.insertAfter(element);
                    }
                },
                errorClass: "text-danger",
                invalidHandler: function(form){
                    alert("Please input all required fields.");
                },
                onsubmit: false,
                // debug: false,
                submitHandler: function(form) { 
                    console.log("Test");
                    // $("#finish").attr("disabled", true);
                    // $("#finish").html("Submitting... please wait.");
                    alert("Success!"); 
                },
            });
</script> -->