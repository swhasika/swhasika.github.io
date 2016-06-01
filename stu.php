<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>学生界面</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stu.css">
</head>
<body>
	<!-- 导航栏 -->
	<?php include("conn/conn.php"); ?>

		<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">实验管理系统</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

<!--侧边栏 -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">学生信息<span class="sr-only">(current)</span></a></li>
            <li><a href="">成绩查询</a></li>
            <li><a href="">预约查询</a></li>
           
          </ul>
          <ul class="nav nav-sidebar">
          	<li class="active"><a href="#">实验室查询<span class="sr-only">(current)</span></a></li>
            <li><a href="">电机实验室</a></li>
            <li><a href="">PLC实验室</a></li>
            <li><a href="">嵌入式实验室</a></li>
            <li><a href="">过程控制实验室</a></li>
            <li><a href="">电工电子实验室</a></li>
          </ul>          
        </div>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">信息</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              
              <h4>姓名</h4>
              <span class="text-muted"><?php echo $_SESSION['user']?></span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              
              <h4>学号</h4>
              <span class="text-muted"><?php echo $_SESSION['xuehao'] ?></span>
            </div>
            
          
          </div>

         
        </div>
      </div>
    </div>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>	
</body>
</html>