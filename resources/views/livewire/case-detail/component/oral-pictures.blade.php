<div>
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Intra & Extra Oral Pictures</h6>
        </div>
        <div class="card-body">
            <div class="d-flex flex-wrap align-items-start">
                @if($medicalCasesPictures != NULL)
                    @foreach($medicalCasesPictures as $casePictures)
                        @if($casePictures['picture_portal'] == 'Dental')
                            <div class="">
                                <a href="#" onclick="openModalOral('{{ $casePictures['id'] }}'); return false;">
                                    <img src="{{url(CASE_PICTURES_URL_PATH.$casePictures['name'])}}" alt="photo">
                                </a>
                            </div>
                        @else
                            <div class="me-2 mb-2">
                                <a href="#" onclick="openModalOral('{{ $casePictures['id'] }}'); return false;">
                                    <img src="{{CP_PICTURES_LOCAL_PATH}}pictures_cases/thumbnail/thumbnail_{{$casePictures['name']}}" alt="photo">
                                </a>
                            </div>
                        @endif
                        <!-- Bootstrap Modal -->
                        <div class="modal fade" id="oralModal{{ $casePictures['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body d-flex justify-content-center">
                                        @if($casePictures['picture_portal'] == 'Dental')
                                            <img src="{{url(CASE_PICTURES_URL_PATH.$casePictures['name'])}}" alt="photo" height="500px" width="400px">
                                        @else
                                            <img src="{{CP_PICTURES_LOCAL_PATH.CASE_PICTURES_URL_PATH.$casePictures['name']}}" alt="photo" height="500px" width="400px">
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
    <script>
        function openModalOral(imageId) {
            $('#oralModal' + imageId).modal('show');
        }
    </script>
</div>