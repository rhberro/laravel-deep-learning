<nav class="nav">
    <ul class="nav__list">
        <h3 class="nav__list-title">Your Tools</h3>
        <li class="nav__list-item">
            <a class="nav__list-anchor {{ Route::is('projects*') ? 'nav__list-anchor--active' : null }}" href="{{ route('projects') }}" title="{{ __('Projects') }}">
                <i class="nav__list-icon fas fa-fw fa-list-ul"></i> {{ __('Projects') }}
            </a>
        </li>
    </ul>

    @if ($project)
        <ul class="nav__list">
            <h3 class="nav__list-title">Current Project</h3>
            <li class="nav__list-item">
                <a class="nav__list-anchor {{ Route::is('dashboard*') ? 'nav__list-anchor--active' : null }}" href="{{ route('dashboard') }}" title="{{ __('Dashboard') }}">
                    <i class="nav__list-icon fas fa-fw fa-desktop"></i> {{ __('Dashboard') }}
                </a>
            </li>
            <li class="nav__list-item">
                <a class="nav__list-anchor {{ Route::is('accounts*') ? 'nav__list-anchor--active' : null }}" href="{{ route('accounts') }}" title="{{ __('Accounts') }}">
                    <i class="nav__list-icon far fa-fw fa-list-alt"></i> {{ __('Accounts') }}
                </a>
            </li>
            <li class="nav__list-item">
                <a class="nav__list-anchor {{ Route::is('settings*') ? 'nav__list-anchor--active' : null }}" href="{{ route('projects') }}" title="{{ __('Projects') }}">
                    <i class="nav__list-icon fas fa-fw fa-sliders-h"></i> {{ __('Settings') }}
                </a>
            </li>
        </ul>
    @endif

    <ul class="nav__list">
        <h3 class="nav__list-title">Your Account</h3>
        <li class="nav__list-item">
            <a class="nav__list-anchor {{ Route::is('profile*') ? 'nav__list-anchor--active' : null }}" href="{{ route('projects') }}" title="{{ __('Account') }}">
                <i class="nav__list-icon far fa-fw fa-user-circle"></i> {{ __('Profile') }}
            </a>
        </li>
        <li class="nav__list-item">
            <a class="nav__list-anchor {{ Route::is('logout*') ? 'nav__list-anchor--active' : null }}" href="{{ route('projects') }}" title="{{ __('Account') }}">
                <i class="nav__list-icon fas fa-fw fa-door-open"></i> {{ __('Logout') }}
            </a>
        </li>
    </ul>
</nav>
