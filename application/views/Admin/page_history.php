<div class="container">
	  <div class="box">
      <h2>Data History Transaksi</h2>
      <p>Tabel Data History Transaksi</p>            
      <table class="table table-bordered" id="table">
        <thead>
          <tr>
            <th>No</th>
            <th>No Transaksi</th>
            <th>Username</th>
            <th>No Rekening Penerima</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
          </tr>
        </thead>
        <tbody>
        	<?php $no=1; foreach ($data as $d ) {?>
          <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $d->no_transaksi?></td>
            <td><?php echo $d->username?></td>
            <td><?php echo $d->no_rek_penerima ?></td>
            <td><?php echo $d->tanggal ?></td>
            <td><?php echo $d->jumlah ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
<script type="text/javascript">
  $(document).ready( function () {
    $('#table').DataTable();
} );
</script>
</html>