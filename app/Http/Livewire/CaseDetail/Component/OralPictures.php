<?php

namespace App\Http\Livewire\CaseDetail\Component;
use App\Models\MedicalCasesPictures;

use Livewire\Component;

class OralPictures extends Component
{
    public $erpCaseId;//Recieved From Parent Component

    //for getting Model Instance
    public $medicalCasesPictures;

    public function mount(){
        if($this->erpCaseId != NULL){
            $this->medicalCasesPictures = MedicalCasesPictures::where(['case_id' => $this->erpCaseId, 'is_deleted' => HARD_CODE_ID_NO])->get();
        }
        // dd($this->medicalCasesPictures);
    }
    
    public function render()
    {
        return view('livewire.case-detail.component.oral-pictures');
    }
}
