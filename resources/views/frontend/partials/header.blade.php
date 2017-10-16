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