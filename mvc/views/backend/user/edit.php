<div class="container">
    <h1> Sửa thông tin User</h1>
    <h4 style="color:red">
         <?php
                echo $message;
                ?> 
    </h4>
    <?php

    $a = $data['user'];
    // var_dump($data['user']);
    // echo"<br>";
    // var_dump($a[0]['user_id']);
    // echo"<br>";
    // var_dump($a[0]['user_name']);
    // echo"<br>";
    // var_dump($a[0]['user_email']);
    // echo"<pre>";


    // echo"<pre>";
    ?>
    <?php date_default_timezone_set("Asia/Ho_Chi_Minh"); ?>
    <form action="" enctype="multipart/form-data" method="post">
    <input  name="user_id" type="hidden" value="<?= $a[0]['user_id'] ?>">
        <div class="form-group">
            <label for="user_name">Tên</label>
            <input type="text" name="user_name" class="form-control" placeholder="Nhập Tên" id="user_name" value="<?= $a[0]['user_name'] ?>">
        </div>
        <div class="form-group">
            <label for="user_image">Ảnh</label>
            <!-- <input type="text" class="form-control" name="user_image" id="user_image"value=""> -->
            <input name="user_image" type="hidden" value="<?= $a[0]['user_image'] ?>">
            <input name="image" type="file">
            <img src="<?= BASE_URL ?>/public/backend/image/user/<?= $a[0]['user_image'] ?>" alt="" width="80px">
        </div>
        <div class="form-group">
            <label for="user_email">Email</label>
            <input type="email" name="user_email" class="form-control" id="user_email" placeholder="Nhập Email" value="<?= $a[0]['user_email'] ?>">
        </div>

        <div class="form-group">
            <label for="user_password">Mật khẩu</label>
            <input type="password" name="user_password" class="form-control" placeholder="Nhập Mật khẩu" id="user_password" value="<?= $a[0]['user_password'] ?>">
        </div>
        <div class="form-group">
            <label for="user_address">Địa chỉ</label>
            <input type="text" class="form-control" name="user_address" id="user_address" placeholder="Nhập Địa chỉ" value="<?= $a[0]['user_address'] ?>">
        </div>
        <div class="form-group">
            <label for="role">Vai trò</label> <br>
            <span>Khach hang: </span><input type="radio" id="role" name="role" value="0" <?php if ($a[0]['role'] == 0) {
                                                                                                echo "checked";
                                                                                            } ?>>
            <span>Nhân viên: </span><input type="radio" id="role" name="role" value="1" <?php if ($a[0]['role'] == 1) {
                                                                                            echo "checked";
                                                                                        } ?>>
        </div>
        <div class="form-group">
            <label for="user_phone">Số điện thoại</label>
            <input type="text" name="user_phone" class="form-control" id="user_phone" placeholder="Nhập số điện thoại" value="<?= $a[0]['user_phone'] ?>">
        </div>
        <div class="form-group">
            <label for="created_at">Ngày tạo</label>
            <input type="date" class="form-control" name="created_at" id="created_at" value="<?= $a[0]['created_at'] ?>">
        </div>
        <div class="form-group">
            <label for="created_at">Ngày cập nhật</label>
            <input type="date" class="form-control" name="updated_at" id="updated_at" value="<?= date("Y-m-d") ?>">
        </div>
        <button type="submit" name="btn-users" class="btn btn-primary">Sửa user name</button>
        <a class="btn btn-info" href="<?=BASE_URL?>/admin/user/index">Quay lại</a>
    </form>
</div>