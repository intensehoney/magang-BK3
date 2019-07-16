<?php 
require_once "../config/config.php";

    if(isset($_POST['add'])){
        $NIP = trim(mysqli_real_escape_string($con, $_POST['NIP']));
        $Nama = trim(mysqli_real_escape_string($con, $_POST['Nama']));
        $Tempat_Lahir = trim(mysqli_real_escape_string($con, $_POST['Tempat_Lahir']));
        $Tanggal_Lahir = trim(mysqli_real_escape_string($con, $_POST['Tanggal_Lahir']));
        $Pangkat = trim(mysqli_real_escape_string($con, $_POST['Pangkat']));
        $Golongan = trim(mysqli_real_escape_string($con, $_POST['Golongan']));
        $TMT = trim(mysqli_real_escape_string($con, $_POST['TMT']));
        $Jabatan = trim(mysqli_real_escape_string($con, $_POST['Jabatan']));
        $Pendidikan_Tertinggi = trim(mysqli_real_escape_string($con, $_POST['Pendidikan_Tertinggi']));
        $Agama = trim(mysqli_real_escape_string($con, $_POST['Agama']));
        $Jk = trim(mysqli_real_escape_string($con, $_POST['Jk']));
        $Status = trim(mysqli_real_escape_string($con, $_POST['Status']));
        $Keterangan = trim(mysqli_real_escape_string($con, $_POST['Keterangan']));
        mysqli_query($con, "INSERT INTO data_pegawai (NIP, Nama, Tempat_Lahir, Tanggal_Lahir, Pangkat, Golongan, TMT, Jabatan, Pendidikan_Tertinggi, Agama, Jk, Status, Keterangan) VALUES ('$NIP', '$Nama', '$Tempat_Lahir', '$Tanggal_Lahir', '$Pangkat', '$Golongan', '$TMT', '$Jabatan', '$Pendidikan_Tertinggi', '$Agama', '$Jk', '$Status', '$Keterangan')") or die (mysqli_error($con));
        echo "<script>window.location='data.php';</script>";
    } else if(isset($_POST['edit'])) {

    }

?>
