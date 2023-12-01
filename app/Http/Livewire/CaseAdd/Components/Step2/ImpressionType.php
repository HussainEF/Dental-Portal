<?php

namespace App\Http\Livewire\CaseAdd\Components\Step2;

use Livewire\Component;
use App\Models\MedicalSetupCaseImpressionType;

class ImpressionType extends Component
{
    public function render()
    {
        return view('livewire.case-add.components.step2.impression-type', [
            'impressionType' => MedicalSetupCaseImpressionType::get(['id', 'name'])
        ]);
    }
}
