<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
	
	<table>
		<tr>
  			 <td>id:</td>
   			 <td><?php echo ($data["id"]); ?></td>
		</tr>
		<tr>
    		 <td>标题：</td>
    		<td><?php echo ($data["title"]); ?></td>
		</tr>
		<tr>
    		<td>内容：</td>
   			 <td><?php echo ($data["content"]); ?></td>
		</tr>
	</table>
</body>
</html>