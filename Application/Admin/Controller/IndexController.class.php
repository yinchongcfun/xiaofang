<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function __construct()
    {
        // 先调用父类的构造函数
        parent::__construct();
        // 获取当前管理员的ID
        $adminId = session('id');
        // 验证登录
        if(!$adminId)
            redirect(U('Admin/Login/login'));
        // 验证当前管理员是否有权限访问这个页面
        // 1. 先获取当前管理员将要访问的页面	 - TP带三个常量
        $url = MODULE_NAME .'/'. CONTROLLER_NAME . '/' . ACTION_NAME;
        // 查询数据库判断当前管理员有没有访问这个页面的权限
        $where = 'module_name="'.MODULE_NAME.'" AND controller_name="'.CONTROLLER_NAME.'" AND action_name="'.ACTION_NAME.'"';

        // 任何人只要登录了就可以进入后台
        if(CONTROLLER_NAME == 'Index')
            return TRUE;

        if($adminId == 1)
            $sql = 'SELECT COUNT(*) has FROM privilege WHERE '.$where;
        else
            $sql = 'SELECT COUNT(a.role_id) has
			  FROM privilege_role a
			   LEFT JOIN privilege b ON a.pri_id=b.id
			   LEFT JOIN admin_role c ON a.role_id=c.role_id
			    WHERE c.admin_id='.$adminId.' AND '.$where;
        $db = M();
        $pri = $db->query($sql);
        if($pri[0]['has'] < 1)
            $this ->error('你的身份目前无权访问，请联系超级管理员！',U('Index/round'));
    }

    public function index(){

        $roleModel=D('role');
        $rolemsg=$roleModel->select();
        $this->assign('rolemsg',$rolemsg);

        $this->display();
    }

  public function welcome(){
        $this->display();
    }
    //退出系统
    function login_out(){
        //清除session,同时跳转到登录页面
        session(null);
        $this -> redirect('Login/login');
    }

}