<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Big file uploader - @yield('title') </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"/>
</head>
<body>
<div class="container">

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal"> Uploader </h5>
        <nav class="my-2 my-md-0 mr-md-3">
            {{--<a class="p-2 text-dark" href="#">Features</a>--}}
        </nav>
        {{--<a class="btn btn-outline-primary" href="#">Sign up</a>--}}
    </div>

    <main role="main" class="col-12">

        @include('layouts._alert')

        @yield('content')

    </main>
</div>

@stack('modals')

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/spark-md5.min.js') }}"></script>
<script src="//cdn.bootcss.com/jquery/2.2.3/jquery.min.js"></script>
<script src="{{ asset('js/aetherupload.js') }}"></script>

@stack('scripts')

</body>

</html>