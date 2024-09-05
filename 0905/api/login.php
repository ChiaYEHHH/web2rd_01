<?php
include_once "base.php";
dd($_POST);

 if($_POST['acc']=='admin' && $_POST['pw'] == '1234'){
    to("./admin.php");
 }