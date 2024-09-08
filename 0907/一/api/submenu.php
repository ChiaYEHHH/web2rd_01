<?php
include_once "base.php";

$do = $_POST['table'];
$db = ${ucfirst($do)};

if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $key => $id) {
        if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
            $db->del($id);
        } else {
            $data = $db->find($id);
            $data['text'] = $_POST['text'][$key];
            $data['href'] = $_POST['href'][$key];
            $db->save($data);
        }
    }
}

// if(isset($_POST['text2'])){
//     if($_POST['text2'] != ""){

//     }
// }
if (isset($_POST['text2'])) {
    foreach ($_POST['text2'] as $key => $text) {
        if ($text != '') {
            $db->save([
                'text' => $text,
                'href' => $_POST['href2'][$key],
                'main_id' => $_POST['main_id']
            ]);
        }
    }
}

to("../admin.php?do=$do");
