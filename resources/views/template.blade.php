<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<title>Aliwidi Maulana @yield('title')</title>
		
		<link href="{{ asset('bootstrap-3.3.7/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">

		<!--[if lt IE 9]>
		  <script src="{{ asset('http://laravelapp.dev/js/html5shiv_3_7_2.min.js') }}"></script>
		  <script src="{{ asset('http://laravelapp.dev/js/respond_1_4_2.min.js') }}"></script>
		<![endif]-->
	</head>
	<body>
		@include('navbar')
		@yield('main')
		@yield('footer')
		
		<script src="{{ asset('js/jquery_1_11_3.min.js') }}"></script>
		<script src="{{ asset('bootstrap-3.3.7/js/bootstrap.min.js') }}"></script>
		<script>
		$('div.alert').not('.alert-important').delay(3000).slideUp(300);
		</script>
	</body>
</html>