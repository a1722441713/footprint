@extends('footprint.layouts.default')
@section('js')
	<meta name="keywords" content="" />
	<script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0); }, false);
        function hideURLbar()
        {
            window.scrollTo(0,1);
        }
	</script>
@endsection
@section('content')
<!-- about -->
	<div class="about">
		<div class="container">
			{{--关于我们第一次简介--}}
			@widget('About.AboutIntroduceOne',['category'=>'关于我们_地点介绍','limit'=>1])
			{{--关于我们第二次简介--}}
			@widget('About.AboutIntroduceTwo',['category'=>'关于我们_地点介绍','limit'=>4])

		</div>
	</div>
<!-- //about -->
			{{--关于我们第三次简介--}}
			@widget('About.AboutIntroduceThree',['category'=>'关于我们_地点介绍','limit'=>6])

@endsection