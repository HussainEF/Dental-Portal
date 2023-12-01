<?php

namespace App\Http\Livewire\CaseAdd\Components\Step4;

use Livewire\Component;
use App\Models\SetupDisease;

class Diseases extends Component
{
    public $remarks = 0;
    public function toggle($value){
        if($value == 8){
            if($this->remarks == 0)
                $this->remarks = 1;
            else
                $this->remarks = 0;
            
        }
    }
    public function render()
    {
        return view('livewire.case-add.components.step4.diseases', [
            'diseasesList' => SetupDisease::where(['publish_status' => 9, 'is_deleted' => 42])->get(['id', 'name'])
        ]);
    }
}
