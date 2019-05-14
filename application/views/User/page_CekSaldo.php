    <div class="container" align="center">
      <div class="HeadLabel">
        <img src="assets/image/LOGO.png" style="height:70px; margin-top:10px" alt="">
      </div>
      <div class="card" style="margin-top:20px; width:500px; height: 300px">
        <div class="card-header bg-primary text-light" style="margin-top:30px">
          Jumlah Saldo Anda
        </div>
        <?php $no=1; foreach ($data as $d ) {?>
        <div class="card-body">
          <div class="Saldo" style="margin-top:40px">
            <style>.inisaldo{font-size: 40px}</style>
            <span class="inisaldo">Rp : </span><span class="inisaldo"><?php echo $d->saldo?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>