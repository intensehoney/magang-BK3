<?php 
require_once "config/config.php";
if(!isset($_SESSION['user'])){
    echo "<script>window.location='".base_url('auth/login.php')."';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Nominatif Pegawai</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/css/simple-sidebar.css')?>" rel="stylesheet">
    <link rel="icon" herf="<?=base_url('picture/logo_kemnaker.jpg')?>" >
</head>
<body>
    <script src="<?=base_url('assets/js/jquery.js')?>"></script>
    <script src="<?=base_url('assets/jsbootstrap.min.js')?>"></script>

    <div id="wrapper">
        <div id="sidebar-wrapper" style="background:aliceblue;">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#"><img src="../picture/logo_kemnaker.jpg" width="40px" alt="">
                    <span class="text-primary"><b>BK3 JAKARTA
                    </b></span></a>
                </li>
                <b>
                <li style="margin-top:20px;">
                    <a href="<?=base_url('dashboard')?>"> <span class="glyphicon glyphicon-dashboard"></span> DASHBOARD</a>
                </li>
                <li>
                    <a href="<?=base_url('pegawai/data.php')?>"> <span class="glyphicon glyphicon-list"></span> TABLE PEGAWAI</a>
                </li>
                <li>
                    <a href="#"> <span class="glyphicon glyphicon-user"></span>PROFIL PEGAWAI</a>
                </li>
                <li>
                    <a href="#"> <span class="glyphicon glyphicon-cog"></span>KETERANGAN</a>
                </li>
                <li>
                    <a href="<?=base_url('auth/logout.php')?>"onclick="return confirm('Apakah anda akan keluar, <?= $_SESSION['user']?> ?')" class="text-danger" style="color:red;"><span class="glyphicon glyphicon-chevron-left"></span> LOG OUT</a>
                </li>
                </b>
            </ul>
        </div>
      
        <div id="page-content-wrapper">
            <div class="container-fluid">
            