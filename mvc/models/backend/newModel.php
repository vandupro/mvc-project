<?php

class newModel extends Db
{
    protected $table = 'news';
    protected $new_id = 'new_id';
    protected $new_name = 'new_name';
    protected $new_detail = 'new_detail';
    protected $created_at = 'created_at';

    public function getNewAll()
    {
        $sql = "SELECT * FROM $this->table";
        return $this->pdo_query($sql);
    }

    public function new_insert($new_name, $new_detail, $created_at)
    {
        $sql = "insert into $this->table($this->new_name, $this->new_detail, $this->created_at) values(?,?,?)";
        $this->pdo_execute($sql, $new_name, $new_detail, $created_at);
    }

    public function new_update($new_name, $new_detail, $created_at, $new_id)
    {
        $sql = "UPDATE $this->table SET $this->new_name=?, $this->new_detail=?, $this->created_at=? WHERE $this->new_id=?";
        // print_r($_REQUEST);

        $this->pdo_execute($sql, $new_name, $new_detail, $created_at, $new_id);
    }

    public function new_delete($new_id)
    {
        $sql = "DELETE FROM $this->table WHERE $this->new_id=?";
        if (is_array($new_id)) {
            foreach ($new_id as $ma) {
                $this->pdo_execute($sql, $ma);
            }
        } else {
            $this->pdo_execute($sql, $new_id);
        }
    }

    public function new_select_by_id($new_id)
    {
        $sql = "SELECT * FROM $this->table WHERE $this->new_id=?";
        return $this->pdo_query_one($sql, $new_id);
    }
}


?>