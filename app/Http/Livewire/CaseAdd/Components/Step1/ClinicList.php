<?php

namespace App\Http\Livewire\CaseAdd\Components\Step1;

use App\Models\MedicalSetupClinic;
use Livewire\Component;

class ClinicList extends Component
{
    public function render()
    {
        return view('livewire.case-add.components.step1.clinic-list', [
            'clinicName' => MedicalSetupClinic::where(['is_deleted' => 42])->orderby('clinic_name', 'asc')->get(['id', 'clinic_name']),
        ]);
    }
}
