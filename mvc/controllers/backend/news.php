<?php

class News extends Controller
{
    private $newModel;
    public function __construct()
    {
        $this->newModel = $this->model('newModel');
    }
    public function index()
    {
        $this->be_content = VIEW_URL . "/backend/news/list.php";
        $news = $this->newModel->getNewAll();
        $this->view('categories/index', [
            'news' => $news,
            'message' => $this->message,
        ]);
    }

    public function create()
    {
        $data = [];
        if (isset($_POST['news'])) {
            extract($_REQUEST);
            $data = ['new_name' => $new_name, 'new_detail' => $new_detail, 'created_at' => $created_at];

            $this->newModel->new_insert($new_name, $new_detail, $created_at);
            if ($this->newModel->message == 'flase') {
                $this->message = 'Thêm danh mục thất bại';
            } else {
                $this->message = 'Thêm danh mục thành công';
            }
        }
        $this->be_content = VIEW_URL . "/backend/news/create.php";
        $this->view('news/index',
            [
                'message' => $this->message,
                'news' => $data,
            ]
        );
    }

    public function update($id = 0)
    {
        if (isset($_POST['news_update'])) {
            extract($_REQUEST);

            $this->newModel->new_update($new_name, $new_detail, $created_at, $id);
            if ($this->newModel->message == 'flase') {
                $this->message = 'Sửa tin tức thất bại';
            } else {
                $this->message = 'Sửa tin tức thành công';
            }
        }
        $news = $this->newModel->new_select_by_id($id);
        $this->be_content = VIEW_URL . "/backend/news/update.php";
        $this->view("news/index", [
            'news' => $news,
            'message' => $this->message,
        ]);
    }

    public function delete($id = 0)
    {
        $this->newModel->new_delete($id);
        if ($this->newModel->message == 'flase') {
            $this->message = 'Xóa tin tức thất bại';
        } else {
            $this->message = 'Xóa tin tức thành công';
        }
        $this->be_content = VIEW_URL . "/backend/news/list.php";
        $this->index();
    }
}
