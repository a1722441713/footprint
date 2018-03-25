<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap-grid.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('footprint/css/input.css') }}">
    <script type="text/javascript" src="{{ asset('footprint/js/jquery-1.11.1.min.js') }}"></script>
</head>
<body style="background: url({{ asset('footprint/images/pgbanner.jpg') }}) no-repeat center center;
  width: 100%;
  margin:200px auto;
  position: relative;">
<div class="container">
	<div class="container-main">
		<div class="logo">
			<a>My Tracks</a>
		</div>
		<div class="scroll_button">
			<a href="{{route('frontend.web.login')}}"> <button class="button">登录</button></a>
			<a href="#"> <button class="button">注册</button></a>
		</div>
		<form method="POST"	action="{{ route('frontend.web.register') }}">1
			{{ csrf_field() }}
		<div class="input-container">
		    <input type="input" id="input" name="name" placeholder="请输入用户名">
		    <label for="input">请输入用户名</label>
		    <div class="bottom-line"></div>
		</div>
		<div class="input-container">
		    <input type="password" id="input" name="password" placeholder="请输入密码">
		    <label for="input">请输入密码</label>
		    <div class="bottom-line"></div>
		</div>
		<div class="input-container">
			<input type="password" id="input" name="password_confirmation" placeholder="确认密码">
			<label for="input">确认密码</label>
			<div class="bottom-line"></div>
		</div>
		<div class="input-container">
		    <input type="email" id="input" name="email" placeholder="邮箱">
		    <label for="input">邮箱</label>
		    <div class="bottom-line"></div>
		</div>
		<div class="button-main">
			<button type="submit" class="button">
			<span class="line line-top"></span>
			<span class="line line-right"></span>
			<span class="line line-button"></span>
			<span class="line line-left"></span>
			注册</button>
       </div>
		</form>
       </div>

	</div>
</body>
</html>
