<?php
include('../lib/function.php');
$options = array(
    'order_by' => 'id ASC'
);
$list_user = get_all('danhsach', $options);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <h2>Danh sách</h2>
    <table class="table">
        <thead>

            <tr>
                <th scope="col">stt</th>
                <th scope="col">Tên</th>
                <th scope="col">Đon vị</th>
                <th scope="col">Câu hỏi</th>
                <th>Action</th>
            </tr>

        </thead>
        <tbody>
            <?php foreach ($list_user as $user) : ?>
                <tr>
                    <th scope="row"><?php echo $user['id'] ?></th>
                    <td><?= $user['ds_name'] ?></td>
                    <td><?= $user['ds_address'] ?></td>
                    <td><?= $user['ds_desc'] ?></td>
                    <td>mdo</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>