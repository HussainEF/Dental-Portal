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
                            <input id="sc_upper_complete_checkbox" name="sc_upper_complete" class="me-2" value="scUpperComplete" type="checkbox" wire:model="spaceClosure">
                            <label for="sc_upper_complete_checkbox">Complete</label>
                        </div>
                        <div class="col-md-4">
                            <input id="sc_upper_leave_checkbox" name="sc_upper_leave" class="me-2" value="scUpperLeave" type="checkbox" wire:model="spaceClosure">
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
                            <input id="sc_lower_complete_checkbox" name="sc_lower_complete" class="me-2" value="scLowerComplete" type="checkbox" wire:model="spaceClosure">
                            <label for="sc_lower_complete_checkbox">Complete</label>
                        </div>
                        <div class="col-md-4">
                            <input id="sc_lower_leave_checkbox" name="sc_lower_leave" class="me-2" value="scLowerLeave" type="checkbox" wire:model="spaceClosure">
                            <label for="sc_lower_leave_checkbox">Leave Space</label>
                        </div>
                    </div>
                </div>
                @error('spaceClosure') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <small class="text-danger"><strong>(Complete space closure may require IPR. Specify where and how much space would be left)</strong></small>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <label class="" for="">CROWDING RESOLUTION<span class="danger"> *</span></label>
            <div class="row mt-1 mb-1">
                <div class="col-md-3">
                    <input id="cr_ipr_checkbox" name="cr_ipr" class="me-2" value="crIPR" type="checkbox" wire:model="crowdingResolution">
                    <label for="cr_ipr_checkbox">IPR</label>
                </div>
                <div class="col-md-3">
                    <input id="cr_proclination_checkbox" name="cr_proclination" class="me-2" value="crProclination"  type="checkbox" wire:model="crowdingResolution">
                    <label for="cr_proclination_checkbox">Proclination</label>
                </div>
                <div class="col-md-3">
                    <input id="cr_expansion_checkbox" name="cr_expansion" class="me-2" value="crExpansion" type="checkbox" wire:model="crowdingResolution">
                    <label for="cr_expansion_checkbox">Expansion</label>
                </div>
                <div class="col-md-3">
                    <input id="cr_extraction_checkbox" name="cr_extraction" class="me-2" value="crExtraction"  type="checkbox" wire:model="crowdingResolution">
                    <label for="cr_extraction_checkbox">Extraction</label>
                </div>      
                @error('crowdingResolution') <span class="text-danger">{{ $message }}</span> @enderror                              
            </div>        
            <small class="text-danger">(Please specify your prefernce by writing in the boxes above)</strong></small>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <label class="" for="">PREFERRED EXTRACION</label>
            <div class="row mt-1 mb-1">
                <div class="col-md-6">
                    <input id="treatment_setup_checkbox" name="treatment_setup" class="me-2" value="treatmentSetup" type="checkbox" wire:model="preferredExtraction">
                    <label for="treatment_setup_checkbox">As per treatment setup</label>
                </div>
                <div class="col-md-6">
                    <input id="other_extraction_checkbox" name="other_extraction" class="me-2" value="otherExtraction" type="checkbox" wire:model="preferredExtraction">
                    <label for="other_extraction_checkbox">Other</label>                    
                </div>
            </div>
            @error('preferredExtraction') <span class="text-danger">{{ $message }}</span> @enderror              
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label class="" for="">CORRECTION OF DENTAL CROSS BITE</label>
        </div>
        <div class="col-md-6">
            <input id="dental_cross_bite_checkbox" name="dental_cross_bite" type="checkbox" wire:model="dentalCrossBite">
            <label for="dental_cross_bite_checkbox"></label>
        </div>
        @error('dentalCrossBite') <span class="text-danger">{{ $message }}</span> @enderror              
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="row mb-2">
                <div class="col-md-3">
                    <label for="">MIDLINE<span class="text-danger"> *</span></label>
                </div>
                <div class="col-md-3">
                    <input id="midline_maintain_checkbox" name="midline_maintain" class="me-2" value="midlineMaintain" type="checkbox" wire:model="midlineMaintainCorrect">
                    <label for="midline_maintain_checkbox">Maintain</label>
                </div>
                <div class="col-md-3">
                    <input id="midline_correct_checkbox" name="midline_correct" class="me-2" value="midlineCorrect" type="checkbox" wire:model="midlineMaintainCorrect">
                    <label for="midline_correct_checkbox">Correct</label>
                </div>
                @error('midlineMaintainCorrect') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="midline_move_upper">Move Upper</label>
                    <input id="midline_move_upper" name="midline_move_upper" class="form-control" type="text" wire:model="midlineMoveUpper">
                </div>
                <div class="col-md-6">
                    <label for="midline_move_lower">Move Lower</label>
                    <input id="midline_move_lower" name="midline_move_lower" class="form-control" type="text" wire:model="midlineMoveLower">
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <label class="" for="">PERMANENT CANINE OCCLUSION GOAL<span class="danger"> *</span></label>
            <div class="row mt-1">
                <div class="col-md-4 d-flex align-items-baseline">
                    <label class="" for="">Class |</label>
                    <div class="form-group d-flex align-items-baseline ms-4 me-4">
                        <input id="canine_class_one_r_checkbox" name="canine_class_one_r" class="me-2" value="canineClassOneR" type="checkbox" wire:model="canineOcclusion">
                        <label for="canine_class_one_r_checkbox">R</label>
                    </div>
                    <div class="form-group d-flex align-items-baseline">
                        <input id="canine_class_one_l_checkbox" name="canine_class_one_l" class="me-2" value="canineClassOneL" type="checkbox" wire:model="canineOcclusion">
                        <label for="canine_class_one_l_checkbox">L</label>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-baseline">
                    <label class="" for="">Class ||</label>
                    <div class="form-group d-flex align-items-baseline ms-4 me-4">
                        <input id="canine_class_two_r_checkbox" name="canine_class_two_r" class="me-2" value="canineClassTwoR" type="checkbox" wire:model="canineOcclusion">
                        <label for="canine_class_two_r_checkbox">R</label>
                    </div>
                    <div class="form-group d-flex align-items-baseline">
                        <input id="canine_class_two_l_checkbox" name="canine_class_two_l" class="me-2" value="canineClassTwoL" type="checkbox" wire:model="canineOcclusion">
                        <label for="canine_class_two_l_checkbox">L</label>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-baseline">
                    <label class="" for="">Class |||</label>
                    <div class="form-group d-flex align-items-baseline ms-4 me-4">
                        <input id="canine_class_three_r_checkbox" name="canine_class_three_r" class="me-2" value="canineClassThreeR" type="checkbox" wire:model="canineOcclusion">
                        <label for="canine_class_three_r_checkbox">R</label>
                    </div>
                    <div class="form-group d-flex align-items-baseline">
                        <input id="canine_class_three_l_checkbox" name="canine_class_three_l" class="me-2" value="canineClassThreeL" type="checkbox" wire:model="canineOcclusion">
                        <label for="canine_class_three_l_checkbox">L</label>
                    </div>
                </div>
            </div>
            @error('canineOcclusion') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <label class="" for="">PERMANENT Molar Occlusion Goal<span class="danger"> *</span></label>
            <div class="row mt-1">
                <div class="col-md-4 d-flex align-items-baseline">
                    <label class="" for="">Class |</label>
                    <div class="form-group d-flex align-items-baseline ms-4 me-4">
                        <input id="molar_class_one_r_checkbox" name="molar_class_one_r" class="me-2" value="molarClassOneR" type="checkbox" wire:model="molarOcclusion">
                        <label for="molar_class_one_r_checkbox">R</label>
                    </div>
                    <div class="form-group d-flex align-items-baseline">
                        <input id="molar_class_one_l_checkbox" name="molar_class_one_l" class="me-2" value="molarClassOneL" type="checkbox" wire:model="molarOcclusion">
                        <label for="molar_class_one_l_checkbox">L</label>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-baseline">
                    <label class="" for="">Class ||</label>
                    <div class="form-group d-flex align-items-baseline ms-4 me-4">
                        <input id="molar_class_two_r_checkbox" name="molar_class_two_r" class="me-2" value="molarClassTwoR" type="checkbox" wire:model="molarOcclusion">
                        <label for="molar_class_two_r_checkbox">R</label>
                    </div>
                    <div class="form-group d-flex align-items-baseline">
                        <input id="molar_class_two_l_checkbox" name="molar_class_two_l" class="me-2" value="molarClassTwoL" type="checkbox" wire:model="molarOcclusion">
                        <label for="molar_class_two_l_checkbox">L</label>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-baseline">
                    <label class="" for="">Class |||</label>
                    <div class="form-group d-flex align-items-baseline ms-4 me-4">
                        <input id="molar_class_three_r_checkbox" name="molar_class_three_r" class="me-2" value="molarClassThreeR" type="checkbox" wire:model="molarOcclusion">
                        <label for="molar_class_three_r_checkbox">R</label>
                    </div>
                    <div class="form-group d-flex align-items-baseline">
                        <input id="molar_class_three_l_checkbox" name="molar_class_three_l" class="me-2" value="molarClassThreeL" type="checkbox" wire:model="molarOcclusion">
                        <label for="molar_class_three_l_checkbox">L</label>
                    </div>
                </div>
            </div>
            @error('molarOcclusion') <span class="text-danger">{{ $message }}</span> @enderror
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
    <!-- File Uploads -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <div class="row d-flex align-items-baseline">
                    <label for="" class="col-md-3">STL Upper</label>
                    <div class="col-md-9">
                        <input id="file_data_stl_1" name="file_data_stl_1"  class="form-control" type="file" wire:model="stlUpper">
                        @error('stlUpper') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <div class="row d-flex align-items-baseline">
                    <label for="" class="col-md-3">X-rays (OPG)</label>
                    <div class="col-md-9">
                        <input id="file_data_x_ray_opg" name="file_data_x_ray_opg" class="form-control" type="file" wire:model="xRayOPG">
                        @error('xRayOPG') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <div class="row d-flex align-items-baseline">
                    <label for="" class="col-md-3">STL Lower</label>
                    <div class="col-md-9">
                        <input id="file_data_stl_2" name="file_data_stl_2" class="form-control" type="file" wire:model="stlLower"> 
                        @error('stlLower') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <div class="row d-flex align-items-baseline">
                    <label for="" class="col-md-3">X-rays (Ceph)</label>
                    <div class="col-md-9">
                        <input id="file_data_x_ray_ceph" name="file_data_x_ray_ceph" class="form-control" type="file" wire:model="xRayCEPH">
                        @error('xRayCEPH') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <div class="row d-flex align-items-baseline">
                    <label for="" class="col-md-3">RX Form</label>
                    <div class="col-md-9">
                        <input id="file_data_rx" name="file_data_rx" class="form-control" type="file" wire:model="rxForm">
                        @error('rxForm') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:case-add.components.step7.terms-and-conditions />
    @error('termsAndCondition') <span class="text-danger">{{ $message }}</span> @enderror
</fieldset>