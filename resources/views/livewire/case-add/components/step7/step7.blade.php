<fieldset class="wizard-fieldset {{$currentStep != 7 ? 'd-none':'show'}}">
    <h6>Advised Tx</h6>
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="row mb-1">
                <div class="col-md-12">
                    <label class="" for="">SPACE CLOSURE<span class="danger"> *</span></label>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Upper arch</label>
                        </div>
                        <div class="col-md-4">
                            <input id="sc_upper_complete_checkbox" name="sc_upper_complete" class="me-2" value="" type="checkbox" wire:model="scUpperComplete">
                            <label for="sc_upper_complete_checkbox">Complete</label>
                        </div>
                        <div class="col-md-4">
                            <input id="sc_upper_leave_checkbox" name="sc_upper_leave" class="me-2" value="" type="checkbox" wire:model="scUpperLeave">
                            <label for="sc_upper_leave_checkbox">Leave Space</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="cross_bite">Lower arch</label>
                        </div>
                        <div class="col-md-4">
                            <input id="sc_lower_complete_checkbox" name="sc_lower_complete" class="me-2" value="" type="checkbox" wire:model="scLowerComplete">
                            <label for="sc_lower_complete_checkbox">Complete</label>
                        </div>
                        <div class="col-md-4">
                            <input id="sc_lower_leave_checkbox" name="sc_lower_leave" class="me-2" value="" type="checkbox" wire:model="scLowerLeave">
                            <label for="sc_lower_leave_checkbox">Leave Space</label>
                        </div>
                    </div>
                </div>
            </div>
            <small class="danger"><strong>(Complete space closure may require IPR. Specify where and how much space would be left)</strong></small>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <label class="" for="">CROWDING RESOLUTION<span class="danger"> *</span></label>
            <div class="row mt-1 mb-1">
                <div class="col-md-3">
                    <input id="cr_ipr_checkbox" name="cr_ipr" class="me-2" value="" type="checkbox" wire:model="crIPR">
                    <label for="cr_ipr_checkbox">IPR</label>
                </div>
                <div class="col-md-3">
                    <input id="cr_proclination_checkbox" name="cr_proclination" class="me-2" value=""  type="checkbox" wire:model="crProclination">
                    <label for="cr_proclination_checkbox">Proclination</label>
                </div>
                <div class="col-md-3">
                    <input id="cr_expansion_checkbox" name="cr_expansion" class="me-2" value=""  type="checkbox" wire:model="crExpansion">
                    <label for="cr_expansion_checkbox">Expansion</label>
                </div>
                <div class="col-md-3">
                    <input id="cr_extraction_checkbox" name="cr_extraction" class="me-2" value=""  type="checkbox" wire:model="crExtraction">
                    <label for="cr_extraction_checkbox">Extraction</label>
                </div>                      
            </div>                      
            <small class="danger">(Please specify your prefernce by writing in the boxes above)</strong></small>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <label class="" for="">PREFERRED EXTRACION</label>
            <div class="row mt-1 mb-1">
                <div class="col-md-6">
                    <input id="treatment_setup_checkbox" name="treatment_setup" class="me-2" value="" type="checkbox" wire:model="treatmentSetup">
                    <label for="treatment_setup_checkbox">As per treatment setup</label>
                </div>
                <div class="col-md-6">
                    <input id="other_extraction_checkbox" name="other_extraction" class="me-2" value="" type="checkbox" wire:model="otherExtraction">
                    <label for="other_extraction_checkbox">Other</label>                    
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label class="" for="">CORRECTION OF DENTAL CROSS BITE</label>
        </div>
        <div class="col-md-6">
            <input id="dental_cross_bite_checkbox" name="dental_cross_bite" value="" type="checkbox" wire:model="denalCrossBite">
            <label for="dental_cross_bite_checkbox"></label>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="row mb-2">
                <div class="col-md-3">
                    <label for="">MIDLINE<span class="danger"> *</span></label>
                </div>
                <div class="col-md-3">
                    <input id="midline_maintain_checkbox" name="midline_maintain" class="me-2" value="" type="checkbox" wire:model="midlineMaintain">
                    <label for="midline_maintain_checkbox">Maintain</label>
                </div>
                <div class="col-md-3">
                    <input id="midline_correct_checkbox" name="midline_correct" class="me-2" value="" type="checkbox" wire:model="midlineCorrect">
                    <label for="midline_correct_checkbox">Correct</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="midline_move_upper">Move Upper</label>
                    <input id="midline_move_upper" name="midline_move_upper" value="" class="form-control" type="text" wire:model="midlineMoveUpper">
                </div>
                <div class="col-md-6">
                    <label for="midline_move_lower">Move Lower</label>
                    <input id="midline_move_lower" name="midline_move_lower" value="" class="form-control" type="text" wire:model="midlineMoveLower">
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <label class="" for="">PERMANENT CANINE OCCLUSION GOAL<span class="danger"> *</span></label>
            <div class="row mt-1">
                <div class="col-md-4 d-flex">
                    <label class="" for="">Class |</label>
                    <div class="form-group d-flex align-items-baseline ms-4 me-4">
                        <input id="canine_class_one_r_checkbox" name="canine_class_one_r" class="me-2" value="" type="checkbox" wire:model="canineClassOneR">
                        <label for="canine_class_one_r_checkbox">R</label>
                    </div>
                    <div class="form-group d-flex align-items-baseline">
                        <input id="canine_class_one_l_checkbox" name="canine_class_one_l" class="me-2" value="" type="checkbox" wire:model="canineClassOneL">
                        <label for="canine_class_one_l_checkbox">L</label>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <label class="" for="">Class ||</label>
                    <div class="form-group d-flex align-items-baseline ms-4 me-4">
                        <input id="canine_class_two_r_checkbox" name="canine_class_two_r" class="me-2" value="" type="checkbox" wire:model="canineClassTwoR">
                        <label for="canine_class_two_r_checkbox">R</label>
                    </div>
                    <div class="form-group d-flex align-items-baseline">
                        <input id="canine_class_two_l_checkbox" name="canine_class_two_l" class="me-2" value="" type="checkbox" wire:model="canineClassTwoL">
                        <label for="canine_class_two_l_checkbox">L</label>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <label class="" for="">Class |||</label>
                    <div class="form-group d-flex align-items-baseline ms-4 me-4">
                        <input id="canine_class_three_r_checkbox" name="canine_class_three_r" class="me-2" value="" type="checkbox" wire:model="canineClassThreeR">
                        <label for="canine_class_three_r_checkbox">R</label>
                    </div>
                    <div class="form-group d-flex align-items-baseline">
                        <input id="canine_class_three_l_checkbox" name="canine_class_three_l" class="me-2" value="" type="checkbox" wire:model="canineClassThreeL">
                        <label for="canine_class_three_l_checkbox">L</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <label class="" for="">PERMANENT Molar Occlusion Goal<span class="danger"> *</span></label>
            <div class="row mt-1">
                <div class="col-md-4 d-flex">
                    <label class="" for="">Class |</label>
                    <div class="form-group d-flex align-items-baseline ms-4 me-4">
                        <input id="molar_class_one_r_checkbox" name="molar_class_one_r" class="me-2" value="" type="checkbox" wire:model="molarClassOneR">
                        <label for="molar_class_one_r_checkbox">R</label>
                    </div>
                    <div class="form-group d-flex align-items-baseline">
                        <input id="molar_class_one_l_checkbox" name="molar_class_one_l" class="me-2" value="" type="checkbox" wire:model="molarClassOneL">
                        <label for="molar_class_one_l_checkbox">L</label>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <label class="" for="">Class ||</label>
                    <div class="form-group d-flex align-items-baseline ms-4 me-4">
                        <input id="molar_class_two_r_checkbox" name="molar_class_two_r" class="me-2" value="" type="checkbox" wire:model="molarClassTwoR">
                        <label for="molar_class_two_r_checkbox">R</label>
                    </div>
                    <div class="form-group d-flex align-items-baseline">
                        <input id="molar_class_two_l_checkbox" name="molar_class_two_l" class="me-2" value="" type="checkbox" wire:model="molarClassTwoL">
                        <label for="molar_class_two_l_checkbox">L</label>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <label class="" for="">Class |||</label>
                    <div class="form-group d-flex align-items-baseline ms-4 me-4">
                        <input id="molar_class_three_r_checkbox" name="molar_class_three_r" class="me-2" value="" type="checkbox" wire:model="molarClassThreeR">
                        <label for="molar_class_three_r_checkbox">R</label>
                    </div>
                    <div class="form-group d-flex align-items-baseline">
                        <input id="molar_class_three_l_checkbox" name="molar_class_three_l" class="me-2" value="" type="checkbox" wire:model="molarClassThreeL">
                        <label for="molar_class_three_l_checkbox">L</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <label for="">INCISOR RELATIONSHIP</label>
            <div class="row mt-1">
                <div class="col-md-6">
                    <label for="incisor_required_overjet">Required Overjet</label>
                    <input id="incisor_required_overjet" name="incisor_required_overjet" value="" class="form-control" type="text" wire:model="incisorRequiredOverjet">     
                </div>
                <div class="col-md-6">
                    <label for="incisor_required_overbite">Required Overbite</label>
                    <input id="incisor_required_overbite" name="incisor_required_overbite" class="form-control" type="text" wire:model="incisorRequiredOverBite">
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row mb-3">
        <div class="col-md-3">
            <label for="" class="">Conclusion</label>
        </div>
        <div class="col-md-3">
            <input name="doable" value="" id="Option_27" type="radio" class="radio-col-light-blue">
            <label for="Option_27">Doable</label>
        </div>
        <div class="col-md-3">
            <input name="doable" value="" id="Option_28" type="radio" class="radio-col-light-blue">
            <label for="Option_28">Not Doable</label>
        </div>
    </div> -->
    <div class="row mb-3">
        <div class="col-md-3">
            <label for="">Special Instructions</label>
        </div>
        <div class="col-md-9">
            <textarea name="comments" class="form-control" rows="10" placeholder="" wire:model="comments"></textarea>
        </div>
    </div>
    <livewire:case-add.components.step7.terms-and-conditions />
    <!-- <div class="row d-flex justify-content-center">
        <button type="button" class="col-md-2 btn btn-outline-primary form-wizard-previous-btn me-3"><i class="fa-solid fa-circle-arrow-left fa-lg"></i> Previous</button>
        <button type="submit" class="col-md-2 btn btn-outline-primary" wire:click="step7Validation">Save <i class="fa-solid fa-floppy-disk fa-lg"></i></button>
    </div> -->
</fieldset>