<?php
    require('../classfuntion.php');
    $DB =new classfuntion();
    $id_xoa = $_GET['xoa'];
    $DB->remove("huongdanvien","ma_hdv='$id_xoa'");
    header('location: xemhdv.php');
?>