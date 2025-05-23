<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    @method('PATCH')

    <div class="mb-3">
        <label for="name" class="form-label">{{ __('Name') }}</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror"
               id="name" name="name" value="{{ old('name', $user->name) }}" required autofocus>
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">{{ __('Email') }}</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror"
               id="email" name="email" value="{{ old('email', $user->email) }}" required>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <p class="mt-2 text-danger">
                {{ __('Your email address is unverified.') }}
                <button type="submit" form="send-verification" class="btn btn-link p-0">{{ __('Click here to re-send the verification email.') }}</button>
            </p>

            @if (session('status') === 'verification-link-sent')
                <div class="alert alert-success mt-2" role="alert">
                    {{ __('A new verification link has been sent to your email address.') }}
                </div>
            @endif
        @endif
    </div>

    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

    @if (session('status') === 'profile-updated')
        <div id="profile-updated-message" class="text-success mt-2">{{ __('Saved.') }}</div>
        <script>
            setTimeout(() => {
                const msg = document.getElementById('profile-updated-message');
                if (msg) msg.style.display = 'none';
            }, 2000);
        </script>
    @endif
</form>
