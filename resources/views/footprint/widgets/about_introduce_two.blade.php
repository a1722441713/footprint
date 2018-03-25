<div class="my-trip">
    <div class="wmuSlider example1">
        <div class="wmuSliderWrapper">
            @foreach($posts as $key => $post)
                @if($key > 0)
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="my-trip-grids">
                                <div class="col-xs-4 my-trip-left">
                                    <h3>关于 <span>我们</span> 的足迹</h3>
                                </div>
                                <div class="col-xs-8 my-trip-right">
                                    <div class="my-trip-rightl">
                                        <img src="{{ image_url($post->cover) }}" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="my-trip-rightr">
                                        <p>{{ $post->excerpt }}
                                            <span>作者：{{ $post->user->user_name }}</span></p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </article>
                @endif
            @endforeach
            {{--<article style="position: absolute; width: 100%; opacity: 0;">--}}
                {{--<div class="banner-wrap">--}}
                    {{--<div class="my-trip-grids">--}}
                        {{--<div class="col-xs-4 my-trip-left">--}}
                            {{--<h3>关于 <span>我们的</span>足迹（寿县）</h3>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-8 my-trip-right">--}}
                            {{--<div class="my-trip-rightl">--}}
                                {{--<img src="{{ asset('footprint/images/32.jpg') }}" alt=" " class="img-responsive" />--}}
                            {{--</div>--}}
                            {{--<div class="my-trip-rightr">--}}
                                {{--<p>我希望有个如你一般的人。如这山间清晨一般明亮清爽的人，如奔赴古城道路上阳光一般的人，温暖而不炙热，覆盖我所有肌肤。由起点到夜晚，由山野到书房，一切问题的答案都很简单。我希望有个如你一般的人，贯彻未来，数遍生命的公路牌。--}}
                                    {{--<span>彭益海</span></p>--}}
                            {{--</div>--}}
                            {{--<div class="clearfix"> </div>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"> </div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</article>--}}
            {{--<article style="position: absolute; width: 100%; opacity: 0;">--}}
                {{--<div class="banner-wrap">--}}
                    {{--<div class="my-trip-grids">--}}
                        {{--<div class="col-xs-4 my-trip-left">--}}
                            {{--<h3>关于 <span>我们</span>的足迹</h3>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-8 my-trip-right">--}}
                            {{--<div class="my-trip-rightl">--}}
                                {{--<img src="{{ asset('footprint/images/23.jpg') }}" alt=" " class="img-responsive" />--}}
                            {{--</div>--}}
                            {{--<div class="my-trip-rightr">--}}
                                {{--<p>我希望有个如你一般的人。如这山间清晨一般明亮清爽的人，如奔赴古城道路上阳光一般的人，温暖而不炙热，覆盖我所有肌肤。由起点到夜晚，由山野到书房，一切问题的答案都很简单。我希望有个如你一般的人，贯彻未来，数遍生命的公路牌。--}}
                                    {{--<span>毛毛</span></p>--}}
                            {{--</div>--}}
                            {{--<div class="clearfix"> </div>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"> </div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</article>--}}
        </div>
    </div>
    <script src="{{ asset('footprint/js/jquery.wmuSlider.js') }}"></script>
    <script>
        $('.example1').wmuSlider();
    </script>
</div>