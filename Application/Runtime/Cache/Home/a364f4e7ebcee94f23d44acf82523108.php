<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style>
        a{text-decoration:none;}
        .bgxt{ width: 700px;height: 600px;margin:  0 auto;background: url("./spbf/bg.jpg") no-repeat;}
        .bgxt .bgxt_nav{width: 100%;height: 50px;margin-top: 20px;border-bottom:2px solid gray;font-size: 25px;color: dodgerblue;font-weight: bolder;}
        .bgxt .bgxt_content{width: 100%; height: 400px;margin-top: 50px}
        .bgxt_content1{width: 100%;height: 40px;margin-top: 20px; }
        .bgxt_content  a{margin-left: 10px;}
        .bgxt_div{float: left; width: 35%;height: 35px;border: 0px solid #000000;margin-left: 10px;position: relative}
        .bgxt_content img{width: 100%;height: 35px;border: 0px}
      .bgxt_div   .bgxt_zt{position: absolute;height: 35px;top:0px;left: 60px;font-size: 15px;color: #ffffff;line-height: 35px}
    </style>
    <link rel="stylesheet" type="text/css" href="/news/Application/Home/View/Layout/header_footer.css" />
</head>
<body >
<!--头部开始-->
<div class="top">

    <!--头部导航栏开始-->
    
<link rel="stylesheet" href="/news/Public/Home/css/common.css">
<!--<script type="text/javascript" src="/news/Public/Home/js/1.7.1.min.js"></script>-->
        <style>
            .top_bj img{width: 100%;height: 153px}
        </style>
<!--头部标题图开始-->
<div class="top_bj">
    <div class="banner">

        <!--ad end-->
        <div class="flash">
            <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="520" height="180"
                    style="position:absolute; right:0px; bottom:0px;">
                <param name="movie" value="/news/Public/Home/images/sf.swf" />
                <param name="quality" value="high" />
                <param name="wmode" value="transparent" />
                <param name="swfversion" value="11.0.0.0" />
                <!-- 此 param 标签提示使用 Flash Player 6.0 r65 和更高版本的用户下载最新版本的 Flash Player。如果您不想让用户看到该提示，请将其删除。 -->
                <param name="expressinstall" value="Scripts/expressInstall.swf" />
                <!-- 下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。 -->
                <!--[if !IE]>-->
                <object type="application/x-shockwave-flash" data="/news/Public/Home/images/sf.swf" width="520" height="180">
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

                <li><a href="<?php echo U('Organization/index',array('id'=>'1'));?>" target="_blank">组织机构</a></li>
                <li><a href="#">法律法规</a></li>
                <li><a href="<?php echo U('Lmsg/lmsg_list',array('type'=>'0'));?>"  target="_blank">支队长信箱</a></li>
                <li><a href="<?php echo U('Lmsg/lmsg_list',array('type'=>'1'));?>"  target="_blank">政委信箱</a></li>
                <li><a href="/news<?php echo ($upload_url["upload_url"]); ?>"  target="_blank">通信手册</a></li>
                <li><a href="<?php echo U('File/file_list');?>"  target="_blank">下载中心</a></li>
                <li><a href="#">数据传输</a></li>
                <li><a href="<?php echo U('Video/video_list');?>"  target="_blank">视频点播</a></li>
                <li><a href="<?php echo U('OfficeSys/index');?>"  target="_blank">办公系统</a></li>
                <li><a href="<?php echo U('UserCenter/index');?>"  target="_blank">在线投稿</a></li>
                <li><a href="#">旧版网站</a></li>
                <li>
                    <a href="#"
                     onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://10.62.227.101');return (false);"
                     style="BEHAVIOR: url(#default#homepage)">设为首页
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>




<!--头部导航栏结束-->
    <!--头部导航栏结束-->
</div>
   <div class="bgxt">
       <!--<img src="spbf/bg.jpg">-->
       <div class="bgxt_nav"><img src="/news/Public/Home/search/bgxt.jpg"></div>
       <div class="bgxt_content">
           <div  class="bgxt_content1">
              <div   class="bgxt_div"> <a  href="http://10.62.227.110" target="_blank"><img src="/news/Public/Home/search/jhsnajkh.jpg"><div class="bgxt_zt">消防综合业务平台</div></a></div>
               <div   class="bgxt_div"> <a  href="http://10.62.227.101:4500" target="_blank"><img src="/news/Public/Home/search/jhsnajkh.jpg"><div class="bgxt_zt">消防灭火救援战评系统</div></a></div>
           </div>
           <div  class="bgxt_content1">
               <div   class="bgxt_div"> <a  href="http://10.56.25.125/onExam/Web/Index.aspx" target="_blank"><img src="/news/Public/Home/search/jhsnajkh.jpg"><div class="bgxt_zt">消防在线考试系统</div></a></div>
               <div   class="bgxt_div"> <a  href="wslb.asp" target="_blank" ><img src="/news/Public/Home/search/jhsnajkh.jpg"><div class="bgxt_zt">网上练兵系统</div></a></div>
           </div>
           <div  class="bgxt_content1">
               <div   class="bgxt_div"> <a  href="jiankong1.htm" target="_blank"><img src="/news/Public/Home/search/jhsnajkh.jpg"><div class="bgxt_zt">远程监控视频系统</div></a></div>
               <div   class="bgxt_div"> <a  href="http://10.56.25.125/FireStat" target="_blank"><img src="/news/Public/Home/search/jhsnajkh.jpg"><div class="bgxt_zt">火灾统计管理系统</div></a></div>
           </div>
           <div  class="bgxt_content1">
               <div   class="bgxt_div"> <a  href="http://10.62.227.104/xfjd" target="_blank"><img src="/news/Public/Home/search/jhsnajkh.jpg"><div class="bgxt_zt">派出所消防监督系统</div></a></div>
               <div   class="bgxt_div"> <a  href="http://10.2.60.88/zl/" target="_blank"><img src="/news/Public/Home/search/jhsnajkh.jpg"><div class="bgxt_zt">火灾隐患网上追踪</div></a></div>
           </div>

       </div>
   </div>
<!--footer引入-->
<div class="bottom">
    <div class="zi">
        Copyright (C) 2017 All Rights Reserved *版权所有* 周口市公安消防支队 &nbsp;*负责人*&nbsp;支队信息中心：何华伟 &nbsp;&nbsp;

            <a href="http://10.62.227.101:8081/index.php/Admin/Index/index.html" target="_blank" > 管理员登陆</a>
        <br/>
        *地址* 周口市汉阳路与交通路交叉口西100米  *邮政编码*466000   *联系电话* 0394-8380916
    </div>
</div>

</body>
</html>