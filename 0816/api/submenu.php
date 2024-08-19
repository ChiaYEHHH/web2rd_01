<?php
include_once "base.php";
dd($_POST);
$do = $_POST['table'];
$db = ${ucfirst($do)};

if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $key => $id) {
        if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
            $db->del($id);  //in_array($id,$_POST['del'])確保$id有在$_POST['del']陣列中
        } else {
            $data = $db->find($id); //先把要修改的整筆資料撈出來存在$data

            $data['href'] = $_POST['href'][$key];
            $data['text'] = $_POST['text'][$key];
            $db->save($data);
        }
    }
}

if(isset($_POST['text2'])){
    foreach($_POST['text2'] as $key => $text){
        if($text != ''){
            $db->save([
                'text' => $text,
                'href' => $_POST['href2'][$key],
                'main_id' => $_POST['main_id']
            ]);
        }
    }
}

to("../admin.php?do=$do");
