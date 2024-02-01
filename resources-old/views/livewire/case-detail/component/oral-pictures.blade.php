<div class="row">
    <div class="col-md-12">
        <div class="container-fluid">
            <div class="card w-100 position-relative overflow-hidden">
                <div class="px-4 py-3 border-bottom bg-light-info">
                    <h5 class="card-title fw-semibold mb-0 lh-sm">Intra & Extra Oral Pictures</h5>
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
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openModal(imageId) {
            $('#imageModal' + imageId).modal('show');
        }
    </script>
</div>