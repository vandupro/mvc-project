<div class="container">
    <h2>Chi tiết bình luận</h2>
    <h4 style="color:red">
        <?php
            if(isset($message)){
                echo $message;
            }
        ?>
    </h4>
    <table class="table">
        <thead>
            <tr>
                <th>Nội dung</th>
                <th>Người bình luận</th>
                <th>Ngày bình luận</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['cmt'] as $item):?>
            <tr>
                <td><?=$item['content']?></td>
                <td><?=$item['user_name']?></td>
                <td>
                    <?=$item['created_at']?>
                </td>
                <td>
                    <a onclick="return confirm('Bạn có muốn xóa thật không?')" class="btn btn-danger"
                        href="<?=BASE_URL?>/admin/comment/delete/<?=$item['comment_id']?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach ;?>
        </tbody>
        <thead>
            <tr>
                <th>Nội dung</th>
                <th>Người bình luận</th>
                <th>Ngày bình luận</th>
                <th>Hành động</th>
            </tr>
        </thead>
    </table>
</div>