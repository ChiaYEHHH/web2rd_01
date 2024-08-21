<?php
include_once "base.php";
dd($_POST);
$do = $_POST['table'];
$db = ${ucfirst($do)};


foreach ($_POST['id'] as $key => $id) {
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
        $db->del($id);  //in_array($id,$_POST['del'])確保$id有在$_POST['del']陣列中
    } else {
        $data = $db->find($id); //先把要修改的整筆資料撈出來存在$data
        // dd($data);
        switch ($do) {
            case 'title':
                $data['sh'] = (isset($_POST['sh']) && $_POST['sh'] == $id) ? 1 : 0;
                $data['text'] = $_POST['text'][$key];
                break;
            case 'news':
            case 'ad':
                $data['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                $data['text'] = $_POST['text'][$key];
                break;
            case 'mvim':
            case 'image':
                $data['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                break;
            case 'total':

                break;
            case 'bottom':
                $data['text'] = $_POST['text'];
                break;

            case 'admin':

                break;
            case 'menu':

                break;
        }

        dd($data);
        $db->save($data);
    }
}

to("../admin.php?do=$do");
