<?php 
require_once "../config/config.php";

    mysqli_query($con, "DELETE FROM data_pegawai WHERE NIP = '$_GET[NIP]'") or die(mysqli_error($con)); 
    echo "<script>window.location='data.php';</script>";
?>