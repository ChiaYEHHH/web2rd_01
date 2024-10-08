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
            switch ($do) {
                case 'title':
                case 'ad':
                case 'news':
                    $data['text'] = $_POST['text'][$key];
                    $data['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                    break;
                case 'mvim':
                case 'image':
                    $data['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                    break;
                case 'bottom':
                case 'total':
                    $data['text'] = $_POST['text'][$key];
                    break;
                case 'menu':
                    $data['href'] = $_POST['href'][$key];
                    $data['text'] = $_POST['text'][$key];
                    $data['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
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
