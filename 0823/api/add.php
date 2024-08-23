<?php
include_once "base.php";

// dd($_POST);
$do = $_POST['table'];
$db = ${ucfirst($do)};

if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../image/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}

unset($_POST['table']);

$db->save($_POST);
to("./back/$do.php")