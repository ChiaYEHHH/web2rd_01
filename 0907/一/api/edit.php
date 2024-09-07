<?php
include_once "base.php";

$do = $_POST['table'];
$db = ${ucfirst($do)};
dd($_POST);

if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $key => $id) {
        if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
            $db->del($id);
        } else {
            $data = $db->find($id);
            switch ($do) {
                case 'title':
                case 'ad':
                case 'news':
                    $data['sh'] = ($_POST['sh']) && in_array($id, $_POST['sh']) ? 1 : 0;
                    $data['text'] = $_POST['text'][$key];
                    break;
                case 'image':
                case 'mvim':
                    $data['sh'] = ($_POST['sh']) && in_array($id, $_POST['sh']) ? 1 : 0;
                    break;
                case 'menu':
                    $data['sh'] = ($_POST['sh']) && in_array($id, $_POST['sh']) ? 1 : 0;
                    $data['text'] = $_POST['text'][$key];
                    $data['href'] = $_POST['href'][$key];
                    break;
                case 'bottom':
                case 'total':
                    $data['text'] = $_POST['text'][$key];
                    break;
                case 'admin':
                    $data['acc'] = $_POST['acc'][$key];
                    $data['pw'] = $_POST['pw'][$key];
                    break;
                default;
            }
            // dd($data);
            $db->save($data);
        }
    }
}
to("../admin.php?do=$do");
