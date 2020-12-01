<?php
class UserModel extends Db{
    public $table = 'users';
    // truy vấn tất cả cá loại
    public function getUserAll(){
        $sql = "SELECT * FROM $this->table";
        return $this->pdo_query($sql);
    }

    function user_insert($user_name,$user_image, $user_email,$user_password, $user_address, $role, $created_at, $user_phone){
        $sql = "insert into users(user_name, user_image, user_email,user_password, user_address, role, created_at, user_phone) values(?,?,?,?,?,?,?,?)";
        $this->pdo_execute($sql,$user_name, $user_image, $user_email,$user_password, $user_address, $role, $created_at, $user_phone);
    }
    public function getUserAll_by_id($id){
        $sql = "SELECT * FROM $this->table WHERE user_id=?";
        return $this->pdo_query($sql,$id);
    }
    public function getUserUpdate_by_id($user_id,$user_name,$user_image, $user_email,$user_password, $user_address, $role, $created_at, $user_phone,$updated_at){
        $sql = "UPDATE `users` SET user_name=?,user_image=?, user_email=?,user_password=?, user_address=?, role=?, created_at=?, user_phone=?,updated_at=? WHERE `users`.`user_id` = ?";
        return $this->pdo_execute($sql,$user_name,$user_image, $user_email,$user_password, $user_address, $role, $created_at, $user_phone,$updated_at,$user_id);
    }
    public function getUserDelete_by_id($id){
        $sql = "DELETE FROM $this->table WHERE user_id=?";
        return $this->pdo_execute($sql, $id);
    }
    

}
?>