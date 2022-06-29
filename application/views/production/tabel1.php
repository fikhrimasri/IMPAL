<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daily Production</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.8/font-awesome-animation.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
    p {
   font-size: 75px;
    }
    h1 {
        font-size: 50px;
        text-align: center;
    }
    h2{
        font-size: 40px;
    }
    h3{
        font-size: 50px;
        text-align: center;
    }
    tr{
        font-size: 80px;
        
    }
    th{
        font-size: 100px;
    }
    td{
        /* font-family: Courier New; */
        font-size: 80px;
        
    }
</style>
<body>
<br><br><br>
    <!-- <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span> -->
    <div class="row content-center">
        <div class="col-3">
            <nav class="navbar navbar-expand-lg  navbar-white" style="background-color:white">
                <ul class="navbar-nav">
                    <li class="nav-item mr">
                        <a class="navbar-brand"  href="<?php echo base_url('Cuser/homeUserPage') ?>">
                            <img src="<?php echo base_url('assets/image/skk1.jpg') ?>" alt="LogoGankBank" width="255px">
                        </a>
                    </li>
                </ul>
        </div>
        <div class="col-6">
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                    <li class="nav-item mr" >
                        <h1 align="center"><B>PT. PERTAMINA EP</h1>
                        <h2 align="center"><B>ASSET 4 POLENG FIELD</h2>
                    </li>
                </ul>
        </div>
        <div class="col-3"style="margin-left: 100px">
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                    <li class="nav-item mr" >
                        <img src="<?php echo base_url('assets/image/ep2.jpg') ?>" alt="LogoGankBank" width="200px">
                    </li>
                </ul>
        </div>
            </nav>
        
    </div>
            
            <p align="center" width="200px"><B>DAILY PRODUCTION</p>

            <h1>
            <?php 
            echo date('l, d-m-Y');
            echo "<br/>";
            ?>
            
            </h1>
            <div class="container">
                <div class="row content-center">
                    <div class="col-12" style="margin-center: 65px">
                        <h3><B>TODAY PRODUCTION</h3>
                        <br>
                        <table class="table table-borderless" width="300px">
                            <tbody>
                            <tr>
                                <th style="color : red"><B>OIL</th>    
                                <th><?php echo isset($oil_today) ?></th>
                                <th style="color : red"><B>BOPD</th>
                                <td><B>
                                <?php
                                    if (isset($gas_today)>0 && isset($oil_today)>0 && isset($gas_yesterday)>0 && isset($oil_yesterday)>0) {
                                        if (isset($oil_today)>isset($oil_yesterday)) {
                                            ?>
                                            <i class="fa fa-arrow-up fa-3x faa-flash animated" style="color:green" aria-hidden="true"></i>
                                            <?php
                                        }
                                        else {
                                        ?>
                                            <i class=" fa fa-arrow-down fa-3x faa-flash animated" style="color:red" aria-hidden="true"></i>  
                                        <?php
                                        } 
                                    }
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <th style="color : green"><B>GAS</th>
                                <th><?php echo isset($gas_today) ?></th>
                                <th style="color : green"><B>MMSCFD</th>
                                <td>
                                <?php
                                    if (isset($gas_today)>0 && isset($oil_today)>0 && isset($gas_yesterday)>0 && isset($oil_yesterday)>0) {
                                        if (isset($gas_today)>isset($gas_yesterday)) {
                                            ?>
                                            <i class="fa fa-arrow-up fa-3x faa-flash animated" style="color:green" aria-hidden="true"></i>
                                            <?php
                                        }
                                        else {
                                        ?>
                                            <i class="fa fa-arrow-down fa-3x faa-flash animated" style="color:red" aria-hidden="true"></i>  
                                        <?php
                                        }
                                    }
                                ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>