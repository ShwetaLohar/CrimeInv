<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    @include('links')
    </head>
<body>
<div class="gm-container">

    
    @include('header')
    

    <div id="main" >

        <!-- main content -->
        <div id="content">
            @yield('content')
        </div>

    </div>

    <footer >
        @include('footer')
    </footer>

</div>
</body>
</html>