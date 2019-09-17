<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('head');?>
</head>

<body class="animsition">
	<!-- HEADER MOBILE-->
	<!-- END HEADER MOBILE-->

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
					<!-- //UPDATE -->
					<!-- ADD GEDUNG -->
					<div class="row">
					<h2 style="margin : 10px;">Peminjaman</h2><br>
					</div>

					<div class="row">
							<div class="col col-12">
							<div class = "card ">
								<div class="card-header ">
											<h4>Rent Data</h4>
										</div>
								<div class="default-tab card-body card-block">
									<nav>
										<div class="nav nav-tabs" id="nav-tab" role="tablist">
											<a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Ruang</a>
											<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact"aria-selected="false">Inventory</a>
										</div>
									</nav>
												<div class="tab-content pl-3 pt-2" id="nav-tabContent">
												<div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
													<div class="table-responsive col-md-12 m-b-40">
														<table class="table table-borderless table-data3" id="myTable">
													<thead>
															<tr>
																	<th>Id.</th>
																	<th>Nama</th>
																	<th>Pinjam</th>
																	<th>Keterangan</th>
																	<th>Mulai</th>
																	<th>Berakhir</th>
																	<th>Status</th>
															</tr>
													</thead>
													<tbody>
															<?php foreach($pruang as $result){?>
																	<tr>
																			<td><?php $id= $result->ID_PRUANG;
																			echo $id;?></td>
																			<td><?php echo $result->NAMA_PRUANG;?></td>
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
													<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
													<div class="table-responsive col-md-12 m-b-40">
														<table class="table table-borderless table-data3" id="myTable1">
													<thead>
															<tr>
																	<th>Id.</th>
																	<th>Nama</th>
																	<th>Pinjam</th>
																	<th>Keterangan</th>
																	<th>Mulai</th>
																	<th>Berakhir</th>
																	<th>Status</th>
															</tr>
													</thead>
													<tbody>
															<?php foreach($pbarang as $result){?>
																	<tr>
																			<td><?php $id= $result->ID_PBARANG;
																			echo $id;?></td>
																			<td><?php echo $result->NAMA_PBARANG;?></td>
																			<td><?php echo $result->NAMA_BARANG .' - ' .$result->NAMA_RUANG?></td>
																			<td><?php echo $result->KETERANGAN_PBARANG;?></td>
																			<td><?php echo $result->PBARANG_IN;?></td>
																			<td><?php echo $result->PBARANG_OUT;?></td>
																			<td><?php switch ($result->STATUS_PBARANG) {
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
					<div class="row">
						<div class="col-md-12">
							<div class="copyright">
								<p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
										href="https://colorlib.com">Colorlib</a>.</p>
								<p>Edited by Haff @ 2019 </p>
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
		<!-- <script>
			function showUpdate(id, name) {
				document.getElementById("update-form").style.display = 'block';
				document.getElementById("add-form").style.display = 'none';

				document.getElementById("update_id").value = id;
				document.getElementById("update_name").value = name;
			}

			function closeUpdate() {
				document.getElementById("update-form").style.display = 'none';
				document.getElementById("add-form").style.display = 'block';
			}

			function showDelete(id, name) {
				document.getElementById("id_delete").innerHTML = id;
				document.getElementById("name_delete").innerHTML = name;
			}

			function delete_data() {
				id = document.getElementById("id_delete").innerHTML;
				window.location.href = "<?php echo base_url()?>users/jenis/delete?id=" + id;
			}
		</script> -->

	</div>
</body>

</html>
<!-- end document-->