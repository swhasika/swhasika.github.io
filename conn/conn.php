<?php
$conn=mysql_connect("localhost","root","q1w2e3r4");			//连接数据库服务器
mysql_select_db("lab_system",$conn);						//连接数据库
mysql_query("set names utf8");							//对数据库中编码格式进行转换，避免出现中文乱码的问题
?>
