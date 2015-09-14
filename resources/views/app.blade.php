<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@yield('meta')
	@yield('head')
	<link rel="icon" href="{{ asset('/img/favicon.ico') }}">
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- App Icons -->
	<link rel="apple-touch-icon" href="{{ asset('/img/touch-icon-iphone.png') }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/touch-icon-ipad.png') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/img/touch-icon-iphone-retina.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/img/touch-icon-ipad-retina.png') }}">
	@if($brand['color1'] != '' && $brand['color2'] != '' && $brand['color3'] != '' && $brand['color4'] != '')
		<style>
			.header .navbar-default .navbar-nav > li > a:hover, .header .navbar-default .navbar-nav > .active > a, .headline h2, .headline h3, .headline h4 {
			  border-bottom: 2px solid #{!! $brand['color1'] !!}!important;
			}
			.header .dropdown-menu {
			  border-top: solid 2px #{!! $brand['color1'] !!};
			}
			.footer a, .copyright a, .footer a:hover, .copyright a:hover, .phone, .header .navbar-default .navbar-nav > .open > a, .header .navbar-default .navbar-nav > .open > a:hover, .header .navbar-default .navbar-nav > .open > a:focus, .breadcrumb li.active, .breadcrumb li a:hover, a:focus, a:hover, a:active, a, .who li i, .who li:hover i, .who li:hover a {
			  color: #{!! $brand['color1'] !!};
			}
			.sorting-block .sorting-nav li.active {
			  color: #{!! $brand['color1'] !!}!important;
			  border-bottom: solid 1px #{!! $brand['color1'] !!}!important;
			}
			.btn-u, .intro a.btn-more, .thumbnail-style a.btn-more, .service a.btn-more-blue, .sorting-block .sorting-grid li a:hover span.sorting-cover {
			  background: #{!! $brand['color1'] !!}!important;
			}
			blockquote:hover {
			  border-left-color: #{!! $brand['color1'] !!};
			}
			.list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus {
			  background-color: #{!! $brand['color1'] !!};
			  border-color: #{!! $brand['color1'] !!};
			}
			.footer {
			  color: #{!! $brand['color2'] !!}!important;
			  background: #{!! $brand['color3'] !!};
			}
			.footer p {
				color: #{!! $brand['color2'] !!}!important;
			}
			.copyright {
			  background: #{!! $brand['color4'] !!};
			}
			.tag-box-v2 {
			  border-left: solid 2px #{!! $brand['color1'] !!};
			}
		</style>
	@endif

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!--=== Top ===-->    
	<div class="top">
	    <div class="container">         
	        <ul class="loginbar pull-right">
	            <li>
	                <p class="phone"><i class="icon-phone"></i> {!! $brand->phone !!}</p>
	                <p class="phone_btn"><a href="tel:{!! $brand->phone !!}" class="btn btn-block btn-lg btn-warning"><i class="icon-phone"></i> Click to Call</a></p>
	            </li>
	        </ul>
	        @if($brand->facebook)
	        	<a href="https://www.facebook.com/{!! $brand->facebook !!}" target="_blank">
	           		<img class="pull-left phone" style="padding-bottom: 15px;" src="{{ asset('/img/FB-114.png') }}" width="114" alt="Find us on Facebook">
	        	</a>
	        @endif
	    </div>      
	</div><!--/top-->
	<!--=== End Top ===-->    

	<!--=== Header ===-->    
	<div class="header">
	    <div class="navbar navbar-default" role="navigation">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="/">
	                    <img id="logo-header" src="/uploads/{!! $brand->logo !!}" width="200" alt="Logo">
	                </a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse navbar-responsive-collapse">
	                <ul class="nav navbar-nav navbar-right">
	                    <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
	                            Products
	                            <i class="icon-angle-down"></i>
	                        </a>
	                        <ul class="dropdown-menu">
	                            <li><a href="/windows">Windows</a></li>
	                            <li><a href="/doors">Doors</a></li>
								<li><a href="/commercials">Commercial</a></li>
								<!--<li><a href="/screens">Screens</a></li>-->
	                        </ul>
	                    </li>
						<li>
	                        <a href="/brochures">
	                            Brochures
	                        </a>
	                    </li>
						<li>
							<a href="/faqs/glassrules">
	                            FAQ's
	                        </a>
						</li>
	                    <li>
	                        <a href="/about">
	                            About
	                        </a>
	                    </li>
	                    <li>
	                        <a href="/contact">
	                            Contact
	                        </a>
	                    </li>                    
	                </ul>                   
	            </div><!-- /navbar-collapse -->
	        </div>    
	    </div>    
	</div><!--/header-->
	<!--=== End Header ===-->    
	
	@yield('content')

	<!--=== Footer ===-->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 md-margin-bottom-40">
	                <!-- About -->
			        <div class="headline"><h2>About</h2></div>	
					<p class="margin-bottom-25 md-margin-bottom-40">@if($brand->about){!! $brand->about !!}@endif</p>	
				</div><!--/col-md-4-->	
				<div class="col-md-4 hidden-sm hidden-xs md-margin-bottom-40">
	                <!-- About -->
			        <div class="headline"><h2>Helpful Links</h2></div>	
					<p class="margin-bottom-25 md-margin-bottom-40 row">
						<ul class="col-sm-6">
							<li><a href="/windows">Windows</a></li>
		                    <li><a href="/doors">Doors</a></li>
							<li><a href="/commercials">Commercial</a></li>
							<li><a href="/brochures">Brochures</a></li>
		                </ul>
		                <ul class="col-sm-6">
							<li><a href="/colours">Colours</a></li>
							<li><a href="/faqs/glassrules">FAQ's</a></li>
		                    <li><a href="/about">About</a></li>
		                    <li><a href="/contact">Contact</a></li> 
		                </ul>
					</p>	
				</div><!--/col-md-4-->		             
				<div class="col-md-4 col-sm-6 md-margin-bottom-40">
	                <div class="headline"><h2>Contact Us</h2></div>	
	                <address class="md-margin-bottom-40">
						@if($brand->address)<i class="icon-home"></i> {!! $brand->address !!}<br />@endif
						@if($brand->phone)<i class="icon-phone-sign"></i> {!! $brand->phone !!}<br />@endif
						@if($brand->fax)<i class="icon-print"></i> {!! $brand->fax !!}<br />@endif
						@if($brand->email)<i class="icon-envelope-alt"></i> <a href="mailto:{!! $brand->email !!}" class="">{!! $brand->email !!}</a>@endif
	                </address>
				</div><!--/col-md-4-->
			</div><!--/row-->	
		</div><!--/container-->	
	</div><!--/footer-->	
	<!--=== End Footer ===-->
	<!--=== Copyright ===-->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-8">						
		            <p class="copyright-space">
	                    2012 - <?php echo date("Y") ?> &copy; {!! $brand->name !!}. ALL Rights Reserved. 
	                    <a href="/privacy">Privacy Policy</a><!-- | <a href="#">Terms of Service</a>-->
	                </p>
				</div>
				<div class="col-md-4">	
					<a href="index.php">
	                    <img id="logo-footer" src="/uploads/{!! $brand->logo !!}" width="200" class="pull-right" alt="Logo">
	                </a>
				</div>
			</div><!--/row-->
		</div><!--/container-->	
	</div><!--/copyright-->	
	<!--=== End Copyright ===-->

	<!-- Scripts -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="{{ asset('/plugins/scripts.js') }}"></script>
	<script src="{{ asset('/js/app.js') }}"></script>
	<script src="{{ asset('/plugins/jquery-migrate-1.2.1.min.js') }}"></script>
	<script>	
		$(function() {		
			$('#accordion-1').on('shown.bs.collapse', function (e) {			
				var offset = $('.panel.panel-default > .panel-collapse.in').offset();			
				if(offset) {				
					$('html,body').animate({					
						scrollTop: $('.panel-title a').offset().top -20				
					}, 500); 			
				}		
			}); 	
		});		
		function navigateToElement(id) {		
			$('html, body').animate({			
				scrollTop: $("#" + id).offset().top		
			}, 1000);	}
	</script>
	@yield('scripts')
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/55f644695cc4b66b4008cc99/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->
</body>
</html>
