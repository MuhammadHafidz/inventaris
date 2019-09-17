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
					<h2 style="margin : 10px;">Gedung</h2><br>
					</div>

					<div class="row">
						<div class="table-responsive col-md-12 m-b-40">
							<table class="table table-borderless table-data3" id="myTable">
								<thead>
									<tr>
										<th>No.</th>
										<th>Id.</th>
										<th>Nama Gedung</th>
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
									</tr>
									<?php $a = $a + 1;}?>
								</tbody>
							</table>
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