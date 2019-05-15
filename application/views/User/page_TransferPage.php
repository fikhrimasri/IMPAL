    <div class="container" align="center">
      <div class="HeadLabel">
        <img src="<?php echo base_url('assets/image/LOGO.png'); ?>" style="height:70px; margin-top:10px" alt="">
      </div>
      <div class="card" style="margin-top:10px; width:400px; height: 420px">
        <div class="card-header bg-primary text-light">
          Transfer Uang
        </div>
        <div class="card-body" align="left">
          <div class="Form">
            <form method="POST" action="<?php echo base_url('Cuser/transferjum/'); ?>">
            <?php $no=1; foreach ($data as $d ) {?>
            <div class="form-group">
                <label>No Rekening Pengirim :</label>
                <input name="rek1" type="number" class="form-control" value=<?php echo $d->no_rekening?> readonly>
              </div>
            <?php } ?>
              <div class="form-group">
                <label>No Rekening Penerima :</label>
                <input name="rek" type="number" class="form-control" placeholder="Enter Rekening Number">
              </div>
              <div class="form-group">
                <label>Jumlah Transfer :</label>
                <input name="jum" type="number" class="form-control" placeholder="Enter Mount">
              </div>
              <div class="modal" align="center" id="myModal" style="margin-top:170px">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div  class="modal-title" align="center">
                          <span><img src="<?php echo base_url('assets/image/alert.png'); ?>" style="height: 40px" alt=""></span><span> Perhatian</span>
                      </div>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      Apakah anda ingin melanjutkan?
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-danger">Yes</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <div align="center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Transfer</button>
            </div>
          </div>
        </div>
        <div class="card-footer bg-primary text-light" style="font-size:15px">
          
        </div>
      </div>
    </div>
  </div>