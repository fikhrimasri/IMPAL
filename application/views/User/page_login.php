<link rel="stylesheet" href="<?php echo base_url('assets/css/login.css')?>">
<div class="container">  
         <div class="Isi row mt-5 mb-5">
            <div class="User col-lg-4">
                  <label for="Buat_User" ><h3 id="LabelUser">Login Sebagai User</h3></label>
               <div class="card">
                  <div class="card-header bg-primary text-center">
                     <img src="<?php echo base_url('assets/image/LOGO.png') ?>" alt="logoankBank" width="150px" height="35px">
                  </div>
                  <div class="card-body">
                     <form action="">
                        <label for="Username" style="color:white"><h6>Username</h6></label>
                        <input type="text" placeholder="Username..." class="form-control mb-2"required>
                        <label for="Password"style="color:white"><h6>Password</h6></label>
                        <input type="password" placeholder="Password..." class="form-control mb-2"required>
                        <a href="#"><h6 style="color:white">Lupa Password?</h6></a>
                        <div class="cekbox mt-2">
                              <label class="checkbox pull-left" for="checkbox">
                                    <input type="checkbox"><span style="color:white">Remember me</span>
                                 </label>
                        </div>
                        <div class="text-center">
                              <input class="btn btn-primary" type="submit" value="login" style="border-radius:10px;">
                        </div>
                       
                        
                     </form>
                     
                  </div>
                  <div class="card-footer bg-primary text-center text-white">
                        <span>Belum punya akun. <a class ="text-white"href="#">Klik Disini</a></span>
                     </div>
               </div>
            </div>
            <div class="Admin col-lg-4 ml-auto">
                  <label for="loginAdmin" ><h3 id="LabelAdmin">Login Sebagai Admin</h3></label>
               <div class="card">
                  
                  <div class="card-header bg-primary text-center">
                     <img src="<?php echo base_url('assets/image/LOGO.png') ?>" width="150px" height="35px" alt="">
                  </div>
                     <div class="card-body">
                        <form action="">
                              <label for="Username"style="color:white"><h6>Username</h6></label>
                              <input type="text" class="form-control mb-2"required>
                              <label for="Password"style="color:white"><h6>Password</h6></label>
                              <input type="password" class="form-control mb-2"required>
                              <a href="#" style="color:white"><h6>Lupa Password?</h6></a>
                              <div class="cekbox mt-2">
                                 <label for="checkbox" class="checkbox pull-left">
                                       <input type="checkbox">
                                       <span style="color:white">Remember me</span>
                                 </label>
                                 
                              </div>
                              <div class="text-center">
                                 <input type="submit" class="btn btn-primary" value="Login"style="border-radius:10px">
                              </div>
                        </form>
                     </div>
                     <div class="card-footer bg-primary text-center text-white">
                        <span>Belum Punya Akun. <a href="#" class="text-white">Klik Disini</a></span>
                     </div>
                  

               </div>

            </div>
         </div>
     </div>
   </div>