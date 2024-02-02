<div>
    <!-- Starting step -->
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Case Registeration</h6>
        </div>
        <form id="rxForm" class="wizard-form steps-validation" action="" method="post">
            @csrf
            <h6>Patient Information</h6>
            <fieldset id="step1" data-step-start>
                <livewire:case-add.components.step1.step1/>
            </fieldset>

            <h6>Case Type</h6>
            <fieldset>
                <livewire:case-add.components.step2.step2/>
            </fieldset>

            <h6>Cheif Complaint</h6>
            <fieldset>
                <livewire:case-add.components.step3.step3/>
            </fieldset>

            <h6>Medical History</h6>
            <fieldset>
                <livewire:case-add.components.step4.step4/>
            </fieldset>

            <h6>Dental History</h6>
            <fieldset>
                <livewire:case-add.components.step5.step5/>
            </fieldset>

            <h6>Dental Examination</h6>
            <fieldset>
                <livewire:case-add.components.step6.step6/>
            </fieldset>

            <h6>ADVISED Tx</h6>
            <fieldset>
                <livewire:case-add.components.step7.step7/>
            </fieldset>
        </form>
    </div>    
</div>