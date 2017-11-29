<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/myapp.css">
    @yield('styles')
</head>
<body>
    <div id="app">
        @include('admin.includes.navbar')
        <div class="container">
            <div class="row">
                @include('admin.includes.links')
                <div class="col-lg-8">
                    @include('admin.includes.messages')
                     @yield('content')
                </div>
            </div>
        </div>     
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")
        @endif
        @if(Session::has('info'))
            toastr.info("{{Session::get('info')}}")
        @endif
    </script>
    @yield('scripts')
</body>
</html>
