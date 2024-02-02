<?php

namespace App\Http\Livewire\CaseDetail\Component;
use App\Models\MedicalPrimaryCases;
use App\Models\MedicalCasesPictures;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Livewire\WithFileUploads;
use ZipArchive;

use Livewire\Component;

class UploadPhoto extends Component
{
    use WithFileUploads;
    protected $debug = true;

    
    public $files;

    public $caseId;
    public $erpCaseId;

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
    
    public function uploadPictures(Request $request){
        $uploadedFiles = $request->file('data');
        $caseId = $request->input('caseId');
        $erpCaseId = $request->input('erpCaseId');
        $medicalCasesPictures = new MedicalCasesPictures();
        foreach ($uploadedFiles as $file) {
            $fileName = now()->format('YmdHis') . '-' . $file->getClientOriginalName();
            $file->storeAs(CASE_PICTURES_PATH_DIRECTORY_PATH, $fileName, 'public');
            // Save the file information to the database
                $id = MedicalCasesPictures::create([
                    'case_number' => $caseId,
                    'case_id' => $erpCaseId,
                    'name' => $fileName,
                    'picture_portal' => 'Dental',
                    'is_deletable' => HARD_CODE_ID_YES,
                    'created' => time(),
                    'created_by' => session('doctorId'),
                    'created_by_reference_table' => 'MY_ORGANIZATION_TEAM_TABLE'
                ]);
                $id = $id->id;
                return response()->json([
                    'success' => true, 
                    'data' => $this->caseId,
                ]);
        }
      
        return response()->json(['success' => true]);
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
