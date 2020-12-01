<?php

class Info_shop extends Controller
{

    private $infoModel;
    public function __construct()
    {
        $this->infoModel = $this->model('infoModel');
    }

    function index(){
        $this->be_content = VIEW_URL . "/backend/info_shop/list.php";
        $infos = $this->infoModel->getInfoAll();
        $this->view('info_shop/index',[
            'infos' => $infos,
            'message' => $this->message
        ]);
    }

    function update($id=0){
        // echo $id;
        // die;
        if(isset($_POST['info_update'])){
            // print_r($_REQUEST);
            // die;
            extract($_REQUEST);
            $this->infoModel->info_update($info_name, $info_detail, $info_email, $info_adress, $info_phone, $id);
            if($this->infoModel->message == 'flase'){
                $this->message='Sửa thông tin thất bại';
            }else{
                $this->message = 'Sửa thông tin thành công';
            }
        }
        $info = $this->infoModel->info_select_by_id($id);
        $this->be_content = VIEW_URL . "/backend/info_shop/update.php";
        $this->view("info_shop/index", [
            'info' => $info,
            'message' => $this->message
        ]);
        echo $this->message;
    }

}
