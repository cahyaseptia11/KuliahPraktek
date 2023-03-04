<?php
  include './main/aside.php'
?>  
  <div class="content-wrapper">   
    <section class="content"> 
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Form Input Data Buku "Digital Library"</h3>
        </div>
        <form class="form-horizontal" action="store_buku.php" method="POST">
          <div class="card-body">
            <div class="form-group row">                    
              <label for="id_buku" class="col-sm-2 col-form-label">ID Buku</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="id_buku" placeholder="ID Buku" name="idbuku">
              </div>
            </div>
            <div class="form-group row">
              <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="judul" placeholder="Judul Buku" name="judulbuku">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
              <div class="col-sm-10">
              <select class="custom-select rounded-0" id="kategori" name="kategori">
                <option>~Pilih Kategori~</option>
                <option>Ilmu Pengetahuan</option>
                <option>Ilmu Pengembangan Diri</option>
                <option>Ilmu Agama</option>
            </select>                     
              </div>
            </div>
            <div class="form-group row">
              <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="pengarang" placeholder="Nama Pengarang" name="pengarang">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Penerbit</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Penerbit" name="penerbit">
              </div>
            </div>                  
            </div>
          </div>                    
            <button type="submit" class="btn btn-info" name="submit">Simpan</button>                  
          </div>          
        </form>
      </div>
    </section>    
  </div>
</body>
<?php
  include './main/script.php'
?>
</html>
