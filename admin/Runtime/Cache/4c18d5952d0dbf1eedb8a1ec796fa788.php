<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>admin</title>

</head>
<body>
	
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["id"]); ?>--<?php echo ($vo["data"]); ?></br><?php endforeach; endif; else: echo "" ;endif; ?>
	
	<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Form</title>
</head>
<body>
	<FORM method="post" action="__URL__/insert">
	标题：<INPUT type="text" name="title"><br/>
	内容：<TEXTAREA name="content" rows="5" cols="45"></TEXTAREA><br/>
	<INPUT type="submit" value="提交">
	</FORM>
	
	

</body>
</html>	

	<li>
		<a href="__APP__/Form/add.html">登录</a>	
		<a href="__APP__/Form/read.html">读取数据</a>
		<a href="__APP__/Form/edit.html">更新数据</a>
		<a href="__APP__/Form/select.html">联表查询</a>
		
	</li>
	

 

	
  
  

	

</body>
</html>