<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | {{ $title }}</title>

    @include('layout.cms.header')
    @yield('style')
</head>
<body class="hold-transition {{ $page }}">
@yield('content')
@include('layout.cms.script')
@yield('script')
</body>
</html>
