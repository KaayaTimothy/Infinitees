<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>
        @yield('title')
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="{{ URL::asset('assets/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/owl.theme.css')}}" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="{{ URL::asset('assets/css/style.blue.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/custom.css')}}" rel="stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="{{ URL::asset('assets/css/custom.css')}}" rel="stylesheet">

    <script src="{{ URL::asset('assets/js/respond.min.js')}}"></script>
    
    <link rel="shortcut icon" href="favicon.png">



</head>

<body>

    @include('include.shoptopbar')

    @include('include.shopnav')

    @yield('header')

   

    <div id="all">

        <div id="content">
            @yield('content')

            <!-- *** ADVANTAGES HOMEPAGE ***
 _________________________________________________________ -->
             @yield('advantages')



            <!-- *** HOT PRODUCT SLIDESHOW ***
 _________________________________________________________ -->
            @yield('hot')
            
            <!-- /#hot -->

            <!-- *** HOT END *** -->

            

        <!-- *** FOOTER ***
 _________________________________________________________ -->
        
@include('include.footer');

        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2016 Infinitech.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Template by <a href="http://bootstrapious.com/e-commerce-templates">Bootstrapious</a> with support from <a href="https://kakusei.cz">Kakusei</a> 
                        <!-- Not removing these links is part of the licence conditions of the template. Thanks for understanding :) -->
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="{{ URL::asset('assets/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/jquery.cookie.js')}}"></script>
    <script src="{{ URL::asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/modernizr.js')}}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap-hover-dropdown.js')}}"></script>
    <script src="{{ URL::asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/front.js')}}"></script>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>


</body>

</html>