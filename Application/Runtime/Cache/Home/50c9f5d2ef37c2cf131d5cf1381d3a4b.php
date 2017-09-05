<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta  charset="utf-8">
    <title>登陆</title>
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

    <div  style="width:550px;height: 260px;border: 2px solid darkgray; font-weight: bold;font-size: 12px; margin: 0 auto;margin-top: 60px">
        <div  style="width:220px;height: 260px;border: 0px solid red;float: left;">
            <img src="/news/Public/Home/images2015/ht_01.gif" width="220" height="260">
        </div>
        <div  style="width:320px;height: 260px;border: 0px solid red;background-color: #fff; font-weight: bold;font-size: 12px;float: left;margin-left: 10px">
            <div  style="width:320px;height: 50px;background-color: #fff; font-weight: bold;font-size: 18px;padding:0 ;color: orange; text-align:center;margin-top: 20px">
                进行在线投稿需要专门的权限    请用系统管理员分配给您的账号进行登录
            </div>
            <div  style="width:310px;height: 150px;border:4px solid gainsboro;background-color: #fff; font-weight: bold;font-size: 12px;border-radius:10px;margin-top: 10px">
                  <form   action="<?php echo U('Login/checkLogin');?>"  method="post" onsubmit="return checkForm();"  style="margin-left: 15px">
                       用户名：  <input type='text' style="border:1px solid #CCC; background-color:#CCC; width:150px; height:25px ;background-color: rgb(204,232,207);margin-top: 15px" placeholder="请输入用户名" name="username" id="yhm"   >
                        <br> <br>
                      密   码  ： <input type='password' style="border:1px solid #CCC; background-color:#CCC; width:150px; height:25px ;background-color: rgb(204,232,207);"  name="password" placeholder="密码至少6位数字"id="mm"   >
                        <br>
                     <input type="submit"   style="border:1px solid #CCC; margin-top:10px;margin-left: 50px;border-radius:5px; background-color:#CCC; width:50px; height:25px;" value='确定'id="msgconfirmb" >
                     <input type="button" style="border:1px solid #CCC;margin-top:10px;margin-left: 10px;border-radius:5px; background-color:#CCC; width:50px; height:25px;" value='关闭'  id="msgcancelb"   onClick="history.back()">
                     <input type='reset' style="border:1px solid #CCC; margin-top:10px;margin-left: 10px;border-radius:5px;background-color:#CCC; width:50px; height:25px;" value='重写'  id="reset">
                  </form>
                </div>
          </div>
        </div>
    </div>

    <div style="margin-top: 200px"></div>
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
<script type="text/javascript" language="javascript">

function  open(){
    window.location.href="投稿信息表.htm" ;

}
function remove(){
    /*
     清除遮罩层以及弹出的对话框
     */
    var mask=document.getElementById("mask");
    var msgbox=document.getElementById("msgbox");
    if(null==mask&&null==msgbox)return;
    document.body.removeChild(mask);
    document.body.removeChild(msgbox);
}


function reset(){
    /*
     清除遮罩层以及弹出的对话框
     */
    var yhm=document.getElementById("yhm");
    var mm=document.getElementById("mm");
//    document.body.reset(mhm);
//    document.body.reset(mm);
    yhm.css.display="none";
}
    function remove(){
        //window.history.back();
        alert("1");
        window.opener=null;
        window.open('','_self');
        window.close();
    }

</script>