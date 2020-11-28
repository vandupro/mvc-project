<?php
class CateModel extends Db{
    public $table = 'categories';
    // truy vấn tất cả cá loại
    public function getCateAll(){
        $sql = "SELECT * FROM $this->table";
        return $this->pdo_query($sql);
    }

    function cate_insert($cate_name, $cate_image, $created_at){
        $sql = "insert into categories(cate_name, cate_image, created_at) values(?,?,?)";
        $this->pdo_execute($sql,$cate_name, $cate_image, $created_at);
    }
    // public function book(){
    //     $sql = "select * from books";
    //     $stmt = $this->con->prepare($sql);
    //     $stmt->execute();
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

    //
}
?>