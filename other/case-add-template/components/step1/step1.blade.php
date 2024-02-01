<div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="wfirstName2"> Patient Name : <span class="text-danger">*</span></label>
                <input type="text" class="form-control required" id="wfirstName2" name="patient_name" wire:model="patientName" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="wlastName2"> Patient Age : <span class="text-danger">*</span></label>
                <input type="number" class="form-control required" id="wlastName2" min="1" class="form-control" name="age" wire:model="patientAge"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="">Gender: <span class="text-danger">*</span></label>
                <div class="row">
                    <div class="col-md-6 form-group d-flex align-items-baseline">
                        <input name="gender" value="1" id="Option_8" type="radio" class="me-2" wire:model="patientGender">
                        <label for="Option_8">Male</label>
                    </div>
                    <div class="col-md-6 form-group d-flex align-items-baseline">
                        <input name="gender" value="2" id="Option_9" type="radio" class="me-2" wire:model="patientGender">
                        <label for="Option_9">Female</label>              
                    </div>
                    <div id="errorGender"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <div class="row">
                    <label for="">Nature Of Patient: <span class="text-danger">*</span></label>
                    <div class="col-md-6 form-group d-flex align-items-baseline">
                        <input type="radio" id="Option_3" name="nature_of_patient" value="overseas" class="me-2" wire:model="adjunctiveProcedure"  wire:click.prevent="resetadjunctiveProcedure">
                        <label for="Option_3">Overseas</label>
                    </div>
                    <div class="col-md-6 form-group d-flex align-items-baseline">
                        <input type="radio" id="Option_4" name="nature_of_patient" value="local" class="me-2" wire:model="adjunctiveProcedure">
                        <label for="Option_4">Local</label>
                    </div>
                    <div id="errorNatureOfPatient"></div>
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
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="postal_code" class="">Zip Code</label>
                <input type="text" id="postal_code" class="form-control" name="patient_zip_code" digits wire:model="patientZipCode"/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="emailAddress" class="">Email: <span class="danger"> *</span></label>
                <input type="text" id="emailAddress" class="form-control" name="patient_email" wire:model="patientEmail"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="wphoneNumber2">Phone Number :</label>
                <input type="tel" class="form-control" id="wphoneNumber2" name="patient_phone"  wire:model="patientPhone"/>
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
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var componentVariable = @json($adjunctiveProcedure);
            var radioButtons = document.querySelectorAll('input[name="nature_of_patient"]');
            radioButtons.forEach(function(radioButton) {
                radioButton.addEventListener('change', function() {
                    var selectedValue = document.querySelector('input[name="nature_of_patient"]:checked').value;
                    if (selectedValue == 'overseas') {
                        @this.set('adjunctiveProcedure', selectedValue);
                    } else if (selectedValue == 'local'){
                        @this.set('adjunctiveProcedure', selectedValue);
                    }
                });
            });
        });
    </script> -->
</div