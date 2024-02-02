<?php

namespace App\Http\Livewire\CaseAdd\Components\Step6;

use Livewire\Component;

class Step6 extends Component
{
    protected $listeners = [
        'step6Validation'
    ]; 

    //Variables from Parent form-wizard for data passing between child and parent
    public $currentStep;

    //Step-6 Data Attributes
    public $step6Data;
    public $treatmentIndicated = [];
    public $treatmentIndicatedUpper = HARD_CODE_ID_NO;
    public $treatmentIndicatedLower = HARD_CODE_ID_NO;
    public $teethMoved = [];
    public $teethMovedUpper3 = HARD_CODE_ID_NO;
    public $teethMovedLower3 = HARD_CODE_ID_NO;
    public $teethMovedUpper5 = HARD_CODE_ID_NO;
    public $teethMovedLower5 = HARD_CODE_ID_NO;
    public $teethMovedUpper7 = HARD_CODE_ID_NO;
    public $teethMovedLower7 = HARD_CODE_ID_NO;
    public $blackTriangle =[];
    public $blackTrianglePresent = HARD_CODE_ID_NO;
    public $blackTriangleAbsent = HARD_CODE_ID_NO;
    public $midline = [];
    public $upperCentered = HARD_CODE_ID_NO;
    public $lowerCentered = HARD_CODE_ID_NO;
    public $upperLeft = HARD_CODE_ID_NO;
    public $lowerLeft = HARD_CODE_ID_NO;
    public $upperRight = HARD_CODE_ID_NO;
    public $lowerRight = HARD_CODE_ID_NO;
    public $crossBite = [];
    public $skeletal = HARD_CODE_ID_NO;
    public $dental = HARD_CODE_ID_NO;
    public $overjet;
    public $overbite;
    public $teethToBeMoved;
    public $otherInput;

    public function mount(){
        $step6Data = session('step6Data');
        $this->treatmentIndicated = $step6Data['treatmentIndicated'] ?? [];
        $this->teethMoved = $step6Data['teethMoved'] ?? [];
        $this->blackTriangle = $step6Data['blackTriangle'] ?? [];
        $this->midline = $step6Data['midline'] ?? [];
        $this->crossBite = $step6Data['crossBite'] ?? [];
        $this->overjet = $step6Data['overjet'];
        $this->overbite = $step6Data['overbite'];
        $this->teethToBeMoved = $step6Data['teethToBeMoved'];
        $this->otherInput = $step6Data['otherInput'];
    }

    public function step6Validation(){
        $this->step6Data = $this->validate([
         'treatmentIndicated' => 'required|array',
         'treatmentIndicatedUpper' => '',
         'treatmentIndicatedLower' => '',
         'teethMoved' => 'required|array',
         'teethMovedUpper3' => '',
         'teethMovedLower3' => '',
         'teethMovedUpper5' => '',
         'teethMovedLower5' => '',
         'teethMovedUpper7' => '',
         'teethMovedLower7' => '',
         'blackTriangle' => 'required|array',
         'blackTrianglePresent' => '',
         'blackTriangleAbsent' => '',
         'midline' => 'required|array',
         'upperCentered' => '',
         'lowerCentered' => '',
         'upperLeft' => '',
         'lowerLeft' => '',
         'upperRight' => '',
         'lowerRight' => '',
         'crossBite' => 'array',
         'skeletal' => '',
         'dental' => '',
         'overjet' => '',
         'overbite' => '',
         'teethToBeMoved' => '',
         'otherInput' => ''
        ]);

        //Setting Treatment-Indicated Upper/Lower Values
        $selectedCheckBox = count($this->step6Data['treatmentIndicated']);
        for($i=0; $i<$selectedCheckBox; $i++){
            if(isset($this->step6Data['treatmentIndicated'][$i])){
                switch($this->step6Data['treatmentIndicated'][$i])
                {
                    case "upper":
                        $this->step6Data['treatmentIndicatedUpper'] = HARD_CODE_ID_YES;
                        break;
                    case "lower":
                        $this->step6Data['treatmentIndicatedLower'] = HARD_CODE_ID_YES;
                        break;
                }
            }
        }

        //Setting Teeth-to-be-Moved Values
        $selectedCheckBox = count($this->step6Data['teethMoved']);
        for($i=0; $i<$selectedCheckBox; $i++){
            if(isset($this->step6Data['teethMoved'][$i])){
                switch($this->step6Data['teethMoved'][$i])
                {
                    case "teethMovedUpper3":
                        $this->step6Data['teethMovedUpper3'] = HARD_CODE_ID_YES;
                        break;
                    case "teethMovedLower3":
                        $this->step6Data['teethMovedLower3'] = HARD_CODE_ID_YES;
                        break;
                    case "teethMovedUpper5":
                        $this->step6Data['teethMovedUpper5'] = HARD_CODE_ID_YES;
                        break;
                    case "teethMovedLower5":
                        $this->step6Data['teethMovedLower5'] = HARD_CODE_ID_YES;
                        break;
                    case "teethMovedUpper7":
                        $this->step6Data['teethMovedUpper7'] = HARD_CODE_ID_YES;
                        break;
                    case "teethMovedLower7":
                        $this->step6Data['teethMovedLower7'] = HARD_CODE_ID_YES;
                        break;
                }
            }
        }

        //Setting Black-Triangles Present/Absent Values
        $selectedCheckBox = count($this->step6Data['blackTriangle']);
        for($i=0; $i<$selectedCheckBox; $i++){
            if(isset($this->step6Data['blackTriangle'][$i])){
                switch($this->step6Data['blackTriangle'][$i])
                {
                    case "blackTrianglePresent":
                        $this->step6Data['blackTrianglePresent'] = HARD_CODE_ID_YES;
                        break;
                    case "blackTriangleAbsent":
                        $this->step6Data['blackTriangleAbsent'] = HARD_CODE_ID_YES;
                        break;
                }
            }
        }

        //Setting Midline Values
        $selectedCheckBox = count($this->step6Data['midline']);
        for($i=0; $i<$selectedCheckBox; $i++){
            if(isset($this->step6Data['midline'][$i])){
                switch($this->step6Data['midline'][$i])
                {
                    case "upperCentered":
                        $this->step6Data['upperCentered'] = HARD_CODE_ID_YES;
                        break;
                    case "lowerCentered":
                        $this->step6Data['lowerCentered'] = HARD_CODE_ID_YES;
                        break;
                    case "upperLeft":
                        $this->step6Data['upperLeft'] = HARD_CODE_ID_YES;
                        break;
                    case "lowerLeft":
                        $this->step6Data['lowerLeft'] = HARD_CODE_ID_YES;
                        break;
                    case "upperRight":
                        $this->step6Data['upperRight'] = HARD_CODE_ID_YES;
                        break;
                    case "lowerRight":
                        $this->step6Data['lowerRight'] = HARD_CODE_ID_YES;
                        break;
                }
            }
        }

        //Setting Cross-Bite Values
        $selectedCheckBox = count($this->step6Data['crossBite']);
        for($i=0; $i<$selectedCheckBox; $i++){
            if(isset($this->step6Data['crossBite'][$i])){
                switch($this->step6Data['crossBite'][$i])
                {
                    case "skeletal":
                        $this->step6Data['skeletal'] = HARD_CODE_ID_YES;
                        break;
                    case "dental":
                        $this->step6Data['dental'] = HARD_CODE_ID_YES;
                        break;
                }
            }
        }

        //Storing the Data of Step-6 in session using Helper Function
        session(['step6Data' => $this->step6Data]);

        $this->emitUp('step6Validated');
    }
    
    public function render()
    {
        return view('livewire.case-add.components.step6.step6');
    }
}
