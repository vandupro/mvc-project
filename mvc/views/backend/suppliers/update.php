
<div class="container">
    <h1>Cập nhật loại hàng</h1>
    <h4 style="color:red">
        <?php
            echo $message;
        ?>
    </h4>
    <form action="" enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label for="cate_name">Tên danh mục</label>
            <input type="text" name="cate_name" value="<?=$data['category']['cate_name']?>" class="form-control" placeholder="Enter name" id="cate_name">
        </div>
        <div class="form-group">
            <label for="image">Ảnh</label>
            <input type="file" class="form-control" name="image" id="image">
            <input type="hidden" value="<?=$data['category']['cate_image']?>" class="form-control" name="cate_image"  id="cate_image">
            <img src="<?=IMGAE_DISPLAY?>/backend/image/categories/<?=$data['category']['cate_image']?>" alt="">
        </div>
        <div class="form-group">
            <label for="created_at">Tên danh mục</label>
            <input type="date" name="created_at" class="form-control" value="<?=date("Y-m-d", time());?>" id="created_at">
        </div>
        <button type="submit" name="cate_update" class="btn btn-primary">Cập nhật danh mục</button>
    </form>
</div>