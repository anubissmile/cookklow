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
	
	<!-- START-LINK-STYLESHEET -->
	@include('metro-dashboard.stylesheet.stylesheet')
	@yield('stylesheet')
	<!-- START-LINK-STYLESHEET -->

	<!-- START-HEADER-JAVASCRIPT -->
	@include('metro-dashboard.script.scriptheader')
	@yield('javascript')
	<!-- END-HEADER-JAVASCRIPT -->

</head>
<body>
		<!-- start: Header -->
		@include('metro-dashboard.section.header')
		<!-- END: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- START-SIDEBAR-LEFT-MAINMENU -->
			@include('metro-dashboard.section.sidebar-left')
			<!-- END-SIDEBAR-LEFT-MAINMENU -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			@include('metro-dashboard.section.content')
			<!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<!-- START-FOOTER -->
	@include('metro-dashboard.section.footer')
	<!-- END-FOOTER -->
	
	
	<!-- START-FOOTER-JAVASCRIPT -->
	@include('metro-dashboard.script.scriptfooter')
	@yield('javascript')
	<!-- END-FOOTER-JAVASCRIPT -->
	
</body>
</html>
