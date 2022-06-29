<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Login</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
</head>
<body>
   <div class="pembungkus"style="background:url(<?php echo base_url('assets/image/slide19.jpg')?>);">
     <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color: white">
        <a class="navbar-brand"  href="<?php echo base_url('') ?>">
            <img src="<?php echo base_url('assets/image/favicon2.png') ?>" alt="LogoGankBank" width="300px">
        </a>
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
           <?php
          if (($this->session->userdata('email'))!=null){
                        echo "
                        <li class='nav-item mr-3' >
                        <a class='nav-link text-white' href=".base_url('Cuser/logPage/').">Logout</a>
                        </li>
                        ";
                    }else{
                        echo "
                        ";
                        }
                        ?>
        </ul>
        <a class="navbar-brand" href="<?php echo base_url('') ?>">
            <img src="<?php echo base_url('assets/image/favicon4.png') ?>" alt="LogoGankBank" style="text-align:right;" width="250px">
        </a>
     </nav>
     <div class="container">  
         <div class="Isi row mt-5 mb-5">
            <div class="User col-lg-4">
               <div align="center">
                  <label for="Buat_User" ><h3 id="LabelUser">Login Sebagai User</h3></label>
               </div>
               <div class="card">
                  <div class="card-header bg-dark text-center">
                     <!-- <img src="<?php echo base_url('assets/image/LOGO.png') ?>" alt="logoankBank" width="150px"> -->
                  </div>
                  <div class="card-body">
                     <form method="POST" class="form" role="form" autocomplete="off" action="<?php echo base_url('Cuser/signIn/'); ?>">
                        <label for="Username" style="color:black"><h6>Username</h6></label>
                        <input name ="username" type="text" placeholder="Username..." class="form-control mb-2" required>
                        <label for="Password"style="color:black"><h6>Password</h6></label>
                        <input name="password" type="password" placeholder="Password..." class="form-control mb-2" required>
                        <br>
                        <div class="cekbox mt-2">
                              <label class="checkbox pull-left" for="checkbox">
                                    <input type="checkbox"><span style="color:black"> remember me</span>
                                 </label>
                        </div>
                        <div class="text-center">
                              <input class="btn btn-dark" type="submit" value="login" style="border-radius:10px;">
                        </div>
                       
                        
                     </form>
                     
                  </div>
                  <div class="card-footer bg-dark text-center text-white">
                        <span>Belum punya akun. <a class ="text-white"href="<?php echo base_url('Cuser/sigPage') ?>">Klik Disini</a></span>
                     </div>
               </div>
            </div>
            <div class="Admin col-lg-4 ml-auto">
               <div align="center">
                  <label for="loginAdmin" ><h3 id="LabelAdmin">Login Sebagai Admin</h3></label>
               </div>
               <div class="card">
                  
                  <div class="card-header bg-dark text-center">
                     <!-- <img src="<?php echo base_url('assets/image/LOGO.png') ?>" width="150px" alt=""> -->
                  </div>
                  <div class="card-body">
                     <form method="POST" class="form" role="form" autocomplete="off" action="<?php echo base_url('Cadmin/signIn/'); ?>">
                           <label for="Username"style="color:black"><h6>Username</h6></label>
                           <input name ="username" type="text" class="form-control mb-2" placeholder="Username..." required>
                           <label for="Password"style="color:black"><h6>Password</h6></label>
                           <input name="password" type="password" class="form-control mb-2" placeholder="Password..." required>
                           <br>
                           <div class="cekbox mt-2">
                              <label for="checkbox" class="checkbox pull-left">
                                    <input type="checkbox">
                                    <span style="color:black"> remember me</span>
                              </label>
                              
                           </div>
                           <div class="text-center">
                              <input type="submit" class="btn btn-dark" value="Login"style="border-radius:10px">
                           </div>
                     </form>
                  </div>
                  <div class="card-footer bg-dark" style="height:50px">
                  </div>
               </div>
         </div>
     </div>
   </div>

  <footer class="page-footer font-small fixed-bottom" style="background-color:#0E0B2B;">
      <div class="footer-copyright text-center py-2 text-white" style="background-color:#0E0B2B;">
        <span>© 2019 Copyright : </span><span><a href="#"> PERTAMINA.com</a></span>
      </div>
    </footer>
   


</body>
<style>
   .carousel-inner img {
      width: 100%;
      height: 500px;
    }
   .carousel-caption .login{
     background-color: orange;
     color: white;
     border:1px solid white;
   }
   .carousel-caption .Signup{
     background-color: #6c757db5;
     border: 1px solid white;
     color: white;
   }
   .Isi{
      height: 100vh;
      
   }
   .pembungkus{
      background:url(assets/image/slide6.jpg);
      background-repeat:no-repeat ;
      background-size: cover;
      background-position:0 70px;
      
      height: 100%;
   }
   #LabelUser{
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      font-weight: 600;
      color: blue;
      font-size: 28px;
      text-align: center;
      
   }
   #LabelAdmin{
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      font-weight: 600;
      color:blue;
      font-size: 28px;
      text-align: center;
      
   }
   .User .card{
      background-color: transparent;
   }
   .Admin .card{
      background-color: transparent;
   }
   
</style>
</html>