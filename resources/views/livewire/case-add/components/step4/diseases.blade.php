<div class="col-md-6 mb-3">
    <div class="mb-3">
        <label for="">Does the patient have any of the following diseases?<span class="danger"> *</span></label>
        @foreach($diseasesList as $disease)
        <div class="form-group">
            <input type="checkbox" name="medical_history_diseases[]" class="me-2" id="disease_{{$disease->id}}" value="{{$disease->id}}" wire:click="toggle({{$disease->id}})" wire:model="diseaseList"/>
            <label for="disease_{{$disease->id}}">{{$disease->name}}</label>
        </div>
        @endforeach
    </div>
    @if($remarks == 1)
    <div id="form-group">
        <label for="other_diseas">Remarks:</label>
        <input type="text" class="form-control" id="other_diseas" name="other_disease" wire:model="otherDiseases">
    </div>
    @endif
</div>