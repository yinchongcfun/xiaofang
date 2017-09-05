<?php
/**
 * Created by PhpStorm.
 * User: Hello Warm
 * Date: 2017/07/28
 * Time: 13:34
 */
namespace Admin\Model;
use Think\Model;
class DutyModel extends Model{
    public function search($pageSize=10)
    {
     /**************************************** 搜索 ****************************************/
        $where = array();
        $addtimefrom = strtotime(I('get.addtimefrom'));
        $addtimeto = strtotime(I('get.addtimeto'));
        if($addtimefrom && $addtimeto)
            $where['duty_time'] = array('between', array($addtimefrom,$addtimeto));
        elseif($addtimefrom)
            $where['duty_time'] = array('egt', $addtimefrom );
        elseif($addtimeto)
            $where['duty_time'] = array('elt', $addtimeto);
        $where['del_flag']=0;
//        /**************************************** 搜索 ****************************************/
//        $count = $this->where($where)->count();
//        $page = new \Think\Page($count, $pageSize);
//        // 配置翻页的样式
//        $page -> setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
//        $page->setConfig('last', '末页');
//        $page->setConfig('first', '首页');
//        $page -> setConfig('prev','上一页');
//        $page -> setConfig('next','下一页');
//        $page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
//        $pageString = $page->show();
        /************************************** 取数据 ******************************************/
        $duty_msg = $this->where($where)->order('duty_time desc')->select();
        return array(
            'duty_msg'=>$duty_msg,
//            'page'=>$pageString,
        );
    }
   // 修改前
    protected function _before_insert(&$data, $option)
    {
         $duty_time=I('post.duty_time');
         $dutymsg=$this->where('del_flag=0')->select();
        foreach($dutymsg as $k=>$v){
           foreach($v as $vv){
               if($vv==$duty_time){
                   $this->error='当前日期存在,请返回列表页修改！';
                   return false;
               }
           }
        }
    }

}