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
								<strong>Update</strong> Barang
						</div>
						<div class="card-body card-block">
						<form action="<?php echo base_url()?>users/barang/update" method="POST" class="form-horizontal">
									<div class="row form-group">
													<div class="col col-md-3">
															<label for="hf-email" class=" form-control-label">Kode Barang</label>
													</div>
													<div class="col-12 col-md-9">
															<input type="text" id="upd_kode_barang" name="kode_barang" placeholder="ex : XXXXX" class="form-control" required readonly>
													</div>
											</div>
											<div class="row form-group">
													<div class="col col-md-2">
															<label for="hf-email" class=" form-control-label">Nama Barang</label>
													</div>
													<div class="col-12 col-md-4">
															<input type="text" id="upd_name" name="name" placeholder="ex : Barang Bekas" class="form-control" required>
													</div>
												<div class="col col-md-2">
														<label for="select" class=" form-control-label">Jenis</label>
												</div>
												<div class="col-12 col-md-4">
														<select name="jenis" id="upd_jenis" class="form-control">
														<option value=""> Jenis </option>
														<?php 
																	foreach ($jenis as $result) {
																		?>
																		<option value="<?php echo $result->ID_JENIS?>"><?php echo $result->KODE_JENIS. " - " .$result->JENIS?></option>
																		<?php
																	}
																?>
														</select>
												</div>
											</div>
											<div class="row form-group">
											<div class="col col-md-2">
														<label for="select" class=" form-control-label">Kondisi</label>
												</div>
												<div class="col-12 col-md-4">
														<select name="kondisi" id="upd_kondisi" class="form-control">
														<option value=""> Kondisi </option>
														<?php 
																	foreach ($kondisi as $result) {
																		?>
																		<option value="<?php echo $result->ID_KONDISI?>"><?php echo $result->KONDISI?></option>
																		<?php
																	}
																?>
														</select>
												</div>
												<div class="col col-md-2">
														<label for="select" class=" form-control-label">Ruang</label>
												</div>
												<div class="col-12 col-md-4">
														<select name="ruang" id="upd_ruang" class="form-control">
														<option value=""> Ruang </option>
														<?php 
																	foreach ($ruang as $result) {
																		?>
																		<option value="<?php echo $result->ID_RUANG?>"><?php echo $result->ID_RUANG. " - " .$result->NAMA_RUANG?></option>
																		<?php
																	}
																?>
														</select>
												</div>
											</div>
											<div class="row form-group">
												<div class="col col-md-2">
															<label for="hf-email" class=" form-control-label">Jumlah</label>
													</div>
													<div class="col-12 col-md-4">
															<input type="number" id="upd_jumlah" name="jumlah" placeholder="ex : 0 " class="form-control" required>
													</div>
												<div class="col col-md-2">
														<label for="hf-email" class=" form-control-label">Satuan</label>
												</div>
												<div class="col-12 col-md-4">
														<input type="text" id="upd_satuan" name="satuan" placeholder="ex : Biji" class="form-control" required>
												</div>
											</div>
											<div class="row form-group">
											<div class="col col-md-3">
															<label for="hf-email" class=" form-control-label">Keterangan</label>
													</div>
													<div class="col-12 col-md-9">
															<input type="text" id="upd_keterangan" name="keterangan" placeholder="ex : Barang masih Layak " class="form-control" required>
													</div>
											</div>
							</div>
							<div class="card-footer">
									<button type="submit" class="btn btn-primary ">
											<i class="fa fa-plus"></i> &nbspSubmit
                  </button>
									</form>      
              <button class="btn btn-danger" onclick="closeUpdate()" id="close_update">
									<i class="fa fa-window-close "></i> &nbspClose
              </button>
						</div>
            </div>
            <!-- ADD GEDUNG -->
						<div class="card" style="" id="add-form">
							<div class="card-header">
									<strong>Add</strong> new Barang
							</div>
							<div class="card-body card-block">
									<form action="<?php echo base_url()?>users/barang/add" method="POST" class="form-horizontal">
									<div class="row form-group">
													<div class="col col-md-3">
															<label for="hf-email" class=" form-control-label">Kode Barang</label>
													</div>
													<div class="col-12 col-md-9">
															<input type="text" id="hf-email" name="kode_barang" placeholder="ex : XXXXX" class="form-control" required>
													</div>
											</div>
											<div class="row form-group">
													<div class="col col-md-2">
															<label for="hf-email" class=" form-control-label">Nama Barang</label>
													</div>
													<div class="col-12 col-md-4">
															<input type="text" id="hf-email" name="name" placeholder="ex : Barang Bekas" class="form-control" required>
													</div>
												<div class="col col-md-2">
														<label for="select" class=" form-control-label">Jenis</label>
												</div>
												<div class="col-12 col-md-4">
														<select name="jenis" id="jenis" class="form-control">
														<option value=""> Jenis </option>
														<?php 
																	foreach ($jenis as $result) {
																		?>
																		<option value="<?php echo $result->ID_JENIS?>"><?php echo $result->KODE_JENIS. " - " .$result->JENIS?></option>
																		<?php
																	}
																?>
														</select>
												</div>
											</div>
											<div class="row form-group">
											<div class="col col-md-2">
														<label for="select" class=" form-control-label">Kondisi</label>
												</div>
												<div class="col-12 col-md-4">
														<select name="kondisi" id="kondisi" class="form-control">
														<option value=""> Kondisi </option>
														<?php 
																	foreach ($kondisi as $result) {
																		?>
																		<option value="<?php echo $result->ID_KONDISI?>"><?php echo $result->KONDISI?></option>
																		<?php
																	}
																?>
														</select>
												</div>
												<div class="col col-md-2">
														<label for="select" class=" form-control-label">Ruang</label>
												</div>
												<div class="col-12 col-md-4">
														<select name="ruang" id="ruang" class="form-control">
														<option value=""> Ruang </option>
														<?php 
																	foreach ($ruang as $result) {
																		?>
																		<option value="<?php echo $result->ID_RUANG?>"><?php echo $result->ID_RUANG. " - " .$result->NAMA_RUANG?></option>
																		<?php
																	}
																?>
														</select>
												</div>
											</div>
											<div class="row form-group">
												<div class="col col-md-2">
															<label for="hf-email" class=" form-control-label">Jumlah</label>
													</div>
													<div class="col-12 col-md-4">
															<input type="number" id="hf-email" name="jumlah" placeholder="ex : 0 " class="form-control" required>
													</div>
												<div class="col col-md-2">
														<label for="hf-email" class=" form-control-label">Satuan</label>
												</div>
												<div class="col-12 col-md-4">
														<input type="text" id="hf-email" name="satuan" placeholder="ex : Biji" class="form-control" required>
												</div>
											</div>
											<div class="row form-group">
											<div class="col col-md-3">
															<label for="hf-email" class=" form-control-label">Keterangan</label>
													</div>
													<div class="col-12 col-md-9">
															<input type="text" id="hf-email" name="keterangan" placeholder="ex : Barang masih Layak " class="form-control" required>
													</div>
											</div>
							</div>
							<div class="card-footer">
									<button type="submit" class="btn btn-primary ">
											<i class="fa fa-plus"></i> &nbspSubmit
                  </button>
									</form>                  
							</div>
						</div>
										
						<div class="row">
								<div class="table-responsive col-md-12 m-b-40">
										<table class="table table-borderless table-data3" id="myTable">
												<thead>
														<tr>
																<th>No.</th>
																<th>Kode</th>
																<th>Barang</th>
																<th>Jenis</th>
																<th>Ruang</th>
																<th>Kondisi</th>
																<th>Keterangan</th>
																<th>Jumlah</th>
																<th>Satuan</th>
																<th>Action</th>
														</tr>
												</thead>
												<tbody>
														<?php $a=1; foreach($data as $result){?>
																<tr>
																		<td><?php echo $a;?></td>
                                    <td><?php $id= $result->KODE_BARANG;
                                    echo $id;?></td>
																		<td><?php $name = $result->NAMA_BARANG;
                                    echo $name;?></td>
																		<td><?php echo $result->JENIS;?></td>
																		<td><?php echo $result->NAMA_RUANG;?></td>
																		<td><?php echo $result->KONDISI;?></td>
																		<td><?php echo $result->KETERANGAN;?></td>
																		<td><?php echo $result->JUMLAH;?></td>
																		<td><?php echo $result->SATUAN;?></td>
																		<td class="process">
																				
																				<button name="update" type="button" class="btn btn-outline-warning"  onclick="showUpdate('<?php echo $id;?>', '<?php echo $name;?>', '<?php echo $result->ID_JENIS;?>',<?php echo $result->ID_KONDISI;?>,<?php echo $result->ID_RUANG;?>,<?php echo $result->JUMLAH;?>,'<?php echo $result->SATUAN;?>', '<?php echo $result->KETERANGAN;?>')">
                                        <i class="fas fa-edit "></i>&nbsp; Update</button>
                                        
																				
																				<button name="delete" type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#mediumModal" onclick="showDelete('<?php echo $id;?>','<?php echo $name;?>')">
																				<i class="fa fa-trash "></i>&nbsp; Delete</button>
																		</td>
																</tr>
														<?php $a = $a + 1;}?>
												</tbody>
										</table>
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
							<h5 class="modal-title" id="mediumModalLabel">Delete Barang</h5>
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
							<button type="button" class="btn btn-primary" onclick="delete_data()">Confirm</button>
						</div>
					</div>
				</div>
			</div>



<?php $this->load->view('end-js');?>
  <!-- Jquery JS-->
<script>
  function showUpdate(id, name, jenis, kondisi, ruang, jumlah, satuan, keterangan) {
    document.getElementById("update-form").style.display='block';
    document.getElementById("add-form").style.display='none';

    document.getElementById("upd_kode_barang").value=id;
    document.getElementById("upd_name").value=name;
    document.getElementById("upd_jenis").value=jenis;
    document.getElementById("upd_kondisi").value=kondisi;
    document.getElementById("upd_ruang").value=ruang;
    document.getElementById("upd_jumlah").value=jumlah;
    document.getElementById("upd_satuan").value=satuan;
    document.getElementById("upd_keterangan").value=keterangan;
  }

  function closeUpdate() {
    document.getElementById("update-form").style.display='none';
    document.getElementById("add-form").style.display='block';
  }

	function showDelete(id, name){
		document.getElementById("id_delete").innerHTML = id;
		document.getElementById("name_delete").innerHTML = name;
	}

	function delete_data() {
		id = document.getElementById("id_delete").innerHTML;
		window.location.href = "<?php echo base_url()?>users/barang/delete?id=" +id;
	}
</script>

</div>
</body>

</html>
<!-- end document-->