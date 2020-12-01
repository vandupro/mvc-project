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
            $message='';
            if(isset($_POST['cate'])){
                extract($_REQUEST);
                $this->cateModel->cate_insert($cate_name, $cate_image, $created_at);
                
                // header("Location:index");
                // exit();
                if($this->cateModel->message == 'flase'){
                    $message='Thêm danh mục thất bại';
                }else{
                    $message = 'Thêm danh mục thành công';
                }
            }
            $this->be_content = "./mvc/views/backend/categories/create.php";

            $this->view('categories/index',
                ['message' => $message]
            );
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