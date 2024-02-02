<fieldset class="wizard-fieldset {{$currentStep != 1 ? 'd-none':'show'}}">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 bg-light-primary rounded-1">
            <h4 class="d-flex justify-content-center">Patient Information</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="wfirstName2"> Patient Name : <span>*</span>
                </label>
                <input type="text" class="form-control" id="wfirstName2" name="patient_name" wire:model="patientName" />
                @error('patientName') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
            <label for="wlastName2"> Patient Age : <span>*</span>
            </label>
            <input type="number" class="form-control" id="wlastName2" min="1" class="form-control" name="age" wire:model="patientAge"/>
            @error('patientAge') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="">Gender: <span>*</span></label>
                <div class="row">
                    <div class="col-md-6 form-group d-flex align-items-baseline">
                        <input name="gender" value="1" id="Option_8" type="radio" class="me-2" wire:model="patientGender">
                        <label for="Option_8">Male</label>
                    </div>
                    <div class="col-md-6 form-group d-flex align-items-baseline">
                        <input name="gender" value="2" id="Option_9" type="radio" class="me-2" wire:model="patientGender">
                        <label for="Option_9">Female</label>              
                    </div>
                    @error('patientGender') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <div class="row">
                    <label for="">Nature Of Patient: <span>*</span></label>
                    <div class="col-md-6 form-group d-flex align-items-baseline">
                        <input type="radio" id="Option_3" name="nature_of_patient" value="overseas" class="me-2" wire:model="adjunctiveProcedure">
                        <label for="Option_3">Overseas</label>
                    </div>
                    <div class="col-md-6 form-group d-flex align-items-baseline">
                        <input type="radio" id="Option_4" name="nature_of_patient" value="local" class="me-2" wire:model="adjunctiveProcedure" wire:click="resetadjunctiveProcedure">
                        <label for="Option_4">Local</label>
                    </div>
                    @if($adjunctiveProcedure == "overseas")
                    <div class="col-md-12">
                        <div class="form-group d-flex align-items-baseline">
                            <input id="md_checkbox_11" name="adjunctive_ebt" wire:model="adjunctiveEBT" class="me-2" type="checkbox">
                            <label for="md_checkbox_11">EBT</label>
                        </div>
                        <div class="form-group d-flex align-items-baseline">
                            <input id="md_checkbox_14" name="adjunctive_attachment" wire:model="adjunctiveAttachment" class="me-2" type="checkbox">
                            <label for="md_checkbox_14">Attachments</label>
                        </div>
                    </div>
                    @endif
                    @error('adjunctiveProcedure') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="postal_code" class="">Zip Code</label>
                <input type="text" id="postal_code" class="form-control" name="patient_zip_code" wire:model="patientZipCode"/>
                @error('patientZipCode') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="emailAddress" class="">Email: <span class="danger"> *</span></label>
                <input type="text" id="emailAddress" class="form-control required" name="patient_email" wire:model="patientEmail"/>
                @error('patientEmail') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="wphoneNumber2">Phone Number :</label>
                <input type="tel" class="form-control" id="wphoneNumber2" name="patient_phone"  wire:model="patientPhone"/>
                @error('patientPhone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <livewire:case-add.components.step1.clinic-list :clinic="$clinic"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label for="" class="">Address</label>
            <div class="mb-3">
                <input type="text" id="autocomplete" name="patient_address_1" value="" class="form-control" placeholder="Address 1" wire:model="address1"/>
            </div>
            <div class="mb-3">
                <input type="text" name="patient_address_2" value="" class="form-control" placeholder="Address 2" wire:model="address2"/>
            </div>
            <div class="mb-3">
                <input type="text" name="patient_address_3" value="" class="form-control" placeholder="Address 3" wire:model="address3"/>
            </div>
        </div>
    </div>
</fieldset>	