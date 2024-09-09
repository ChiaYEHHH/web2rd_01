<?php
include_once "base.php";
dd($_POST);
$do = $_POST['table'];
$db = ${ucfirst($do)};

if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $key => $id) {
        if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
            $db->del($id);
        } else {
            $data = $db->find($id);
            $data['href'] = $_POST['href'][$key];
            $data['text'] = $_POST['text'][$key];

            // dd($data);
            $db->save($data);
        }
    }
}

if (isset($_POST['text2'])) {
    foreach ($_POST as  $text2) {
        dd($text2);
        if ($text2 != "") {
            // $db->save(['text' => $text2, 'href' => $_POST['href'][$key],]);
        }
    }
}


to("../admin.php?do=$do");
