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

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

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

							<input type="hidden" name="id" value="<?php echo $user->id_user?>" />

						<form action="<?php base_url('admin/siswa/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Nama User*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" min="0" placeholder="(NAMA LENGKAP)" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="email">Email*</label>
								<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="text" name="email" min="0" placeholder="(EMAIL)" />
								<div class="invalid-feedback">
									<?php echo form_error('email') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="username">Username*</label>
								<input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
								 type="text" name="username" min="0" placeholder="(USERNAME)" />
								<div class="invalid-feedback">
									<?php echo form_error('username') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="password">Password (HASH)*</label>
								<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
								 type="text" name="password" min="0" placeholder="(MENGGUNAKAN PASSWORD HASH)" />
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="password_r">Password*</label>
								<input class="form-control <?php echo form_error('password_r') ? 'is-invalid':'' ?>"
								 type="text" name="password_r" min="0" placeholder="(PASSWORD)" />
								<div class="invalid-feedback">
									<?php echo form_error('password_r') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="avatar">Avatar</label>
								<input class="form-control-file <?php echo form_error('avatar') ? 'is-invalid':'' ?>"
								 type="file" name="avatar" />
								<div class="invalid-feedback">
									<?php echo form_error('avatar') ?>
								</div>
							</div>
                            
                            <div class="form-group">
								<fieldset disabled>
								<label for="created_at">Created at*</label>
								<input class="form-control <?php echo form_error('created_at') ? 'is-invalid':'' ?>"
								 type="text" name="created_at" min="0" placeholder="(TIDAK USAH DIISI)" />
								<div class="invalid-feedback">
									<?php echo form_error('created_at') ?>
								</div>
							</div>
							
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
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

</html>