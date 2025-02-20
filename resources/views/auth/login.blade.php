<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg" style="width: 100%; max-width: 400px;">
            <div class="card-body">
                <h2 class="text-center mb-4">Login to Your Account</h2>

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-3">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="invalid-feedback" />
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="invalid-feedback" />
                    </div>

                    <!-- Remember Me -->
                    <div class="form-check mb-3">
                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                        <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
                    </div>

                    <!-- Forgot Password Link -->
                    <div class="d-flex justify-content-between">
                        @if (Route::has('password.request'))
                            <a class="text-decoration-none text-muted" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary w-100">
                            {{ __('Log in') }}
                        </button>
                    </div>

                    <div class="text-center mt-3">
                        <a href="{{ route('register') }}" class="btn btn-secondary w-100">
                            {{ __('Create an Account') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
