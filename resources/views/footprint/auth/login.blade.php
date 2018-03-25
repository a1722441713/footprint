<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
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
			<a href="#"> <button class="button">登录</button></a>
			<a href="{{ route('frontend.web.register') }}"> <button class="button">注册</button></a>
		</div>
		<form method="POST" action="{{ route('frontend.web.login') }}">
			{{ csrf_field() }}
		<div class="input-container">
		    <input type="input" name="name" id="input" placeholder="请输入用户名">
		    <label for="input">请输入用户名</label>
		    <div class="bottom-line"></div>
		</div>
		<div class="input-container">
		    <input type="password" name="password" id="input" placeholder="请输入密码">
		    <label for="input">请输入密码</label>
		    <div class="bottom-line"></div>
		</div>
		<div class="button-main">
			<button type="submit" class="button">
              <span class="line line-top"></span>
              <span class="line line-right"></span>
              <span class="line line-button"></span>
              <span class="line line-left"></span>
             登录
			</button>
       </div>
		</form>
       </div>
	</div>	
</div>
</body>
</html>
