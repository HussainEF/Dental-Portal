<form wire:submit.prevent="caseSave" class="case-form">
    <div class="form-wizard-header">
        <ul class="list-unstyled form-wizard-steps clearfix">
            <li class="{{$currentStep >= 1 ? 'active':''}}"><span>1</span></li>
            <li class="{{$currentStep >= 2 ? 'active':''}}"><span>2</span></li>
            <li class="{{$currentStep >= 3 ? 'active':''}}"><span>3</span></li>
            <li class="{{$currentStep >= 4 ? 'active':''}}"><span>4</span></li>
            <li class="{{$currentStep >= 5 ? 'active':''}}"><span>5</span></li>
            <li class="{{$currentStep >= 6 ? 'active':''}}"><span>6</span></li>
            <li class="{{$currentStep >= 7 ? 'active':''}}"><span>7</span></li>
        </ul>
    </div>

    {{-- STEP 1 --}}
    @if($currentStep === 1)
    <livewire:case-add.components.step1.step1 wire:key="step1" :currentStep="$currentStep" />
    @endif

    {{-- STEP 2 --}}
    @if($currentStep === 2)
    <livewire:case-add.components.step2.step2 wire:key="step2" :currentStep="$currentStep"/>
    @endif

    {{-- STEP 3 --}}
    @if($currentStep === 3)
    <livewire:case-add.components.step3.step3 wire:key="step3" :currentStep="$currentStep"/>
    @endif

    {{-- STEP 4 --}}
    @if($currentStep === 4)
    <livewire:case-add.components.step4.step4 wire:key="step4" :currentStep="$currentStep"/>
    @endif

    {{-- STEP 5 --}}
    @if($currentStep === 5)
    <livewire:case-add.components.step5.step5 wire:key="step5" :currentStep="$currentStep"/>
    @endif

    {{-- STEP 6 --}}
    @if($currentStep === 6)
    <livewire:case-add.components.step6.step6 wire:key="step6" :currentStep="$currentStep"/>
    @endif

    {{-- STEP 7 --}}
    @if($currentStep === 7)
    <livewire:case-add.components.step7.step7 wire:key="step7" :currentStep="$currentStep"/>
    @endif


    <div class="row d-flex justify-content-center">
    @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5 || $currentStep == 6 || $currentStep == 7 )
        <button type="button" class="col-md-2 btn btn-outline-primary form-wizard-previous-btn me-3" wire:click="decreaseStep"><i class="fa-solid fa-circle-arrow-left fa-lg"></i> Previous</button>
    @endif
    
    @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5 || $currentStep == 6)
        <button type="button" class="col-md-2 btn btn-outline-primary form-wizard-next-btn" wire:click="increaseStep">Next <i class="fa-solid fa-circle-arrow-right fa-lg"></i></button>
    @endif
    
    @if ($currentStep == 7)
            <button type="submit" class="col-md-2 btn btn-outline-primary">Save <i class="fa-solid fa-floppy-disk fa-lg"></i></button>
    @endif
    </div>

    @if(session()->has('message'))
        <div class="alert alert-success">
                {{ session('message') }}
        </div>
    @endif
</form>
