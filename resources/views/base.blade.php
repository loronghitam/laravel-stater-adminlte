<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | {{ $title }}</title>
    @include('layout.cms.header')
    @yield('style')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('layout.cms.nav')

    @include('layout.cms.sidebar')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $title }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            @foreach($breadcrumbs as $key => $value)
                                {{--                                <li class="nav-item d-none d-sm-inline-block">--}}
                                {{--                                    <a href="{{ url($key) }}" class="nav-link">{{ $value }}</a>--}}
                                {{--                                </li>--}}
                                <li class="breadcrumb-item "><a
                                        href="{{ $key }}">{{ $value }}</a></li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>

    @include('layout.cms.footer')
</div>
@include('layout.cms.script')
@yield('script')
</body>
</html>
