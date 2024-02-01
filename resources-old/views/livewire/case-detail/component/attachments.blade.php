<div class="row">
    <div class="col-md-12">
        <div class="container-fluid">
            <div class="card w-100 position-relative overflow-hidden">
                <div class="px-4 py-3 border-bottom bg-light-info">
                    <h5 class="card-title fw-semibold mb-0 lh-sm">Attachments</h5>
                </div>
                <div class="card-body p-4">
                    @if($primaryCase['RX_form'] || $primaryCase['x_rays_opg'] || $primaryCase['x_rays_ceph'] || $primaryCase['file_assessment'] || $primaryCase['stl_1'] || $primaryCase['stl_2'])
                        <div class="row">
                            @if($primaryCase['RX_form'] != NULL)
                                <div class="col-md-3 mb-2">
                                    <button class="btn btn-secondary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Rx Form</button>
                                </div>
                            @endif
                            @if($primaryCase['x_rays_opg'] != NULL)
                                <div class="col-md-3 mb-2">
                                    <button class="btn btn-secondary"><i class="fa fa-cloud-download" aria-hidden="true"></i> XRay OPG</button>
                                </div>
                            @endif
                            @if($primaryCase['x_rays_ceph'] != NULL)
                                <div class="col-md-3 mb-2">
                                    <button class="btn btn-secondary"><i class="fa fa-cloud-download" aria-hidden="true"></i> XRay CEPH</button>
                                </div>
                            @endif
                            @if($primaryCase['file_assessment'] != NULL)
                                <div class="col-md-3 mb-2">
                                    <button class="btn btn-secondary"><i class="fa fa-cloud-download" aria-hidden="true"></i> File Assesment</button>
                                </div>
                            @endif
                            @if($primaryCase['stl_1'] != NULL)
                                <div class="col-md-3 mb-2">
                                    <button class="btn btn-secondary"><i class="fa fa-cloud-download" aria-hidden="true"></i> STL-1</button>
                                </div>
                            @endif
                            @if($primaryCase['stl_2'] != NULL)
                                <div class="col-md-3 mb-2">
                                    <button class="btn btn-secondary"><i class="fa fa-cloud-download" aria-hidden="true"></i> STL-2</button>
                                </div>
                            @endif
                        </div>
                    @else
                        No Attachments Found.
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

