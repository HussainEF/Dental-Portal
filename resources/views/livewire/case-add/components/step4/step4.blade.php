<fieldset class="wizard-fieldset {{$currentStep != 4 ? 'd-none':'show'}}">
    <h6>Medical History</h6>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="illness">ILLNESS<span class="danger"> *</span></label>
                <input class="form-control" type="text" name="illness" id="illness" wire:model="illness">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="medications">MEDICATIONS<span class="danger"> *</span></label>
                <input class="form-control" type="text" name="medications" id="medications" wire:model="medications">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="">Does the patient have any allergies?<span class="danger"> *</span></label>
                <input type="text" class="form-control" name="patient_allergy" id="patient_allergy" wire:model="patientAllergy">
            </div>
        </div>
        <div class="col-md-6 mt-2">
            <div class="mb-3">
                <div class="form-group">
                    <input id="chemo_checkbox" name="chemo_radiotherapy" class="me-2" value="" type="checkbox" wire:model="chemo">
                    <label for="chemo_checkbox">CHEMO/RADIOTHERAPY</label>
                </div>
                <div class="form-group">
                    <input id="steriods_checkbox" name="steriods_bisphosphonates" class="me-2" value=""  type="checkbox" wire:model="steroids">
                    <label for="steriods_checkbox">STEROIDS/BISPHOSPHONATES</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <livewire:case-add.components.step4.diseases />
    </div>
    <!-- <div class="d-flex justify-content-center">
        <button type="button" class="col-md-2 btn btn-outline-primary form-wizard-previous-btn me-3"><i class="fa-solid fa-circle-arrow-left fa-lg"></i> Previous</button>
        <button type="button" class="col-md-2 btn btn-outline-primary form-wizard-next-btn" wire:click="step4Validation">Next <i class="fa-solid fa-circle-arrow-right fa-lg"></i></button>
    </div> -->
</fieldset>	