<?php

namespace App\Http\Livewire\Dashboard;
use App\Models\MedicalPrimaryCases;
use App\Models\MedicalPrimaryCasesDetail;
use Illuminate\Support\Facades\Auth;


use Livewire\Component;

class CardDetail extends Component
{   
    public $card_id;
    public $card_name;
    public $bgClass;

    public $casesDetailStageWise;
    public $casesDetailAll;

    public $countDoctorCases;
    public $countStages;


    public function cardColorAndIcon(){
        $cardBg = "";
        $cardIcon = "";
        $colorIcon = [];
        if($this->card_id == 1){
            $this->cardBg = "primary";
            $this->cardIcon = "medkit";
            $colorIcon[0] = $this->cardBg;
            $colorIcon[1] = $this->cardIcon;
        } 
        else if($this->card_id == 4){
            $this->cardBg = "danger";
            $this->cardIcon = "clock";
            $colorIcon[0] = $this->cardBg;
            $colorIcon[1] = $this->cardIcon;
        }
        else if($this->card_id == 5){
            $this->cardBg = "info";
            $this->cardIcon = "cloud-arrow-up";
            $colorIcon[0] = $this->cardBg;
            $colorIcon[1] = $this->cardIcon;
        }
        else if($this->card_id == 6){
            $this->cardBg = "warning";
            $this->cardIcon = "hourglass-start";
            $colorIcon[0] = $this->cardBg;
            $colorIcon[1] = $this->cardIcon;
        }
        else if($this->card_id == 7){
            $this->cardBg = "secondary";
            $this->cardIcon = "truck-fast";
            $colorIcon[0] = $this->cardBg;
            $colorIcon[1] = $this->cardIcon;
        }
        else{
            $this->cardBg = "dark";
            $this->cardIcon = "";
            $colorIcon[0] = $this->cardBg;
            $colorIcon[1] = $this->cardIcon;
        }
        
        return $colorIcon;
    }

    public function fetchDoctorCases(){
        if($this->card_id == 1){
        // $teamId = Auth::id();
        $teamId = 8949; //its hard code value must be fixed.
        // $doctorCases = MedicalPrimaryCases::with('MedicalPrimaryCasesDetail')->where(['doctor' => $teamId, 'is_deleted' => 42])->get(['tbl_application_medical_primary_cases.id', 'tbl_application_medical_primary_cases.doctor', 'tbl_application_medical_primary_cases.patient', 'tbl_application_medical_primary_cases.impression_type', 'tbl_application_medical_primary_cases.receive_date', 'tbl_application_medical_primary_cases_details.patient_email', 'tbl_application_medical_primary_cases_details.dentist_case_present_status_id']);
        $doctorCases = MedicalPrimaryCases::with(['MedicalPrimaryCasesDetail' => function ($query) {
            $query->select('patient_email', 'dentist_case_present_status_id');
        }])->where(['doctor' => $teamId, 'is_deleted' => 42])->get(['id', 'doctor', 'patient', 'impression_type', 'receive_date']);
        // MedicalPrimaryCases::with('MedicalPrimaryCasesDetail')->where(['doctor' => $teamId, 'is_deleted' => 42])->get(['id', 'doctor', 'patient', 'impression_type', 'receive_date']);
        
        // dd($doctorCases->toArray());
        $this->countDoctorCases = $doctorCases->count();
        $this->casesDetailAll = $doctorCases;
        }
    }
    
    public function fetchProductionStages(){
        // $teamId = Auth::id();
        $teamId = 8949; //its hard code value must be fixed.
        $stageData = MedicalPrimaryCasesDetail::with(['MedicalPrimaryCases' => function($query) use($teamId) {
            $query->select('id', 'doctor', 'patient', 'impression_type', 'receive_date')->where(['doctor' => $teamId, 'is_deleted' => 42]);
        }])->where('dentist_case_present_status_id', $this->card_id)->get(['patient_email', 'dentist_case_present_status_id']);
        $countStages = $stageData->count();
        // dd($stageData->toArray());
        $this->countStages = $countStages;
        $this->casesDetailStageWise = $stageData;
    }

    public function getCasesData($cId){
        if($cId == 1){
            $this->fetchDoctorCases();
            $this->emit('casesDetail', $this->casesDetailAll);
        }
        else{
            $this->fetchProductionStages();
            $this->emit('casesDetail', $this->casesDetailStageWise);
        }
        $this->emit('cardId', $this->card_id);
    }

    public function render(){
        $this->fetchDoctorCases();
        $this->fetchProductionStages();
        $this->bgClass = $this->cardColorAndIcon();
        return view('livewire.dashboard.card-detail');
    }
} 