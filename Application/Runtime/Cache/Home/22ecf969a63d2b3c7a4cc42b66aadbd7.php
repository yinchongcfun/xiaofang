<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta  charset="utf-8">
    <title>新增投稿</title>
    <style>
        body{background-color: rgb(204,232,207);}
        input{background-color: rgb(204,232,207);}
        .box{width: 1100px;height: 100%;margin: 0 auto;border: 2px solid  darkgray;margin-top: 5px;
            box-shadow: 5px 5px 10px darkgray }
        .tgxx1{width: 100%;height: 20px;background-color:#ffffff;border:0px solid  gainsboro;}
        .tgxx2{width: 100%;height: 20px;background-color:#ffffff;border:0px solid  gainsboro;}
        .xx1{width: 100%;   background-color: #ECF5FF;}
        .xxh1{width: 80%;height: 40px;margin: 0 auto;border: 0px solid blue}
        .xxh2{width: 80%;height: 40px;margin: 0 auto;border:0px solid blue;margin-top: 10px}
        .xx2{width: 100%;  background-color: #ECF5FF;}
        .xx3{width: 90%;;margin: 0 auto;border: 1px solid  darkgray}

        .xx3  .wbk{width: 100%; background-color: rgb(204,232,207);}
        .xx5{width: 100%;height: 25px;border: 0px solid  gainsboro; background-color: #fff;position: relative}
        .taogao{ height: 40px;}
        .xxh2 input, .xxh1 input, .xx2 input{ height: 25px;}
        .xxh1 select, .xx2 select{ height: 25px;}
    </style>
    <link rel="stylesheet" type="text/css" href="/news/Application/Home/View/Layout/header_footer.css" />
</head>
<script type="text/javascript" src="/news/Public/Home/js/1.7.1.min.js"></script>
<script type="text/javascript" src="/news/Public/Home/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/news/Public/Home/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/news/Public/Home/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>

<body>

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

   <div class="box">
       <form action="/news/index.php/Home/UserCenter/news_add" method="post" enctype="multipart/form-data" id="form-news-add">
           <div class="tgxx1">&nbsp&nbsp&nbsp&nbsp&nbsp投稿信息:</div>
           <div class="xx1">
               <div  class="xxh1">
                   <div  style="float: left;margin-left: 45px"></span>投稿姓名：<input disabled style=" border: 1px  solid  darkgray" type="text" value="<?php echo (session('username')); ?>"></div>
                   <div  style="float: left;margin-left: 45px"></span>联系电话：<input name="phone" id="phone" disabled value="<?php echo ($local_phone); ?>" style=" border: 1px  solid  darkgray" type="text"></div>
               </div>
               <div  class="xxh2">
                   <div  style="float: left;margin-left: 45px">投稿单位：<input disabled name="role_id" value="<?php echo ($local_name); ?>" style="border: 1px  solid  darkgray" type="text"></div>
                   <div  style="float: left;margin-left: 45px">电子邮件：<input name="email" id="mail" disabled value="<?php echo ($local_email); ?>" style=" border: 1px  solid  darkgray" type="text"></div>
               </div>
           </div>
           <div class="tgxx2" style="clear: both">&nbsp&nbsp&nbsp&nbsp&nbsp投稿信息:</div>
           <div class="xx2">
               <div class="taogao">   <span  style="color: red;margin-left: 30px">*</span> 投往站点：
                   <select  name="role_id" id="role_id"  style="width: 200px;background-color: rgb(204,232,207);border: 1px  solid  darkgray" >
                       <option  value="-1">----请选择投往站点----</option>
                       <?php if(is_array($roleInfo)): $i = 0; $__LIST__ = $roleInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["role_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                   </select>
               </div>
               <div class="taogao">
                   <div style=" width: 120px;float: left">
                   <span  style="float: right"> <span  style="color: red;">*</span> 稿件标题：</span></div>
                   <input required name="title" type="text"style="width: 80%;border: 1px  solid  darkgray" >
               </div>
               <div style="width :90%; margin-left: 40px">正文内容：
               </div>
           </div>
           <div class="xx3">
               <div class="wbk" >
                   <script id="editor" type="text/plain" name="content" style="width:1100px;height:800px;margin-left:-55px"></script>
               </div>
           </div>
           <div class="xx5" style="margin-right: 10px;padding: 0 0">
               <button  style="width:100px;position: absolute;left: 45%;padding: 2px;border-radius: 5px" type="submit">保存并预览</button>
           </div>
       </form>
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

<script>
    var ue = UE.getEditor('editor');
    //
//提交表单前验证
//    $(function () {
//        $("#phone").blur(function () {
//            if($("#phone").val()!=""){
//                if (!$("#phone").val().match(/^( (13[0-9]{1})|(15[0-9]{1})|(17[0-9]{1})|(18[0-9]{1}))+(\d{8})$/)) {
//                    alert("手机号码格式不正确！");
////                    $("#phone").attr("required");
//                }else {
//                }
//            }else {
////                $("#phone").removeAttr("required");
//            }
//        })
//        $("#mail").blur(function () {
//            if($("#mail").val()!=""){
//                if (!$("#mail").val().match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)) {
//                    alert("邮箱格式不正确");
//                }else {
//                }
//            }else {
//            }
//        })
//        $("#form-news-add").submit(function () {
//            if($("#role_id").val()==-1){
//                alert("请选择投往站点！！");
//                return false;
//            }else {
//                return true;
//            }
//        })
//    })

    function changeStyle()
    {
        var title = document.getElementById("wenzineirong").value;
        var select1 = document.getElementById("selector1").value;

        document.getElementById("wenzineirong").style.fontFamily=select1;


    }

    function changeSize()
    {
        var title = document.getElementById("wenzineirong").value;
        var select2= document.getElementById("selector2").value;

        document.getElementById("wenzineirong").style.fontSize=select2;


    }
    function changeColor()
    {
        var title = document.getElementById("wenzineirong").value;
        var select3 = document.getElementById("selector3").value;
        //select.option[]
        document.getElementById("wenzineirong").style.color=select3;

    }

    function boldTest(){
        var test=document.getElementById("wenzineirong").innerHTML;
        document.getElementById("wenzineirong").style.fontWeight="bold";
    }
    function talicTest(){
        document.getElementById("wenzineirong").style.fontStyle="italic";
    }
    function underLineTest(){
        var test1=document.getElementById("wenzineirong").innerHTML;

        document.getElementById("wenzineirong").style.textDecoration="underline";
    }



</script>