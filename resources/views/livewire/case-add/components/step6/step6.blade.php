<fieldset class="wizard-fieldset {{$currentStep != 6 ? 'd-none':'show'}}">
    <h6>Dental Exmination</h6>
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <label class="" for="">TREATMENT INDICATED<span class="danger"> *</span></label>
                </div>
                <div class="col-md-4">
                    <input id="treatment_checkbox_upper" name="treatment_indicated_upper" class="me-2" value="" type="checkbox" wire:model="treatmentIndicatedUpper">
                    <label for="treatment_checkbox_upper">Upper</label>
                </div>
                <div class="col-md-4">
                    <input id="treatment_checkbox_lower" name="treatment_indicated_lower" class="me-2" value="" type="checkbox" wire:model="treatmentIndicatedLower">
                    <label for="treatment_checkbox_lower">Lower</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="" for="">TEETH TO BE MOVED<span class="danger"> *</span></label>
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
                            <input id="teeth_moved_upper_3_checkbox" name="teeth_moved_upper_3" value="" type="checkbox" wire:model="teethMovedUpper3">
                            <label for="teeth_moved_upper_3_checkbox"></label>        
                        </div>
                        <div class="col-md-4">
                            <input id="teeth_moved_lower_3_checkbox" name="teeth_moved_lower_3" value="" type="checkbox" wire:model="teethMovedLower3">
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
                            <input id="teeth_moved_upper_5_checkbox" name="teeth_moved_upper_5" value="" type="checkbox" wire:model="teethMovedUpper5">
                            <label for="teeth_moved_upper_5_checkbox"></label>
                        </div>
                        <div class="col-md-4">
                            <input id="teeth_moved_lower_5_checkbox" name="teeth_moved_lower_5" value="" type="checkbox" wire:model="teethMovedLower5">
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
                            <input id="teeth_moved_upper_7_checkbox" name="teeth_moved_upper_7" value="" type="checkbox" wire:model="teethMovedUpper7">
                            <label for="teeth_moved_upper_7_checkbox"></label>
                        </div>
                        <div class="col-md-4">
                            <input id="teeth_moved_lower_7_checkbox" name="teeth_moved_lower_7" value="" type="checkbox"7 wire:model="teethMovedLower7">
                            <label for="teeth_moved_lower_7_checkbox"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label  class="writing-color" for="">BLACK TRIANGLES</label>
                        </div>
                        <div class="col-md-4">
                            <input id="black_triangle_present_checkbox" name="black_triangle_present" class="me-2" value="" type="checkbox" wire:model="blackTrianglePresent">
                            <label for="black_triangle_present_checkbox">Present</label>
                        </div>
                        <div class="col-md-4">
                            <input id="black_triangle_absent_checkbox" name="black_triangle_absent" class="me-2" value="" type="checkbox" wire:model="blackTriangleAbsent">
                            <label for="black_triangle_absent_checkbox">Absent</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3"> 
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">MIDLINE<span class="danger"> *</span></label>
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
                            <input id="upper_centered_checkbox" name="upper_centered" value="" type="checkbox" wire:model="upperCentered">
                            <label for="upper_centered_checkbox"></label>
                        </div>
                        <div class="col-md-4">
                            <input id="lower_centered_checkbox" name="lower_centered" value="" type="checkbox" wire:model="lowerCentered">
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
                            <input id="upper_left_checkbox" name="upper_left" value="" type="checkbox" wire:model="upperLeft">
                            <label for="upper_left_checkbox"></label>
                        </div>
                        <div class="col-md-4">
                            <input id="lower_left_checkbox" name="lower_left" value="" type="checkbox" wire:model="lowerLeft">
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
                            <input id="upper_right_checkbox" name="upper_right" value="" type="checkbox" wire:model="upperRight">
                            <label for="upper_right_checkbox"></label>
                        </div>
                        <div class="col-md-4">
                            <input id="lower_right_checkbox" name="lower_right" value="" type="checkbox" wire:model="lowerRight">
                            <label for="lower_right_checkbox"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="cross_bite">CROSS BITE</label>
                        </div>
                        <div class="col-md-4">
                            <input id="skeletal_checkbox" name="skeletal" class="me-2" value="" type="checkbox" wire:model="skeletal">
                            <label for="skeletal_checkbox">Skeletal</label>
                        </div>
                        <div class="col-md-4">
                            <input id="dental_checkbox" name="dental" class="me-2" value="" type="checkbox" wire:model="dental">
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
    <!-- <div class="row d-flex justify-content-center">
        <button type="button" class="col-md-2 btn btn-outline-primary form-wizard-previous-btn me-3"><i class="fa-solid fa-circle-arrow-left fa-lg"></i> Previous</button>
        <button type="button" class="col-md-2 btn btn-outline-primary form-wizard-next-btn" wire:click="step6Validation">Next <i class="fa-solid fa-circle-arrow-right fa-lg"></i></button>
    </div> -->
</fieldset>