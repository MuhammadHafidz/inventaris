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
		<?php $this->load->view('karyawan/menu')?>
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
					<div class="card" style="display:none;" id="update-form">
						<div class="card-header">
							<strong>Update</strong> Peminjaman <strong id="tile"></strong>
						</div>
						<div class="card-body card-block">
							<form action="" method="POST" id="update" class="form-horizontal">
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">Id</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text" id="id" name="id" placeholder="" class="form-control" required readonly>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">Name</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text" id="name" name="nama" placeholder="Enter Borrowers Name" class="form-control"
											required>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">Email</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="email" id="email" name="email" placeholder="Ex : xxxxxxx@xxx.com" class="form-control"
											required>
									</div>
								</div>
								<div class="row form-group" id="select-ruang">
									<div class="col col-md-3">
										<label for="select" class=" form-control-label">Ruang</label>
									</div>
									<div class="col-12 col-md-9">
										<select name="ruang" id="ruang" class="form-control">
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
								<div class="row form-group" id="select-barang">
									<div class="col col-md-3">
										<label for="select" class=" form-control-label">Barang</label>
									</div>
									<div class="col-12 col-md-9">
										<select name="barang" id="barang" class="form-control">
											<?php 
												foreach ($barang as $val ) {
														?>
											<option value="<?php echo $val->ID_BARANG?>"><?php echo $val->NAMA_BARANG?> -
												<?php echo $val->NAMA_RUANG?></option>
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
										<textarea name="keterangan" id="keterangan" rows="4" placeholder="Content..." class="form-control"></textarea required>
								</div>
						</div>
						<div class="row form-group">
								<div class="col col-md-3">
										<label for="textarea-input" class=" form-control-label">Date and Time to Start</label>
								</div>
								<div class="col col-md-5">
										<input type='date' id="date_in" name="date_in" class="form-control" />
										
								</div>
								<div class="col col-md-4">
										<input type='time' id='time_in' name="time_in" min="06:00" min="18:00" value = "06:00" class="form-control" />
										<small class="help-block form-text">AM : 00-12 PM : 12-00</small>
								</div>
								<div class="col col-md-3">
										<label for="textarea-input" class=" form-control-label">Date and Time to End</label>
								</div>
								<div class="col col-md-5">
										<input type='date' id="date_out" name="date_out" class="form-control" />
										
								</div>
								<div class="col col-md-4">
										<input type='time' id='time_out' name="time_out" min="06:00" min="18:00" value = "18:00" class="form-control" />        
										
								</div>
						</div>

						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-primary ">
									<i class="fa fa-plus"></i> &nbspSubmit
              </button>
              
              </form>
              <button class="btn btn-danger" onclick="closeUpdateRuang()" id="close_update">
									<i class="fa fa-window-close "></i> &nbspClose
              </button>
						</div>
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
																	<th>Action</th>
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
																			<td class="process">
																					<?php if ($result->STATUS_PRUANG ==0 ) {
																					?>
																					<button name="update" type="button" class="btn btn-outline-warning" onclick="showUpdateRuang('<?php
																			echo $id;?>','<?php echo $result->NAMA_PRUANG;?>','<?php echo $result->ID_RUANG;?>','<?php echo $result->EMAIL_PRUANG;?>','<?php echo $result->KETERANGAN_PRUANG;?>','<?php echo $result->PRUANG_IN;?>','<?php echo $result->PRUANG_IN;?>','<?php echo $result->PRUANG_OUT;?>','<?php echo $result->STATUS_PRUANG;?>')">
																					<i class="fa fa-trash "></i>&nbsp; Update</button>
																					<?php }?>
																					
																					<button name="delete" type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#mediumModal" onclick="showDelete('<?php
																			echo $id;?>','<?php echo $result->NAMA_PRUANG.' ( ' .$result->NAMA_RUANG .' )';?> ','Ruang')">
																					<i class="fa fa-trash "></i>&nbsp; Delete</button>
																			</td>
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
																	<th>Action</th>
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
																			<td class="process">
																					<?php if ($result->STATUS_PBARANG ==0 ) {
																					?>
																					<button name="update" type="button" class="btn btn-outline-warning" onclick="showUpdateBarang('<?php
																			echo $id;?>','<?php echo $result->NAMA_PBARANG;?>','<?php echo $result->ID_BARANG;?>','<?php echo $result->EMAIL_PBARANG;?>','<?php echo $result->KETERANGAN_PBARANG;?>','<?php echo $result->PBARANG_IN;?>','<?php echo $result->PBARANG_IN;?>','<?php echo $result->PBARANG_OUT;?>','<?php echo $result->STATUS_PBARANG;?>')">
																					<i class="fa fa-trash "></i>&nbsp; Update</button>
																					<?php }?>
																					
																					<button name="delete" type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#mediumModal" onclick="showDelete('<?php
																			echo $id;?>','<?php echo $result->NAMA_PBARANG.' ( ' .$result->NAMA_BARANG .' - '.$result->NAMA_RUANG .' )';?> ', 'Barang')">
																					<i class="fa fa-trash "></i>&nbsp; Delete</button>
																			</td>
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
                  <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                  <p>Edited by Haff @ 2019 </p>
              </div>
          </div>
      </div>
			
			</div>
		</div>
		<!-- END MAIN CONTENT-->
		<!-- END PAGE CONTAINER-->
	</div>

	<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true" data-backdrop="static">
				<div class="modal-dialog modal-md" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Delete <strong id="del"></strong></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								Are you sure to delete <span id="id_delete"></span> - <span id="name_delete"></span> ?
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary" onclick="delete_data_Ruang()">Confirm</button>
						</div>
					</div>
				</div>
			</div>



<?php $this->load->view('end-js');?>
  <!-- Jquery JS-->
<script>
  function showUpdateRuang(id , name, ruang, email, keterangan, mulai, berakhir, status) {
    document.getElementById("update-form").style.display='block';
		document.getElementById("select-barang").style.visibility='hidden';
		document.getElementById("select-ruang").style.visibility='visible';
		document.getElementById("tile").innerHTML = 'Ruang';
		
		document.getElementById("update").action = "<?php echo base_url()?>users/peminjaman/updateRuang";

    // document.getElementById("select-ruang").style.display='inline';

    document.getElementById("id").value=id;
    document.getElementById("name").value=name;
		document.getElementById("ruang").value=ruang;
    document.getElementById("email").value=email;
		document.getElementById("keterangan").value=keterangan;
		var time = mulai.split(" ");
    document.getElementById("date_in").value=time[0];
		document.getElementById("time_in").value=time[1];
		var times = berakhir.split(" ");

		document.getElementById("date_out").value=times[0];
    document.getElementById("time_out").value=times[1];
	}
	
	function showUpdateBarang(id , name, ruang, email, keterangan, mulai, berakhir, status) {
    document.getElementById("update-form").style.display='block';
		document.getElementById("select-barang").style.visibility='visible';
		document.getElementById("select-ruang").style.visibility='hidden';
		document.getElementById("tile").innerHTML = 'Inventaris';
		
		document.getElementById("update").action = "<?php echo base_url()?>users/peminjaman/updateBarang";

    // document.getElementById("select-ruang").style.display='inline';

    document.getElementById("id").value=id;
    document.getElementById("name").value=name;
		document.getElementById("ruang").value=ruang;
    document.getElementById("email").value=email;
		document.getElementById("keterangan").value=keterangan;
		var time = mulai.split(" ");
    document.getElementById("date_in").value=time[0];
		document.getElementById("time_in").value=time[1];
		var times = berakhir.split(" ");

		document.getElementById("date_out").value=times[0];
    document.getElementById("time_out").value=times[1];
  }

  function closeUpdateRuang() {
    document.getElementById("update-form").style.display='none';
  }

	function showDelete(id, name, del){
		if (del == 'Barang') {
		document.getElementById("del").innerHTML = "Peminjaman Barang";
		}else if(del == 'Ruang'){
		document.getElementById("del").innerHTML = "Peminjaman Ruang";

		}
		document.getElementById("id_delete").innerHTML = id;
		document.getElementById("name_delete").innerHTML = name;
	}

	function delete_data_Ruang() {
			var ref = "";
			id = document.getElementById("id_delete").innerHTML;

		if (document.getElementById("del").innerHTML == 'Peminjaman Barang') {
			ref = "<?php echo base_url()?>users/peminjaman/deleteBarang?id=" +id;
		}else if(document.getElementById("del").innerHTML == 'Peminjaman Ruang'){
			ref = "<?php echo base_url()?>users/peminjaman/deleteRuang?id=" +id;
			
		}
		window.location.href = ref;
	}
	
</script>

</div>
</body>

</html>
<!-- end document-->
