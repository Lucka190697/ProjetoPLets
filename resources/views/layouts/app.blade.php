<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/nunito.css') }}  https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.0.7/css/sb-admin-2.css" rel="stylesheet">
    <link href="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/flatly/bootstrap.min.css" rel="stylesheet"> --}}

</head>
<body>
    <div id="app">
            @include('layouts.partials.topbar')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!--<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#user-dataTable').DataTable();
            });
    </script>
-->
<script src="{{ asset('js/jquery-3.5.1.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-mask.js') }}" type="text/javascript"></script>
{{-- <script src="{{ asset('js/jquery.mask.min.js') }}"  type="text/javascript"></script> --}}
<script src="{{ asset('js/masks.js') }}"  type="text/javascript"></script>
</body>
</html>
