<?php

    error_reporting(0);

    if($_GET['page']=="iventaris"){
        include_once 'iventaris.php';
    } elseif($_GET['page']=="t-iventaris"){
        include_once 't-iventaris.php';
    } elseif($_GET['page']=="edit-iventaris") {
        include_once 'edit-iventaris.php';
    } elseif($_GET['page']=="jaset"){
        include_once 'jaset.php';
    } elseif($_GET['page']=="t-aset"){
        include 't-aset.php';
    } elseif ($_GET['page']=="edit-aset") {
        include_once 'edit-aset.php';
    } elseif($_GET['page']=="adniven"){
        include_once 'adniven.php';
    } elseif($_GET['page']=="penempatan"){
        include_once 'penempatan.php';
    } elseif($_GET['page']=="t-penempatan"){
        include_once 't-penempatan.php';
    } elseif($_GET['page']=="t-adniven"){
        include_once 't-adniven.php';
    } elseif($_GET['page']=="upass"){
        include_once 'upass.php';
    } elseif ($_GET['page']=="dasuser") {
        include_once 'dasuser.php';
    }
?>