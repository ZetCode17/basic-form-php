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

    <form action="add.php" method="post">
        <input type="text" name="user_name">
        <input type="text" name="user_address">
        <input type="text" name="user_desc">
        <button type="submit">add</button>
    </form>
</body>

</html>