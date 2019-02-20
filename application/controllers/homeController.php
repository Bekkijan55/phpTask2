<?php 
namespace application\controllers;
use application\core\Controller;


class HomeController extends Controller{
   
    public function indexAction() {    
      header('location: /?page=1');
    }
    public function add_dataAction() {
        $this->model->add_data();
        header('location: /?page=1');
    }
    public function paginateAction() {
        
        $all_res = $this->model->get_all_data();
        $res = $this->model->getData(); 
      
        $vars = [
            'result' => $res,
            'allresult' => $all_res
        ];            
        $this->view->render('Home page',$vars);
       
    }
    public function change_taskAction() {
      $this->model->change_task();
        
    }
    public function change_imageAction() {    
        if(isset($_POST['upload'])) {
            $updir = "application/public/image/"
            .basename($_FILES['img_change']['name']);
            $img_tmp = $_FILES['img_change']['tmp_name'];
            if(!empty($image_size = getimagesize($img_tmp))){
                $imagetype = explode('/',$image_size['mime']);
                $imagetype = trim(strtolower($imagetype[1]));
                $imgtypes = ['jpg','jpeg','png'];
                if(in_array($imagetype,$imgtypes)) {
                    move_uploaded_file($img_tmp,$updir);
                    $res = $this->model->change_img($updir,$_POST['name_id'],$imagetype);
                }
            }
       
        }
    }
   
    

  

}
 

