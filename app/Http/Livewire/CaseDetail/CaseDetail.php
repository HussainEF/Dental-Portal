<?php

namespace App\Http\Livewire\CaseDetail;
use Illuminate\Http\Response;
use App\Models\MedicalPrimaryCases;
use App\Models\MedicalPrimaryCasesDetail;

use PDF;
use Livewire\Component;

class CaseDetail extends Component
{
    public $checkCaseExsisting;
    public $caseId;
    public $erpCaseId;

    //For Data Passing to Conscnet Form
    public $patient_name;
    public $patient_email;
    public $date;
    
    //for getting Model Instance
    public $primaryCase;
    public $primaryCaseDetail;

    public function mount(){
        $this->primaryCase = MedicalPrimaryCases::find($this->caseId); //Fetching Data from MedicalPrimaryCases 
        if($this->primaryCase != NULL){
            $this->primaryCaseDetail = $this->primaryCase->PrimaryCaseDetail;
            if($this->primaryCaseDetail != NULL){
                $this->patient_email = $this->primaryCaseDetail['patient_email'];
            }
            $this->patient_name = $this->primaryCase['name'];
            $this->date = $this->primaryCase['created_at'];
            $this->checkCaseExsisting = 1; //Check the Case Existing and Setting the Flag Value Upon the Exisiting of Case.
            $this->erpCaseId = $this->primaryCase['case_id'];
        }
        else{
            $this->checkCaseExsisting = 0; //Setting the Flag Value Upon non exisistence of the Case.
        }
        // dd($this->primaryCase);
    }

    public function searchCaseDetail($caseId){
        $this->caseId = $caseId;
        $this->mount();
    }
    
    public function caseIdRecieved(){
        $this->flag = 1;
    }

    public function conscentFormPDF()
    {
        $data = ['name' => $this->patient_name, 'email' => $this->patient_email, 'date' => $this->date];
        return redirect()->route('consent-pdf')->with(['data' => $data]);
    }

    public function uploadPhoto($erpCaseId){
        // return redirect()->to('/upload-photos');
        return redirect()->route('upload-photos', $erpCaseId);

        // return redirect()->to('/upload-photos')->with('id', $erpCaseId);
    }

    public function render()
    {
        return view('livewire.case-detail.case-detail');
    }
}
