<x-app-layout>
    <x-slot name="header">
        <h2 class="profile-header">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-light profile-container">
        <div class="container">
            <!-- Profile Information Section -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="col-lg-8 mx-auto">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <!-- Update Password Section -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="col-lg-8 mx-auto">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <!-- Delete Account Section -->
            {{-- <div class="card mb-4">
                <div class="card-body">
                    <div class="col-lg-8 mx-auto">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>

