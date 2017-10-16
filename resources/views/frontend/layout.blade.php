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
	
	@include('frontend.partials.header')

	@yield('content')

	@include('frontend.partials.footer')

	<a id="return-to-top" class="td-scroll-up" href="javascript:void(0)">
  		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</a><!-- return to top -->

		

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
	        $("#check_in").on("dp.change", function (e) {
	            $('#check_out').data("DateTimePicker").minDate(e.date);
	        });
	        $("#check_out").on("dp.change", function (e) {
	            $('#check_in').data("DateTimePicker").maxDate(e.date);
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