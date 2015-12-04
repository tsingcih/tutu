<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>admin</title>
    <script>  
          
            /*  
                计算两个日期的时间间隔天数  
            */  
            //时间字符串的格式：月-日-年  
            var date1 = "12-3-2013";  
            var date2 = "6-6-2013";  
          
            //讲时间字符串转化为距离1970年1月1日午夜零时的时间间隔的毫秒数  
            var time1 = Date.parse(date1);  
            var time2 = Date.parse(date2);  
              
            //讲两个时间相减，求出相隔的天数  
            var dayCount = (Math.abs(time1 - time2))/1000/60/60/24;  
              
            alert(dayCount);  
        </script>
</head>
<body>
	<div>
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["id"]); ?>--<?php echo ($vo["data"]); ?></br><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	
	<div>
	<li>
		<a href="__APP__/Form/Form.html">登录</a>	
	</li>
	</div>
	
	<div id="time"></div>  
  
  

	

</body>
</html>