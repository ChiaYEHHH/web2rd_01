<?php
include_once "base.php";
dd($_POST);
$do = $_POST['table'];
$db = ${ucfirst($do)};
unset($_POST['table']);
if (isset($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../image/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}
if ($do == 'admin') {
    unset($_POST['pw2']);
}

$db->save($_POST);
to("../admin.php?do=$do");
