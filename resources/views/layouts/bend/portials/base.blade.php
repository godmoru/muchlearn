
<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="MuchLearn Admin Dashboard & Backend">
		<meta name="author" content=" MuchLearn Incorporated">
		<meta name="keywords" content="muchlearn much learn lms online education online learning data science data-science, mobile-development, mobile development, software engineering, software-engineering">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('bend/images/brand/favicon.ico') }}" /><!-- FAVICON -->
		<title>MuchLearn – {{$pagename ?? ""}}</title><!-- TITLE -->
		<link id="style" href="{{asset ('bend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" /><!-- BOOTSTRAP CSS -->
		<link href="{{asset ('bend/css/style.css')}}" rel="stylesheet"/>
		<link href="{{asset ('bend/css/plugins.css')}}" rel="stylesheet" /><!-- STYLE CSS -->
		<link href="{{asset ('bend/css/icons.css')}}" rel="stylesheet"/><!--- FONT-ICONS CSS -->

	</head>

	<body class="app sidebar-mini ltr light-mode">
		<div id="global-loader">
			<img src="{{asset ('bend/images/loader.svg')}}" class="loader-img" alt="Loader">
		</div>

		<div class="page">
			<div class="page-main">

				@include('layouts.bend.portials.header')
				@include('layouts.bend.portials.sidebar')
				<div class="main-content app-content mt-0">
					<div class="side-app">
						<div class="main-container container-fluid">
							@include('layouts.bend.portials.pagetitle')
							@yield('content')
						</div>
					</div>
				</div>

			</div>
			@include('layouts.bend.portials.rightbar')
			@include('layouts.bend.portials.footer')
		</div>

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
		<script src="{{asset ('bend/js/jquery.min.js')}}"></script><!-- JQUERY JS -->
		<script src="{{asset ('bend/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{asset ('bend/plugins/bootstrap/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP JS -->
		<script src="{{asset ('bend/js/sticky.js')}}"></script><!-- Sticky js -->
		<script src="{{asset ('bend/plugins/sidemenu/sidemenu.js')}}"></script>
		<script src="{{asset ('bend/plugins/p-scroll/perfect-scrollbar.min.js')}}"></script><!-- SIDE-MENU JS-->
		<script src="{{asset ('bend/plugins/sidemenu/sidemenu-scroll.js')}}"></script><!-- PERFECT SCROLL BAR js-->
		<script src="{{asset ('bend/plugins/peitychart/jquery.peity.min.js')}}"></script>
		<script src="{{asset ('bend/plugins/peitychart/peitychart.init.js')}}"></script><!-- INTERNAL PIETY CHART JS -->
		<script src="{{asset ('bend/plugins/morris/morris.js')}}"></script>
		<script src="{{asset ('bend/plugins/morris/raphael-min.js')}}"></script><!-- INTERNAL MORRIS CHART JS -->
		<script src="{{asset ('bend/plugins/sidebar/sidebar.js')}}"></script><!-- SIDEBAR JS -->
		<script src="{{asset ('bend/js/apexcharts.js')}}"></script><!-- INTERNAL APEXCHART JS -->
        <script src="{{asset ('bend/js/index4.js')}}"></script><!--INTERNAL INDEX JS-->
		<script src="{{asset ('bend/js/themeColors.js')}}"></script><!-- THEMECOLORS JS -->
		<script src="{{asset ('bend/js/custom.js')}}"></script> <!-- CUSTOM JS -->

	</body>
</html>