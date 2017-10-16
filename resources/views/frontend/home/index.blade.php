@extends('frontend.layout')

@include('frontend.partials.meta')

@section('content')
<section class="wrapper">
	<div class="container">
		<div class="block-btn-fix">
			<div class="block-content fixed-res">
				<a class="btn btn-reservation btn-1e" href="javascript:;" data-toggle="modal" data-target="#ModalSusscess">{!! __('text.reservation') !!}</a><!-- Btn Reservation -->
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
												<span class="image"><img src="{{ URL::asset('public/assets/images/icon/metal-detector-gate.png') }}" alt=""></span>
												<strong>{!! __('text.airport') !!}</strong>
												&nbsp;&nbsp;&nbsp;
												<span class="icon">
														<i class="fa fa-angle-double-right"></i>
														<i class="fa fa-angle-double-right"></i>
														<i class="fa fa-angle-double-right"></i>
													</span>
												<a href="#" title="" class="view-detal" data-toggle="modal" data-target="#arrival-airport">
													&nbsp;&nbsp;
													<span class="text">{!! __('text.view_detail') !!}</span>
												</a>
											</p>
										</li>
										<li>
											<p>
												<span class="image"><img src="{{ URL::asset('public/assets/images/icon/taxi.png') }}" alt=""></span>
												<strong>{!! __('text.at_taxi_stand') !!}</strong>
												&nbsp;&nbsp;&nbsp;
												<span class="icon">
													<i class="fa fa-angle-double-right"></i>
													<i class="fa fa-angle-double-right"></i>
													<i class="fa fa-angle-double-right"></i>
												</span>
												<a href="#" title="" class="view-detal" data-toggle="modal" data-target="#at-taxi-stand">
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
										<img src="{{ URL::asset('public/assets/images/room/room1.jpg') }}" alt="The title of this hotel room suit">
									</div><!-- /image -->
									<div class="description">
										<h2 class="name">
											<a href="The title of this hotel room suit" title="">STANDARD</a>
										</h2>
										<div class="price">
											<span class="value">60 USD</span>
											<span class="per">/ {!! __('text.per_night') !!}</span>
										</div>
										<!--<ul class="info">
											<li>Đảm bảo hoàn tiền</li>
											<li>Đảm bảo giá tốt nhất!</li>
										</ul>-->
										<a href="#" title="Book Now" class="btn btn-booknow btn-1e">{!! __('text.book_now') !!}</a>
									</div><!-- /description -->
								</div>
							</div><!-- /item-->
							<div class="item">
								<div class="item-content">
									<div class="image">
										<a href="detail.html" title="The title of this hotel room suit">
											<img src="{{ URL::asset('public/assets/images/room/room2.jpg') }}" alt="The title of this hotel room suit">
										</a>
									</div><!-- /image -->
									<div class="description">
										<h2 class="name">
											<a href="The title of this hotel room suit" title="">TWIN</a>
										</h2>
										<div class="price">
											<span class="value">70 USD</span>
											<span class="per">/ {!! __('text.per_night') !!}</span>
										</div>											
										<a href="#" title="Out Of Room" class="btn btn-booknow btn-1e">{!! __('text.book_now') !!}</a>
									</div><!-- /description -->
								</div>
							</div><!-- /item-->
							<div class="item">
								<div class="item-content">
									<div class="image">
										<a href="detail.html" title="The title of this hotel room suit">
											<img src="{{ URL::asset('public/assets/images/room/room3.jpg') }}" alt="The title of this hotel room suit">
										</a>
									</div><!-- /image -->
									<div class="description">
										<h2 class="name">
											<a href="The title of this hotel room suit" title="">SUPERIOR</a>
										</h2>
										<div class="price">
											<span class="value">70 USD</span>
											<span class="per">/ {!! __('text.per_night') !!}</span>
										</div>											
										<a href="#" title="Out Of Room" class="btn btn-booknow btn-le">{!! __('text.book_now') !!}</a>
									</div><!-- /description -->
								</div>
							</div>
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
							<p class="caption">We accept cash and credit cards.</p>
							<ul class="list-inline clearfix">
								<li>
									<span class="text">Cash will be only by <strong>VND</strong></span>
								</li>
								<li>
									<span class="text">Credit cards accepted are: <strong>Master Card, Visa</strong></span>
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