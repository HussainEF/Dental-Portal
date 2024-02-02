<?php

namespace App\Http\Livewire\CaseAdd\Components\Step3;

use Livewire\Component;

use Illuminate\Support\Facades\Storage;

class Step3 extends Component
{
    //Step-3 Data Attributes
    public $step3Data;
    public $chiefComplaint;
    protected $listeners = [
        'step3Validation'
    ]; 

    //Variables from Parent form-wizard for data passing between child and parent
    public $currentStep;

    public function mount(){
        $step3Data = session('step3Data');
        $this->chiefComplaint = $step3Data['chiefComplaint'];
    }

    public function step3Validation(){
        $this->step3Data = $this->validate([
            'chiefComplaint' => 'required',
        ]);

        session(['step3Data' => $this->step3Data]);

        $this->emitUp('step3Validated');
    }
    
    public function render()
    {
        return view('livewire.case-add.components.step3.step3');
    }
}
