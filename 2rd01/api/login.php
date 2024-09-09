<?php
include_once "base.php";

$chk = $Admin->count($_POST);
if ($chk) {
    $_SESSION['acc'] = $_POST['acc'];
    if ($_POST['acc'] == 'admin') {
        to("../admin.php");
    } else {
        to("../index.php");
    }
    exit();
}
?>
<script>
    alert("帳號或密碼輸入錯誤");
    location.href = "../index.php?do=login";
</script>