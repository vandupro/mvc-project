<div class="container">
    <h2>Danh sách tin tức</h2>
    <h4 style="color:red">
        <?php
            if(isset($message)){
                echo $message;
            }
        ?>
    </h4>
    <div class="add-cate pt-2 pb-4">
        <a class="btn btn-info" href="<?=BASE_URL?>/admin/news/create">Thêm mới</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Mã</th>
                <th>TÊN TIN TỨC</th>
                <th>NGÀY TẠO</th>
                <th>HÀNH ĐỘNG</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['news'] as $item):?>
            <tr>
                <td><?=$item['new_id']?></td>
                <td><?=$item['new_name']?></td>
                <td><?=$item['created_at']?></td>
                <td>
                    <a class="btn btn-warning" href="<?=BASE_URL?>/admin/news/update/<?=$item['new_id']?>">Sửa</a>
                    <a onclick="return confirm('Bạn có muốn xóa thật không?')" class="btn btn-danger"
                        href="<?=BASE_URL?>/admin/news/delete/<?=$item['new_id']?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach ;?>
        </tbody>
        <thead>
            <tr>
                <th>Mã</th>
                <th>TÊN TIN TỨC</th>
                <th>NGÀY TẠO</th>
                <th>HÀNH ĐỘNG</th>
            </tr>
        </thead>
    </table>
</div>