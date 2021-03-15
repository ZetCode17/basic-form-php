<?php
include('../lib/function.php');
function add()
{
    $add_data = array(
        'id' => intval($_POST['user_id']),
        'name' => escape($_POST['user_name']),
        'address' => escape($_POST['user_address']),
        'desc' => escape($_POST['user_desc'])
    );
    save('danhsach', $add_data);
}
