<?php
    require('../classfuntion.php');
    $DB =new classfuntion();
    $id_xoa = $_GET['xoa'];
    $DB->remove("tour","ma_tour='$id_xoa'");
    header('location: xemtour.php');
?>