<?php

namespace App\Http\Livewire\Loyality;

use Livewire\Component;
use App\Models\DentistLoyalityPointsCalculation;



class Loyality extends Component
{
    //Reciving From Parent
    public $cardNumber;

    public $dentistLoyalityPoints;
    public $dentistLoyalityPointsCalculation;
    public $medicalSetupDoctors;

    public function mount(){
        $teamId = session('doctorId');
        $this->dentistLoyalityPointsCalculation = DentistLoyalityPointsCalculation::where(['dentistID' => $teamId, 'is_deleted'=> HARD_CODE_ID_NO])->first();
    }

    public function pointsEarned(){
        $this->cardNumber = 1;
    }

    public function pointsTransactions(){
        $this->cardNumber = 2;
    }

    public function pointsNotifications(){
        $this->cardNumber = 3;
    }

    public function render()
    {
        return view('livewire.loyality.loyality');
    }
}
