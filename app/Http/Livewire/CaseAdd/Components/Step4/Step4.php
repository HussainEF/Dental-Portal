<?php

namespace App\Http\Livewire\CaseAdd\Components\Step4;

use Livewire\Component;

class Step4 extends Component
{
    protected $listeners = [
        'step4Validation'
    ]; 

    //Variables from Parent form-wizard for data passing between child and parent
    public $currentStep;
    public $step4Data;

    //Step-4 Data Attributes
    public $illness;
    public $medication;
    public $patientAllergy;
    public $chemo;
    public $steroids;
    public $diseases;

    public function step4Validation(){
        $this->step4Data = $this->validate([
         'illness' => 'required',
         'medication' => 'required',
         'patientAllergy' => 'required',
         'chemo' => '',
         'steroids' => '',
         'diseases' => 'array'
        ]);
    }
    
    public function render()
    {
        return view('livewire.case-add.components.step4.step4');
    }
}
