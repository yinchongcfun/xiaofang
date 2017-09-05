<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta  charset="utf-8">
    <title>修改稿件</title>
    <style>

        /*input{background-color: rgb(204,232,207);}*/
        .box{width: 1100px;height: 100%;margin: 0 auto;border: 2px solid  darkgray;margin-top: 5px;
            box-shadow: 5px 5px 10px darkgray }
        .tgxx1{width: 100%;height: 20px;}
        .tgxx2{width: 100%;height: 20px;}
        .xx1{width: 100%;}
        .xxh1{width: 80%;height: 40px;margin: 0 auto;}
        .xxh2{width: 80%;height: 40px;margin: 0 auto;margin-top: 10px}
        .xx2{width: 100%; }

        .roleInfoRadio{width: 100%;margin: 10px}
        .roleInfoRadio label{height: 20px}
        .roleInfoRadio input{margin-left: 50px;height: 30px}
        .tgc{margin-left: 30px}

        .xx3{width: 90%;;margin: 0 auto;border: 1px solid  darkgray}
        .xx3  .wbk{width: 100%; }
        .xx5{width: 100%;height: 25px;position: relative}
        .taogao{ height: 40px;}
        .xxh2 input, .xxh1 input, .xx2 input{ height: 25px;}
        .xxh1 select, .xx2 select{ height: 25px;}
        .xxh2 label, .xxh1 label, .xx2 label{display: inline-block; height: 40px; line-height: 40px;}
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

<div class="box">
    <form action="/news/index.php/Home/UserCenter/news_save" method="post" enctype="multipart/form-data" id="form-news-add">
        <input type="hidden" name="id" value="<?php echo ($info['id']); ?>">
        <div class="tgxx1"> <span  style="color: red;margin-left: 30px">*</span>投稿信息:</div>
        <div class="xx1">
            <div  class="xxh1">
                <div  style="float: left;margin-left: 45px"></span>投稿姓名：
                    <input  required maxlength="20" type="text" id="author" name="author" value="<?php echo ($info['author']); ?>"></div>
                <div  style="float: left;margin-left: 45px"> </span>联系电话：&nbsp;
                    <input required name="phone" maxlength="20" id="phone"  value="<?php echo ($info['phone']); ?>" style=" border: 1px  solid  darkgray" type="text">
                </div>
            </div>
            <div  class="xxh2">
                <div  style="float: left;margin-left: 45px">核发人：&nbsp; &nbsp;<input required maxlength="20" name="issuer" id="issuer"  value="<?php echo ($info['issuer']); ?>" style=" border: 1px  solid  darkgray" type="text"></div>
                <div  style="float: left;margin-left: 60px">投稿单位：<input disabled name="role_id" value="<?php echo ($local_name); ?>" style="border: 1px  solid  darkgray" type="text"></div>

            </div>
        </div>
        <!--<div class="tgxx2" style="clear: both">&nbsp&nbsp&nbsp&nbsp&nbsp投稿信息:</div>-->
        <div class="xx2">
            <div class="taogao">   <span  style="color: red;margin-left: 30px">*</span> 投往栏目：
                <select  name="cate_id" id="cate_id"  style="width: 200px;border: 1px  solid  darkgray" >
                    <!--<?php if($info['cate_id'] == -1 ): ?>-->
                        <!--<option  value="-1"  >&#45;&#45;各地动态&#45;&#45;</option>-->
                        <!--<?php if(is_array($cate_info)): $i = 0; $__LIST__ = $cate_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                            <!--<option value="<?php echo ($vo["cate_id"]); ?>"><?php echo ($vo["cate_name"]); ?></option>-->
                        <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                    <!--<?php else: ?>-->
                        <?php if(is_array($cate_info)): $i = 0; $__LIST__ = $cate_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['cate_id'] == $info['cate_id']): ?><option value="<?php echo ($vo["cate_id"]); ?>" selected="selected"><?php echo ($vo["cate_name"]); ?></option>
                            <?php else: ?>
                                <option value="<?php echo ($vo["cate_id"]); ?>"><?php echo ($vo["cate_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        <!--<option  value="-1">&#45;&#45;各地动态&#45;&#45;</option>-->
                    <!--<?php endif; ?>-->
                </select>
            </div>

            <div class="roleInfoRadio">
                <span  style="color: red;margin-left: 20px">*</span><span >稿件分类：</span>
                <?php if(is_array($roleInfo)): foreach($roleInfo as $key=>$vo): ?><label for="r<?php echo ($key); ?>" >
                        <input type="radio" name="role_id" id="r<?php echo ($key); ?>" value="<?php echo ($vo["id"]); ?>"
                        <?php if($vo['id'] == $info['role_id']): ?>checked /><?php echo ($vo["role_name"]); ?>
                            <?php else: ?>
                            /><?php echo ($vo["role_name"]); endif; ?>
                    </label><?php endforeach; endif; ?>
            </div>

            <div class="taogao">
                <div style=" width: 120px;float: left">
                    <span  style="float: right"> <span  style="color: red;">*</span> 稿件标题：</span>
                </div>
                <input required name="title" maxlength="50" id="title" type="text" value="<?php echo ($info['title']); ?>" style="height: 30px; width: 80%;border: 1px  solid  darkgray"    >
            </div> <br>
            <!--<div class="taogao">-->
                <!--<div style=" width: 120px;float: left">-->
                    <!--<span  style="float: right"> <span  style="color: red;">*</span> 标题颜色：</span>-->
                <!--</div>-->
                <!--<input  name="title_color" id="title_color" type="text"-->
                <!--<?php if($info['title_color'] == '#000' ): ?>value="#000" >-->
                    <!--<?php else: ?> value="<?php echo ($info["title_color"]); ?>">-->
                <!--<?php endif; ?>-->
            <!--</div>-->

            <div class="tgc">
                <div style=" width: 120px;float: left">
                    <label class="form-label">缩略图：</label>
                </div>
                <br>
                <div class="formControls">
                    <input  type="file" id="fileUpload" name="news_img">
                    <div id="imgShow">
                        <br>预览：<br>
                        <div class="image_container" style="width: 200px;height: 200px;border: 1px solid grey" >
                            <img  id="ImgPreview" src="/news<?php echo ($info['news_small_img']); ?>" alt="图片" style="width: 100%;height: 100%" >
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div style="width :90%; margin-left: 40px"><strong  style="font-size: 15px;font-weight: 100">稿件内容：</strong>
            </div>
        </div>
        <br>
        <div class="xx3">
            <div class="wbk" >
                <textarea id="editor" type="text/plain" name="content" id="content" style="width:1100px;height:800px;margin-left:-55px">
                     <?php echo ($info['content']); ?>
                </textarea>
            </div>
        </div>
        <div class="xx5" style="margin-right: 10px;padding: 0 0">
            <button  style="width:100px;position: absolute;left: 45%;padding: 2px;border-radius: 5px" type="submit">预览</button>
        </div>
    </form>
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

<script type="text/javascript" src="/news/Public/Admin/jquery.colorpicker.js"></script>
</body>
</html>

<script>
    var ue = UE.getEditor('editor',{
        toolbars: [
            [
                'undo', //撤销
                'redo', //重做
                'bold', //加粗
                'justifyleft', //居左对齐
                'justifyright', //居右对齐
                'justifycenter', //居中对齐
                'justifyjustify', //两端对齐
                'insertorderedlist', //有序列表
                'insertunorderedlist', //无序列表
                'formatmatch', //格式刷
                'pasteplain', //纯文本粘贴模式
                'selectall', //全选
                'preview', //预览
                'searchreplace', //查询替换
                'removeformat', //清除格式
                'simpleupload', //单图上传
                'insertimage', //多图上传
                'insertvideo', //视频
                'cleardoc', //清空文档
                'help', //帮助
                'fullscreen', //全屏
                'attachment', //附件
                'inserttable', //插入表格
                'forecolor', //字体颜色
                'link', //超链接


                // 'fontfamily', //字体
                //'fontsize', //字号
//                'anchor', //锚点
//                'indent', //首行缩进
//                'snapscreen', //截图
//                'italic', //斜体
//                'underline', //下划线
//                'strikethrough', //删除线
//                'subscript', //下标
//                'fontborder', //字符边框
//                'superscript', //上标
//                'source', //源代码
//                'blockquote', //引用
//                'print', //打印
//                'horizontal', //分隔线
//                'time', //时间
//                'date', //日期
//                'unlink', //取消链接
//                'insertrow', //前插入行
//                'insertcol', //前插入列
//                'mergeright', //右合并单元格
//                'mergedown', //下合并单元格
//                'deleterow', //删除行
//                'deletecol', //删除列
//                'splittorows', //拆分成行
//                'splittocols', //拆分成列
//                'splittocells', //完全拆分单元格
//                'deletecaption', //删除表格标题
//                'inserttitle', //插入标题
//                'mergecells', //合并多个单元格
//                'deletetable', //删除表格
//                'insertparagraphbeforetable', //"表格前插入行"
//                'insertcode', //代码语言
//                'paragraph', //段落格式
//                'edittable', //表格属性
//                'edittd', //单元格属性
//                'emotion', //表情
//                'spechars', //特殊字符
//                'map', //Baidu地图
//                'gmap', //Google地图
//                'backcolor', //背景色
//                'directionalityltr', //从左向右输入
//                'directionalityrtl', //从右向左输入
//                'rowspacingtop', //段前距
//                'rowspacingbottom', //段后距
//                'pagebreak', //分页
//                'insertframe', //插入Iframe
//                'imagenone', //默认
//                'imageleft', //左浮动
//                'imageright', //右浮动
//                'imagecenter', //居中
//                'wordimage', //图片转存
//                'lineheight', //行间距
//                'edittip ', //编辑提示
//                'customstyle', //自定义标题
//                'autotypeset', //自动排版
//                'webapp', //百度应用
//                'touppercase', //字母大写
//                'tolowercase', //字母小写
//                'background', //背景
//                'template', //模板
//                'scrawl', //涂鸦
//                'music', //音乐
//                'drafts', // 从草稿箱加载
//                'charts', // 图表
            ]
        ],
        autoHeightEnabled: true,
        autoFloatEnabled: true
    });
    //电话验证
    $(function () {
        $("#phone").blur(function () {
            var mobile = $.trim($("#phone").val());
            var isMobile = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1})|(17[0-9]{1})|(14[0-9]{1}))+\d{8})$/;
            var isPhone = /^(?:(?:0\d{2,3})-)?(?:\d{2,8})?$/;
            //如果为1开头则验证手机号码
            if (mobile.substring(0,1) == 1) {
                if (!isMobile.exec(mobile) && mobile.length != 11) {
                    alert("手机号码格式不正确");
                }
            }
            //如果为0开头则验证固定电话号码
            else if (mobile.substring(0, 1) == 0) {
                if (!isPhone.test(mobile)) {
                    alert("固定电话号码格式不正确");
                }
            }
            //否则全部不通过
            else {
                alert("电话格式不正确");
            }

        });
    })

    $(function () {
        //选择标题颜色
        $("#title_color").colorpicker({
            fillcolor:true,
            success:function(o,color){
                $(o).css("color",color);
            }
        });

        //图片上传

        if( $('#imgShow').attr('src')!=""){
            // 不为空
            $('#imgShow').show();
        }else{
            $('#imgShow').hide();
            alert($('#imgShow').attr('src'));
            // 为空
        }
//          图片上传
        $("#fileUpload").change(function() {
            var $file = $(this);
            var fileObj = $file[0];
            var windowURL = window.URL || window.webkitURL;
            var dataURL;
            var $img = $("#ImgPreview");
            $('#imgShow').show();
            if(fileObj && fileObj.files && fileObj.files[0]){
                dataURL = windowURL.createObjectURL(fileObj.files[0]);
                $img.attr('src',dataURL);
            }else{
                dataURL = $file.val();
                var imgObj = document.getElementById("ImgPreview");
                // 两个坑 : 1、在设置filter属性时，元素必须已经存在在DOM树中，动态创建的Node，也需要在设置属性前加入到DOM中，先设置属性在加入，无效；
                //        2、src属性需要像下面的方式添加，上面的两种方式添加，无效；
                imgObj.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
                imgObj.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = dataURL;

            }
        });
    })

    //下拉框触发 函数
    $(function () {
        if($("#cate_id").val()!=0){
            $(".roleInfoRadio").hide();
        }
        $("#cate_id").change(function () {
            if($("#cate_id").val()!=0){
                $(".roleInfoRadio").hide();
//                               alert(r);
            }else {
//                               alert('');
                $(".roleInfoRadio").show();
            }
        })
    })

    //提交表单前验证
    $(function () {
        $("#form-news-add").submit(function () {
//            if($("#cate_id").val()==0) {
//                alert("投往栏目不能为空！");
//                return false;
//            }
            if($("#cate_id").val()==0 && $(".roleInfoRadio :checked").val()==null){
                alert("请选择稿件分类");
                return false;
            }else  if ($("#title").val()==""){
                alert("请填写稿件标题");
                return false;
            }else  if ($("#author").val()==""){
                alert("请填写投稿人姓名");
                return false;
            }else  if ($("#phone").val()==""){
                alert("请填写投稿人电话");
                return false;
            }else  if ($("#issuer").val()==""){
                alert("请填写稿件核发人");
                return false;
            }
//                else if($("#content").val()==null){
//                    alert("请填写稿件内容");
//                    return false;
//                }
            else {
                return true;
            }
        })

    })


</script>