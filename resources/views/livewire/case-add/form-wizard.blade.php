<form wire:submit.prevent="caseSave" class="case-form">
    <style>
        /* Add this to your CSS file or in a <style> tag in your Livewire component file */
        /* .progress-bar {
            display: flex;
            align-items: center;
        } */

        /* .step {
            display: flex;
            align-items: center;
            position: relative;
        } */

        .circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 16px;
            color: #333;
            z-index: 1; /* Ensure the circle is above the line */
        }

        /* .step-name {
            margin-left: 10px;
        } */

        .line {
            height: 2px;
            background-color: #ccc; 
            z-index: 0;
        }

        /* Dynamic styles for completion */
        .step.active .circle {
            background-color: #007bff; /* Set your desired active circle color */
            color: #fff; /* Set your desired active circle text color */
        }

        .step.active .line {
            background-color: #007bff; /* Set your desired active line color */
        }
    </style>
    <div class="row d-flex justify-content-center mb-5">
        <div class="col-sm-3 col-md-1 col-lg-1 d-flex align-items-baseline step {{$currentStep >= 1 ? 'active':''}}">
            <div class="d-flex flex-column align-items-center">
                <div class="circle mb-2">1</div>
                <div class="">Bio Data</div>
            </div>
            <div class="line w-100"></div>
        </div>
        <div class="col-sm-3 col-md-1 col-lg-1 d-flex align-items-baseline step {{$currentStep >= 2 ? 'active':''}}">
            <div class="d-flex flex-column align-items-center">
                <div class="circle mb-2">2</div>
                <div class="step-name">Case Type</div>
            </div>
            <div class="line w-100"></div>
        </div>
        <div class="col-sm-3 col-md-1 col-lg-1 d-flex align-items-baseline step {{$currentStep >= 3 ? 'active':''}}">
            <div class="d-flex flex-column align-items-center">
                <div class="circle mb-2">3</div>
                <div class="step-name">Chief Complaint</div>
            </div>
            <div class="line w-100"></div>
        </div>
        <div class="col-sm-3 col-md-1 col-lg-1 d-flex align-items-baseline step {{$currentStep >= 4 ? 'active':''}}">
            <div class="d-flex flex-column align-content-center">
                <div class="circle mb-2">4</div>
                <div class="step-name">Medical History</div>
            </div>
            <div class="line w-100"></div>
        </div>
        <div class="col-sm-3 col-md-1 col-lg-1 d-flex align-items-baseline step {{$currentStep >= 5 ? 'active':''}}">
            <div class="d-flex flex-column align-content-center">
                <div class="circle mb-2">5</div>
                <div class="step-name">Dental History</div>
            </div>
            <div class="line w-100"></div>
        </div>
        <div class="col-sm-3 col-md-1 col-lg-1 d-flex align-items-baseline step {{$currentStep >= 6 ? 'active':''}}">
            <div class="d-flex flex-column align-content-center">
                <div class="circle mb-2">6</div>
                <div class="step-name">Dental Examination</div>
            </div>
            <div class="line w-100"></div>
        </div>
        <div class="col-sm-3 col-md-1 col-lg-1 step {{$currentStep >= 7 ? 'active':''}}">
            <div class="d-flex flex-column align-content-center">
                <div class="circle mb-2">7</div>
                <div class="step-name">Advised Tx</div>
            </div>
        </div>
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
            <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
                <button type="button" class="form-control btn btn-outline-primary form-wizard-previous-btn" wire:click="decreaseStep"><i class="fa-solid fa-circle-arrow-left fa-lg"></i> Previous</button>
            </div>
        @endif
        
        @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5 || $currentStep == 6)
            <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 mb-2">
                <button type="button" class="form-control btn btn-outline-primary form-wizard-next-btn" wire:click="increaseStep">Next <i class="fa-solid fa-circle-arrow-right fa-lg"></i></button>
            </div>
        @endif
    
        @if ($currentStep == 7)
            <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 mb-2">
                <button type="submit" class="form-control btn btn-outline-primary">Save <i class="fa-solid fa-floppy-disk fa-lg"></i></button>
            </div>
        @endif
    </div>    
    @push('scripts')
    <script>
        <script src="{{asset('limitless/global_assets/assets/js/vendor/notifications/sweet_alert.min.js')}}"></script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('swalSuccess', function () {
                console.log('Event captured!');
                alert('Done');
                // Swal.fire({
                //     'title' => 'Success!',
                //     'text' => 'Your operation was successful!',
                //     'icon' => 'success',
                // });
            });
        });
    </script>
    @endpush
</form>
