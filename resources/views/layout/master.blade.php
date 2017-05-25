<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- App favicon -->
	<link rel="shortcut icon" href="{{ URL::asset('favicon.ico')}}">
	<!-- App title -->
	<title>Infinitees-Admin</title>

	<!--Morris Chart CSS -->


	<!-- App css -->
	<link href="{{ URL::asset('assets/css/bootstrap.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('assets/css/core.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('assets/css/components.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('assets/css/icons.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('assets/css/pages.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('assets/css/menu.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('assets/css/responsive.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('assets/css/switchery.min.css')}}" rel="stylesheet">

	<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

	<script src="{{ URL::asset('assets/js/modernizr.min.js')}}"></script>

</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

	<!-- Top Bar Start -->
	<div class="topbar">

		<!-- LOGO -->
		<div class="topbar-left">
			<a href="{{route('shop')}}" class="logo"><span>infini<span>Tees</span></span><i class="mdi mdi-layers"></i></a>
			<!-- Image logo -->
			<!--<a href="index.html" class="logo">-->
			<!--<span>-->
			<!--<img src="assets/images/logo.png" alt="" height="30">-->
			<!--</span>-->
			<!--<i>-->
			<!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
			<!--</i>-->
			<!--</a>-->
		</div>

		<!-- Button mobile view to collapse sidebar menu -->
		<div class="navbar navbar-default" role="navigation">
			<div class="container">

				<!-- Navbar-left -->
				<ul class="nav navbar-nav navbar-left">
					<li>
						<button class="button-menu-mobile open-left waves-effect">
							<i class="mdi mdi-menu"></i>
						</button>
					</li>
					<li class="hidden-xs">
						<form role="search" class="app-search">
							<input type="text" placeholder="Search..."
								   class="form-control">
							<a href=""><i class="fa fa-search"></i></a>
						</form>
					</li>
					<li class="hidden-xs">
						<a href="#" class="menu-item">New</a>
					</li>
				</ul>

				<!-- Right(Notification) -->
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
							<i class="mdi mdi-bell"></i>
							<span class="badge up bg-success">4</span>
						</a>

						<ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
							<li>
								<h5>Notifications</h5>
							</li>
							<li>
								<a href="#" class="user-list-item">
									<div class="icon bg-info">
										<i class="mdi mdi-account"></i>
									</div>
									<div class="user-desc">
										<span class="name">New Signup</span>
										<span class="time">5 hours ago</span>
									</div>
								</a>
							</li>
							<li>
								<a href="#" class="user-list-item">
									<div class="icon bg-danger">
										<i class="mdi mdi-comment"></i>
									</div>
									<div class="user-desc">
										<span class="name">New Message received</span>
										<span class="time">1 day ago</span>
									</div>
								</a>
							</li>
							<li>
								<a href="#" class="user-list-item">
									<div class="icon bg-warning">
										<i class="mdi mdi-settings"></i>
									</div>
									<div class="user-desc">
										<span class="name">Settings</span>
										<span class="time">1 day ago</span>
									</div>
								</a>
							</li>
							<li class="all-msgs text-center">
								<p class="m-0"><a href="#">See all Notification</a></p>
							</li>
						</ul>
					</li>

					<li>
						<a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
							<i class="mdi mdi-email"></i>
							<span class="badge up bg-danger">8</span>
						</a>

						<ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
							<li>
								<h5>Messages</h5>
							</li>
							<li>
								<a href="#" class="user-list-item">
									<div class="avatar">
										<img src="" alt="">
									</div>
									<div class="user-desc">
										<span class="name">Patricia Beach</span>
										<span class="desc">There are new settings available</span>
										<span class="time">2 hours ago</span>
									</div>
								</a>
							</li>
							<li>
								<a href="#" class="user-list-item">
									<div class="avatar">
										<img src="" alt="">
									</div>
									<div class="user-desc">
										<span class="name">Connie Lucas</span>
										<span class="desc">There are new settings available</span>
										<span class="time">2 hours ago</span>
									</div>
								</a>
							</li>
							<li>
								<a href="#" class="user-list-item">
									<div class="avatar">
										<img src="" alt="">
									</div>
									<div class="user-desc">
										<span class="name">Margaret Becker</span>
										<span class="desc">There are new settings available</span>
										<span class="time">2 hours ago</span>
									</div>
								</a>
							</li>
							<li class="all-msgs text-center">
								<p class="m-0"><a href="#">See all Messages</a></p>
							</li>
						</ul>
					</li>

					<li>
						<a href="javascript:void(0);" class="right-bar-toggle right-menu-item">
							<i class="mdi mdi-settings"></i>
						</a>
					</li>

					<li class="dropdown user-box">
						<a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
							<img src="" alt="user-img" class="img-circle user-img">
						</a>

						<ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
							<li>
								<h5>Hi, John</h5>
							</li>
							<li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
							<li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
							<li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
							<li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
						</ul>
					</li>

				</ul> <!-- end navbar-right -->

			</div><!-- end container -->
		</div><!-- end navbar -->
	</div>
	<!-- Top Bar End -->

	@include('include.adminleftnav')

	@yield('content')

</div>
<!-- END wrapper -->



<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/detect.js')}}"></script>
<script src="{{ URL::asset('assets/js/fastclick.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.blockUI.js')}}"></script>
<script src="{{ URL::asset('assets/js/waves.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.scrollTo.min.js')}}"></script>

<script src="../plugins/switchery/switchery.min.js"></script>

<!-- Counter js  -->
<script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="../plugins/counterup/jquery.counterup.min.js"></script>

<!--Morris Chart-->
<script src="../plugins/morris/morris.min.js"></script>
<script src="../plugins/raphael/raphael-min.js"></script>

<!-- Dashboard init -->
<script src="assets/pages/jquery.dashboard.js"></script>

<!-- App js -->
<script src="{{ URL::asset('assets/js/jquery.core.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.app.js')}}"></script>

</body>
</html>