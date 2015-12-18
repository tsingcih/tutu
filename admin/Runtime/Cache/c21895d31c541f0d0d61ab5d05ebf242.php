<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>edit</title>
</head>
<body>
	<form action="__URL__/update" method="post">
		标题：<input type="text" name="title" value="<?php echo ($vo["title"]); ?>"></br>
		内容:<textarea rows="5" cols="45" name="content"><?php echo ($vo["content"]); ?></textarea></br>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
		<input type="submit" value="提交">			
	
	</form>
	
</body>
</html>