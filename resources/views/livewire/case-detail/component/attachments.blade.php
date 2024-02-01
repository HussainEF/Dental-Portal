<div class="card">
    <div class="card-header">
        <h6 class="mb-0">Attachments</h6>
    </div>
    <div class="card-body">
        @if($primaryCaseData['RX_form'] || $primaryCaseData['x_rays_opg'] || $primaryCaseData['x_rays_ceph'] || $primaryCaseData['stl_1'] || $primaryCaseData['stl_2'])
            <div class="row">
                @if($primaryCaseData['RX_form'] != NULL)
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-header d-flex justify-content-center">
                                <h6 class="mb-0">RX Form</h6>
                            </div>
                            <div class="card-body">
                                @if($primaryCaseData['medical_primary_cases_detail']['RX_uploaded_by']!=NULL && $primaryCaseData['medical_primary_cases_detail']['RX_uploaded_by'] == "DENTAL")
                                    <a href="#" onclick="openModalAttachments('{{ 'rx' }}'); return false;">
                                        <img src="{{url(CASE_RX_FORM_URL_PATH/$primaryCaseData['RX_form'])}}" class="rounded w-100" alt="photo">
                                    </a>
                                @else
                                    <a href="#" onclick="openModalAttachments('{{ 'rx' }}'); return false;">
                                        <img src="{{'https://portal.clearpathortho.pk/rx/'.$primaryCaseData['RX_form']}}" class="rounded w-100" alt="photo">
                                    </a>
                                @endif
                                <!-- Bootstrap Modal -->
                                <div class="modal fade" id="attachmentModalrx" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body d-flex justify-content-center">
                                                @if($primaryCaseData['medical_primary_cases_detail']['RX_uploaded_by']!=NULL && $primaryCaseData['medical_primary_cases_detail']['RX_uploaded_by'] == "DENTAL")
                                                    <img src="{{url(CASE_RX_FORM_URL_PATH/$primaryCaseData['RX_form'])}}" class="rounded w-100" alt="photo">
                                                @else
                                                    <img src="{{'https://portal.clearpathortho.pk/rx/'.$primaryCaseData['RX_form']}}" class="rounded w-100" alt="photo">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($primaryCaseData['x_rays_opg'] != NULL)
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-header d-flex justify-content-center">
                                <h6 class="mb-0">X-Ray OPG</h6>
                            </div>
                            <div class="card-body">
                                @if($primaryCaseData['medical_primary_cases_detail']['OPG_uploaded_by']!=NULL && $this->primaryCaseData['medical_primary_cases_detail']['OPG_uploaded_by'] == "DENTAL")
                                    <a href="#" onclick="openModalAttachments('{{ 'opg' }}'); return false;">
                                        <img src="{{url(CASE_X_RAY_OPG_URL_PATH/$primaryCaseData['x_rays_opg'])}}" class="rounded w-100" alt="photo">
                                    </a>
                                @else
                                    <a href="#" onclick="openModalAttachments('{{ 'opg' }}'); return false;">
                                        <img src="{{'https://portal.clearpathortho.pk/x_rays/opg/'.$primaryCaseData['x_rays_opg']}}" class="rounded w-100" alt="photo">
                                    </a>
                                @endif
                                <!-- Bootstrap Modal -->
                                <div class="modal fade" id="attachmentModalopg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body d-flex justify-content-center">
                                                @if($primaryCaseData['medical_primary_cases_detail']['OPG_uploaded_by']!=NULL && $this->primaryCaseData['medical_primary_cases_detail']['OPG_uploaded_by'] == "DENTAL")
                                                    <img src="{{url(CASE_X_RAY_OPG_URL_PATH/$primaryCaseData['x_rays_opg'])}}" class="rounded w-100" alt="photo">
                                                @else
                                                    <img src="{{'https://portal.clearpathortho.pk/x_rays/opg/'.$primaryCaseData['x_rays_opg']}}" class="rounded w-100" alt="photo">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($primaryCaseData['x_rays_ceph'] != NULL)
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-header d-flex justify-content-center">
                                <h6 class="mb-0">X-Ray CEPH</h6>
                            </div>
                            <div class="card-body">
                                @if($primaryCaseData['medical_primary_cases_detail']['CEPH_uploaded_by']!=NULL && $primaryCaseData['medical_primary_cases_detail']['CEPH_uploaded_by'] == "DENTAL")
                                    <a href="#" onclick="openModalAttachments('{{ 'ceph' }}'); return false;">
                                        <img src="{{url(CASE_X_RAY_CEPH_URL_PATH/$primaryCaseData['x_rays_ceph'])}}" class="rounded w-100" alt="photo">
                                    </a>
                                @else
                                    <a href="#" onclick="openModalAttachments('{{ 'ceph' }}'); return false;">
                                        <img src="{{'https://portal.clearpathortho.pk/x_rays/ceph/'.$primaryCaseData['x_rays_ceph']}}" class="rounded w-100" alt="photo">
                                    </a>
                                @endif
                                <!-- Bootstrap Modal -->
                                <div class="modal fade" id="attachmentModalceph" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body d-flex justify-content-center">
                                                @if($primaryCaseData['medical_primary_cases_detail']['CEPH_uploaded_by']!=NULL && $primaryCaseData['medical_primary_cases_detail']['CEPH_uploaded_by'] == "DENTAL")
                                                    <img src="{{url(CASE_X_RAY_CEPH_URL_PATH/$primaryCaseData['x_rays_ceph'])}}" class="rounded w-100" alt="photo">
                                                @else
                                                    <img src="{{'https://portal.clearpathortho.pk/x_rays/ceph/'.$primaryCaseData['x_rays_ceph']}}" class="rounded w-100" alt="photo">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($primaryCaseData['stl_1'] != NULL)
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-header d-flex justify-content-center">
                                <h6 class="mb-0">STL-1</h6>
                            </div>
                            <div class="card-body" wire:click="downloadFile('stl_1')">
                                <img src="{{asset('images/logos/stl.jpg')}}" class="rounded w-100" alt="photo">
                            </div>
                        </div>
                    </div>
                @endif
                @if($primaryCaseData['stl_2'] != NULL)
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-header d-flex justify-content-center">
                                <h6 class="mb-0">STL-2</h6>
                            </div>
                            <div class="card-body" wire:click="downloadFile('stl_2')">
                                <img src="{{asset('images/logos/stl.jpg')}}" class="rounded w-100" alt="photo">
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        @else
            No Attachments Found.
        @endif
    </div>
    <script>
        function openModalAttachments(type) {
            $('#attachmentModal' + type).modal('show');
        }
    </script>
</div>