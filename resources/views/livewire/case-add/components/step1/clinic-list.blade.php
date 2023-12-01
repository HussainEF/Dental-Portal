<div class="mb-3">
    <label for="clinic_id" class="">Clinic</label>
    <select name="clinic_id" class="form-select">
        <option value="">Select Clinic</option>
        @foreach($clinicName as $key => $cName)
            <option value="{{$cName->id}}">{{$cName->clinic_name}}</option>
        @endforeach
    </select>
</div>