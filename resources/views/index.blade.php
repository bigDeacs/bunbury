@extends('app')

@section('meta')
	<title>{!! $brand->name !!} - Dedicated to service of the highest quality.</title>
	<meta name="description" content="Dedicated to service of the highest quality.  Our range of quality products together with our professional and personal service ensures we can provide you with a wide range of architectural window and door products.">
	<meta name="keywords" content="bradnams, bunbury, windows, doors, Western Australia, Australia, aluminium, sea view, residential, prestige, commercial, screens">
@endsection

@section('head')
	<link href="{{ asset('/css/responsive-slider.min.css') }}" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="{{ asset('/plugins/flexslider/flexslider.css') }}" type="text/css" media="screen" />
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
	                <a href="/about" class="btn-more btn-more-orange hover-effect">Find Out More</a>            
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
					        	@if($brochure->icon)
					        		<i class="{!! $brochure->icon !!} icon-3x home-icon"></i>
					        	@endif
					        	<div class="headline"><h3>{!! $brochure->name !!}</h3></div>
					    		<div class="service service-blue">
					    			<div class="desc">
					                    <p class="hidden-xs">{!! $brochure->description !!}</p>
						                <a href="/uploads/{!! $brochure->file !!}" target="_blank" class="btn-more btn-more-orange btn-block hover-effect">Find Out More</a>            
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
				<div class="col-md-9 hidden-xs">
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
		        <div class="col-md-3 hidden-xs">
					@foreach($brochures as $brochure)
						@if(isset($brochure->rank))
							@if($brochure['rank'] == 4)
								<div class="headline"><h4>Featured Brochure</h4></div>
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
		        <div class="headline"><h2>Our Partners</h2></div>	
				<ul class="slides">
					<li>
		                <a href="http://www.alspec.com.au/" target="_blank">
		                    <img src="{{ asset('/img/clients/alspec_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/alspec.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
		            <li>
		                <a href="http://www.bradnams.com.au/" target="_blank">
		                    <img src="{{ asset('/img/clients/bradnams_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/bradnams.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
		            <li>
		                <a href="http://www.capral.com.au/" target="_blank">
		                    <img src="{{ asset('/img/clients/capral_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/capral.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
		            <li>
		                <a href="http://www.aneetawindows.com.au/home.asp" target="_blank">
		                    <img src="{{ asset('/img/clients/aneeta_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/aneeta.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
		            <li>
		                <a href="http://www.breezway.com.au/" target="_blank">
		                    <img src="{{ asset('/img/clients/breezway_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/breezway.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
		            <li>
		                <a href="http://www.centor.com.au/" target="_blank">
		                    <img src="{{ asset('/img/clients/centor_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/centor.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
		            <li>
		                <a href="http://www.austyle.com.au/" target="_blank">
		                    <img src="{{ asset('/img/clients/austyle_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/austyle.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
		            <li>
		                <a href="http://www.lockweb.com.au/en/site/lockweb/" target="_blank">
		                    <img src="{{ asset('/img/clients/lockwood_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/lockwood.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
		            <li>
		                <a href="http://coolingbros.com.au/" target="_blank">
		                    <img src="{{ asset('/img/clients/coolingbrothers_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/coolingbrothers.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
		            <li>
		                <a href="http://www.viridianglass.com/default.aspx" target="_blank">
		                    <img src="{{ asset('/img/clients/viridian_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/viridian.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
		            <li>
		                <a href="http://www.walshsglass.com.au/" target="_blank">
		                    <img src="{{ asset('/img/clients/walshglass_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/walshglass.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
		            <li>
		                <a href="http://www.awa.org.au/" target="_blank">
		                    <img src="{{ asset('/img/clients/awa_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/awa.png') }}" class="color-img" alt="" />
		                </a>
		            </li>
		            <li>
		                <a href="http://www.wers.net/wers-home" target="_blank">
		                    <img src="{{ asset('/img/clients/wer_grey.png') }}" alt="" /> 
		                    <img src="{{ asset('/img/clients/wer.png') }}" class="color-img" alt="" />
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
	    $(window).load(function() {
		  $('.flexslider').flexslider({
		    animation: "slide",
		    animationLoop: true,
		    itemWidth: 210,
		    itemMargin: 5
		  });
		});
	</script>
	<script>	
		$(document).ready(function(){	  
			$('.responsive-slider').responsiveSlider({		
				autoplay: true,		interval: 8000,		transitionTime: 500	  
			});	
		});	
	</script>
@endsection