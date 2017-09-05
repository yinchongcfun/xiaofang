<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<meta charset="UTF-8"/>
<head>
    <style type="text/css">
        #tg_content1 {
            background: #FFF;
            overflow:hidden;
            border: 0px dashed #CCC;
            height: 100px;
            width: 100%;
        }
        #tg_content1 tr   {
            display: block;
        }
        #dd1  td{padding: 5px 12px}
        #dd2  td{padding: 5px 12px}
    </style>
    <title>Demo</title>

    <link rel="stylesheet" type="text/css" href="./Public/Admin/ueditor/third-party/video-js/video-js.min.css"/>
    <script type="text/javascript" src="./Public/Admin/ueditor/third-party/video-js/video.js"></script>
    <script src="http://cdn.bootcss.com/html5media/1.1.8/html5media.min.js";></script>

    <link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/detail.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/list.css" />
    <script type="text/javascript" src="/Public/Home/js/jquery-1.7.1.min.js"></script>
    <script>
        $(function(){
            $(".content_left1_left ol li").mouseenter(function(){
                $(this).addClass("current").siblings().removeClass("current");
                $(".content_left1_left ul li").eq($(this).index()).fadeIn("fast").siblings().fadeOut();
            });
        });

    </script>
    <script  type="text/javascript"  src="/Public/Home/js/index.js"> </script>
    <script type="text/javascript">
        $(function(){
            $(".wrapper1_top>li").mouseenter(function(){
                //给当前元素添加active这个样式
                //给当前这个元素的所有兄弟元素移除active这个样式
                $(this).addClass("active").siblings().removeClass("active");
                //让下面的div内容，根据上面tab栏菜单展示相应内容
                var index=$(this).index();
                $(".main1")
                        .eq(index).addClass("selected")
                        .siblings(".main1").removeClass("selected");

            });
        });
    </script>
    <script type="text/javascript">
        $(function(){
            $(".wrapper2_top>li").mouseenter(function(){
                //给当前元素添加active这个样式
                //给当前这个元素的所有兄弟元素移除active这个样式
                $(this).addClass("active").siblings().removeClass("active");
                //让下面的div内容，根据上面tab栏菜单展示相应内容
                var index=$(this).index();
                $(".main2")
                        .eq(index).addClass("selected")
                        .siblings(".main2").removeClass("selected");

            });
        });
    </script>
    <script>
        $(function(){
            $(".navTitle ul li").mouseover(function(){
                var index = $(".navTitle ul li").index(this);
                $(".navTitle").siblings().hide().siblings("div").eq(index).show();

            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var length
            var   currentIndex = 0,
                    interval,
                    hasStarted = false,//是否已经开始轮播
                    t = 2000; //轮播时间间隔
            length = $('.slider-panel').length;
            //将除了第一张图片隐藏
            $('.slider-panel:not(:first)').hide();
            //将第一个slider-item设为激活状态
            $('.slider-item:first').addClass('slider-item-selected');
            //鼠标上悬时显示向前、向后翻按钮,停止滑动，鼠标离开时隐藏向前、向后翻按钮，开始滑动
            $('.slider-panel').hover(function() {    stop();    $('.slider-page').show();   },
                    function() {    $('.slider-page').hide();    start();   });
            $('.slider-item').hover(function(e) {    stop();
                var preIndex = $(".slider-item").filter(".slider-item-selected").index();
                currentIndex = $(this).index();
                play(preIndex, currentIndex);   }, function() {    start();   });
            /**    * 向前翻页    */
            function pre() {    var preIndex = currentIndex;
                currentIndex = (--currentIndex + length) % length;
                play(preIndex, currentIndex);   }

            // 向后翻页

            function next() {    var preIndex = currentIndex;
                currentIndex = ++currentIndex % length;play(preIndex, currentIndex);   }
            // 从preIndex页翻到currentIndex页    * preIndex 整数，翻页的起始页    * currentIndex 整数，翻到的那页
            function play(preIndex, currentIndex) {    $('.slider-panel').eq(preIndex).fadeOut(500)
                    .parent().children().eq(currentIndex).fadeIn(1000);
                $('.slider-item').removeClass('slider-item-selected');
                $('.slider-item').eq(currentIndex).addClass('slider-item-selected');   }
            /**    * 开始轮播    */
            function start() {
                if(!hasStarted) {    hasStarted = true;    interval = setInterval(next, t);    }   }
            /**    * 停止轮播    */
            function stop() {    clearInterval(interval);    hasStarted = false;   }
            //开始轮播
            start();   });
    </script>
</head>
<body style="background: url('/Public/Home/imgs/bg.png') no-repeat">
<!--头部开始-->
<div class="center head logobg">
    <div><img src="/Public/Home/imgs/logo3.png"   /></div>
    <div class="tuchange">
        <div class="slider">
            <ul class="slider-main">
                <li class="slider-panel">
                    <img alt=""  src="/Public/Home/imgs/toubutu1.png">
                </li>
                <li class="slider-panel">
                    <img alt=""  src="/Public/Home/imgs/toubutu2.png">
                </li>
                <li class="slider-panel">
                    <img alt=""  src="/Public/Home/imgs/toubutu3.png">
                </li>

            </ul>
        </div>
    </div>
    <div  style="position: absolute; right: 0px;top: 10px;"><img src="/Public/Home/imgs/thl.png"></div>
    <div style="position: absolute; right: 0px;top: 10px;">
    </div>
</div>
<!--header头部开始-->
<!--header头部结束-->
<div class="nav">
    <div  class="nav_menus">
        <div class="nav_buju">
            <ul>
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                <?php if(is_array($catemsg)): foreach($catemsg as $key=>$vo): ?><li><a href="<?php echo U('Newslist/lst',array('cate_id'=>$vo['cate_id']));?>"><?php echo ($vo["cate_name"]); ?></a></li><?php endforeach; endif; ?>
                <li><a href="<?php echo U('File/file_list');?>">下载中心</a></li>
                <li><a href="#">数据传输</a></li>
                <li><a href="#">办公系统</a></li>
                <li><a href="#">在线投稿</a></li>
                <li><a href="#">搜索引擎</a></li>
                <li><a href="#">在线投稿</a></li>
                <li><a href="#">怀念旧版</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="newsist">
<div   class="biaolan">
    <div  class="biaolan_div">
        <a href="<?php echo U('Index/index');?>" style="color: #3389DE;font-weight: bold">主页</a>>>
        <a href="#"  style="color: #3389DE;font-weight: bold"><?php echo ($catemsgAll["cate_name"]); ?></a>
    </div>

</div>
<div class="content">
      <div class="content_left">
          <div  class="content_left_nav"><?php echo ($catemsgAll["cate_name"]); ?></div>
          <div  class="content_left_content" >
              <ul>
                  <?php if(is_array($newsmsgall)): foreach($newsmsgall as $key=>$vo): if($vo["cate_id"] == 21): ?><div style="width: 32%;list-style-type: none;  display:inline-block;  text-align: center; "><?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?>...<?php echo (htmlspecialchars_decode($vo["content"])); ?></div>
                          <?php else: ?>
                          <?php if($vo["cate_id"] == 20): ?><li style="width: 32%;list-style-type: none;  display:inline-block;  text-align: center; "><a href="<?php echo U('Detail/detail',array('id'=>$vo['id']));?>"><img style="height: 150px;width: 180px" src="<?php echo ($vo["news_big_img"]); ?>"/><p><?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?></p></a></li>
                              <?php else: ?>
                          <li><img src="/Public/Home/imgs/xinxiang.png"/><a href="<?php echo U('Detail/detail',array('id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a><span>【<?php echo date('m-d',$vo['add_time']);?>】</span></li><?php endif; endif; endforeach; endif; ?>
              </ul>
          </div>
      </div>
      <div class="content_right">
          <div class="sousuokuang">
              <form method="get" id="searchform" action="https://www.baidu.com/">
                  <fieldset class="search">
                      <input type="text" class="box" name="s" id="s" class="inputText" placeholder="搜索" >
                      <button class="btn" title="search"> 搜索</button>
                  </fieldset>
              </form>
          </div>
          <div class="box">
              <!--频道开始-->
              <div class="box_top">
                  <table width="100%"    border="0" cellspacing="0" cellpadding="0"  valign="middle">
                      <tr>
                          <td width="100%"><div class="center_top2_4">栏目导航
                          </div></td>
                          <td width="100%">&nbsp;</td>
                      </tr>
                  </table>
              </div>
              <div class="box_content">
                  <table width="100%" border="0" cellpadding="0" cellspacing="0" >
                      <tr>
                          <td width="34"><div align="center"><img src="/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                          <td height="29"><a href="<?php echo U('Newslist/lst',array('cate_id'=>'8'));?>" target='_self'>支队动态</a></td>
                          <td width="7">&nbsp;</td>
                      </tr>
                      <tr>
                          <td height="1" colspan="2" background="/Public/Home/imgs/jt.png"></td>
                      </tr>

                      <tr>
                          <td height="2"></td>
                          <td></td>
                          <td></td>
                      </tr>

                      <tr>
                          <td width="34"><div align="center"><img src="/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                          <td height="29"><a href="<?php echo U('Newslist/lst',array('cate_id'=>'17'));?>" target='_self'>灭火救援</a></td>
                          <td width="7">&nbsp;</td>
                      </tr>
                      <tr>
                          <td height="1" colspan="2" background="/Public/Home/imgs/jt.png"></td>
                      </tr>

                      <tr>
                          <td height="2"></td>
                          <td></td>
                          <td></td>
                      </tr>

                      <tr>
                          <td width="34"><div align="center"><img src="/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                          <td height="29"><a href="<?php echo U('Newslist/lst',array('cate_id'=>'16'));?>" target='_self'>媒体报道</a></td>
                          <td width="7">&nbsp;</td>
                      </tr>

                      <tr>
                          <td height="1" colspan="2" background="/Public/Home/imgs/jt.png"></td>
                      </tr>
                      <tr>
                          <td height="2"></td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td width="34"><div align="center"><img src="/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                          <td height="29"><a href="<?php echo U('Newslist/lst',array('cate_id'=>'7'));?>" target='_self'>消防要闻</a></td>
                          <td width="7">&nbsp;</td>
                      </tr>
                      <tr>
                          <td height="1" colspan="2" background="/Public/Home/imgs/jt.png"></td>
                      </tr>

                      <tr>
                          <td height="2"></td>
                          <td></td>
                          <td></td>
                      </tr>

                      <tr>
                          <td width="34"><div align="center"><img src="/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                          <td height="29"><a href="<?php echo U('Newslist/lst',array('cate_id'=>'22'));?>" target='_self'>警营文化</a></td>
                          <td width="7">&nbsp;</td>
                      </tr>
                      <tr>
                          <td height="1" colspan="2" background="/Public/Home/imgs/jt.png"></td>
                      </tr>

                      <tr>
                          <td height="2"></td>
                          <td></td>
                          <td></td>
                      </tr>

                      <tr>
                          <td width="34"><div align="center"><img src="/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                          <td height="29"><a href="<?php echo U('Newslist/lst',array('cate_id'=>'18'));?>" target='_self'>调研文章</a></td>
                          <td width="7">&nbsp;</td>
                      </tr>
                      <tr>
                          <td height="1" colspan="2" background="/Public/Home/imgs/jt.png"></td>
                      </tr>

                      <tr>
                          <td height="2"></td>
                          <td></td>
                          <td></td>
                      </tr>

                      <tr>
                          <td width="34"><div align="center"><img src="/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                          <td height="29"><a href='#' target='_self'>消防视频</a></td>
                          <td width="7">&nbsp;</td>
                      </tr>
                      <tr>
                          <td height="1" colspan="2" background="/Public/Home/imgs/jt.png"></td>
                      </tr>

                      <tr>
                          <td height="2"></td>
                          <td></td>
                          <td></td>
                      </tr>

                      <tr>
                          <td width="34"><div align="center"><img src="/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                          <td height="29"><a href="<?php echo U('Newslist/lst',array('cate_id'=>'19'));?>" target='_self'>感悟消防</a></td>
                          <td width="7">&nbsp;</td>
                      </tr>
                      <tr>
                          <td height="1" colspan="2" background="/Public/Home/imgs/jt.png"></td>
                      </tr>

                      <tr>
                          <td height="2"></td>
                          <td></td>
                          <td></td>
                      </tr>

                      <tr>
                          <td width="34"><div align="center"><img src="/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                          <td height="29"><a href="<?php echo U('Newslist/lst',array('cate_id'=>'23'));?>" target='_self'>时政要闻　</a></td>
                          <td width="7">&nbsp;</td>
                      </tr>
                      <tr>
                          <td height="1" colspan="2" background="/Public/Home/imgs/jt.png"></td>
                      </tr>

                      <tr>
                          <td height="2"></td>
                          <td></td>
                          <td></td>
                      </tr>
                  </TABLE>

              </div>
          </div>
      </div>
</div>
</div>

<div class="bottom">
    <!--底部开始-->
    <div class="zi">
        版权所有：周口市消防支队 All Rights Reserved @ 周口消防网
        <br/>
        未经周口消防网书面特别授权，请勿转载或建立镜像
        <br/>
        违者依法追究相关法律责任
    </div>
    <!--底部结束-->
</div>
</body>
</html>