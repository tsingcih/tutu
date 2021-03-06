<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>登录</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="__PUBLIC__/css/bootstrap.min.css"  rel="stylesheet" type='text/css' />
	<link href="__PUBLIC__/css/font-awesome.min.css"  rel="stylesheet" type='text/css' />
	<link href="__PUBLIC__/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/css/bootstrap-social.css" rel="stylesheet" type="text/css">	
	<link href="__PUBLIC__/css/templatemo_style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<body class="templatemo-bg-image-1">
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-login-form-2" role="form" action="#" method="post">
				<div class="row">
					<div class="col-md-12">
						<h1>登录</h1>
					</div>
				</div>
				<div class="row">
					<div class="templatemo-one-signin col-md-6">
				        <div class="form-group">
				          <div class="col-md-12">		          	
				            <label for="username" class="control-label">用户名</label>
				            <div class="templatemo-input-icon-container">
				            	<i class="fa fa-user"></i>
				            	<input type="text" class="form-control" id="username" placeholder="">
				            </div>		            		            		            
				          </div>              
				        </div>
				        <div class="form-group">
				          <div class="col-md-12">
				            <label for="password" class="control-label">密码</label>
				            <div class="templatemo-input-icon-container">
				            	<i class="fa fa-lock"></i>
				            	<input type="password" class="form-control" id="password" placeholder="">
				            </div>
				          </div>
				        </div>
				        <div class="form-group">
				          <div class="col-md-12">
				            <div class="checkbox">
				                <label>
				                  <input type="checkbox"> 记住我
				                </label>
				            </div>
				          </div>
				        </div>
				        <div class="form-group">
				          <div class="col-md-12">
				            <input type="submit" value="登录" class="btn btn-warning">
				          </div>
				        </div>
				        <div class="form-group">
				          	<div class="col-md-12">
				        		<a href="forgot-password.html" class="text-center">忘记密码</a>
				       	 	</div>
				    	</div>
					</div>
					<div class="templatemo-other-signin col-md-6">
						<label class="margin-bottom-15">
							使用其他已有第三方账号一键登录 <a rel="nofollow" href="http://lipis.github.io/bootstrap-social/"></a>
						</label>
						<a class="btn btn-block btn-social btn-facebook margin-bottom-15">
						    <i class="fa fa-facebook"></i> 用Facebook账号登录
						</a>
						<a class="btn btn-block btn-social btn-twitter margin-bottom-15">
						    <i class="fa fa-twitter"></i> 用Twitter账号登录
						</a>
						<a class="btn btn-block btn-social btn-google-plus">
						    <i class="fa fa-google-plus"></i> 用Google账号登录
						</a>
					</div>   
				</div>				 	
		      </form>		      		      
		</div>
	</div>

</body>
</html>