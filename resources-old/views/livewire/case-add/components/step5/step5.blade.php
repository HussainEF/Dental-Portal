<fieldset class="wizard-fieldset {{$currentStep != 5 ? 'd-none':'show'}}">
    <h6>Dental History</h6>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <input id="gingivits_checkbox" name="gingivits" class="me-2" type="checkbox" value="gingivitis" wire:model="dentalHistory">
                        <label for="gingivits_checkbox">GINGIVITIS</label>
                    </div>                                            
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <input id="recession_checkbox" name="recession" class="me-2" type="checkbox" value="recession" wire:model="dentalHistory">
                        <label for="recession_checkbox">RECESSION</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <input id="mobility_checkbox" name="mobility" class="me-2" type="checkbox" value="mobility" wire:model="dentalHistory">
                        <label for="mobility_checkbox">MOBILITY</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <input id="bone_loss_checkbox" name="bone_loss" class="me-2" type="checkbox" value="boneLoss" wire:model="dentalHistory">
                        <label for="bone_loss_checkbox">BONE LOSS</label>
                    </div>                                            
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <input id="tmj_issues_checkbox" name="tmj_issues" class="me-2" type="checkbox" value="tmjIssues" wire:model="dentalHistory">
                        <label for="tmj_issues_checkbox">TMJ ISSUES</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <input id="dental_history_none_checkbox" name="dental_history_none" class="me-2" type="checkbox" value="dentalHistoryNone" wire:model="dentalHistory">
                        <label for="dental_history_none_checkbox">NONE</label>
                    </div>
                </div>
            </div>
            @error('dentalHistory') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <label for="ankylosed_deciduous_teeth">IMPACTED / MISSING / ANKYLOSED / DECIDUOUS TEETH</label>
                <div class="form-group">
                    <input type="text" class="form-control" name="ankylosed_deciduous_teeth" id="ankylosed_deciduous_teeth" wire:model="ankylosedTeeth">
                    <small class="danger"><strong>(These teeth might not be suitable for EBT, Attachments, Movement etc)</strong></small>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="row mb-3">
                <div class="col-md-12">
                    <label>Does the patient have any crowns/RCT treated teeth?<span class="danger"> *</span></label><br>
                    <div class="form-group d-flex">
                        <div class="form-group d-flex align-items-baseline me-2">
                            <input name="dental_history_rct" id="dental_history_rct_yes" type="radio" class="me-2" value="{{HARD_CODE_ID_YES}}" wire:model="crownRCT">
                            <label for="dental_history_rct_yes">Yes</label>
                        </div>
                        <div class="form-group d-flex align-items-baseline me-2">
                            <input name="dental_history_rct" id="dental_history_rct_no" type="radio" class="me-2" value="{{HARD_CODE_ID_NO}}" wire:model="crownRCT">
                            <label for="dental_history_rct_no">No</label>
                        </div>
                    </div>
                    @error('crownRCT') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="loose-dental-crowns-missing-teeth-data-area"></div>
                    <table class="w-100">
                        <tr class="row border-bottom">
                            <td class="col-md-6 border-end p-1">
                                <table class="w-100">
                                    <tr>
                                        @for($i=8; $i>=1; $i--)
                                            <td><a href="javascript:void(0)" id="CRCT_TMQ2_MISSING_{{$i}}" onClick="return setMissingTeeth_CRCT('2','CRCT_TMQ',{{$i}})">{{$i}}</a></td>
                                        @endfor
                                    </tr>
                                    <tr>
                                        @for($i=8; $i>=1; $i--)
                                            <td class="TR_CRCT_TMQ2_{{$i}}">
                                                <input id="CRCT_TMQ2_{{$i}}" name="CRCT_TMQ2[]" value="{{$i}}" type="checkbox" wire:model="crctTmq2">
                                                <label for="CRCT_TMQ2_{{$i}}" style="padding-left:0px; line-height: 0px;">&nbsp;</label>
                                            </td>
                                        @endfor
                                    </tr>
                                </table>
                            </td>
                            <td class="col-md-6 p-1">
                                <table class="w-100">
                                    <tr>
                                        @for($i=1; $i<=8; $i++)
                                            <td><a title="Missing Teeth" href="javascript:void(0)" id="CRCT_TMQ1_MISSING_{{$i}}" onClick="return setMissingTeeth_CRCT('1','CRCT_TMQ',{{$i}})">{{$i}}</a></td>
                                        @endfor
                                    </tr>
                                    <tr>
                                        @for($i=1; $i<=8; $i++)
                                            <td class="TR_CRCT_TMQ1_{{$i}}">
                                                <input id="CRCT_TMQ1_{{$i}}" name="CRCT_TMQ1[]" value="{{$i}}" type="checkbox" wire:model="crctTmq1">
                                                <label title="Teeth Movement" for="CRCT_TMQ1_{{$i}}" style="padding-left:0px; line-height: 0px;">&nbsp;</label>
                                            </td>
                                        @endfor
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr class="row">       
                            <td class="col-md-6 border-end p-1">
                                <table class="w-100">
                                    <tr>
                                        @for($i=8; $i>=1; $i--)
                                            <td><a href="javascript:void(0)" id="CRCT_TMQ3_MISSING_{{$i}}" onClick="return setMissingTeeth_CRCT('3','CRCT_TMQ',{{$i}})">{{$i}}</a></td>
                                        @endfor
                                    </tr>
                                    <tr>
                                        @for($i=8; $i>=1; $i--)     
                                            <td class="TR_CRCT_TMQ3_{{$i}}">
                                                <input id="CRCT_TMQ3_{{$i}}" name="CRCT_TMQ3[]" value="{{$i}}" type="checkbox" wire:model="crctTmq3">
                                                <label for="CRCT_TMQ3_{{$i}}" style="padding-left:0px; line-height: 0px;">&nbsp;</label>
                                            </td>  
                                        @endfor
                                    </tr>
                                </table>
                            </td>
                            <td class="col-md-6 p-1">
                                <table class="w-100">
                                    <tr>
                                        @for($i=1; $i<=8; $i++)
                                            <td><a href="javascript:void(0)" id="CRCT_TMQ4_MISSING_{{$i}}" onClick="return setMissingTeeth_CRCT('4','CRCT_TMQ',{{$i}})">{{$i}}</a></td>
                                        @endfor
                                    </tr>
                                    <tr>
                                        @for($i=1; $i<=8; $i++)
                                            <td class="TR_CRCT_TMQ4_{{$i}}">
                                                <input id="CRCT_TMQ4_{{$i}}" name="CRCT_TMQ4[]" value="{{$i}}" type="checkbox" wire:model="crctTmq4">
                                                <label for="CRCT_TMQ4_{{$i}}" style="padding-left:0px; line-height: 0px;">&nbsp;</label>
                                            </td>
                                        @endfor
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="row mb-3">
                <div class="col-md-12">
                    <label>Does the patient have any restorations/veneers?<span class="danger"> *</span></label>
                    <div class="form-group d-flex">
                        <div class="form-group d-flex align-items-baseline me-2">
                            <input name="dental_history_restorations" id="dental_history_restorations_yes" type="radio" class="me-2" value="{{HARD_CODE_ID_YES}}" wire:model="restorationsVeneers">
                            <label for="dental_history_restorations_yes">Yes</label>
                        </div>
                        <div class="form-group d-flex align-items-baseline me-2">
                            <input name="dental_history_restorations" id="dental_history_restorations_no" type="radio" class="me-2" value="{{HARD_CODE_ID_NO}}" wire:model="restorationsVeneers">
                            <label for="dental_history_restorations_no">No</label>
                        </div>
                        @error('restorationsVeneers') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div id="loose-dental-crowns-missing-teeth-data-area"></div>
                        <table class="w-100">
                            <tr class="row border-bottom">
                                <td class="col-md-6 border-end p-1">
                                    <table class="w-100">
                                        <tr>
                                            @for($i=8; $i>=1; $i--)
                                                <td><a href="javascript:void(0)" id="RV_TMQ2_MISSING_{{$i}}" >{{$i}}</a></td>
                                            @endfor
                                        </tr>
                                        <tr>
                                            @for($i=8; $i>=1; $i--)
                                                <td class="TR_RV_TMQ2_{{$i}}">
                                                    <input id="RV_TMQ2_{{$i}}" name="RV_TMQ2[]" value="{{$i}}" type="checkbox" wire:model="rvTmq2">
                                                    <label for="RV_TMQ2_{{$i}}">&nbsp;</label>
                                                </td>
                                            @endfor
                                        </tr>
                                    </table>
                                </td>
                                <td class="col-md-6 p-1">
                                    <table class="w-100">
                                        <tr>
                                            @for($i=1; $i<=8; $i++)
                                            <td><a title="Missing Teeth" href="javascript:void(0)" id="RV_TMQ1_MISSING_{{$i}}" >{{$i}}</a></td>
                                            @endfor
                                        </tr>
                                        <tr>
                                            @for($i=1; $i<=8; $i++)
                                                <td height="24" class="TR_RV_TMQ1_{{$i}}">
                                                    <input id="RV_TMQ1_{{$i}}" name="RV_TMQ1[]" value="{{$i}}" type="checkbox" wire:model="rvTmq1">
                                                    <label title="Teeth Movement" for="RV_TMQ1_{{$i}}">&nbsp;</label>
                                                </td>
                                            @endfor
                                        </tr>
                                    </table>
                                </td>   
                            </tr>
                            <tr class="row">    
                                <td class="col-md-6 border-end p-1">
                                    <table class="w-100">
                                        <tr>
                                            @for($i=8; $i>=1; $i--)
                                                <td><a href="javascript:void(0)" id="RV_TMQ3_MISSING_{{$i}}" onClick="return setMissingTeeth_RV('3','RV_TMQ',{{$i}})">{{$i}}</a></td>
                                            @endfor
                                        </tr>
                                        <tr>
                                            @for($i=8; $i>=1; $i--)
                                                <td height="24" class="TR_RV_TMQ3_{{$i}}">
                                                    <input id="RV_TMQ3_{{$i}}" name="RV_TMQ3[]" value="{{$i}}" type="checkbox" wire:model="rvTmq3">
                                                    <label for="RV_TMQ3_{{$i}}">&nbsp;</label>
                                                </td>  
                                            @endfor
                                        </tr>
                                    </table>
                                </td>
                                <td class="col-md-6 p-1">
                                    <table class="w-100">
                                        <tr>
                                            @for($i=1; $i<=8; $i++)
                                                <td><a href="javascript:void(0)" id="RV_TMQ4_MISSING_{{$i}}" onClick="return setMissingTeeth_RV('4','RV_TMQ',{{$i}})">{{$i}}</a></td>
                                            @endfor
                                        </tr>
                                        <tr>
                                            @for($i=1; $i<=8; $i++)
                                                <td class="TR_RV_TMQ4_{{$i}}">
                                                    <input id="RV_TMQ4_{{$i}}" name="RV_TMQ4[]" value="{{$i}}" type="checkbox" wire:model="rvTmq4">
                                                    <label for="RV_TMQ4_{{$i}}">&nbsp;</label>
                                                </td>
                                            @endfor
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="row mb-3">
                <div class="col-md-12">
                    <label>Does the patient have any bridges/implants?<span class="danger"> *</span></label>
                    <div class="form-group d-flex">
                        <div class="form-group d-flex align-items-baseline me-2">
                            <input name="dental_history_implants" id="dental_history_implants_yes" type="radio" class="me-2" value="{{HARD_CODE_ID_YES}}" wire:model="bridgesImplants"> 
                            <label for="dental_history_implants_yes">Yes</label>
                        </div>
                        <div class="form-group d-flex align-items-baseline me-2">
                            <input name="dental_history_implants" id="dental_history_implants_no" type="radio" class="me-2" value="{{HARD_CODE_ID_NO}}" wire:model="bridgesImplants">
                            <label for="dental_history_implants_no">No</label>
                        </div>
                    </div>
                    @error('bridgesImplants') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div id="loose-dental-crowns-missing-teeth-data-area"></div>
                        <table class="w-100">
                            <tr class="row border-bottom">
                                <td class="col-md-6 border-end p-1">
                                    <table class="w-100">
                                        <tr>
                                            @for($i=8; $i>=1; $i--)
                                                <td><a href="javascript:void(0)" id="BI_TMQ2_MISSING_{{$i}}" onClick="return setMissingTeeth_BI('2','BI_TMQ',{{$i}})">{{$i}}</a></td>
                                            @endfor
                                        </tr>
                                        <tr>
                                            @for($i=8; $i>=1; $i--)
                                                <td class="TR_BI_TMQ2_{{$i}}">
                                                    <input id="BI_TMQ2_{{$i}}" name="BI_TMQ2[]" value="{{$i}}" type="checkbox" wire:model="biTmq2">
                                                    <label for="BI_TMQ2_{{$i}}">&nbsp;</label>
                                                </td>
                                            @endfor
                                        </tr>
                                    </table>
                                </td>
                                <td class="col-md-6 p-1">
                                    <table class="w-100">
                                        <tr>
                                            @for($i=1; $i<=8; $i++)
                                            <td><a title="Missing Teeth" href="javascript:void(0)" id="BI_TMQ1_MISSING_{{$i}}" onClick="return setMissingTeeth_BI('1','BI_TMQ',{{$i}})">{{$i}}</a></td>
                                            @endfor
                                        </tr>
                                        <tr>
                                            @for($i=1; $i<=8; $i++)
                                                <td class="TR_BI_TMQ1_{{$i}}">
                                                    <input id="BI_TMQ1_{{$i}}" name="BI_TMQ1[]" value="{{$i}}" class="chk-col-purple TM" type="checkbox" wire:model="biTmq1">
                                                    <label title="Teeth Movement" for="BI_TMQ1_{{$i}}">&nbsp;</label>
                                                </td> 
                                            @endfor
                                        </tr>
                                    </table>
                                </td>   
                            </tr>
                            <tr class="row">       
                                <td class="col-md-6 border-end p-1">
                                    <table class="w-100">
                                        <tr>
                                            @for($i=8; $i>=1; $i--)
                                            <td><a href="javascript:void(0)" id="BI_TMQ3_MISSING_{{$i}}" onClick="return setMissingTeeth_BI('3','BI_TMQ',{{$i}})">{{$i}}</a></td>
                                            @endfor
                                        </tr>
                                        <tr>
                                            @for($i=8; $i>=1; $i--)       
                                                <td class="TR_BI_TMQ3_{{$i}}">
                                                    <input id="BI_TMQ3_{{$i}}" name="BI_TMQ3[]" value="{{$i}}" type="checkbox" wire:model="biTmq3">
                                                    <label for="BI_TMQ3_{{$i}}">&nbsp;</label>
                                                </td>   
                                            @endfor
                                        </tr>
                                    </table>
                                </td>
                                <td class="col-md-6">
                                    <table class="w-100">
                                        <tr>
                                            @for($i=1; $i<=8; $i++)
                                                <td><a href="javascript:void(0)" id="BI_TMQ4_MISSING_{{$i}}" onClick="return setMissingTeeth_BI('4','BI_TMQ',{{$i}})">{{$i}}</a></td>
                                            @endfor
                                        </tr>
                                        <tr>
                                            @for($i=1; $i<=8; $i++)
                                                <td class="TR_BI_TMQ4_{{$i}}">
                                                    <input id="BI_TMQ4_{{$i}}" name="BI_TMQ4[]" value="{{$i}}" type="checkbox" wire:model="biTmq4">
                                                    <label for="BI_TMQ4_{{$i}}">&nbsp;</label>
                                                </td>
                                            @endfor
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ll -->
</fieldset>