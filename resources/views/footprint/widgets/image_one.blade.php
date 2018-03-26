
<div class="resp-tabs-container">
    <div class="tab-1 resp-tab-content">
        <div class="main">
            @foreach($banners as $banner)
                <div class="view effect">
                    <div class="img-top">
                        <a href="{{ image_url($banner->image) }}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                            <img src="{{ image_url($banner->image) }}" class="img-responsive" alt="" />
                            <div class="mask"></div>
                            <div class="content">
                                <span class="info" title="Full Image"> </span>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
            <div class="clear fix"> </div>
        </div>
    </div>
</div>
