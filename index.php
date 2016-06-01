<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>现代浏览器博物馆</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/cover.css">

</head>

<body>
<!-- 顶部导航 -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="menu-nav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">南通大学开放实验平台</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#summary-container">登录</a></li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">实验室介绍<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#feature-tab" data-tab="tab-chrome">电机实验室</a></li>
                        <li><a href="#feature-tab" data-tab="tab-firefox">PLC实验室</a></li>
                        <li><a href="#feature-tab" data-tab="tab-safari">嵌入式实验室</a></li>
                        <li><a href="#feature-tab" data-tab="tab-opera">过程控制实验室</a></li>
                        <li><a href="#feature-tab" data-tab="tab-ie">电工电子实验室</a></li>
                        
                    </ul>
                </li>
                <li><a href="#" data-toggle="modal" data-target="#about-modal">关于</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- flash 南通大学电气工程学院 -->

<embed class="flash" src="images/top.swf" width=100% quality="high" 
pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent"></embed>


<!-- 登录-->
<div class="container summary">

    <!-- 简介 -->
    <div class="row" id="summary-container">
        <div class="col-md-4">
            <img class="img-circle" src="images/student.png" height="200" width="200" alt="学生" >

            <h2>学生</h2>

            <p>学生可以在线查询成绩，实验预约。</p>

            <p><a class="btn btn-default" href="stuenter.php" role="button">学生登录</a></p>
            
        </div>
        <div class="col-md-4">
            <img class="img-circle" src="images/teacher.png" height="200" width="200" alt="老师">

            <h2>老师</h2>

            <p>成绩录入管理，实验室查询预约，实验安排。</p>

            <p><a class="btn btn-default" href="teaenter.php" role="button">老师登录</a></p>
        </div>
        <div class="col-md-4">
            <img class="img-circle" src="images/Administrator.png" alt="管理员" height="200" width="200">

            <h2>管理员</h2>

            <p>实验发布，设备管理，数据更改，备份还原</p>

            <p><a class="btn btn-default" href="#" role="button">管理员登录</a></p>
        </div>
    </div>

     

     <hr class="feature-divider">

    <ul class="nav nav-tabs" role="tablist" id="feature-tab">
        <li class="active"><a href="#tab-chrome" role="tab" data-toggle="tab">电机实验室</a></li>
        <li><a href="#tab-firefox" role="tab" data-toggle="tab">PLC实验室</a></li>
        <li><a href="#tab-safari" role="tab" data-toggle="tab">嵌入式实验室</a></li>
        <li><a href="#tab-opera" role="tab" data-toggle="tab">过程控制实验室</a></li>
        <li><a href="#tab-ie" role="tab" data-toggle="tab">电工电子实验室</a></li>
        
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="tab-chrome">
            <div class="row feature">
                <div class="col-md-7">

                    <h2 class="feature-heading">电机实验室</h2>                           
                    <p class="lead">控制电机实验室主要面向电气工程及其自动化专业和自动化专业的学生开设《控制电机》、《电机学》、《电机及拖动基础》和《DSP原理及应用》《自动控制理论》等课程的相关实验。实验设备：控制电机设备（ZSZ-1型自整角机实验装置）9套，XSZ-1型旋转变压器实验装置、XZ-ⅡA型旋转式倒立摆、微型电子计算机、微型计算机各9套，DSP教学实验平台仿真器20套。</p>
                </div>
                <div class="col-md-5">
                    <img class="feature-image img-responsive" src="images/dianji.jpg"
                         alt="电机实验室" >
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab-firefox">
            <div class="row feature">
                <div class="col-md-5">
                    <img class="feature-image img-responsive" src="images/plc.jpg"
                         alt="Firefox">
                </div>
                <div class="col-md-7">

                    <h2 class="feature-heading">PLC实验室</h2>
                    

                    <p class="lead">控制电机实验室主要面向电气工程及其自动化专业和自动化专业的学生开设《控制电机》、《电机学》、《电机及拖动基础》和《DSP原理及应用》《自动控制理论》等课程的相关实验。实验设备：控制电机设备（ZSZ-1型自整角机实验装置）9套，XSZ-1型旋转变压器实验装置、XZ-ⅡA型旋转式倒立摆、微型电子计算机、微型计算机各9套，DSP教学实验平台仿真器20套。</p>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab-safari">
            <div class="row feature">
                <div class="col-md-7">

                    <h2 class="feature-heading">嵌入式实验室 </h2>

                    <p class="lead"> 嵌入式系统实验室是南通大学电工电子实验中心所属的实验室之一，主要面向全校电气信息类学生，开设单片机原理及其应用、自动控制原理、专业软件教程、计算机控制技术、现代控制理论、建筑电气智能化技术、LAB VIEW上机等课程的相关实验，以及进行专业课程设计、大型综合实验、毕业设计等实践教学环节。
        主要设备：微型计算机38台，单片机综合仿真实验仪40套，ARM嵌入式系统教学实验平台22套、嵌入式系统EL-EMCU-I40套，自动控制理论实验系统36台。</p>
                </div>
                <div class="col-md-5">
                    <img class="feature-image img-responsive" src="images/qianrushi.jpg"
                         alt="嵌入式">
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab-opera">
            <div class="row feature">
                <div class="col-md-5">
                    <img class="feature-image img-responsive" src="images/gckz.jpg"
                         alt="过程控制实验室">
                </div>
                <div class="col-md-7">

                    <h2 class="feature-heading">过程控制实验室 
                    </h2>

                    <p class="lead"> 过程控制实验室由电气工程学院与浙大中控技术有限公司共同组建,实验室配备有浙大中控的SUPCON—JX-300X计算机集散控制系统和QXLPC过程控制实验装置，它们构造了以DCS为核心的工业生产过程控制实验系统。该系统的特点为：过程控制对象真实。测量与变送器﹑执行机构﹑DCS均为工业级产品。便于各类控制算法(包括先进控制算法)在与工业现场相吻合的条件下进行试验。</p>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab-ie">
            <div class="row feature">
                <div class="col-md-7">

                    <h2 class="feature-heading">电工电子实验室</h2>

                    <p class="lead">电工电子电机实验室主要面向自动化专业、电气工程及其自动化等专业的学生开设现代电力电子技术、运动控制系统、电机及拖动等专业、专业基础课的相关实验，以及进行专业课程设计、大型综合实验、毕业设计等实践教学环节。</p>
                </div>
                <div class="col-md-5">
                    <img class="feature-image img-responsive" src="images/dgdz.jpg"
                         alt="IE">
                </div>
            </div>
        </div>
    </div>

    <!-- 关于 -->
    <div class="modal fade" id="about-modal" tabindex="-1" role="dialog" aria-labelledby="modal-label"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
                    <h4 class="modal-title" id="modal-label">关于</h4>
                </div>
                <div class="modal-body">
                    <p>为了推进学生自主学习、合作学习、研究性学习的实验教学新模式，电气工程学院电工电子实验中心已成功构建了以体现素质教育和创新人才培养要求的教育体系而设计的开放实验教学平台。本课题针对学生手机微信日益普遍等实际情况，自主研发一个短信预约平台，嵌入现有的开放实验教学平台，使之发挥最大的作用。在此情况下，我们电工电子实验中心迫切希望研发一套适合开放实验教学的微信平台。
本课题结合开放实验教学的特点和实际情况，运用计算机网络和微信技术，设计研发一个适合开放实验教学的微信平台。通过对现有的微信技术进行分析，形成了微信预约平台的设计思路，然后分别对微信预约、实验成绩查询、通知发布等模块进行设计与实现。用户只要拥有一台手机，那么通过微信平台，管理员可以对实验教学进行宏观调控，合理安排实验时间、指导教师和实验设备；学生根据自己的需要，自行安排实验课程；实验指导教师能够及时获得实验预约结果，并能够进行成绩管理。
</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">了解了</button>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <p class="pull-right"><a href="#top">回到顶部</a></p>

        <p>&copy; 2016 哈斯卡 </p>
    </footer>

</div>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(function () {
        $('#ad-carousel').carousel();
        $('#menu-nav .navbar-collapse a').click(function (e) {
            var href = $(this).attr('href');
            var tabId = $(this).attr('data-tab');
            if ('#' !== href) {
                e.preventDefault();
                $(document).scrollTop($(href).offset().top - 70);
                if (tabId) {
                    $('#feature-tab a[href=#' + tabId + ']').tab('show');
                }
            }
        });
    });
</script>
</body>
</html>
