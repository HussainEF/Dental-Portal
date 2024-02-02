<?php

namespace App\Http\Livewire\CaseAdd\Components\Step3;

use Livewire\Component;
// use Livewire\WithFileUploads;

use Illuminate\Support\Facades\Storage;

class Step3 extends Component
{
    // use WithFileUploads;
    //Step-3 Data Attributes
    // public $stlUpper;
    // public $xRayOPG;
    // public $stlLower;
    // public $xRayCEPH;
    // public $rxForm;
    public $step3Data;
    public $chiefComplaint;
    protected $listeners = [
        'step3Validation'
    ]; 

    //Variables from Parent form-wizard for data passing between child and parent
    public $currentStep;

    public function mount(){
        $step3Data = session('step3Data');
        $this->chiefComplaint = $step3Data['chiefComplaint'];
        // $this->stlUpper = session('stlUpper');
        // $this->xRayOPG = session('xRayOPG');
        // $this->stlLower = session('stlLower');
        // $this->xRayCEPH = session('xRayCEPH');
        // $this->rxForm = session('rxForm');
    }

    public function step3Validation(){
        $this->step3Data = $this->validate([
            'chiefComplaint' => 'required',
        //  'stlUpper' => '',//mimes:stl,zip
        //  'xRayOPG' => '',//mimes:png,gif,jpg,jpeg
        //  'stlLower' => '',//mimes:stl,zip
        //  'xRayCEPH' => '',//mimes:png,gif,jpg,jpeg
        //  'rxForm' => '',
        ]);
        
        // if($this->stlUpper instanceof \Illuminate\Http\UploadedFile){
        //     // $this->step3Data['stlUpper'] = $this->stlUpper->storeAs('stl', $this->stlUpper->getClientOriginalName(), 'public');
        //     $stl1 = $this->stlUpper->storeAs('stl', $this->stlUpper->getClientOriginalName(), 'public');
        // }
        // else{
        //     dd('stlUpper error');
        // }
        // if($this->stlLower instanceof \Illuminate\Http\UploadedFile){
        //     // $this->step3Data['stlLower'] = $this->stlLower->storeAs('stl', $this->stlLower->getClientOriginalName(), 'public');
        //     $stl2 = $this->stlLower->storeAs('stl', $this->stlLower->getClientOriginalName(), 'public');
        // }
        // else{
        //     dd('stlLower error');
        // }
        // if($this->xRayOPG instanceof \Illuminate\Http\UploadedFile){
        //     // $this->step3Data['xRayOPG'] = $this->xRayOPG->storeAs('opg', $this->xRayOPG->getClientOriginalName(), 'public');
        //     $OPG = $this->xRayOPG->storeAs('opg', $this->xRayOPG->getClientOriginalName(), 'public');
        // }
        // else{
        //     dd('xRayOPG error');
        // }
        // if($this->xRayCEPH instanceof \Illuminate\Http\UploadedFile){
        //     $CEPH = $this->xRayCEPH->storeAs('ceph', $this->xRayCEPH->getClientOriginalName(), 'public');
        //     // $this->step3Data['xRayCEPH'] = $this->xRayCEPH->storeAs('ceph', $this->xRayCEPH->getClientOriginalName(), 'public');
        // }
        // else{
        //     dd('xRayCEPH error');
        // }
        // if($this->rxForm instanceof \Illuminate\Http\UploadedFile){
        //     // $this->step3Data['rxForm'] = $this->rxForm->storeAs('rx', $this->rxForm->getClientOriginalName());
        //     $rxForm = $this->rxForm->storeAs('rx', $this->rxForm->getClientOriginalName());
        // }
        // else{
        //     dd('rxForm error');
        // }

        // $this->emitUp('receivedFiles', $this->step3Data['stlUpper'], $this->step3Data['stlLower'], $this->step3Data['xRayOPG'],
                                                            //  $this->step3Data['xRayCEPH'], $this->step3Data['rxForm']);

        //Storing the "chiefComplaint" in session using Helper Function
        // // session(['chiefComplaint' => $this->chiefComplaint]);
        // session(['stlUpper' => $stl1, 'stlLower' => $stl2, 'xRayOPG' => $OPG,
        //          'xRayCEPH' => $CEPH, 'rxForm' => $rxForm]);
        session(['step3Data' => $this->step3Data]);

        // dd($this->step3Data);
        $this->emitUp('step3Validated');
    }
    
    public function render()
    {
        return view('livewire.case-add.components.step3.step3');
    }
}
