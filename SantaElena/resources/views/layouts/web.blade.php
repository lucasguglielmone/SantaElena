<html>
    @include('layouts.head')
    <body>
        @include('layouts.nav')
        @include('layouts.slider')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
