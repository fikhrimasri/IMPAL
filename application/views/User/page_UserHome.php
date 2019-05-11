<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>HOME</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <style>  
      .main{
        background:url(assets/image/slide6.jpg);
        background-repeat:no-repeat ;
        background-size: cover;
        background-position:0 70px;  
        height: 100vh;
      }
   </style>
</head>

<body>
  <div class="main">
    <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color:#0E0B2B">
      <ul class="navbar-nav">
          <li class="nav-item">
              <button type="button" onclick="openNav()" id="sidebarCollapse" class="btn btn-dark" style="margin-right:30px; border-style: solid; border-color: white;">
                  <i class="fas fa-align-left"></i>
                  <span><img src="<?php echo base_url('assets/image/wmenu.png') ?>" style="width:15px"></span>
              </button>
          </li>
      </ul>
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="navbar-brand"  href="<?php echo base_url('') ?>">
                  <img src="<?php echo base_url('assets/image/LOGO.png') ?>" alt="LogoGankBank" width="150px">
              </a>
          </li>
      </ul>
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
          <li class="nav-item mr-3" >
            <a class="nav-link text-white" href="#">Contact Us</a>
          </li>
          <li class="nav-item mr-3" >
            <a class="nav-link text-white" href="#">About</a>
          </li>
          <li class="nav-item mr-3" >
            <a class="nav-link text-white" href="<?php echo base_url('Cuser/logOut/') ?>">Logout</a>
          </li>
      </ul>
    </nav>
    <div id="mySidenav" class="sidenav">
      <div style="margin-top:-50px">
          <a class="dropdown-item" href="#" style="font-size: 15px ;"><span><img style=" margin-left: 15px" src="assets/image/user.png" width="15"></span><span style=" margin-left: 15px">Akun</span></a>
          <a class="dropdown-item" href="#" style="font-size: 15px ;"><span><img style=" margin-left: 15px" src="assets/image/berkas.png" width="15"></span><span style=" margin-left: 15px">History</span> </a>
          <a class="dropdown-item" href="#" style="font-size: 15px ;"><span><img style=" margin-left: 15px" src="assets/image/Transaction.png" width="15"></span><span style=" margin-left: 15px">Transaksi</span></a>
      </div>
    </div>
    <div class="container" align="center">
      <div class="row divide" style="margin-top:90px">
        <style>.menugambar{height: 250px; margin-bottom: -20px} .labelmenu{font-size: 30px; margin-bottom:-25px} .vv{width: 150px}</style>
        <div class="col-md-4">
          <div>
            <p class="labelmenu text-light">ACCOUNT</p>
            <img class="menugambar" src="<?php echo base_url('assets/image/m_akun.png') ?>" alt="">
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <button class="btn btn-primary vv">Ubah Password</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-primary vv">Cek Saldo</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <p class="labelmenu text-light">HISTORY</p>
            <img class="menugambar" src="<?php echo base_url('assets/image/m_history.png') ?>" alt="">
          </div>
          <div class="row">
            <div class="col-md-12">
              <button class="btn btn-primary" style="width:310px">Lihat History</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <p class="labelmenu text-light">TRANSFER</p>
            <img class="menugambar" src="<?php echo base_url('assets/image/m_transaksi.png') ?>" alt="">
          </div>
          <div class="row">
            <div class="col-md-6">
              <button class="btn btn-primary vv">Virtual Account</button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-primary vv">Transfer</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<style>
.row.divide [class*='col-']:not(:last-child):after {
  background: #e0e0e0;
  width: 2px;
  content: "";
  display:block;
  position: absolute;
  top:0;
  bottom: 0;
  right: 0;
  min-height: 70px;
}
</style>
 <footer class="page-footer font-small pt-4 fixed-bottom" style="background-color:#0E0B2B;">
    <div class="footer-copyright text-center py-2 text-white" style="background-color:#0E0B2B; margin-top:-40px; margin-bottom:-20px">
      <span>© 2019 Copyright : </span><span><a href="#"> gangbank.com</a></span>
    </div>
  </footer>
</body>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("sidebarCollapse").setAttribute("onclick", "closeNav()");
    }
    
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("sidebarCollapse").setAttribute("onclick", "openNav()");
    }
</script>
<style>
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;  
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #ffffff;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        margin-top: 72px;
        border-right: 1px solid #c2c2c2;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #000000;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: #b8b8b8;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }
</style>
</html>