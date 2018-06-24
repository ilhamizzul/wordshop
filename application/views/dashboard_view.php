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
							<h3 class="panel-title">Weekly Overview</h3>
							<p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<?php 
									if ($count_tulisan != null || $tulisan != null) {
										foreach ($tulisan as $data) {
											echo '
												<div class="col-md-12">
													<div class="metric">
														<p>
															<img src="'.base_url().'uploads/'.$data->foto_profil.'" style="padding-right: 12px;max-width:7%;height:auto;" class="img-circle pull-left" alt="Avatar">
															<span class="number"><a href="'.base_url().'index.php/detail/detail_artikel/'.$data->id_artikel.'">'.$data->judul.'</a></span>
															<span class="title">'.$data->waktu.'</span>
														</p>
														<p>'.$data->isi_singkat.'</p>
													</div>
												</div>
											';
										}
									} else {
										echo '
											<div class="col-md-12">
													<center>
														<img style="width:25%;height:auto" src="'.base_url().'assets/img/cry.png">
														<h2>Masih Belum Ada Tulisan~</h2>
													</center>
											</div>	
										';
									}
								?>
												
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>