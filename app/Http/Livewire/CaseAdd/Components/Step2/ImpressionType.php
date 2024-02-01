<?php

namespace App\Http\Livewire\CaseAdd\Components\Step2;

use Livewire\Component;


class ImpressionType extends Component
{
    public $impressionType;
    public $setImpression;
    public function mount(){
        $this->impressionType = $this->setImpression;
    }

    public function updatedImpressionType(){
        $this->emit('impression', $this->impressionType);
    }

    public function render()
    {
        return view('livewire.case-add.components.step2.impression-type', [
            'impressions' => MedicalSetupCaseImpressionType::get(['id', 'name'])
        ]);
    }
}
