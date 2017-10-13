@extends('frontend.layout')

@include('frontend.partials.meta')
@section('content')
<section class="wrapper">
	<div class="container">			
		<div class="row">
			<div class="col-sm-6 col-sm-push-6">
				<div class="block-btn-fix">
					<div class="block-content fixed-res">
						<a class="btn btn-reservation btn-1e" href="#" data-toggle="modal" data-target="#ModalSusscess">RESERVATION</a><!-- Btn Reservation -->
						<!-- <a class="btn btn-reservation btn-1e" href="#" data-toggle="modal" data-target="#ModalreCheck">Demo Recheck</a> --><!-- Btn Reservation -->
					</div>
				</div><!-- block-btn-fix -->
			</div><!-- col-sm-6 -->
			<div class="col-sm-6 col-sm-pull-6">
				<div class="block-breadcrumb">
					<div class="container">
						<ul class="breadcrumb">
							<li><a href="{!! route('home', ['locale' => $locale] ) !!}" title="{!! __('text.home') !!}">{!! __('text.home') !!}</a></li>
							<li class="active">{!! __('text.nearby') !!}</li>
						</ul>
					</div>
				</div><!-- /block-breadcrumb -->
			</div><!-- col-sm-6 -->
			<div class="col-sm-9 col-sm-push-3 main-content">
				<div class="block-nearby">
					<div class="block-title block-title-cm block-page">
						<h3 class="title">{!! __('text.nearby') !!}</h3>
					</div>
					<div class="block-content">
						<ul class="list-inline">
							@foreach( $nearbyList as $obj )
							<li class="item">
								<div class="image">
                                	<img src="{!! Helper::showImage($obj->image_url ) !!}" alt="{!! $obj->name !!}" />
                                </div>
								<div class="description">
									<h2 class="title">{!! $obj->name !!}</h2>
									<p class="desc">{!! $obj->description !!}</p>
								</div>
							</li><!-- /item -->
							@endforeach
						</ul>
					</div>
				</div>
			</div><!-- col-sm-9 -->
			@include('frontend.partials.sidebar')
		</div>
	</div>		
</section><!-- /wrapper-->
@stop
