<!-- slider -->
<div class="slider">
    <div class="container">
        <div class="sliderfig">
            <ul id="flexiselDemo1">
                @foreach($banners as $banner)
                <li>
                    <div class="sliderfig-grids">
                        <div class="sliderfig-grid" style="height:300px ">
                            <img src="{{ image_url($banner->image) }}"  alt=" " class="img-responsive" />
                        </div>
                    </div>
                </li>
                @endforeach
                </li>
            </ul>
            <script type="text/javascript">
                $(window).load(function() {
                    $("#flexiselDemo1").flexisel({
                        visibleItems: 4,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint:480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint:640,
                                visibleItems:3
                            },
                            tablet: {
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>
            <script type="text/javascript" src="{{ asset('footprint/js/jquery.flexisel.js') }}"></script>
        </div>
    </div>
</div>
<!-- //slider -->