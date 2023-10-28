<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

<!-- NAVBAR & SIDEBAR -->
<?php $this->load->view("admin/_partials/body.php") ?>

<!--CONTENT -->
<?php $this->load->view("admin/_partials/content.php") ?>


<div id="wrapper">

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header border border-primary">
						<a href="<?php echo site_url('admin/siswa/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body border border-info">

                        <form action="" method="post"
                            enctype="multipart/form-data" >

                            <input type="hidden" name="id" value="<?php echo $student->nisn?>" />

						<form action="<?php base_url('admin/siswa/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="nama_siswa">Nama*</label>
								<input class="form-control <?php echo form_error('nama_siswa') ? 'is-invalid':'' ?>"
								 type="text" name="nama_siswa" min="0" placeholder="(NAMA LENGKAP)" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_siswa') ?>
								</div>
							</div>

                            <div class="form-group">
                                <label for="jurusan">Jurusan*</label>
                                <select class="form-control <?php echo form_error('nama_siswa') ? 'is-invalid':'' ?>"
								 name="jurusan">
                                    <option value="">--PILIH--</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                </select>
                            </div>

							<div class="form-group">
								<label for="asal_sekolah">Asal Sekolah*</label>
								<input class="form-control <?php echo form_error('asal_sekolah') ? 'is-invalid':'' ?>"
								 type="text" name="asal_sekolah" min="0" placeholder="(ASAL SEKOLAH)" />
								<div class="invalid-feedback">
									<?php echo form_error('asal_sekolah') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tanggal_lahir">Tanggal Lahir*</label>
								<input class="form-control <?php echo form_error('tanggal_lahir') ? 'is-invalid':'' ?>"
								 type="text" name="tanggal_lahir" min="0" placeholder="(YYYY/MM/DD)" />
								<div class="invalid-feedback">
									<?php echo form_error('tanggal_lahir') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kota_asal">Kota Asal*</label>
								<input class="form-control <?php echo form_error('kota_asal') ? 'is-invalid':'' ?>"
								 type="text" name="kota_asal" min="0" placeholder="(KOTA ASAL)" />
								<div class="invalid-feedback">
									<?php echo form_error('kota_asal') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alamat">Alamat*</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" name="alamat" min="0" placeholder="(ALAMAT)" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>
							
							<input class="btn btn-success btn-lg" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->
            </div>
        </div>
</div>

</div>
<!-- END OF SIDE/NAV -->

<!--FOOTER -->
<?php $this->load->view("admin/_partials/footer.php") ?>
<!--MODAL -->
<?php $this->load->view("admin/_partials/modal.php") ?>
<!--JAVASCRIPT -->
<?php $this->load->view("admin/_partials/js.php") ?>

</body>
</html>