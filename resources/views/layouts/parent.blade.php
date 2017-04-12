<!Doctype>
<html>
    <head>
        <title>Task App</title>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/animate.css')}}">
        <link href="{{URL::asset('assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
        
        <link href="{{URL::asset('css/custom.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/comments.css')}}" rel="stylesheet" type="text/css" />
    </head>
<body>

    <div class="container">
        <div class="col-md-12">
            <!--Place navigation bar-->
        @include('partials.navbar')
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('danger'))
                    <div class="alert alert-danger">{{Session::get('danger')}}</div>
                @endif
                @if(Session::has('info'))
                    <div class="alert alert-info">{{Session::get('info')}}</div>
                @endif
                @if(Session::has('warning'))
                    <div class="alert alert-warning">{{Session::get('warning')}}</div>
                @endif
            </div>

            <div class="col-md-12">
                <!--Content Area-->
                @include('shared.noty')

                @yield('killer')
            </div>
        </div>


    </div>


</body>

<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/custom.js')}}"></script>
</html>