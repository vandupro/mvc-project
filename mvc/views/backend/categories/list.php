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
    <h4 style="color:red">
        <?php
            if(isset($message)){
                echo $message;
            }
        ?>
    </h4>
    <div class="add-cate pt-2 pb-4">
        <a class="btn btn-info" href="<?=BASE_URL?>/admin/category/create">Thêm loại hàng</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Mã</th>
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
                <td><?=$item['cate_image']?></td>
                <td><?=$item['created_at']?></td>
                <td>
                    <a class="btn btn-warning" href="<?=BASE_URL?>/admin/category/update/<?=$item['cate_id']?>">Sửa</a>
                    <a onclick="return confirm('Bạn có muốn xóa thật không?')" class="btn btn-danger" 
                    href="<?=BASE_URL?>/admin/category/delete/<?=$item['cate_id']?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach ;?>
        </tbody>
        <thead>
            <tr>
                <th>Mã</th>
                <th>TÊN</th>
                <th>HÌNH ẢNH</th>
                <th>NGÀY TẠO</th>
                <th>HÀNH ĐỘNG</th>
            </tr>
        </thead>
    </table>
</div>

