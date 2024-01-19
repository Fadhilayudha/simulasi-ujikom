<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="{{ asset('assets/img/Logo.png') }}">
	<title>PPDB SMK Wikrama Bogor</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{asset('assets/img/icons/favicon.ico')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body>

    @yield('content')


	<script src="{{asset('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/vendor/select2/select2.min.js')}}"></script>
	<script src="{{asset('assets/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-1tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
