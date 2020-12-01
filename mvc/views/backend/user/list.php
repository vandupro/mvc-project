<?php
    // echo '<pre>';
    // print_r($data['categories']);
    // echo '<pre>';
    // foreach($data['categories'] as $key=>$value){
    //     $key = $value;
    // }

    // die;
?>
<div class="container">
    <h2>Danh sách user</h2>
    <div class="add-cate pt-2 pb-4">
        <a class="btn btn-info" href="<?=BASE_URL?>/admin/user/create">Thêm user</a>
    </div>
    <table class="table"id="dataTable">
        <thead>
            <tr>
            <th>STT</th>
                <th>TÊN</th>
                <th>ẢNH</th>
                <th>Email</th>
                <th>VAI TRÒ</th>
                <th>NGÀY TẠO</th>
                <th>CHI TIẾT</th>
                <th>HÀNH ĐỘNG</th>
            </tr>
        </thead>
        <tbody>
       
            <?php foreach($data['user'] as $item):?>
              
            <tr>
            <td><?=$item['user_id']?></td>
                <td><?=$item['user_name']?></td>
                <td><img src="<?=BASE_URL?>/public/backend/image/user/<?=$item['user_image']?>" alt="" width="80px" ></td>
                <td><?=$item['user_email']?></td>
                <td><?= $item['role'] ? 'Nhân viên' : 'Khách hàng' ?></td>
                <td><?=$item['created_at']?></td>
                <td>
                    <a  href="<?=BASE_URL?>/admin/user/details/<?=$item['user_id']?>">Chi tiết</a>
                </td>
                <td>
                    <a class="btn btn-warning" href="<?=BASE_URL?>/admin/user/update/<?=$item['user_id']?>">Sửa</a>
                    <a class="btn btn-danger"  href="<?=BASE_URL?>/admin/user/delete/<?=$item['user_id']?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach ;?>
            
        </tbody>
        <thead>
        <tr>
                <th>STT</th>
                <th>TÊN</th>
                <th>ẢNH</th>
                <th>Email</th>
                <th>VAI TRÒ</th>
                <th>NGÀY TẠO</th>
                <th>CHI TIẾT</th>
                <th>HÀNH ĐỘNG</th>
            </tr>
        </thead>
    </table>
</div>

