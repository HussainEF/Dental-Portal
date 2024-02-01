<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CaseSearch extends Component
{
    public $searchBox;

    public function mount(){
        $this->searchBox = session('searchBoxValue');
    }

    public function searchCase(){
        $this->validate([
            'searchBox' => 'required|numeric',
        ]);
        session(['searchBoxValue' => $this->searchBox]);
        return redirect()->route('case-detail', ['caseId' => $this->searchBox]);
    }

    public function render()
    {
        return view('livewire.case-search');
    }
}
