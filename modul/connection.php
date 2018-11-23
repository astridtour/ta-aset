<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "simaset";

    $konek = mysqli_connect("$host", "$user", "$pass", "$db") or die (mysqli_connect_error());

    if(!$konek){
        echo "gagal bro";
    }else{
        
    }