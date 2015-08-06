<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    {{--<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">
    <script src="{{asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('assets/js/respond.min.js')}}"></script>

    <![endif]-->
</head>
<body>

<div class="container navigation">
    <!-- class row  -->
    @include('partials.nav')
</div>
<!-- navigation -->
<div class="container header">
    <div class="row header">
        {{--<div class="col-lg-8">--}}
            {{--<h1><a href="{{url('/')}}">E-Lycee</a></h1>--}}
            {{--@section('nav')--}}
                {{--<nav>--}}
                    {{--<a href="{{url('auth/logout')}}">logout</a>--}}
                {{--</nav>--}}
            {{--@show--}}
        {{--</div>--}}
        <div class="col-lg-4 col-xs-offset-4">
            <blockquote>
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif
            </blockquote>
        </div>
    </div>
</div>
<!-- header-->
<div class="container content">
    <div class="row content">
        <div class="col-lg-12">
            @yield('content')
        </div>
    </div>
</div>
<!-- content -->
<div class="container footer text-right">
    <div class="row footer">
        @section('footer')
        @show
    </div>
</div>

@yield('script')
<!-- content -->
</body>
</html>
