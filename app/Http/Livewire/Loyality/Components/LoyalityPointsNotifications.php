<?php

namespace App\Http\Livewire\Loyality\Components;

use Livewire\Component;
use App\Models\MedicalPrimaryCases;
use App\Models\DentistLoyalityPointsNotifications;


class LoyalityPointsNotifications extends Component
{
    public $medicalPrimaryCases;
    public $dentistLoyalityPointsNotifications;

    public function mount(){
        $teamId = session('doctorId');
        $this->dentistLoyalityPointsNotifications = DentistLoyalityPointsNotifications::with('MedicalPrimaryCases')->has('MedicalPrimaryCases')->where(['dentist_id' => $teamId, 'is_deleted'=> HARD_CODE_ID_NO])->get();
        $this->dentistLoyalityPointsNotifications = $this->dentistLoyalityPointsNotifications->toArray();
        // dd($this->dentistLoyalityPointsNotifications);
    }

    public function updateStatus($id, $status){
        $notificationId = $id;
        $notificationStatus = $status;
        $updateStatus =  DentistLoyalityPointsNotifications::find($notificationId);
        $updateStatus->update([ 
            'status' => $notificationStatus,
            'updated_by' => session('doctorId')
        ]);
        $this->mount();
    }

    public function render()
    {
        return view('livewire.loyality.components.loyality-points-notifications');
    }
}
