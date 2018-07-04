<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('resources/views/admin/style/css/ch-ui.admin.css')}}">
	<link rel="stylesheet" href="{{asset('resources/views/admin/style/font/css/font-awesome.min.css')}}">
</head>
<body style="background:#F3F3F4;">
	<div class="login_box">
		<h1>GDQY_EDU</h1>
		<h2>创强网后台管理平台</h2>
		<div class="form">
			@if(session('msg'))
			<p style="color:red">{{session('msg')}}</p>
			@endif
			<form action="" method="post">
				{{--加这句，是php里面csrf认证对网站一种保护，它会随机生成一个token连同值一起发给后端--}}
				{{csrf_field()}}
				<ul>
					<li>
					<input type="text" name="user_name" class="text"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="user_pass" class="text"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
					{{--<li>--}}
						{{--<input type="text" class="code" name="code"/>--}}
						{{--<span><i class="fa fa-check-square-o"></i></span>--}}
						{{--<img src="{{url('admin/code')}}" alt="" onclick="this.src='{{url('admin/code')}}?'+Math.random()">--}}
					{{--</li>--}}
					<li>
						<input type="submit" value="立即登陆"/>
					</li>
				</ul>
			</form>
			<p><a href="#">返回首页</a> &copy; 2018 Powered by <a href="http://www.wanghexu.cn" target="_blank">广东轻工职业技术学院版权所有</a></p>
		</div>
	</div>
</body>
</html>