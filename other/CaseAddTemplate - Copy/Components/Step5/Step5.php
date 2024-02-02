<?php

namespace App\Http\Livewire\CaseAdd\Components\Step5;

use Livewire\Component;

class Step5 extends Component
{
    protected $listeners = [
        'step5Validation'
    ]; 

    //Variables from Parent form-wizard for data passing between child and parent
    public $currentStep;

    //Step-5 Data Attributes
    public $step5Data;
    public $dentalHistory = [];
    public $gingivitis = HARD_CODE_ID_NO;
    public $recession = HARD_CODE_ID_NO;
    public $mobility = HARD_CODE_ID_NO;
    public $boneLoss = HARD_CODE_ID_NO;
    public $tmjIssues = HARD_CODE_ID_NO;
    public $dentalHistoryNone = HARD_CODE_ID_NO;
    public $ankylosedTeeth;
    public $crownRCT;
    public $crctTmq1 = [];
    public $crctTmq2 = [];
    public $crctTmq3 = [];
    public $crctTmq4 = [];
    public $crownRCTData;
    public $bridgesImplants;
    public $biTmq1 = [];
    public $biTmq2 = [];
    public $biTmq3 = [];
    public $biTmq4 = [];
    public $bridgesImplantsData;
    public $restorationsVeneers;
    public $rvTmq1 = [];
    public $rvTmq2 = [];
    public $rvTmq3 = [];
    public $rvTmq4 = [];
    public $restorationsVeneersData;

    public function mount(){
        $step5Data = session('step5Data');
        $this->dentalHistory = $step5Data['dentalHistory'] ?? [];
        $this->ankylosedTeeth = $step5Data['ankylosedTeeth'];
        $this->crownRCT = $step5Data['crownRCT'];
        $this->crctTmq1 = $step5Data['crctTmq1'] ?? [];
        $this->crctTmq2 = $step5Data['crctTmq2'] ?? [];
        $this->crctTmq3 = $step5Data['crctTmq3'] ?? [];
        $this->crctTmq4 = $step5Data['crctTmq4'] ?? [];
        $this->bridgesImplants = $step5Data['bridgesImplants'];
        $this->biTmq1 = $step5Data['biTmq1'] ?? [];
        $this->biTmq2 = $step5Data['biTmq2'] ?? [];
        $this->biTmq3 = $step5Data['biTmq3'] ?? [];
        $this->biTmq4 = $step5Data['biTmq4'] ?? [];
        $this->restorationsVeneers = $step5Data['restorationsVeneers'];
        $this->rvTmq1 = $step5Data['rvTmq1'] ?? [];
        $this->rvTmq2 = $step5Data['rvTmq2'] ?? [];
        $this->rvTmq3 = $step5Data['rvTmq3'] ?? [];
        $this->rvTmq4 = $step5Data['rvTmq4'] ?? [];
    }

    public function step5Validation(){
        $this->step5Data = $this->validate([
            'dentalHistory' => 'required|array',
            'gingivitis' => '',
            'recession' => '',
            'mobility' => '',
            'boneLoss' => '',
            'tmjIssues' => '',
            'dentalHistoryNone' => '',
            'ankylosedTeeth' => ' ',
            'crownRCT' => 'required',
            'crownRCTData' => ' ',
            'bridgesImplants' => 'required',
            'bridgesImplantsData' => ' ',
            'restorationsVeneers' => 'required',
            'restorationsVeneersData' => ' ',
            'crctTmq1' => 'array',
            'crctTmq2' => 'array',
            'crctTmq3' => 'array',
            'crctTmq4' => 'array',
            'rvTmq1' => 'array',
            'rvTmq2' => 'array',
            'rvTmq3' => 'array',
            'rvTmq4' => 'array',
            'biTmq1' => 'array',
            'biTmq2' => 'array',
            'biTmq3' => 'array',
            'biTmq4' => 'array',
        ]);
        $this->step5Data['crownRCTData'] = array('TMQ1' => $this->crctTmq1, 'TMQ2' => $this->crctTmq2,'TMQ3' => $this->crctTmq3, 'TMQ4' => $this->crctTmq4);
        $this->step5Data['restorationsVeneersData'] = array('TMQ1' => $this->rvTmq1, 'TMQ2' => $this->rvTmq2,'TMQ3' => $this->rvTmq2, 'TMQ4' => $this->rvTmq4);
        $this->step5Data['bridgesImplantsData'] = array('TMQ1' => $this->biTmq1, 'TMQ2' => $this->biTmq2,'TMQ3' => $this->biTmq3, 'TMQ4' => $this->biTmq4);
        
        //Setting Dental-History Checkbox values
        $selectedCheckBox = count($this->step5Data['dentalHistory']);
        for($i=0; $i<$selectedCheckBox; $i++){
            if(isset($this->step5Data['dentalHistory'][$i])){
                switch($this->step5Data['dentalHistory'][$i])
                {
                    case "gingivitis":
                        $this->step5Data['gingivitis'] = HARD_CODE_ID_YES;
                        break;
                    case "recession":
                        $this->step5Data['recession'] = HARD_CODE_ID_YES;
                        break;
                    case "mobility":
                        $this->step5Data['mobility'] = HARD_CODE_ID_YES;
                        break;
                    case "boneLoss":
                        $this->step5Data['boneLoss'] = HARD_CODE_ID_YES;
                        break;
                    case "tmjIssues":
                        $this->step5Data['tmjIssues'] = HARD_CODE_ID_YES;
                        break;
                    case "dentalHistoryNone":
                        $this->step5Data['dentalHistoryNone'] = HARD_CODE_ID_YES;
                        break;
                }
            }
        }
        

        //Storing the Data of Step-5 in session using Helper Function
        session(['step5Data' => $this->step5Data]);

        // dd($this->step5Data);
        $this->emitUp('step5Validated');
    }
    
    public function render()
    {
        return view('livewire.case-add.components.step5.step5');
    }
}
