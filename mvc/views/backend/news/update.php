<div class="container">
    <h1>Cập nhật tin tức</h1>
    <h4 style="color:red">
        <?php
            echo $message;
        ?>
    </h4>
    <form style="margin-bottom: 20px;" action="" enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label for="new_name">Tiêu đề</label>
            <input type="text" value="<?=isset($data['news']['new_name'])?$data['news']['new_name']:''?>" name="new_name" class="form-control" placeholder="Enter name" id="new_name">

        </div>
        <div class="form-group">
            <label for="created_at">Ngày tạo</label>
            <input type="date" name="created_at" class="form-control" value="<?=date("Y-m-d", time());?>" id="created_at">
        </div>
        <div class="form-group">
            <label for="new_detail">Mô tả</label>
            <textarea class="form-control" name="new_detail" id="new_detail" cols="30" rows="10">
                <?=isset($data['news']['new_detail'])?$data['news']['new_detail']:''?>
            </textarea>
        </div>
        <button type="submit" name="news_update" class="btn btn-primary ">Cập nhật</button>
    </form>
</div>