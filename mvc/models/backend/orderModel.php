<?php
class orderModel extends Db{
    public $table = 'orders';
    public $table2 = 'users';
    // truy vấn tất cả cá loại
    public function getOrderAll(){
        $sql = "SELECT * FROM $this->table INNER JOIN $this->table2
        ON $this->table.user_id = $this->table2.user_id;";
        return $this->pdo_query($sql);
    }
    public function getOrderAll_by_id($id){
        $sql = "SELECT * FROM $this->table  WHERE order_id=?";
        return $this->pdo_query($sql,$id);
    }
    public function getOrderDetail_by_id($id){
        $sql = "SELECT * FROM orders_detail INNER JOIN products
        ON orders_detail.product_id = products.product_id WHERE order_id=?";
        return $this->pdo_query($sql,$id);
    }
    
    public function getOrderDelete_by_id($id){
        $sql = "DELETE FROM $this->table WHERE $this->table.`order_id` = ?";
        return $this->pdo_execute($sql, $id);
    }
    public function getOrder_update($order_id,$require_date,$order_address,$order_status){
        $sql = "UPDATE $this->table SET require_date=?,order_address=?,order_status=? WHERE $this->table.`order_id` = ?";
        return $this->pdo_execute($sql,$require_date,$order_address,$order_status,$order_id);
    }

}
?>