<?php
// setting default timezone
date_default_timezone_set('Asia/Jakarta');

session_start();

// connection
$con = mysqli_connect('localhost','root','','adminpegawai');
if(mysqli_connect_errno()){
    echo mysqli_connect_error();
}

// base_url funtion
function base_url($url = null){
    $base_url = "http://localhost/magang";
    if($url != null){
        return $base_url."/".$url;
    } else {
        return $base_url;
    }
}
?>