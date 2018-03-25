<!-- banner-bottom1 -->
<div class="banner-bottom1">
    <div class="container">
        <div class="banner-bottom1-grids">
            @foreach($posts as $post)
            <div class="col-md-8 banner-bottom1-grid-left">
                <h1>{{ $post->title }}</h1>
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>
            <div class="col-md-4 banner-bottom1-grid-right">
                <div class="more">
                    <a class="btn effect6" href="{!! $post->getPresenter()->url() !!}">阅读更多>></a>
                </div>
            </div>
            @endforeach
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //banner-bottom1 -->