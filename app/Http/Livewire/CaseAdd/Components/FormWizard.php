<?php

namespace App\Http\Livewire\CaseAdd\Components;

use Livewire\Component;

class FormWizard extends Component
{
    public $currentStep;

    //Event Listeners triggered when Step Component is Validated.
    protected $listeners = ['step1Validated',
                            'step2Validated',
                            'step3Validated',
                            'step4Validated',
                            'step5Validated',
                            'step6Validated',
                            'step7Validated'
                        ];

    //Data Variabels for collect data from Step Components
    public $step1Data;
    public $step2Data;
    public $step3Data;
    public $step4Data;
    public $step5Data;
    public $step6Data;
    public $step7Data;

    public function mount(){
        $this->currentStep = 1;
    }

    //Execute when user Clicked on Next Button in form-wizard
    public function increaseStep(){
        if($this->currentStep == 1) {
            $this->emit('step1Validation');
        }
    }

    //Execute When Step-1 Validation Successfully Completed
    public function step1Validated(){
        $this->currentStep++;
    }

    public function step2Validated(){
        $this->currentStep++;
    }

    public function step3Validated(){
        $this->currentStep++;
    }
    public function step4Validated(){
        $this->currentStep++;
    }

    public function step5Validated(){
        $this->currentStep++;
    }

    public function step6Validated(){
        $this->currentStep++;
    }

    public function step7Validated(){
        $this->currentStep++;
    }

    //Triggered when user Clicked on Previous Button in form-wizard
    public function decreaseStep(){
        // $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function render()
    {
        return view('livewire.case-add.components.form-wizard');
    }
}
