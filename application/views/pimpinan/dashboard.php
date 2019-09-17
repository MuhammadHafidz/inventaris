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
              <div class="col-lg-12" >
                  <div class="au-card m-b-30" >
                      <div class="au-card-inner" >
                          <h3 class="title-2 m-b-40">Peminjaman</h3>
                          <canvas id="sales-chart" ></canvas>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="au-card m-b-30">
                      <div class="au-card-inner">
                        <h3 class="title-2 m-b-40">Inventaris</h3>
                        <canvas id="barChart"></canvas>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="au-card m-b-30">
                      <div class="au-card-inner">
                        <h3 class="title-2 m-b-40">Kondisi Inventaris</h3>
                        <canvas id="doughutChart"></canvas>
                      </div>
                  </div>
              </div>
              <div class="col-lg-12">
                  <div class="au-card m-b-30">
                      <div class="au-card-inner" >
                        <h3 class="title-2 m-b-40">Kondisi Inventaris</h3>
                        <canvas id="myChart"></canvas>
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
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1
        },{
          label: '# of Votes',
            data: [20, 29, 5, 7,8, 1],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

</body>

</html>
<!-- end document-->