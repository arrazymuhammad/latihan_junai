<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Aplikasi Junai</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{ url('/assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css"
        media="screen" />
    <link href="{{ url('/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css"
        media="screen" />
    <link href="{{ url('/assets/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" type="text/css"
        media="screen" />
    <link href="{{ url('/pages/css/pages-icons.css') }}" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{ url('/pages/css/themes/corporate.css') }}" rel="stylesheet"
        type="text/css" />
</head>

<body class="fixed-header menu-pin menu-behind">
    <x-layout.sidebar />
    <div class="page-container ">
        <x-layout.header />
        <div class="page-content-wrapper ">
            <div class="content ">
                <div class="jumbotron" data-pages="parallax">
                    <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
                        <div class="inner">
                            <h1>{{ $pageTitle }}</h1>
                        </div>
                    </div>
                </div>
                <div class=" container-fluid  container-fixed-lg">
                    {{ $slot }}
                </div>
            </div>
            <x-layout.footer />
        </div>
    </div>

    <script src="{{ url('assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/jquery/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/modernizr.custom.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/tether/js/tether.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/jquery/jquery-easy.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/jquery-actual/jquery.actual.min.js') }}"></script>
    <script src="{{ url('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/plugins/classie/classie.js') }}"></script>
    <script src="{{ url('assets/plugins/switchery/js/switchery.min.js') }}" type="text/javascript"></script>

    <script src="{{ url('pages/js/pages.min.js') }}"></script>

    <script src="{{ url('assets/js/scripts.js') }}" type="text/javascript"></script>

</body>

</html>
