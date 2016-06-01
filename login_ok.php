<?php
header("content-type:text/html;charset=utf-8");			//设置页面编码
include("conn/conn.php");								//包含数据库连接文件
if(isset($_POST['user']) and isset($_POST['pwd']) and isset($_POST['xuehao']) and isset($_POST['zhuanye'])){		//判断用户名、密码等信息是否存在
	if($_POST['user']!=null and $_POST['pwd']!=null and $_POST['xuehao']!=null and $_POST['zhuanye']!=null){		//判断用户名、密码等信息是否不为空
		$select=mysql_query("select * from lab_login where user='".$_POST['user']."'",$conn);					    //查询数据库中是存在该用户名
		if(mysql_num_rows($select)==0){																			    //判断查询结果是否为0
			$insert=mysql_query("insert into lab_login(user,pwd,xuehao,zhuanye) values('".$_POST['user']."','".$_POST['pwd']."','".$_POST['xuehao']."','".$_POST['zhuanye']."')",$conn);																							//如果用户名不存在，则执行添加操作
			if($insert){																						    //判断添加操作是否执行成功
				echo "<script>alert('恭喜您！注册成功！');window.location.href='enter.php'</script>";				//输出注册成功提示
			}else{
				echo "<script>alert('注册失败！');window.location.href='login.php'</script>";						//否则输出注册失败提示
			}				
		}else{
			echo "<script>alert('用户名已存在，请重新输入！');window.location.href='login.php'</script>";			//输出用户名已存在提示
		}
	}else{		
		echo "<script>alert('请填写完整注册信息！');window.location.href='login.php'</script>";					    //输出请填写完整信息提示
	}
}
?>