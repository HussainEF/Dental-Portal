<?php

namespace App\Http\Livewire\CaseAdd\Components\Step1;

use App\Models\MedicalSetupClinic;
use Livewire\Component;

class ClinicList extends Component
{
    // protected $listeners = ['clinic'];

    // public function clinic($value=""){
    //     return $value;
    // }

    public $clinic;
    public $selectedClinic;

    public function mount(){
        $this->selectedClinic = $this->clinic;
    }

    public function updatedSelectedClinic(){
        $this->emit('clinic', $this->selectedClinic);
    }

    public function render()
    {
        return view('livewire.case-add.components.step1.clinic-list', [
            'clinicName' => MedicalSetupClinic::where(['is_deleted' => 42])->orderby('clinic_name', 'asc')->get(['id', 'clinic_name']),
        ]);
    }
}
