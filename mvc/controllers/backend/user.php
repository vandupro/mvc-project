<?php
class User extends Controller
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('userModel'); //goi ham model ben controller
    }
    function index()
    {
        $this->be_content = "./mvc/views/backend/user/list.php";
        // $cateModel = $this->model('cateModel');
        $user = $this->userModel->getUserAll();
        // print_r($categories);
        $this->view('user/index', [
            'user' => $user
        ]);
    }

    function create()
    {
        $message = '';
        if (isset($_POST['btn-users'])) {
            extract($_REQUEST);
            $up_hinh = $this->save_file("user_image", IMAGE_BE . "/user/");
            $user_image = strlen($up_hinh) > 0 ? $up_hinh : 'No picture';

            $this->userModel->user_insert($user_name, $user_image, $user_email, $user_password, $user_address, $role, $created_at, $user_phone);

 
            if ($this->userModel->message == 'flase') {
                $message = 'Thêm user thất bại';
            } else {
                $message = 'Thêm user thành công';
            }
        }
        $this->be_content = "./mvc/views/backend/user/create.php";

        $this->view(
            'user/index',
            ['message' => $message]
        );
    }

    function update($id)
    {

        $message = '';
        if (isset($_POST['btn-users'])) {
            extract($_REQUEST);
            $up_hinh = $this->save_file("image", IMAGE_BE . "/user/");
            $user_image = strlen($up_hinh) > 0 ? $up_hinh : $user_image;

            $this->userModel->getUserUpdate_by_id($user_id,$user_name,$user_image, $user_email,$user_password, $user_address, $role, $created_at, $user_phone,$updated_at);

 
            if ($this->userModel->message == 'flase') {
                $message = 'Sửa user thất bại';
            } else {
                $message = 'Sửa user thành công';
            }
        }


        $this->be_content = "./mvc/views/backend/user/edit.php";
        // $cateModel = $this->model('cateModel');
        $user = $this->userModel->getUserAll_by_id($id);
        // extract($user);
        // print_r($categories);
        $this->view('user/index', [
            'user' => $user,'message' => $message
        ]);
    }

    function details($id)
    {
        
        $this->be_content = "./mvc/views/backend/user/detail.php";
        // $cateModel = $this->model('cateModel');
        $user = $this->userModel->getUserAll_by_id($id);
        // extract($user);
        // print_r($categories);
        $this->view('user/index', [
            'user' => $user
        ]);
    }
    function delete($id)
    {
        $this->userModel->getUserDelete_by_id($id); 
        $this->index();
        exit;
    }
   
}

