@extends('footprint.layouts.default')
@section('css')
	<meta name="keywords" content="" />
@endsection
@section('content')

<!-- single -->
	<div class="single">
		<div class="container">
			<div class="single-page-artical">
				<div class="artical-content">
					<h3 align="center">{{ $post->title }}</h3>
					{{--<img class="img-responsive" src="images/timg2.jpg" alt=" " />--}}
					<p>
						{!! $post->postContent->content !!}
					</p>
				</div>
				<div class="artical-links">
					<ul>
						<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>{{ $post->created_at }}</li>
						<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>admin</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>{{ $post->views_count }}人浏览</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>查看帖子</a></li>
						<li><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>连接</li>
					</ul>
				</div>
				<div class="comment-grid-top">
					<h3>Responses</h3>



				@foreach($post->comments as $comment)
					<div class="comments-top-top">
						<div class="top-comment-left">
							<a href="#"><img class="img-responsive" src="{{ asset('footprint/images/co.png') }}" alt=""></a>
						</div>
						<div class="top-comment-right">
							<ul>
								<li><span class="left-at"><a href="#">
									@if($comment->user_id==0) {{ str_random(9) }} @else{{$comment->generaluser->name}} @endif
								</a></span></li>
								<li><span class="right-at">{{ $comment->created_at }}</span></li>
								{{--<li><a class="reply" href="#">回复</a></li>--}}
							</ul>
						<p>{{ $comment->body }} </p>
						</div>
						<div class="clearfix"> </div>
					</div>

				@endforeach
				</div>

				<div class="artical-commentbox">
					<h3>评论一下</h3>
					<div class="table-form">
						<form method="POST"	action="{{ route('frontend.web.comment.store',$post->id) }}">
							{{ csrf_field() }}
							{{--此处删除不需要的信息--}}
							<textarea value="Message:" name="comment" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Messag	e</textarea>
							<input type="submit" value="Send">
						</form>
					</div>
				</div>	
			</div>
		</div>
	</div>
<!-- single -->
@endsection
