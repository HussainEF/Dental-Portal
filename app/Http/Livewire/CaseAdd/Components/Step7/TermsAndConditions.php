<?php

namespace App\Http\Livewire\CaseAdd\Components\Step7;

use Livewire\Component;

class TermsAndConditions extends Component
{
    public $termsCondition = false;
    public $signature;
    
    public function toggleModal()
    {
        if($this->termsCondition == false){
            $this->termsCondition = true;
            $this->emit('termsCondition', $this->termsCondition);
        }
        else if($this->termsCondition == true){
            $this->termsCondition = true;
            $this->emit('termsCondition', $this->termsCondition);
        }
    }

    public function updatedSignature(){
        $this->emit('doctorSign', $this->signature);
    }

    public function render()
    {
        return view('livewire.case-add.components.step7.terms-and-conditions');
    }
}
