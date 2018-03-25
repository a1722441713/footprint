<!-- testimonials -->
<div class="testimonials">
    <div class="container">
        <h3>古城寿县</h3>
        <div class="testimonials-grids">
            @foreach($posts as $key => $post)
                @if($key == 4)
                    <div class="col-md-6 testimonials-grid">
                        <div class="col-md-8 testimonials-grd">
                            <div class="testimonials-grid1">
                                <h4>作者：<span>{{ $post->user->user_name }}</span></h4>
                                <p>{{ $post->excerpt }}</p>
                            </div>
                        </div>
                        <div class="col-md-4 testimonials-grd-right">
                            <img src="{{ image_url($post->cover) }}" alt=" " class="img-responsive">
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                @endif
                @if($key == 5)
                    <div class="col-md-6 testimonials-grid">
                        <div class="col-md-4 testimonials-grd-right">
                            <img src="{{ image_url($post->cover) }}" alt=" " class="img-responsive">
                        </div>
                        <div class="col-md-8 testimonials-grd">
                            <div class="testimonials-grid1 testimonials-grid1-second">
                                <h4><span>{{ $post->user->user_name }}</span></h4>
                                <p>{{ $post->excerpt }}</p>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                @endif
            @endforeach
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //testimonials -->