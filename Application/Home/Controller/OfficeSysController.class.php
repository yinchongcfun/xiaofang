<?php
/**
 * Created by PhpStorm.
 * User: Hello Warm
 * Date: 2017/08/14
 * Time: 12:01
 */

namespace Home\Controller;
//use Home\Controller\CommonController;

class OfficeSysController extends  CommonController{

    function index(){
//通信手册
        $this->upload_url = $this->gettxl();

        $this->display();
    }

}