<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\DentistCaseStatus;

class CardTemplate extends Component
{
    //Event Listner for Getting data from Child Component "Card-Detail" Whenever Even Triggered in Child Component
    protected $listeners = [
        'casesDetail',
        'cardId'
    ];

    public $casesDetail;
    public $cardId = 1;

    //Geting Data from Child Component by using Event Listner
    public function casesDetail($value){
        $this->casesDetail = $value;
    }

    public function cardId($value){
        $this->cardId = $value;
    }
    //
    public function fetchCaseStatus(){
        $stagesTitle = DentistCaseStatus::where(['parent'=> 0, 'is_deleted' => 42])->get();
        return $stagesTitle;
    }

    public function render()
    { 
        return view('livewire.dashboard.card-template', [
            'caseStagesTitle' => $this->fetchCaseStatus()
        ]);
    }
}