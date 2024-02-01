<?php

namespace App\Http\Livewire\CaseDetail\Component;
use App\Models\MedicalCaseSetupData;
use App\Models\MedicalCaseSetupUploadData;

use App\Models\DoctorCaseStatus;
use App\Models\DoctorAssignCasesHistory;
use App\Models\MyOrganizationTeam;
use App\Models\HR;

//For Email 
use Illuminate\Support\Facades\Mail;
use App\Mail\SetupModification;

use Illuminate\Support\Carbon;
use Livewire\Component;

class TreatmentPlanAction extends Component
{
    public $erpCaseId;//Recieved From Parent Component
    
    public $CasesHistoryStatusId;

    public $setupId;
    public $selectedStatusId = ''; 
    public $comment;

    //For Getting Instance of Models
    public $medicalCaseSetupData;
    public $medicalCaseSetupUploadData;
    public $doctorCaseStatus;
    public $doctorAssignCasesHistory;
    public $doctorAssignCasesHistorySecond;
    public $caseStatusData;

    protected $rules = [
        'setupId' => 'required|not_in:0',
        'selectedStatusId' => 'required|not_in:0',
        // 'comment' => 'required'
    ];

    public function mount(){
        $this->medicalCaseSetupData = MedicalCaseSetupData::where(['case_id'=>$this->erpCaseId, 'is_deleted'=>HARD_CODE_ID_NO])
                                                            ->has('MedicalCaseSetupUploadData')->with('MedicalCaseSetupUploadData')->get();
        $this->doctorCaseStatus = DoctorCaseStatus::where(['is_deleted' => HARD_CODE_ID_NO])->orderBy('id', 'ASC')->get();

        $this->doctorAssignCasesHistory = DoctorAssignCasesHistory::where(['case_id'=>$this->erpCaseId, 'is_deleted'=>HARD_CODE_ID_NO])
                                                                    ->get();//groupBy('id')->->orderBy('id', 'DESC')
        if($this->doctorAssignCasesHistory != NULL){
            $this->caseStatusData = collect();
            foreach($this->doctorAssignCasesHistory as $record){
                $this->CasesHistoryStatusId = $record['status_id'];
                $singleRowData = DoctorCaseStatus::where(['id'=>$this->CasesHistoryStatusId, 'is_deleted' => HARD_CODE_ID_NO])->orderBy('id', 'ASC')->first();
                $this->caseStatusData->push($singleRowData);
            }    
        }
    }

    public function updateStatus(){
        $this->validate();
        $this->medicalCaseSetupUploadData = MedicalCaseSetupUploadData::where(['case_id' => $this->erpCaseId,'setup_data_id' => $this->setupId,'is_deleted' => HARD_CODE_ID_NO])->first();
        if($this->medicalCaseSetupUploadData != NULL){
            $uploadSetupID = $this->medicalCaseSetupUploadData['id'];
            $link = $this->medicalCaseSetupUploadData['upload_link'];
            $code = $this->medicalCaseSetupUploadData['password'];
            $this->doctorAssignCasesHistorySecond = DoctorAssignCasesHistory::where(['case_id' => $this->erpCaseId, 'link' => $link, 'status_id'=> MODIFIED])->get();
            if($this->doctorAssignCasesHistorySecond != NULL){
                $modificationCount = $this->doctorAssignCasesHistorySecond->count();

                //check if already modification has been sent aagainst this case id, link and code and check if current ststus is modification then it will not update its status
                if($modificationCount > 0 AND $this->selectedStatusId == MODIFIED){
                    session()->flash('message', 'Sorry Modification Could Not Be Sent As Only One Modification Could Be Sent Per Perview And You Have Already Sent One Modification For This Preview.');
                }
                else{
                    $timeStamp = Carbon::now();
                    $unixTimeStamp = $timeStamp->timestamp;
                    $addHistory = new DoctorAssignCasesHistory([
                        'case_id' => $this->erpCaseId,
                        'status_id' => $this->selectedStatusId,
                        'link' => $link,
                        'code' => $code,
                        'comment' => $this->comment,
                        'description' => NULL,
                        'is_deleteable' => HARD_CODE_ID_YES,
                        'recieve_date' => date('Y-m-d'),
                        'created' => $unixTimeStamp,
                        'created_by' => session('doctorId'),
			            'created_by_reference_table' => 'MY_ORGANIZATION_TEAM_TABLE',
                    ]);
                    $addHistory->save();
                    $this->sendEmail();
                    $this->mount();//When Case is updated then component will be refreshed.
                }
            }
        }
    }

    public function sendEmail(){
        $to = "hussain5111997@gmail.com";
        $cc = "noreply@gmail.com";
        // if($regionName == 'Lahore'){
        //     $to = ['lahore.support@clearpathortho.pk'];
        //     //Here 1415 is the clinic_id of Dento Correct Clinic, for used to send Email to Dr, Nasreen of the Case which is related to Clinic Dento Correct.
        //     if($clinicId == 1415){ 
        //         $cc = ['arif.zaidi@clearpathortho.com', 'asif.mustafa@clearpathortho.com', 'amir.ghani@clearpathortho.com', 'waqas.tariq@clearpathortho.pk', 'faraz.ahmed@clearpathortho.pk', 'zohaib.zafar@clearpathortho.com'];
        //     }
        //     else{
        //         $cc = ['arif.zaidi@clearpathortho.com', 'asif.mustafa@clearpathortho.com', 'amir.ghani@clearpathortho.com', 'waqas.tariq@clearpathortho.pk', 'faraz.ahmed@clearpathortho.pk', 'zohaib.zafar@clearpathortho.com'];
        //     }
        // }else if($regionName == 'Islamabad'){
        //     $to = ['islamabad.support@clearpathortho.com'];
        //     $cc = ['haider.ali@clearpathortho.com', 'zubair.khan@clearpathortho.com', 'shahban.ali@clearpathortho.com', 'usman.zafar@clearpathortho.pk', 'shahaan.sahar@clearpathortho.com', 'zohaib.zafar@clearpathortho.com'];
        // }else{
        //     $to =  ['karachi.support@clearpathortho.com'];
        //     $cc = ['umer.farooq@clearpathortho.com', 'naeem.khan@clearpathortho.com', 'kashif.shoukat@clearpathortho.com', 'babar.mansoor@clearpathortho.pk', 'hassan.junaid@clearpathortho.com', 'sumbal.nasir@clearpathortho.pk', 'zohaib.zafar@clearpathortho.com'];
        // }

        $data = [
            'to' => $to,
            'cc' => $cc,
        ];
        Mail::send(new SetupModification($data));
    }

    public function conscentFormPDF(){
        
    }

    public function render()
    {
        return view('livewire.case-detail.component.treatment-plan-action');
    }
}
