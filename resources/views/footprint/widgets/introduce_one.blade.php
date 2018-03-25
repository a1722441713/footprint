@foreach($posts as $key =>$post)

    @if($key == 0)
<!-- banner-bottom-position -->
<div class="banner-bottom-position">

    <div class="col-md-6 banner-bottom-position-grid">
        <div class="banner-bottom-position-grid-left">
            <img src="{{ image_url($post->cover) }}" alt=" " class="img-responsive" />
            <div class="banner-bottom-position-grid-left-pos">
                <h4>{{ $post->title }}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-6 banner-bottom-position-gridr">
        <h3>01.</h3>
        <p>{{ $post->excerpt }}</p>
    </div>

    <div class="clearfix"> </div>
</div>
<!-- //banner-bottom-position -->

    {{--景区文章--}}
    @widget('Index.Article',['category'=>'地点介绍','limit'=>6])
    {{--博客文章--}}
    @widget('Index.Blog',['category'=>'博客','limit'=>1])
    {{--轮播图--}}
    @widget('Banner',['type'=>'index'])

@endif
@if($key == 1)
<!-- banner-bottom-position -->
<div class="banner-bottom-position">
    <div class="col-md-7 banner-bottom-position-gridr right">
        <h3>02.</h3>
        <p>{{ $post->excerpt }}</p>
    </div>
    <div class="col-md-5 banner-bottom-position-grid">
        <div class="banner-bottom-position-grid-left Voluptates">
            <img src="{{ image_url($post->cover) }}" alt=" " class="img-responsive" />
            <div class="banner-bottom-position-grid-left-pos repudiandae">
                <h4>{{ $post->title }}</h4>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //banner-bottom-position -->
@endif

@endforeach