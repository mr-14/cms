@extends('layouts.base')

@section('content')
<div class="settings-pane">
		
	<a href="#" data-toggle="settings-pane" data-animate="true">
		&times;
	</a>
	
	<div class="settings-pane-inner">
		
		<div class="row">
			
			<div class="col-md-4">
				
				<div class="user-info">
					
					<div class="user-image">
						<a href="extra-profile.html">
							<img src="images/user-2.png" class="img-responsive img-circle" />
						</a>
					</div>
					
					<div class="user-details">
						
						<h3>
							<a href="extra-profile.html">John Smith</a>
							
							<!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
							<span class="user-status is-online"></span>
						</h3>
						
						<p class="user-title">Web Developer</p>
						
						<div class="user-links">
							<a href="extra-profile.html" class="btn btn-primary">Edit Profile</a>
							<a href="extra-profile.html" class="btn btn-success">Upgrade</a>
						</div>
						
					</div>
					
				</div>
				
			</div>
			
			<div class="col-md-8 link-blocks-env">
				
				<div class="links-block left-sep">
					<h4>
						<span>Notifications</span>
					</h4>
					
					<ul class="list-unstyled">
						<li>
							<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk1" />
							<label for="sp-chk1">Messages</label>
						</li>
						<li>
							<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk2" />
							<label for="sp-chk2">Events</label>
						</li>
						<li>
							<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk3" />
							<label for="sp-chk3">Updates</label>
						</li>
						<li>
							<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk4" />
							<label for="sp-chk4">Server Uptime</label>
						</li>
					</ul>
				</div>
				
				<div class="links-block left-sep">
					<h4>
						<a href="#">
							<span>Help Desk</span>
						</a>
					</h4>
					
					<ul class="list-unstyled">
						<li>
							<a href="#">
								<i class="fa-angle-right"></i>
								Support Center
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa-angle-right"></i>
								Submit a Ticket
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa-angle-right"></i>
								Domains Protocol
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa-angle-right"></i>
								Terms of Service
							</a>
						</li>
					</ul>
				</div>
				
			</div>
			
		</div>
	
	</div>
	
</div>

<div class="page-container">
		
	<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
	<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
	<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
	<div class="sidebar-menu toggle-others fixed">
		
		<div class="sidebar-menu-inner">	
			
			<header class="logo-env">
				
				<!-- logo -->
				<div class="logo">
					<a href="dashboard-1.html" class="logo-expanded">
						<img src="images/logo@2x.png" width="80" alt="" />
					</a>
					
					<a href="dashboard-1.html" class="logo-collapsed">
						<img src="images/logo-collapsed@2x.png" width="40" alt="" />
					</a>
				</div>
				
				<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
				<div class="mobile-menu-toggle visible-xs">
					<a href="#" data-toggle="user-info-menu">
						<i class="fa-bell-o"></i>
						<span class="badge badge-success">7</span>
					</a>
					
					<a href="#" data-toggle="mobile-menu">
						<i class="fa-bars"></i>
					</a>
				</div>
				
				<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
				<div class="settings-icon">
					<a href="#" data-toggle="settings-pane" data-animate="true">
						<i class="linecons-cog"></i>
					</a>
				</div>
				
							
			</header>
					
					
			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->

				<li>
					<a href="ui-widgets.html">
						<i class="linecons-star"></i>
						<span class="title">Widgets</span>
					</a>
				</li>

				<li>
					<a href="dashboard-1.html">
						<i class="linecons-cog"></i>
						<span class="title">Dashboard</span>
					</a>
					<ul>
						<li>
							<a href="dashboard-1.html">
								<span class="title">Dashboard 1</span>
							</a>
						</li>
					</ul>
				</li>
			</ul>
					
		</div>
		
	</div>
	
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
				
				<li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->
					
					<form method="get" action="extra-search.html">
						<input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />
						
						<button type="submit" class="btn btn-link">
							<i class="linecons-search"></i>
						</button>
					</form>
					
				</li>
				
				@include('components.nav-profile')	
			</ul>
			
		</nav>
		<h3>Here starts everything&hellip;</h3>

		{{--@include('sections.footer')--}}
	</div>
	
</div>

@stop
