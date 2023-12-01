<?php

namespace App\Http\Livewire\CaseAdd\Components\Step3;

use Livewire\Component;

class Step3 extends Component
{
    public $currentStep;
    
    public function render()
    {
        return view('livewire.case-add.components.step3.step3');
    }
}
