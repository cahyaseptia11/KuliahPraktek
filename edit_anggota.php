<?php
  include './main/aside.php'
?>
  <div class="content-wrapper">    
  <section class="content">
      <div class="card">
      <div class="card-header">
          <h3 class="card-title">Data Anggota</h3><br>
          <p></p>
          <a href="input_buku.php"><button type="submit" class="btn btn-primary">Edit Anggota</button></a>      
        </div>              
        <div class="card-body">           
        <?php
          include 'koneksi.php';
          $idanggota = $_GET['idanggota'];
          $data = mysqli_query($db,"SELECT  * FROM tb_anggota WHERE idanggota='$idanggota'");
          while($d = mysqli_fetch_array($data)){
        ?>        
        <form class="form-horizontal" action="update_anggota.php" method="POST">
          <div class="card-body">
            <div class="form-group row">                    
              <label for="id_anggota" class="col-sm-2 col-form-label">ID Anggota</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="id_anggota" placeholder="ID Anggota" name="idanggota" value="<?php echo $d['idanggota'];?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="judul" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="judul" placeholder="Nama" name="nama" value="<?php echo $d['nama'];?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-10">    
                <input type="radio" id="html" name="jeniskelamin" value="pria"><label for="lakilaki" value="<?php echo $d['jeniskelamin'];?>">Laki-Laki</label></input<br><br>
                <input type="radio" id="css" name="jeniskelamin" value="wanita"><label for="perempuan" value="<?php echo $d['jeniskelamin'];?>">Perempuan</label><br>                      
              </div>
            </div>
            <div class="form-group row">
              <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" value="<?php echo $d['alamat'];?>">
              </div>
            </div> 
            <div class="form-group row">
              <label for="alamat" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat" placeholder="status" name="status" value="<?php echo $d['status'];?>">
              </div>
            </div>
            <?php } ?>  
          </div>                          
          <div class="card-footer">
            <button type="submit" class="btn btn-info" name="submit">Simpan</button>                  
          </div>          
        </form>
      </div>     
    </section>    
  </div>  
</div>
</body>
<?php
  include './main/script.php'
?>
</html>