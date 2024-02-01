<?php

namespace App\Http\Livewire\CaseDetail\Component;
use App\Models\MedicalPrimaryCases;
use App\Models\MedicalPrimaryCasesDetails;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;

use Livewire\Component;

class Attachments extends Component
{
    public $erpCaseId; // For getting erpCaseId from parents

    //for getting Model Instance
    public $primaryCaseData;

    public function mount(){
        $this->primaryCaseData = MedicalPrimaryCases::with('MedicalPrimaryCasesDetail')->where(['case_id'=>$this->erpCaseId])->first(); //Fetching Data from MedicalPrimaryCases 
        $this->primaryCaseData = $this->primaryCaseData->toArray();
        // dd($this->primaryCaseData);
    }

    public function downloadFile($value){
        switch($value){
            case "stl_1":
                if($this->primaryCaseData['medical_primary_cases_detail']['stl_1_uploaded_by']!=NULL && $this->primaryCaseData['medical_primary_cases_detail']['stl_1_uploaded_by'] == "DENTAL"){
                    $file = "CASE_RX_FORM_URL_PATH/{$this->primaryCaseData['stl_1']}";
                }else{
                    $file = "https://portal.clearpathortho.pk/stl/{$this->primaryCaseData['stl_1']}";
                }
                break;
            case "stl_2":
                if($this->primaryCaseData['medical_primary_cases_detail']['stl_2_uploaded_by']!=NULL && $this->primaryCaseData['medical_primary_cases_detail']['stl_2_uploaded_by'] == "DENTAL"){
                    $file = "CASE_X_RAY_OPG_URL_PATH/{$this->primaryCaseData['stl_2']}";
                }else{
                    $file = "https://portal.clearpathortho.pk/stl/{$this->primaryCaseData['stl_2']}";
                }
                break;
        }
        
        $response = Http::get($file);
        if ($response->successful()) {
            return Response::streamDownload(function () use ($response) {
                echo $response->body();
            }, "{$value}.stl");
        } else {
            // Handle the case where the request was not successful
            abort(404, 'File not found');
        }
    }

    public function render()
    {
        return view('livewire.case-detail.component.attachments');
    }
}
