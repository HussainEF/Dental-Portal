<div>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <form wire:submit.prevent="updatePassword">
        <div class="row d-flex align-items-baseline mb-2">
            <div class="col-md-4">
                <label for="currentPassword">Current Password</label>
            </div>
            <div class="col-md-8">
                <input type="password" id="currentPassword" placeholder="Enter Current Password" class="form-control" wire:model="currentPassword">
                @error('currentPassword') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="row d-flex align-items-baseline mb-2">
            <div class="col-md-4">
                <label for="newPassword">New Password</label>
            </div>
            <div class="col-md-8">
                <input type="password" id="newPassword" placeholder="Min 5 Character" class="form-control" wire:model="newPassword">
                @error('newPassword') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="row d-flex align-items-baseline mb-4">
            <div class="col-md-4">
                <label for="confirmPassword">Confirm Password</label>
            </div>
            <div class="col-md-8">
                <input type="password" id="confirmPassword" placeholder="Min 5 Character" class="form-control" wire:model="confirmPassword">
                @if($flag)
                    <div class="text-danger">New Password and Confirm Password Not Matched</div>
                @endif
                @error('confirmPassword') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="row d-flex justify-content-end">
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary me-2 {{($flag)? 'disabled' : ''}}">Save</button>
                <button type="button" class="btn btn-secondary" wire:click="cancel">Cancel</button>
            </div>
        </div>
    </form>
</div>
