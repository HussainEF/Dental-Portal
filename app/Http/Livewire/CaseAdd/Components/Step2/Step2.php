<?php

namespace App\Http\Livewire\CaseAdd\Components\Step2;

use Livewire\Component;

class Step2 extends Component
{
    protected $listeners = [
        'step2Validation'
    ]; 

    //Variables from Parent form-wizard for data passing between child and parent
    public $currentStep;
    public $step2Data;

    //Step-2 Data Attributes
    public $radioGraphOPG;
    public $radioGraphCEPH;
    public $archesUpper;
    public $archesLower;
    public $recieveDate;
    public $impressionType;
    public $passiveAligner;

    public function step2Validation(){
        $this->step2Data = $this->validate([
                'radioGraphCEPH' => 'required',
                'radioGraphOPG'  => '',
                'radioGraphCEPH' => '',
                'arches' => 'array',
                'recieveDate' => 'date',
                //  'impressionType' => 'required',
                //  'passiveAligner' => 'required'
        ]);

        $this->emit('step2Validated');
     }

    public function render()
    {
        return view('livewire.case-add.components.step2.step2');
    }
}
