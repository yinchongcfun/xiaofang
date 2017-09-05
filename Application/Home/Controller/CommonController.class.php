<?php
/**
 * Created by PhpStorm.
 * User: Hello Warm
 * Date: 2017/08/08
 * Time: 17:13
 */

namespace Home\Controller;
use  Think\Controller;

class CommonController extends Controller{
    //通讯录
    function gettxl(){
        $file=D('file');
        $info=$file->where('type=1 and del_flag=0')->find();
//            dump($info);
         return $info;
    }


}