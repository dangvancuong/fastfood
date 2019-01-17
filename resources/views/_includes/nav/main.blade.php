<nav class="navbar has-shadow" >
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item is-paddingless brand-item" href="{{ route('home') }}">
                <img src="{{ asset('images/logo2.png') }}">
            </a>
            @if (Request::segment(1) == "manage")
                <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
                    <span class="icon">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                </a>
            @endif
        </div>
        <div class="navbar-menu">
            <div class="navbar-end nav-menu">
                @guest
                    <a href="{{ route('login') }}" class="navbar-item is-tab btn btn-outline-success">{{ __('Login') }}</a>
                    <a href="{{ route('register') }}" class="navbar-item is-tab btn btn-outline-primary">{{ __('Register') }}</a>
                @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link"> {{ Auth::user()->name }}</a>
                        <div class="navbar-dropdown is-right" >
                            <a href="#" class="navbar-item">
                        <span class="icon">
                        <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                        </span>{{ __('Profile') }}
                            </a>
                            <a href="#" class="navbar-item">
                        <span class="icon">
                        <i class="fa fa-fw fa-bell m-r-5"></i>
                        </span> {{ __('Notifications') }}
                            </a>
                            <a href="{{route('manage.dashboard')}}" class="navbar-item">
                        <span class="icon">
                        <i class="fa fa-fw fa-cog m-r-5"></i>
                        </span>{{ __('Manage') }}
                            </a>
                            <hr class="navbar-divider">
                            <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <span class="icon">
                        <i class="fa fa-fw fa-sign-out m-r-5"></i>
                        </span>
                                {{ __('Logout') }}
                            </a>
                            @include('_includes.forms.logout')
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</nav>
