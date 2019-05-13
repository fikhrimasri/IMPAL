<div class="container">
  	<div class="box">
      <h2>Data Nasabah</h2>
      <p>Tabel Data Nasabah GankBank</p>            
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">TAMBAH NASABAH</button>
      <br><br>
      <table class="table table-bordered" id="table">
        <thead>
          <tr>
            <th>No</th>
            <th>No Rekening</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Saldo</th>
            <th>Edit</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
        	<?php $no=1; foreach ($data as $d ) {?>
          <tr>
        <!--HINT UNTUK MENGHAPUS USER KALIAN DAPAT MENGGUNAKAN FORM, MENGGUNAKAN ANCHOR ATAU HREF PADA BUTTON-->
            <form action="">
              <td><?php echo $no++ ?></td>
              <td><?php echo $d->no_rekening ?></td>
              <td><?php echo $d->username ?></td>
              <td><?php echo $d->nama ?></td>
              <td><?php echo $d->umur ?> Tahun</td>
              <td><?php echo $d->saldo ?></td>

              <!--BUTTON EDIT MAHASISWA-->
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->no_rekening ?>"><i class="fas fa-user-edit"></i></button></td>
              <!--BUTTON HAPUS --- ISI LENGKAPI BUTTON INI -->
              <td><a type="button" class="btn btn-danger"  href="<?php echo base_url('Cadmin/hapusnasabah/'.$d->no_rekening); ?>" onClick="return confirm('Apakah Anda Yakin?')" ><i class="fas fa-user-times"></i></a></td>
            </form>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php $no=1; foreach ($data as $d ) {?>
  <div class="modal fade" id="edit<?php echo $d->no_rekening ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>EDIT DATA NASABAH <?php echo $d->no_rekening ?> </h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="<?php echo base_url('Cadmin/editnasabah/'); ?>">
        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="No Rekening" name="rek" value="<?php echo $d->no_rekening ?>"  required>
        <div class="form-group">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="<?php echo $d->username ?>" name="username"  value="<?php echo $d->username ?>" readonly>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Umur</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Umur" name="umur"  value="<?php echo $d->umur ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama"  value="<?php echo $d->nama ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Saldo</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="<?php echo $d->saldo ?>" name="saldo"  value="<?php echo $d->saldo ?>" readonly>
          </div>        
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
        </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>
<!-- Modal Tambah Nasabah -->
<div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>TAMBAH DATA Nasabah</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="<?php echo base_url('Cadmin/tambahnasabah/'); ?>">
        <div class="form-group">
          <label for="formGroupExampleInput">No Rekening</label>
          <input type="number" class="form-control" id="formGroupExampleInput" placeholder="No Rekening" name="rek" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Username</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username" name="username"required>
        </div> 
        <div class="form-group">
          <label for="formGroupExampleInput">Nama</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Umur</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Umur" name="umur"required>
        </div> 
        <div class="form-group">
          <label for="formGroupExampleInput">Saldo</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Saldo" name="saldo"required>
        </div>              
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
      </form>
      </div>
    </div>
  </div>
</div>


</body>
  <script type="text/javascript">
    $(document).ready( function () {
        $('#table').DataTable();
    } );
  </script>
</html>