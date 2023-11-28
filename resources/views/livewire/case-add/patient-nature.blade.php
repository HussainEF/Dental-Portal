<div class="row">
    <div class="col-md-6 form-group d-flex align-items-baseline">
        <input type="radio" id="Option_3" name="nature_of_patient" value="1" class="me-2" wire:model="adjunctiveProcedure">
        <label for="Option_3">Overseas</label>
    </div>
    <div class="col-md-6 form-group d-flex align-items-baseline">
        <input type="radio" id="Option_4" name="nature_of_patient" value="0" class="me-2" wire:model="adjunctiveProcedure">
        <label for="Option_4">Local</label>
    </div>
    @if($adjunctiveProcedure == 1)
    <div class="col-md-12">
        <div class="form-group d-flex align-items-baseline">
            <input id="md_checkbox_11" name="adjunctive_ebt" value="YES" class="me-2" type="checkbox">
            <label for="md_checkbox_11">EBT</label>
        </div>
        <div class="form-group d-flex align-items-baseline">
            <input id="md_checkbox_14" name="adjunctive_attachment" value="YES" class="me-2" type="checkbox">
            <label for="md_checkbox_14">Attachments</label>
        </div>
    </div>
    @endif
</div>