<?php

namespace App\Http\Livewire\CaseAdd\Components\Step1;

use Livewire\Component;

class Step1 extends Component
{
    protected $listeners = [
        'step1Validation'
    ]; 

    //Variables from Parent form-wizard for data passing between child and parent
    public $currentStep;
    public $step1Data;

    //Step-1 Data Attributes
    public $nextBtn = '';
    public $patientName;
    public $patientAge;
    public $patientGender;
    public $patientZipCode;
    public $patientEmail;
    public $patientPhone;
    public $clinic;
    public $address1;
    public $address2;
    public $address3;


    // protected $rules = [
    //     'patientName' => 'required|min:4',
    //     'patientAge' => 'required',
    //     'patientGender' => 'required',
    //     'patientZipCode' => 'numeric|min:4',
    //     'patientEmail' => 'required|email',
    //     'patientPhone' => 'numeric|digits:11'
    // ];

    public function step1Validation(){
       $this->step1Data = $this->validate([
        'patientName' => 'required|min:4',
        'patientAge' => 'required',
        'patientGender' => 'required',
        'patientZipCode' => 'numeric|min:4',
        'patientEmail' => 'required|email',
        'patientPhone' => 'numeric|digits:11',
        'address1' => '',
        'address2' => '',
        'address3' => ''
       ]);
    //    dd($this->step1Data);

       $this->emit('step1Validated');
    }

    public function render()
    {
        return view('livewire.case-add.components.step1.step1');
    }
}
