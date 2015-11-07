<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	@include('metro-dashboard.stylesheet.stylesheet')
	@yield('stylesheet')
	<!-- end: CSS -->
	
	<!-- START-SCRIPT-HEADER -->
	@include('metro-dashboard.script.scriptheader')
	@yield('javascript')
	<!-- END-SCRIPT-HEADER -->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{asset('sources/metro-dashboard/img/favicon.ico')}}">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url("{{asset('sources/metro-dashboard/img/bg-login.jpg')}}") !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="http://{{ $_SERVER['SERVER_NAME']}}/cookklow"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<h2>Login to your account</h2>
					<form class="form-horizontal" action="http://{{ $_SERVER['SERVER_NAME']}}/cookklow/admin/auth/login" method="post">
						<fieldset>
							<input type="hidden" name="_token" class="csrf" id="csrf" value="{{csrf_token()}}">
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" value="{{old('email')}}" name="email" id="username" type="text" placeholder="type email"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" value="{{old('password')}}" name="password" id="password" type="password" placeholder="type password"/>
							</div>
							<div class="clearfix"></div>
							
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>
					<hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a href="#">click here</a> to get a new password.
					</p>	
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	
	<!-- START-SCRIPT-HEADER -->
	@include('metro-dashboard.script.scriptfooter')
	@yield('javascript')
	<!-- END-SCRIPT-HEADER -->
	
</body>
</html>
