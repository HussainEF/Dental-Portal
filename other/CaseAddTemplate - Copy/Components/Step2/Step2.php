<?php

namespace App\Http\Livewire\CaseAdd\Components\Step2;

use Livewire\Component;

class Step2 extends Component
{
    protected $listeners = [
        'step2Validation',
        'impression',//for Recieving the value of ImpressionType from ImpressionType Components
        'country', //for recieving country from Location Components
        'city', //for recieving City from Location Components
        'area', //for recieving Area from Location Components
    ]; 

    //Variables from Parent form-wizard for data passing between child and parent
    public $currentStep;

    //Step-2 Data Attributes
    public $step2Data;
    public $passiveAligner = 0;
    public $radioGraph = [];
    public $arches = [];
    public $radioGraphOPG = HARD_CODE_ID_NO;
    public $radioGraphCEPH = HARD_CODE_ID_NO; 
    public $archesUpper = HARD_CODE_ID_NO;
    public $archesLower = HARD_CODE_ID_NO;
    public $recieveDate;
    public $impressionType;
    public $country;
    public $city;
    public $area;

    public function mount(){
        $step2Data = session('step2Data');
        $this->radioGraph = $step2Data['radioGraph'] ?? [];
        $this->arches = $step2Data['arches'] ?? [];
        $this->recieveDate = $step2Data['recieveDate'];
        $this->impressionType = $step2Data['impressionType'];
        $this->passiveAligner = $step2Data['passiveAligner'];
        $this->country = $step2Data['country'];
        $this->city = $step2Data['city'];
        $this->area = $step2Data['area'];
    }
    
    public function impression($value){
        $this->impressionType = $value;
    }
    
    public function country($value){
        $this->country = $value;
    }

    public function city($value){
        $this->city = $value;
    }

    public function area($value){
        $this->area = $value;
    }

    public function step2Validation(){
        $this->step2Data = $this->validate([
            'radioGraph' => 'required|array',
            'radioGraphOPG'  => '',
            'radioGraphCEPH' => '',
            'arches' => 'required|array',
            'archesUpper' => '',
            'archesLower' => '',
            'recieveDate' => 'required',
            'impressionType' => 'required',
            'passiveAligner' => '',
            'country' => '',
            'city' => '',
            'area' => '',
        ]);

        //Setting RadioGraph OPG or CEPH Values
        $selectedCheckBox = count($this->step2Data['radioGraph']);
        for($i=0; $i<$selectedCheckBox; $i++){
            if(isset($this->step2Data['radioGraph'][$i])){
                switch($this->step2Data['radioGraph'][$i])
                {
                    case "opg":
                        $this->step2Data['radioGraphOPG'] = HARD_CODE_ID_YES;
                        break;
                    case "ceph":
                        $this->step2Data['radioGraphCEPH'] = HARD_CODE_ID_YES;
                        break;
                }
            }
        }

        //Setting Upper and Lower Arches 
        $selectedCheckBox = count($this->step2Data['arches']);
        for($i=0; $i<$selectedCheckBox; $i++){
            if(isset($this->step2Data['arches'][$i])){
                switch($this->step2Data['arches'][$i])
                {
                    case "upper":
                        $this->step2Data['archesUpper'] = HARD_CODE_ID_YES;
                        break;
                    case "lower":
                        $this->step2Data['archesLower'] = HARD_CODE_ID_YES;
                        break;
                }
            }
        }

        if(isset($this->step2Data['passiveAligner'])){
            if($this->step2Data['passiveAligner'] == 1)
                $this->step2Data['passiveAligner'] = HARD_CODE_ID_YES;
            else 
                $this->step2Data['passiveAligner'] = HARD_CODE_ID_NO;
        }

        $this->impressionType = $this->step2Data['impressionType'];

        //Storing the Data of Step-2 in session using Helper Function
        session()->forget('step3Data');
        session(['step2Data' => $this->step2Data]);

        // dd($this->step2Data);
        $this->emitUp('step2Validated');
    }

    public function render()
    {
        return view('livewire.case-add.components.step2.step2');
    }
}
