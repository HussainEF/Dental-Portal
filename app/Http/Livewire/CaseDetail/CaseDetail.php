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
    public $patientName;
    public $patientEmail;
    public $doctorSign;
    public $date;
    
    //for getting Model Instance
    public $primaryCase;
    public $primaryCaseDetail;

    public function mount(){
        $this->primaryCase = MedicalPrimaryCases::find($this->caseId); //Fetching Data from MedicalPrimaryCases 
        if($this->primaryCase != NULL){
            $this->primaryCaseDetail = MedicalPrimaryCasesDetail::where(['primary_case_id' => $this->primaryCase['id']])->first();
            if($this->primaryCaseDetail != NULL){
                $this->patientEmail = $this->primaryCaseDetail['patient_email'];
                $this->doctorSign = $this->primaryCaseDetail['doctor_signature'];
                $this->date = $this->primaryCaseDetail['created_at'];
            }
            $this->patientName = $this->primaryCase['patient'];
            $this->checkCaseExsisting = 1; //Check the Case Existing and Setting the Flag Value Upon the Exisiting of Case.
            $this->erpCaseId = $this->primaryCase['case_id'];
        }
        else{
            $this->checkCaseExsisting = 0; //Setting the Flag Value Upon non exisistence of the Case.
        }
        // dd($this->primaryCase);
    }

    public function conscentFormPDF()
    {
        $data = ['name' => $this->patientName, 'email' => $this->patientEmail, 'date' => $this->date, 'sign' => 'mudassar'];
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
