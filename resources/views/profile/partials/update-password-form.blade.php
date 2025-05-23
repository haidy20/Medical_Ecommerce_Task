<form method="POST" action="{{ route('password.update') }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="current_password" class="form-label">{{ __('Current Password') }}</label>
        <input type="password" class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
               id="current_password" name="current_password" autocomplete="current-password">
        @error('current_password', 'updatePassword')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">{{ __('New Password') }}</label>
        <input type="password" class="form-control @error('password', 'updatePassword') is-invalid @enderror"
               id="password" name="password" autocomplete="new-password">
        @error('password', 'updatePassword')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
        <input type="password" class="form-control"
               id="password_confirmation" name="password_confirmation" autocomplete="new-password">
    </div>

    <button type="submit" class="btn btn-warning">{{ __('Save') }}</button>

    <!-- @if (session('status') === 'password-updated')
        <div id="password-updated-message" class="text-success mt-2">{{ __('Saved.') }}</div>
        <script>
            setTimeout(() => {
                const msg = document.getElementById('password-updated-message');
                if (msg) msg.style.display = 'none';
            }, 2000);
        </script>
    @endif -->
</form>
