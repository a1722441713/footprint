<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav cl-effect-14">

        <li><a href="{{ route('frontend.web.index') }}" {!! is_null($activeTopNav)?'class="active"':''!!}>首页</a></li>
        @foreach($allNav as $category)
        <li><a {!! $category->is($activeTopNav)?'class="active"':'' !!}{!! $category->getPresenter()->linkAttribute() !!}>{{ $category->cate_name }}</a></li>
        @endforeach
        <li><a href="#contact" class="scroll">联系我们</a></li>
    </ul>
</div><!-- /.navbar-collapse -->