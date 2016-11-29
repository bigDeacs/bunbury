@extends('app')

@section('meta')
	<title>{!! $product['name'] !!}</title>
	<meta name="description" content="Manufactured right here on Australia&#039;s Gold Coast, our windows and doors are as lovely to look at as they are to look through. You will find genuine quality in every inch of C-View windows and doors.">
	<meta name="keywords" content="c-view, windows, doors, Gold Coast, Brisbane, Queensland, Australia, aluminium, sea view, residential, prestige, commercial, screens">
@endsection

@section('head')
	<link href="{{ asset('/css/rrssb.css') }}" rel="stylesheet" media="screen">
	<link href="{{ asset('/css/responsive-slider.min.css') }}" rel="stylesheet" media="screen">
	<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
@endsection

@section('content')
	<!--=== Breadcrumbs ===-->
	<div class="breadcrumbs margin-bottom-20">
	    <div class="container">
	        <h1 class="pull-left">{!! $product['name'] !!}</h1>
	        <ul class="pull-right breadcrumb hidden-xs">
	            <li><a href="/">Home</a></li>
	            <li><a href="/doors">Doors</a></li>
	            <li class="active">{!! $product['name'] !!}</li>
	        </ul>
	    </div><!--/container-->
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===-->
	<!--=== Content Part ===-->

<div class="container">

	<div class="row portfolio-item margin-bottom-20">
        <!-- Carousel -->
        <div class="col-md-7 col-xs-12">
            <!-- RESPONSIVE SLIDER - START -->
            @if(count($product->images) > 1)
				<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true" data-interval="5000" data-transitiontime="300">
				  <div class="slides" data-group="slides">
				    <ul>
			    		@foreach($product->images as $image)
				  			<li>
						        <div class="slide-body" data-group="slide">
						          <img class="img-responsive lightbox" src="/uploads/{!! $image->file !!}" alt="{!! $product['name'] !!}" />
						        </div>
					      	</li>
				  		@endforeach
				    </ul>
				  </div>
				  <a class="slider-control left" href="#" data-jump="prev"><i class="icon-angle-left"></i></a>
				  <a class="slider-control right" href="#" data-jump="next"><i class="icon-angle-right"></i></a>
				</div>
			@else
				<img class="img-responsive lightbox" src="/uploads/{!! $product->images()->first()->file !!}" alt="{!! $product['name'] !!}" />
			@endif
			<!-- RESPONSIVE SLIDER - END -->

			<!-- Buttons start here. Copy this ul to your document. -->
			<ul class="rrssb-buttons clearfix" style="margin-bottom:5px;">
				<li class="email">
					<a href="mailto:?subject=Check out this awesome product from Busselton Aluminium Windows&amp;body=http://www.busseltonaluminiumwindows.com.au/door/{!! $product->url !!}">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve"><g><path d="M20.111 26.147c-2.336 1.051-4.361 1.401-7.125 1.401c-6.462 0-12.146-4.633-12.146-12.265 c0-7.94 5.762-14.833 14.561-14.833c6.853 0 11.8 4.7 11.8 11.252c0 5.684-3.194 9.265-7.399 9.3 c-1.829 0-3.153-0.934-3.347-2.997h-0.077c-1.208 1.986-2.96 2.997-5.023 2.997c-2.532 0-4.361-1.868-4.361-5.062 c0-4.749 3.504-9.071 9.111-9.071c1.713 0 3.7 0.4 4.6 0.973l-1.169 7.203c-0.388 2.298-0.116 3.3 1 3.4 c1.673 0 3.773-2.102 3.773-6.58c0-5.061-3.27-8.994-9.303-8.994c-5.957 0-11.175 4.673-11.175 12.1 c0 6.5 4.2 10.2 10 10.201c1.986 0 4.089-0.43 5.646-1.245L20.111 26.147z M16.646 10.1 c-0.311-0.078-0.701-0.155-1.207-0.155c-2.571 0-4.595 2.53-4.595 5.529c0 1.5 0.7 2.4 1.9 2.4 c1.441 0 2.959-1.828 3.311-4.087L16.646 10.068z"/></g></svg>
						</span>
						<span class="text">email</span>
					</a>
				</li>
				<li class="facebook">
					<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.busseltonaluminiumwindows.com.au/door/{!! $product->url !!}" class="popup">
						<span class="icon">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
								<path d="M27.825,4.783c0-2.427-2.182-4.608-4.608-4.608H4.783c-2.422,0-4.608,2.182-4.608,4.608v18.434
									c0,2.427,2.181,4.608,4.608,4.608H14V17.379h-3.379v-4.608H14v-1.795c0-3.089,2.335-5.885,5.192-5.885h3.718v4.608h-3.726
									c-0.408,0-0.884,0.492-0.884,1.236v1.836h4.609v4.608h-4.609v10.446h4.916c2.422,0,4.608-2.188,4.608-4.608V4.783z"/>
							</svg>
						</span>
						<span class="text">facebook</span>
					</a>
				</li>
				<li class="twitter">
					<a href="http://twitter.com/home?status=Check out this awesome product from Busselton Aluminium Windows - http://www.busseltonaluminiumwindows.com.au/door/{!! $product->url !!}" class="popup">
						<span class="icon">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
							<path d="M24.253,8.756C24.689,17.08,18.297,24.182,9.97,24.62c-3.122,0.162-6.219-0.646-8.861-2.32
								c2.703,0.179,5.376-0.648,7.508-2.321c-2.072-0.247-3.818-1.661-4.489-3.638c0.801,0.128,1.62,0.076,2.399-0.155
								C4.045,15.72,2.215,13.6,2.115,11.077c0.688,0.275,1.426,0.407,2.168,0.386c-2.135-1.65-2.729-4.621-1.394-6.965
								C5.575,7.816,9.54,9.84,13.803,10.071c-0.842-2.739,0.694-5.64,3.434-6.482c2.018-0.623,4.212,0.044,5.546,1.683
								c1.186-0.213,2.318-0.662,3.329-1.317c-0.385,1.256-1.247,2.312-2.399,2.942c1.048-0.106,2.069-0.394,3.019-0.851
								C26.275,7.229,25.39,8.196,24.253,8.756z"/>
							</svg>
						</span>
						<span class="text">twitter</span>
					</a>
				</li>
				<li class="googleplus">
                        <!-- Replace href with your meta and URL information.  -->
                        <a href="https://plus.google.com/share?url=http://www.busseltonaluminiumwindows.com.au/door/{!! $product->url !!}" class="popup">
                            <span class="icon">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M14.703,15.854l-1.219-0.948c-0.372-0.308-0.88-0.715-0.88-1.459c0-0.748,0.508-1.223,0.95-1.663
                                                c1.42-1.119,2.839-2.309,2.839-4.817c0-2.58-1.621-3.937-2.399-4.581h2.097l2.202-1.383h-6.67c-1.83,0-4.467,0.433-6.398,2.027
                                                C3.768,4.287,3.059,6.018,3.059,7.576c0,2.634,2.022,5.328,5.604,5.328c0.339,0,0.71-0.033,1.083-0.068
                                                c-0.167,0.408-0.336,0.748-0.336,1.324c0,1.04,0.551,1.685,1.011,2.297c-1.524,0.104-4.37,0.273-6.467,1.562
                                                c-1.998,1.188-2.605,2.916-2.605,4.137c0,2.512,2.358,4.84,7.289,4.84c5.822,0,8.904-3.223,8.904-6.41
                                                c0.008-2.327-1.359-3.489-2.829-4.731H14.703z M10.269,11.951c-2.912,0-4.231-3.765-4.231-6.037c0-0.884,0.168-1.797,0.744-2.511
                                                c0.543-0.679,1.489-1.12,2.372-1.12c2.807,0,4.256,3.798,4.256,6.242c0,0.612-0.067,1.694-0.845,2.478
                                                c-0.537,0.55-1.438,0.948-2.295,0.951V11.951z M10.302,25.609c-3.621,0-5.957-1.732-5.957-4.142c0-2.408,2.165-3.223,2.911-3.492
                                                c1.421-0.479,3.25-0.545,3.555-0.545c0.338,0,0.52,0,0.766,0.034c2.574,1.838,3.706,2.757,3.706,4.479
                                                c-0.002,2.073-1.736,3.665-4.982,3.649L10.302,25.609z"/>
                                            <polygon points="23.254,11.89 23.254,8.521 21.569,8.521 21.569,11.89 18.202,11.89 18.202,13.604 21.569,13.604 21.569,17.004
                                                23.254,17.004 23.254,13.604 26.653,13.604 26.653,11.89      "/>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <span class="text">google+</span>
                        </a>
                    </li>
			</ul>
			<!-- Buttons end here -->

			<!-- Comment Box -->
			<div class="fb-comments hidden-xs" data-href="http://www.busseltonaluminiumwindows.com.au/door/{!! $product->url !!}" data-numposts="3" data-colorscheme="light" data-width="100%"></div>
        </div>

        <!-- End Carousel -->

       	<!-- Content Info -->
        <div class="col-md-5 col-xs-12">
			<div class="row">
				<div class="col-md-12 col-sm-6 col-xs-12">
					<h2>Description</h2>
					<p>{!! $product->description !!}</p>
				</div>
				<div class="col-md-12 col-sm-6 col-xs-12">
					<h2>Features</h2>
					<p>{!! $product->features !!}</p>
				</div>
				<div class="col-md-12 col-sm-6 col-xs-12">
					<h2>Options</h2>
					<p>{!! $product->options !!}</p>
				</div>
			</div>

			<div class="btn-group" role="group" style="100%">
				@if($product->brochure)
					<a href="#" data-toggle="modal" data-target=".bs-pdf-modal-lg" class="btn btn-success btn-block" title="See Full Size Image">
						<i class="icon-book"></i> View Size Chart
					</a>
				@endif
				@if($product->video)

						<a href="#" data-toggle="modal" data-target=".bs-video-modal-lg" class="btn btn-danger btn-block" title="See Full Size Image">
							<i class="icon-youtube-play"></i> View Video
						</a>
				@endif
			</div>
			<!--<p><a class="btn-u btn-u-large" href="#">VISIT THE PROJECT</a></p>-->
        </div>

        <!-- End Content Info -->

    </div><!--/row-->

    <div class="margin-bottom-20 clearfix"></div>

	<!-- Recent Works -->
	@if(count($products) > 0)
	    <div class="headline"><h2>Our Other Products</h2></div>
	    	<div class="row">
				@foreach($products as $product)
			        <div class="col-md-3 col-xs-6">
			            <div class="thumbnails thumbnail-style thumbnail-kenburn">
			            	<div class="thumbnail-img">
			                    <div class="overflow-hidden">
			                        <a href="{!! $product->url !!}">
			                        	<img class="img-responsive" src="/uploads/{!! $product->image !!}" alt="{!! $product->name !!}" />
			                        </a>
			                    </div>
			                    <a class="btn-more hover-effect hidden-xs" href="{!! $product->url !!}">read more +</a>
			                </div>
			                <div class="caption">
			                    <h3 style="min-height: 66px;"><a class="hover-effect" href="{!! $product->url !!}">{!! $product->name !!}</a></h3>
			                </div>
			            </div>
			        </div>
			    @endforeach
			</div><!--/row-->
		</div><!--/container-->
	@endif

	<!--=== End Content Part ===-->
	@if($product->brochure)
			<!-- PDF modal -->
			<div class="modal fade bs-pdf-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<iframe src="/uploads/{!! $product->brochure->file !!}" width="100%" height="700px"></iframe>
					</div>
				</div>
			</div>
	@endif
	@if($product->video)
		<!-- PDF modal -->
			<div class="modal fade bs-video-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
				        <div class="embed-container">
				        	<iframe src='{!! $product->video !!}' width="500" height="281" frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				        </div>
					</div>
				</div>
			</div>
	@endif

@endsection

@section('scripts')
	<script src="{{ asset('/js/jquery.event.move.js') }}"></script>
	<script src="{{ asset('/js/rrssb.min.js') }}"></script>
	<script src="{{ asset('/js/responsive-slider.min.js') }}"></script>
	<script>
		$(document).ready(function(){
			$('.responsive-slider').responsiveSlider({
				autoplay: true,		interval: 8000,		transitionTime: 500
			});
		});
	</script>
@endsection
