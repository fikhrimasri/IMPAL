<div class="container" align="center">
        <div class="HeadLabel">
          <img src="<?php echo base_url('assets/image/LOGO.png'); ?>" style="height:70px; margin-top:10px" alt="">
        </div>
        <h1>GANKBANK</h1>
        <div class="card" style="margin-top:10px; width:400px; height: 300px">
          <div class="card-header bg-primary text-light">
            Update Data Nasabah
          </div>
          <div class="card-body" align="left">
            <div class="Form" >
              <form action="INI_SUCCESS">
              <div class="form-group">
                <select style="margin-bottom:5px" type="password" class="form-control" id="pwd">
                    <option value="volvo">Pilih Nasabah</option>
                    <option value="saab">Rifqi</option>
                    <option value="opel">Taw</option>
                    <option value="audi">Audi</option>
                </select>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="pwd" placeholder="Ubah Nama Nasabah" style="margin-bottom:5px">
                <input type="password" class="form-control" id="pwd" placeholder="Ubah Password">
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
                                <button type="submit" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#myModal1">Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</>
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
            </div>
            <div class="card-footer bg-primary text-light" style="font-size:15px">
            </div>
          </div>
          
        </div>
        <div align="center">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Update Nasabah</button>
      </div>
      </div>
    </div>