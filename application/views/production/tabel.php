<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daily Production</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
    }
    h3{
        font-size: 50px;
    }
    tr{
        font-size: 45px;
    }
    /* th{
        font-size: 50px;
    } */
    td{
        font-family: Courier New;
    }
</style>
<body>
<br><br><br>
    <!-- <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span> -->
    <div class="row content-center">
        <div class="col-4">
            <nav class="navbar navbar-expand-lg  navbar-white" style="background-color:white">
                <ul class="navbar-nav">
                    <li class="nav-item mr">
                        <a class="navbar-brand"  href="<?php echo base_url('Cuser/homeUserPage') ?>">
                            <img src="<?php echo base_url('assets/image/skk1.jpg') ?>" alt="LogoGankBank" width="255px">
                        </a>
                    </li>
                </ul>
        </div>
        <div class="col-4">
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                    <li class="nav-item mr" >
                        <h1 align="center"><B>PT. PERTAMINA EP ASSET 4</h1>
                        <h1 align="center"><B>POLENG FIELD</h1>
                    </li>
                </ul>
        </div>
        <div class="col-4"style="margin-left: 200px">
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                    <li class="nav-item mr" >
                        <img src="<?php echo base_url('assets/image/ep2.jpg') ?>" alt="LogoGankBank" width="200px">
                    </li>
                </ul>
        </div>
            </nav>
        
    </div>
            <br><br><br>
            <p align="center" width="200px"><B>Daily Production</p>
            <br><br><br><br>

            <div class="container">
                <div class="row content-center">
                    <div class="col-6" style="margin-right: 65px">
                        <h3><B>Today Production</h3>
                        <br><br><br>
                        <table class="table table-borderless" width="200px">
                            <tbody>
                            <tr>
                                <th><B>OIL</th>    
                                <td><?php echo $oil_today ?></td>
                                <th><B>BOPD</th>
                                <td>
                                <?php
                                    if ($gas_today>0 && $oil_today>0 && $gas_yesterday>0 && $oil_yesterday>0) {
                                        if ($oil_today>$oil_yesterday) {
                                            ?>
                                            <i class="fa fa-arrow-up fa-3x" style="color:green" aria-hidden="true"></i>
                                            <?php
                                        }
                                        else {
                                        ?>
                                            <i class="fa fa-arrow-down fa-3x" style="color:red" aria-hidden="true"></i>  
                                        <?php
                                        } 
                                    }
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <th><B>GAS</th>
                                <td><?php echo $gas_today ?></td>
                                <th><B>MMSCFD</th>
                                <td>
                                <?php
                                    if ($gas_today>0 && $oil_today>0 && $gas_yesterday>0 && $oil_yesterday>0) {
                                        if ($gas_today>$gas_yesterday) {
                                            ?>
                                            <i class="fa fa-arrow-up fa-3x" style="color:green" aria-hidden="true"></i>
                                            <?php
                                        }
                                        else {
                                        ?>
                                            <i class="fa fa-arrow-down fa-3x" style="color:red" aria-hidden="true"></i>  
                                        <?php
                                        }
                                    }
                                ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="col-5"> -->
                        <h3><B>Yesterday Production</h3>
                        <br><br><br>
                    <div class="col-6">
                        <table class="table table-borderless"> 
                            <tbody>
                                <tr>
                                    <th><B>OIL</th>
                                    <td><?php echo $oil_yesterday ?></td>
                                    <th><B>BOPD</th>
                                </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <table class="table table-borderless"> 
                            <tbody>
                                <tr>
                                    <th><B>GAS</th>
                                    <td><?php echo $gas_yesterday ?></td>
                                    <th><B>MMSCFD</th>
                                
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- <h3>Today Production</h3>
            <br>
            <table class="table table-borderless" width="200px">
                <tbody>
                <tr>
                    <th>OIL</th>    
                    <td><?php echo $oil_today ?></td>
                    <th>BOPD</th>
                    <td>
                    <?php
                        if ($gas_today>0 && $oil_today>0 && $gas_yesterday>0 && $oil_yesterday>0) {
                            if ($oil_today>$oil_yesterday) {
                                ?>
                                <i class="fa fa-arrow-up fa-3x" style="color:green" aria-hidden="true"></i>
                                <?php
                            }
                            else {
                            ?>
                                <i class="fa fa-arrow-down fa-3x" style="color:red" aria-hidden="true"></i>  
                            <?php
                            } 
                        }
                    ?>
                    </td>
                </tr>
                <tr>
                    <th>GAS</th>
                    <td><?php echo $gas_today ?></td>
                    <th>MMSCFD</th>
                    <td>
                    <?php
                        if ($gas_today>0 && $oil_today>0 && $gas_yesterday>0 && $oil_yesterday>0) {
                            if ($gas_today>$gas_yesterday) {
                                ?>
                                <i class="fa fa-arrow-up fa-3x" style="color:green" aria-hidden="true"></i>
                                <?php
                            }
                            else {
                            ?>
                                <i class="fa fa-arrow-down fa-3x" style="color:red" aria-hidden="true"></i>  
                            <?php
                            }
                        }
                    ?>
                    </td>
                </tr>
                </tbody>
            </table>
            <h3>Yesterday Production</h3>
            <br>
            <table class="table table-borderless"> 
                <tbody>
                <tr>
                    <th>OIL</th>
                    <td><?php echo $oil_yesterday ?></td>
                    <th>BOPD</th>
                </tr>
                <tr>
                    <th>GAS</th>
                    <td><?php echo $gas_yesterday ?></td>
                    <th>MMSCFD</th>
                
                </tr>
                </tbody>
            </table> -->

    </div>
    <!-- <input type="text" name="" id=""> --></body>
</html>