@extends('layouts.base')

@section('page-class', 'page-body login-page')

@section('content')
<div class="login-container">
	<div class="row">
		<div class="col-sm-6">
			<script type="text/javascript">
				jQuery(document).ready(function($)
				{
					// Reveal Login form
					setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);
					
					
					// Validation and Ajax action
					$("form#login").validate({
						rules: {
							username: {
								required: true
							},
							
							passwd: {
								required: true
							}
						},
						
						messages: {
							username: {
								required: 'Please enter your username.'
							},
							
							passwd: {
								required: 'Please enter your password.'
							}
						},
						
						// Form Processing via AJAX
						submitHandler: function(form)
						{
							show_loading_bar(70); // Fill progress bar to 70% (just a given value)
							
							var opts = {
								"closeButton": true,
								"debug": false,
								"positionClass": "toast-top-full-width",
								"onclick": null,
								"showDuration": "300",
								"hideDuration": "1000",
								"timeOut": "5000",
								"extendedTimeOut": "1000",
								"showEasing": "swing",
								"hideEasing": "linear",
								"showMethod": "fadeIn",
								"hideMethod": "fadeOut"
							};
								
							$.ajax({
								url: "data/login-check.php",
								method: 'POST',
								dataType: 'json',
								data: {
									do_login: true,
									username: $(form).find('#username').val(),
									passwd: $(form).find('#passwd').val(),
								},
								success: function(resp)
								{
									show_loading_bar({
										delay: .5,
										pct: 100,
										finish: function(){
											
											// Redirect after successful login page (when progress bar reaches 100%)
											if(resp.accessGranted)
											{
												window.location.href = 'dashboard-1.html';
											}
																						else
											{
												toastr.error("You have entered wrong password, please try again. User and password is <strong>demo/demo</strong> :)", "Invalid Login!", opts);
												$passwd.select();
											}
										}
									});
									
								}
							});
							
						}
					});
					
					// Set Form focus
					$("form#login .form-group:has(.form-control):first .form-control").focus();
				});
			</script>
			
			<!-- Errors container -->
			<div class="errors-container"></div>
			
			<form class="login-form fade-in-effect" role="form" method="POST" action="{{ url('/login') }}">
				{{ csrf_field() }}

				<div class="login-header">
					<a href="dashboard-1.html" class="logo">
						<img src="images/logo@2x.png" alt="" width="80" />
						<span>log in</span>
					</a>
					
					<p>Dear user, log in to access the admin area!</p>
				</div>
				
				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<label class="col-md-4 control-label" for="email">E-Mail Address</label>
					<input type="text" class="form-control input-dark" name="email" id="email" autocomplete="off" value="{{ old('email') }}"/>
					
					@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
				</div>

				<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					<label class="col-md-4 control-label" for="password">Password</label>
					<input type="password" class="form-control input-dark" name="password" id="password" autocomplete="off" />
					
					@if ($errors->has('password'))
						<span class="help-block">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
					@endif
				</div>
<!--
				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="remember"> Remember Me
							</label>
						</div>
					</div>
				</div>
-->
				<div class="form-group">
					<button type="submit" class="btn btn-dark  btn-block text-left">
						<i class="fa-lock"></i>
						Log In
					</button>
				</div>
				
				<div class="login-footer">
					<a href="{{ url('/password/reset') }}">Forgot your password?</a>
					
					<div class="info-links">
						<a href="#">ToS</a> -
						<a href="#">Privacy Policy</a>
					</div>
					
				</div>
			</form>
		</div>
	</div>
	
</div>
@stop
