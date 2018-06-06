<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Lockscreen | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="container lockscreen clearfix">
						<?php 
							$success = $this->session->flashdata('success');
							$failed = $this->session->flashdata('failed');

							if (!empty($failed)) {
								echo '
									<div class="alert alert-danger alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<i class="fa fa-times-circle"></i> '.$failed.'
									</div>
								';
							}

							if (!empty($success)) {
								echo '
									<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> '.$success.'
									</div>
								';
							}
						?>
					</div>
				<div class="auth-box3 lockscreen clearfix">
					
					<div class="content">
						<br>
						<h1 class="sr-only">Klorofil - Free Bootstrap dashboard</h1>
						<div class="logo text-center"><a href="<?php echo base_url(); ?>index.php/dashboard"><img src="<?php echo base_url(); ?>assets/img/logo-dark.png" alt="Klorofil Logo"></a></div>
						<h2 style="text-align: center;">REGISTER</h2>
						<form method="post" action="<?php  echo base_url() ?>index.php/register/insert" enctype="multipart/form-data">
		                	<div class="form-group col-md-12">
		                        	<label>Nama User</label>
		                            <input type="text" class="form-control" name="nama_user" required placeholder="Nama User . . ." />
		                    </div>
		                    <div class="form-group col-md-6">
		                        	<label>Username</label>
		                            <input type="text" class="form-control" name="username" required placeholder="Username . . ." />
		                    </div>
		                    <div class="form-group col-md-6">
		                        	<label>Password</label>
		                            <input type="password" class="form-control" name="password" required placeholder="Password . . ." />
		                    </div>
		                    <div class="form-group col-md-6">
		                        	<label>Email</label>
		                            <input type="text" name="email" class="form-control" required placeholder="Email . . ." />
		                    </div>
		                    <div class="form-group col-md-6">
		                        	<label>Tanggal Lahir</label>
		                            <input type="date" name="tgl_lahir" class="form-control" required />
		                    </div>
		                    <div class="form-group col-md-12">
		                        	<label>Nomor Telepon</label>
		                            <input type="number" name="nomor_telepon" class="form-control" required placeholder="Nomor Telepon . . ." />
		                    </div>
		                    <div class="form-group col-md-6">
		                        	<label>Alamat</label>
		                            <textarea rows="4" name="alamat" required class="form-control" placeholder="Alamat . . ."></textarea>
		                    </div>
		                    <div class="form-group col-md-6">
		                        	<label>Tentang Anda</label>
		                            <textarea rows="4" name="tentang_penulis" required class="form-control" placeholder="Ceritakan tentang anda . . ."></textarea>
		                    </div>
		                    <div class="form-group col-md-12">
		                        	<label>Foto Profil</label>
		                            <input type="file" name="foto_profil" class="form-control" />
		                    </div>
		                    <input type="submit" class="btn btn-success col-md-8 col-md-offset-2" value="Submit" name="submit">
		                </form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
