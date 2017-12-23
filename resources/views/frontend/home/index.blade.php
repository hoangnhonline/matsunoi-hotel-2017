@extends('frontend.layout')

@include('frontend.partials.meta')

@section('content')
<section class="wrapper">
	<div class="container">
		<div class="block-btn-fix">
			<div class="block-content fixed-res">
				<a class="btn btn-reservation btn-1e" target="_blank" href="https://ezhotel.vn/BookingSite/behotel?id=1001&locale={{ ($locale == "jp" || $locale == "en") ? "en_EN" : "vi_VN" }}">{!! __('text.reservation') !!}</a><!-- Btn Reservation -->
				<!-- <a class="btn btn-reservation btn-1e" href="#" data-toggle="modal" data-target="#ModalreCheck">Demo Recheck</a> --><!-- Btn Reservation -->
			</div>
		</div><!-- block-btn-fix -->
		<div class="row">
			<div class="col-sm-9 col-sm-push-3 main-content">
				<div class="content">
					@if( $locale != 'vn' )
					<div class="row">
						<div class="col-sm-6">
							<div class="block block-access">
								<div class="block-title block-title-cm">
									<h3 class="title">{!! __('text.access') !!}</h3>
								</div>
								<div class="block-content">
									<p class="caption">{!! __('text.content_access') !!}</p>
									<ul class="list-inline">
										<li>
											<p>
												<span class="image"><img src="{{ URL::asset('public/assets/images/icon/metal-detector-gate.png') }}" alt="Airport"></span>
												<strong>{!! __('text.airport') !!}</strong>
												&nbsp;&nbsp;&nbsp;
												<span class="icon">
														<i class="fa fa-angle-double-right"></i>
														<i class="fa fa-angle-double-right"></i>
														<i class="fa fa-angle-double-right"></i>
													</span>
												<a href="javascript:;" title="{!! __('text.view_detail') !!}" class="view-detal" data-toggle="modal" data-target="#arrival-airport">
													&nbsp;&nbsp;
													<span class="text">{!! __('text.view_detail') !!}</span>
												</a>
											</p>
										</li>
										<li>
											<p>
												<span class="image"><img src="{{ URL::asset('public/assets/images/icon/taxi.png') }}" alt="Taxi"></span>
												<strong>{!! __('text.at_taxi_stand') !!}</strong>
												&nbsp;&nbsp;&nbsp;
												<span class="icon">
													<i class="fa fa-angle-double-right"></i>
													<i class="fa fa-angle-double-right"></i>
													<i class="fa fa-angle-double-right"></i>
												</span>
												<a href="javascript:;" title="{!! __('text.view_detail') !!}" class="view-detal" data-toggle="modal" data-target="#at-taxi-stand">
													&nbsp;&nbsp;
													<span class="text">{!! __('text.view_detail') !!}</span>
												</a>
											</p>
										</li>
									</ul>
								</div>
							</div><!-- block-access -->
						</div>
						<div class="col-sm-6">
							<div class="block block-map">
								<object class="map" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.446714668741!2d106.70293195081287!3d10.777057692283382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4670702e31%3A0xa5777fb3853e32ec!2sMatsunoi+Hotel!5e0!3m2!1svi!2s!4v1508120390105"></object>								
							</div><!-- /block-map -->
						</div>
					</div><!-- row -->
					@else
					<div class="block block-map">
						<object class="map" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.446714668741!2d106.70293195081287!3d10.777057692283382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4670702e31%3A0xa5777fb3853e32ec!2sMatsunoi+Hotel!5e0!3m2!1svi!2s!4v1508120390105"></object>
					</div><!-- /block-map -->
					@endif
					<div class="block block-product">
						<div class="block-title block-title-cm">
							<h3 class="title">{!! __('text.special_offers') !!}</h3>
						</div>
						<div class="block-content clearfix">
							<div class="item">
								<div class="item-content">
									<div class="image">										
										<img src="{{ URL::asset('public/assets/images/room/standard.jpg') }}" alt="STANDARD">
									</div><!-- /image -->
									<div class="description">
										<h2 class="name">
											STANDARD
										</h2>
										<div class="price">
											<span class="value">55 USD</span>
											<span class="per">/ {!! __('text.per_night') !!}</span>
											<br>
											@if($locale == "en")
											<strong class="m-discount" ><i class="fa fa-star"></i>Grand opening 10% discount</strong>
											@elseif($locale == 'jp')
											<strong class="m-discount" ><i class="fa fa-star"></i>グランドオープン10％割引</strong>
											@else
											<strong class="m-discount"><i class="fa fa-star"></i>Mừng khai trương giảm 10%</strong>
											@endif
										</div>
										<a target="_blank" href="https://ezhotel.vn/BookingSite/behotel?id=1001&locale={{ ($locale == "jp" || $locale == "en") ? "en_EN" : "vi_VN" }}" title="Book Now" title="{!! __('text.book_now') !!}" class="btn btn-booknow btn-1e">{!! __('text.book_now') !!}</a>
									</div><!-- /description -->
								</div>
							</div><!-- /item-->
							<div class="item">
								<div class="item-content">
									<div class="image">										
										<img src="{{ URL::asset('public/assets/images/room/superior.jpg') }}" alt="SUPERIOR">									
									</div><!-- /image -->
									<div class="description">
										<h2 class="name">
											SUPERIOR
										</h2>
										<div class="price">
											<span class="value">60 USD</span>
											<span class="per">/ {!! __('text.per_night') !!}</span>
											<br>
											@if($locale == "en")
											<strong ><i class="fa fa-star"></i>Grand opening 10% discount</strong>
											@elseif($locale == 'jp')
											<strong ><i class="fa fa-star"></i>グランドオープン10％割引</strong>
											@else
											<strong ><i class="fa fa-star"></i>Mừng khai trương giảm 10%</strong>
											@endif
										</div>											
										<a target="_blank" href="https://ezhotel.vn/BookingSite/behotel?id=1001&locale={{ ($locale == "jp" || $locale == "en") ? "en_EN" : "vi_VN" }}" title="Out Of Room" title="{!! __('text.book_now') !!}" class="btn btn-booknow btn-le">{!! __('text.book_now') !!}</a>
									</div><!-- /description -->
								</div>
							</div>
							<div class="item">
								<div class="item-content">
									<div class="image">										
										<img src="{{ URL::asset('public/assets/images/room/deluxe.jpg') }}" alt="DELUXE">
									</div><!-- /image -->
									<div class="description">
										<h2 class="name">
											DELUXE
										</h2>
										<div class="price">
											<span class="value">70 USD</span>
											<span class="per">/ {!! __('text.per_night') !!}</span>
											<br>
											@if($locale == "en")
											<strong ><i class="fa fa-star"></i>Grand opening 10% discount</strong>
											@elseif($locale == 'jp')
											<strong ><i class="fa fa-star"></i>グランドオープン10％割引</strong>
											@else
											<strong ><i class="fa fa-star"></i>Mừng khai trương giảm 10%</strong>
											@endif
										</div>
										<a target="_blank" href="https://ezhotel.vn/BookingSite/behotel?id=1001&locale={{ ($locale == "jp" || $locale == "en") ? "en_EN" : "vi_VN" }}" title="Book Now" class="btn btn-booknow btn-1e">{!! __('text.book_now') !!}</a>
									</div><!-- /description -->
								</div>
							</div><!-- /item-->
							<div class="item">
								<div class="item-content">
									<div class="image">										
										<img src="{{ URL::asset('public/assets/images/room/twin.jpg') }}" alt="TWIN">										
									</div><!-- /image -->
									<div class="description">
										<h2 class="name">
											TWIN
										</h2>
										<div class="price">
											<span class="value">70 USD</span>
											<span class="per">/ {!! __('text.per_night') !!}</span>
											<br>
											@if($locale == "en")
											<strong ><i class="fa fa-star"></i>Grand opening 10% discount</strong>
											@elseif($locale == 'jp')
											<strong ><i class="fa fa-star"></i>グランドオープン10％割引</strong>
											@else
											<strong ><i class="fa fa-star"></i>Mừng khai trương giảm 10%</strong>
											@endif
										</div>											
										<a target="_blank" href="https://ezhotel.vn/BookingSite/behotel?id=1001&locale={{ ($locale == "jp" || $locale == "en") ? "en_EN" : "vi_VN" }}" title="Out Of Room" class="btn btn-booknow btn-1e">{!! __('text.book_now') !!}</a>
									</div><!-- /description -->
								</div>
							</div><!-- /item-->
							
						</div>
					</div><!-- block-product -->
					<div class="block block-noted">
						<div class="block-content">
							{!! $contentList[2] !!}
						</div>
					</div><!-- block-noted -->
					<div class="block-payment">
						<div class="block-title block-title-cm">
							<h3 class="title">{!! __('text.payment_method') !!}</h3>
						</div>
						<div class="box-content">
							<p class="caption">{!! __('text.we_accept') !!}</p>
							<ul class="list-inline clearfix">
								<li>
									<span class="text">{!! __('text.cash_will_be') !!}</span>
								</li>
								<li>
									<span class="text">{!! __('text.credit_cards_accepted') !!} <img src="{{ URL::asset('public/assets/images/visa_mastercard_jcblogo.jpg') }}" alt="Master Card"  class="unionpay">&nbsp;<img src="{{ URL::asset('public/assets/images/unionpay.jpg') }}" alt="UnionPay" class="unionpay"></span>
								</li>
							</ul>
						</div>
					</div><!-- block-noted -->
				</div>
			</div><!-- col-sm-9 -->
			@include('frontend.partials.sidebar')
		</div><!-- row -->
	</div>
</section><!-- /wrapper-->
@stop