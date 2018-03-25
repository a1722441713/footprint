@extends('footprint.layouts.default')
@section('css')
	<meta name="keywords" content="" />
	<script type="application/x-javascript">
        addEventListener("load", function()
        { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); }
	</script>
@endsection
@section('js')
	<script src="{{ asset('footprint/js/jquery.chocolat.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('footprint/css/chocolat.css') }}" type="text/css" media="screen" charset="utf-8">
	<!--light-box-files -->
	<script type="text/javascript" charset="utf-8">
        $(function() {
            $('.img-top a').Chocolat();
        });
	</script>
	<!-- //pop-up-script -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
@endsection
@section('content')

<!-- portfolio -->
	<div class="portfolio">
		<div class="container">
			<h3>作品</h3>
			<div class="portfolio-grids">
				<div class="sap_tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item"><span>古城</span></li>
						<li class="resp-tab-item"><span>特写</span></li>
						<li class="resp-tab-item"><span>风景</span></li>
						<li class="resp-tab-item"><span>航拍</span></li>
					</ul>
					<div class="clearfix"> </div>
					@widget('Works.ImageOne',['type'=>'gucheng','limit'=>9])
					@widget('Works.ImageOne',['type'=>'texie','limit'=>9])
					@widget('Works.ImageOne',['type'=>'fengjing','limit'=>9])
					@widget('Works.ImageOne',['type'=>'hangpai','limit'=>9])

				</div>
			</div>





				<script src="{{ asset('footprint/js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
								<script type="text/javascript">
												$(document).ready(function () {
													$('#horizontalTab').easyResponsiveTabs({
														type: 'default', //Types: default, vertical, accordion
														width: 'auto', //auto or any width like 600px
														fit: true   // 100% fit in a container
													});
												});

								</script>
			</div>
		</div>
	</div>
<!-- //portfolio -->
@endsection
