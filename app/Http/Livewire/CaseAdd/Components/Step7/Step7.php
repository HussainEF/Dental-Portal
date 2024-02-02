<?php

namespace App\Http\Livewire\CaseAdd\Components\Step7;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\MedicalPrimaryCases;

class Step7 extends Component
{
    use WithFileUploads;

    protected $listeners = [
        'step7Validation',
        'termsCondition',//Recieving Value from Terms-Condition Component
        'doctorSign'
    ]; 

    protected function storeFile($file, $fileType){
        $dir;
        switch($fileType){
            case 'stl':
                $dir = "stl";
                break;
            case 'opg':
                $dir = "xray/opg";
                break;
            case 'ceph':
                $dir = "xray/ceph";
                break;
            case 'rx':
                $dir = "rx";
                break;
        }
        $fileName = now()->format('YmdHis') . '-' . $file->getClientOriginalName();
        $file->storeAs($dir, $fileName, 'public');
        return $fileName;
    }

    //Variables from Parent form-wizard for data passing between child and parent
    public $currentStep;

    //Pictures Uploads
    public $stlUpper;
    public $xRayOPG;
    public $stlLower;
    public $xRayCEPH;
    public $rxForm;
    
    //Step-7 Data Attributes
    public $step7Data;
    public $spaceClosure = [];
    public $scUpperComplete = HARD_CODE_ID_NO;
    public $scUpperLeave = HARD_CODE_ID_NO;
    public $scLowerComplete = HARD_CODE_ID_NO;
    public $scLowerLeave = HARD_CODE_ID_NO;
    public $crowdingResolution = [];
    public $crIPR = HARD_CODE_ID_NO;
    public $crProclination = HARD_CODE_ID_NO;
    public $crExpansion = HARD_CODE_ID_NO;
    public $crExtraction = HARD_CODE_ID_NO;
    public $preferredExtraction = [];
    public $treatmentSetup = HARD_CODE_ID_NO;
    public $otherExtraction = HARD_CODE_ID_NO;
    public $dentalCrossBite;
    public $midlineMaintainCorrect = [];
    public $midlineMaintain = HARD_CODE_ID_NO;
    public $midlineCorrect = HARD_CODE_ID_NO;
    public $midlineMoveUpper;
    public $midlineMoveLower;
    public $canineOcclusion = [];
    public $canineClassOneR = HARD_CODE_ID_NO;
    public $canineClassOneL = HARD_CODE_ID_NO;
    public $canineClassTwoR = HARD_CODE_ID_NO;
    public $canineClassTwoL = HARD_CODE_ID_NO;
    public $canineClassThreeR = HARD_CODE_ID_NO;
    public $canineClassThreeL = HARD_CODE_ID_NO;
    public $molarOcclusion = [];
    public $molarClassOneR = HARD_CODE_ID_NO;
    public $molarClassOneL = HARD_CODE_ID_NO;
    public $molarClassTwoR = HARD_CODE_ID_NO;
    public $molarClassTwoL = HARD_CODE_ID_NO;
    public $molarClassThreeR = HARD_CODE_ID_NO;
    public $molarClassThreeL = HARD_CODE_ID_NO;
    public $incisorRequiredOverjet;
    public $incisorRequiredOverBite;
    public $comments;
    public $termsAndCondition;
    public $doctorSign;
    public $primaryCaseId;

    public function mount(){
        $step7Data = session('step7Data');
        $this->spaceClosure = $step7Data['spaceClosure'] ?? [];
        $this->crowdingResolution = $step7Data['crowdingResolution'] ?? [];
        $this->preferredExtraction = $step7Data['preferredExtraction'] ?? [];
        $this->midline = $step7Data['midline'] ?? [];
        $this->midlineMaintainCorrect = $step7Data['midlineMaintainCorrect'] ?? [];
        $this->canineOcclusion = $step7Data['canineOcclusion'] ?? [];
        $this->molarOcclusion = $step7Data['molarOcclusion'] ?? [];
        $this->midlineMoveUpper = $step7Data['midlineMoveUpper'];
        $this->midlineMoveLower = $step7Data['midlineMoveLower'];
        $this->incisorRequiredOverjet = $step7Data['incisorRequiredOverjet'];
        $this->comments = $step7Data['comments'];
        // $this->termsAndCondition = $this->step7Data['termsAndCondition'] == HARD_CODE_ID_YES ? true : false;
    }

    public function termsCondition($value){
        $this->termsAndCondition = $value;
    }

    public function doctorSign($value){
        $this->doctorSign = $value;
    }

    public function step7Validation(){
        $this->step7Data = $this->validate([
            'spaceClosure' => 'required|array',
            'scUpperComplete' => '',
            'scUpperLeave' => '',
            'scLowerComplete' => '',
            'scLowerLeave' => '',
            'crowdingResolution' => 'required|array',
            'crIPR' => '',
            'crProclination' => '',
            'crExpansion' => '',
            'crExtraction' => '',
            'preferredExtraction' => 'required|array',
            'treatmentSetup' => '',
            'otherExtraction' => '',
            'dentalCrossBite' => 'required',
            'midlineMaintainCorrect' => 'required|array',
            'midlineMaintain' => '',
            'midlineCorrect' => '',
            'midlineMoveUpper' => '',
            'midlineMoveLower' => '',
            'canineOcclusion' => 'array',
            'canineClassOneR' => '',
            'canineClassOneL' => '',
            'canineClassTwoR' => '',
            'canineClassTwoL' => '',
            'canineClassThreeR' => '',
            'canineClassThreeL' => '',
            'molarOcclusion' => 'array',
            'molarClassOneR' => '',
            'molarClassOneL' => '',
            'molarClassTwoR' => '',
            'molarClassTwoL' => '',
            'molarClassThreeR' => '',
            'molarClassThreeL' => '',
            'incisorRequiredOverjet' => '',
            'incisorRequiredOverBite' => '',
            'comments' => '',
            'termsAndCondition' => 'required|accepted',
            'doctorSign' => 'required',
        ]);

        //Setting the Values of Space-Closure 
        $selectedCheckBox = count($this->step7Data['spaceClosure']);
        for($i=0; $i<$selectedCheckBox; $i++){
            if(isset($this->step7Data['spaceClosure'][$i])){
                switch($this->step7Data['spaceClosure'][$i])
                {
                    case "scUpperComplete":
                        $this->step7Data['scUpperComplete'] = HARD_CODE_ID_YES;
                        break;
                    case "scUpperLeave":
                        $this->step7Data['scUpperLeave'] = HARD_CODE_ID_YES;
                        break;
                    case "scLowerComplete":
                        $this->step7Data['scLowerComplete'] = HARD_CODE_ID_YES;
                        break;
                    case "scLowerLeave":
                        $this->step7Data['scLowerLeave'] = HARD_CODE_ID_YES;
                        break;
                }
            }
        }

        //Setting the Values of CROWDING RESOLUTION 
        $selectedCheckBox = count($this->step7Data['crowdingResolution']);
        for($i=0; $i<$selectedCheckBox; $i++){
            if(isset($this->step7Data['crowdingResolution'][$i])){
                switch($this->step7Data['crowdingResolution'][$i])
                {
                    case "crIPR":
                        $this->step7Data['crIPR'] = HARD_CODE_ID_YES;
                        break;
                    case "crProclination":
                        $this->step7Data['crProclination'] = HARD_CODE_ID_YES;
                        break;
                    case "crExpansion":
                        $this->step7Data['crExpansion'] = HARD_CODE_ID_YES;
                        break;
                    case "crExtraction":
                        $this->step7Data['crExtraction'] = HARD_CODE_ID_YES;
                        break;
                }
            }
        }

        //Setting the Values of PREFERRED EXTRACION
        $selectedCheckBox = count($this->step7Data['preferredExtraction']);
        for($i=0; $i<$selectedCheckBox; $i++){
            if(isset($this->step7Data['preferredExtraction'][$i])){
                switch($this->step7Data['preferredExtraction'][$i])
                {
                    case "treatmentSetup":
                        $this->step7Data['treatmentSetup'] = HARD_CODE_ID_YES;
                        break;
                    case "otherExtraction":
                        $this->step7Data['otherExtraction'] = HARD_CODE_ID_YES;
                        break;
                }
            }
        }

        //Setting the Values of CORRECTION OF DENTAL CROSS BITE
        if(isset($this->step7Data['dentalCrossBite'])){
            if($this->step7Data['dentalCrossBite'])
                $this->step7Data['dentalCrossBite'] = HARD_CODE_ID_YES;
            else
                $this->step7Data['dentalCrossBite'] = HARD_CODE_ID_NO;
        }

        //Setting the Values of MIDLINE
        $selectedCheckBox = count($this->step7Data['midlineMaintainCorrect']);
        for($i=0; $i<$selectedCheckBox; $i++){
            if(isset($this->step7Data['midlineMaintainCorrect'][$i])){
                switch($this->step7Data['midlineMaintainCorrect'][$i])
                {
                    case "midlineMaintain":
                        $this->step7Data['midlineMaintain'] = HARD_CODE_ID_YES;
                        break;
                    case "midlineCorrect":
                        $this->step7Data['midlineCorrect'] = HARD_CODE_ID_YES;
                        break;
                }
            }
        }

        //Setting the Values of CANINE OCCLUSION GOAL
        $selectedCheckBox = count($this->step7Data['canineOcclusion']);
        for($i=0; $i<$selectedCheckBox; $i++){
            if(isset($this->step7Data['canineOcclusion'][$i])){
                switch($this->step7Data['canineOcclusion'][$i])
                {
                    case "canineClassOneR":
                        $this->step7Data['canineClassOneR'] = HARD_CODE_ID_YES;
                        break;
                    case "canineClassOneL":
                        $this->step7Data['canineClassOneL'] = HARD_CODE_ID_YES;
                        break;
                    case "canineClassTwoR":
                        $this->step7Data['canineClassTwoR'] = HARD_CODE_ID_YES;
                        break;
                    case "canineClassTwoL":
                        $this->step7Data['canineClassTwoL'] = HARD_CODE_ID_YES;
                        break;
                    case "canineClassThreeR":
                        $this->step7Data['canineClassThreeR'] = HARD_CODE_ID_YES;
                        break;
                    case "canineClassThreeL":
                        $this->step7Data['canineClassThreeL'] = HARD_CODE_ID_YES;
                        break;
                }
            }
        }

        //Setting the Values of MOLAR OCCLUSION GOAL
        $selectedCheckBox = count($this->step7Data['molarOcclusion']);
        for($i=0; $i<$selectedCheckBox; $i++){
            if(isset($this->step7Data['molarOcclusion'][$i])){
                switch($this->step7Data['molarOcclusion'][$i])
                {
                    case "molarClassOneR":
                        $this->step7Data['molarClassOneR'] = HARD_CODE_ID_YES;
                        break;
                    case "molarClassOneL":
                        $this->step7Data['molarClassOneL'] = HARD_CODE_ID_YES;
                        break;
                    case "molarClassTwoR":
                        $this->step7Data['molarClassTwoR'] = HARD_CODE_ID_YES;
                        break;
                    case "molarClassTwoL":
                        $this->step7Data['molarClassTwoL'] = HARD_CODE_ID_YES;
                        break;
                    case "molarClassThreeR":
                        $this->step7Data['molarClassThreeR'] = HARD_CODE_ID_YES;
                        break;
                    case "molarClassThreeL":
                        $this->step7Data['molarClassThreeL'] = HARD_CODE_ID_YES;
                        break;
                }
            }
        }

        //Setting the Value of Terms&Condition
        if(isset($this->step7Data['termsAndCondition'])){
            $this->step7Data['termsAndCondition'] = HARD_CODE_ID_YES;
        }

        if($this->stlUpper != NULL || $this->stlLower != NULL || $this->xRayOPG != NULL || $this->xRayCEPH != NULL || $this->rxForm != NULL){
            $primaryCases = new MedicalPrimaryCases();
            if($this->stlUpper != NULL){
                $stlUpper = $this->storeFile($this->stlUpper, 'stl');
                $primaryCases->stl_1 = $stlUpper;
            }
            if($this->stlLower != NULL){
                $stlLower = $this->storeFile($this->stlLower, 'stl');
                $primaryCases->stl_2 = $stlLower;
            }
            if($this->xRayOPG != NULL){
                $xRayOPG = $this->storeFile($this->xRayOPG, 'opg');
                $primaryCases->x_rays_opg = $xRayOPG;
            }
            if($this->xRayCEPH != NULL){
                $xRayCEPH = $this->storeFile($this->xRayCEPH, 'ceph');
                $primaryCases->x_rays_ceph = $xRayCEPH;
            }
            if($this->rxForm != NULL){
                $rxForm = $this->storeFile($this->rxForm, 'rx');
                $primaryCases->RX_form = $rxForm;
            }
            $primaryCases->save();
            $this->primaryCaseId= $primaryCases->id;
        }
        
        
        //Storing the Data of Step-7 in session using Helper Function
        session(['step7Data' => $this->step7Data, 'primaryId' => $this->primaryCaseId]);
        // dd($this->step7Data);
        $this->emitUp('step7Validated');
    }
    
    public function render()
    {
        return view('livewire.case-add.components.step7.step7');
    }
}
