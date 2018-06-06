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
				<div class="auth-box2 lockscreen clearfix">
					<div class="content">
						<h1 class="sr-only">Klorofil - Free Bootstrap dashboard</h1>
						<div class="logo text-center"><a href="<?php echo base_url(); ?>index.php/dashboard"><img src="<?php echo base_url(); ?>assets/img/logo-dark.png" alt="Klorofil Logo"></a></div>
						<h2 style="text-align: center">EDIT PROFIL</h2>
						<form method="post" action="<?php  echo base_url() ?>index.php/surat_masuk/insert" enctype="multipart/form-data">
		                	<div class="form-group col-md-12">
		                        	<label>Nama User</label>
		                            <input type="text" class="form-control" name="nomor_surat" required placeholder="Nama User . . ." />
		                    </div>
		                    <div class="form-group col-md-6">
		                        	<label>Username</label>
		                            <input type="text" class="form-control" name="pengirim" required placeholder="Username . . ." />
		                    </div>
		                    <div class="form-group col-md-6">
		                        	<label>Password</label>
		                            <input type="password" class="form-control" name="penerima" required placeholder="Password . . ." />
		                    </div>
		                    <div class="form-group col-md-6">
		                        	<label>Email</label>
		                            <input type="text" name="tgl_kirim" class="form-control" required placeholder="Email . . ." />
		                    </div>
		                    <div class="form-group col-md-6">
		                        	<label>Tanggal Lahir</label>
		                            <input type="date" name="tgl_terima" class="form-control" required />
		                    </div>
		                    <div class="form-group col-md-12">
		                        	<label>Alamat</label>
		                            <textarea rows="4" name="perihal" required class="form-control" placeholder="Alamat . . ."></textarea>
		                    </div>
		                    <div class="form-group col-md-12">
		                        	<label>Foto Profil</label>
		                            <input type="file" name="file_surat" class="form-control" required />
		                    </div>
		                    <div class="form-group col-md-12">
		                        	<label>Tentang Anda</label>
		                            <textarea rows="4" name="perihal" required class="form-control" placeholder="Tentang Anda . . ."></textarea>
		                    </div>

		                    <input type="submit" class="btn btn-success col-md-8 col-md-offset-2" value="Submit" name="">
		                    <a href="<?php echo base_url() ?>index.php/profile" class="btn btn-primary col-md-8 col-md-offset-2"> Kembali </a>
		                </form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
