<fieldset class="wizard-fieldset {{$currentStep != 6 ? 'd-none':'show'}}">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <label class="" for="">TREATMENT INDICATED<span class="text-danger"> *</span></label>
                </div>
                <div class="col-md-4">
                    <input id="treatment_checkbox_upper" name="treatment_indicated_upper" class="me-2" value="upper" type="checkbox" wire:model="treatmentIndicated">
                    <label for="treatment_checkbox_upper">Upper</label>
                </div>
                <div class="col-md-4">
                    <input id="treatment_checkbox_lower" name="treatment_indicated_lower" class="me-2" value="lower" type="checkbox" wire:model="treatmentIndicated">
                    <label for="treatment_checkbox_lower">Lower</label>
                </div>
            </div>
            @error('treatmentIndicated') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="" for="">TEETH TO BE MOVED<span class="text-danger"> *</span></label>
                        </div>
                        <div class="col-md-4">
                            <label for="">Upper</label>
                        </div>
                        <div class="col-md-4">
                            <label for="">Lower</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">3 To 3</label>
                        </div>
                        <div class="col-md-4">
                            <input id="teeth_moved_upper_3_checkbox" name="teeth_moved_upper_3" value="teethMovedUpper3" type="checkbox" wire:model="teethMoved">
                            <label for="teeth_moved_upper_3_checkbox"></label>        
                        </div>
                        <div class="col-md-4">
                            <input id="teeth_moved_lower_3_checkbox" name="teeth_moved_lower_3" value="teethMovedLower3" type="checkbox" wire:model="teethMoved">
                            <label for="teeth_moved_lower_3_checkbox"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">5 To 5</label>
                        </div>
                        <div class="col-md-4">
                            <input id="teeth_moved_upper_5_checkbox" name="teeth_moved_upper_5" value="teethMovedUpper5" type="checkbox" wire:model="teethMoved">
                            <label for="teeth_moved_upper_5_checkbox"></label>
                        </div>
                        <div class="col-md-4">
                            <input id="teeth_moved_lower_5_checkbox" name="teeth_moved_lower_5" value="teethMovedLower5" type="checkbox" wire:model="teethMoved">
                            <label for="teeth_moved_lower_5_checkbox"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">7 To 7</label>
                        </div>
                        <div class="col-md-4">
                            <input id="teeth_moved_upper_7_checkbox" name="teeth_moved_upper_7" value="teethMovedUpper7" type="checkbox" wire:model="teethMoved">
                            <label for="teeth_moved_upper_7_checkbox"></label>
                        </div>
                        <div class="col-md-4">
                            <input id="teeth_moved_lower_7_checkbox" name="teeth_moved_lower_7" value="teethMovedLower7" type="checkbox" wire:model="teethMoved">
                            <label for="teeth_moved_lower_7_checkbox"></label>
                        </div>
                    </div>
                </div>
            </div>
            @error('teethMoved') <span class="text-danger">{{ $message }}</span> @enderror
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label  class="writing-color" for="">BLACK TRIANGLES</label>
                        </div>
                        <div class="col-md-4">
                            <input id="black_triangle_present_checkbox" name="black_triangle_present" class="me-2" value="blackTrianglePresent" type="checkbox" wire:model="blackTriangle">
                            <label for="black_triangle_present_checkbox">Present</label>
                        </div>
                        <div class="col-md-4">
                            <input id="black_triangle_absent_checkbox" name="black_triangle_absent" class="me-2" value="blackTriangleAbsent" type="checkbox" wire:model="blackTriangle">
                            <label for="black_triangle_absent_checkbox">Absent</label>
                        </div>
                    </div>
                </div>
                @error('blackTriangle') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
    <div class="row mb-3"> 
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">MIDLINE<span class="text-danger"> *</span></label>
                        </div>
                        <div class="col-md-4">
                            <label for="">Upper</label>
                        </div>
                        <div class="col-md-4">
                            <label for="">Lower</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Centered</label>
                        </div>
                        <div class="col-md-4">
                            <input id="upper_centered_checkbox" name="upper_centered" value="upperCentered" type="checkbox" wire:model="midline">
                            <label for="upper_centered_checkbox"></label>
                        </div>
                        <div class="col-md-4">
                            <input id="lower_centered_checkbox" name="lower_centered" value="lowerCentered" type="checkbox" wire:model="midline">
                            <label for="lower_centered_checkbox"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row"> 
                        <div class="col-md-4">
                            <label for="">Shift to Left</label>
                        </div>
                        <div class="col-md-4">
                            <input id="upper_left_checkbox" name="upper_left" value="upperLeft" type="checkbox" wire:model="midline">
                            <label for="upper_left_checkbox"></label>
                        </div>
                        <div class="col-md-4">
                            <input id="lower_left_checkbox" name="lower_left" value="lowerLeft" type="checkbox" wire:model="midline">
                            <label for="lower_left_checkbox"></label>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">  
                        <div class="col-md-4">
                            <label for="">Shift to Right</label>
                        </div>
                        <div class="col-md-4">
                            <input id="upper_right_checkbox" name="upper_right" value="upperRight" type="checkbox" wire:model="midline">
                            <label for="upper_right_checkbox"></label>
                        </div>
                        <div class="col-md-4">
                            <input id="lower_right_checkbox" name="lower_right" value="lowerRight" type="checkbox" wire:model="midline">
                            <label for="lower_right_checkbox"></label>
                        </div>
                    </div>
                    @error('midline') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="cross_bite">CROSS BITE</label>
                        </div>
                        <div class="col-md-4">
                            <input id="skeletal_checkbox" name="skeletal" class="me-2" type="checkbox" value="skeletal" wire:model="crossBite">
                            <label for="skeletal_checkbox">Skeletal</label>
                        </div>
                        <div class="col-md-4">
                            <input id="dental_checkbox" name="dental" class="me-2" type="checkbox" value="dental" wire:model="crossBite">
                            <label for="dental_checkbox">Dental</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <label class="" for="incisor_relationship">INCISOR RELATIONSHIP</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="" for="overjet">Overjet</label>
                    <input id="overjet" name="overjet" value="" class="form-control" type="text" wire:model="overjet">
                </div>
                <div class="col-md-6">
                    <label class="" for="overbite">Overbite</label>
                    <input id="overbite" name="overbite" value="" class="form-control" type="text" wire:model="overbite">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="" for="teeth_not_to_be_moved">TEETH NOT TO BE MOVED</label>
                    <input id="teeth_not_to_be_moved" name="teeth_not_to_be_moved" value="" class="form-control" type="text" wire:model="teethToBeMoved">
                </div>
                <div class="col-md-6">
                    <label class="" for="other_input">OTHER</label>
                    <input id="other_input" name="other_input" value="" class="form-control" type="text" wire:model="otherInput">
                </div>
            </div>
        </div>
    </div>
</fieldset>