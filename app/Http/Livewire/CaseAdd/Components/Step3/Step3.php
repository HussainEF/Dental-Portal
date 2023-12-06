<?php

namespace App\Http\Livewire\CaseAdd\Components\Step3;

use Livewire\Component;
use Livewire\WithFileUploads;


class Step3 extends Component
{
    use WithFileUploads;

    protected $listeners = [
        'step3Validation'
    ]; 

    //Variables from Parent form-wizard for data passing between child and parent
    public $currentStep;
    public $step3Data;

    //Step-3 Data Attributes
    public $stlUpper;
    public $xRayOPG;
    public $stlLower;
    public $xRayCEPH;
    public $rxForm;
    public $chiefComplaint;

    public function step3Validation(){
        $this->step3Data = $this->validate([
         'stlUpper' => 'image',
         'xRayOPG' => 'image',
         'stlLower' => 'image',
         'xRayCEPH' => 'image',
         'rxForm' => 'image',
         'chiefComplaint' => ''
        ]);

        $this->emit('step3Validated');
    }
    
    public function render()
    {
        return view('livewire.case-add.components.step3.step3');
    }
}
