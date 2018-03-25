@extends('footprint.layouts.default')
@section('css')
	<meta name="keywords" content="" />
	<script type="application/x-javascript">
        addEventListener("load", function()
        {
            etTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar(){
            window.scrollTo(0,1);
        }
	</script>
@endsection
@section('content')
<!-- blog -->
	<div class="blog">
		<div class="container">
			<h3>Blog</h3>
			<div class="blog-grids">
				@foreach($posts as $post)
				<div class="col-md-6 blog-grid">
					<div class="col-xs-4 blog-grid-left">
						<a href="{!! $post->getPresenter()->url() !!}"><img src="{{ image_url($post->cover) }}" alt=" " class="img-responsive" /></a>
					</div>
					<div class="col-xs-8 blog-grid-right">
						<a href="{!! $post->getPresenter()->url() !!}">{{ $post->title }}</a>
						<h4>{{ $post->created_at }}</h4>
						<p>{{ $post->excerpt }}</p>
					</div>
					<div class="clearfix"> </div>
					<div class="more m1">
						<a class="btn effect6" href="{!! $post->getPresenter()->url() !!}">Learn More</a>
					</div>
				</div>
				@endforeach
				<div class="clearfix"> </div>
			</div>
			<nav class="paging">
				<ul class="pagination pagination-lg">
					{{ $posts->links() }}
				</ul>
			</nav>
		</div>
	</div>
<!-- //blog -->
@endsection
