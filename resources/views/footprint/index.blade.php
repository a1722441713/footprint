@extends('footprint.layouts.default')

@section('content')

	{{--景区简介1--}}
	@widget('Index.IntroduceOne',['category'=>'地点介绍','limit'=>2]);

@endsection