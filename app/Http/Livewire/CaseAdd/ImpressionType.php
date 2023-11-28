<?php

namespace App\Http\Livewire\CaseAdd;

use Livewire\Component;
use App\Models\MedicalSetupCaseImpressionType;

class ImpressionType extends Component
{
    public function render()
    {
        return view('livewire.case-add.impression-type', [
            'impressionType' => MedicalSetupCaseImpressionType::get(['id', 'name'])
        ]);
    }
}
