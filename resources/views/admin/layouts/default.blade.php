<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('admin.includes.head')
</head>

<body>
    <!--//@ preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
            @include('admin.includes.sidebar')
            <div class="wrap-fluid" id="paper-bg">
                @include('admin.includes.top_nav')
                @yield('content')
                @include('admin.includes.footer')
            </div>
            @include('admin.includes.right_menu')
        </div>
    </div>
    @include('admin.includes.script')
</body>

</html>