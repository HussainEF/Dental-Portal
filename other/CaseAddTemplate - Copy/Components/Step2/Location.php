<?php

namespace App\Http\Livewire\CaseAdd\Components\Step2;

use Livewire\Component;
use App\Models\SetupCountry;
use App\Models\SetupCity;
use App\Models\SetupCityArea;

class Location extends Component
{
    //Variables for recieving Data from Parent Component
    public $setCountry;
    public $setCity;
    public $setArea;

    public $selectedCountry;
    public $selectedCity;
    public $selectedArea;
    public $cityArea;

    //Hooks for properties
    public function updatedSelectedCountry(){
        $this->emit('country',$this->selectedCountry);
    }

    public function updatedSelectedArea(){
        $this->emit('area',$this->selectedArea);
    }

    public function updatedSelectedCity(){
        $this->emit('city',$this->selectedCity);
    }
    //Hooks End

    public function mount(){
        $this->selectedCountry = $this->setCountry;
        $this->selectedCity = $this->setCity;
        $this->selectedArea = $this->setArea;
    }

    //This Function Update the value of City Area DropDowns...
    public function updateArea(){
        $this->cityArea = SetupCityArea::where(['city_id' => $this->selectedCity, 'is_deleted' => 42])->get(['id', 'area']);
    }

    public function render()
    {
        return view('livewire.case-add.components.step2.location', [
            'country' => SetupCountry::where(['id'=> 168])->orderby('name', 'asc')->get(['id', 'name']),
            'city' => SetupCity::orderBy('name', 'asc')->get(['id', 'name'])
        ]);
    }
}