<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta  charset="utf-8">
    <title>组织机构</title>
    <style>
        .main{width: 1100px;
            border: 1px solid #D3E5F4;
            margin: 0 auto;
        }
        .sidebar{width: 15%;height:600px;float: left;
            border: 0px solid red; background-color:rgb(211,229,244);}
        .sidebar_header{width: 100%;height: 160px;
            border: 0px solid #000;  }
        .sidebar_header  img{ width: 100%;height: 160px;  }
        .sidebar_btom{width: 100%;}
        .con{width: 90%;height: 30px; background-color: #ffffff;font-size: 20px;margin: 20px  auto;
            text-align: center;padding-top: 6px;
        }
        .content{width: 925px;float: left; border: 0px solid #6ee8cd;height: auto;margin-left: 7px}
        .sidebar_btom a{color: red;text-decoration: none;line-height: 18px}
    </style>
    <link rel="stylesheet" type="text/css" href="/news/Application/Home/View/Layout/header_footer.css" />
    <style>

        #wapper {min-height: 100%;}
        #main-content {overflow:visible;
            padding-bottom: 60px;}  /* 必须使用和footer相同的高度 */
        .bottom {position: relative;
            margin-top: -60px;
            height: 100px;
            clear:both;
            /*background:#369*/
        }
    </style>

</head>
<body >
 <div id="wapper">
    <!-- 主要内容 -->
    <div id="main-content">

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
            <ul style="font-family: 'Microsoft YaHei', 微软雅黑, Verdana, Arial, Helvetica, sans-serif">
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
       <div   class="main">
           <div class="sidebar">
               <div   class="sidebar_header">
                   <img src="/news/Public/Home/imgs/zzjg01.gif">
               </div>
               <div class="sidebar_btom">
                   <div  class="con"><a  href="<?php echo U('Organization/index',array('id'=>1));?>">支队领导</a></div>
                   <div  class="con"><a  href="<?php echo U('Organization/index',array('id'=>2));?>">部门职责</a></div>
                   <div  class="con"><a  href="<?php echo U('Organization/index',array('id'=>3));?>">队伍概况</a></div>
                   <div  class="con"><a  href="<?php echo U('Organization/index',array('id'=>4));?>">地理位置</a></div>
               </div>
           </div>
           <div class="content">
               <?php echo (htmlspecialchars_decode($news_info['content'])); ?>
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

 </div>
</body>
</html>