<!--  Import Js Files -->
<script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('dist/libs/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- DropZone -->
<script src="{{ asset('js/dropzone.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 150,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    });
</script>


<!--  core files -->
<script src="{{asset('dist/js/app.min.js')}}"></script>
<script src="{{asset('dist/js/app.init.js')}}"></script>
<script src="{{asset('dist/js/app-style-switcher.js')}}"></script>
<script src="{{asset('dist/js/sidebarmenu.js')}}"></script>
<script src="{{asset('dist/js/custom.js')}}"></script>
<script src="{{asset('dist/libs/prismjs/prism.js')}}"></script>

<!--For Form Wizards Supports-->
<!-- <script src="{{asset('dist/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script> -->
<!-- <script src="{{asset('dist/libs/sweetalert2/dist/sweetalert2.min.js')}}"></script> -->
<!-- <script src="{{asset('dist/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>
<script src="{{asset('dist/js/forms/form-wizard.js')}}"></script> -->


<!-- For DataTabels -->
<script src="{{asset('dist/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dist/js/datatable/datatable-basic.init.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
