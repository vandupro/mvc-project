<?php

class Comment extends Controller
{
    private $cmtModel;
    public function __construct()
    {
        $this->cmtModel = $this->model('cmtModel');
    }

    public function index()
    {
        $this->be_content = VIEW_URL . "/backend/comments/list.php";
        // $cateModel = $this->model('cateModel');
        $cmts = $this->cmtModel->comment_select_all();
        // print_r($categories);
        $this->view('comments/index', [
            'cmts' => $cmts,
            'message' => $this->message,
        ]);
    }

    public function delete($id = 0)
    {
        $this->cmtModel->comment_delete($id);
            if($this->cmtModel->message == 'flase'){
                $this->message='Xóa bình luận thất bại';
            }else{
                $this->message = 'Xóa bình luận thành công';
            }
            $this->be_content = VIEW_URL . "/backend/comments/list.php";
            $this->index();
    }

    public function detail($id = 0)
    {
        $this->be_content = VIEW_URL . "/backend/comments/detail.php";
        // $cateModel = $this->model('cateModel');
        $cmt = $this->cmtModel->comment_select_by_product($id);
        // print_r($cmt);die;
        $this->view('comments/index', [
            'cmt' => $cmt,
            'message' => $this->message,
        ]);

    }
}
