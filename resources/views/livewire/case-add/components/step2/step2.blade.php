<div>
    <fieldset class="wizard-fieldset {{$currentStep != 2 ? 'd-none':'show'}}">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="" class="">Impression Type <span class="text-danger"> *</span></label>
                    <div class="row">
                        @foreach($impressions as $impression)
                            <div class="col-md-6 form-group d-flex align-items-baseline">
                                <input type="radio" name="impression" id="Option_{{$impression->id}}" class="me-2" value="{{($impression->id == 1)?'1': '2'}}" wire:model="impressionType"/>
                                <label for="Option_{{$impression->id}}">{{$impression->name}}</label>                    
                            </div>
                        @endforeach
                    </div>
                    @error('impressionType') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Radiographs<span class="text-danger"> *</span></label>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="checkbox" id="md_checkbox_3" name="radio_graph_opg" value="opg" class="me-2" wire:model="radioGraph"/>
                        <label for="md_checkbox_3">OPG</label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="checkbox" id="md_checkbox_4" name="radio_graph_ceph" value="ceph" class="me-2" wire:model="radioGraph"/>
                        <label for="md_checkbox_4">Lateral Cephalogram</label>
                    </div>
                    @error('radioGraph') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="">Arch (es) <span class="text-danger"> *</span></label>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="checkbox" id="md_checkbox_1" name="arch_upper" value="upper" class="me-2" wire:model="arches"/>
                            <label for="md_checkbox_1">Upper</label>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="checkbox" id="md_checkbox_2" name="arch_lower" value="lower" class="me-2" wire:model="arches"/>
                            <label for="md_checkbox_2">Lower</label>
                        </div> 
                    </div>  
                    @error('arches') <span class="text-danger">{{ $message }}</span> @enderror              
                </div>                 
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="">Passive Aligners</label>
                    <div class="row">
                        <div class="col-md-6 form-group d-flex align-items-baseline">
                            <input type="radio" id="Option_23" name="zero_aligner" value="1" class="me-2" wire:model="passiveAligner"/>
                            <label for="Option_23">Yes</label>
                        </div>
                        <div class="col-md-6 form-group d-flex align-items-baseline">
                            <input type="radio" id="Option_24" name="zero_aligner" value="0" class="me-2" wire:model="passiveAligner"/>
                            <label for="Option_24">No</label>
                        </div>
                        @if($passiveAligner == 1)
                        <div class="col-md-12">
                            <b>ON CHARGE</b>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="">Case Recieved Date</label>
                    <input type="date" class="form-control" name="receive_date" id="receive_date" value="" wire:model="recieveDate">
                    @error('recieveDate') <span class="text-danger">{{ $message }}</span> @enderror              
                </div>
            </div>
        </div>
        <livewire:case-add.components.step2.location :setCountry="$country" :setCity="$city" :setArea="$area"/>
    </fieldset>	
</div>
