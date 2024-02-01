<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\DentistCaseStatus;
use App\Models\MedicalSetupDoctors;

class CardTemplate extends Component
{
    //Event Listner for Getting data from Child Component "Card-Detail" Whenever Even Triggered in Child Component
    protected $listeners = [
        'casesDetail',
        'cardId',
        'cardName'
    ];

    public $cardId = 1;
    public $cardName;
    public $casesDetail;
    public $createdBy;
    public $stagesTitle;

    //Geting Data from Child Component by using Event Listner
    public function casesDetail($value){
        $this->casesDetail = $value;
    }

    public function cardId($value){
        $this->cardId = $value;
    }

    public function cardName($value){
        $this->cardName = $value;
    }

    public function mount(){
        $teamId = session('doctorId');
        // $teamId = Auth::id();
        $this->createdBy = MedicalSetupDoctors::find($teamId);

        //Fetching Case Status
        $this->stagesTitle = DentistCaseStatus::where(['parent'=> 0, 'is_deleted' => 42])->get();

    }

    public function render()
    { 
        return view('livewire.dashboard.card-template');
    }
}