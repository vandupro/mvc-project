
<div class="container">
    <h1>Thêm nhà cung cấp</h1>
    <h4 style="color:red">
        <?php
            echo $message;
        ?>
    </h4>
    <form action="" enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label for="supplier_name">Tên nhà cung cấp</label>
            <input type="text" name="supplier_name" class="form-control" placeholder="Enter name" id="supplier_name">
        </div>
        <div class="form-group">
            <label for="supplier_image">Ảnh</label>
            <input type="file" class="form-control" name="supplier_image" id="supplier_image">
        </div>
        <div class="form-group">
            <label for="created_at">Tên danh mục</label>
            <input type="date" name="created_at" class="form-control" value="<?=date("Y-m-d", time());?>" id="created_at">
        </div>
        <button type="submit" name="cate" class="btn btn-primary">Thêm danh mục</button>
    </form>
</div>