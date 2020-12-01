<div class="container">
    <h2>Thông tin cửa hàng</h2>
    <h4 style="color:red">
        <?php
            if(isset($message)){
                echo $message;
            }
        ?>
    </h4>
    <div class="add-cate pt-2 pb-4">
        <!-- <?php if(!empty($data['infos'])):?>
            <a class="btn btn-info" href="<?=BASE_URL?>/admin/category/create">Tạo thông tin</a>
        <?php endif;?> -->
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Mã</th>
                <th>TÊN SHOP</th>
                <th>EMAIL</th>
                <th>ĐỊA CHỈ</th>
                <th>SỐ ĐIỆN THOẠI</th>
                <th>HÀNH ĐỘNG</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['infos'] as $item):?>
            <tr>
                <td><?=$item['info_id']?></td>
                <td><?=$item['info_name']?></td>
                <td><?=$item['info_email']?></td>
                <td><?=$item['info_adress']?></td>
                <td><?=$item['info_phone']?></td>
                <td>
                    <a class="btn btn-warning" href="<?=BASE_URL?>/admin/info_shop/update/<?=$item['info_id']?>">Sửa</a>
                </td>
            </tr>
            <?php endforeach ;?>
        </tbody>
        <thead>
            <tr>
                <th>Mã</th>
                <th>TÊN SHOP</th>
                <th>EMAIL</th>
                <th>ĐỊA CHỈ</th>
                <th>SỐ ĐIỆN THOẠI</th>
                <th>HÀNH ĐỘNG</th>
            </tr>
        </thead>
    </table>
</div>