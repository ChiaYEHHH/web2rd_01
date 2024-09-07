<?php
include_once "base.php";

$do = $_POST['table'];
$db = ${ucfirst($do)};

if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../image/".$_FILES['img']['name']);
    $data=$db->find($_POST['id']);
    $data['img']=$_FILES['img']['name'];
    $db->save($data);
}
to("../admin.php?do=$do");
