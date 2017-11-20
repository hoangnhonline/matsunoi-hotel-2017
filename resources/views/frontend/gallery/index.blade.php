@extends('frontend.layout')

@include('frontend.partials.meta')
@section('content')
<section class="wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-push-6">
				<div class="block-btn-fix">
					<div class="block-content fixed-res">
						<a class="btn btn-reservation btn-1e" target="_blank" href="https://ezhotel.vn/BookingSite/behotel?id=1001&locale={{ ($locale == "jp" || $locale == "en") ? "en_EN" : "vi_VN" }}">{!! __('text.reservation') !!}</a>
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
					<div class="block-gallary" style="text-align: center;">
                        
                        <div class="bxslider">
                            <div class="item standard">
                            	<a href="{{ URL::asset('public/assets/images/gallary/large/standard/standard-1.jpg') }}" data-lightbox="roadtrip">
                                	<img src="{{ URL::asset('public/assets/images/gallary/large/standard/standard-1.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item standard">
                                <a href="{{ URL::asset('public/assets/images/gallary/large/standard/standard-2.jpg') }}" data-lightbox="roadtrip">
                                    <img src="{{ URL::asset('public/assets/images/gallary/large/standard/standard-2.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item standard">
                                <a href="{{ URL::asset('public/assets/images/gallary/large/standard/standard-3.jpg') }}" data-lightbox="roadtrip">
                                    <img src="{{ URL::asset('public/assets/images/gallary/large/standard/standard-3.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item standard">
                                <a href="{{ URL::asset('public/assets/images/gallary/large/standard/standard-4.jpg') }}" data-lightbox="roadtrip">
                                    <img src="{{ URL::asset('public/assets/images/gallary/large/standard/standard-4.jpg') }}" alt="#" />
                                </a>
                            </div>



                            <div class="item superior">
                                <a href="{{ URL::asset('public/assets/images/gallary/large/superior/superior-1.jpg') }}" data-lightbox="roadtrip">
                                    <img src="{{ URL::asset('public/assets/images/gallary/large/superior/superior-1.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item superior">
                                <a href="{{ URL::asset('public/assets/images/gallary/large/superior/superior-2.jpg') }}" data-lightbox="roadtrip">
                                    <img src="{{ URL::asset('public/assets/images/gallary/large/superior/superior-2.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item superior">
                                <a href="{{ URL::asset('public/assets/images/gallary/large/superior/superior-3.jpg') }}" data-lightbox="roadtrip">
                                    <img src="{{ URL::asset('public/assets/images/gallary/large/superior/superior-3.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item superior">
                                <a href="{{ URL::asset('public/assets/images/gallary/large/superior/superior-4.jpg') }}" data-lightbox="roadtrip">
                                    <img src="{{ URL::asset('public/assets/images/gallary/large/superior/superior-4.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <!--deluxe-->
                            <div class="item deluxe">
                                <a href="{{ URL::asset('public/assets/images/gallary/large/deluxe/deluxe-1.jpg') }}" data-lightbox="roadtrip">
                                    <img src="{{ URL::asset('public/assets/images/gallary/large/deluxe/deluxe-1.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item deluxe">
                                <a href="{{ URL::asset('public/assets/images/gallary/large/deluxe/deluxe-2.jpg') }}" data-lightbox="roadtrip">
                                    <img src="{{ URL::asset('public/assets/images/gallary/large/deluxe/deluxe-2.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item deluxe">
                                <a href="{{ URL::asset('public/assets/images/gallary/large/deluxe/deluxe-3.jpg') }}" data-lightbox="roadtrip">
                                    <img src="{{ URL::asset('public/assets/images/gallary/large/deluxe/deluxe-3.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item deluxe">
                                <a href="{{ URL::asset('public/assets/images/gallary/large/deluxe/deluxe-4.jpg') }}" data-lightbox="roadtrip">
                                    <img src="{{ URL::asset('public/assets/images/gallary/large/deluxe/deluxe-4.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item deluxe">
                                <a href="{{ URL::asset('public/assets/images/gallary/large/deluxe/deluxe-5jpg') }}" data-lightbox="roadtrip">
                                    <img src="{{ URL::asset('public/assets/images/gallary/large/deluxe/deluxe-5.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <!--twin-->
                            <div class="item twin">
                                <a href="{{ URL::asset('public/assets/images/gallary/large/twin/twin-1.jpg') }}" data-lightbox="roadtrip">
                                    <img src="{{ URL::asset('public/assets/images/gallary/large/twin/twin-1.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item twin">
                                <a href="{{ URL::asset('public/assets/images/gallary/large/twin/twin-2.jpg') }}" data-lightbox="roadtrip">
                                    <img src="{{ URL::asset('public/assets/images/gallary/large/twin/twin-2.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item twin">
                                <a href="{{ URL::asset('public/assets/images/gallary/large/twin/twin-3.jpg') }}" data-lightbox="roadtrip">
                                    <img src="{{ URL::asset('public/assets/images/gallary/large/twin/twin-3.jpg') }}" alt="#" />
                                </a>
                            </div>
                            <div class="item twin">
                                <a href="{{ URL::asset('public/assets/images/gallary/large/twin/twin-4.jpg') }}" data-lightbox="roadtrip">
                                    <img src="{{ URL::asset('public/assets/images/gallary/large/twin/twin-4.jpg') }}" alt="#" />
                                </a>
                            </div>
                        </div><!-- /bxslider -->
                        
                        <div class="gallary-thumb">
                            <div id="gallery_01" class="thumb-img">
                                <div class="item standard">
                                    <a href="#" data-slide-index="0">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb/standard/standard-1.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item standard">
                                    <a href="#" data-slide-index="1">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb/standard/standard-2.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item standard">
                                    <a href="#" data-slide-index="2">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb/standard/standard-3.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item standard">
                                    <a href="#" data-slide-index="3">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb/standard/standard-4.jpg') }}" alt="#" />
                                    </a>
                                </div>  


                                <div class="item superior">
                                    <a href="#" data-slide-index="4">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb/superior/superior-1.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item superior">
                                    <a href="#" data-slide-index="5">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb/superior/superior-2.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item superior">
                                    <a href="#" data-slide-index="6">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb/superior/superior-3.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item superior">
                                    <a href="#" data-slide-index="7">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb/superior/superior-4.jpg') }}" alt="#" />
                                    </a>
                                </div>  

                                <div class="item deluxe">
                                    <a href="#" data-slide-index="8">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb/deluxe/deluxe-1.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item deluxe">
                                    <a href="#" data-slide-index="9">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb/deluxe/deluxe-2.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item deluxe">
                                    <a href="#" data-slide-index="10">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb/deluxe/deluxe-3.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item deluxe">
                                    <a href="#" data-slide-index="11">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb/deluxe/deluxe-4.jpg') }}" alt="#" />
                                    </a>
                                </div>                              
                                <div class="item deluxe">
                                    <a href="#" data-slide-index="12">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb/deluxe/deluxe-5.jpg') }}" alt="#" />
                                    </a>
                                </div>     

                                <div class="item twin">
                                    <a href="#" data-slide-index="13">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb/twin/twin-1.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item twin">
                                    <a href="#" data-slide-index="14">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb/twin/twin-2.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item twin">
                                    <a href="#" data-slide-index="15">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb/twin/twin-3.jpg') }}" alt="#" />
                                    </a>
                                </div>
                                <div class="item twin">
                                    <a href="#" data-slide-index="16">
                                        <img src="{{ URL::asset('public/assets/images/gallary/thumb/twin/twin-4.jpg') }}" alt="#" />
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
                                        <span class="text">JAPAN</span>
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
							<ul id="gallary-list">
								<li><a href="javascript:;" data-img="standard" title="STANDARD" class="active">STANDARD</a></li>
								<li><a href="javascript:;" data-img="superior" title="SUPERIOR">SUPERIOR</a></li>
                                <li><a href="javascript:;" data-img="deluxe" title="DELUXE">DELUXE</a></li>
                                <li><a href="javascript:;" data-img="twin" title="TWIN">TWIN</a></li>
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
    var mySlider;
    var myThumbSlider;
	$(document).ready(function () {
        
    	lightbox.option({
			'resizeDuration': 700,
			'wrapAround': true,
			'showImageNumberLabel': false,
			'fadeDuration': 700,
			'positionFromTop': 50,
		});

        mySlider = $(".bxslider").bxSlider({
        	auto: true,
        	autoHover: true,
        	pause: 3000,
        	controls: false,
            pagerCustom: '.thumb-img',
            infiniteLoop: false,
            hideControlOnEnd: true,
            mode: 'fade',
        });

        myThumbSlider = $(".thumb-img").bxSlider({
            slideMargin: 20,
            maxSlides: 6,
            pager: false,
            controls: true,
            slideWidth: 122,
            infiniteLoop: false,
            nextText: '<i class="fa fa-angle-right"></i>',
            prevText: '<i class="fa fa-angle-left"></i>'
        });
        $('.bxslider .item, #gallery_01 .item').hide();
        $('.bxslider .item.standard, #gallery_01 .item.standard').show();
        $('#gallary-list a').click(function(){
            $('#gallary-list a').removeClass('active');
            $(this).addClass('active');
            $('.bxslider .item, #gallery_01 .item').hide();
            $('.bxslider .item.' + $(this).data('img') + ', #gallery_01 .item.' +  $(this).data('img')).show();
            mySlider.reloadShow();
            myThumbSlider.reloadShow();
        });
    });
</script>
@stop