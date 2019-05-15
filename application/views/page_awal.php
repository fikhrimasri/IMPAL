<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>GangBank</title>
   <link rel="icon" href="<?php echo base_url('assets/image/favicon.png'); ?>" sizes="16x10" type="image/icon type">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
   <div class="main">

 
     <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color:#0E0B2B">
        <a class="navbar-brand"  href="<?php echo base_url('') ?>">
            <img src="<?php echo base_url('assets/image/LOGO.png') ?>" alt="LogoGankBank" width="150px">
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

     </nav>

     <div id="demo"  class="carousel slide" data-ride="carousel"> 
         <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
         </ul>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img  width="1100" height="500" src="<?php echo base_url('assets/image/slide1.png') ?>" alt="Slide1">
               <div class="carousel-caption">
                  <a href="<?php echo base_url('Cuser/logPage') ?>" class="login btn btn-default mr-5" style="margin-top:-500px">Login</a> 
                  <a href="<?php echo base_url('Cuser/sigPage') ?>" class="Signup btn btn-default"style="margin-top:-500px">Sign Up</a> 
                  <div class="col-lg-5 card-text bg-white mx-auto text-left" style="border-radius:5px;border-left:10px solid blue;opacity: 0.8;">
                     <h3 style="margin-top:-230px;color:blue;">GankBank</h3>
                     <p style="color:blue;width:450px">Transaksi aman dan terpercaya hanya di GankBank</p>
                  </div>                
               </div>
            </div>
            <div class="carousel-item">
               <img width="1100" height="500" src="<?php echo base_url('assets/image/slide11.png') ?>" alt="Slide2">
               <div class="carousel-caption">
                  <a href="<?php echo base_url('Cuser/logPage') ?>" class="login btn btn-default mr-5"style="margin-top:-500px">Login</a> 
                  <a href="<?php echo base_url('Cuser/sigPage') ?>" class="Signup btn btn-default"style="margin-top:-500px">Sign Up</a> 
                  <div class="col-lg-5 card-text bg-white mx-auto text-left" style="border-radius:5px;border-left:10px solid blue;opacity:0.8">
                     <h3 style="margin-top:-230px;color:blue;">GankBank</h3>
                     <p style="color:blue;">Banyak Untungnya Segera Bergabung dengan mendaftarkan diri anda.</p>
                  </div>
                  
               </div>
            </div>
            <div class="carousel-item">
               <img width="1100" height="500" src="<?php echo base_url('assets/image/slide8.jpg') ?>" alt="slide3">
               <div class="carousel-caption">
                  <a href="<?php echo base_url('Cuser/logPage') ?>" class="login btn btn-default mr-5"style="margin-top:-500px">Login</a> 
                  <a href="<?php echo base_url('Cuser/sigPage') ?>" class="Signup btn btn-default"style="margin-top:-500px">Sign Up</a> 
                  <div class="col-lg-5 card-text text-left bg-white mx-auto" style="border-radius:5px;border-left:10px solid blue;opacity:0.8">
                     <h3 style="margin-top:-230px;color:blue">GankBank</h3>
                     <p style="color:blue">Banyak Hadiah menanti anda tiap tahunnya</p>
                  </div>
                                 </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#demo"  data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
         </a>
         <a class="carousel-control-next" href="#demo"  data-slide="next">
            <span class="carousel-control-next-icon"></span>
         </a>
     </div>
   </div>
   <footer class="page-footer font-small fixed-bottom" style="background-color:#0E0B2B;">
      <div class="footer-copyright text-center py-2 text-white" style="background-color:#0E0B2B;">
        <span>© 2019 Copyright : </span><span><a href="#"> gangbank.com</a></span>
      </div>
    </footer>
</body>
<style>  
.main{ 
   height: 100%;
}
.carousel-inner img {
   width: 100%;
   height: 100%;
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
  
</style>
<div>
</div>
</html>