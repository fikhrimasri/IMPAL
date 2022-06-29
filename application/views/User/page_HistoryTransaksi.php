    <div clas="container" align="center">
      <div class="HeadLabel">
        <img src="<?php echo base_url('assets/image/favicon3.png'); ?>" style="height:70px; margin-top:10px" alt="">
      </div>
      <!-- <div class="card" style="margin-top:10px; width:800px; height: 400px">
        <div class="card-header bg-dark text-light">
          Hasil Produksi
        </div> -->
        <h1>DAILY PRODUCTION</h1>
        <div class="container">  
         <div class="Isi row mt-0 mb-0">
            <div class="User col-sm-6">
               <div align="center">
                  <label for="Buat_User" ><h3 id="LabelUser">TODAY PRODUCTION</h3></label>
                  <div class="card" >
                    <div class="card-header bg-dark text-center">
                      <!-- <img src="<?php echo base_url('assets/image/favicon2.png') ?>" alt="logoankBank" width="150px"> -->
                    </div>
                    <div class="card-body">
                      <div class="table-wrapper-scroll-y my-custom-scrollbar">
                      <table class="table table-dark table-hover table-bordered table-striped mb-0"s>
                            <thead>
                              <tr>
                                <th>No</th>
                                <!-- <th>No Transaksi</th> -->
                                <!-- <th>Tanggal</th> -->
                                <th>OIL (BOPD)</th>
                                <th>GAS (MMSCFD)</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                            <?php $no=1; foreach ($data as $d ) {?>
                              <tr>
                                <td><?php echo $no++?></td>
                                <!-- <td><?php echo $d->no_transaksi?></td> -->
                                <td><?php echo $d->tanggal ?></td>
                                <td><?php echo $d->no_rek_penerima ?></td>
                                <td><?php echo $d->jumlah ?></td>
                                
                              </tr>
                            <?php } ?>
                              </tbody>
                          </table>
                        </div>
                    </div>
                    <div class="card-footer bg-dark" style="height:30px">
                    </div>
                  </div>
               </div>
               
                  </div>
                  <div class="User col-sm-6">
                    <label for="loginAdmin" ><h3 id="LabelAdmin">YESTERDAY PRODUCTION</h3></label>
                      <div class="card" align="right">
                    
                    <div class="card-header bg-dark text-center">
                      <!-- <img src="<?php echo base_url('assets/image/LOGO.png') ?>" width="150px" alt=""> -->
                    </div>
                    <div class="card-body">
                      <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <table class="table table-dark table-hover table-bordered table-striped mb-0"s>
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <!-- <th>No Transaksi</th> -->
                                  <th>Tanggal</th>
                                  <th>OIL (BOPD)</th>
                                  <th>GAS (MMSCFD)</th>
                                  
                                </tr>
                              </thead>
                              <tbody>
                              <?php $no=1; foreach ($data as $d ) {?>
                                <tr>
                                  <td><?php echo $no++?></td>
                                  <!-- <td><?php echo $d->no_transaksi?></td> -->
                                  <td><?php echo $d->tanggal ?></td>
                                  <td><?php echo $d->no_rek_penerima ?></td>
                                  <td><?php echo $d->jumlah ?></td>
                                  
                                </tr>
                              <?php } ?>
                                </tbody>
                            </table>
                        </div>
                      </div>
                      <div class="card-footer bg-dark" style="height:30px">
                  </div>
               </div>
                  </div>
               </div>
            </div>
     </div>
   </div>
        <div class="card-footer bg-dark text-light" style="font-size:15px">
          
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