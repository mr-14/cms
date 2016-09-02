<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title>Login</title>

	<link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
	@section('stylesheets')
		<link rel="stylesheet" href="{{ url('css/fonts/arimo/arimo.css') }}">
		<link rel="stylesheet" href="{{ url('css/fonts/linecons/css/linecons.css') }}">
		<link rel="stylesheet" href="{{ url('css/fonts/fontawesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ url('css/xenon-core.css') }}">
		<link rel="stylesheet" href="{{ url('css/xenon-forms.css') }}">
		<link rel="stylesheet" href="{{ url('css/xenon-components.css') }}">
		<link rel="stylesheet" href="{{ url('css/xenon-skins.css') }}">
		<!--link rel="stylesheet" href="{{ elixir('css/all.css') }}"-->
	@show

	<script src="{{ url('js/jquery-1.11.1.min.js') }}"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="@yield('page-class', 'page-body')">
	@include('sections.setting')

	<div class="page-container">
		@include('sections.sidebar')		
		
		<div class="main-content">
					
			<!-- User Info, Notifications and Menu Bar -->
			<nav class="navbar user-info-navbar" role="navigation">
				
				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
					
					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>
					
					{{--@include('components.nav-messages')--}}
		
					{{--@include('components.nav-notifications')--}}
				</ul>
				
				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
					@include('components.nav-search')
						
					@include('components.nav-profile')	
				</ul>
			</nav>
	
			@yield('content')

			{{--@include('sections.footer')--}}
		</div>
	</div>

    <!-- JavaScripts -->
	<script src="{{ url('js/bootstrap.min.js') }}"></script>
	@section('javascripts')
		<script src="{{ url('js/TweenMax.min.js') }}"></script>
		<script src="{{ url('js/resizeable.js') }}"></script>
		<script src="{{ url('js/joinable.js') }}"></script>
		<script src="{{ url('js/xenon-api.js') }}"></script>
		<script src="{{ url('js/xenon-toggles.js') }}"></script>
		<script src="{{ url('js/jquery-validate/jquery.validate.min.js') }}"></script>
		<script src="{{ url('js/toastr/toastr.min.js') }}"></script>
		<script src="{{ url('js/xenon-custom.js') }}"></script>
		{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
	@show
</body>
</html>
