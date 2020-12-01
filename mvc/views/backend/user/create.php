
<div class="container">
    <h1>Thêm User</h1>
    <h4 style="color:red">
        <?php
            echo $message;
        ?>
    </h4>
    <form action="" enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label for="user_name">Tên</label>
            <input type="text" name="user_name" class="form-control" placeholder="Nhập Tên" id="user_name">
        </div>
        <div class="form-group">
            <label for="user_image">Ảnh</label>
            <input type="file" class="form-control" name="user_image" id="user_image">
        </div>
        <div class="form-group">
            <label for="user_email">Email</label>
            <input type="email" name="user_email" class="form-control" value="" id="user_email"placeholder="Nhập Email">
        </div>

        <div class="form-group">
            <label for="user_password">Mật khẩu</label>
            <input type="password" name="user_password" class="form-control" placeholder="Nhập Mật khẩu" id="user_password">
        </div>
        <div class="form-group">
            <label for="user_address">Địa chỉ</label>
            <input type="text" class="form-control" name="user_address" id="user_address"placeholder="Nhập Địa chỉ">
        </div>
        <div class="form-group">
            <label for="role">Vai trò</label> <br>
            <span>Khach hang: </span><input type="radio" id="role" name="role" value="0">
            <span>Nhân viên: </span><input type="radio" id="role" name="role" value="1">
        </div>
        <div class="form-group">
            <label for="user_phone">Số điện thoại</label>
            <input type="text" name="user_phone" class="form-control" value="" id="user_phone"placeholder="Nhập số điện thoại">
        </div>
        <div class="form-group">
            <label for="created_at">Ngày tạo</label>
            <input type="date" class="form-control" name="created_at" id="created_at" value="<?=date("Y-m-d", time());?>">
        </div>
        
        <button type="submit" name="btn-users" class="btn btn-primary">Thêm danh mục</button>
    </form>
</div>