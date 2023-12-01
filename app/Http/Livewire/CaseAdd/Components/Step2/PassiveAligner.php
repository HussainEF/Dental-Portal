<?php

namespace App\Http\Livewire\CaseAdd\Components\Step2;

use Livewire\Component;

class PassiveAligner extends Component
{
    public $passiveAligner = 0;
    
    public function render()
    {
        return view('livewire.case-add.components.step2.passive-aligner');
    }
}
