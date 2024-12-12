<header>
    <nav class="navbar-nav navbar-expand-lg navbar-light bg-light">
        <ul>
            <li><a href="#">Sup</a></li>
            @auth
                <li><a href="{{url(app()->getLocale().'/logout')}}">{{ __('logout')}}</a></li>
            @endauth
        </ul>
    </nav>
</header>
