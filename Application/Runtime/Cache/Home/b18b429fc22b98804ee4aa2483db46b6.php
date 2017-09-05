<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>回复列表</title>
    <style>
        body{background-color: rgb(204,232,207);}
    .huifu{width: 1000px;height: 600px;margin: 0 auto;}
    .huifu span{line-height: 40px;font-weight: bold;font-size: 18px;margin-left: 10px}
    .lbrbcenter{width: 1000px;height: 35px;border: 1px solid  gainsboro;margin: 0 auto}
    .lbrbcenter{width: 100%;height: 35px;border: 1px solid  gainsboro;}
    .lbrbcenter_l{width: 45%;height:35px;border: 0px solid  burlywood;float: left;text-align: center;font-size: 15px;line-height: 35px}
    .lbrbcenter_r{width: 45%;height: 35px;border: 0px solid  green;float: right}
    .lbrbcenter_r  a{color: grey;font-size: 15px;line-height: 35px;margin-left: 10px}
    .lbrbcenter_r span{font-size: 15px;margin-left: 10px}
    .lbrbcenter_r input{width: 16px;height: 12px;border: 1px solid  gray}
    .lbrbcenter_r a img{width: 25px;border: 0px;}
    .table_bj{width: 100%;border-collapse: collapse}
    .table_bj tr{height: 35px;border-collapse: collapse;border: 1px  solid ghostwhite}
    .table_bj td{padding-left: 8px;border-collapse: collapse;border: 1px  solid  ghostwhite}
    .table_bj td a{color: grey;text-decoration: none}
    .table_bj td a:hover{color: #FFF}
    </style>
    <link rel="stylesheet" type="text/css" href="/news/Application/Home/View/Layout/header_footer.css" />

    <link rel="stylesheet" href="/news/Application/Home/View/Layout/page.css"/>
</head>
<script type="text/javascript" src="/news/Public/Home/js/1.7.1.min.js"></script>

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
    <div class="huifu">
    <span>回复列表</span> <br>
        <table class="table_bj" >
            <tr style="background-color: #CCEEFF;height: 35px">
            <td> 新闻标题</td>
            <td> 回复时间</td>
            <td> 回复人</td>
            <td> 回复内容</td>
            <td> 操作</td>
            </tr>
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo (mb_substr($vo["title"],0,15,'utf-8')); ?>...</td>
                    <td><?php echo date('Y-m-d',$vo['add_time']);?></td>
                    <td><?php echo ($vo["shr"]); ?></td>
                    <td><?php echo (mb_substr($vo["reply_msg"],0,10,'utf-8')); ?>... </td>
                    <td><a href="javascript:" onclick="showMsg(this,'/news/index.php/Home/UserCenter/reply_detail/id/<?php echo ($vo["id"]); ?>')">回复详情</a>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <span  class="pages" style="margin-right: 20px;float: right"> <?php echo ($pagelist); ?> </span>
    </div>
    
    <!--隐藏区域-->
    <div class="msg-container" id="msg_div"
         style="display:none;width:300px; height:300px; background-color:#CCE8CF;margin:0 auto;opacity: 1 ;
         border:1px solid #CCC;
      background-color: ghostwhite;
        border:1px solid #333;
        padding:5px;
        position: absolute;
        overflow: hidden; ">
        <p  style="margin-top: 5px;margin-left: 92%"><button id="guanbi" onclick="guanbi()"> 关闭</button></p>
        <p style="text-align: center">回复信息如下：</p>
        <br>
        <span name="reply_msg" id="reply_msg" style="width: 100%;height: 100%;z-index: 200;" scroll="auto"></span>

    </div>
    <!--隐藏区域结束-->
    <script>

        function guanbi(){
            $("#msg_div").css('display','none')
        }
            function showMsg(obj,url) {
//                alert(url);
                $.ajax({
                    type: "GET",
                    url: url,
//                    data: {id:id},
                    dataType: "text",
                    success: function (data) {
                        var html = data;
                        $('#reply_msg').html(html);
                        var popUp = document.getElementById("msg_div");
                        popUp.style.top = "150px";
                        popUp.style.left = "30%";
                        popUp.style.width = "600px";
                        popUp.style.height ="300px";
                        $('#msg_div').css('display','block');
                    },
                    error: function(data) {
                        alert(data);
                    }
                });
            }

    </script>
    <div class="lbrbcenter">
        <div class="lbrbcenter_l">
            <!--共81条记录  第1页/共9页  10项/页-->
        </div>
        <div class="lbrbcenter_r">
            
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