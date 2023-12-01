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
                        <input name="gender" value="Male" id="Option_8" type="radio" class="me-2" wire:model="patientGender">
                        <label for="Option_8">Male</label>
                    </div>
                    <div class="col-md-6 form-group d-flex align-items-baseline">
                        <input name="gender" value="Female" id="Option_9" type="radio" class="me-2" wire:model="patientGender">
                        <label for="Option_9">Female</label>              
                    </div>
                    @error('patientGender') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <livewire:case-add.components.step1.patient-nature />
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
            <livewire:case-add.components.step1.clinic-list/>
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
    <!-- <div class="row d-flex justify-content-center">
        <button type="button" class="col-md-2 btn btn-outline-primary" id="{{$nextBtn}}" wire:click="step1Validation">Next <i class="fa-solid fa-circle-arrow-right fa-lg"></i></button>
    </div> -->
</fieldset>	