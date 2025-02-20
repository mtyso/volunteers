<section class="profile-section">
    <header>
        <h2 class="section-header">
            {{ __('Profile Information') }}
        </h2>
        <p class="section-description">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="profile-form">
        @csrf
        @method('patch')

        <div class="form-group py-2">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" name="name" type="text" class="form-control py-1" value="{{ old('name', $user->name) }}" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div class="form-group py-2">
            <label for="email">{{ __('Email') }}</label>
            <input id="email" name="email" type="email" class="form-control py-1" value="{{ old('email', $user->email) }}" required />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div class="d-flex justify-content-between py-3">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

            @if (session('status') === 'profile-updated')
                <p class="status-message">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
