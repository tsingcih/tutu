<?php if (!defined('THINK_PATH')) exit();?><!-- <body>
	<p>it is a header</p>
</body>
 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>home</title>
</head>
<body>
	<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
	<link href="__PUBLIC__/css/bootstrap.min.css"  rel="stylesheet" type='text/css' />
	<link href="__PUBLIC__/css/font-awesome.min.css"  rel="stylesheet" type='text/css' />
	<link href="__PUBLIC__/css/style.css"  rel="stylesheet" type='text/css' />
	<script src="__PUBLIC__/js/home.js" type='text/javascript'></script>
	<script src="__PUBLIC__/js/main.js" type='text/javascript'></script>
	<script src="__PUBLIC__/js/jquery-1.10.2.js" type='text/javascript'></script>
	<script src="__PUBLIC__/js/jquery.knob.min.js" type='text/javascript'></script>
	<script src="__PUBLIC__/js/jquery.pagination.js" type='text/javascript'></script>
	<script src="__PUBLIC__/js/bootstrap.min.js" type='text/javascript'></script>
</head>
<body>
	<nav role="navigation" class="navbar navbar-default">
		<div class="navbar-header">
			<button data-target="#bs-example-navbar-collapse-1"
				data-toggle="collapse" class="navbar-toggle" type="button">
				<span class="sr-only"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span>
			</button>
			<a href="__URL__" class="navbar-brand">首页</a>
		</div>
		<div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">更多 <b class="caret"></b></a>
					<ul role="menu" class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
			 </ul>
			<form role="search" class="navbar-form navbar-left">
				<div class="form-group">
					<input type="text" placeholder="Search" class="form-control">
				</div>
				<button class="btn btn-danger" type="submit">搜索</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Link</a></li>
				<li class="dropdown"><a data-toggle="dropdown"
					class="dropdown-toggle" href="#">登录|注册 <b class="caret"></b></a>
					<ul role="menu" class="dropdown-menu">
						<li><a href="__URL__/login.html">登录</a></li>
						<li><a href="__URL__/register.html">注册</a></li>
						<!-- <li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li> -->
					</ul>
				 </li>
			</ul>
		</div>
	</nav>
</body>



	<!--  <div class="footer">
		<div class="footer">
<p>it is a footer</p>
</div>

	  </div> -->
</body>
</html>