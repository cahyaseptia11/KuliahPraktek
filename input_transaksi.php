<?php
  include './main/aside.php'
?>  
  <div class="content-wrapper">        
    <section class="content"> 
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Form Input Transaksi Peminjaman "Digital Library"</h3>
        </div>       
        <form class="form-horizontal" action="store_transaksi.php" method="POST">
          <div class="card-body">
            <div class="form-group row">                    
              <label for="inputEmail3" class="col-sm-2 col-form-label">ID Transaksi</label>
              <div class="col-sm-10">     
              <input type="text" class="form-control" id="inputEmail3" placeholder="ID Transaksi" name="idtransaksi" >                                
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">ID Anggota</label>
              <div class="col-sm-10">
              <select class="custom-select rounded-0" id="idanggota" name="idanggota">                
                <?php 
                      include 'koneksi.php';
                      $no = 1;
                      $data = mysqli_query($db,"SELECT idanggota FROM tb_anggota");
                      while($d = mysqli_fetch_array($data)){
                    ?>   
                    <option value="<?php echo $d["idanggota"]?>" name="idanggota"><?php echo $d["idanggota"]?></option>     

                    <?php 
                  } 
                  ?>
            </select>                              
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">ID Buku</label>
              <div class="col-sm-10">
              <select class="custom-select rounded-0" id="idbuku" name="idbuku">                
                <?php 
                      include 'koneksi.php';
                      $no = 1;
                      $data = mysqli_query($db,"SELECT idbuku FROM tb_buku");
                      while($d = mysqli_fetch_array($data)){
                    ?>   
                    <option value="<?php echo $d["idbuku"]?>" name="idbuku"><?php echo $d["idbuku"]?></option>                                             
                    <?php 
                  } 
                  ?>
            </select>    
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="inputPassword3" placeholder="tanggal Pinjam" name="tglpeminjaman">
              </div>
            </div>                                                
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Pengembalian</label>
              <div class="col-sm-10">
               <input type="date" class="form-control" id="inputPassword3" placeholder="tanggal Kembali" name="tglpengembalian">
              </div>
            </div>            
            </div>
          </div>          
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Simpan</button>                  
          </div>          
        </form>
      </div>                         
</body>
<?php
  include './main/script.php'
?>
</html>
