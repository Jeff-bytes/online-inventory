<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Tarlac Provincial Veterinary</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('landing/css/animate.min.css') }}" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('landing/css/creative.css') }}" type="text/css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">menu</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#projects">Projects</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#public_info">Public Info</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Tarlac Provincial Veterinary</h1>
                <hr>
                <p>
                
                </p>
                <a href="#about" class="btn btn-warning btn-xl page-scroll">About</a>
            </div>
        </div>
    </header>

    <section class="bg-warning" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About</h2>
                    <hr class="">
                    <p class="">
                        Tarlac Provincial Veterinary
                    </p>
                    <a href="#" class="btn btn-default btn-xl">Go To Top!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-5x fa-mobile-phone wow bounceIn text-warning"></i>
                        <h3>Drugs &amp; Meds</h3>
                        <p class="text-muted">Drugs &amp; and Meds supplies for pets and farm animlals</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-flash wow bounceIn text-warning" data-wow-delay=".1s"></i>
                        <h3>Fast</h3>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn text-warning" data-wow-delay=".2s"></i>
                        <h3>Up to Date</h3>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-warning" data-wow-delay=".3s"></i>
                        <h3>Made with Love</h3>
                        <p class="text-muted"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="projects">
        <div class="container-fluid">
            <div class="row">
                <h2 class="text-center">Projects</h2>
                <div class="col-md-6">
                    <h3>Current</h3>
                    
                </div>
                <div class="col-md-6">
                    <h3>Past</h3>
                    
                </div>
            </div>
            <hr/>
        </div>
    </section>

    <aside id="public_info" class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Public Information</h2>
                
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Tarlac Veterinary Office is supplying drugs and meds for pet and farm animals.</p>
                </div>
                {{-- <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-twitter-square fa-3x wow bounceIn"></i>
                    <p><a href="https://twitter.com/madamt0001" target="_blank">Madamt0001</a></p>
                </div> --}}
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-facebook-official fa-3x wow bounceIn"></i>
                    <p><a href="https://fb.com/tarlacvet" target="_blank">Tarlac Veterinary</a></p>
                </div>
                {{-- <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-instagram fa-3x wow bounceIn"></i>
                    <p><a href="https://instagram.com/mr.unknown0001" target="_blank">Mr.Unknown0001</a></p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-github fa-3x wow bounceIn"></i>
                    <p><a href="https://github.com/mrunknown0001" target="_blank">MrUnknown0001</a></p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>+63915-611-9134</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:madamt0001@gmail.com">madamt0001@gmail.com</a></p>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="{{ asset('dist/js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('landing/js/easing.min.js') }}"></script>
    <script src="{{ asset('landing/js/fittext.js') }}"></script>
    <script src="{{ asset('landing/js/wow.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('landing/js/creative.js') }}"></script>

</body>

</html><?php
    exit();
?>
