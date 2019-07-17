<?php include_once('../_header.php');
?>

    <div class="box">
        <h1><img src="../picture/logo_kemnaker.jpg" width="40px" alt="">BK3 Jakarta</h1>
        <h4>
            <small>Data Nominatif Pegawai Balai Keselamatan dan Kesehatan Jakarta</small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah pegawai</a>
            </div>
        </h4>
        <div style="margin-bottom:20px;">
            <form class="form-inline" action="" method="post">
                <div class="form-group">
                    <input type="text" name="pencarian" class="form-control" placeholder="pencarian"> 
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIP</th>
                        <th>NAMA</th>
                        <th>TEMPAT,TANGGAL LAHIR</th>
                        <th>PANGKAT</th>
                        <th>GOL</th>
                        <th>TMT</th>
                        <th>JABATAN</th>
                        <th>PENDIDIKAN TERTINGGI</th>
                        <th>AGAMA</th>
                        <th>JK</th>
                        <th>STATUS</th>
                        <th>KET</th>
                        <th><i class="glyphicon glyphicon-cog"></i>Settings</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $batas = 10;    
                $hal = @$_GET['hal'];
                if(empty($hal)){
                    $posisi = 0;
                    $hal =1;
                } else {
                    $posisi = ($hal - 1) * $batas;
                }
                $no = 1;
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    $pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
                    if($pencarian != ''){
                        $sql = "SELECT * FROM data_pegawai WHERE Nama LIKE '%$pencarian%'";
                        $query = $sql;
                        $queryJml = $sql;
                    } else {
                        $query = "SELECT * FROM data_pegawai LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM data_pegawai";
                        $no = $posisi + 1;
                    }
                } else {
                    $query = "SELECT * FROM data_pegawai LIMIT $posisi, $batas";
                    $queryJml ="SELECT * FROM data_pegawai";
                    $no = $posisi + 1;
                }
                $sql_pegawai = mysqli_query($con, $query) or die (mysqli_error($con));
                if(mysqli_num_rows($sql_pegawai) > 0){
                    while($data = mysqli_fetch_array($sql_pegawai)){?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$data['NIP']?></td>
                        <td><?=$data['Nama']?></td>
                        <td><?=$data['Tempat_Lahir'.'Tanggal_Lahir']?></td>
                        <td><?=$data['Pangkat']?></td>
                        <td><?=$data['Golongan']?></td>
                        <td><?=$data['TMT']?></td>
                        <td><?=$data['Jabatan']?></td>
                        <td><?=$data['Pendidikan_Tertinggi']?></td>
                        <td><?=$data['Agama']?></td>
                        <td><?=$data['Jk']?></td>
                        <td><?=$data['Status']?></td>
                        <td><?=$data['Keterangan']?></td>
                        <td>
                        <a href="edit.php?id=<?=$data['NIP']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit" ></i></a>
                        <a href="del.php?id=<?=$data['NIP']?>" onclick="return confirm('<?= $_SESSION['user']?> ,Yakin anda akan menghapusnya ?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash" ></i></a>
                        </td>
                    </tr>
                    <?php
                    }
                } else {
                    echo "<tr><td colspan=\"14\" align=\"center\"> Data yang anda cari tidak ditemukan </td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
        <?php
        if($_POST['pencarian'] == ''){?>
            <div style="float:left;">
                <?php
                 $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                 echo  "Jumalah Data : <b>$jml</b>";
                ?>
            </div>
            <div style="float:right;">
               <ul class="pagination pagination-sm" style="margin:0">
                <?php
                $jml_hal = ceil($jml / $batas);
                for ($i=1; $i <= $jml_hal; $i++){
                    if ($i != $hal){
                        echo "<li><a href=\"?hal=$i\">$i</a></li>";
                    } else {
                        echo "<li class=\"active\"><a>$i</a></li>";
                    }
                }
                ?>
            </ul>
            </div>
            <?php
        } else {
            echo "<div style=\"float:left;\">";
            $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
            echo  "Data Hasil Pencarian : <b>$jml</b>";
            echo " </div>";
        }
        ?>
    <br>

    <div class="row">
     <div class="col-lg-12">
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">ZOOM</a>
        </div>
    </div>

<?php include_once('../_footer.php');
?>