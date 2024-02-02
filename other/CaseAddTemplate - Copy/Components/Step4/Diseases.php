<?php

namespace App\Http\Livewire\CaseAdd\Components\Step4;

use Livewire\Component;
use App\Models\SetupDisease;

class Diseases extends Component
{
    public $diseaseList = [];
    public $otherDiseases;

    //Variable for recieving Data from Parent Component
    public $setDiseases; 
    public $setOtherDiseases;

    public $remarks = 0;
    public function toggle($value){
        if($value == 8){
            if($this->remarks == 0)
                $this->remarks = 1;
            else
                $this->remarks = 0;
            
        }
    }

    public function mount(){
        $this->diseaseList = $this->setDiseases;
        $this->otherDiseases = $this->setOtherDiseases;
    }
     
    public function updatedDiseaseList(){
        $this->emit('diseases', $this->diseaseList);
    }

    public function updatedOtherDisease(){
        $this->emit('otherDiseases', $this->otherDiseases);
    }

    public function render()
    {
        return view('livewire.case-add.components.step4.diseases', [
            'diseasesList' => SetupDisease::where(['publish_status' => 9, 'is_deleted' => 42])->get(['id', 'name'])
        ]);
    }
}
