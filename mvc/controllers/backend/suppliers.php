<?php
    class Suppliers extends Controller{
        private $suppModel;
        public function __construct()
        {
            $this->suppModel = $this->model('suppModel');
        }
        function index(){
            $this->be_content = "./mvc/views/backend/suppliers/list.php";
            // $cateModel = $this->model('cateModel');
            $suppliers = $this->suppModel->getSuppAll();
            // print_r($categories);
            $this->view('suppliers/index',[
                'suppliers' => $suppliers,
                'message' => $this->message
            ]);
        }
        
        function create(){
            if(isset($_POST['cate'])){
                extract($_REQUEST);
                $up_hinh = $this->save_file("cate_image", IMAGE_BE."/suppliers/");
                $image = strlen($up_hinh) > 0 ? $up_hinh : 'no picture';
                $this->cateModel->cate_insert($supplier_id, $image, $created_at);
                
                // header("Location:index");
                // exit();
                if($this->suppModel->message == 'flase'){
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
                $up_hinh = $this->save_file("image", IMAGE_BE."/suppliers/");
                $image = strlen($up_hinh) > 0 ? $up_hinh : $supplier_;

                $this->suppModel->cate_update($cate_name, $image, $created_at, $id);
                if($this->suppModel->message == 'flase'){
                    $this->message='Sửa danh mục thất bại';
                }else{
                    $this->message = 'Sửa danh mục thành công';
                }
            }
            $category = $this->suppModel->cate_select_by_id($id);
            $this->be_content = VIEW_URL . "/backend/suppliers/update.php";
            $this->view("suppliers/index",[
                'suppliers'=>$suppliers,
                'message' => $this->message
            ]);
        }
        function delete($id=0){
            $this->suppModel->cate_delete($id);
            if($this->suppModel->message == 'flase'){
                $this->message='Xóa danh mục thất bại';
            }else{
                $this->message = 'Xóa danh mục thành công';
            }
            $this->be_content = VIEW_URL . "/backend/suppliers/list.php";
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