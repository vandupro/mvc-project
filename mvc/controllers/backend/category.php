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
                'categories' => $categories
            ]);
        }
        
        function create(){
            $err = [];
            if(isset($_POST['cate'])){
                extract($_REQUEST);
                $this->cateModel->cate_insert($cate_name, $cate_image, $created_at);
                $err[] = 'Thêm danh mục thành công';
                header("Location:index");
                exit();
            }else{
                $err[] = 'Thêm danh mục thất bại';
            }
            $this->be_content = "./mvc/views/backend/categories/create.php";

            $this->view('categories/index');
            // require_once "./mvc/views/backend/main/index.php";
        }
        
        function update(){

        }
        function delete(){

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