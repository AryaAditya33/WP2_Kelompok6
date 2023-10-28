<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NESI - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<?php if($this->session->flashdata('message_login_error')): ?>
	<div class="invalid-feedback">
		<?= $this->session->flashdata('message_login_error') ?>
	</div>
<?php endif ?>

<body class="bg-gradient-light">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-12 col-md-4 d-flex vh-100 align-items-center justify-content-center">

                <div class="card o-hidden shadow-lg my-5 border border-info">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-1200 font-weight-bold "><i class="fas fa-laptop-code"></i> &nbsp;NEW STUDENT INFORMATION</h1>
                                        <p class="text-sm text-gray">-- SILAHKAN LOGIN --</p>
                                    </div>
                                    
                                    <form action="" method="post">
                                    <form class="user">
                                        <div class="form-group"> 
                                            <input type="text" name="username"class="form-control form-control-user"
                                                placeholder="Enter Username" value="<?= set_value('username') ?>">
                                            <div class="invalid-feedback">
					                            <?= form_error('username') ?>
				                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                 placeholder="Password" value="<?= set_value('password') ?>" required >
                                            <div class="invalid-feedback">
					                            <?= form_error('password') ?>
				                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-user btn-block">
                                            Login
                                        </button>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

<?php $this->load->view("admin/_partials/modal.php") ?>
<!--JAVASCRIPT -->
<?php $this->load->view("admin/_partials/js.php") ?>

</html>