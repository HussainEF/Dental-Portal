<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-light-secondary shadow-none">
                <div class="card-body p-4">
                    <div class="d-flex">
                        <div class="round rounded bg-secondary d-flex align-items-center justify-content-center">
                            <i class="fa fa-camera fa-xl text-white" aria-hidden="true"></i>
                        </div>
                        <h1 class="mb-0 ms-2">Manage Pictures<span>(d)</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="card w-100 position-relative overflow-hidden">
                    <div class="px-4 py-3 border-bottom bg-light-info">
                        <div class="row d-flex align-items-baseline">
                            <div class="col-md-6">
                                <h5 class="card-title fw-semibold mb-0 lh-sm"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload Intra & Extra Oral Pictures</h5>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <button class="btn btn-primary"><i class="fa fa-refresh" aria-hidden="true"></i> Upload</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
<!-- resources/views/livewire/dropzone.blade.php -->

<div
    wire:ignore
    x-data="{ isUploading: false, progress: 0 }"
    x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false"
    x-on:livewire-upload-error="isUploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress"
>
    <div class="border-dashed border-2 border-gray-400 rounded-lg p-4">
        <div class="text-center text-gray-400 mb-2">Click or drop your files</div>
        <form wire:submit.prevent="save" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="file" class="form-control" id="files" wire:model="files" multiple>
            </div>

            <div wire:loading wire:target="files">
                Uploading...
                <div class="progress">
                    <div class="progress-bar" role="progressbar" :style="`width: ${progress}%`"></div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" wire:loading.remove wire:target="files">Upload</button>
        </form>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success mt-3">
            {{ session('message') }}
        </div>
    @endif
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="card w-100 position-relative overflow-hidden">
                    <div class="px-4 py-3 border-bottom bg-light-info">
                        <div class="row d-flex align-items-baseline">
                            <div class="col-md-6">
                                <h5 class="card-title fw-semibold mb-0 lh-sm"><i class="fa fa-camera" aria-hidden="true"></i> Intra & Extra Oral Pictures</h5>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <button class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex flex-wrap align-items-start">
                            @if($medicalCasesPictures != NULL)
                                @foreach($medicalCasesPictures as $casePictures)
                                    @if($casePictures['picture_portal'] == 'Dental')
                                        <div class="">
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
            </div>
        </div>
    </div>
</div>
