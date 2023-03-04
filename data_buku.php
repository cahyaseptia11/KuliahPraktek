<?php
  include './main/aside.php'
?>
  <div class="content-wrapper">       
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tampil Data Buku</h3><br>
          <p></p>
          <a href="input_buku.php"><button type="submit" class="btn btn-primary">Tambah Buku</button></a>      
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>              
              <th>No</th>  
              <th>ID Buku</th>
              <th>Judul Buku</th>            
              <th>Kategori</th>   
              <th>Pengarang</th>
              <th>Penerbit</th>
              <th>Opsi</th>                                              
            </tr>
            </thead>                   
            <tbody> 
            <?php 
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($db,"SELECT * FROM tb_buku");
                while($d = mysqli_fetch_array($data)){
            ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['idbuku']; ?></td>
                    <td><?php echo $d['judulbuku']; ?></td>
                    <td><?php echo $d['kategori']; ?></td>
                    <td><?php echo $d['pengarang']; ?></td>
                    <td><?php echo $d['penerbit']; ?></td>
                    <td>
                      <a href="edit_buku.php?idbuku=<?php echo $d['idbuku']; ?>"><button class="btn btn-success btn-sm btn-flat"><i class="fa fa-edit"></i></button></a>
                      <a href="hapus_buku.php?idbuku=<?php echo $d['idbuku']; ?>"><button class="btn btn-danger btn-sm btn-flat"><i class="fa fa-trash"></i></button></a>
                    </td>
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
  <aside class="control-sidebar control-sidebar-dark">    
</div>  
</body>
<?php
  include './main/script.php'
?>
</html>