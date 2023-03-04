<?php
  include './main/aside.php'
?>
  <div class="content-wrapper">    
  <section class="content">
      <div class="card">
      <div class="card-header">
          <h3 class="card-title">Data Buku</h3><br>
          <p></p>
          <a href="input_buku.php"><button type="submit" class="btn btn-primary">Edit Buku</button></a>      
        </div>              
        <div class="card-body">
        <?php
          include 'koneksi.php';
          $idbuku = $_GET['idbuku'];
          $data = mysqli_query($db,"SELECT  * FROM tb_buku WHERE idbuku='$idbuku'");
          while($d = mysqli_fetch_array($data)){
        ?>        
        <form class="form-horizontal" action="update_buku.php" method="POST">
          <div class="card-body">
            <div class="form-group row">                    
              <label for="id_buku" class="col-sm-2 col-form-label">ID Buku</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="id_buku" placeholder="ID Buku" name="idbuku" value="<?php echo $d['idbuku'];?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="judul" placeholder="Judul Buku" name="judulbuku" value="<?php echo $d['judulbuku'];?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
              <div class="col-sm-10">
              <select class="custom-select rounded-0" id="kategori" name="kategori">
                <option value="<?php echo $d['kategori'];?>"><?php echo $d['kategori'];?></option>
                <option>~Pilih Kategori~</option>
                <option>Karya Sastra</option>
                <option>Ilmu Komputer</option>
                <option>Ilmu Agama</option>
            </select>                     
              </div>
            </div>
            <div class="form-group row">
              <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="pengarang" placeholder="Nama Pengarang" name="pengarang" value="<?php echo $d['pengarang'];?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Penerbit</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Penerbit" name="penerbit" value="<?php echo $d['penerbit'];?>">
              </div>
            </div>    
            <?php             
          }
          ?>                      
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