<?php

namespace App\Http\Livewire\Dashboard;
use App\Models\MedicalPrimaryCases;
use App\Models\MedicalPrimaryCasesDetail;
use Illuminate\Support\Facades\Auth;


use Livewire\Component;

class CardDetail extends Component
{   
    //Variables for Receiving Data from Parent
    public $cardId;
    public $cardName;

    //for setting color
    public $bgClass;

    public $medicalPrimaryCases;
    public $medicalPrimaryCasesDetail;

    public $casesDetailStageWise = NULL;
    public $casesDetailAll = NULL;

    public $countDoctorCases;
    public $countStages;


    public function cardColorAndIcon(){
        $cardBg = "";
        $cardIcon = "";
        $colorIcon = [];
        if($this->cardId == 1){
            $this->cardBg = "primary";
            $this->cardIcon = "first-aid-kit";
            $colorIcon[0] = $this->cardBg;
            $colorIcon[1] = $this->cardIcon;
        } 
        else if($this->cardId == 4){
            $this->cardBg = "danger";
            $this->cardIcon = "clock";
            $colorIcon[0] = $this->cardBg;
            $colorIcon[1] = $this->cardIcon;
        }
        else if($this->cardId == 5){
            $this->cardBg = "info";
            $this->cardIcon = "cloud-arrow-up";
            $colorIcon[0] = $this->cardBg;
            $colorIcon[1] = $this->cardIcon;
        }
        else if($this->cardId == 6){
            $this->cardBg = "warning";
            $this->cardIcon = "hourglass";
            $colorIcon[0] = $this->cardBg;
            $colorIcon[1] = $this->cardIcon;
        }
        else if($this->cardId == 7){
            $this->cardBg = "secondary";
            $this->cardIcon = "truck";
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

    public function mount(){
        $teamId = session('doctorId');
        // $teamId = Auth::id();
        if($this->cardId == 1){
            $doctorCases = MedicalPrimaryCases::with('MedicalPrimaryCasesDetail')->has('MedicalPrimaryCasesDetail')->where(['doctor' => $teamId, 'is_deleted' => 42])->get();
            $this->countDoctorCases = $doctorCases->count();
            if($this->countDoctorCases != 0){
                $this->casesDetailAll = $doctorCases->toArray();
                // dd($this->casesDetailAll);
            }else{
                $this->casesDetailAll = NULL;
            }
        }
        else{
            $this->medicalPrimaryCases = MedicalPrimaryCases::with(['MedicalPrimaryCasesDetail'])
            ->whereHas('MedicalPrimaryCasesDetail', function ($query) {
                $query->where(['dentist_case_present_status_id' => $this->cardId]);
            })
            ->where(['doctor' => $teamId, 'is_deleted' => 42])
            ->get();
            $this->countStages = $this->medicalPrimaryCases->count();
            if($this->countStages != 0){
                $this->casesDetailStageWise = $this->medicalPrimaryCases->toArray();
                // dd($this->casesDetailStageWise);
            }
            else{
                $this->casesDetailStageWise = NULL;
            }
        }
    }

    public function getCasesData($cId){
        if($cId == 1){
            $this->emit('casesDetail', $this->casesDetailAll);
        }
        else{
            $this->emit('casesDetail', $this->casesDetailStageWise);
        }
        $this->emit('cardId', $this->cardId);
        $this->emit('cardName', $this->cardName);
    }

    public function render(){
        $this->bgClass = $this->cardColorAndIcon();
        return view('livewire.dashboard.card-detail');
    }
} 