<?php

namespace Home\Controller;
use Think\Controller;
class VideoController extends CommonController{
    public function video_list(){
        //通信手册
        $this->upload_url=$this->gettxl();

         $newsModel=D('News');

         $sql="select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=21 and STATUS=1 and news.del_flag=0";
         $newsmsgAll=$newsModel->query($sql);

        //实现数据分页效果
        //① 获得总记录数目
        $total = $newsModel->where($map)->count();
//                dump($news->getLastSql());
        $per =10;//每页显示7条数据
        //② 实例化分页类对象
        $page_obj = new \Common\Common\Page($total, $per);
        //③ 自定义sql语句，获得每页信息
        $sql = $newsModel->where($map)->fetchSql(true)->select();

        $sql2 = $sql.$page_obj->limit;
        $wsl = $newsModel -> query($sql2);

        //④ 获得页码列表
        $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));

        $this -> assign('pagelist',$pagelist);
         $this->assign('newsmsgall',$newsmsgAll);
//        dump($newsmsgAll);
        $this->display();
    }
}