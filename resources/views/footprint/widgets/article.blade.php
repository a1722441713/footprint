<!-- //banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="banner-bottom-grids">
            @foreach($posts as $key => $post)
                @if($key == 1)
                    <div class="col-md-4 banner-bottom-grid">
                        <img src="{{ image_url($post->cover) }}" alt=" " class="img-responsive"/>
                        <div class="banner-bottom-grid1">
                            <h3>{{ $post->title }}</h3>
                            <p>
                                {{ $post->excerpt }}
                            </p>
                        </div>
                    </div>
                @endif
                @if($key ==2)
                    <div class="col-md-4 banner-bottom-grid">
                        <div class="banner-bottom-grid1 banner-bottom-grid1-sub">
                            <h3>{{ $post->title }}</h3>
                            <p>
                                {{ $post->excerpt }}
                            </p>
                        </div>
                        <img src="{{ image_url($post->cover) }}" alt=" " class="img-responsive"/>
                    </div>
                @endif

                @if($key ==3)
                    <div class="col-md-4 banner-bottom-grid">
                        <div class="banner-bottom-grid-box">
                            <div class="banner-bottom-grid-box1">
                                <h1>{{ $post->title }}</h1>
                                <p>
                                    {{ $post->excerpt }}
                                </p>
                            </div>
                        </div>
                        @endif
                        @if($key ==4)
                            <div class="banner-bottom-grid-box banner-bottom-grid-boxs">
                                <div class="banner-bottom-grid-box1">
                                    <h1>{{ $post->title }}</h1>
                                    <p>
                                        {{ $post->excerpt }}
                                    </p>
                                </div>
                            </div>
                        @endif
                        @if($key ==5)
                            <div class="banner-bottom-grid-box banner-bottom-grid-boxs1">
                                <div class="banner-bottom-grid-box1 banner-bottom-grid-box1-sub">
                                    <h1>{{ $post->title }}</h1>
                                    <p>
                                        {{ $post->excerpt }}
                                    </p>
                                </div>
                            </div>
                    </div>
                @endif

            @endforeach
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //banner-bottom -->