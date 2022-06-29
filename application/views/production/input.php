<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Produksi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>  
      .main{
        background-repeat:no-repeat ;
        background-size: cover;
        background-position:0 70px;  
        height: 100vh;
      }
   </style>
</head>
<body>
    <div class="main" style="background:url(<?php echo base_url('assets/image/slide19.jpg')?>);">
        <nav class="navbar navbar-expand-lg  navbar-white" style="background-color:white">
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
                <a class="navbar-brand"  href="<?php echo base_url('Cuser/homeUserPage') ?>">
                    <img src="<?php echo base_url('assets/image/favicon2.png') ?>" alt="LogoGankBank" width="150px">
                </a>
            </li>
        </ul>
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item mr-3" >
                <a class="nav-link text-black" href="<?php echo base_url('Cuser/logOut/') ?>">Logout</a>
            </li>
        </ul>
        </nav>
        <div class="container">
            <h1>Input Produksi</h1>
            <form action="proses_input" method="POST">
                <div class="form-group">
                    <label for="tipe">Tipe Produksi: </label>
                    <select name="tipe" class="form-control">
                        <option value="oil">Oil</option>
                        <option value="gas">Gas</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tipe">Tanggal: </label>
                    <input type="date" class="form-control" name="tanggal" required />
                </div>
                <div class="form-group">
                    <label for="tipe">Nilai: </label>
                    <input class="form-control" type="number" name="nilai" required />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
        <!-- <input type="text" name="" id=""> -->
</body>
</html>