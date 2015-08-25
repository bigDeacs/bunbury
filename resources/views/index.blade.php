@extends('app')

@section('meta')
	<title>{!! $brand->name !!} - Dedicated to service of the highest quality.</title>
	<meta name="description" content="Dedicated to service of the highest quality.  Our range of quality products together with our professional and personal service ensures we can provide you with a wide range of architectural window and door products.">
	<meta name="keywords" content="bradnams, bunbury, windows, doors, Western Australia, Australia, aluminium, sea view, residential, prestige, commercial, screens">
@endsection

@section('head')
	<link href="{{ asset('/css/responsive-slider.min.css') }}" rel="stylesheet" media="screen">
@endsection

@section('content')
	<!-- RESPONSIVE SLIDER - START -->
	<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true" data-interval="5000" data-transitiontime="300">
 		<div class="slides" data-group="slides">
		    <ul>
	      		@foreach($offers as $offer)
	      		<li>
			        <div class="slide-body" data-group="slide">
			          <img src="/uploads/{!! $offer->file !!}" alt="{!! $offer->promo !!}">
			        </div>
		      	</li>        
			    @endforeach
	      		<li>
			        <div class="slide-body" data-group="slide">
			          <img src="{{ asset('/img/full-width/2.jpg') }}" alt="Burleigh Beach, Gold Coast">
			        </div>
		      	</li>
				<li>
			        <div class="slide-body" data-group="slide">
			          <img src="{{ asset('/img/full-width/3.jpg') }}" alt="Surfer riding barrel wave">
			        </div>
		      	</li>
			  	<li>
			        <div class="slide-body" data-group="slide">
			          <img src="{{ asset('/img/full-width/4.jpg') }}" alt="Gold Coast City, Night time">
			        </div>
		      	</li>
	    	</ul>
	  	</div>
	  	<a class="slider-control left" href="#" data-jump="prev"><i class="icon-angle-left"></i></a>
	  	<a class="slider-control right" href="#" data-jump="next"><i class="icon-angle-right"></i></a>
	</div>
	<!-- RESPONSIVE SLIDER - END -->
	<!--=== Intro Block ===-->
	<div class="intro">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-9 col-xs-12">
	                <h1><span>Dedicated to service of the highest quality.</span></h1>
	                <p class="hidden-xs"> Our range of quality products together with our professional and personal service ensures we can provide you with a wide range of architectural window and door products.</p>
	            </div>            
	            <div class="col-md-3 hidden-xs">
	                <a href="/about" class="btn-more hover-effect">Find Out More</a>            
	            </div>
	        </div>
	    </div>
	</div><!--/row-->
	<!-- End Intro Block -->
	<!--=== Content Part ===-->
	<div class="container">	
		<!-- Recent Works -->
	    <div class="headline"><h2>Popular Products</h2></div>
		    <div class="row">
				@foreach($products as $product)
					@if(isset($product->rank))
				        <div class="col-md-3 col-sm-6">
				            <div class="thumbnails thumbnail-style thumbnail-kenburn">
				            	<div class="thumbnail-img">
				                    <div class="overflow-hidden">
				                        <a href="/{!! $product->type->url !!}/{!! $product->url !!}">
				                        	<img class="img-responsive" src="/uploads/{!! $product->image !!}" alt="{!! $product->name !!}" />
				                        </a>
				                    </div>
				                    <a class="btn-more hover-effect hidden-xs" href="/{!! $product->type->url !!}/{!! $product->url !!}">read more +</a>					
				                </div>
				                <div class="caption">
				                    <h3 style="min-height: 66px;"><a class="hover-effect" href="/{!! $product->type->url !!}/{!! $product->url !!}">{!! $product->name !!}</a></h3>
				                </div>
				            </div>
				        </div>
				    @endif
			    @endforeach
		    </div><!--/row-->
			<!-- End Recent Works -->

			<!-- Service Blocks -->
			<div class="row">
				@foreach($brochures as $brochure)
					@if(isset($brochure->rank))
						@if($brochure['rank'] == 1 || $brochure['rank'] == 2 || $brochure['rank'] == 3)
					        <div class="col-md-4">
					        	<div class="headline"><h3>{!! $brochure->name !!}</h3></div>
					    		<div class="service service-blue">
					    			<div class="desc">
					                    <p class="hidden-xs">{!! $brochure->description !!}</p>
						                <a href="/uploads/{!! $brochure->file !!}" target="_blank" class="btn-more btn-more-blue btn-block hover-effect">Find Out More</a>            
					    			</div>
					    		</div>	
					    	</div>
					    @endif
				    @endif
			    @endforeach
			</div><!--/row-->
			<!-- End Service Blokcs -->
		    
			<!-- Info Blokcs -->
			<div class="row">
		    	<!-- Welcome Block -->
				<div class="col-md-8 hidden-xs">
					<div class="headline"><h4>Welcome To Bradnams Bunbury</h4></div>
		            <div class="row">
		                <div class="col-sm-4">
		                    <img class="img-responsive margin-bottom-20" src="{{ asset('/img/about/extra.jpg') }}" alt="" />
		                </div>
		                <div class="col-sm-8">
							<p>For any job, look to us for:</p>
		                    <ul class="list-unstyled margin-bottom-20">
		                        <li><i class="icon-ok"></i> No Obligation Quotes</li>
		                        <li><i class="icon-ok"></i> Competitively Short Lead Times</li>
		                        <li><i class="icon-ok"></i> Unique and Professional Quality</li>
		                        <li><i class="icon-ok"></i> Going 'The Extra Mile'</li>
		                    </ul>                    
		                </div>
		            </div>

		            <blockquote class="hero-unify">
		                <p>-Small Blurb-</p>
		                <small>Managing Director</small>
		            </blockquote>
		        </div><!--/col-md-8-->        

		        <!-- Latest Shots -->
		        <div class="col-md-4 hidden-xs">
					@foreach($brochures as $brochure)
						@if(isset($brochure->rank))
							@if($brochure['rank'] == 4)
								<div class="headline"><h2>Featured Brochure</h2></div>
						        <a href="/uploads/{!! $brochure->file !!}" target="_blank">
			                    	<img class="img-responsive margin-bottom-20" src="/uploads/{!! $brochure->thumb !!}" alt="Featured Brochure" />
								</a>
						    @endif
					    @endif
				    @endforeach
		        </div><!--/col-md-4-->
			</div><!--/row-->	
			<!-- End Info Blokcs -->

			<!-- Our Clients -->
			<div id="clients-flexslider" class="flexslider home clients">
		        <div class="headline"><h2>Our Clients</h2></div>	
				<ul class="slides">
					<li>
		                <a href="#">
		                    <img src="{{ asset('/img/clients/hp_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/hp.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
					<li>
		                <a href="#">
		                    <img src="{{ asset('/img/clients/igneus_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/igneus.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
					<li>
		                <a href="#">
		                    <img src="{{ asset('/img/clients/vadafone_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/vadafone.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
					<li>
		                <a href="#">
		                    <img src="{{ asset('/img/clients/walmart_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/walmart.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
					<li>
		                <a href="#">
		                    <img src="{{ asset('/img/clients/shell_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/shell.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
					<li>
		                <a href="#">
		                    <img src="{{ asset('/img/clients/natural_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/natural.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
					<li>
		                <a href="#">
		                    <img src="{{ asset('/img/clients/aztec_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/aztec.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
					<li>
		                <a href="#">
		                    <img src="{{ asset('/img/clients/gamescast_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/gamescast.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
					<li>
		                <a href="#">
		                    <img src="{{ asset('/img/clients/cisco_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/cisco.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
					<li>
		                <a href="#">
		                    <img src="{{ asset('/img/clients/everyday_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/everyday.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
					<li>
		                <a href="#">
		                    <img src="{{ asset('/img/clients/cocacola_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/cocacola.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
					<li>
		                <a href="#">
		                    <img src="{{ asset('/img/clients/spinworkx_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/spinworkx.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
					<li>
		                <a href="#">
		                    <img src="{{ asset('/img/clients/shell_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/shell.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
					<li>
		                <a href="#">
		                    <img src="{{ asset('/img/clients/natural_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/natural.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
					<li>
		                <a href="#">
		                    <img src="{{ asset('/img/clients/gamescast_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/gamescast.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
					<li>
		                <a href="#">
		                    <img src="{{ asset('/img/clients/everyday_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/everyday.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
					<li>
		                <a href="#">
		                    <img src="{{ asset('/img/clients/spinworkx_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/spinworkx.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
				</ul>
			</div><!--/flexslider-->
			<!-- End Our Clients -->
		</div><!--/container-->	
@endsection

@section('scripts')
	<script src="{{ asset('/js/jquery.event.move.js') }}"></script>
	<script src="{{ asset('/js/responsive-slider.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/plugins/flexslider/jquery.flexslider-min.js') }}"></script>
	<script type="text/javascript">
	    (function() {
			  // store the slider in a local variable
			  var $window = $(window),
			      flexslider;
			  // tiny helper function to add breakpoints
			  function getGridSize() {
			    return (window.innerWidth < 600) ? 2 :
			           (window.innerWidth < 900) ? 3 : 4;
			  }
			  $(function() {
			    SyntaxHighlighter.all();
			  });
			  $window.load(function() {
			    $('.flexslider').flexslider({
			      animation: "slide",
			      animationLoop: true,
			      itemWidth: 210,
			      itemMargin: 5,
			      minItems: getGridSize(), // use function to pull in initial value
			      maxItems: getGridSize() // use function to pull in initial value
			    });
			  });
			 
			  // check grid size on resize event
			  $window.resize(function() {
			    var gridSize = getGridSize();
			 
			    flexslider.vars.minItems = gridSize;
			    flexslider.vars.maxItems = gridSize;
			  });
			}());
	</script>
	<script>	
		$(document).ready(function(){	  
			$('.responsive-slider').responsiveSlider({		
				autoplay: true,		interval: 8000,		transitionTime: 500	  
			});	
		});	
	</script>
@endsection