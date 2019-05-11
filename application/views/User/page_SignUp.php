<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Sign Up</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
   <div class="pembungkus">

  
     <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color:#0E0B2B">
        <a class="navbar-brand"  href="<?php echo base_url('') ?>">
            <img src="<?php echo base_url('assets/image/LOGO.png') ?>" alt="LogoGankBank" width="190px" height="45px">
        </a>
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
           <li class="nav-item mr-3">
              <a class="nav-link text-white" href="#">Contact Us</a>
           </li>
           <li class="nav-item mr-3">
              <a class="nav-link text-white" href="#">About</a>
           </li>
           <li class="nav-item mr-3">
              <a class="nav-link text-white" href="#">Logout</a>
           </li>
        </ul>

     </nav>
     <div class="container">
         <div class="row mt-5">
            <div class="SignUp col-lg-4 mx-auto mt-5">
               <div class="card">
                     <div class="card-header bg-primary text-center">
                        <img src="<?php echo base_url('assets/image/LOGO.png') ?>" width="190px" height="35px"  alt="Logo">
                     </div>
                     <div class="card-body">
                        <form method="POST" class="form" role="form" autocomplete="off" action="<?php echo base_url('Cuser/addUser/'); ?>">
                           <label for="Username"style="color:white"><h6>Username</h6></label>
                           <input name="username" type="text"placeholder="Username" class="form-control"required>
                           <label for="Email"style="color:white"><h6>Email</h6></label>
                           <input name="email" type="email" placeholder="Email" class="form-control"required>
                           <label for="Password"style="color:white"><h6>Password</h6></label>
                           <input name="password" type="password"placeholder="Password" class="form-control"required>
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
   <footer class="page-footer font-small" style="background-color:#0E0B2B;">
    <div class="footer-copyright text-center py-2 text-white" style="background-color:#0E0B2B;">
      <span>© 2019 Copyright : </span><span><a href="#"> gangbank.com</a></span>
    </div>
  </footer>

   


</body>
<style>
  
.pembungkus{
  background:url(image/slide6.jpg);
  background-repeat:no-repeat ;
  background-size: cover;
  background-position:0 70px;
  
  height: 100vh;
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
.SignUp .card{
  background-color: transparent;
}

</style>
</html>