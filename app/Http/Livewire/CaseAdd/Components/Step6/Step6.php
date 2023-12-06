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
    public $step6Data;

    //Step-6 Data Attributes
    // public $illness;
    public $treatmentIndicatedUpper;
    public $treatmentIndicatedLower;
    public $teethMovedUpper3;
    public $teethMovedLower3;
    public $teethMovedUpper5;
    public $teethMovedLower5;
    public $teethMovedUpper7;
    public $teethMovedLower7;
    public $upperCentered;
    public $lowerCentered;
    public $upperLeft;
    public $lowerLeft;
    public $upperRight;
    public $lowerRight;
    public $skeletal;
    public $dental;
    public $overjet;
    public $overbite;
    public $teethToBeMoved;
    public $otherInput;

    public function step6Validation(){
        $this->step6Data = $this->validate([
         'treatmentIndicatedUpper' => 'required',
         'treatmentIndicatedLower' => 'required',
         'teethMovedUpper3' => 'required',
         'teethMovedLower3' => 'required',
         'teethMovedUpper5' => 'required',
         'teethMovedLower5' => 'required',
         'teethMovedUpper7' => 'required',
         'teethMovedLower7' => 'required',
         'upperCentered' => 'required',
         'lowerCentered' => 'required',
         'upperLeft' => 'required',
         'lowerLeft' => 'required',
         'upperRight' => 'required',
         'lowerRight' => 'required',
         'skeletal' => '',
         'dental' => '',
         'overjet' => '',
         'overbite' => '',
         'teethToBeMoved' => '',
         'otherInput' => ''
        ]);
    }
    
    public function render()
    {
        return view('livewire.case-add.components.step6.step6');
    }
}
