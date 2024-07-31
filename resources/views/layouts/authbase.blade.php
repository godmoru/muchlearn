

<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="MuchLearn Admin Dashboard & Backend">
		<meta name="author" content=" MuchLearn Incorporated">
		<meta name="keywords" content="muchlearn much learn lms online education online learning data science data-science, mobile-development, mobile development, software engineering, software-engineering">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('bend/images/brand/favicon.ico')}}" />
		<title>MuchLearn LMS | {{ $pagename ?? ""}}</title>
		<link id="style" href="{{asset('bend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
		<link href="{{asset('bend/css/style.css')}}" rel="stylesheet"/>
		<link href="{{asset('bend/css/plugins.css')}}" rel="stylesheet" />
		<link href="{{asset('bend/css/icons.css')}}" rel="stylesheet"/>
	</head>

	<body class="app sidebar-mini login-img">
		<div class="error-image">
			<div id="global-loader">
				<img src="{{asset('bend/images/loader.svg')}}" class="loader-img" alt="Loader">
			</div>
			<div class="page">
				<div>		
					<div class="col col-login mx-auto mt-7">
						<div class="text-center">
							<a href="index.html"><img src="{{asset('bend/images/brand/logo.png')}}" class="header-brand-img" alt=""></a>
						</div>
					</div>
					@yield('content')
				</div>
			</div>
		</div>
        <script src="{{asset('bend/js/jquery.min.js')}}"></script>
		<script src="{{asset('bend/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{asset('bend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('bend/js/sticky.js')}}"></script>
		<script src="{{asset('bend/plugins/p-scroll/perfect-scrollbar.min.js')}}"></script>
		<script src="{{asset('bend/js/themeColors.js')}}"></script>
		<script src="{{asset('bend/js/custom.js')}}"></script>

	</body>
</html>
