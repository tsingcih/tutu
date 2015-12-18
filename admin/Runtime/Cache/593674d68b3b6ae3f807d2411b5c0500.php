<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>select</title>
</head>
<body>
	
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- 	<?php print_r($vo);?> 数组打印不能直接<?php echo ($XX); ?>要用print_r -->
	<?php echo ($vo["id"]); ?>----<?php echo ($vo["title"]); ?>----<?php echo ($vo["data"]); ?></br><?php endforeach; endif; else: echo "" ;endif; ?>
	
</body>
</html>