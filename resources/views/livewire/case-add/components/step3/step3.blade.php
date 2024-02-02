<div>
    <fieldset class="wizard-fieldset {{$currentStep != 3 ? 'd-none':'show'}}">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label for="">Chief Complaint <span class="text-danger"> *</span></label>
                    <textarea name="chief_complaint" class="form-control" rows="5" wire:model="chiefComplaint"></textarea>
                </div>
                @error('chiefComplaint') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </fieldset>
</div>