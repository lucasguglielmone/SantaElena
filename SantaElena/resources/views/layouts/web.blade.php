<html>
    <head>
        @include('layouts.head')
    </head>
    <body>
        <div class="container">
            @include('layouts.nav')
            @yield('content')
        </div>
    </body>
</html>
