<?php
include('../lib/function.php');

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

    <h2>Add user</h2>
    <br>
    <hr>

    <form action="add.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Họ tên</label>
            <input required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="ds_name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Đơn vị</label>
            <input required name="ds_address" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhạp don vi">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label" for="exampleCheck1">Câu hỏi</label><br>
            <textarea required name="ds_desc" id="exampleCheck1" cols="70" rows="10"></textarea>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>