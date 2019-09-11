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
								<strong>Update</strong> Gedung
						</div>
						<div class="card-body card-block">
							<form action="<?php echo base_url()?>users/gedung/update" method="POST" class="form-horizontal">
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="hf-email" class=" form-control-label">Id </label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text" id="update_id" name="id" placeholder="0" class="form-control" required readonly>
									</div>
                </div>
                <div class="row form-group">
									<div class="col col-md-3">
										<label for="hf-email" class=" form-control-label">Nama Gedung</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text" id="update_name" name="name" placeholder="ex : Gedung 1" class="form-control" required>
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
									<strong>Add</strong> new Gedung
							</div>
							<div class="card-body card-block">
									<form action="<?php echo base_url()?>users/gedung/add" method="POST" class="form-horizontal">
											<div class="row form-group">
													<div class="col col-md-3">
															<label for="hf-email" class=" form-control-label">Nama Gedung</label>
													</div>
													<div class="col-12 col-md-9">
															<input type="text" id="hf-email" name="name" placeholder="ex : Gedung 1" class="form-control" required>
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
																<th>Id.</th>
																<th>Gedung</th>
																<th>Action</th>
														</tr>
												</thead>
												<tbody>
														<?php $a=1; foreach($data as $result){?>
																<tr>
																		<td><?php echo $a;?></td>
                                    <td><?php $id= $result->ID_GEDUNG;
                                    echo $id;?></td>
                                    <td><?php $name = $result->NAMA_GEDUNG;
                                    echo $name;?></td>
																		<td class="process">
																				
																				<button name="update" type="button" class="btn btn-outline-warning" value="<?php echo $result->ID_GEDUNG;?>" onclick="showUpdate(<?php echo $id;?>,'<?php echo $name;?>')">
                                        <i class="fa fa-trash "></i>&nbsp; Update</button>
                                        
																				
																				<button name="delete" type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#mediumModal" onclick="showDelete(<?php echo $id;?>,'<?php echo $name;?>')">
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
							<h5 class="modal-title" id="mediumModalLabel">Delete Gedung</h5>
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
  function showUpdate(id , name) {
    document.getElementById("update-form").style.display='block';
    document.getElementById("add-form").style.display='none';

    document.getElementById("update_id").value=id;
    document.getElementById("update_name").value=name;
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
		window.location.href = "<?php echo base_url()?>users/gedung/delete?id=" +id;
	}
</script>

</div>
</body>

</html>
<!-- end document-->