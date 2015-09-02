@extends('app')

@section('meta')
	<title>About Us</title>
	<meta name="description" content="Manufactured right here on Australia&#039;s Gold Coast, our windows and doors are as lovely to look at as they are to look through. You will find genuine quality in every inch of C-View windows and doors.">
	<meta name="keywords" content="c-view, windows, doors, Gold Coast, Brisbane, Queensland, Australia, aluminium, sea view, residential, prestige, commercial, screens">
@endsection

@section('head')
	<link href="{{ asset('/css/pages/portfolio-v2.css') }}" rel="stylesheet" media="screen">
@endsection

@section('content')
	<!--=== Breadcrumbs ===-->
	<div class="breadcrumbs margin-bottom-20">
	    <div class="container">
	        <h1 class="pull-left">About Us</h1>
	        <ul class="pull-right breadcrumb hidden-xs">
	            <li><a href="/">Home</a></li>
	            <li class="active">About</li>
	        </ul>
	    </div><!--/container-->
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===-->
	<!--=== Content Part ===-->
<div class="container">
    <div class="margin-bottom-50">
        <img class="img-responsive" src="{{ asset('/img/about_banner.jpg') }}" alt="">
    </div>

    <div class="tag-box tag-box-v2">
        <h2>About Bradnams Bunbury</h2>
        <p>When you look at Bradnams Bunbury, you will see more than just windows, doors, and other products. You will see a company with years of history backed by industry experience. Bradnams Bunbury proudly serves Bunbury and surrounding regions. We are a window manufacturer with a deep commitment to helping you find the right products with the least amount of frustration. Bradnams Bunbury's windows, doors, and other products are made to measure. Although our products are made to measure, our commitment to quality cannot be measured. We take pride in creating a better view for you. At Bradnam’s Bunbury, you will see the dedication to service of a highly-skilled team of local professionals. Our range of quality products together with our professional and personal service ensures we can provide you with a wide range of architectural window and door products. Contact us today!</p>
    </div>

    <div class="margin-bottom-20 clearfix"></div>

    <div class="row">
        <!--Accordion--> 
        <div class="col-md-12 md-margin-bottom-40">
            <div id="accordion-1" class="panel-group acc-v1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-One" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-ok"></i> No Obligation Quotes
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse in" id="collapse-One">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img alt="" src="{{ asset('/img/about/quote.jpg') }}" class="img-responsive">
                                </div>
                                <div class="col-md-8">
                                    Bradnams reps are courteous, knowledgeable and they value your time. 
									Once our rep knows exactly what you need for your project, they
									will write up a full quote then and there. 
									<br /><br />Get the information you need to make an informed decision about windows and doors for your 
									Bunbruy home or office. Contact us today!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-Two" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-ok"></i> Competitively Short Lead Times
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-Two">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8">
                                    Don't want to wait? We don't want you to either. We want our customers to be excited about every 
									aspect of doing business with Bradnams Bunbury. That's why we run a tight and efficient schedule. 
									<br /><br />Bunbury homes and businesses deserve fast and efficient service. We beat the competition and 
									provide excellent service and value quickly.
                                </div>
                                <div class="col-md-4">
                                    <img alt="" src="{{ asset('/img/about/time.jpg') }}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-Three" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-ok"></i> Unique and Professional Quality
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-Three">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img alt="" src="{{ asset('/img/about/quality.jpg') }}" class="img-responsive">
                                </div>
								<div class="col-md-8">
									Many window and door companies operate essentially as middlemen, buying from the manufacturer, 
									marking-up and warehousing on a shelf until bringing the window to a customer's home or office. 
									<br /><br />At Bradnams Bunbury, we are the manufacturer, making both home and office windows right here in our facility. 
									This allows us complete quality control, and gives us the ability to make sure the glass delivered and 
									installed at your home or business meets the highest standard.
								</div>
							</div>
                        </div>
                    </div>
                </div>
				
				<div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-Four" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-ok"></i> Going 'The Extra Mile'
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-Four">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8">
                                    Honest, fast and accurate quotes...Dedication to the lowest lead times...Highest quality standards. 
									Though we are always looking for ways to show more dedication to our customers, 
									we have accomplished a trifecta of loyalty, service and standards. 
									<br /><br />Think of us as the window and door company that wants Bunbury to shine through your home or office.
                                </div>
                                <div class="col-md-4">
                                    <img alt="" src="{{ asset('/img/about/extra.jpg') }}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Accordion--> 

        <!--Testimonials
        <div class="col-md-5 hidden-xs">
            <div class="carousel slide testimonials testimonials-v1" id="testimonials-1">
                <div class="carousel-inner">
                    <div class="item active">
                        <p>C-View Windows has always looked after My Vue homes. Their product is second to none, cost efficient and always on time with great service. Our Customers always mention how good the windows and doors look, especially the gas strut windows.</p>
                        <div class="testimonial-info">
                            <span class="testimonial-author">
                                <a href="http://myvue.com.au/" target="_blank">My Vue Pty Ltd </a>
                                <em>Client</em>
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-arrow">
                    <a data-slide="prev" href="#testimonials-1" class="left carousel-control">
                        <i class="icon-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#testimonials-1" class="right carousel-control">
                        <i class="icon-angle-right"></i>
                    </a>
                </div>
            </div>            
        </div>--> 
        <!--End Testimonials--> 
    </div>

    <div class="margin-bottom-50"></div>
</div><!--/container-->		
<!--=== End Content Part ===-->

@endsection

@section('scripts')
@endsection