<?php

namespace App\Http\Livewire\CaseAdd\Components\Step1;

use Livewire\Component;

class Step1 extends Component
{
    protected $listeners = [
        'step1Validation'
    ]; 

    public $currentStep;


    //Step-1 Data Attributes
    public $step1Data;

    public $patientName;
    public $patientAge;
    public $patientGender;
    public $adjunctiveProcedure; 
    public $adjunctiveEBT;
    public $adjunctiveAttachment;
    public $patientZipCode;
    public $patientEmail;
    public $patientPhone;
    public $clinic;
    public $address1;
    public $address2;
    public $address3;

    public function mount(){
        $step1Data = session('step1Data');
        $this->patientName = $step1Data['patientName'];
        $this->patientAge = $step1Data['patientAge'];
        $this->patientGender = $step1Data['patientGender'];
        $this->adjunctiveEBT = $step1Data['adjunctiveEBT'];
        $this->adjunctiveAttachment = $step1Data['adjunctiveAttachment'];
        $this->patientZipCode = $step1Data['patientZipCode'];
        $this->patientEmail = $step1Data['patientEmail'];
        $this->patientPhone = $step1Data['patientPhone'];
        // $this->clinic = $step1Data['clinic'];
        $this->address1 = $step1Data['address1'];
        $this->address2 = $step1Data['address2'];
        $this->address3 = $step1Data['address3'];
        $this->adjunctiveProcedure = $step1Data['adjunctiveProcedure'];
    }

    public function clinic($value){
        $this->clinic = $value;
    }

    public function resetadjunctiveProcedure(){
        $this->adjunctiveEBT = false;
        $this->adjunctiveAttachment = false;
    }

    public function updated(){
        //
    }

    public function step1Validation(){
        $this->step1Data = $this->validate([
            'patientName' => 'required|min:4',
            'patientAge' => 'required',
            'patientGender' => 'required',
            'patientZipCode' => 'numeric|min:4',
            'patientEmail' => 'required|email',
            'patientPhone' => 'numeric|digits:11',
            'adjunctiveProcedure' => 'required',
            'adjunctiveEBT' => '',
            'adjunctiveAttachment' => '',
            'clinic' => '',
            'address1' => '',
            'address2' => '',
            'address3' => ''
        ]);

        if($this->adjunctiveEBT){
            $this->adjunctiveEBT = HARD_CODE_ID_YES;
        }else{
            $this->adjunctiveEBT = NULL;
        }

        if($this->adjunctiveAttachment){
            $this->adjunctiveAttachment = HARD_CODE_ID_YES;
        }else{
            $this->adjunctiveAttachment = NULL;
        }
        
        //Storing the Data of Step-1 in session using Helper Function
        session(['step1Data' => $this->step1Data]);
        $this->emitUp('step1Validated');
    }

    public function render()
    {
        return view('livewire.case-add.components.step1.step1', [$this->step1Data]);
    }
}
