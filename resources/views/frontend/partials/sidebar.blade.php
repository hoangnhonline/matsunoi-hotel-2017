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
	</div>
</div><!-- col-sm-3 -->