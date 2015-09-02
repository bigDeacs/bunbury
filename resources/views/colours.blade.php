@extends('app')

@section('meta')
	<title>Available Colours</title>
	<meta name="description" content="Manufactured right here on Australia&#039;s Gold Coast, our windows and doors are as lovely to look at as they are to look through. You will find genuine quality in every inch of C-View windows and doors.">
	<meta name="keywords" content="c-view, windows, doors, Gold Coast, Brisbane, Queensland, Australia, aluminium, sea view, residential, prestige, commercial, screens">
@endsection

@section('head')
@endsection

@section('content')
	<!--=== Breadcrumbs ===-->
	<div class="breadcrumbs margin-bottom-20">
	    <div class="container">
	        <h1 class="pull-left">Available Colours</h1>
	        <ul class="pull-right breadcrumb hidden-xs">
	            <li><a href="/">Home</a></li>
	            <li class="active">Colours</li>
	        </ul>
	    </div><!--/container-->
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===-->
	<!--=== Content Part ===-->

<div class="container"> 	

	<div class="row"> 
       	<!-- Content Info -->        
        <div class="col-md-6 col-xs-12 col-md-push-6" style="margin-bottom: 15px;">
			@foreach($colours as $key => $colour)
				@if($key == 0)
					<img src="/uploads/{!! $colour->file !!}" id="colour_{!! $colour->id !!}" alt="" class="img-responsive colour" style="display:block;" />
					<h4 class="name" id="name_{!! $colour->id !!}" style="display:block;">{!! $colour->name !!}<small> - Paint Code: {!! $colour->code !!}</small></h4>
					@if($colour->description)
						{!! $colour->description !!}
					@endif
				@else
					<img src="/uploads/{!! $colour->file !!}" id="colour_{!! $colour->id !!}" alt="" class="img-responsive colour" style="display:none;" />
					<h4 class="name" id="name_{!! $colour->id !!}" style="display:none;">{!! $colour->name !!}<small> - Paint Code: {!! $colour->code !!}</small></h4>
					@if($colour->description)
						{!! $colour->description !!}
					@endif
				@endif
			@endforeach
        </div>

        <div class="col-md-6 col-xs-12 col-md-pull-6">
        	<div class="row"> 
        		<div class="headline col-md-12"><h3>Standard</h3></div>
				@foreach($colours as $colour)
					@if($colour->label->name == 'Standard')
						<div class="col-sm-3 col-xs-4" style="margin-bottom: 15px;">
							<a data-toggle="tooltip" title="{!! $colour->name !!}" onclick="changeColour({!! $colour->id !!})">
								<div style="box-shadow: 3px 3px 4px #888888;background-color:#{!! $colour->hex !!};height: 50px;"></div>
							</a>
						</div>
					@endif
				@endforeach
			</div>
			<hr />
			<!--<div class="row">
				<div class="headline col-md-12"><h3>Decorator</h3></div>
				@foreach($colours as $colour)
					@if($colour->label->name == 'Decorator')
						<div class="col-sm-3 col-xs-4" style="margin-bottom: 15px;">
							<a data-toggle="tooltip" title="{!! $colour->name !!}" onclick="changeColour({!! $colour->id !!})">
								<div style="box-shadow: 3px 3px 4px #888888;background-color:#{!! $colour->hex !!};height: 50px;"></div>
							</a>
						</div>
					@endif
				@endforeach
			</div>
			<hr />-->
			<a href="#" data-toggle="modal" data-target=".bs-pdf-modal-lg" class="btn btn-success btn-block hidden-xs" title="See Full Size Image">
				<i class="icon-book"></i> View Our Printable Colour Chart
			</a>
			<!-- PDF modal -->
			<div class="modal fade bs-pdf-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<iframe src="/uploads/1441156341-ColourList.pdf" width="100%" height="700"></iframe>
					</div>
				</div>
			</div>
        </div>

        <!-- End Content Info -->        

    </div><!--/row-->

    <div class="margin-bottom-20 clearfix"></div>    

	
	</div><!--/container-->	 

	<!--=== End Content Part ===-->
@endsection

@section('scripts')
	<script>	
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
		function changeColour(x) {	     
			var elems = document.getElementsByClassName('colour');
			for (var i=0;i<elems.length;i+=1){
			  elems[i].style.display = 'none';
			}
			var names = document.getElementsByClassName('name');
			for (var i=0;i<names.length;i+=1){
			  names[i].style.display = 'none';
			}
	        document.getElementById("colour_" + x).style.display = "block";
	        document.getElementById("name_" + x).style.display = "block";
	    }
	</script>
@endsection
