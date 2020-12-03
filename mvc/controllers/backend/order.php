<?php
class order extends Controller
{
    private $orderModel;
    public function __construct()
    {
        $this->orderModel = $this->model('orderModel'); //goi ham model ben controller
    }
    function index()
    {
        $this->be_content = "./mvc/views/backend/order/list.php";
        // $cateModel = $this->model('cateModel');
        $order = $this->orderModel->getOrderAll();
        // print_r($categories);
        $this->view('order/index', [
            'order' => $order
        ]);
    }

   

    function update($id)
    {

        $message = '';
        if (isset($_POST['btn-order'])) {
            extract($_REQUEST);
            $this->orderModel->getOrder_update($order_id,$require_date,$order_address,$order_status);

 
            if ($this->orderModel->message == 'flase') {
                $message = 'Sửa order thất bại';
            } else {
                $message = 'Sửa order thành công';
            }
        }

        $this->be_content = "./mvc/views/backend/order/edit.php";
        $order = $this->orderModel->getOrderAll_by_id($id);
        $this->view('order/index', [
            'order' => $order,'message' => $message
        ]);
    }

    function details($id)
    {
        
        $this->be_content = "./mvc/views/backend/order/detail.php";
        // $cateModel = $this->model('cateModel');
        $order = $this->orderModel->getOrderDetail_by_id($id);

        $this->view('order/index', [
            'order' => $order
        ]);
    }
    function delete($id)
    {
        $this->orderModel->getOrderDelete_by_id($id); 
        $this->index();
        exit;
    }
   
}

