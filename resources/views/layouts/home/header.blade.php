<header>
    <nav class="navbar-nav navbar-expand-lg navbar-light bg-light">
        <ul>
            <li><a href="#">Sup</a></li>
            @auth
                <li><a href="{{route('api-practice')}}">{{__('api practice')}}</a></li>
                <li><a href="{{route('logout')}}">{{ __('logout')}}</a></li>
            @endauth
        </ul>
    </nav>
</header>
