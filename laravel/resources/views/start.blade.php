<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- tde above 3 meta tags *must* come first in tde head; any otder head content must come *after* tdese tags -->
    <title>Learning App</title>
    <!-- CSS -->
    <link href="css/startPage.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet" >
    <!-- Bootstrap -->
    <link href="{{ URL::to('css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/main.css') }}" rel="stylesheet">
    <!--jGrowl-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/lib/jGrowl/jquery.jgrowl.min.css') }}" />
    <script src="{{ URL::to('js/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::to('js/lib/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('js/back-to-top.js') }}"></script>
    <script src="{{ URL::to('js/startPage/roll-down.js') }}"></script>
    <script src="{{ URL::to('js/startPage/show-div-content.js') }}"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view tde page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="overflow">
<header class="intro-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 ">
                <div class="site-heading">
                    <h1 align="center" class="animated fadeInDown" style="-vendor-animation-duration: 3s;-vendor-animation-delay: 2s;">MagneticOne</h1>
                    <hr class="small">
                    <p align="center"><a href="{{ action('ProductController@index') }}" class="btn btn-primary btn-start btn-try-it animated fadeInRight">Try It!</a></p>
                    <script type="text/javascript">$('.btn-try-it').on('click', function(){var $this = $(this);$this.button('loading');setTimeout(function() {$this.button('reset');},8000);});</script>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Footer -->
@yield('content')
</body>
</html>