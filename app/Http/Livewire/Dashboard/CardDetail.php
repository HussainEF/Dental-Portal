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

    public $casesDetail;
    public $doctorCases;

    public $cardBg="";
    public $cardIcon="";

    public function cardColorAndIcon(){
        $colorIcon=[];
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
        // $teamId = Auth::id();
        $teamId = 8949; //its hard code value must be fixed.
        $countDoctorCases = MedicalPrimaryCases::where(['doctor' => $teamId, 'is_deleted' => 42])->get()->count();
        return $countDoctorCases;
    }
    
    public function fetchProductionStages(){
        // // $teamId = Auth::id();
        // if($this->card_id == 7){
            $teamId = 8949; //its hard code value must be fixed.
            $stageData = MedicalPrimaryCasesDetail::with(['MedicalPrimaryCases' => function($query) use($teamId) {
                $query->select('id', 'doctor', 'patient', 'impression_type', 'receive_date')->where(['doctor' => $teamId, 'is_deleted' => 42]);
            }])->where('dentist_case_present_status_id', $this->card_id)->get(['patient_email', 'dentist_case_present_status_id']);
            $data = $stageData->count();
            $this->casesDetail = $stageData;
            // dd($stageData);
            return $data;
        // }
        // else{
        //     return '999';
        // }
    }

    public function getCasesData(){
        $this->fetchProductionStages();
        $this->emit('casesDetail', $this->casesDetail);
        $this->emit('cardId', $this->card_id);
    }

    public function render(){
        $this->doctorCases = $this->fetchDoctorCases();
        return view('livewire.dashboard.card-detail',['bgClass' => $this->cardColorAndIcon(), 'casesStages' => $this->fetchProductionStages()]);
    }
} 