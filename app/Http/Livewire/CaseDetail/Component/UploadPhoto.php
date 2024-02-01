<?php

namespace App\Http\Livewire\CaseDetail\Component;
use App\Models\MedicalPrimaryCases;
use App\Models\MedicalCasesPictures;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;
use Livewire\WithFileUploads;
use ZipArchive;

use Livewire\Component;

class UploadPhoto extends Component
{
    use WithFileUploads;
    protected $debug = true;

    
    public $files;

    public $erpCaseId; // For storig erpCaseId from Evenet Listeners.

    //for getting Model Instance
    public $medicalCasesPictures;

    public function mount(){
        $this->caseId = session('searchBoxValue');
        $this->primaryCase = MedicalPrimaryCases::find($this->caseId); //Fetching Data from MedicalPrimaryCases 
        if($this->primaryCase != NULL){
            $this->erpCaseId = $this->primaryCase['case_id'];
            if($this->erpCaseId != NULL){
                $this->medicalCasesPictures = MedicalCasesPictures::where(['case_id' => $this->erpCaseId, 'is_deleted' => HARD_CODE_ID_NO])->get();
            }
        }
    }

    public function save($files)
    {
        dd($files);
    }

    public function downloadZip(){
        $zipFileName = 'oral_pictures.zip';
        $zipFilePath = storage_path("app/{$zipFileName}");

        $zip = new ZipArchive;
        $zip->open($zipFilePath, ZipArchive::CREATE);

        foreach ($this->medicalCasesPictures as $casePictures) {
            $fileUrl = "https://portal.clearpathortho.pk/pictures_cases/thumbnail/thumbnail_{$casePictures['name']}";
            $fileContent = Http::get($fileUrl)->body();
            $zip->addFromString($casePictures, $fileContent);
        }

        $zip->close();

        return response()->download($zipFilePath)->deleteFileAfterSend();
    }

    public function render()
    {
        return view('livewire.case-detail.component.upload-photo');
    }
}
