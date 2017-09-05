<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title><?php echo ($newsmsg["title"]); ?></title>
    <!--头部导航栏开始-->
    <!---->
    <link rel="stylesheet" type="text/css" href="/news/Application/Home/View/Layout/header_footer.css" />
    <!--头部导航栏结束-->
    <style>
        a{text-decoration: none;color: #000000}
        .newsContaint{width: 1100px;height: 1000px;border: 0px solid red;margin: 0 auto}
        .news_Top{width: 70%;height: 110px;margin: 0 auto;border: 0px solid brown}
        .news_Top h2{text-align: center;color: red;line-height: 50px}
        .news_Details{width: 60%;height: 20px;margin:0 auto;border: 0px solid hotpink}
        .news_Details span{float: left;margin-left: 40px}
        .newsMain{width: 100%}
        .newsMain p{ text-indent:2em;line-height: 30px;font-size: 18px}
        .newsImgs{float: left;border: 0px solid red;width: 360px;height: 300px;padding-top: 0px}
        .newsImgs img{width: 360px;height: 300px;}
    </style>

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
<div class="newsContaint">
   <div class="news_Top">
  <h2><?php echo ($newsmsg["title"]); ?></h2>
   </div>
    <div class="news_Details">
         <span>时间：<?php echo date('m-d',$newsmsg['add_time']);?></span>
         <span>作者：<?php echo ($newsmsg["author"]); ?></span>
         <span><a href="#">（浏览次数： <?php echo ($newsmsg["view"]); ?>）</a></span>
    </div>
    <hr style="border: 1px solid #dcdcdc"/>
    <div class="newsMain">
        <?php echo (htmlspecialchars_decode($newsmsg["content"])); ?>
    </div>
</div>
</body>
<!--footer引入-->
<div class="bottom">
    <div class="zi">
        Copyright (C) 2015 All Rights Reserved. 版权所有 河南消防总队
        <br/>
        联系地址：河南省郑州市福元路158号   联系电话：0371-66615111
    </div>
</div>

<script>
    var ajax;
    if(window.XMLHttpRequest){ ajax = new XMLHttpRequest();}else{ ajax = new ActiveXObject('Microsoft.XMLHTTP');}
    ajax.open('GET','/news/index.php/Home/Detail/set_hits/id/<?php echo ($_GET['id']); ?>',true);
    ajax.send();
</script>
</html>