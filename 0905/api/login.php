<?php
include_once "base.php";
dd($_POST);

 if($_POST['acc']=='admin' && $_POST['pw'] == '1234'){
    to("../admin.php");
    exit();
 }

 ?>
 <script>
   alert("帳號或密碼錯誤");
   location.href="../?do=login";
 </script>