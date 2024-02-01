<?php

namespace App\Http\Livewire\CaseAdd;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

//Models For Case-Data Insertion
use App\Models\MedicalPrimaryCases;
use App\Models\MedicalPrimaryCasesDetail;
use App\Models\CasesMedicalHistory;
use App\Models\CasesDentalHistory;
use App\Models\CasesDentalExamination;
use App\Models\CasesMedicalAdvisedTreatment;
use App\Models\AlignercoPatientDiseases;
use App\Models\SetupRegion;
use App\Models\SetupRegionCity;
use App\Models\SetupCity;

//For Email 
use Illuminate\Support\Facades\Mail;
use App\Mail\CaseRegisterationMail;

use Illuminate\Support\Facades\Storage;

class FormWizard extends Component
{
    public $currentStep;
    public $saveFlag = 0;
    public $rxFormData;
    // public $locationFlag = 0;

    public function mount(){
        $this->currentStep = 1;
    }

    public function caseSave(){
        $this->emit('step7Validation');
        if($this->saveFlag){
            $step1 = session('step1Data', []);
            $step2 = session('step2Data', []);
            $step3 = session('step3Data', []);
            $step4 = session('step4Data', []);
            $step5 = session('step5Data', []);
            $step6 = session('step6Data', []);
            $step7 = session('step7Data', []);

            // dd($step1, $step2, $step3, $step4, $step5, $step6, $step7);

            // try{
            //     // Start a database transaction
            //     DB::beginTransaction();

                $primaryCases = new MedicalPrimaryCases();
                $primaryCasesDetail = new MedicalPrimaryCasesDetail();
                $casesMedicalHistory = new CasesMedicalHistory();
                $casesDentalHistory = new CasesDentalHistory();
                $casesDetnalExamination = new CasesDentalExamination();
                $casesMedicalAdvisedTreatment = new CasesMedicalAdvisedTreatment();

                $primaryCases->doctor = session('doctorId');
                $primaryCases->created_by = session('doctorId');
                $primaryCases->created = time();

                $primaryCases->patient = $step1['patientName'];
                $primaryCases->age = $step1['patientAge'];
                $primaryCases->gender = $step1['patientGender'];
                $primaryCases->nature_of_patient = $step1['adjunctiveProcedure'];
                $primaryCases->adjunctive_ebt = $step1['adjunctiveEBT'];
                $primaryCases->adjunctive_attachment = $step1['adjunctiveAttachment'];
                $primaryCases->clinic = $step1['clinic'];

                $primaryCases->area = $step2['area'];
                $primaryCases->radio_graphs_opg = $step2['radioGraphOPG'];
                $primaryCases->radio_graphs_ceph = $step2['radioGraphCEPH'];
                $primaryCases->arch_upper = $step2['archesUpper'];
                $primaryCases->arch_lower = $step2['archesLower'];
                $primaryCases->receive_date = $step2['recieveDate'];
                $primaryCases->impression_type = $step2['impressionType'];
                $primaryCases->zero_aligner_required = $step2['passiveAligner'];

                $primaryCases->description = $step7['comments'];
                $primaryCases->save();
                $primaryCaseId= $primaryCases->id;

                $primaryCasesDetail->primary_case_id = $primaryCaseId;
                $primaryCasesDetail->dentist_id = session('doctorId');
                $primaryCasesDetail->patient_email = $step1['patientEmail'];
                $primaryCasesDetail->patient_phone = $step1['patientPhone'];
                $primaryCasesDetail->patient_zip_code = $step1['patientZipCode'];
                $primaryCasesDetail->patient_address_1 = $step1['address1'];
                $primaryCasesDetail->patient_address_2 = $step1['address2'];
                $primaryCasesDetail->patient_address_3 = $step1['address3'];

                $primaryCasesDetail->patient_country = $step2['country'];
                $primaryCasesDetail->patient_city = $step2['city'];

                $primaryCasesDetail->chief_complaint = $step3['chiefComplaint'];


                $primaryCasesDetail->terms_conditions = $step7['termsAndCondition'];
                // $primaryCasesDetail->created_by = 8949;//Hard coded value;
                $primaryCasesDetail->doctor_signature = $step7['doctorSign'];               
                $primaryCasesDetail->save();

                $casesMedicalHistory->case_id = $primaryCaseId;
                $casesMedicalHistory->created_by = session('doctorId');
                $casesMedicalHistory->illness = $step4['illness'];
                $casesMedicalHistory->medications = $step4['medications'];
                $casesMedicalHistory->allergy = $step4['patientAllergy'];
                $casesMedicalHistory->chemo_radiotherapy = $step4['chemo'];
                $casesMedicalHistory->steriods_bisphosphonates = $step4['steroids'];
                foreach($step4['diseases'] as $d_id){
                    $AlignercoPatientDiseases = new AlignercoPatientDiseases();
                    $AlignercoPatientDiseases->case_id = $primaryCaseId;
                    $AlignercoPatientDiseases->case_id = $primaryCaseId;
                    $AlignercoPatientDiseases->disease_id = $d_id;
                    $AlignercoPatientDiseases->created_by = session('doctorId');
                    $AlignercoPatientDiseases->created_by_reference_table = 'MY_ORGANIZATION_TEAM_TABLE';//Hard Coded Value
                    $AlignercoPatientDiseases->created = time();
                    if($d_id == 7){
                        $AlignercoPatientDiseases->description = $step4['otherDiseases'];
                    }
                    $AlignercoPatientDiseases->save();
                }
                $casesMedicalHistory->save();

                $casesDentalHistory->case_id = $primaryCaseId;
                $casesDentalHistory->created_by = session('doctorId');
                $casesDentalHistory->gingivitis = $step5['gingivitis'];
                $casesDentalHistory->recession = $step5['recession'];
                $casesDentalHistory->mobility = $step5['mobility'];
                $casesDentalHistory->bone_loss = $step5['boneLoss'];
                $casesDentalHistory->tmj_issues = $step5['tmjIssues'];
                $casesDentalHistory->none = $step5['dentalHistoryNone'];
                $casesDentalHistory->ankylosed_teeth = $step5['ankylosedTeeth'];
                $casesDentalHistory->restoration_veneers = $step5['restorationsVeneers'];
                $casesDentalHistory->restoration_veneers_data = $step5['restorationsVeneersData'];
                $casesDentalHistory->bridges_implants = $step5['bridgesImplants'];
                $casesDentalHistory->bridges_implants_data = $step5['bridgesImplantsData'];
                $casesDentalHistory->crowns_rct = $step5['crownRCT'];
                $casesDentalHistory->crowns_rct_data = $step5['crownRCTData'];
                $casesDentalHistory->save();

                $casesDetnalExamination->case_id = $primaryCaseId;
                $casesDetnalExamination->created_by = session('doctorId');
                $casesDetnalExamination->incisor_relationship_overjet = $step6['overjet'];
                $casesDetnalExamination->incisor_relationship_overbite = $step6['overbite'];
                $casesDetnalExamination->teeth_not_to_be_moved = $step6['teethToBeMoved'];
                $casesDetnalExamination->other_to_be_moved = $step6['otherInput'];
                $casesDetnalExamination->treatment_indicated_upper = $step6['treatmentIndicatedUpper'];
                $casesDetnalExamination->treatment_indicated_lower = $step6['treatmentIndicatedLower'];
                $casesDetnalExamination->three_to_three_upper = $step6['teethMovedUpper3'];
                $casesDetnalExamination->five_to_five_upper = $step6['teethMovedUpper5'];
                $casesDetnalExamination->seven_to_seven_upper = $step6['teethMovedUpper7'];
                $casesDetnalExamination->three_to_three_lower = $step6['teethMovedLower3'];
                $casesDetnalExamination->five_to_five_lower = $step6['teethMovedLower5'];
                $casesDetnalExamination->seven_to_seven_lower = $step6['teethMovedLower7'];
                $casesDetnalExamination->black_triangles_present = $step6['blackTrianglePresent'];
                $casesDetnalExamination->black_triangles_absent = $step6['blackTriangleAbsent'];
                $casesDetnalExamination->midline_centered_upper = $step6['upperCentered'];
                $casesDetnalExamination->midline_shift_to_left_upper = $step6['upperLeft'];
                $casesDetnalExamination->midline_shift_to_right_upper = $step6['upperRight'];
                $casesDetnalExamination->midline_centered_lower = $step6['lowerCentered'];
                $casesDetnalExamination->midline_shift_to_left_lower = $step6['lowerLeft'];
                $casesDetnalExamination->midline_shift_to_right_lower = $step6['lowerRight'];
                $casesDetnalExamination->cross_bite_skeletal = $step6['skeletal'];
                $casesDetnalExamination->cross_bite_dental = $step6['dental'];
                $casesDetnalExamination->save();

                $casesMedicalAdvisedTreatment->case_id = $primaryCaseId;
                $casesMedicalAdvisedTreatment->created_by = session('doctorId');
                $casesMedicalAdvisedTreatment->sc_upper_complete = $step7['scUpperComplete'];
                $casesMedicalAdvisedTreatment->sc_upper_leave = $step7['scUpperLeave'];
                $casesMedicalAdvisedTreatment->sc_lower_complete = $step7['scLowerComplete'];
                $casesMedicalAdvisedTreatment->sc_lower_leave = $step7['scLowerLeave'];
                $casesMedicalAdvisedTreatment->cr_ipr = $step7['crIPR'];
                $casesMedicalAdvisedTreatment->cr_proclination = $step7['crProclination'];
                $casesMedicalAdvisedTreatment->cr_expansion = $step7['crExpansion'];
                $casesMedicalAdvisedTreatment->cr_extraction = $step7['crExtraction'];
                $casesMedicalAdvisedTreatment->treatment_setup = $step7['treatmentSetup'];
                $casesMedicalAdvisedTreatment->other_extraction = $step7['otherExtraction'];
                $casesMedicalAdvisedTreatment->dental_cross_bite = $step7['dentalCrossBite'];
                $casesMedicalAdvisedTreatment->midline_maintain = $step7['midlineMaintain'];
                $casesMedicalAdvisedTreatment->midline_correct = $step7['midlineCorrect'];
                $casesMedicalAdvisedTreatment->midline_move_upper = $step7['midlineMoveUpper'];
                $casesMedicalAdvisedTreatment->midline_move_lower = $step7['midlineMoveLower'];
                $casesMedicalAdvisedTreatment->canine_class_one_R = $step7['canineClassOneR'];
                $casesMedicalAdvisedTreatment->canine_class_one_L = $step7['canineClassOneL'];
                $casesMedicalAdvisedTreatment->canine_class_two_R = $step7['canineClassTwoR'];
                $casesMedicalAdvisedTreatment->canine_class_two_L = $step7['canineClassTwoL'];
                $casesMedicalAdvisedTreatment->canine_class_three_R = $step7['canineClassThreeR'];
                $casesMedicalAdvisedTreatment->canine_class_three_L = $step7['canineClassThreeL'];
                $casesMedicalAdvisedTreatment->molar_class_one_R = $step7['molarClassOneR'];
                $casesMedicalAdvisedTreatment->molar_class_one_L = $step7['molarClassOneL'];
                $casesMedicalAdvisedTreatment->molar_class_two_R = $step7['molarClassTwoR'];
                $casesMedicalAdvisedTreatment->molar_class_two_L = $step7['molarClassTwoL'];
                $casesMedicalAdvisedTreatment->molar_class_three_R = $step7['molarClassThreeR'];
                $casesMedicalAdvisedTreatment->molar_class_three_L = $step7['molarClassThreeL'];
                $casesMedicalAdvisedTreatment->incisor_required_overjet = $step7['incisorRequiredOverjet'];
                $casesMedicalAdvisedTreatment->incisor_required_overbite = $step7['incisorRequiredOverBite'];
                $casesMedicalAdvisedTreatment->save();

                // Commit the transaction if everything is successful
                // DB::commit();
                if(!empty($step2['city'])){
                    $regionCity = SetupRegionCity::where(['city_id' => $step2['city']])->first();
                    $regionId = $regionCity->region_id;
                    $city = SetupCity::find($step2['city']);
                    $cityName= $city->name;
                    $region = SetupRegion::find($regionId);
                    $regionName = $region->region;
                    $clinicId = $step1['clinic'];
                    $patientName = $step1['patientName'];
                    $this->sendEmail($clinicId, $patientName, $regionName, $cityName);
                }
                else{
                    dd('Mail Not Sent. Please fix the issue');
                }

                session()->forget('primaryId');
                session()->forget('step1Data');
                session()->forget('step2Data');
                session()->forget('step3Data');
                session()->forget('step4Data');
                session()->forget('step5Data');
                session()->forget('step6Data');
                session()->forget('step7Data');

                // dd(session('step7Data'));
                $this->emitSelf('swalSuccess');
                session()->flash('message', 'Case #'.$primaryCaseId.' Registered Successfully.');
                return redirect()->intended('dashboard');

            // } catch(\Exception $e){
            //     DB::rollBack();
            //     dd("An Error Occoured");
            // }
        }
    }

    public function sendEmail($clinicId, $patientName, $regionName, $cityName)
    {
        $to = "hussain5111997@gmail.com";
        $cc = "noreply@gmail.com";
        // if($regionName == 'Lahore'){
        //     $to = ['lahore.support@clearpathortho.pk'];
        //     //Here 1415 is the clinic_id of Dento Correct Clinic, for used to send Email to Dr, Nasreen of the Case which is related to Clinic Dento Correct.
        //     if($clinicId == 1415){ 
        //         $cc = ['arif.zaidi@clearpathortho.com', 'asif.mustafa@clearpathortho.com', 'amir.ghani@clearpathortho.com', 'waqas.tariq@clearpathortho.pk', 'faraz.ahmed@clearpathortho.pk', 'zohaib.zafar@clearpathortho.com'];
        //     }
        //     else{
        //         $cc = ['arif.zaidi@clearpathortho.com', 'asif.mustafa@clearpathortho.com', 'amir.ghani@clearpathortho.com', 'waqas.tariq@clearpathortho.pk', 'faraz.ahmed@clearpathortho.pk', 'zohaib.zafar@clearpathortho.com'];
        //     }
        // }else if($regionName == 'Islamabad'){
        //     $to = ['islamabad.support@clearpathortho.com'];
        //     $cc = ['haider.ali@clearpathortho.com', 'zubair.khan@clearpathortho.com', 'shahban.ali@clearpathortho.com', 'usman.zafar@clearpathortho.pk', 'shahaan.sahar@clearpathortho.com', 'zohaib.zafar@clearpathortho.com'];
        // }else{
        //     $to =  ['karachi.support@clearpathortho.com'];
        //     $cc = ['umer.farooq@clearpathortho.com', 'naeem.khan@clearpathortho.com', 'kashif.shoukat@clearpathortho.com', 'babar.mansoor@clearpathortho.pk', 'hassan.junaid@clearpathortho.com', 'sumbal.nasir@clearpathortho.pk', 'zohaib.zafar@clearpathortho.com'];
        // }

        $data = [
            'to' => $to,
            'cc' => $cc,
            'doctorName' => session('doctorName'),
            'patientName' => $patientName,
            'regionName' => $regionName,
            'cityName' => $cityName,
        ];

        Mail::send(new CaseRegisterationMail($data));

        return 'Email sent successfully!';
    }

    //Execute when user Clicked on Next Button in form-wizard
    public function increaseStep(){
        if($this->currentStep == 1) {
            $this->emit('step1Validation');
        }
        else if($this->currentStep == 2) {
            $this->emit('step2Validation');
        }
        else if($this->currentStep == 3) {
            $this->emit('step3Validation');
        }
        else if($this->currentStep == 4) {
            $this->emit('step4Validation');
        }
        else if($this->currentStep == 5) {
            $this->emit('step5Validation');
        }
        else if($this->currentStep == 6) {
            $this->emit('step6Validation');
        }
    }

    //Triggered when user Clicked on Previous Button in form-wizard
    public function decreaseStep(){
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    //Event Listeners triggered when Step Component is Validated.
    protected $listeners = [
                            'step1Validated',
                            'step2Validated',
                            'step3Validated',
                            'step4Validated',
                            'step5Validated',
                            'step6Validated',
                            'step7Validated',
                        ];

    //Execute When Step-1 Validation Successfully Completed
    public function step1Validated(){
        $this->currentStep++;
    }

    public function step2Validated(){
            $this->currentStep++;
    }

    //Execute When Step-3 Validation Successfully Completed
    public function step3Validated(){
        $this->currentStep++;;
    }

    //Execute When Step-4 Validation Successfully Completed
    public function step4Validated(){
        $this->currentStep++;
    }

    //Execute When Step-5 Validation Successfully Completed
    public function step5Validated(){
        $this->currentStep++;
    }

    //Execute When Step-6 Validation Successfully Completed
    public function step6Validated(){
        $this->currentStep++;
    }

    //Execute When Step-7 Validation Successfully Completed
    public function step7Validated(){
        $this->saveFlag = 1;
    }

    public function render()
    {
        return view('livewire.case-add.form-wizard');
    }
}
