<fieldset class="wizard-fieldset {{$currentStep != 3 ? 'd-none':'show'}}">
    <h6>Attachments & Chief Complaint</h6>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <div class="row d-flex align-items-baseline">
                    <label for="" class="col-md-3">STL Upper</label>
                    <div class="col-md-9">
                        <input id="file_data_stl_1" name="file_data_stl_1"  class="form-control" type="file">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <div class="row d-flex align-items-baseline">
                    <label for="" class="col-md-3">X-rays (OPG)</label>
                    <div class="col-md-9">
                        <input id="file_data_x_ray_opg" name="file_data_x_ray_opg" class="form-control" type="file">
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
                        <input id="file_data_stl_2" name="file_data_stl_2" class="form-control" type="file">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <div class="row d-flex align-items-baseline">
                    <label for="" class="col-md-3">X-rays (Ceph)</label>
                    <div class="col-md-9">
                        <input id="file_data_x_ray_ceph" name="file_data_x_ray_ceph" class="form-control" type="file">
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
                        <input id="file_data_rx" name="file_data_rx" class="form-control" type="file">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-3">
            <label for="">Chief Complaint<span class="danger"> *</span></label>
            <textarea name="chief_complaint" class="form-control" rows="5" placeholder=""></textarea>
        </div>
    </div>
    <!-- <div class="d-flex justify-content-center">
        <button type="button" class="col-md-2 btn btn-outline-primary form-wizard-previous-btn me-3"><i class="fa-solid fa-circle-arrow-left fa-lg"></i> Previous</button>
        <button type="button" class="col-md-2 btn btn-outline-primary form-wizard-next-btn" wire:click="step3Validation">Next <i class="fa-solid fa-circle-arrow-right fa-lg"></i></button>
    </div> -->
</fieldset>	