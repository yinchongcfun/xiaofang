<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends IndexController {

    public function showlist(){
        $cateModel=D('category');
        $info=$cateModel->order('cate_id')->select();
        $this->assign('info',$info);
        $this->display();
    }

    public  function add(){
        $model = D('category');
        if(IS_POST){
            $data=I('post.');
            $rst = $model->add($data);
            if($rst){
                $this->success('添加成功');
                exit;
            }
        }else{
            $this->display();
        }
    }

    public function edit(){
        $model = D('category');
        if(IS_AJAX){
            $model->cate_id = $_POST['id'];
            $model->cate_name = $_POST['cate_name'];
            $model->cate_sort = $_POST['cate_sort'];
            $rst = $model->save();
            if($rst){
                $this->ajaxReturn(1);
            }else{
                $this->ajaxReturn(0);
            }

        }
    }
    public function jump(){
        $this->display();
    }
    public function del(){
        $model = D('category');
        if(IS_AJAX){
            $category_id = $_POST['id'];
            $rst = $model->where("cate_id = ".$category_id)->delete();
            if($rst){
                $this->ajaxReturn(1);
            }else{
                $this->ajaxReturn(0);
            }
        }
    }
    public function batch_del(){
        $model = D('category');
        if(IS_AJAX){
            $a = $_POST['la'];
            $aa = explode(',',$a);
            $rst = 0;
            foreach($aa as $k=>$v){
                $rst = $model->where("cate_id = ".$v)->delete();
            }
            $this->ajaxReturn($rst);
        }
    }
    public  function serach(){
        $model = D('category');
        if(IS_AJAX){
            $s_content = $_POST['s_content'];
            if(preg_match("/^[0-9]*(\.[0-9]+)*$/",$s_content)){
                $info =  $model->where("cate_id=".$s_content)->select();
            }else{

                $sql = "select * from category where cate_name like '%".$s_content."%'";
                $info = $model->query($sql);

            }
            $s_content =  json_encode($info);
            $this->ajaxReturn($s_content);
        }
    }
}