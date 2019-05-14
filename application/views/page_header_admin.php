<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GangBank</title>
  <link rel="icon" href="<?php echo base_url('assets/image/favicon.png'); ?>" sizes="16x10" type="image/icon type">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
  <div class="main" style="background:url(<?php echo base_url('assets/image/slide6.jpg')?>);">
    <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color:#0E0B2B; height: 70px" >
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="navbar-brand"  href="<?php echo base_url('Cadmin/homeAdminPage') ?>">
                  <img src="<?php echo base_url('assets/image/LOGO.png') ?>" alt="LogoGankBank" width="150px" style="margin-left:-40px; margin-top:-3px">
              </a>
          </li>
      </ul>
      <ul class="nav navbar-nav nav-flex-icons" style="margin-left:905px">
          <style>.ad{margin-top:10px}</style>
          <li class="ad nav-item mr-3" >
            <a class="nav-link" style="color:white" href="#">Contact Us</a>
          </li>
          <li class="ad nav-item mr-3" >
            <a class="nav-link" style="color:white" href="#">About</a>
          </li>
          <?php
          if (($this->session->userdata('username'))!=null){
                        echo "
                        <li class='ad nav-item mr-3' >
                        <a class='nav-link' style='color:white' href=".base_url('Cuser/logPage/').">Logout</a>
                        </li>
                        ";
                    }else{
                        echo "
                        ";
                        }
                        ?>
      </ul>
    </nav>