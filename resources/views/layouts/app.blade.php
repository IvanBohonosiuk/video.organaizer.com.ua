<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    
    <title>@yield('title')</title>
    
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="/css/docs.css" rel="stylesheet">
    <link href="/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <style>
        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    
@include('partials.header')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>

@include('partials.footer')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script> 
    <script src="/js/google-code-prettify/prettify.js" type="text/javascript"></script> 
    <script src="/js/bootstrap-transition.js" type="text/javascript"></script> 
    <script src="/js/bootstrap-alert.js" type="text/javascript"></script> 
    <script src="/js/bootstrap-modal.js" type="text/javascript"></script> 
    <script src="/js/bootstrap-dropdown.js" type="text/javascript"></script> 
    <script src="/js/bootstrap-scrollspy.js" type="text/javascript"></script> 
    <script src="/js/bootstrap-tab.js" type="text/javascript"></script> 
    <script src="/js/bootstrap-tooltip.js" type="text/javascript"></script> 
    <script src="/js/bootstrap-popover.js" type="text/javascript"></script> 
    <script src="/js/bootstrap-button.js" type="text/javascript"></script> 
    <script src="/js/bootstrap-collapse.js" type="text/javascript"></script> 
    <script src="/js/bootstrap-carousel.js" type="text/javascript"></script> 
    <script src="/js/bootstrap-typeahead.js" type="text/javascript"></script> 
    <script src="/js/bootstrap-affix.js" type="text/javascript"></script> 
    <script src="/js/application.js" type="text/javascript"></script> 
    <!-- <script src="/js/jquery.isotope.min.js" type="text/javascript"></script>  -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>
    <script src="/js/jquery.prettyPhoto.js" type="text/javascript"></script> 
    <script src="/js/superfish.js" type="text/javascript"></script> 
    <!-- <script src="/js/custom.js" type="text/javascript"></script> -->
    <script src="/js/my.js" type="text/javascript"></script>
</body>
</html>
