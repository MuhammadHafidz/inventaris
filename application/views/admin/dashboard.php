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
												<i class="fas fa-ban"></i>
											</div>
											<div class="text">
												<h2><?php echo $ct_badinv?></h2>
												<span>Bad Invent</span>
											</div>
										</div>
										<div class="overview-chart">
											<!-- <canvas id="widgetChart4"></canvas> -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-lg-6" style="margin-bottom : 10px;">
								<a href="#" onclick="showTab()">Do you want to rent a inventory?</a>
							</div>
						</div>
						<div class="row" style="display:none" id="rentform">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4>Rent Form</h4>
									</div>
									<div class="card-body">
										<p>Make sure the loan letter is available. </p>
										<p style="margin-bottom : 10px;">Choose what you want to Borrow</p>

										<div class="default-tab">
											<nav>
												<div class="nav nav-tabs" id="nav-tab" role="tablist">
													<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
														role="tab" aria-controls="nav-profile" aria-selected="false">Ruang</a>
													<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
														role="tab" aria-controls="nav-contact" aria-selected="false">Inventory</a>
												</div>
											</nav>
											<div class="tab-content pl-3 pt-2" id="nav-tabContent">
												<div class="tab-pane fade show active" id="nav-home" role="tabpanel"
													aria-labelledby="nav-home-tab">

												</div>
												<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
													<form action="<?php echo base_url()?>users/dashboard/addPruang" method="POST">
														<div class="row form-group">
															<div class="col col-md-3">
																<label for="text-input" class=" form-control-label">Name</label>
															</div>
															<div class="col-12 col-md-9">
																<input type="text" id="text-input" name="nama" placeholder="Enter Borrowers Name"
																	class="form-control" required>
															</div>
														</div>
														<div class="row form-group">
															<div class="col col-md-3">
																<label for="text-input" class=" form-control-label">Email</label>
															</div>
															<div class="col-12 col-md-9">
																<input type="email" id="text-input" name="email" placeholder="Ex : xxxxxxx@xxx.com"
																	class="form-control" required>
															</div>
														</div>
														<div class="row form-group">
															<div class="col col-md-3">
																<label for="select" class=" form-control-label">Ruang</label>
															</div>
															<div class="col-12 col-md-9">
																<select name="ruang" id="select-ruang" class="form-control" required>
																	<?php 
                                                                foreach ($ruang as $val ) {
                                                                    ?>
																	<option value="<?php echo $val->ID_RUANG?>"><?php echo $val->NAMA_RUANG?> -
																		<?php echo $val->NAMA_GEDUNG?></option>
																	<?php   }
                                                            ?>
																</select>
															</div>
														</div>
														<div class="row form-group">
															<div class="col col-md-3">
																<label for="textarea-input" class=" form-control-label">Information</label>
															</div>
															<div class="col-12 col-md-9">
																<textarea name="keterangan" id="textarea-input" rows="4" placeholder="Content..."
																	class="form-control"></textarea required>
                              </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">Date and Time to Start</label>
                                </div>
                                <div class="col col-md-5">
                                    <input type='date' name="date_in" class="form-control" />
                                    
                                </div>
                                <div class="col col-md-4">
                                    <input type='time' id='time_in' name="time_in" min="06:00" min="18:00" value = "06:00" class="form-control" />
                                    <small class="help-block form-text">AM : 00-12 PM : 12-00</small>
                                </div>
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">Date and Time to End</label>
                                </div>
                                <div class="col col-md-5">
                                    <input type='date' name="date_out" class="form-control" />
                                    
                                </div>
                                <div class="col col-md-4">
                                    <input type='time' id='time_out' name="time_out" min="06:00" min="18:00" value = "18:00" class="form-control" />        
                                    
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-7">
                                <button type="submit" class="btn btn-primary ">
                                    <i class="fa fa-plus"></i> &nbspSubmit
                                </button>
                                </div>
                            </div>
                        </form>
												</div>
												<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                          <form action="<?php echo base_url()?>users/dashboard/addPbarang" method="POST">
                              <div class="row form-group">
                                  <div class="col col-md-3">
                                      <label for="text-input" class=" form-control-label">Name</label>
                                  </div>
                                  <div class="col-12 col-md-9">
                                      <input type="text" id="text-input" name="nama" placeholder="Enter Borrowers Name" class="form-control" required>
                                  </div>
                              </div>
                              <div class="row form-group">
                                  <div class="col col-md-3">
                                      <label for="text-input" class=" form-control-label">Email</label>
                                  </div>
                                  <div class="col-12 col-md-9">
                                      <input type="email" id="text-input" name="email" placeholder="Ex : xxxxxxx@xxx.com" class="form-control" required>
                                  </div>
                              </div>
                              <div class="row form-group">
                                  <div class="col col-md-3">
                                      <label for="select" class=" form-control-label">Inventaris</label>
                                  </div>
                                  <div class="col-12 col-md-9">
                                      <select name="invent" id="select-ruang" class="form-control" required>
                                      <?php 
                                          foreach ($invent as $val ) {
                                              
                                              if ($val->ID_KONDISI ==1) {?>
                                          <option value="<?php echo $val->ID_BARANG?>"><?php echo $val->NAMA_RUANG?> - <?php echo $val->NAMA_BARANG?></option>
                                      <?php } }
                                      ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="row form-group">
                                  <div class="col col-md-3">
                                      <label for="textarea-input" class=" form-control-label">Information</label>
                                  </div>
                                  <div class="col-12 col-md-9">
                                      <textarea name="keterangan" id="textarea-input" rows="4" placeholder="Content..." class="form-control"></textarea required>
                                  </div>
                              </div>
                              <div class="row form-group">
                                  <div class="col col-md-3">
                                      <label for="textarea-input" class=" form-control-label">Date and Time to Start</label>
                                  </div>
                                  <div class="col col-md-5">
                                      <input type='date' name="date_in" class="form-control" />
                                      
                                  </div>
                                  <div class="col col-md-4">
                                      <input type='time' id='time_in' name="time_in" min="06:00" min="18:00" value = "06:00" class="form-control" />
                                      <small class="help-block form-text">AM : 00-12 PM : 12-00</small>
                                  </div>
                                  <div class="col col-md-3">
                                      <label for="textarea-input" class=" form-control-label">Date and Time to End</label>
                                  </div>
                                  <div class="col col-md-5">
                                      <input type='date' name="date_out" class="form-control" />
                                      
                                  </div>
                                  <div class="col col-md-4">
                                      <input type='time' id='time_out' name="time_out" min="06:00" min="18:00" value = "18:00" class="form-control" />        
                                      
                                  </div>
                              </div>
                              <div class="row form-group">
                                  <div class="col col-md-7">
                                  <button type="submit" class="btn btn-primary ">
                                      <i class="fa fa-plus"></i> &nbspSubmit
                                  </button>
                                  </div>
                              </div>
                          </form>
											</div>

										</div>
									</div>
								</div>
							</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                    <p>Edited by Haff @ 2019 </p>
                                </div>
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