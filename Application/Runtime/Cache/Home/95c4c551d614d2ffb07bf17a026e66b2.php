<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>排名详情</title>
    <link rel="stylesheet" type="text/css" href="/news/Application/Home/View/Layout/header_footer.css" />
    <style>

        table{margin: 20px  auto;width: 400px;
            background-color: gainsboro;  }
        table , tr,  td {border-collapse: collapse; border: 1px solid darkgray;text-align: center}
        tr{height: 30px}
        .yi{width: 15%}
        .er{width: 60%}
        .san{width: 25%}
        .er  a{color: blue;text-decoration:underline }
    </style>
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
     <table>
         <tr>
         <td  colspan="3"  style="text-align: center;background-color: #ffffff"><?php echo date('Y-m',time());?>月投稿排名</td>
         </tr>
         <tr>
             <td  class="yi">排名</td>
             <td class="er">单位</td>
             <td  class="san">采用数量</td>
         </tr>

         <?php if(is_array($local_rank)): foreach($local_rank as $key=>$vo): ?><tr >
                 <td class="yi">
                     <?php if(($key == 0) or ($key == 1) or ($key == 2) ): ?><i style="color: red"> <?php echo ($vo['rownum']); ?></i>
                         <?php else: ?>
                         <?php echo ($vo['rownum']); endif; ?>
                 </td>
                 <td class="er"><?php echo ($vo['local_name']); ?></td>
                 <td class="san"><?php echo ($vo['news_sum']); ?></td>
             </tr><?php endforeach; endif; ?>

     </table>

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