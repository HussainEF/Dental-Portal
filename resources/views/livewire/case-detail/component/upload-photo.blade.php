<div>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12 d-flex">
                    <i class="ph-camera mb-0"></i>
                    <h1 class="mb-0">Manage Pictures<span>(d)</span></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12 d-flex">
                    <i class="ph-cloud-arrow-up"></i>
                    <h6 class="mb-0"> Upload Intra & Extra Oral Pictures</h6>
                </div>
                <div class="col-md-6 col-sm-6 col-12 d-flex justify-content-end">
                    <button class="btn btn-primary"><i class="ph-arrows-clockwise" aria-hidden="true"></i> Upload</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="#" enctype="multipart/form-data" class="dropzone" id="dropzone_remove">
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12 d-flex">
                    <i class="ph-camera"></i>
                    <h6 class="mb-0"> Intra & Extra Oral Pictures</h6>
                </div>
                <div class="col-md-6 col-sm-6 col-12 d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" wire:click="downloadZip"><i class="ph-download-simple" aria-hidden="true"></i> Download</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex flex-wrap align-items-start">
                @if($medicalCasesPictures != NULL)
                    @foreach($medicalCasesPictures as $casePictures)
                        @if($casePictures['picture_portal'] == 'Dental')
                            <div class="" >
                                <a href="#" onclick="openModal('{{ $casePictures['id'] }}'); return false;">
                                    <img src="{{url(CASE_PICTURES_URL_PATH.$casePictures['name'])}}" alt="photo">
                                </a>
                            </div>
                        @else
                            <div class="me-2 mb-2">
                                <a href="#" onclick="openModal('{{ $casePictures['id'] }}'); return false;">
                                    <img src="{{CP_PICTURES_LOCAL_PATH}}pictures_cases/thumbnail/thumbnail_{{$casePictures['name']}}" alt="photo">
                                </a>
                            </div>
                        @endif
                        <!-- Bootstrap Modal -->
                        <div class="modal fade" id="imageModal{{ $casePictures['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body d-flex justify-content-center">
                                        @if($casePictures['picture_portal'] == 'Dental')
                                            <a href="#">
                                                <img src="{{url(CASE_PICTURES_URL_PATH.$casePictures['name'])}}" alt="photo" height="500px" width="400px">
                                            </a>
                                        @else
                                            <a href="#">
                                                <img src="{{CP_PICTURES_LOCAL_PATH.CASE_PICTURES_URL_PATH.$casePictures['name']}}" alt="photo" height="500px" width="400px">
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-danger">No Oral Pictures Found.</div>
                @endif
            </div>
        </div>
    </div>
    <script src="{{asset('limitless/global_assets/assets/js/vendor/uploaders/dropzone.min.js')}}"></script>
    <script>
        //For Dropzone
        let dropzoneRemove = new Dropzone("#dropzone_remove", {
            url: 'oral-pictures-upload',
            method: 'post',
            uploadMultiple: true,
            createImageThumbnails: true,
            paramName: "data", // The name that will be used to transfer the file
            dictDefaultMessage: 'Drop files to upload or CLICK',
            maxFilesize: 100, // MB
            addRemoveLinks: true,
            acceptedFiles: 'image/*',
            headers: {
                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
            },
            successmultiple: function (data, response){
                if (response.success) {
                    alert("success");
                } else {
                    // Handle error if needed
                    alert(response.error);
                }
            },
        });

        function openModal(imageId) {
            $('#imageModal' + imageId).modal('show');
        }
    </script>
</div>
