<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.8/font-awesome-animation.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#carouselExampleInterval" data-slide-to="1" class="active"></li>
                <li data-target="#carouselExampleInterval" data-slide-to="2" class="active"></li>
                <li data-target="#carouselExampleInterval" data-slide-to="3"class="active"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="2000">
                <br><br><br>
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
                                            <th><?php echo $data1["oil_today"] ?></th>
                                            <th style="color : red"><B>BOPD</th>
                                            <td><B>
                                            <?php
                                                if ($data1["gas_today"]>0 && $data1["oil_today"]>0 && $data1["gas_yesterday"]>0 && $data1["oil_yesterday"]>0) {
                                                    if ($data1["oil_today"]>$data1["oil_yesterday"]) {
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
                                            <th><?php echo $data1["gas_today"] ?></th>
                                            <th style="color : green"><B>MMSCFD</th>
                                            <td>
                                            <?php
                                                if ($data1["gas_today"]>0 && $data1["oil_today"]>0 && $data1["gas_yesterday"]>0 && $data1["oil_yesterday"]>0) {
                                                    if ($data1["gas_today"]>$data1["gas_yesterday"]) {
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
            <div class="carousel-item" data-interval="2000">
                    <h2>Produksi Gas</h2>
                    <canvas id="chart_gas" width="1300" height="600"></canvas>
                    <script>
                        var ctx1 = document.getElementById("chart_gas");
                        var chart_gas = new Chart(ctx1, {
                            type: 'bar',
                            data: {
                                labels: [<?php foreach ($data2["label_gas"] as $data2["label"]) { echo '"' . $data2["label"] . '",';}?>],
                                datasets: [{
                                label: 'Produksi Gas',
                                data: [<?php foreach ($data2["data_gas"] as $data2["data"]) { echo '"' . $data2["data"] . '",';}?>],
                                backgroundColor: 'rgba(0, 86, 179, 1)',
                                borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: false,
                                scales: {
                                xAxes: [{
                                    ticks: {
                                    maxRotation: 90,
                                    minRotation: 80
                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                    beginAtZero: true
                                    }
                                }]
                                }
                            }
                        });
                    </script>
            </div>
            <div class="carousel-item" data-interval="2000">
                <h2>Produksi Oil</h2>
                <canvas id="chart_oil" width="1300" height="600"></canvas>
                <script>
                    var ctx2 = document.getElementById("chart_oil");
                    var chart_gas = new Chart(ctx2, {
                        type: 'bar',
                        data: {
                            labels: [<?php foreach ($data3["label_oil"] as $data3["label"]) { echo '"' . $data3["label"] . '",';}?>],
                            datasets: [{
                            label: 'Produksi Oil',
                            data: [<?php foreach ($data3["data_oil"] as $data3["data"]) { echo '"' . $data3["data"] . '",';}?>],
                            backgroundColor: 'rgba(179, 0, 42, 1)',
                            borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: false,
                            scales: {
                            xAxes: [{
                                ticks: {
                                maxRotation: 90,
                                minRotation: 80
                                }
                            }],
                            yAxes: [{
                                ticks: {
                                beginAtZero: true
                                }
                            }]
                            }
                        }
                    });
                </script>
            </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</body>
<style>
.main{ 
   height: 100%;
}
.carousel-inner img {
   width: 100%;
   height: 100%;
   }
</style>
</html>