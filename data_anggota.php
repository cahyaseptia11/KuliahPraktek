<?php
  include './main/aside.php'
?>
  <div class="content-wrapper">   
    <section class="content">
      <div class="card">
      <div class="card-header">
          <h3 class="card-title">Tampil Data Anggota</h3><br>
          <p></p>
          <a href="input_anggota.php"><button type="submit" class="btn btn-primary">Tambah Anggota</button></a>      
        </div>              
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>   
                <th>No</th>                 
                <th>ID Anggota</th>
                <th>Nama Anggota</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th> 
                <th>Status</th>                                       
                <th>Opsi</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $data = mysqli_query($db,"SELECT * FROM tb_anggota");
                  while($d = mysqli_fetch_array($data)){
                ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['idanggota']; ?></td>
                      <td><?php echo $d['nama']; ?></td>
                      <td><?php echo $d['jeniskelamin']; ?></td>
                      <td><?php echo $d['alamat']; ?></td>
                      <td><?php echo $d['status']; ?></td>
                      <td>
                        <a href="edit_anggota.php?idanggota=<?php echo $d['idanggota']; ?>"><button class="btn btn-success btn-sm btn-flat"><i class="fa fa-edit"></i></button></a>
                        <a href="hapus_anggota.php?idanggota=<?php echo $d['idanggota']; ?>"><button class="btn btn-danger btn-sm btn-flat"><i class="fa fa-trash"></i></button></a>
                      </td>
                    </tr>
                    <?php 
                    }
                      ?>       
              </tbody>                  
              <tfoot>                 
              </tfoot>
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