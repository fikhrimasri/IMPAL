    <div class="container" align="center">
      <div class="HeadLabel">
        <img src="<?php echo base_url('assets/image/LOGO.png'); ?>" style="height:70px; margin-top:10px" alt="">
      </div>
      <div class="card" style="margin-top:10px; width:400px; height: 400px">
        <div class="card-header bg-primary text-light">
          Ganti Password
        </div>
        <div class="card-body" align="left">
          <div class="Form" >
            <form method="POST" action="<?php echo base_url('Cuser/save_password/'); ?>">
              <div class="form-group">
                <label for="password">Password Lama :</label>
                <input type="password" class="form-control" id="pwd" name="old" placeholder="Enter Password">
              </div>
              <div class="form-group">
                <label for="pwd">Password Baru :</label>
                <input type="password" class="form-control" id="pwd" name="new" placeholder="Enter New Password" style="margin-bottom:5px">
                <input type="password" class="form-control" id="pwd" name="re_new" placeholder="Enter New Password">
              </div>
              <div class="modal" align="center" id="myModal" style="margin-top:170px">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div  class="modal-title" align="center">
                          <span><img src="assets/image/alert.png" style="height: 40px" alt=""></span><span> Perhatian</span>
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ubah Password</button>
            </div>
          </div>
        </div>
        <div class="card-footer bg-primary text-light" style="font-size:15px">
          <!-- <span><a class="text-light" href="<?php echo site_url('Cuser/logPage'); ?>">Login</a></span><span> | </span><span><a class="text-light" href="<?php echo site_url('Cuser/sigPage'); ?>">Sign Up</a></span> -->
        </div>
      </div>
    </div>
  </div>