<div class="container" align="center">
  <div class="HeadLabel">
    <img src="<?php echo base_url('assets/image/LOGO.png'); ?>" style="height:70px; margin-top:10px" alt="">
  </div>
  <h1>Halaman Hapus Data Nasabah</h1>
  <div class="card" style="margin-top:10px; width:400px; height: 300px">
    <div class="card-header bg-primary text-light">
      Cari Id Nasabah
    </div>
    <div class="card-body" height="" align="left">
      <div class="Form" >
        <form action="INI_SUCCESS">
          <div class="form-group" align="center">
            <input type="password" class="form-control" id="pwd" placeholder="">
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
                        <button type="submit" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#myModal1">Yes</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    </div>
                    </div>
                </div>
          </div>
          <div class="modal" align="center" id="myModal1" style="margin-top:0px">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div  class="modal-title" align="center">
                                <span><img src="assets/image/alert.png" style="height: 40px" alt=""></span><span> Perhatian</span>
                            </div>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                Hapus Data Nasabah Sukses
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div align="center">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="">Cari</button>
        </div>
      </div>
      <div class="card-footer bg-primary text-light" style="font-size:15px">
      <span><a class="text-light" href="#">Id Nasabah : .............</a></span>
    </div>
    </div>
    
  </div>
  <div align="center">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Hapus Data Nasabah</button>
</div>
</div>
</div>