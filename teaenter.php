<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注册</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/enter.css">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    

</head>


<body>
  <!-- /container -->
  <div class="container">

    <!--flash-->
      <embed class="flash" src="images/top.swf" width=100% quality="high" 
      pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent"></embed>


      <form class="form-signin" name="form1" method="post" action="enter_ok.php">
        <h2 class="form-signin-heading">老师登录</h2>


        
        <!-- 姓名输入模块-->
        <label for="inputUser" >姓名</label>
        <input type="text" name="user" class="form-control" placeholder="姓名" >
        <!-- 密码输入模块 -->
        <label for="inputPassword" >密码</label>
        <input type="password" name="pwd"  class="form-control" placeholder="密码" >


        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> 记住密码
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
      </form>

    </div> 

  </form>  
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
