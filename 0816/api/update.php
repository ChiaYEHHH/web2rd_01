<?php
include_once "base.php";
dd($_POST);
$do = $_POST['table'];
$db = ${ucfirst($do)};


if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../images/" . $_FILES['img']['name']);
    $data = $db->find($_POST['id']); //先把要修改的整筆資料撈出來存在$data
    $data['img']=$_FILES['img']['name'];
    dd($data);

    $db->save($data);
}

to("../admin.php?do=$do");
