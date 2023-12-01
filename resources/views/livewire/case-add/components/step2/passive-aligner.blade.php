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