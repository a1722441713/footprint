@foreach($posts as $post)
<div class="about-grids">
    <div class="col-md-6 about-grid-left">
        <div class="grid">
            <figure class="effect-julia">
                <img src="{{ image_url($post->cover) }}" alt="" class="img-responsive" />
                <figcaption>
                    <h2><span> 寿县</span></h2>
                    <div>
                        <p>我的家乡----古城寿县--寿县</p>
                        <p>金山银山不如绿水青山--寿县</p>
                        <p>绿水青山胜过金山银山--寿县</p>

                    </div>
                    {{--<a href="#">阅读更多</a>--}}
                </figcaption>
            </figure>
        </div>
    </div>
    <div class="col-md-6 about-grid-right">
        <h3>{{ $post->title }}</h3>
        <p class="great">{{ $post->excerpt }}</p>
    </div>
    <div class="clearfix"> </div>
</div>
@endforeach