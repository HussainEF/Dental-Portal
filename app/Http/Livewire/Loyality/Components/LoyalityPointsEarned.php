<?php

namespace App\Http\Livewire\Loyality\Components;

use Livewire\Component;
use App\Models\DentistLoyalityPoints;

class LoyalityPointsEarned extends Component
{
    public function mount(){
        $teamId = session('doctorId');
        $this->dentistLoyalityPoints = DentistLoyalityPoints::where(['dentist_id' => $teamId, 'is_deleted'=> HARD_CODE_ID_NO])->get();
        $this->dentistLoyalityPoints->toArray();
    }

    public function render()
    {
        return view('livewire.loyality.components.loyality-points-earned');
    }
}
