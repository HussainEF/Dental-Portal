<div>
    @if($checkCaseExsisting)
        <livewire:case-detail.component.basic-detail :searchCaseId="$caseId">
        <livewire:case-detail.component.treatment-plan-action :erpCaseId="$erpCaseId">
        <livewire:case-detail.component.aligner-sent-recieve-history :erpCaseId="$erpCaseId">
        <livewire:case-detail.component.attachments :erpCaseId="$erpCaseId">
        <livewire:case-detail.component.oral-pictures :erpCaseId="$erpCaseId">
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                    <button class="col-md-2 me-2 btn btn-primary" wire:click="uploadPhoto({{$erpCaseId}})">Photos</button>
                    <button class="col-md-2 btn btn-primary" wire:click="conscentFormPDF" >Consent Form</button>
                </div>
            </div>
        </div>
    @else
        <livewire:case-detail.component.case-not-found>
    @endif
</div>