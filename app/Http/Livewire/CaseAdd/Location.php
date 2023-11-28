<?php

namespace App\Http\Livewire\CaseAdd;

use Livewire\Component;
use App\Models\SetupCountry;
use App\Models\SetupCity;
use App\Models\SetupCityArea;

class Location extends Component
{
    public $selectedCity;
    public $selectedArea;
    public $cityArea;

    public function updateArea(){
        $this->cityArea = SetupCityArea::where(['city_id' => $this->selectedCity, 'is_deleted' => 42])->get(['id', 'area']);
    }
    public function render()
    {
        return view('livewire.case-add.location', [
            'country' => SetupCountry::where(['id'=> 168])->orderby('name', 'asc')->get(['id', 'name']),
            'city' => SetupCity::orderBy('name', 'asc')->get(['id', 'name'])
        ]);
    }
}