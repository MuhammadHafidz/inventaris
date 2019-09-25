<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('head');?>
</head>

<body class="animsition">
	<div class="page-wrapper">


		<!-- MENU SIDEBAR-->
		<aside class="menu-sidebar d-none d-lg-block">
			<div class="logo">
				<a href="#">
					<img src="<?php echo base_url();?>utils/images/icon/logo.png" alt="Cool Admin" />
				</a>
			</div>
			<?php $this->load->view('pimpinan/menu')?>
		</aside>
		<!-- END MENU SIDEBAR-->

		<!-- PAGE CONTAINER-->
		<div class="page-container">
			<!-- HEADER DESKTOP-->
			<?php $this->load->view('karyawan/header') ?>

			<!-- MAIN CONTENT-->
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="overview-wrap">
									<h2 class="title-1">overview</h2>

								</div>
							</div>
						</div>
						<div class="row m-t-25">
							<div class="col-lg-6">
								<div class="au-card m-b-30">
									<div class="au-card-inner">
										<h3 class="title-2 m-b-40">Peminjaman</h3>
										<canvas id="my-chart"></canvas>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="au-card m-b-30">
									<div class="au-card-inner">
										<h3 class="title-2 m-b-40">Inventaris</h3>
										<canvas id="Chart2"></canvas>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="au-card m-b-30">
									<div class="au-card-inner">
										<h3 class="title-2 m-b-40">Kondisi Inventaris</h3>
										<canvas id="Chart3"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!-- END MAIN CONTENT-->
						<!-- END PAGE CONTAINER-->
					</div>

				</div>


				<?php $this->load->view('end-js');?>
				<!-- Jquery JS-->
				<script>
					var ctx = document.getElementById('my-chart').getContext('2d');
					ctx.height = 150;
					var myChart = new Chart(ctx, {
						type: 'line',
						defaultFontFamily: "Poppins",
						data: {
							labels: [<?php 
							for($i = date('d') - 10 ; $i<=date('d')+10 && $i<=31 ; $i++ ){
								echo $i ." , ";
							}
								// foreach ($c_pruang as $key) {
								// 	echo $key->day ." , ";
								// }
								?>],
							datasets: [
								{
								label: 'Ruang',
								data: [<?php 
								for ($i=date('d') - 10; $i <=date('d') + 10 && $i<=31; $i++) { 
									$data = 0;
									foreach ($c_pruang as $key) {
										if ($key->day == $i) {
											$data = $key->cnt;
										}
									}
									echo $data ." ,";
								}
								
								?>],backgroundColor: 'transparent',
								borderColor: 'rgba(220,53,69,0.75)',
								borderWidth: 3,
								pointStyle: 'circle',
								pointRadius: 5,
								pointBorderColor: 'transparent',
								pointBackgroundColor: 'rgba(220,53,69,0.75)',
							},
							{
								label: 'Barang',
								data: [<?php 
								for ($i=date('d') - 10; $i <=date('d') + 10 && $i<=31; $i++) { 
									$data = 0;
									foreach ($c_pbarang as $key) {
										if ($key->day == $i) {
											$data = $key->count;
										}
									}
									echo $data ." ,";
								}
								
								?>],backgroundColor: 'transparent',
								borderColor: 'rgba(40,167,69,0.75)',
								borderWidth: 3,
								pointStyle: 'circle',
								pointRadius: 5,
								pointBorderColor: 'transparent',
								pointBackgroundColor: 'rgba(40,167,69,0.75)',
							}
						]
						},
						options: {
							responsive: true,
							tooltips: {
								mode: 'index',
								titleFontSize: 12,
								titleFontColor: '#000',
								bodyFontColor: '#000',
								backgroundColor: '#fff',
								titleFontFamily: 'Poppins',
								bodyFontFamily: 'Poppins',
								cornerRadius: 3,
								intersect: false,
							},
							legend: {
								display: false,
								labels: {
									usePointStyle: true,
									fontFamily: 'Poppins',
								},
							},
							scales: {
								xAxes: [{
									display: true,
									gridLines: {
										display: false,
										drawBorder: false
									},
									scaleLabel: {
										display: false,
										labelString: 'Month'
									},
									ticks: {
										fontFamily: "Poppins"
									}
								}],
								yAxes: [{
									display: true,
									gridLines: {
										display: false,
										drawBorder: false
									},
									scaleLabel: {
										display: true,
										labelString: 'Value',
										fontFamily: "Poppins"

									},
									ticks: {
										fontFamily: "Poppins"
									}
								}]
							},
							title: {
								display: false,
								text: 'Normal Legend'
							}
        }
					});
				
				var ctx = document.getElementById("Chart2");
				if (ctx) {
					ctx.height = 150;
					var myChart = new Chart(ctx, {
						type: 'bar',
						data: {
							labels: [
								<?php
								foreach ($c_barang as $key) {
									echo "'" .$key->NAMA_RUANG ."'"." , ";
								}
								?>
							],
							datasets: [
								{
									label: "Data Inventaris per Ruang",
									data: [<?php
										foreach ($c_barang as $key) {
											echo "'" .$key->count ."'"." , ";
										}
								?> ],
									borderColor: "rgba(0, 123, 255, 0.9)",
									borderWidth: "0",
									backgroundColor: "rgba(0, 123, 255, 0.5)"
								}
							]
						},
						options: {
							legend: {
								position: 'top',
								labels: {
									fontFamily: 'Poppins'
								}

							},
							scales: {
								xAxes: [{
									ticks: {
										fontFamily: "Poppins"

									}
								}],
								yAxes: [{
									ticks: {
										beginAtZero: true,
										fontFamily: "Poppins"
									}
								}]
							}
						}
					});
				}

				var ctx = document.getElementById("Chart3");
				if (ctx) {
					ctx.height = 150;
					var myChart = new Chart(ctx, {
						type: 'doughnut',
						data: {
							datasets: [{
								data: [<?php
										foreach ($c_kbarang as $key) {
											echo "'" .$key->count ."'"." , ";
										}
								?>],
								backgroundColor: [
									"rgba(40,167,69,0.75)",
									"rgba(0, 123, 255,0.9)",
									"rgba(220,53,69,0.75)"
								],
								hoverBackgroundColor: [
									"rgba(40,167,69,0.75)",
									"rgba(0, 123, 255,0.9)",
									"rgba(220,53,69,0.75)"
								]

							}],
							labels: [
								"Baik",
								"Kurang Baik",
								"Rusak",
							]
						},
						options: {
							legend: {
								position: 'top',
								labels: {
									fontFamily: 'Poppins'
								}

							},
							responsive: true
						}
					});
    		}
					
				</script>

</body>

</html>
<!-- end document-->