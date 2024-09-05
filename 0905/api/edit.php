<?php
include_once "base.php";

$do = $_POST['table'];
$db = ${ucfirst($do)};
dd($_POST);

foreach ($_POST['id'] as $key => $id) {
    if ((isset($_POST['del']) && in_array($id, $_POST['del']))) {
        $db->del($id);
    } else {
        $data = $db->find($id);
        switch ($do) {
            case 'bottom':
            case 'total':
                $data['text'] = $_POST['text'];
                break;
                // $data['text'] = $_POST['text'][$key];
                // break;
                case 'ad':
            case 'title':
            case 'news':
                $data['text'] = $_POST['text'][$key];
                $data['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                break;
            case 'mvim':
            case 'image':
                $data['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                break;
            default;
        }
        $db->save($data);
    }
}

to("../admin.php?do=$do");
