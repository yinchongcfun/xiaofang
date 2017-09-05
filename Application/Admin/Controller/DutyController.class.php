<?php
/**
 * Created by PhpStorm.
 * User: Hello Warm
 * Date: 2017/8/14
 * Time: 9:43
 */
namespace Admin\Controller;
use Boris\DumpInspector;
use Think\Controller;

class DutyController extends Controller
{
    public function duty_list()
    {
        $dutyModel=D('Duty');
        $dutymsg=$dutyModel->search();
        $this->assign(array(
            'dutymsg' => $dutymsg['duty_msg'],
            'page' => $dutymsg['page'],
        ));
        $this->display();
    }

//
////    //搜索内容的回显
//    public function duty_search()
//    {
//        if(IS_AJAX){
//            $logmin=$_GET['logmin'];
//            $logmax=$_GET['logmax'];
//
//            $time=array();
//            $time['cate_name']=$logmin;
//            $time['role_name']=$logmax;
//            if($time){
//                $this->ajaxReturn($time);
//            }else{
//                $this->ajaxReturn(0);
//            }
//        }
//    }

//    值班信息添加
    public function duty_add()
    {
       //判断新添加值班信息日期是否存在，不能重复添加
        $dutyModel=D('Duty');
        $_POST['duty_time']=strtotime($_POST['duty_time']);
         if(IS_POST)
        {
            if($dutyModel->create(I('post.'), 1))
            {
                if($id = $dutyModel->add())
                {
                    $this->success('添加成功，返回继续添加！');
                    exit;
                }
            }
            $this->error($dutyModel->getError());
        }
        $this->display();
    }
//根据获取到的日期查找对应时间的值班信息
    public function duty_find()
    {
     if(IS_AJAX){
            $duty_time=strtotime($_GET['duty_time']);
            if(!$duty_time){
                $this->error('时间不能为空!');
            }
            $dutyModel=D('Duty');
            $dutymsg=$dutyModel->where('duty_time='.$duty_time)->find();
            if($dutymsg){
                $this->ajaxReturn($dutymsg);
            }else{
                $this->ajaxReturn(0);
            }
        }
    }

    //新闻批量删除
    function batchDel(){
//        dump($_POST);die();
        if(IS_AJAX){
            $ids=$_POST['id'];
            $duty=D("duty");
            $ids=explode(",",$ids);
            $map['id']=array("in",$ids);
            $res=$duty->where($map)->setField("del_flag","1");
            if ($res){
                $this->ajaxReturn($ids);
            }else{
                $this->ajaxReturn(0);
            }
        }
    }

    //值班信息编辑
  public function duty_edit()
    {
  $id = I('get.id');
        $model = M('Duty');
        $data = $model->find($id);
        $this->assign('duty_msg', $data);
        if(IS_POST)
        {
       if($model->create(I('post.'), 2))
            {
               // dump(I('post.'));
                if($model->save() !== false)
                {
                    $this->success('修改成功！', U('Duty/duty_list'));
                    exit;
                }
            }
            $this->error($model->getError());
        }
       $this->display();
    }
//留言信息删除
    function duty_del(){
        if(IS_AJAX){
            $id=$_POST['id'];
            $news=D("duty");
            $map['id']=array("EQ",$id);
            $res=$news->where($map)->setField("del_flag","1");
            if ($res){
                $this->ajaxReturn($id);
            }else{
                $this->ajaxReturn(0);
            }
        }
    }

    //值班信息批量
    function  duty_list_add(){
        $this->display();
    }

    /**实现导入excel
     **/
    public function  user_upload(){
        if (!empty($_FILES)) {
            $config = array(
                'exts' => array('xlsx','xls'),
                'maxSize' => 3145728,
                'rootPath' =>'./Public',
                'savePath' => '/Excel/',
             'subName' => array('date','Y-m-d'),
            );
            $upload = new \Think\Upload($config);
            if (!$info = $upload->upload()) {
                $this->error($upload->getError());}
            vendor("PHPExcel.PHPExcel");
            vendor("PHPExcel.PHPExcel.IOFactory");



            $file_name=$upload->rootPath.$info['excel']['savepath'].$info['excel']['savename'];
            $extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));//判断导入表格后缀格式
            if ($extension == 'xlsx') {
                $objReader =\PHPExcel_IOFactory::createReader('Excel2007');
                $objPHPExcel =$objReader->load($file_name, $encode = 'utf-8');
            } else if ($extension == 'xls'){
                $objReader =\PHPExcel_IOFactory::createReader('Excel5');
                $objPHPExcel =$objReader->load($file_name, $encode = 'utf-8');
            }
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();//取得总行数

            $highestColumn =$sheet->getHighestColumn(); //取得总列数
            $j=0;
            for ($i = 1; $i <= $highestRow; $i++) {
                $data['db_leader']= $objPHPExcel->getActiveSheet()->getCell("A".$i)->getValue();
                $data['zb_leader']= $objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue();
                $data['zb_duty']= $objPHPExcel->getActiveSheet()->getCell("C".$i)->getValue();
                $data['zh_duty']= $objPHPExcel->getActiveSheet()->getCell("D".$i)->getValue();
                $data['zh_center']= $objPHPExcel->getActiveSheet()->getCell("E".$i)->getValue();
                $data['jg_duty']= $objPHPExcel->getActiveSheet()->getCell("F".$i)->getValue();
//                $data['duty_time']=\PHPExcel_Shared_Date::ExcelToPHP($data['G'][$i]);
//                $time= $objPHPExcel->getActiveSheet()->getCell("G".$i)->getValue();
//                $data['duty_time']=excelTime($time);
                $data['duty_time'] = \PHPExcel_Shared_Date::ExcelToPHP($objPHPExcel->getActiveSheet()->getCell("G".$i)->getValue());

                if(M('Duty')->where("duty_time=".$data['duty_time'])->find()){

                    $this->error("存在相同日期，请认真核对导入日期");
                    //如果存在相同时间。判断条件：时间存在相同，则返回错误
                }else{
                    M('Duty')->add($data);
                    $j++;
                }

            }

            $this->success('导入成功!返回列表页查看！！',U('Duty/duty_list'));
        }
        else {
            $this->error("请选择上传的文件");
        }
    }

}

