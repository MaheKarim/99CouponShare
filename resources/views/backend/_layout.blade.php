<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>
        @yield('title', 'Admin | Home Page')
    </title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('/') }}assets/img/icon.ico" type="image/x-icon"/>



	<!-- Fonts and icons -->
	<script src="{{ asset('/') }}assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('/') }}assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ asset('/') }}assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
        <!-- Start Navbar -->
        @include('backend._inc._navbar')
        <!-- End Navbar -->

        <!-- Start Sidebar -->
		@include('backend._inc._sidebar')
		<!-- End Sidebar -->

		@yield('content')
		
		
	</div>
	@include('backend._inc._coreOtherJS')
</body>
</html>