<!DOCTYPE html>
<!--[if lt IE 7 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie9 lte9"><![endif]-->
<!--[if IE 10 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie10 lte10"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="vn">
<head>
	<title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="content-language" content="vi"/>
    <meta name="description" content="@yield('site_description')"/>
    <meta name="keywords" content="@yield('site_keywords')"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>   
    <meta property="article:author" content="https://www.facebook.com/matsunoi.vn"/>   
    <link rel="canonical" href="{{ url()->current() }}"/>        
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('site_description')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="matsunoi.vn" />
    <?php $socialImage = isset($socialImage) ? $socialImage : $settingArr['banner']; ?>
    <meta property="og:image" content="{{ Helper::showImage($socialImage) }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="@yield('site_description')" />
    <meta name="twitter:title" content="@yield('title')" />     
    <meta name="twitter:image" content="{{ Helper::showImage($socialImage) }}" />
	<link rel="icon" href="{{ URL::asset('public/assets/favicon.ico') }}" type="image/x-icon">
	<!-- ===== Style CSS ===== -->

	<!-- ===== Style CSS ===== -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/css/style.css') }}">
	<!-- ===== Responsive CSS ===== -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/css/responsive.css') }}">
  	<!-- HTML5 Shim and Respond.js" IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js" doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<link href='css/animations-ie-fix.css' rel='stylesheet'>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js') }}"/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<header class="header">
		<div class="header-top">	
			<div class="container">
				<div class="row">
					<div class="block-logo col-sm-3 col-xs-12">
						<h1 class="hide">Matsunoi Hotel</h1>
						<a href="{!! route('home') !!}" title="{!! __('text.home') !!}"><img src="{{ URL::asset('public/assets/images/logo.png') }}" alt="Logo MATSUNOI HOTEL"></a>
					</div><!-- /block-logo -->
					<div class="block-logo2 col-sm-6 col-xs-12">
						<a href="{!! route('home') !!}" title="ADDRESS MATSUNOI HOTEL"><img src="{{ URL::asset('public/assets/images/logo2.png') }}" alt="ADDRESS MATSUNOI HOTEL"></a>
					</div><!-- /block-logo2 -->
					<div class="block-lang-phone col-sm-3 col-xs-12">
						<div class="language">
							<ul>
								<li><a href="{!! route('home') !!}" title="Japanese"><img src="{{ URL::asset('public/assets/images/japan.png') }}" alt="Japanese"></a></li>
								<li><a href="{!! route('home', [ 'locale' => 'en'] ) !!}" title="English"><img src="{{ URL::asset('public/assets/images/en-icon.gif') }}" alt="English"></a></li>
								<li><a href="{!! route('home', [ 'locale' => 'vn'] ) !!}" title="Vietnamese"><img src="{{ URL::asset('public/assets/images/vietnam.png') }}" alt="Vietnamese"></a></li>
							</ul>
						</div>
						<p class="phone">
							<i class="fa fa-phone"></i>02838246068
						</p>
					</div><!-- /block-lang-phone -->
				</div>
			</div>
		</div><!-- /header-top -->
		<div class="menu fixed">
			<div class="container">
				<nav>
					<ul class="nav-menu">
						<li @if( \Request::route()->getName() == 'home' ) class="active" @endif><a href="{!! route('home') !!}" title="{!! __('text.home') !!}">{!! __('text.home') !!}</a></li>
						<li @if( \Request::route()->getName() == 'nearby' ) class="active" @endif><a href="{!! route('nearby', ['locale' => $locale]) !!}" title="{!! __('text.nearby') !!}">{!! __('text.nearby') !!}</a></li>
						<li @if( \Request::route()->getName() == 'gallery' ) class="active" @endif><a href="{!! route('gallery', ['locale' => $locale]) !!}" title="{!! __('text.gallery') !!}">{!! __('text.gallery') !!}</a></li>
						<li @if( \Request::route()->getName() == 'services' ) class="active" @endif><a href="{!! route('services', ['locale' => $locale]) !!}" title="{!! __('text.services') !!}">{!! __('text.services') !!}</a></li>
					</ul>
				</nav>
			</div>
		</div><!-- /menu -->
	</header><!-- /header -->

	@yield('content')


	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 widget widget-link">
					<div class="block-title">
						<span>{!! __('text.connected_links') !!}</span>
					</div>
					<div class="block-content">
						<ul>
							<li><a href="#" title="The title of this link is writen here">The title of this link is writen here</a></li>
							<li><a href="#" title="The title of this link is writen here">The title of this link is writen here</a></li>
							<li><a href="#" title="The title of this link is writen here">The title of this link is writen here</a></li>
							<li><a href="#" title="The title of this link is writen here">The title of this link is writen here</a></li>
						</ul>
					</div>
				</div><!-- widget -->
				<div class="col-sm-4 widget widget-social">
					<div class="block-title">
						<span>{!! __('text.social_contacts') !!}</span>
					</div>
					<div class="block-content">
						<ul>
							<li class="twitter"><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li class="facebook"><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li class="google-plus"><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li class="skype"><a href="#" title="Skype"><i class="fa fa-skype"></i></a></li>
						</ul>
					</div>
				</div><!-- widget -->
				<div class="col-sm-4 widget widget-address">
					<div class="block-title">
						<span>{!! __('text.our_information') !!}</span>
					</div>
					<div class="block-content">
						<ul>
							<li><i class="fa fa-map-marker"></i> 24/22 Dong Du, Ben Nghe Ward, District 1, HCMC</li>
							<li><i class="fa fa-phone"></i> 02838246068</li>
							<li><i class="fa fa-envelope"></i> info@matsunoi.vn</li>
							<li><i class="fa fa-location-arrow"></i> 02838246069</li>
						</ul>
					</div>
				</div><!-- widget -->
			</div>
		</div>	
	</footer><!-- footer -->

	<a id="return-to-top" class="td-scroll-up" href="javascript:void(0)">
  		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</a><!-- return to top -->

	
	<div class="modal fade ModalSusscess" id="ModalSusscess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-times-circle"></i>
					</button>
					<h4 class="modal-title" id="myModalLabel">{!! __('text.reservation') !!}</h4>
				</div>
				<div class="modal-body">
					<form action="#" method="get" class="block-cus-info">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
						            <div class='input-group date datetimepicker' id='datetimepicker6'>
						                <input type='text' class="form-control" placeholder="{!! __('text.check_in') !!}" />
						                <span class="input-group-addon">
						                    <span class="glyphicon glyphicon-calendar"></span>
						                </span>
						            </div>
						        </div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
						            <div class='input-group date datetimepicker' id='datetimepicker7'>
						                <input type='text' class="form-control" placeholder="{!! __('text.check_out') !!}" />
						                <span class="input-group-addon">
						                    <span class="glyphicon glyphicon-calendar"></span>
						                </span>
						            </div>
						        </div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
						            <select name="" class="form-control" data-width="100%">
										<option value="">{!! __('text.number_of_guests') !!}</option>
									</select>
						        </div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
					             	<select name="" class="form-control" data-width="100%">
										<option value="">{!! __('text.room_type') !!}</option>
									</select>
						        </div>
							</div>
						</div>
						<div class="group-btn text-center">
							<a href="#" class="btn btn-check btn-1e">{!! __('text.check') !!}</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!-- /#ModalSusscess -->

	<div class="modal fade ModalreCheck" id="ModalreCheck" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-times-circle"></i>
					</button>
					<h4 class="modal-title" id="myModalLabel">{!! __('text.sorry_out_of_room') !!}</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						{!! $contentList[9] !!}
					</div>
					<div class="group-btn text-center">
						<a href="#" class="btn btn-checkagain btn-2e">{!! __('text.check_again') !!}</a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /#ModalreCheck -->

	<div class="modal fade ModalSusscess" id="arrival-airport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-times-circle"></i>
					</button>
					<h4 class="modal-title" id="myModalLabel">{!! __('text.airport') !!}</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						{!! $contentList[7] !!}
					</div>
				</div>
			</div>
		</div>
	</div><!-- /#ModalreCheck -->

	<div class="modal fade ModalSusscess" id="at-taxi-stand" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-times-circle"></i>
					</button>
					<h4 class="modal-title" id="myModalLabel">{!! __('text.at_taxi_stand') !!}</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						{!! $contentList[8] !!}
					</div>
				</div>
			</div>
		</div>
	</div><!-- /#ModalreCheck -->

	<!-- ===== JS ===== -->
	<script src="{{ URL::asset('public/assets/js/jquery.min.js') }}"></script>
	<script src="{{ URL::asset('public/assets/js/moment.js') }}"></script>
	<!-- ===== JS Bootstrap ===== -->
	<script src="{{ URL::asset('public/assets/lib/bootstrap/bootstrap.min.js') }}"></script>
	<!-- datetimepicker -->
	<script src="{{ URL::asset('public/assets/lib/datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
	<!-- carousel -->
	<script src="{{ URL::asset('public/assets/lib/carousel/owl.carousel.min.js') }}"></script>
	<!-- Select -->
    <script src="{{ URL::asset('public/assets/lib/select2/js/select2.min.js') }}"></script>
	<!-- sticky -->
    <script src="{{ URL::asset('public/assets/lib/sticky/jquery.sticky.js') }}"></script>
    <!-- Js Common -->
	<script src="{{ URL::asset('public/assets/js/common.js') }}"></script>

	<script type="text/javascript">
        $(function () {
	        $("#datetimepicker6").on("dp.change", function (e) {
	            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
	        });
	        $("#datetimepicker7").on("dp.change", function (e) {
	            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
	        });
	    });
    </script>
    @yield('js')
<div class="Recipepod">
 	<div itemscope itemtype="http://schema.org/Recipe">
	    <span itemprop="name">@yield('title')</span>
	    <span itemprop="description">@yield('site_description')</span>
	    <img itemprop="image" src="{{ Helper::showImage($socialImage) }}" alt="@yield('title')">
	   
	    <div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
	        <span itemprop="ratingValue">9</span>/<span itemprop="bestRating">10</span>
	        <span itemprop="reviewCount">199</span> bài đánh giá
	    </div>
	  
	</div>
</div>

</body>
</html>