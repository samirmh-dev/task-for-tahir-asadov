<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/front/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/front/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/front/dark.css') }}" type="text/css" />

	<!-- Travel Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/front/travel.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/front/datepicker.css') }}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{ asset('css/front/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/front/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/front/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('css/front/responsive.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>@yield('title')</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		@yield('content')
		
	</div><!-- #wrapper end -->

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('js/front/jquery.js') }}"></script>
	<script src="{{ asset('js/front/plugins.js') }}"></script>

	<!-- Travel Demo Specific Script -->
	<script src="{{ asset('js/front/datepicker.js') }}"></script>
	<!-- / -->

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('js/front/functions.js') }}"></script>
</body>
</html>