<?php
    class Category extends Controller{
        private $cateModel;
        public function __construct()
        {
            $this->cateModel = $this->model('cateModel');
        }
        function index(){
            $this->be_content = "./mvc/views/backend/categories/list.php";
            // $cateModel = $this->model('cateModel');
            $categories = $this->cateModel->getCateAll();
            // print_r($categories);
            $this->view('categories/index',[
                'categories' => $categories,
                'message' => $this->message
            ]);
        }
        
        function create(){
            if(isset($_POST['cate'])){
                extract($_REQUEST);
                $this->cateModel->cate_insert($cate_name, $cate_image, $created_at);
                
                // header("Location:index");
                // exit();
                if($this->cateModel->message == 'flase'){
                    $this->message='Thêm danh mục thất bại';
                }else{
                    $this->message = 'Thêm danh mục thành công';
                }
            }
            $this->be_content = "./mvc/views/backend/categories/create.php";

            $this->view('categories/index',
                ['message' => $this->message]
            );
        }
        
        function update($id=0){
            // echo $id;
            // die;
            if(isset($_POST['cate_update'])){
                extract($_REQUEST);
                $up_hinh = $this->save_file("image", IMAGE_BE."/categories/");
                $image = strlen($up_hinh) > 0 ? $up_hinh : $cate_image;

                $this->cateModel->cate_update($cate_name, $image, $created_at, $id);
                if($this->cateModel->message == 'flase'){
                    $this->message='Sửa danh mục thất bại';
                }else{
                    $this->message = 'Sửa danh mục thành công';
                }
            }
            $category = $this->cateModel->cate_select_by_id($id);
            $this->be_content = VIEW_URL . "/backend/categories/update.php";
            $this->view("categories/index",[
                'category'=>$category,
                'message' => $this->message
            ]);
        }
        function delete($id=0){
            $this->cateModel->cate_delete($id);
            if($this->cateModel->message == 'flase'){
                $this->message='Xóa danh mục thất bại';
            }else{
                $this->message = 'Xóa danh mục thành công';
            }
            $this->be_content = VIEW_URL . "/backend/categories/list.php";
            $this->index();
        }
        function Show($a=0, $b=0){
            // $A = $this->model('SinhVien');
            // $this->view('aodep', [
            //     'Tong'=>$a+$b,
            //     'books'=> $A->book()
            // ]);
        }
    }

?>