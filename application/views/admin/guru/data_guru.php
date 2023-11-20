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
                            <a href="<?php echo site_url('admin/siswa/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive-sm">
                                <table class="table table-bordered table-sm table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">Jurusan</th>
                                            <th class="text-center">Sekolah</th>
                                            <th class="text-center">TTL</th>
                                            <th class="text-center">Kota</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($siswa as $product): ?>
                                        <tr>
                                            <td width="180" class="text-center pt-4">
                                                <?php echo $product->nama_siswa ?>
                                            </td>
                                            <td class="text-center pt-4">
                                                <?php echo $product->jurusan ?>
                                            </td>
                                            <td class="text-center pt-4">
                                                <?php echo $product->asal_sekolah ?>
                                            </td>
                                            <td class="text-center pt-4">
                                                <?php echo $product->tanggal_lahir ?>
                                            </td>
                                            <td class="text-center pt-4">
                                                <?php echo $product->kota_asal ?>
                                            </td>
                                            <td class="text-center pt-4">
                                                <?php echo $product->alamat ?>
                                            </td>
                                            <td width="110">
											    <a href="<?php echo site_url('admin/siswa/edit/'.$product->nisn) ?>"
											 class="btn btn-small text-info"><i class="fas fa-edit"></i> Edit</a>
											    <a onclick="deleteConfirm('<?php echo site_url('admin/siswa/delete/'.$product->nisn) ?>')"
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
