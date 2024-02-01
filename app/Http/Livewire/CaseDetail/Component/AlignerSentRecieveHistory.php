<?php

namespace App\Http\Livewire\CaseDetail\Component;
use App\Models\SetupDeliveryServices;
use App\Models\NextBatchRequest;
use App\Models\AlignerShippedToDentist;

use Livewire\Component;

class AlignerSentRecieveHistory extends Component
{
    public $erpCaseId;//Recieved From Parent Component
    
    //For Getting Instance of Models
    public $alignerShippedToDentist;
    public $nextBatchRequest;
    public $setupDeliveryServices;

    public function mount(){
        $this->alignerShippedToDentist = AlignerShippedToDentist::where(['case_reference_number' => $this->erpCaseId, 'is_deleted' => HARD_CODE_ID_NO])->get();
        if($this->alignerShippedToDentist->isNotEmpty()){
            $this->nextBatchRequest = collect();
            $this->setupDeliveryServices = collect();
            foreach($this->alignerShippedToDentist as $shippedData){
                $alignerShippedToDentistId = $shippedData['request_type'];
                $deliveryServicesData = SetupDeliveryServices::where(['id' => $alignerShippedToDentistId])->first();
                $this->setupDeliveryServices->push($deliveryServicesData);
                $batchRequestData = NextBatchRequest::where(['id' => $alignerShippedToDentistId])->first();
                $this->nextBatchRequest->push($batchRequestData);
            }
            // dd($alignerShippedToDentistId);
        }
    }

    public function render()
    {
        return view('livewire.case-detail.component.aligner-sent-recieve-history');
    }
}
