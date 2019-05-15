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
   <style>  
      .main{
        background-repeat:no-repeat;
        background-size: cover;
        background-position:20 -120px;  
        height: 100vh;
      }
   </style>
</head>

<body>
  <div class="main" style="background:url(<?php echo base_url('assets/image/slide6.jpg')?>);">
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
              <a class="navbar-brand"  href="<?php echo base_url('Cuser/homeUserPage') ?>">
                  <img src="<?php echo base_url('assets/image/LOGO.png') ?>" alt="LogoGankBank" width="150px">
              </a>
          </li>
      </ul>
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
          <li class="nav-item mr-3" >
            <a class="nav-link text-white" href="<?php echo base_url('Cuser/logOut/') ?>">Logout</a>
          </li>
          <?php
          if (($this->session->userdata('email'))!=null){
                        echo "
                        <li class='nav-item mr-3' >
                        <a class='nav-link text-white' href='#' data-toggle='modal' data-target='#myModals'>Logout</a>
                        </li>
                        <div class='modal' align='center' id='myModals' style='margin-top:170px'>
                          <div class='modal-dialog'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <div  class='modal-title' align='center'>
                                    <span><img src='assets/image/alert.png' style='height: 40px' alt=''></span><span> Perhatian</span>
                                </div>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                              </div>
                              <div class='modal-body'>
                                Apakah anda ingin melanjutkan?
                              </div>
                              <div class='modal-footer'>
                                <button type='submit' class='btn btn-danger'><a class='text-light' href=".base_url('Cuser/logPage/').">Yes</a></button>
                                <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        ";
                    }else{
                        echo "
                        ";
                        }
                        ?>
          
      </ul>
    </nav>
    <div id="mySidenav" class="sidenav">
      <div style="margin-top:-50px">
          <a class="dropdown-item" href="<?php echo base_url();?>Cuser/gantipass" style="font-size: 15px ;"><span><img style=" margin-left: 15px" src="<?php echo base_url('assets/image/user.png') ?>" width="15"></span><span style=" margin-left: 15px"><?php echo $this->session->userdata("username"); ?></span></a>
          <a class="dropdown-item" href="<?php echo base_url();?>Cuser/history_user" style="font-size: 15px ;"><span><img style=" margin-left: 15px" src="<?php echo base_url('assets/image/berkas.png') ?>" width="15"></span><span style=" margin-left: 15px">History</span> </a>
          <a class="dropdown-item" href="<?php echo base_url();?>Cuser/test" style="font-size: 15px ;"><span><img style=" margin-left: 15px" src="<?php echo base_url('assets/image/Transaction.png') ?>" width="15"></span><span style=" margin-left: 15px">Transaksi</span></a>
      </div>
    </div>