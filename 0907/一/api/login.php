<?php
include_once "base.php";

if($Admin->count($_POST) > 0){
    $_SESSION['acc']=$_POST['acc'];
    to("../admin.php");
    exit;
}
?>
<script>
alert("帳號或密碼錯誤");
location.href="../index.php?do=login";
</script>
