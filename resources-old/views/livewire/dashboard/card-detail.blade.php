<div class="card bg-light-{{$bgClass[0]}} shadow-none">
    <div class="card-body p-4">
        <div class="d-flex align-items-center">
            <div class="round rounded bg-{{$bgClass[0]}} d-flex align-items-center justify-content-center">
                <i class="fa fa-{{$bgClass[1]}} fa-xl text-white" aria-hidden="true"></i>
            </div>
            <h6 class="mb-0 ms-3">{{$card_name}}</h6>
            <div class="ms-auto text-primary d-flex align-items-center">
            <i class="ti ti-trending-up text-primary fs-6 me-1"></i>
            <h3 class="mb-0 fw-semibold fs-7">
                {{($card_id == 1)? $countDoctorCases : $countStages}}
            </h3>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-end mt-4">
            <button type="button" class="btn btn-outline-{{$bgClass[0]}}" wire:click="getCasesData({{$card_id}})">Details</button>
        </div>
    </div>
</div>