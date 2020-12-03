<?php
class Contact extends Controller
{
    private $contactModel;
    public function __construct()
    {
        $this->contactModel = $this->model('ContactModel'); //goi ham model ben controller
    }

    function index()
    {
        $this->be_content = "./mvc/views/backend/contact/list.php";
        // $cateModel = $this->model('cateModel');
        $contact = $this->contactModel->getContactAll();
        // print_r($categories);
        $this->view('contact/index', [
            'contact' => $contact
        ]);
    }
    
    function details($id)
    {
        
        $this->be_content = "./mvc/views/backend/contact/detail.php";
        // $cateModel = $this->model('cateModel');
        $contact = $this->contactModel->getContactDetail_by_id($id);        
        if($contact[0]["contact_status"]==0){
            $this->contactModel->getContactUpdate_by_id($id);
        }
        // print_r($categories);
        $this->view('contact/index', [
            'contact' => $contact
        ]);
    }
    function delete($id)
    {
        $this->contactModel->getContactDelete_by_id($id); 
        $this->index();
        exit;
    }
   
}

