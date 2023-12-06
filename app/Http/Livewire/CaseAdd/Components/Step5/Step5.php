<?php

namespace App\Http\Livewire\CaseAdd\Components\Step5;

use Livewire\Component;

class Step5 extends Component
{
    protected $listeners = [
        'step5Validation'
    ]; 

    //Variables from Parent form-wizard for data passing between child and parent
    public $currentStep;
    public $step5Data;

    //Step-5 Data Attributes
    // public $illness;
    public $impactedTeeth;
    public $crownRCT;
    public $crctTmq1;
    public $crctTmq2;
    public $crctTmq3;
    public $crctTmq4;
    public $bridgesImplants;
    public $biTmq1;
    public $biTmq2;
    public $biTmq3;
    public $biTmq4;
    public $restorationsVeneers;
    public $rvTmq1;
    public $rvTmq2;
    public $rvTmq3;
    public $rvTmq4;

    public function step5Validation(){
        $this->step5Data = $this->validate([
         'impactedTeeth' => '',
         'crownRCT' => 'required',
         'crctTmq1' => 'array',
         'crctTmq2' => 'array',
         'crctTmq3' => 'array',
         'crctTmq4' => 'array',
         'bridgesImplants' => 'required',
         'biTmq1' => 'array',
         'biTmq2' => 'array',
         'biTmq3' => 'array',
         'biTmq4' => 'array',
         'restorationsVeneers' => 'required',
         'rvTmq1' => 'array',
         'rvTmq2' => 'array',
         'rvTmq3' => 'array',
         'rvTmq4' => 'array',
        ]);
    }
    
    public function render()
    {
        return view('livewire.case-add.components.step5.step5');
    }
}
