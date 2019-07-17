<?php include_once('../_header.php');
?>

<div class="box">
    <h1><img src="../picture/logo_kemnaker.jpg" width="40px" alt="">BK3 Jakarta</h1>
      <hr>
        <h3>Edit Data Pegawai</h3>
        <h4>
            <small>Edit Data Pegawai Balai Keselamatan dan Kesehatan Jakarta</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row" style="margin-top: 50px;">
              <div class="col-md-6 col-md-offset-2">

            <?php
              $NIP =@$_GET['NIP'];
              $sql_pegawai = mysqli_query($con, "SELECT * FROM data_pegawai WHERE NIP = '$NIP'") or die (mysqli_error($con));
              $data = mysqli_fetch_array($sql_pegawai);
            ?>
                  <form action="Proses.php" method="POST">   
                    <div class="form-group">
                      <label for="NIP">NIP</label>
                      <input type="text" maxlength="18" class="form-control" id="NIP"  value="<?=$data['NIP']?>" placeholder="NIP" name="NIP" required>
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama Lengkap</label>
                        <input type="text" maxlength="20" class="form-control" id="Nama"  value="<?=$data['Nama']?>" placeholder="Nama Lengkap" name="Nama" required>
                    </div>  
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="TempatLahir">Tempat Lahir</label>
                          <input type="text" maxlength="25" class="form-control" id="Tempat_Lahir"  value="<?=$data['Tempat_Lahir']?>" placeholder="Tempat Lahir" name="Tempat_Lahir" required>
                        </div>
                      </div>       
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="TanggalLahir">Tanggal Lahir</label>
                          <input type="date" class="form-control" id="Tanggal_Lahir"  value="<?=$data['Tanggal_Lahir']?>" placeholder="Tanggal Lahir" name="Tanggal_Lahir" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="Pangkat">Pangkat</label>
                      <input type="text" maxlength="18" size="18" class="form-control" id="Pangkat"  value="<?=$data['Pangkat']?>" placeholder="Pangkat" name="Pangkat" required>
                    </div>
                    <div class="form-group">
                      <label for="Golongan">Golongan</label>
                      <input type="text" maxlength="18" size="18" class="form-control" id="Golongan" value="<?=$data['Golongan']?>"  placeholder="Golongan" name="Golongan" required>
                    </div>
                    <div class="form-group">
                      <label for="TMT">TMT</label>
                      <input type="date" class="form-control" id="TMT" value="<?=$data['TMT']?>"  placeholder="TMT" name="TMT" required>
                    </div>
                    <div class="form-group">
                      <label for="Jabatan">Jabatan</label>
                      <textarea class="form-control" id="Jabatan" rows="2" placeholder="Jabatan" name="Jabatan"><?=$data['Jabatan']?></textarea>
                  </div>
                    <div class="form-group">
                        <label for="PendidikanTertinggi">Pendidikan Tertinggi</label>
                        <input type="text" class="form-control" id="Pendidikan_Tertinggi" value="<?=$data['Jabatan_Tertinggi']?>" placeholder="Pendidikan Tertinggi" name="Pendidikan_Tertinggi" required>
                    </div>
                    <div class="form-group">
                      <label for="Agama">Agama</label>
                      <select name="agama" class="form-control" id="Agama" value="<?=$data['Agama']?>" placeholder="Agama" name="Agama" required>
                        <option value="Islam">Islam</option>
                        <option value="Khatolik">Khatolik</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Lainya">Lainya</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label name="Jk"  value="<?=$data['Jk']?>">Jenis Kelamin</label>
                      <br />
                      <div class="radio-inline">
                        <label>
                          <input type="radio" name="genderL" id="l" value="male" checked> L
                        </label>
                        <br>
                        <label>
                          <input type="radio" name="genderP" id="p" value="female"> P
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                        <label name="Status" value="<?=$data['Status']?>"> Status</label>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="status" value="1"> Kawin
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="status" value="2"> Belum Kawin
                          </label>
                        </div>
                      </div> 
                    <div class="form-group">
                      <label for="Keterangan">keterangan</label>
                      <textarea class="form-control" id="Ket"  rows="5" placeholder="Keterangan" name="Keterangan"><?=$data['Keterangan']?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="Photo">Foto Pegawai</label>
                      <input type="file" id="Photo" value="<?=$data['Photo']?>" name="Photo">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                    
                    <div class="form-group pull-right">
                      <input type="submit" class="btn btn-success" name="add" value="Save">
                      <!-- alternative -->
                      <!-- <button type="submit"class="btn btn-primary">Input</button> -->
                    </div>
                  </form>
              </div>
            </div>

<?php include_once('../_footer.php');
?>