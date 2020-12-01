<?php
class Controller {
    public $be_content = VIEW_URL."/backend/layouts/content.php";
    public $message='';
    
    public function model($model){
        require_once "./mvc/models/backend/".$model.".php";// upload code file userModel
        return new $model;
    }
    public function save_file($name, $target){
        $file_uploaded = $_FILES[$name];//( [name] => tải xuống (2).jpg [type] => image/jpeg [tmp_name] => O:\xampp\tmp\phpAED7.tmp [error] => 0 [size] => 12351 )
        $file_name = basename($file_uploaded["name"]);// tải xuống (2).jpg
        // hàm basename trả về tên file
        $target_path = $target . $file_name;// O:/xampp/htdocs/abc/public/backend/image/user/tải xuống (2).jpg
        // print_r($file_uploaded) ;
        // echo "<br>";
        // echo $target_path;
        if ($file_uploaded['size'] > 0) {
            move_uploaded_file($file_uploaded["tmp_name"], $target_path);
		}
       
        return $file_name;
    }

    public function view($view, $data=[]){
        $beContent = $this->be_content;
        require_once "./mvc/views/backend/".$view.".php";
    }
    
}
?>