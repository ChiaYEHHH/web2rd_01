<?php
include_once "base.php";

$do = $_POST['table'];
$db = ${ucfirst($do)};

dd($_POST);

if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $key => $id) {
        if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
            $db->del($id);
        } else {
            $data = $db->find($id);
            $data['href'] = $_POST['href'][$key];
            $data['text'] = $_POST['text'][$key];
            $db->save($data);
        }
    }
}

if (isset($_POST['text2'])) {
    foreach ($_POST['text2'] as $key => $text) {
        if ($text != '') {
            $data = [
                'text' => $text,
                'href' => $_POST['href2'][$key],
                'main_id' => $_POST['main_id'],
            ];
            $db->save($data);
        }
    }
}

to("../admin.php?do=$do");