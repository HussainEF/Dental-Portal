<?php

namespace App\Http\Livewire\CaseAdd;

use Livewire\Component;

class PatientNature extends Component
{
    public $adjunctiveProcedure= 0;
    
    public function render()
    {
        return view('livewire.case-add.patient-nature');
    }
}
