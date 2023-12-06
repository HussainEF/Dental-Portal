<fieldset class="wizard-fieldset {{$currentStep != 2 ? 'd-none':'show'}}">
    <h6>Case Information</h6>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="" class="">Impression Type</label>
                <livewire:case-add.components.step2.impression-type />
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="">Radiographs<span class="danger"> *</span></label>
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="checkbox" id="md_checkbox_3" name="radio_graph_opg" value="" class="me-2" wire:model="radioGraphOPG"/>
                    <label for="md_checkbox_3">OPG</label>
                </div>
                <div class="col-md-6 form-group">
                    <input type="checkbox" id="md_checkbox_4" name="radio_graph_ceph" value="" class="me-2" wire:model="radioGraphCEPH"/>
                    <label for="md_checkbox_4">Lateral Cephalogram</label>
                </div>
                @error('radioGraph') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="">Arch (es) <span class="danger"> *</span></label>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="checkbox" id="md_checkbox_1" name="arch_upper" value="" class="me-2" wire:model="archesUpper"/>
                        <label for="md_checkbox_1">Upper</label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="checkbox" id="md_checkbox_2" name="arch_lower" value="" class="me-2" wire:model="archesLower"/>
                        <label for="md_checkbox_2">Lower</label>
                    </div> 
                </div>  
                @error('arches') <span class="text-danger">{{ $message }}</span> @enderror              
            </div>                 
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="">Passive Aligners</label>
                <livewire:case-add.components.step2.passive-aligner />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <label for="">Case Recieved Date</label>
                <input type="date" class="form-control" name="receive_date" id="receive_date" value="" wire:model="recieveDate">
            </div>
        </div>
    </div>
    <livewire:case-add.components.step2.location' />
    <!-- <div class="row d-flex justify-content-center">
        <button type="button" class="col-md-2 btn btn-outline-primary form-wizard-previous-btn me-3"><i class="fa-solid fa-circle-arrow-left fa-lg"></i> Previous</button>
        <button type="button" class="col-md-2 btn btn-outline-primary form-wizard-next-btn" wire:click="step2Validation">Next <i class="fa-solid fa-circle-arrow-right fa-lg"></i></button>
    </div> -->
</fieldset>	
