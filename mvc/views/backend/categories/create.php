<?php
    // require_once "./mvc/views/backend/main/index.php";
?>
<div class="container">
    <h1>Thêm loại hàng</h1>
    <form action="" enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label for="cate_name">Tên danh mục</label>
            <input type="text" name="cate_name" class="form-control" placeholder="Enter name" id="cate_name">
        </div>
        <div class="form-group">
            <label for="cate_image">Ảnh</label>
            <input type="text" class="form-control" name="cate_image" id="cate_image">
        </div>
        <div class="form-group">
            <label for="created_at">Tên danh mục</label>
            <input type="date" name="created_at" class="form-control" value="<?=date("Y-m-d", time());?>" id="created_at">
        </div>
        <button type="submit" name="cate" class="btn btn-primary">Thêm danh mục</button>
    </form>
</div>