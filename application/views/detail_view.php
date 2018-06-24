<div class="main-content">
	<div class="container-fluid">
		<?php 
			$success = $this->session->flashdata('success');
			$failed = $this->session->flashdata('failed');

			if (!empty($failed)) {
				echo '
					<div class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<?php
								foreach ($detail_artikel as $data) {
									echo '
										<center>
										<img src="'.base_url().'uploads/'.$data->foto_profil.'" class="img-circle" alt="Avatar">
										<h3 class="panel-title">'.$data->judul.'</h3>
										<p class="panel-subtitle">'.$data->waktu.'</p></center>
										<p>'.$data->isi.'</p>
									';
								}
							?>
										
						</div>

						<div class="panel-heading">
							<form method="post" action="<?php echo base_url() ?>index.php/detail/add_komentar/<?php echo $this->uri->segment(3) ?>">
								<textarea class="form-control" placeholder="komentar . . . " rows="3" name="komentar"></textarea>
								<center>
									<input style="margin-top: 10px;padding-bottom: 15px:width:100%" type="submit" class="btn btn-lg btn-info" name="">
								</center>	
							</form>
							<br>
							<?php 
								foreach ($komentar as $data) {
									echo '
										<div class="metric" style="margin-bottom: 5px;">
											<p>
												<img src="'.base_url().'uploads/'.$data->foto_profil.'" style="padding-right: 12px;width: 8%;height:auto;" class="img-circle pull-left" alt="Avatar">
												<span class="number">'.$data->nama_user.'</span>
												<span class="title">'.$data->isi_komentar.'</span>
											</p>
										</div>
									';
								}
							?>

						</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
					
				</div>