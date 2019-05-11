<link rel="stylesheet" href="<?php echo base_url('assets/css/SignUp.css')?>">
<div class="container">
         <div class="row mt-5">
            <div class="SignUp col-lg-4 mx-auto mt-5">
               <div class="card">
                     <div class="card-header bg-primary text-center">
                        <img src="<?php echo base_url('assets/image/LOGO.png') ?>" width="190px" height="35px"  alt="Logo">
                     </div>
                     <div class="card-body">
                        <form method="POST" class="form" role="form" autocomplete="off" action="<?php echo base_url('index.php/Cuser/tambahuser/'); ?>">
                           <label for="Username"style="color:white"><h6>Username</h6></label>
                           <input type="text"placeholder="Username" class="form-control" name="username" required>
                           <label for="Email"style="color:white"><h6>Email</h6></label>
                           <input type="email" placeholder="Email" class="form-control" name="email" required>
                           <label for="Password"style="color:white"><h6>Password</h6></label>
                           <input type="password"placeholder="Password" class="form-control" name="password" required>
                           <div class="cexbox">
                              <label for="checkbox" class="checkbox pull-left">
                                 <input type="checkbox"><span style="color:white">Remember me</span>
                              </label>
                           </div>
                           <div class="signup text-center">
                              <input type="submit" class="btn btn-primary" value="Sign Up">
                           </div>
                        </form>
                  </div>
                  <div class="card-footer bg-primary">
                  </div>
               </div>
            </div>
         </div>
     </div>
   </div>