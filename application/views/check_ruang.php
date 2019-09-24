<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('head');?>
</head>

<body class="animsition">
	<!-- HEADER MOBILE-->
	<!-- END HEADER MOBILE-->

		<!-- MAIN CONTENT-->
		<div class="main-content">
			<div class="section__content section__content--p30">
				<div class="container-fluid">
					<!-- //UPDATE -->
					<div class="row">
						<div class="col col-12">
							<div class="card ">
								<div class="card-header ">
									<h4>Rent Data</h4>
								</div>
								<div class="default-tab card-body card-block">
									<nav>
										<div class="nav nav-tabs" id="nav-tab" role="tablist">
											<a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
												role="tab" aria-controls="nav-profile" aria-selected="false">Ruang</a>
											
										</div>
									</nav>
									<div class="tab-content pl-3 pt-2" id="nav-tabContent">
										<div class="tab-pane fade show active" id="nav-profile" role="tabpanel"
											aria-labelledby="nav-profile-tab">
											<div class="table-responsive col-md-12 m-b-40">
												<table class="table table-borderless table-data3" id="myTable1">
													<thead>
														<tr>
															<th>Id.</th>
															<th>Ruang</th>
															<th>Keterangan</th>
															<th>Mulai</th>
															<th>Berakhir</th>
															<th>Status</th>
														</tr>
													</thead>
													<tbody>
														<?php foreach($data as $result){?>
														<tr>
															<td><?php $id= $result->ID_PRUANG;
																			echo $id;?></td>
															<td><?php echo $result->NAMA_RUANG;?></td>
															<td><?php echo $result->KETERANGAN_PRUANG;?></td>
															<td><?php echo $result->PRUANG_IN;?></td>
															<td><?php echo $result->PRUANG_OUT;?></td>
															<td><?php switch ($result->STATUS_PRUANG) {
																				case -1:
																					echo "<span class='badge badge-danger'>Denied</span>";
																					break;
																				case 0:
																					echo "<span class='badge badge-warning'>Pending</span>";
																					break;
																				case 1:
																					echo "<span class='badge badge-success'>Accepted</span>";
																					break;
																				case 2:
																					echo "<span class='badge badge-secondary'>on Proccess</span>";
																					break;
																				case 3:
																					echo "<span class='badge badge-primary'>Finished</span>";
																					break;
																			}?></td>
														</tr>
														<?php }?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					

				</div>
			</div>
			<!-- END MAIN CONTENT-->
			<!-- END PAGE CONTAINER-->
		</div>

		<?php $this->load->view('end-js');?>
		<!-- Jquery JS-->
		<script>

		</script>

	</div>
</body>

</html>
<!-- end document-->
