<?php
class Controller {
    public $be_content = "./mvc/views/backend/layouts/content.php";
    public function model($model){
        require_once "./mvc/models/backend/".$model.".php";
        return new $model;
    }

    public function view($view, $data=[]){
        $beContent = $this->be_content;
        require_once "./mvc/views/backend/".$view.".php";
    }
    
}
?>