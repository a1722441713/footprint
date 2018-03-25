{{$user->name}}，这是一封测试邮件
<br>
{{--<img src="{{$message->embed($imgPath)}}">--}}
点击激活账号<a href="{!! route('frontend.web.email.verify',$user->confirmation_token) !!}">
    {{$user->confirmation_token}}
</a>