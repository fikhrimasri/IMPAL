<link rel="stylesheet" href="<?php echo base_url('assets/css/Home.css')?>">
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
                  <a href="<?php echo base_url('index.php/Cuser/logPage') ?>" class="login btn btn-default mr-5 mb-3">Login</a> 
                  <a href="<?php echo base_url('index.php/Cuser/sigPage') ?>" class="Signup btn btn-default mb-3">Sign Up</a>                 
                  <h3>GankBank</h3>
                  <p>Transaksi aman dan terpercaya hanya di GankBank</p>
               </div>
            </div>
            <div class="carousel-item">
               <img width="1100" height="500" src="<?php echo base_url('assets/image/slide2.jpg') ?>" alt="Slide2">
               <div class="carousel-caption">
                  <a href="<?php echo base_url('index.php/Cuser/logPage') ?>" class="login btn btn-default mr-5 mb-3">Login</a> 
                  <a href="<?php echo base_url('index.php/Cuser/sigPage') ?>" class="Signup btn btn-default mb-3">Sign Up</a> 
                  <h3>GankBank</h3>
                  <p>Banyak Untungnya Segera Bergabung dengan mendaftarkan diri anda.</p>
               </div>
            </div>
            <div class="carousel-item">
               <img width="1100" height="500" src="<?php echo base_url('assets/image/slide8.jpg') ?>" alt="slide3">
               <div class="carousel-caption">
                  <a href="<?php echo base_url('index.php/Cuser/logPage') ?>" class="login btn btn-default mr-5 mb-3">Login</a> 
                  <a href="<?php echo base_url('index.php/Cuser/sigPage') ?>" class="Signup btn btn-default mb-3">Sign Up</a> 
                  <h3>GankBank</h3>
                  <p>Banyak Hadiah menanti anda tiap tahunnya</p>
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