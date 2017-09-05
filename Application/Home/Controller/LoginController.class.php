<?php
/**
 * Created by PhpStorm.
 * User: Hello Warm
 * Date: 2017/08/08
 * Time: 15:15
 */

namespace Home\Controller;

use  Think\Controller;

class LoginController extends CommonController {
    function login(){
        //通信手册
        $this->upload_url=$this->gettxl();
        $this->display();
    }
    function  checkLogin(){
        $info=I('post.');
//            dump($info);
        if(!empty($_POST)){
            $admin=D('admin');
            $map['username']=array('eq',$info['username']);
            $res=$admin->where($map)->find();
            if ($res){
               $pwd=$info['password'];
                if ($res['password']===md5($pwd)){
                    session('zhusername',$res['username']);
                    session('zhuserid',$res['id']);
                    $this->success("登陆成功！",U("UserCenter/index"));
                }
                else{
                    $this->error("账号或密码错误!！",U("Login/login"));
                }
            } else{
                $this->error("账号或密码错误！",U("Login/login"));
            }
        }
    }
    function  loginOut(){
        session('zhusername',null);
        $this->redirect('Index/index','注销成功');
    }
}