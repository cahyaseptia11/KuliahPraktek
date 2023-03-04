<?php
  include './main/aside.php'
?>
  <div class="content-wrapper">   
    <section class="content">
      <div class="card">
      <div class="card-header">
          <h3 class="card-title">Transaksi Peminjaman</h3><br>
          <p></p>
          <a href="input_transaksi.php"><button type="submit" class="btn btn-primary">Tambah Transaksi</button></a>      
        </div>              
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>             
            <tr>                          
              <th>No</th>
              <th>ID Transaksi</th>  
              <th>ID Anggota</th>
              <th>Nama</th>            
              <th>ID Buku</th>   
              <th>Judul Buku</th>
              <th>Tanggal Peminjaman</th>
              <th>Tanggal Pengembalian</th>
              <th>Opsi</th>                                                 
            </tr>                            
            </thead>                   
            <tbody>
            <?php
              include 'koneksi.php';
              $no=1;
              $data = mysqli_query($db,"SELECT  tb_transaksi.idtransaksi,tb_anggota.idanggota,tb_anggota.nama,tb_buku.idbuku,tb_buku.judulbuku,tb_transaksi.tglpeminjaman,tb_transaksi.tglpengembalian FROM tb_transaksi JOIN tb_anggota ON tb_transaksi.idanggota = tb_anggota.idanggota JOIN tb_buku ON tb_transaksi.idbuku = tb_buku.idbuku;");
              while($d = mysqli_fetch_array($data)){              
            ?>                    
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $d['idtransaksi']; ?></td>
                  <td><?php echo $d['idanggota']; ?></td>
                  <td><?php echo $d['nama']; ?></td>
                  <td><?php echo $d['idbuku']; ?></td>
                  <td><?php echo $d['judulbuku']; ?></td>
                  <td><?php echo $d['tglpeminjaman']; ?></td>
                  <td><?php echo $d['tglpengembalian']; ?></td>                      
                  <td><a href="edit_transaksi.php?idtransaksi=<?php echo $d['idtransaksi']; ?>">CETAK<i class="fas fa-edit"></i></a></td>
                </tr>
                  <?php 
                }
                ?>                
            </tbody>             
          </table>
        </div>        
      </div>      
    </section>        
  </div>        
</div>
</body>
<?php
  include './main/script.php'
?>
</html>