<nav x-data="{ open: false }" class="bg-light border-bottom">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center py-3 px-5">
            <div class="d-flex">
                <!-- Logo -->
                <div class="logoc" >
                    <a href="/home">
                        <img src="/img/logo.png" alt="Logo" style="max-height: 60px; max-width: 60px;">
                    </a>
                </div>

                <!-- Navigation Links -->
                
            </div>

            <!-- Settings Dropdown -->
            <div class="d-none d-sm-flex">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle text-dark" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                {{ __('Profile') }}
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Hamburger for mobile -->
            <div class="d-flex d-sm-none">
                <button @click="open = ! open" class="btn btn-light">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path :class="{'d-none': open, 'd-flex': ! open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'d-none': ! open, 'd-flex': open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'d-block': open, 'd-none': ! open}" class="d-none d-sm-none">
        <div class="pt-2 pb-3">
            <a href="{{ route('dashboard') }}" class="d-block p-2 text-dark">
                {{ __('Dashboard') }}
            </a>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-top">
            <div class="px-4">
                <div class="font-medium text-dark">{{ Auth::user()->name }}</div>
                <div class="text-muted">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3">
                <a href="{{ route('profile.edit') }}" class="d-block p-2 text-dark">
                    {{ __('Profile') }}
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="d-block p-2 text-dark">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>
    </div>
</nav>
