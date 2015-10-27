<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | คลุกเคล้าดอทคอม</title>

    <!-- STYLESHEET -->
	@include('shopping.stylesheet.stylesheet')
	@yield('stylesheet')
    <!-- STYLESHEET -->

    <!-- START-SCRIPT -->
    @include('shopping.script.script-head')
    @yield('javascript')
    <!-- END-SCRIPT -->
</head><!--/head-->

<body>
	<header id="header"><!--START-HEADER-->

		<!-- START-HEADER-TOP -->
		@include('shopping.section.header-top')
		<!-- END-HEADER-TOP -->
		
		<!-- START-HEADER-TOP -->
		@include('shopping.section.header-middle')
		<!-- END-HEADER-TOP -->
		
		<!-- START-HEADER-BOTTOM -->
		@include('shopping.section.header-bottom')
		<!-- END-HEADER-BOTTOM -->
		
	</header><!--END-HEADER-->

	<!-- START-SLIDER -->
		@include('shopping.section.slider')
	<!-- END-SLIDER -->
	
	<section>
		<div class="container">
			<div class="row">

				<!-- START-CONTENT-RIGHT -->
				@yield('content')
				<!-- END-CONTENT-RIGHT -->
				
				
			</div>
		</div>
	</section>

	<!-- START-FOOTER -->
	<footer id="footer">
		@include('shopping.section.footer')
	</footer>
	<!-- END-FOOTER -->

	

  	<!-- START-SCRIPT-FOOT -->
    @include('shopping.script.script-foot')
    @yield('javascript')
    <!-- END-SCRIPT-FOOT -->
</body>
</html>