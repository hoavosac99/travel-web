<?php
    require('../classfuntion.php');
    $DB =new classfuntion();
    $id_xoa = $_GET['xoa'];
    $DB->remove("user","id='$id_xoa'");
    header('location: xemkh.php');
?>