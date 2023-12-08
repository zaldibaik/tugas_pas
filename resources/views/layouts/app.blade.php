@include('layouts.frame.head')

<body>
<header class="site-header sticky-top py-1">
    <div id="app">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        @auth
            <main class="d-flex flex-nowrap">
                @include('layouts.navbar.auth.sidenav')
                @yield('content')
            </main>
        @endauth
        @include('components.theme')

        @guest
            @if (in_array(request()->route()->getName(),
                    ['login', 'register', 'password.request', 'password.email', 'password.reset']))
                <main>
                    @yield('content')
                </main>
            @else
                @include('layouts.navbar.guest.topnav')
                <main>
                    @yield('content')
                </main>
            @endif
        @endguest
        {{-- @include('layouts.footer.guest.footer') --}}
    </div>

    @include('layouts.frame.foot')
</header>
</body>

</html>
