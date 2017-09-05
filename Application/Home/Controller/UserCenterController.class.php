<?php
/**
 * Created by PhpStorm.
 * User: Hello Warm
 * Date: 2017/08/08
 * Time: 15:30
 */

namespace Home\Controller;

use  Think\Controller;
//use  Home\CommonController;
class UserCenterController extends CommonController{
     //用户中心显示
        function  index(){
            //通信手册
            $this->upload_url=$this->gettxl();

            $username = session("zhusername");
            $username = session("zhusername");
            if ($username == null) {
                redirect( U('Login/login'));
            }
            else {
                $news=D('news');
                $admin=D('admin');
                $local=D('local');
            //最新投稿（最近十天内投稿还未受理的稿件）
//                $maps['author']=array("eq",$username);
                $maps['del_flag']=array("eq",0);
                $maps['status']=array("eq",0);

                //实现数据分页效果
                //① 获得总记录数目
                $total = $news->where($maps)->count();
//                dump($news->getLastSql());
                $per = 8;//每页显示7条数据
                //② 实例化分页类对象
                $page_obj = new \Common\Common\Page($total, $per);
                //③ 自定义sql语句，获得每页信息
                $sql = $news->where($maps)->fetchSql(true)->select();

                $sql2 = $sql.$page_obj->limit;
                $wsl = $news -> query($sql2);

                //④ 获得页码列表
                $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));

                $this -> assign('pagelist',$pagelist);
                $this->wsl=$wsl;

                //获取地区
                $maps2['username']=array("eq",$username);
                $local_id=$admin->where($maps2)->find();
                session('local_id',$local_id['local_id']);

                $maps3['local_id']=array("eq",$local_id['local_id']);
                $local_name=$local->where($maps3)->find();
                session('local_name',$local_name['local_name']);
                $local_names=$local_name['local_name'];
                $this->local_names=$local_names;

                $this->display();
            }
        }
        //最新投稿删除
        function news_del(){
            $this->login_session_check();
//          $id=$_GET['id'];
            $news=D('news');
            $res=$news->where('id='.$_GET['id'])->setField('del_flag','1');
            if($res){
//                echo "<script>alert('删除成功!');</script>";
               $this->success('删除成功',U("UserCenter/index"));
            }
            else{
                $this->error('删除失败');
            }
        }
        //最新投稿删除
        function news_edit(){
            $this->login_session_check();
//            $id=$_GET['id'];
            $news=D('news');
            $info=$news->where("id=".$_GET['id'])->find();
//            dump($info);
            if($info){
                $content=$info['content'];
                if(get_magic_quotes_gpc()){
                    $content=stripslashes($content);
                }
                $info['content']=htmlspecialchars_decode($content);
            }
//            dump($info);
            $role = D("role");
            $roleInfo= $role->select();
            $this->roleInfo=$roleInfo;
//            dump($info);
            $this->info=$info;

            $this->display();
        }
        //最新投稿保存
        function news_save(){
            $this->login_session_check();
            $info=I('post.');
            $news=D('news');
            $id=$info['id'];
            $info['add_time']=time();
            $res=$news->save($info);
            if($res){
//                echo "<script>alert('删除成功!');</script>";
                $this->success("添加稿件成功！",U('Detail/detail',array('id'=>$id)));
            }
            else{
                $this->error('删除失败');
            }
        }
        //投稿部分
        function news_add(){
            //通信手册
            $this->upload_url=$this->gettxl();

            $this->login_session_check();
            $news=D('news');
            $admin=D('admin');
            $local=D('local');
            $role=D('role');
            $username = session("zhusername");
            if(IS_POST){
                $info=I("post.");
                $info['author']=$username;
                $map['username']=array("eq",$username);
                $local_id=$admin->field('local_id')->where($map)->find();
                $info['local_id']=$local_id['local_id'];
                $info['add_time']=time();

                $info_res=$news->add($info);
//                dump($info_res);
//                exit();
                if ($info_res){
                    $this->success("添加稿件成功！",U('Detail/previewDetail',array('id'=>$info_res)));
                }
                else{
                    $this->error("添加稿件失败！");
                }
            }else{

                $map['username']=array("eq",$username);
                $local_info=$admin->where($map)->find();

                $map2['local_id']=array("eq",$local_info['local_id']);
                $local_name=$local->field("local_name")->where($map2)->find();

                $this->local_phone=$local_info['phone'];
                $this->local_email=$local_info['email'];
                $this->local_name=$local_name['local_name'];

                $roleInfo=$role->select();
                $this->roleInfo=$roleInfo;

                $this->display();
            }
        }
        //回复列表
        function reply_list(){
            //通信手册
            $this->upload_url=$this->gettxl();

            $news=D('news');
            $replay=D('replay');
            $admin=D('admin');
            $local_id=session('local_id');
            $map['local_id']=array("eq",$local_id);
            $map['status']=array("eq",3);
            $map['del_flag']=array("eq",0);
//            $news->join("")

            $total = $news->where($map)->count();
//                dump($news->getLastSql());
            $per = 10;//每页显示7条数据
            //② 实例化分页类对象
            $page_obj = new \Common\Common\Page($total, $per);
            //③ 自定义sql语句，获得每页信息
            $sql = $news->where($map)->fetchSql(true)->select();

            $sql2 = $sql.$page_obj->limit;
            $info = $news ->query($sql2);
            //获取回复人名
//            dump($info);
            foreach($info as $k =>$v){
                $id=$v['id'];
                $map2['news_id']=array('eq',$id);
//                dump($id);
                $res=$replay->field('admin_id')->where($map2)->find();
//                dump($res['admin_id']);
                $map3['id']=array('eq',$res['admin_id']);
                $shr=$admin->field('username')->where($map3)->find();
                $info[$k]['shr']=$shr['username'];
//                dump($shr);
            }
//                dump($info);

            //④ 获得页码列表
            $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));
            $this->info=$info;
            $this -> assign('pagelist',$pagelist);
//            dump($info);
            $this->display();
        }
        //h恢复详情
        function reply_detail(){
            //通信手册
            $this->upload_url=$this->gettxl();

            if(IS_AJAX) {
//                $id=$_GET['id'];
                $news = D('news');
                $res = $news->field('reply_msg')->where('id=' . $_GET['id'])->find();
//                dump($id);
//                dump($_GET['id']);
//                $jsons=json_encode($res['reply_msg']);
                echo $res['reply_msg'];
            }
//                if($res){
//                    $this->ajaxReturn($jsons);
//                }else{
//                    $this->ajaxReturn(0);
//                }

        }
        //已投稿件
        function yitou(){
            //通信手册
            $this->upload_url=$this->gettxl();

            $this->login_session_check();
            $news=D('news');
            $local_id=session('local_id');
            $map['local_id']=array("eq",$local_id);
            $map['del_flag']=array("eq",0);
            $total = $news->where($map)->count();
//                dump($news->getLastSql());
            $per = 10;//每页显示7条数据
            //② 实例化分页类对象
            $page_obj = new \Common\Common\Page($total, $per);
            //③ 自定义sql语句，获得每页信息
            $sql = $news->where($map)->fetchSql(true)->select();

            $sql2 = $sql.$page_obj->limit;
            $info = $news -> query($sql2);
//            dump($total);
//            dump($sql);
//            dump($info);
            //④ 获得页码列表
            $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));

            foreach ($info as $k=> $v){
                $role_id=$v['role_id'];
                $role=D("role");
                $roleInfo=$role->find($role_id['role_id']);

                $info[$k]['role_name']=$roleInfo['role_name'];
//                dump($roleInfo['role_name']);
            }

            $this ->info=$info;
            $this -> assign('pagelist',$pagelist);
            $this->display();
        }
    //已发稿件
    function yifa(){
        //通信手册
        $this->upload_url=$this->gettxl();

        $this->login_session_check();
        $news=D('news');
        $local_id=session('local_id');
        $map['local_id']=array("eq",$local_id);
        $map['status']=array("eq",1);
        $map['del_flag']=array("eq",0);
        $total = $news->where($map)->count();
//                dump($news->getLastSql());
        $per = 10;//每页显示7条数据
        //② 实例化分页类对象
        $page_obj = new \Common\Common\Page($total, $per);
        //③ 自定义sql语句，获得每页信息
        $sql = $news->where($map)->fetchSql(true)->select();

        $sql2 = $sql.$page_obj->limit;
        $info = $news -> query($sql2);

        //④ 获得页码列表
        $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));

        foreach ($info as $k=> $v){
            $role_id=$v['role_id'];
            $role=D("role");
            $roleInfo=$role->find($role_id['role_id']);

            $info[$k]['role_name']=$roleInfo['role_name'];
//                dump($roleInfo['role_name']);
        }

        $this ->info=$info;
        $this -> assign('pagelist',$pagelist);
        $this->display();
    }
    function  modify_pwd(){
        //通信手册
        $this->upload_url=$this->gettxl();

        $this->login_session_check();
        $postInfo=I('post.');
        $admin=D("admin");

        if(IS_POST){
//            dump($postInfo);
            $pwd=$postInfo['password'];
            $pwd2=$postInfo['password2'];
            if(($pwd==""&&$pwd2!="")||($pwd2==""&&$pwd!="")||($pwd2!=""&&$pwd!="")){
                $rules = array(
                    array('password','require','密码不能为空'),
                    //③ 确认密码验证，不能为空并且和密码保持一致
                    array('password2','require','确认密码不能为空'),
                    array('password2','password','两次密码必须一致',0,'confirm'),
                    array('email','email','邮箱格式不正确'),
                );
//                echo "no mima";
//                exit();
                if (!$admin->validate($rules)->create()) {
                    // 如果创建失败 表示验证没有通过 输出错误提示信息
                    $this->error($admin->getError());
                }else {
                    $postInfo['password'] = md5($postInfo['password']);
                    $res = $admin->save($postInfo);
                    if ($res) {
                        session('zhusername', $postInfo['username']);
                        $this->success("修改密码成功", U('UserCenter/index'));
                    } else {
                        $this->error("修改密码失败");
                    }
                }
            }else{

                $rules = array(
                    array('email','email','邮箱格式不正确'),
                );
                if (!$admin->validate($rules)->create()){
                    $this->error($admin->getError());
                }else{
                    //密码  去除 只修改手机号 邮箱
                    for($i=0;$i<=1;$i++){
                        array_pop($postInfo);
                    }
//                    dump($postInfo);
//                    exit();
                    $res=$admin->save($postInfo);
                    if($res){
                        $this->success("修改信息成功",U('UserCenter/index'));
                    }else{
                        $this->error("修改信息失败");
                    }
                }
            }
        }else{
            $map['username']=session('zhusername');
            $user_info=$admin->where($map)->find();
            $this->user_info=$user_info;
//            dump($user_info);
            $this->display();
        }
    }
    function login_session_check(){
        if(session("zhusername")==null){
            $this->error('请登录！', U('Login/login'));
            exit();
        }
    }

}