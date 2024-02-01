<div>
    <form wire:submit.prevent="searchCase" class="sidebar-form">
        <div class="input-group">
            <button type="submit" name="search" id="search-btn" class="btn btn-primary">
                <i class="fa fa-search text-white"></i>
            </button>
            <input type="text" name="case_id" class="form-control text-primary" placeholder="Case ID" wire:model="searchBox">
        </div>
        @error('searchBox') <span class="form-control badge text-danger">{{$message}}</span> @enderror
    </form>
</div>
