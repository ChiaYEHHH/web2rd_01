<?php
include_once "base.php";
$do = $_POST['table'];
$db = ${ucfirst($do)};
dd($_POST);
if (!empty($_POST['img']['tmp_name'])) {
    dd($_POST['img']['tmp_name']);
    move_uploaded_file($_POST['img']['tmp_name'], "./image/" . $_POST['img']['tmp_name']);
    $_POST['img']=$_POST['img']['tmp_name'];
}

if($do == 'admin'){
    unset($_POST['pw2']);
}

unset($_POST['table']);
$db->save($_POST);

to("../admin.php?do=$do");