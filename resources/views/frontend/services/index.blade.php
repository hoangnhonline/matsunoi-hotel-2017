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
							<li><a href="{!! route('home') !!}" title="{!! __('text.home') !!}">{!! __('text.home') !!}</a></li>
							<li class="active">{!! __('text.services') !!}</li>
						</ul>
					</div>
				</div><!-- /block-breadcrumb -->
			</div><!-- col-sm-6 -->
			<div class="col-sm-9 col-sm-push-3 main-content">
				<div class="block-services">
					<div class="block-title block-title-cm block-page">
						<h3 class="title">{!! __('text.services') !!}</h3>
					</div><!-- /block-title -->
					<div class="block-content">
						<div class="list-services-group">
							<h3 class="title">{!! __('text.facilities_and_services') !!}</h3>
							<ul class="list-services row">								
								@foreach( $servicesList as $obj )
								<li class="item col-sm-4 col-xs-6">
									<span class="icon">
										<img src="{!! Helper::showImage($obj->image_url ) !!}" alt="{!! $obj->name !!}">
									</span>
									<div class="name">{!! $obj->name !!}
										@if( $obj->description )
										<span>{!! $obj->description !!}</span>
										@endif
									</div>
								</li><!-- /item -->								
								@endforeach								
							</ul><!-- /list-services -->
						</div><!-- /list-services-group -->

						<div class="list-services-group">
							<h3 class="title">{!! __('text.room_facilities_and_amenity') !!}</h3>
							<ul class="list-services row">
								@foreach( $services2List as $obj )
								<li class="item col-sm-4 col-xs-6">
									<span class="icon">
										<img src="{!! Helper::showImage($obj->image_url ) !!}" alt="{!! $obj->name !!}">
									</span>
									<div class="name">{!! $obj->name !!}
										@if( $obj->description )
										<span>{!! $obj->description !!}</span>
										@endif
									</div>
								</li><!-- /item -->								
								@endforeach										
							</ul><!-- /list-services -->
						</div><!-- /list-services-group -->
					</div><!-- /block-content -->
				</div>
			</div><!-- col-sm-9 -->
			@include('frontend.partials.sidebar')
		</div>
	</div>		
</section><!-- /wrapper-->
@stop