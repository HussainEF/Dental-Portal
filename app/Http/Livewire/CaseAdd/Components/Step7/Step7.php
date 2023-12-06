<?php

namespace App\Http\Livewire\CaseAdd\Components\Step7;

use Livewire\Component;

class Step7 extends Component
{
    protected $listeners = [
        'step7Validation'
    ]; 

    //Variables from Parent form-wizard for data passing between child and parent
    public $currentStep;
    public $step7Data;

    //Step-7 Data Attributes
    // public $illness;
    public $scUpperComplete;
    public $scUpperLeave;
    public $crIPR;
    public $crProclination;
    public $crExpansion;
    public $crExtraction;
    public $treatmentSetup;
    public $otherExtraction;
    public $denalCrossBite;
    public $midlineMaintain;
    public $midlineCorrect;
    public $midlineMoveUpper;
    public $midlineMoveLower;
    public $canineClassOneR;
    public $canineClassOneL;
    public $canineClassTwoR;
    public $canineClassTwoL;
    public $canineClassThreeR;
    public $canineClassThreeL;
    public $molarClassOneR;
    public $molarClassOneL;
    public $molarClassTwoR;
    public $molarClassTwoL;
    public $molarClassThreeR;
    public $molarClassThreeL;
    public $incisorRequiredOverjet;
    public $incisorRequiredOverBite;
    public $comments;
    public $termsAndCondition;

    public function step7Validation(){
        $this->step7Data = $this->validate([
            'scUpperComplete' => 'required',
            'scUpperLeave' => 'required',
            'crIPR' => 'required',
            'crProclination' => 'required',
            'crExpansion' => 'required',
            'crExtraction' => 'required',
            'treatmentSetup' => '',
            'otherExtraction' => '',
            'denalCrossBite' => '',
            'midlineMaintain' => 'required',
            'midlineCorrect' => 'required',
            'midlineMoveUpper' => '',
            'midlineMoveLower' => '',
            'canineClassOneR' => 'required',
            'canineClassOneL' => 'required',
            'canineClassTwoR' => 'required',
            'canineClassTwoL' => 'required',
            'canineClassThreeR' => 'required',
            'canineClassThreeL' => 'required',
            'molarClassOneR' => 'required',
            'molarClassOneL' => 'required',
            'molarClassTwoR' => 'required',
            'molarClassTwoL' => 'required',
            'molarClassThreeR' => 'required',
            'molarClassThreeL' => 'required',
            'incisorRequiredOverjet' => '',
            'incisorRequiredOverBite' => '',
            'comments' => '',
            // 'termsAndCondition' => 'required',
        ]);
    }
    
    public function render()
    {
        return view('livewire.case-add.components.step7.step7');
    }
}
