<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>文章搜索</title>
    <style>


        ul {list-style: none}
        .ws{width: 1100px  ;height: 750px;margin: 0 auto;margin-bottom: 100px}
        .wzssl{  width: 230px;   height: 550px;float: left;border: 0px solid  red;margin-left: 0px;}
        .wzct{width: 220px;height: 250px;margin: 0 auto;border-radius: 5px;border: 2px solid  darkgray;margin-top: 3px;
            background-color:rgb(218,231,244);position: relative}
        .wzct img{width: 220px;  height: 36px;}
        .wzct  .wzbg{width: 100px; height: 30px;position: absolute; top: 0px;left: 40px ;line-height: 30px;
            font-size: 20px ;font-weight: bold;color: #CCE8CF}
        .wzct  form  .bd1{width: 200px;height: 20px;margin-top: 12px;font-size: 15px;margin-left: 10px}
        .wzct  form  .bd1  input{width: 115px;background-color: rgb(204,232,207);margin-left:3px}
        .wzct  .bd2 {width: 220px;height: 25px;margin-top: 10px;}
        .wzct   .bd2 img{float: right;width: 120px;height: 25px}
        .wzct  form  select{width: 120px;background-color: rgb(204,232,207);margin-left: 3px}
        .wzctbm{width: 220px;height:300px;margin: 0 auto;border: 2px solid  gainsboro;border-radius: 5px;margin-top: 10px}
        .wzctbm img{width: 100%;height: 50px}
        .wzctbm  .wzctbm_content{width: 100%;height:230px;border: 1px solid #b0fff7;}
        .wzctbm  .wzctbm_content  ul{padding-left: 0px}
        .wzctbm  .wzctbm_content  ul li{margin-top: 5px;line-height: 20px;}
        .wzctbm  .wzctbm_content  a{ color: #000000;text-decoration: none}
        .wzss{width: 800px;height: 500px;border:0px solid  #000000;position: relative;float: right}
        .wzss .bg1,.bg3{width: 100%;height:50px;}
        .wzss .bg2{width: 100%;height: 450px;margin-top: 0;}
        .wss{width:97% ;height:500px;   margin: 0 auto;border: 0px solid  red;position: absolute;top: 30px;left: 16px;}
        .wsstu{position: relative;height: 70px}
        .wsstu  img{width: 103.2%;height: 70px;margin-left: -16px;}
        .wsstu  .wsstu_title{  width:150px;height:25px;position: absolute;left: 40px;top: 5px;color: #0065bd; border: 0px solid red;font-size: 18px;font-weight: bold}
        .wss .wsscontent{width: 100%;margin: 0 auto;}
        .wss .wsscontent  ul{margin-left: 10px}
        .wss .wsscontent  ul  li  img{width:10px ;height : 15px;margin-left: -15px; }
        .wss .wsscontent  ul  li{margin-top: 10px;margin-left: 20px}
        .wss .wsscontent  ul  li a{color: #000000;text-decoration: none;margin-left: 10px}

        .lbrbcenter{width: inherit;height: 30px;;margin-top: 20px;}
        .bd3{color: #FFF;background-color: #B20000;margin-left:35%;margin-top: 10px;padding: 5px 15px;border-radius: 8px}
    </style>
    <link rel="stylesheet" href="/news/Application/Home/View/Layout/page.css"/>
    <link rel="stylesheet" type="text/css" href="/news/Application/Home/View/Layout/header_footer.css" />
</head>
<body style="background-color: rgb(204,232,207)">
<!--头部开始-->
<div class="top">

    <!--头部导航栏开始-->
    
<link rel="stylesheet" href="/news/Public/Home/css/common.css">
<script type="text/javascript" src="/news/Public/Home/js/1.7.1.min.js"></script>
        <style>
            .top_bj img{width: 100%;height: 153px}
        </style>
<!--头部标题图开始-->
<div class="top_bj">
    <div class="banner">

        <div class="ad">
            <!--焦点图片开始-->
            <DIV id="oTransContainer" style="FILTER: progid:DXImageTransform.Microsoft.Wipe(GradientSize=1.0, wipeStyle=0, motion='forward'); WIDTH: 332px; HEIGHT: 145px">
                <IMG id=oDIV1 style="BORDER-RIGHT: black 0px solid; BORDER-TOP: black 0px solid; DISPLAY: yes;  BORDER-LEFT: black 0px solid;
                BORDER-BOTTOM: black 0px solid" height=80px src="/news/Public/Home/images/ad1.png" width=200PX border=0>
                <IMG id=oDIV2 style="BORDER-RIGHT: black 0px solid;
                BORDER-TOP: black 0px solid; DISPLAY: none; BORDER-LEFT: black 0px solid;
                BORDER-BOTTOM: black 0px solid" height=80px src="/news/Public/Home/images/ad2.png" width=200PX border=0>
                <IMG id=oDIV3 style="BORDER-RIGHT: black 0px solid;
                BORDER-TOP: black 0px solid; DISPLAY: none; BORDER-LEFT:
                black 0px solid; BORDER-BOTTOM: black 0px solid" height=80px src="/news/Public/Home/images/ad1.png" width=200PX border=0>
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

<div class="ws">
    <div  class="wzssl">
        <div class="wzct">
            <img src="/news/Public/Home/search/wzssbg.jpg">
            <div  class="wzbg">文章搜索</div>
            <form action="<?php echo U('search');?>" method="post" >
                <div class="bd1"> 文章标题：<input type="text" name="title" value="<?php echo (session('zkxf_title')); ?>"> </div>
                <div class="bd1"> 文章内容：<input type="text" name="content" value="<?php echo (session('zkxf_content')); ?>"> </div>
                <div class="bd1"> 起始时间：<input type="date" name="begin_time" value="<?php echo (session('zkxf_begin_time')); ?>"> </div>
                <div class="bd1"> 终止时间：<input type="date" name="end_time" value="<?php echo (session('zkxf_end_time')); ?>"> </div>
                <div class="bd1"> 时间格式：<span style="font-size: 12px">2017/08/08</span></div>
                <input type="submit" value="搜索" class="bd3">
            </form>
        </div>
        <div  class="wzctbm">
            <img src="/news/Public/Home/images2015/20150112012447system1.gif">
            <div class="wzctbm_content">
                <!--热点文章-->
                <ul>
                    <?php if(is_array($hotNews)): foreach($hotNews as $key=>$vo): ?><li> &nbsp; &nbsp; <a href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>"><?php echo (mb_substr($vo["title"],0,8,'utf-8')); ?>..</a></li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="wzss" >
        <img class="bg1" src="/news/Public/Home/search/biaoge_top.gif">
        <img class="bg2"src="/news/Public/Home/search/biaoge_bg.gif">
        <img class="bg3" src="/news/Public/Home/search/biaoge_botm.gif">
        <div  class="wss">
            <div class="wsstu">
                <img src="/news/Public/Home/images2015/biaoge_title.gif">.
                <div  class="wsstu_title">搜索结果：</div>
            </div>
            <div  class="wsscontent">
                <ul>
                    <?php if(is_array($newsInfo)): $i = 0; $__LIST__ = $newsInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="/news/Public/Home/search/ssjt.jpg" alt=""/>
                            <a href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>"><?php echo (mb_substr($vo["title"],0,25,'utf-8')); ?>...
                                <?php echo date('Y-m-d',$vo['add_time']);?>
                            </a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>

            <div class="lbrbcenter">
                <span  style="margin-right: 15%;float: right" class="pages" > <?php echo ($pagelist); ?> </span>
            </div>
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
</html>