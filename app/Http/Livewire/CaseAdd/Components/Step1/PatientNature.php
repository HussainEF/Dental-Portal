<?php

namespace App\Http\Livewire\CaseAdd\Components\Step1;

use Livewire\Component;

class PatientNature extends Component
{
    public $adjunctiveProcedure = 0;

    // protected $rules = [
    //     'adjunctiveProcedure' => 'required',
    // ];
    
    public function render()
    {
        // $this->validate();
        return view('livewire.case-add.components.step1.patient-nature');
    }
}
