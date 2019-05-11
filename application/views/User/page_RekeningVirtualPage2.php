<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Rekening Virtual</title>
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
                  <span><img src="assets/image/wmenu.png" style="width:15px"></span>
              </button>
          </li>
      </ul>
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="navbar-brand"  href="#">
                  <img src="assets/image/LOGO.png" alt="LogoGankBank" width="150px">
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
            <a class="nav-link text-white" href="#">Logout</a>
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
      <div class="HeadLabel">
        <img src="assets/image/LOGO.png" style="height:70px; margin-top:10px" alt="">
      </div>
      <div class="card" style="margin-top:10px; width:400px; height: 330px">
        <div class="card-header bg-primary text-light">
          Rekening Virtual
        </div>
        <div class="card-body" align="left">
          <div class="Form" >
            <form action="INI_SUCCESS">
              <div class="form-group">
                <label>No Merchant :</label>
                <input type="text" class="form-control" placeholder="Enter No Merchant">
              </div>
              <div class="form-group">
                <label>Jumlah Transfer :</label>
                <input type="number" class="form-control" placeholder="Enter Jumlah Transfer">
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Transfer</button>
            </div>
          </div>
        </div>
        <div class="card-footer bg-primary text-light" style="font-size:15px">
          
        </div>
      </div>
    </div>
  </div>
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