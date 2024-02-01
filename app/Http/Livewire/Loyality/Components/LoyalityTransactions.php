<?php

namespace App\Http\Livewire\Loyality\Components;

use Livewire\Component;
use App\Models\DentistLoyalityPointsTransactions;

class LoyalityTransactions extends Component
{
    public $dentistLoyalityPointsTransactions;

    public function mount(){
        $teamId = session('doctorId');
        $this->dentistLoyalityPointsTransactions = DentistLoyalityPointsTransactions::where(['dentist_id' => $teamId, 'is_deleted'=> HARD_CODE_ID_NO])->get();
    }

    public function render()
    {
        return view('livewire.loyality.components.loyality-transactions');
    }
}
