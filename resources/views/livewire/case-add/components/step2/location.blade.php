<div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="country">Country</label>
                <select name="country" class="form-select">
                    @foreach($country as $countryName)
                    <option value="{{$countryName->id}}">{{$countryName->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="city">City</label>
                <select name="city" id="city" class="form-select" wire:model="selectedCity" wire:change="updateArea">
                    <option value="">Select a City</option>
                    @foreach($city as $cityName)
                    <option value="{{$cityName->id}}">{{$cityName->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-3">
            <label for="area">Area</label>
            <select name="area_id" id="area" class="form-select" wire:model="selectedArea">
                <option value="">Select Area</option>
                @if(isset($cityArea))
                @foreach($cityArea as $area)
                <option value="{{$area->id}}">{{$area->area}}</option>
                @endforeach
                @endif
            </select>
        </div>
    </div>
</div>
