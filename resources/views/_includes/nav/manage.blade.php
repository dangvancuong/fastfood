<nav id="sidebar">
    <div class="sidebar-header">
        <h1>
            <a href="{{ route('manage.dashboard') }}">{{ __('validation.pages.name') }}</a>
        </h1>
    </div>
    <ul class="list-unstyled components">
        <li>
            <a href="{{ route('posts.index') }}" class="text-uppercase">
                <i class="fas fa-th-large"></i>
                {{ __('validation.table.users') }}
            </a>
        </li>
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="text-uppercase">
                <i class="fas fa-laptop"></i>
                {{ __('validation.table.users') }}
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{{ route('users.index') }}" class="text-uppercase">
                        {{ __('validation.action.index') . __('validation.table.users') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('roles.index') }}" class="text-uppercase">
                        {{ __('validation.action.index') . __('validation.table.roles') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('permissions.index') }}" class="text-uppercase">
                        {{ __('validation.action.index') . __('validation.table.permission') }}
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
