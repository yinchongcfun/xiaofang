<?php
/**
 * Created by PhpStorm.
 * User: Hello Warm
 * Date: 2017/08/08
 * Time: 18:29
 */

namespace Home\Controller;
use Think\Controller;

class SearchController extends  CommonController{
    function  search(){
        //通信手册
        $this->upload_url=$this->gettxl();

        $news=D('news');
        //热点文章
        $hotNews=$news->query("SELECT * FROM news WHERE del_flag=0 AND `status`=1  ORDER BY `view`  DESC   LIMIT 8");
//            dump($this->hotNews=$hotNews);
        if(!empty($_GET['page'])){
            $where = session('zkxf_where');
        }else{
            if(IS_POST){
                $info=I('post.');
                if (!$info['title'] == "") {
                    $where['title'] = array('like', '%' . $info['title'] . '%');
                }
                if (!$info['content'] == "") {
                    $where['content'] = array('like', '%' . $info['content'] . '%');
                }
                if (!($info['begin_time'] == "") && ($info['end_time'] == "")) {
                    $where['add_time'] = array('EGT', strtotime($info['begin_time']));
                }
                if (($info['begin_time'] == "") && !($info['end_time'] == "")) {
                    $where['add_time'] = array('ELT', strtotime($info['end_time']));
                }
                if (!($info['begin_time'] == "") && !($info['end_time'] == "")) {
                    $where['add_time'] = array('between', array(strtotime($info['begin_time']), strtotime($info['end_time'])));
                }
                $where['del_flag'] = array('eq', 0);
                $where['status'] = array('eq', 1);

                session('zkxf_where',$where);
                session('zkxf_title',$info['title']!==""?$info['title']:null);
                session('zkxf_content',$info['content']!==""?$info['content']:null);
                session('zkxf_begin_time',$info['begin_time']!==""?$info['begin_time']:null);
                session('zkxf_end_time',$info['end_time']!==""?$info['end_time']:null);
            }else{

                $this->hotNews=$hotNews;
//                $this->display();
            }
        }
        //① 获得总记录数目
        $total = $news->where($where)->count();
        $per = 10;//每页显示7条数据

        //② 实例化分页类对象
        $page_obj = new \Common\Common\Page($total, $per);
        //③ 自定义sql语句，获得每页信息
        $sql = $news->where($where)->fetchSql(true)->select();
        $sql2 = $sql.$page_obj->limit;

        $newsInfo = $news -> query($sql2);

        //④ 获得页码列表
        $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));



        $this -> assign('pagelist',$pagelist);
        $this->hotNews=$hotNews;
        $this->newsInfo=$newsInfo;

        $this->display();

    }


}