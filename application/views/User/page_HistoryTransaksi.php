    <div class="container" align="center">
      <div class="HeadLabel">
        <img src="<?php echo base_url('assets/image/LOGO.png'); ?>" style="height:70px; margin-top:10px" alt="">
      </div>
      <div class="card" style="margin-top:10px; width:800px; height: 400px">
        <div class="card-header bg-primary text-light">
          History Transaksi
        </div>
        <div class="card-body" align="left">
          <div class="table-wrapper-scroll-y my-custom-scrollbar">
          <table class="table table-dark table-hover table-bordered table-striped mb-0"s>
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
        </div>
        <div class="card-footer bg-primary text-light" style="font-size:15px">
          
        </div>
      </div>
    </div>
  </div>
<style>
.my-custom-scrollbar {
position: relative;
height: 290px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
</style>