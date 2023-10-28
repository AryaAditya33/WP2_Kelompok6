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

    <div id="content-wrapper">

        <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 table bg-white">
                            <a href="<?php echo site_url('admin/user/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive-sm">
                                <table class="table table-bordered table-sm table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Username</th>
                                            <th class="text-center">Avatar</th>
                                            <th class="text-center">Created</th>
                                            <th class="text-center">Login</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($user as $product): ?>
                                        <tr>
                                            <td width="180" class="text-center pt-4">
                                                <?php echo $product->name ?>
                                            </td>
                                            <td width="250" class="text-center pt-4">
                                                <?php echo $product->email ?>
                                            </td>
                                            <td width="150" class="text-center pt-4">
                                                <?php echo $product->username ?>
                                            </td>
                                            <td width="150" class="text-center pt-3">
                                                <?php echo $product->avatar ?>
                                            </td>
                                            <td width="150" class="text-center pt-3">
                                                <?php echo $product->created_at ?>
                                            </td>
                                            <td width="150" class="text-center pt-3">
                                                <?php echo $product->last_login ?>
                                            </td>
                                            <td width="110">
											    <a href="<?php echo site_url('admin/siswa/edit/'.$product->id_user) ?>"
											 class="btn btn-small text-info"><i class="fas fa-edit"></i> Edit</a>
											    <a onclick="deleteConfirm('<?php echo site_url('admin/siswa/delete/'.$product->id_user) ?>')"
											 href="#!" class="btn btn-small text-danger text-center"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									    </tr>
									    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        </div>
    </div>

</div>
<!-- END OF NAV/SIDE -->

<!--FOOTER -->
<?php $this->load->view("admin/_partials/footer.php") ?>
<!--MODAL -->
<?php $this->load->view("admin/_partials/modal.php") ?>
<!--JAVASCRIPT -->
<?php $this->load->view("admin/_partials/js.php") ?>

<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
</script>

</html>
