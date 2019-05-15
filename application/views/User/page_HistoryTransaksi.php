    <div class="container" align="center">
      <div class="HeadLabel">
        <img src="<?php echo base_url('assets/image/LOGO.png'); ?>" style="height:70px; margin-top:10px" alt="">
      </div>
      <div class="card" style="margin-top:10px; width:800px; height: 400px">
        <div class="card-header bg-primary text-light">
          History Transaksi
        </div>
        <div class="card-body" align="left">
            <table class="table table-fixed table-dark table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>No Transaksi</th>
                    <th>No Rekening Penerima</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($data as $d ) {?>
                  <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $d->no_transaksi?></td>
                    <td><?php echo $d->no_rek_penerima ?></td>
                    <td><?php echo $d->jumlah ?></td>
                    <td><?php echo $d->tanggal ?></td>
                  </tr>
                <?php } ?>
                  </tbody>
              </table>
        </div>
        <div class="card-footer bg-primary text-light" style="font-size:15px">
          
        </div>
      </div>
    </div>
  </div>
<style>
.table-fixed thead {
  width: 97%;
}
.table-fixed tbody {
  height: 230px;
  overflow-y: auto;
  width: 100%;
}
.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
  display: block;
}
.table-fixed tbody td, .table-fixed thead > tr> th {
  float: left;
  border-bottom-width: 0;
}
</style>