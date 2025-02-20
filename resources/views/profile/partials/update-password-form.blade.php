<section class="profile-section">
    <header>
        <h2 class="section-header">
            {{ __('Update Password') }}
        </h2>
        <p class="section-description">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="profile-form">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="current_password">{{ __('Current Password') }}</label>
            <input id="current_password" name="current_password" type="password" class="form-control" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="form-group py-2">
            <label for="password">{{ __('New Password') }}</label>
            <input id="password" name="password" type="password" class="form-control" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="form-group py-2">
            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="d-flex justify-content-between py-3">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

            @if (session('status') === 'password-updated')
                <p class="status-message">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>