<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 widget widget-link">
				<div class="block-title">
					<span>{!! __('text.connected_links') !!}</span>
				</div>
				<div class="block-content">
					<ul>
						@if($locale == "jp")
						<li><a href="http://www.shisuitei.com/" target="_blank" title="紫翠亭">紫翠亭</a></li>
						<li><a href="http://www.kairi.co.jp/" target="_blank" title="かいり">かいり</a></li>
						<li><a href="http://www.sarugakyo.co.jp/" target="_blank" title="千の谷">千の谷</a></li>
						@else
						<li><a href="http://www.shisuitei.com/" target="_blank" title="Shisuitei">Shisuitei</a></li>
						<li><a href="http://www.kairi.co.jp/" target="_blank" title="Kairi">Kairi</a></li>
						<li><a href="http://www.sarugakyo.co.jp/" target="_blank" title="Sen no Tani">Sen no Tani</a></li>
						@endif
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