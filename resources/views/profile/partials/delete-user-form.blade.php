<form method="POST" action="{{ route('profile.destroy') }}"
    onsubmit="return confirm('Are you sure you want to delete your account? This action is permanent.');">
    @csrf
    @method('DELETE')

    <p class="text-danger">{{ __('Once your account is deleted, all of its resources and data will be permanently deleted.') }}</p>

    <div class="mb-3">
        <label for="password" class="form-label">{{ __('Password') }}</label>
        <input type="password" class="form-control @error('password', 'userDeletion') is-invalid @enderror"
            name="password" id="password" placeholder="Enter your password to confirm">
        @error('password', 'userDeletion')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
</form>