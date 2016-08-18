<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Plan Lector</title>
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/metisMenu.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/timeline.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/sb-admin-2.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
<div id="wrapper">
	<!-- Navigation -->
	@if(Auth::guest())
		@include('global_layouts.nav')
	@endif
	@yield('content')
</div>

<script src="{{ asset("/js/jquery.min.js") }}"></script>
<script src="{{ asset("/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("/js/metisMenu.min.js") }}"></script>
<script src="{{ asset("/js/sb-admin-2.js") }}"></script>

</body>
</html>
