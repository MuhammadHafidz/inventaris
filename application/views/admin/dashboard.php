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
			<?php $this->load->view('admin/menu')?>
		</aside>
		<!-- END MENU SIDEBAR-->

		<!-- PAGE CONTAINER-->
		<div class="page-container">
			<!-- HEADER DESKTOP-->
			<?php $this->load->view('/karyawan/header') ?>

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
							<div class="col-sm-6 col-lg-3">
								<div class="overview-item overview-item--c1">
									<div class="overview__inner">
										<div class="overview-box clearfix">
											<div class="icon">
												<i class="fas fa-building"></i>
											</div>
											<div class="text">
												<h2><?php echo $ct_gedung?></h2>
												<span>Gedung</span>
											</div>
										</div>
										<div class="overview-chart">
											<!-- <canvas id="widgetChart1"></canvas> -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="overview-item overview-item--c2">
									<div class="overview__inner">
										<div class="overview-box clearfix">
											<div class="icon">
												<i class="fas fa-table"></i>
											</div>
											<div class="text">
												<h2><?php echo $ct_ruang?></h2>
												<span>Ruang</span>
											</div>
										</div>
										<div class="overview-chart">
											<!-- <canvas id="widgetChart2"></canvas> -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="overview-item overview-item--c3">
									<div class="overview__inner">
										<div class="overview-box clearfix">
											<div class="icon">
												<i class="far fa-check-square"></i>
											</div>
											<div class="text">
												<h2><?php echo $ct_invent?></h2>
												<span>Inventaris</span>
											</div>
										</div>
										<div class="overview-chart">
											<!-- <canvas id="widgetChart3"></canvas> -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="overview-item overview-item--c4">
									<div class="overview__inner">
										<div class="overview-box clearfix">
											<div class="icon">
												<i class="fa fa-user-circle"></i>
											</div>
											<div class="text">
												<h2><?php echo $ct_users?></h2>
												<span>Users</span> 
											</div>
										</div>
										<div class="overview-chart">
											<!-- <canvas id="widgetChart4"></canvas> -->
										</div>
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
    function showTab() {
        if(document.getElementById("rentform").style.display = "none"){
            document.getElementById("rentform").style.display = "inline"
        }else{
            document.getElementById("rentform").style.display = "none"
        }
    }
    
    // $('#datetimepicker2').datetimepicker({
    //     locale: 'id'
    // });
        
    </script>


</body>

</html>
<!-- end document-->