<div class="row">
    @foreach($impressions as $impression)
        <div class="col-md-6 form-group d-flex align-items-baseline">
            <input type="radio" name="impression" id="Option_{{$impression->id}}" class="me-2" value="{{($impression->id == 1)?'1': '2'}}" wire:model="impressionType"/>
            <label for="Option_{{$impression->id}}">{{$impression->name}}</label>                    
        </div>
    @endforeach
</div>