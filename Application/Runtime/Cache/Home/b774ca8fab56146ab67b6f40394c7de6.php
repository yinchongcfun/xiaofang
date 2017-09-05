<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>用户中心</title>
    <style>
      a{text-decoration: none;color: #000000}
     .tgxt_container{border: 0px solid red;width: 1100px;height:925px;margin: 0 auto;}
     .welcom{margin: 0 auto;height: 70px;width: 100%;position: relative}
     .welcom img{width: 100%;height: 70px;z-index: -1;position: absolute;}
        .denglu{float: right;margin-right: 30px;margin-top: 8px}
        .zhuxiao{float: right;margin-right: 30px;margin-top: 8px}
        .zgzd{width: 100%;height:430px;margin: 0 auto;background-color: ghostwhite;border: 0px solid navy }
        .zgzd_top{width: 100%;height: 60px;margin: 0 auto;border: 0px solid navy}
        .zgzd_top img{width: 200px;height: 45px;margin-top: 10px}
        .zgzd_main{width: 95%;height: 260px;border: 2px solid #dcdcdc;margin-left: 10px;background-color: rgb(204,232,207);
                   overflow-y: scroll;overflow-x:hidden; scrollbar-face-color:#70807d; scrollbar-arrow-color:#ffffff;
            scrollbar-highlight-color:#ffffff;  scrollbar-3dlight-color:#70807d; scrollbar-shadow-color:#ffffff;
            scrollbar-darkshadow-color:#70807d;scrollbar-track-color:#ffffff;line-height: 25px  }
        .zgzd_bottom{width: 60%;border: 0px solid gold;float: right;margin-top: 40px}
        .zgzd_bottom span{float: left;margin-left: 16px}
        .zgzd_bottom span img{width: 40px;height: 40px;border: 0px}
        .tablebg{background-color: #ffffff;width: 1100px}
        .tablebg_top{border: 2px solid #dcdcdc;width: 99%;height: 40px;margin: 0 auto;background-color: #ffffff}
        .tablebg_top div{margin-left: 20px;margin-top: 10px;font-size: 18px;}
        .tablebg_main{width: 99%;margin: 0 auto;margin-top: 2px;border: 2px solid #dcdcdc;}
        .table_bj{width: 100%;}
        .table_bj tr{height: 35px;border-collapse: collapse;border: 1px  solid ghostwhite}
        .table_bj td{padding-left: 8px;border-collapse: collapse;border: 1px  solid  ghostwhite}
        .lbrbcenter{width: 100%;height: 35px;border: 1px solid  gainsboro;}
        .lbrbcenter_l{width: 45%;height:35px;border: 0px solid  burlywood;float: left;text-align: center;font-size: 15px;line-height: 35px}
        .lbrbcenter_r{width: 45%;height: 35px;border: 0px solid  green;float: right}
        .lbrbcenter_r  a{color: grey;font-size: 15px;line-height: 35px;margin-left: 10px}
        .lbrbcenter_r span{font-size: 15px;margin-left: 10px}
        .lbrbcenter_r input{width: 16px;height: 12px;border: 1px solid  gray}
        .lbrbcenter_r a img{width: 25px;border: 0px;}

    </style>
    <link rel="stylesheet" type="text/css" href="/news/Application/Home/View/Layout/header_footer.css" />
    <link rel="stylesheet" href="/news/Application/Home/View/Layout/page.css"/>
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

  <div class="tgxt_container">
    <!--欢迎进入河南消防信息网投稿系统-->
    <div class="welcom">
     <img src="/news/Public/Home/images2015/zxtg_01.gif">

       <span class="zhuxiao"><a href="<?php echo U('Login/loginOut');?>"><b>[ 注销 ]</b></a></span>
       <span class="denglu"><b>[ 用户名：<?php echo (session('zhusername')); ?> ]</b></span>
     </div>
    <!--征稿重点-->
    <div class="zgzd">
        <div class="zgzd_top">
         <img src="/news/Public/Home/images2015/zxtg_02.gif"/>
        </div>
        <div class="zgzd_main">
            <span><b>注意事项</b></span><br/>
            1、要准确填写投稿人姓名和联系电话，以便网站采编人员与您联系。<br/>
            2、稿件信息中“投往站点”目前只可选择“总站”，待总队各部门二级网站开通后方可选择其他子网站<br/>
            3、稿件信息中“显示标题”为<br/>
            2、稿件信息中“   ”<br/>
            2、稿件信息中“   ”<br/>
            2、稿件信息中“   ”<br/>
            2、稿件信息中“   ”<br/>
            2、稿件信息中“   ”<br/>
            2、稿件信息中“   ”<br/>
            2、稿件信息中“   ”<br/>
        </div>
        <div class="zgzd_bottom">
         <span><a href="<?php echo U('UserCenter/news_add');?>"><img src="/news/Public/Home/images2015/zxtg_03.gif"/>新增投稿</a></span>
         <span><a href="<?php echo U('UserCenter/reply_list');?>"><img src="/news/Public/Home/images2015/zxtg_05.gif"/>回复列表</a></span>
         <span><a href="<?php echo U('UserCenter/yitou');?>"><img src="/news/Public/Home/images2015/zxtg_06.gif"/>已投稿件</a></span>
         <span><a href="<?php echo U('UserCenter/yifa');?>"><img src="/news/Public/Home/images2015/zxtg_07.gif"/>已发稿件</a></span>
         <span><a href="<?php echo U('UserCenter/modify_pwd');?>"><img src="/news/Public/Home/images2015/zxtg_07.gif"/>修改密码</a></span>
       </div>
      </div>
      <!--投稿列表-->
      <div class="tablebg">
          <div class="tablebg_top">
              <div><b>最新投稿（最近十天内投稿还未受理的稿件）</b></div>
          </div>
          <div class="tablebg_main">
          <table class="table_bj">
              <tr style="background-color: #CCEEFF;height: 35px">
                  <th style="width: 53%;">标题</th>
                  <th style="width: 20%;">投稿单位</th>
                  <th style="width: 13%;">投稿时间</th>
                  <th colspan="2" style="width: 10%;">修改</th>
              </tr>
              <?php if(is_array($wsl)): $i = 0; $__LIST__ = $wsl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                      <td><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?>...</td>
                      <td><?php echo ($local_names); ?></td>
                      <td><?php echo date('Y-m-d',$vo['add_time']);?></td>
                      <td><a href="<?php echo U('UserCenter/news_edit',array('id'=>$vo['id']));?>">修改</a></td>
                      <td><a href="<?php echo U('UserCenter/news_del',array('id'=>$vo['id']));?>"onclick="if(confirm('确定删除此新闻么?')==false)return false;">删除</a></td>
                  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </table>
              <span  class="pages" style="margin-right: 20px;float: right"> <?php echo ($pagelist); ?> </span>
              <div class="lbrbcenter">
                  <div class="lbrbcenter_l">
                      <!--共81条记录  第1页/共9页  10项/页-->
                  </div>
                  <div class="lbrbcenter_r">
                  </div>
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