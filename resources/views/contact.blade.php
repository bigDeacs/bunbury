@extends('app')

@section('meta')
    <title>Contact Us</title>
    <meta name="description" content="Manufactured right here on Australia&#039;s Gold Coast, our windows and doors are as lovely to look at as they are to look through. You will find genuine quality in every inch of C-View windows and doors.">
    <meta name="keywords" content="c-view, windows, doors, Gold Coast, Brisbane, Queensland, Australia, aluminium, sea view, residential, prestige, commercial, screens">
@endsection

@section('head')
    <link href="{{ asset('/css/pages/portfolio-v2.css') }}" rel="stylesheet" media="screen">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style>
        #recaptcha_table input[type="text"], #recaptcha_table select{
            display: inline !important;;  
        }  
    </style>
@endsection

@section('content')
    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs margin-bottom-20">
        <div class="container">
            <h1 class="pull-left">Contact Us</h1>
            <ul class="pull-right breadcrumb hidden-xs">
                <li><a href="/">Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->
    <!--=== Content Part ===-->
    <div class="container">
    <div class="row margin-bottom-30">
        <div class="col-md-8 mb-margin-bottom-30">
            @if(isset($sent))
                <div class="alert alert-success" role="alert">
                  <span>
                    <p>Your message was sent successfully! We will be in touch as soon as we can.</p>
                  </span>
                </div>
            @else
                <div class="headline"><h3>Enter your details and we will get back to you</h3></div>
                {!! Form::open(['route' => 'contactRequest']) !!}
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                <label class="control-label" for="name">Name:</label>
                                {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'required' => 'required']) !!}
                                {!! errors_for('name', $errors) !!}
                            </div>
                            <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                                <label class="control-label" for="email">Email Address:</label>
                                {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control', 'required' => 'required']) !!}
                                {!! errors_for('email', $errors) !!}
                            </div>
                            <div class="form-group {!! $errors->has('phone') ? 'has-error' : '' !!}">
                                <label class="control-label" for="phone">Phone Number:</label>
                                {!! Form::tel('phone', null, ['id' => 'phone', 'class' => 'form-control', 'required' => 'required', 'pattern' => '(^13((\ )?\d){4}$)|(^1[38]00((\ )?\d){6}$)|(^(((\(0[23478]\))|(0[23478]))(\ )?)?\d((\ )?\d){7}$)']) !!}
                                {!! errors_for('phone', $errors) !!}
                            </div>
                            <div class="form-group {!! $errors->has('info') ? 'has-error' : '' !!}">
                                <label class="control-label" for="info">Message:</label>
                                {!! Form::textarea('info', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                {!! errors_for('info', $errors) !!}
                            </div>
                            <div class="form-group">
                                <button class="g-recaptcha" data-sitekey="6LcB7REUAAAAAGDOwd5k3sXEb-imlfIUjFmP3859" data-callback="YourOnSubmitFn">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                {!! Form::submit('Submit', ['class' => 'btn-u btn-block']) !!}
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            @endif
            <br />

        </div><!--/col-md-9-->


        <div class="col-md-4">
            <!-- Contacts -->
            <div class="headline"><h4>Busselton</h4></div>
            <ul class="list-unstyled who margin-bottom-30">
                @if($brand->address)<li><i class="icon-home"></i> {!! $brand->address !!}</li>@endif
                @if($brand->phone)<li><i class="icon-phone-sign"></i> {!! $brand->phone !!}</li>@endif
                @if($brand->fax)<li><i class="icon-print"></i> {!! $brand->fax !!}</li>@endif
                @if($brand->email)<li><i class="icon-envelope-alt"></i> <a href="mailto:{!! $brand->email !!}" class="">{!! $brand->email !!}</a></li>@endif
            </ul>
            @if(date('N') == 6 || date('N') == 7)
                <span style="font-weight:bold;color:red;">Closed Now</span>
            @elseif(date('N') == 5)
              @if(date('H:i') < '07:30' || date('H:i') > '14:00')
                  <span style="font-weight:bold;color:red;">Closed Now</span>
              @else
                  <span style="font-weight:bold;color:green;">Open Now</span>
              @endif
            @else
                @if(date('H:i') < '07:00' || date('H:i') > '16:30')
                    <span style="font-weight:bold;color:red;">Closed Now</span>
                @else
                    <span style="font-weight:bold;color:green;">Open Now</span>
                @endif
            @endif

            <ul class="list-unstyled margin-bottom-30">
                <li><strong>Monday-Thursday:</strong> 7:00am to 4:30pm</li>
                <li><strong>Friday:</strong> 7:00am to 2pm</li>
                <li><strong>Saturday-Sunday:</strong> Closed</li>
            </ul>

            <div class="headline"><h4>Bunbury</h4></div>
            <ul class="list-unstyled who margin-bottom-30">
                <li><i class="icon-home"></i> 9A Stuart St, Bunbury, WA, 6230</li>
                <li><i class="icon-phone-sign"></i> (08) 9791 9737</li>
                <li><i class="icon-envelope-alt"></i> <a href="mailto:sales@bunburywindows.com.au" class="">sales@bunburywindows.com.au</a></li>
            </ul>
            @if(date('N') == 6 || date('N') == 7)
                <span style="font-weight:bold;color:red;">Closed Now</span>
            @elseif(date('N') == 5)
              @if(date('H:i') < '09:00' || date('H:i') > '14:00')
                  <span style="font-weight:bold;color:red;">Closed Now</span>
              @else
                  <span style="font-weight:bold;color:green;">Open Now</span>
              @endif
            @else
                @if(date('H:i') < '09:00' || date('H:i') > '16:00')
                    <span style="font-weight:bold;color:red;">Closed Now</span>
                @else
                    <span style="font-weight:bold;color:green;">Open Now</span>
                @endif
            @endif

            <ul class="list-unstyled margin-bottom-30">
                <li><strong>Monday-Thursday:</strong> 9:00am to 4pm</li>
                <li><strong>Friday:</strong> 9:00am to 2pm</li>
                <li><strong>Saturday-Sunday:</strong> Closed</li>
            </ul>

            <!-- Google Map
            <div class="headline hidden-xs"><h4>Our office location</h4></div>
            <iframe src="https://mapsengine.google.com/maps/d/embed?mid=z_yXRxSDstEA.kABQ9eKYROZY" class="hidden-xs" width="100%" height="auto" style="min-height:200px;"></iframe>
            -->
            <!---/map-->
            <!-- End Google Map -->

            <!-- Service Area -->
            <div class="headline hidden-xs"><h4>Our Office Location</h4></div>
            <iframe src="https://www.google.com/maps/d/embed?mid=1bLgPwANgNG1Yg7bkD1m6UWHoJdg" class="hidden-xs" width="100%" height="auto" style="min-height:200px;"></iframe>

        </div><!--/col-md-3-->
    </div><!--/row-->

    <!-- End Our Clients -->
</div><!--/container-->
<!--=== End Content Part ===-->

@endsection

@section('scripts')
    <script src="{{ asset('/plugins/gmap/gmap.min.js') }}"></script>
@endsection
