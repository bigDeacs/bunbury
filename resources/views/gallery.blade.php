@extends('app')

@section('meta')
	<title>Showcase</title>
	<meta name="description" content="Manufactured right here on Australia&#039;s Gold Coast, our windows and doors are as lovely to look at as they are to look through. You will find genuine quality in every inch of C-View windows and doors.">
	<meta name="keywords" content="c-view, windows, doors, Gold Coast, Brisbane, Queensland, Australia, aluminium, sea view, residential, prestige, commercial, screens">
@endsection

@section('head')
	<link href="{{ asset('/css/pages/portfolio-v2.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/fancybox.css') }}" type="text/css" media="screen" />
@endsection

@section('content')
	<!--=== Breadcrumbs ===-->
	<div class="breadcrumbs margin-bottom-20">
	    <div class="container">
	        <h1 class="pull-left">Showcase</h1>
	        <ul class="pull-right breadcrumb hidden-xs">
	            <li><a href="/">Home</a></li>
	            <li class="active">Showcase</li>
	        </ul>
	    </div><!--/container-->
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===-->
	<!--=== Content Part ===-->
    <div class="container">
    <div class="row">
        <div class="sorting-block">
            <ul class="sorting-nav sorting-nav-v1 text-center">
                <li class="filter" data-filter="all" onclick="changeGallery('all')">All</li>
                @foreach($labels as $label)
                    <li class="filter" data-filter="{!! camel_case($label->name) !!}" onclick="changeGallery('{!! camel_case($label->name) !!}')">{!! $label->name !!}</li>
                @endforeach
            </ul>

            <ul class="row sorting-grid">
                @foreach($images as $image)
                    <li class="col-md-3 col-sm-6 col-xs-12 mix {!! camel_case($image->label['name']) !!}" data-cat="{!! camel_case($image->label['name']) !!}">
                        <a href="/uploads/{!! $image->file !!}" target="_blank" class="fancybox {!! camel_case($image->label['name']) !!}" rel="gallery0" title="{!! $image->description !!}">
                            <div class="img-binding">
                                <img class="img-responsive" src="/uploads/{!! $image->file !!}" alt="alt" style="position:absolute;">
                            </div>
                            <span class="sorting-cover" style="min-height: 66px;">
                                <p style="font-size: 16px; text-align:center;">{!! $image->name !!}</p>
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="clearfix"></div>
        </div><!-- End Portfolio Sorting Blocks -->

    </div><!--/row-->

    <!-- End Our Clients -->
</div><!--/container-->
<!--=== End Content Part ===-->

@endsection

@section('scripts')
    <script src="{{ asset('/plugins/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('/js/pages/portfolio.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/fancybox.js') }}"></script>
    <script type="text/javascript">
        function changeGallery(x) {
            @foreach($labels as $key => $label)
                if(x == '{{ camel_case($label->name) }}') {
                    var elems = document.getElementsByClassName('{{ camel_case($label->name) }}');
                    for (var i = 0 ; i < elems.length; i++){
                      elems[i].setAttribute("rel", "gallery{{ $key + 1 }}");
                    }
                } else
            @endforeach
            {
                var elems = document.getElementsByClassName('fancybox');
                for (var i = 0 ; i < elems.length; i++){
                  elems[i].setAttribute("rel", "gallery0");
                }
            }
        }
    </script>




    <script>
        function allGroup() {
            var list = document.getElementsByClassName("All");
            for (var i = 0; i < list.length; i++) {
                list[i].rel = "gallery0";
            }
        }
        @foreach($labels as $key => $label)
            function {{ camel_case($label->name) }}Group() {
                var list = document.getElementsByClassName("{{ camel_case($label->name) }}");
                for (var i = 0; i < list.length; i++) {
                    list[i].rel = "gallery{{ $key + 1 }}";
                }
            }
        @endforeach
    </script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                closeBtn    : true,
                closeClick  : false,
                scrolling   : "auto",
                openEffect  : "elastic",
                closeEffect : "elastic",
                beforeShow: function(){
                    $("body").css({"overflow-y":"hidden"});
                },
                afterClose: function(){
                    $("body").css({"overflow-y":"visible"});
                },
                helpers : {
                    title : {
                        type : 'inside'
                    },
                    media: {},
                overlay : {
                    opacity: 0.5,
                    css : {
                        "background-color" : "#000",
                        "z-index"          : "1000"
                    }
                }
               }
            });
        });
    </script>
    <script>
        jQuery(document).ready(function() { App.init(); Portfolio.init(); });
    </script>
@endsection
