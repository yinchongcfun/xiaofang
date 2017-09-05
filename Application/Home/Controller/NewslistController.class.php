<?php

namespace Home\Controller;
use Think\Controller;
class NewslistController extends CommonController{
    public function news_list(){
        //通信手册
        $this->upload_url=$this->gettxl();

        $cateModel=D('category');
        // $maps['id']=array('between','1,5');
        $catemsg= $cateModel->where('cate_id>1 and cate_id<7')->select();
        $this->assign('catemsg',$catemsg);

         $cate_id=I('get.cate_id');
         $newsModel=D('News');

        //根据传过来的cate_id 获取对应的分类信息和列表信息
         $catemsgAll=$cateModel->find($cate_id);

            $map['cate_id']=array('eq',$cate_id);
            $map['del_flag']=array('eq',0);
            $map['status']=array('eq',1);
         $newsmsgAll=$newsModel->where($map)->order('id desc')->select();

        //实现数据分页效果
        //① 获得总记录数目
        $total = $newsModel->where($map)->count();
//                dump($news->getLastSql());
        $per = 3;//每页显示7条数据
        //② 实例化分页类对象
        $page_obj = new \Common\Common\Page($total, $per);
        //③ 自定义sql语句，获得每页信息
        $sql = $newsModel->where($map)->fetchSql(true)->select();

        $sql2 = $sql.$page_obj->limit;
        $newsmsgAll = $newsModel -> query($sql2);

        //④ 获得页码列表
        $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));

        $this -> assign('pagelist',$pagelist);


         $this->assign('catemsgAll',$catemsgAll);
         $this->assign('newsmsgall',$newsmsgAll);

        $this->display();
    }
}