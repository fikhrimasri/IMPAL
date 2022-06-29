<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
	<title>Grafik Produksi</title>
</head>
<style>
	h2{
		text-align: center;
		font-size: 50px;
	}
</style>

<body>
<div class="main"style="background:url(<?php echo base_url('assets/image/slide19.jpg')?>);">
	<nav class="navbar navbar-expand-lg  navbar-white" style="background-color:white">
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="navbar-brand"  href="<?php echo base_url('Cuser/homeUserPage') ?>">
                  <img src="<?php echo base_url('assets/image/favicon2.png') ?>" alt="LogoGankBank" width="150px">
              </a>
          </li>
      </ul>
    </nav>
</div>
	<h2>Produksi Gas</h2>
	<h2>
	<?php 
            echo date('M-Y');
            echo "<br/>";
            ?>
	</h2>
	<canvas id="chart_gas" width="1300" height="600"></canvas>
	<!-- <h2>Produksi Oil</h2>
	<canvas id="chart_oil" width="1300" height="600"></canvas> -->
	<!-- <h2>Produksi Gas Bulanan</h2>
	<canvas id="chart_gas2" width="1300" height="600"></canvas> -->
	<!-- <h2>Produksi Oil Bulanan</h2>
	<canvas id="chart_oil2" width="1300" height="600"></canvas>	 -->
	<script>
		var ctx1 = document.getElementById("chart_gas");
		var chart_gas = new Chart(ctx1, {
			type: 'bar',
			data: {
				labels: [<?php foreach ($label_gas as $label) { echo '"' . $label . '",';}?>],
				datasets: [{
				label: 'Produksi Gas',
				data: [<?php foreach ($data_gas as $data) { echo '"' . $data . '",';}?>],
				backgroundColor: 'green',
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
		var ctx2 = document.getElementById("chart_oil");
		var chart_gas = new Chart(ctx2, {
			type: 'bar',
			data: {
				labels: [<?php foreach ($label_oil as $label) { echo '"' . $label . '",';}?>],
				datasets: [{
				label: 'Produksi Oil',
				data: [<?php foreach ($data_oil as $data) { echo '"' . $data . '",';}?>],
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



		// var ctx3 = document.getElementById("chart_gas2");
		// var chart_gas = new Chart(ctx3, {
		// 	type: 'bar',
		// 	data: {
		// 		labels: [<?php foreach ($label_monthly_gas as $label) { echo '"' . $label . '",';}?>],
		// 		datasets: [{
		// 		label: 'Produksi Gas',
		// 		data: [<?php foreach ($data_monthly_gas as $data) { echo '"' . $data . '",';}?>],
		// 		backgroundColor: 'rgba(0, 86, 179, 1)',
		// 		borderWidth: 1
		// 		}]
		// 	},
		// 	options: {
		// 		responsive: false,
		// 		scales: {
		// 		xAxes: [{
		// 			ticks: {
		// 			maxRotation: 90,
		// 			minRotation: 80
		// 			}
		// 		}],
		// 		yAxes: [{
		// 			ticks: {
		// 			beginAtZero: true
		// 			}
		// 		}]
		// 		}
		// 	}
		// });
		// var ctx4 = document.getElementById("chart_oil2");
		// var chart_gas = new Chart(ctx4, {
		// 	type: 'bar',
		// 	data: {
		// 		labels: [<?php foreach ($label_monthly_oil as $label) { echo '"' . $label . '",';}?>],
		// 		datasets: [{
		// 		label: 'Produksi Oil',
		// 		data: [<?php foreach ($data_monthly_oil as $data) { echo '"' . $data . '",';}?>],
		// 		backgroundColor: 'rgba(179, 0, 42, 1)',
		// 		borderWidth: 1
		// 		}]
		// 	},
		// 	options: {
		// 		responsive: false,
		// 		scales: {
		// 		xAxes: [{
		// 			ticks: {
		// 			maxRotation: 90,
		// 			minRotation: 80
		// 			}
		// 		}],
		// 		yAxes: [{
		// 			ticks: {
		// 			beginAtZero: true
		// 			}
		// 		}]
		// 		}
		// 	}
		// });
</script>
</body>
</html>
