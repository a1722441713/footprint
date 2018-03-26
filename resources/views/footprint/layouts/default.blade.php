<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- //for-mobile-apps -->
    <link href="{{ asset('footprint/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('footprint/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    @yield('css')
<!-- js -->
    <script src="{{ asset('footprint/js/jquery-1.11.1.min.js') }}"></script>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ asset('footprint/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('footprint/js/easing.js') }}"></script>
    @yield('js')
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>


<body>
{{--@widget('Bannerimage',['type'=>'index_image','limit'=>1]);--}}
<!-- banner -->
<div class="banner"
    style="	background:url({{ asset('footprint/images/timg3.jpg') }}) no-repeat 0px 0px;
	background-size:cover;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	-ms-background-size:cover;
	min-height:900px;">
    <div class="container">
        <div class="banner_top">
            <div class="banner_top_left">
                <p>我的足迹 <span>寿县</span></p>
            </div>
            <div class="banner_top_right">
                <form method="POST" action="{{ route('frontend.web.search') }}">
                    {{ csrf_field() }}
                    <input type="text" name="keywords" value="Search Here..." onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Email Address';}">
                    <i class="glyphicon glyphicon-search" aria-hidden="true"></i>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            @widget('NavigationBar');

        </nav>
        <div class="logo">
            <a href="index.html">寿县古城<span>我的足迹</span></a>
        </div>
        <div class="dummy_text">
            <p>我希望有个如你一般的人</p>
        </div>
    </div>
</div>
<!-- //banner -->


@yield('content')



<!-- contact -->
<div class="contact" id="contact">
    <div class="container">
        <h3>Contact Us</h3>
        <div class="col-md-4 contact-grid">
            <i class="glyphicon glyphicon-home" aria-hidden="true"></i>
            <h4>Address</h4>
            <p>{{ setting('address') }}<span>{{ setting('region') }}</span></p>
        </div>
        <div class="col-md-4 contact-grid">
            <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
            <h4>Mail</h4>
            <a href="javascrip:;">{{ setting('email') }}</a>
        </div>
        <div class="col-md-4 contact-grid">
            <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
            <h4>Phone</h4>
            <p>{{ setting('ipone') }}</p>
        </div>
        <div class="clearfix"></div>
        <!-- footer -->
        <div class="footer-copy">

        </div>
    </div>
</div>
<!-- //contact -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
<script src="{{ asset('footprint/js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
</body>
</html>

