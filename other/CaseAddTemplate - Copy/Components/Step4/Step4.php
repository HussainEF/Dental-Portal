<?php

namespace App\Http\Livewire\CaseAdd\Components\Step4;

use Livewire\Component;

class Step4 extends Component
{
    protected $listeners = [
        'step4Validation',
        'diseases',
        'otherDiseases'
    ]; 

    //Variables from Parent form-wizard for data passing between child and parent
    public $currentStep;

    //Step-4 Data Attributes
    public $step4Data;
    public $illness;
    public $medications;
    public $patientAllergy;
    public $chemoSteroids = [];
    public $chemo;
    public $steroids;
    public $diseases = [];
    public $otherDiseases;

    public function mount(){
        $step4Data = session('step4Data');
        $this->illness = $step4Data['illness'];
        $this->medications = $step4Data['medications'];
        $this->chemoSteroids = $step4Data['chemoSteroids'] ?? [];
        $this->patientAllergy = $step4Data['patientAllergy'];
        $this->diseases = $step4Data['diseases'] ?? [];
    }

    public function diseases($value){
        $this->diseases = $value;
    }

    public function otherDiseases($value){
        $this->otherDiseases = $value;
    }


    public function step4Validation(){
        $this->step4Data = $this->validate([
         'illness' => 'required',
         'medications' => 'required',
         'patientAllergy' => 'required',
         'chemoSteroids' => 'required|array',
         'chemo' => '',
         'steroids' => '',
         'diseases' => 'array',
         'otherDiseases' => ''
        ]);

        //Setting RadioGraph STEROIDS or CHEMO Values
        $selectedCheckBox = count($this->step4Data['chemoSteroids']);
        for($i=0; $i<$selectedCheckBox; $i++){
            if(isset($this->step4Data['chemoSteroids'][$i])){
                switch($this->step4Data['chemoSteroids'][$i])
                {
                    case "chemo":
                        $this->step4Data['chemo'] = HARD_CODE_ID_YES;
                        break;
                    case "steroids":
                        $this->step4Data['steroids'] = HARD_CODE_ID_YES;
                        break;
                }
            }
        }

        $this->diseases = $this->step4Data['diseases'];
        $this->otherDiseases = $this->step4Data['otherDiseases'];

        //Storing the Data of Step-4 in session using Helper Function
        session(['step4Data' => $this->step4Data]);

        // dd($this->step4Data);
        $this->emitUp('step4Validated');
    }

    public function render()
    {
        return view('livewire.case-add.components.step4.step4');
    }
}
