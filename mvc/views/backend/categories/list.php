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
    <h2>Danh sách loại hàng</h2>
    <div class="add-cate pt-2 pb-4">
        <a class="btn btn-info" href="<?=BASE_URL?>/admin/category/create">Thêm loại hàng</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>TÊN</th>
                <th>HÌNH ẢNH</th>
                <th>NGÀY TẠO</th>
                <th>HÀNH ĐỘNG</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['categories'] as $item):?>
            <tr>
                <td><?=$item['cate_id']?></td>
                <td><?=$item['cate_name']?></td>
                <td>
                    <img src="<?=IMGAE_DISPLAY?>/backend/image/categories/<?=$item['cate_image']?>" alt="">
                </td>
                <td><?=$item['created_at']?></td>
                <td>
                    <a class="btn btn-warning" href="">Sửa</a>
                    <a class="btn btn-danger"" href="">Xóa</a>
                </td>
            </tr>
            <?php endforeach ;?>
        </tbody>
        <thead>
            <tr>
                <th>STT</th>
                <th>TÊN</th>
                <th>HÌNH ẢNH</th>
                <th>NGÀY TẠO</th>
                <th>HÀNH ĐỘNG</th>
            </tr>
        </thead>
    </table>
</div>

