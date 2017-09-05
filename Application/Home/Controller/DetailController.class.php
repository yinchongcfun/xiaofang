<?php
/**
 * Created by PhpStorm.
 * User: Hello Warm
 * Date: 2017/7/30
 * Time: 18:16
 */

namespace Home\Controller;
use Think\Controller;

class DetailController extends CommonController{

    public function detail(){
        //通信手册
        $this->upload_url=$this->gettxl();

        $news_id=I('get.id');
        $newsModel=D('News');
        $newsmsg=$newsModel->find($news_id);
//        dump($newsmsg);
        if($newsmsg['del_flag']==0&&$newsmsg['status']==1){
            $this->assign('newsmsg',$newsmsg);
            $this->display();
        }else{
            $this->error("此新闻不存在！",U('Index/index'));
        }

   }
    public function previewDetail(){
        //通信手册
        $this->upload_url=$this->gettxl();

        $news_id=I('get.id');
        $newsModel=D('News');
        $newsmsg=$newsModel->find($news_id);

        $this->assign('newsmsg',$newsmsg);
        $this->display();
    }
    public function set_hits(){
        if(!$_GET['id']){return;}
        M('news')->where("id = '{$_GET['id']}'")->setInc('view');
    }
}