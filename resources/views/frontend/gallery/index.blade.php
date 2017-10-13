@extends('frontend.layout')

@include('frontend.partials.meta')
@section('content')
<section class="wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-push-6">
				<div class="block-btn-fix">
					<div class="block-content fixed-res">
						<a class="btn btn-reservation btn-1e" href="#" data-toggle="modal" data-target="#ModalSusscess">{!! __('text.reservation') !!}</a>
					</div>
				</div><!-- block-btn-fix -->
			</div><!-- col-sm-6 -->
			<div class="col-sm-6 col-sm-pull-6">
				<div class="block-breadcrumb">
					<div class="container">
						<ul class="breadcrumb">
							<li><a href="{!! route('home', ['locale' => $locale] ) !!}" title="{!! __('text.home') !!}">{!! __('text.home') !!}</a></li>
							<li class="active">{!! __('text.gallery') !!}</li>
						</ul>
					</div>
				</div><!-- /block-breadcrumb -->
			</div><!-- col-sm-6 -->
			<div class="col-sm-9 col-sm-push-3 main-content">
				<div class="content">
					<div class="block-gallary">
                        <div class="bxslider">
                            <div class="item">
                            	<a href="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" data-lightbox="roadtrip">
                                	<img src="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item">
                            	<a href="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" data-lightbox="roadtrip">
                                	<img src="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item">
                            	<a href="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" data-lightbox="roadtrip">
                                	<img src="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item">
                            	<a href="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" data-lightbox="roadtrip">
                                	<img src="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item">
                            	<a href="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" data-lightbox="roadtrip">
                                	<img src="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item">
                            	<a href="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" data-lightbox="roadtrip">
                                	<img src="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item">
                            	<a href="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" data-lightbox="roadtrip">
                                	<img src="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item">
                            	<a href="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" data-lightbox="roadtrip">
                                	<img src="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item">
                            	<a href="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" data-lightbox="roadtrip">
                                	<img src="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item">
                            	<a href="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" data-lightbox="roadtrip">
                                	<img src="{{ URL::asset('public/assets/images/gallary/large.jpg') }}" alt="#" />
                                </a>
                            </div>
                        </div><!-- /bxslider -->
                        <div class="gallary-thumb">
                            <div id="gallery_01" class="thumb-img">
                                <div class="item">
                                    <a href="#" data-slide-index="0">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb1.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" data-slide-index="1">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb2.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" data-slide-index="2">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb3.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" data-slide-index="3">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb4.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" data-slide-index="4">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb5.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" data-slide-index="5">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb6.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" data-slide-index="6">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb1.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" data-slide-index="7">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb2.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" data-slide-index="8">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb3.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" data-slide-index="9">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb4.jpg') }}" alt="#" />
                                    </a>
                                </div>
                            </div>
                        </div><!-- /gallary-thumb -->
					</div><!-- /block-gallary" -->
				</div>
			</div><!-- col-sm-9 -->
			<div class="col-sm-3 col-sm-pull-9 left-sidebar">
				<div class="box-sidebar">
					<div class="box-module box-link">
						<div class="box-title">
							<h2 class="title">{!! __('text.our_branches') !!}</h2>
						</div>
						<div class="box-content">
							<ul>
								<li class="active">
									<a href="{!! route('home') !!}" title="MATSUNOI VIETNAM">
										<span class="image"><img src="{{ URL::asset('public/assets/images/icon/cityscape.png') }}" alt=""></span>
										<span class="text">HCMC</span>
									</a>
								</li>								
								<li>
									<a href="http://matsunoi.com" target="_blank" title="MATSUNOI JAPAN">
										<span class="image"><img src="{{ URL::asset('public/assets/images/icon/tokyo-tower.png') }}" alt=""></span>
										<span class="text">Our country Japan</span>
									</a>
								</li>
							</ul>
						</div>
					</div><!-- box-link -->
					<div class="box-module box-info-sb">
						<div class="box-title">
							<h2 class="title">{!! __('text.hotel_information') !!}</h2>
						</div>
						<div class="box-content">
							{!! $contentList[1] !!}
						</div>
					</div><!-- box-link -->
					<div class="box-module box-album-list">
						<div class="box-title">
							<h2 class="title">
								<i class="fa fa-picture-o"></i>
								ALBUM LIST
							</h2>
						</div>
						<div class="box-content">
							<ul>
								<li><a href="#" title="HOTEL ROOMS" class="active">HOTEL ROOMS</a></li>
								<li><a href="#" title="HOTEL ROOMS">SERVICES</a></li>
								<li><a href="#" title="HOTEL ROOMS">HOTEL ROOMS</a></li>
								<li><a href="#" title="HOTEL ROOMS">STAFFS</a></li>
								<li><a href="#" title="HOTEL ROOMS">VACATIONS</a></li>
								<li><a href="#" title="HOTEL ROOMS">OUTDOOR VIEWS</a></li>
								<li><a href="#" title="HOTEL ROOMS">HOTEL ROOMS</a></li>
								<li><a href="#" title="HOTEL ROOMS">SERVICES</a></li>
								<li><a href="#" title="HOTEL ROOMS">HOTEL ROOMS</a></li>
								<li><a href="#" title="HOTEL ROOMS">STAFFS</a></li>
								<li><a href="#" title="HOTEL ROOMS">VACATIONS</a></li>
								<li><a href="#" title="HOTEL ROOMS">OUTDOOR VIEWS</a></li>
							</ul>
						</div>
					</div><!-- box-link -->
				</div>
			</div><!-- col-sm-3 -->
		</div>
	</div>		
</section><!-- /wrapper-->
@stop
@section('js')
<script src="{{ URL::asset('public/assets/lib/bxslider/bxslider.min.js') }}"></script>
<!-- Js lightbox -->
<script src="{{ URL::asset('public/assets/lib/lightbox/js/lightbox.js') }}"></script>

<script>
	$(document).ready(function () {
    	lightbox.option({
			'resizeDuration': 700,
			'wrapAround': true,
			'showImageNumberLabel': false,
			'fadeDuration': 700,
			'positionFromTop': 50,
		});

        $(".bxslider").bxSlider({
        	auto: true,
        	autoHover: true,
        	pause: 3000,
        	controls: false,
            pagerCustom: '.thumb-img',
            infiniteLoop: false,
            hideControlOnEnd: true,
            mode: 'fade',
        });

        $(".thumb-img").bxSlider({
            slideMargin: 20,
            maxSlides: 6,
            pager: false,
            controls: true,
            slideWidth: 122,
            infiniteLoop: false,
            nextText: '<i class="fa fa-angle-right"></i>',
            prevText: '<i class="fa fa-angle-left"></i>'
        });
    });
</script>
@stop