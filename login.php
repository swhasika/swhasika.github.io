<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注册</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    

</head>


<body>
  <div class="container">
    <embed class="flash" src="images/top.swf" width=100% quality="high" 
    pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent"></embed>
    
    <form class="form-login" id="form1" name="form1" method="post" action="login_ok.php">
        <h2 class="form-signin-heading">学生登录</h2>


        <label for="exampleInputEmail1">姓名</label>
        <input type="text" class="form-control" name="user" >
      
    
        <label for="exampleInputPassword1">密码</label>
        <input type="password" class="form-control" name="pwd" >
      
      
        <label for="exampleInputEmail1">学号</label>
        <input type="text" class="form-control" name="xuehao" >
      

      
        <label for="exampleInputEmail1">专业</label>
        <input type="text" class="form-control" name="zhuanye" >
      

      
     
      <button type="submit" id="bt" class="btn btn-lg btn-primary btn-block">提交</button>
    </form>
      
  </div>
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
