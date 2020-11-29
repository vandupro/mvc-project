<?php
class Controller {
    public $be_content = VIEW_URL."/backend/layouts/content.php";
    public function model($model){
        require_once MODEL_URL."/backend/".$model.".php";
        return new $model;
    }

    public function view($view, $data=[]){
        $beContent = $this->be_content;
        require_once VIEW_URL . "/backend/".$view.".php";
    }

    public function save_file($name, $target){
        $file_uploaded = $_FILES[$name];
        $file_name = basename($file_uploaded["name"]);
        // hàm basename trả về tên file
        $target_path = $target . $file_name;
        move_uploaded_file($file_uploaded["tmp_name"], $target_path);
        return $file_name;
    }
    
}
?>