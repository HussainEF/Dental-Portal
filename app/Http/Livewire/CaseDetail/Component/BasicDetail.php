<?php

namespace App\Http\Livewire\CaseDetail\Component;

use App\Models\MedicalPrimaryCases;
use App\Models\MedicalPrimaryCasesDetail;
use App\Models\MedicalSetupCompanies;
use App\Models\SetupCountry;
use App\Models\MedicalCases;

use Livewire\Component;


class BasicDetail extends Component
{
    public $searchCaseId;//Recieve From Parent
    
    //Local Variables for Logic
    public $primaryCaseId;
    public $createdDateTime;

    //For Getting Instance of Models
    public $primaryCase;
    public $primaryCaseDetail;
    public $company;
    public $country;
    public $medicalCase;


    public function mount (){
        $this->primaryCase = MedicalPrimaryCases::find($this->searchCaseId); //Fetching Data from MedicalPrimaryCases 
        if($this->primaryCase != NULL){
            $this->primaryCaseId = $this->primaryCase['case_id'];

            $this->createdDateTime = date("Y-m-d H:i:s A",$this->primaryCase['created']);

            $this->primaryCaseDetail = $this->primaryCase->MedicalPrimaryCasesDetail; //Fetching Data from MedicalPrimaryCasesDetail Model Using One to One Relationship
            $this->country = SetupCountry::find($this->primaryCase['country']); //Fetching Data from SetupCountry Model
            $company_id = 35; //Hard Code Id for ClearpathOrhto Pakistan
            $this->company = MedicalSetupCompanies::find($company_id);

            $this->medicalCase = MedicalCases::find($this->primaryCaseId); //Fetching Data from MedcialCases Model
        }
    }
    
    public function render()
    {
        return view('livewire.case-detail.component.basic-detail');
    }
}
