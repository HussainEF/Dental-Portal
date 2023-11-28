<?php

namespace App\Http\Livewire\CaseAdd;

use Livewire\Component;

class PassiveAligner extends Component
{
    public $passiveAligner = 0;
    
    public function render()
    {
        return view('livewire.case-add.passive-aligner');
    }
}
