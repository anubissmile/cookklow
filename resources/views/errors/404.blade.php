<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    @include('shopping.stylesheet.stylesheet')
    @yield('stylesheet')
    @include('shopping.script.script-head')
    @yield('javascript')
</head><!--/head-->

<body>
	<div class="container text-center">
		<div class="logo-404">
			<a href="../cookklow"><img src="{{asset('e-shopper/images/home/logo.png')}}" alt="PAGE NOT FOUND" /></a>
		</div>
		<div class="content-404">
			<img src="{{asset('e-shopper/images/404/404.png')}}" class="img-responsive" alt="PAGE NOT FOUND" />
			<h1><b>OPPS!</b> We Couldn’t Find this Page</h1>
			<p>Uh... So it looks like you brock something. The page you are looking for has up and Vanished.</p>
			<h2><a href="../cookklow">Bring me back Home</a></h2>
		</div>
	</div>

  
    @include('shopping.script.script-foot')
    @yield('javascript')
</body>
</html>