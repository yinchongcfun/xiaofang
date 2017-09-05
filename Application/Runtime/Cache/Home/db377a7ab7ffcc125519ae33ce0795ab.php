<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>修改密码</title>
    <style>
        ul, li{list-style: none}
        a{text-decoration: none;color: #000000}
        .xiugaiContent{border: 1px solid grey;width: 1100px;height:800px;margin: 0 auto;position: relative;box-shadow: 5px 5px 10px grey}
        .welcom{margin: 0 auto;height: 70px;width: 1100px;position: relative}
        .welcom img{width: 100%;height: 70px;z-index: -1;position: absolute;}
        .zhuxiao{float: right;margin-right: 30px;margin-top: 8px}
        .denglu{float: right;margin-right: 30px;margin-top: 8px}
        .bj_main1{width: 100%;height: 730px;background-color: #dcdcdc;position: absolute}
        .bj_main2{margin: 0 auto;width: 80%;height: 300px;margin-top: 150px;background-color: ghostwhite;border: 1px solid gray}
        .bj_main2_top{width: 100%;height: 40px;border-bottom: 1px solid #dcdcdc}
        .bj_main2_top span{font-size: 18px;font-weight: bold;line-height: 40px;margin-left: 20px}
        .bj_main2_main{width: 80%;height: 220px;border: 0px solid magenta;margin: 0 auto}
        .bj_main2_main .ul_left{float: left;border: 0px solid mediumblue}
        .bj_main2_main .ul_right{float: right;;border: 0px solid darkorange}
        .bj_main2_main li{line-height: 50px;}
        .bj_main2_main input{background-color: rgb(204,232,207);border: 2px solid #dcdcdc;height: 30px}
        .bj_main2_bottom{width: 40%;height: 40px;margin: 0 auto;position: relative;bottom: 10px}
        .bj_main2_bottom .xg_btn_1 , .bj_main2_bottom .xg_btn_2 {height: 30px;width: 55px;border-radius: 18%;border: 1px solid #31A4F0;   position: relative}
        .bj_main2_bottom .xg_btn_1{margin-top: 6px;position: absolute;left: 70px}
        .bj_main2_bottom .xg_btn_2{margin-top: 6px;position: absolute;right: 40px}
    </style>
    <link rel="stylesheet" type="text/css" href="/news/Application/Home/View/Layout/header_footer.css" />
</head>
<body style="background-color: rgb(204,232,207)">
<!--头部开始-->
<div class="top">

    <!--头部导航栏开始-->
    
<link rel="stylesheet" href="/news/Public/Home/css/common.css">
<script type="text/javascript" src="/news/Public/Home/js/1.7.1.min.js"></script>
<!--头部标题图开始-->
<div class="top_bj">
    <div class="banner">

        <div class="ad">
            <!--焦点图片开始-->
            <DIV id="oTransContainer" style="FILTER: progid:DXImageTransform.Microsoft.Wipe(GradientSize=1.0, wipeStyle=0, motion='forward'); WIDTH: 332px; HEIGHT: 145px">
                <IMG id=oDIV1 style="BORDER-RIGHT: black 0px solid; BORDER-TOP: black 0px solid; DISPLAY: yes;  BORDER-LEFT: black 0px solid; BORDER-BOTTOM: black 0px solid" height=145 src="/news/Public/Home/images/ad1.png" width=332 border=0>
                <IMG id=oDIV2 style="BORDER-RIGHT: black 0px solid; BORDER-TOP: black 0px solid; DISPLAY: none; BORDER-LEFT: black 0px solid; BORDER-BOTTOM: black 0px solid" height=145 src="/news/Public/Home/images/ad2.png" width=332 border=0>
                <IMG id=oDIV3 style="BORDER-RIGHT: black 0px solid; BORDER-TOP: black 0px solid; DISPLAY: none; BORDER-LEFT: black 0px solid; BORDER-BOTTOM: black 0px solid" height=145 src="/news/Public/Home/images/ad1.png" width=332 border=0>
            </DIV>
        </div>
        <!--ad end-->
        <div class="flash">
            <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="380" height="110"  style="position:absolute; right:100px; bottom:20px;">
                <param name="movie" value="/news/Public/Home/images/flash.swf" />
                <param name="quality" value="high" />
                <param name="wmode" value="transparent" />
                <param name="swfversion" value="11.0.0.0" />
                <!-- 此 param 标签提示使用 Flash Player 6.0 r65 和更高版本的用户下载最新版本的 Flash Player。如果您不想让用户看到该提示，请将其删除。 -->
                <param name="expressinstall" value="Scripts/expressInstall.swf" />
                <!-- 下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。 -->
                <!--[if !IE]>-->
                <object type="application/x-shockwave-flash" data="/news/Public/Home/images/flash.swf" width="380" height="110">
                    <!--<![endif]-->
                    <param name="quality" value="high" />
                    <param name="wmode" value="transparent" />
                    <param name="swfversion" value="11.0.0.0" />
                    <param name="expressinstall" value="Scripts/expressInstall.swf" />
                    <!-- 浏览器将以下替代内容显示给使用 Flash Player 6.0 和更低版本的用户。 -->
                    <div>
                        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="获取 Adobe Flash Player" width="112" height="33" /></a></p>
                    </div>
                    <!--[if !IE]>-->
                </object>
                <!--<![endif]-->
            </object>
        </div>
        <!--flash end-->
    </div>
    <!--banner end-->
</div>
<!--头部标题图结束-->
<!--头部导航栏开始-->
<div class="nav">
    <div  class="nav_menus">
        <div class="nav_buju">
            <ul>
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>

                <li><a href="#">组织机构</a></li>
                <li><a href="#">法律法规</a></li>
                <li><a href="<?php echo U('Lmsg/lmsg_list');?>">支队长信箱</a></li>
                <li><a href="#">政委信箱</a></li>
                <li><a href="/news<?php echo ($upload_url["upload_url"]); ?>">通信手册</a></li>

                <li><a href="<?php echo U('File/file_list');?>">下载中心</a></li>
                <li><a href="#">数据传输</a></li>
                <li><a href="<?php echo U('Video/video_list');?>">视频点播</a></li>
                <li><a href="#">办公系统</a></li>
                <li><a href="<?php echo U('UserCenter/index');?>">在线投稿</a></li>
                <li><a href="#">旧版网站</a></li>
                <li><a href="#">设为首页</a></li>
            </ul>
        </div>
    </div>
</div>
<SCRIPT>
    var NowFrame = 1;
    var MaxFrame = 3;
    var bStart = 0;
    function fnToggle() {
        var next = NowFrame + 1;
        if(next == MaxFrame+1)
        {
            NowFrame = MaxFrame;
            next = 1;
        }
        if(bStart == 0)
        {
            bStart = 1;

            setTimeout('fnToggle()', 1000);
            return;
        }
        else
        {
            $("#oTransContainer").filters[0].Apply();
            document.images['oDIV'+next].style.display = "";
            document.images['oDIV'+NowFrame].style.display = "none";
            $("#oTransContainer").filters[0].Play(duration=5);
            if(NowFrame == MaxFrame)
                NowFrame = 1;
            else
                NowFrame++;
        } setTimeout('fnToggle()', 6000);
    }
    fnToggle();
</SCRIPT>
<!--头部导航栏结束-->
    <!--头部导航栏结束-->
</div>
<div class="xiugaiContent">
    <!--欢迎进入河南消防信息网投稿系统-->
   <div class="welcom">
    <img src="/news/Public/Home/images2015/zxtg_01.gif">
     <span class="denglu"><b>[ 用户名：<?php echo (session('username')); ?> ]</b></span>
     <span class="zhuxiao"><a href="<?php echo U('Login/loginOut');?>"><b>[ 注销 ]</b></a></span>
</div>
    <!--主题内容背景-->
    <div class="bj_main1">
        <!--修改密码-->
       <div class="bj_main2">
        <div class="bj_main2_top">
            <span>修改密码</span>
        </div>
           <form action="<?php echo U('UserCenter/modify_pwd');?>" method="post" enctype="multipart/form-data" id="user_info">
               <div class="bj_main2_main">
                   <ul class="ul_left">
                       <li><input type="hidden" name="id" value="<?php echo (session('userid')); ?>"></li>
                       <li>
                           用户名：<input type="text"  name="username" disabled value="<?php echo (session('username')); ?>">
                       </li>
                       <li>电&nbsp;话：<input type="text" name="phone" value="<?php echo ($user_info['phone']); ?>"> </li>
                       <li>邮&nbsp;件：<input type="text" value="<?php echo ($user_info['email']); ?>" name="email"></li>
                   </ul>
                   <ul class="ul_right">
                       <li>新&nbsp;密&nbsp;码：<input type="password" name="password"></li>
                       <li>确认新密码：<input type="password" name="password2"></li>
                   </ul>
               </div>
               <div class="bj_main2_bottom">
                   <button class="xg_btn_1" type="submit">确定</button>
                   <button class="xg_btn_2" type="return"><a href="<?php echo U('UserCenter/index');?>">返回</a></button>
               </div>
           </form>
       </div>
    </div>
</div>
<!--footer引入-->
<div class="bottom">
    <div class="zi">
        Copyright (C) 2015 All Rights Reserved. 版权所有 河南消防总队
        <br/>
        联系地址：河南省郑州市福元路158号   联系电话：0371-66615111
    </div>
</div>

</body>
<script>
$(function () {
    //表单 手机邮箱验证
//    $("#user_info").submit(function () {
//        if($("#phone").val()!=""){
//            if (!$("#phone").val().match(/^( (13[0-9]{1})|(15[0-9]{1})|(17[0-9]{1})|(18[0-9]{1}))+(\d{8})$/)) {
//                alert("手机号码格式不正确！");
//                return false;
//            }
//        }
//        if($("#mail").val()!=""){
//            if (!$("#mail").val().match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)) {
//                alert("邮箱格式不正确！");
//                return false;
//            }
//        }
//    })
})
</script>
</html>