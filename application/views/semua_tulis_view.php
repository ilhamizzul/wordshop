<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<div class="user text-center">
								<img src="<?php echo base_url() ?>uploads/<?php echo $this->session->userdata('foto_profil'); ?>" class="img-circle" alt="Avatar">
								<h2 class="name"><?php echo $this->session->userdata('nama_user'); ?></h2>
							</div>
						</div>
						<div class="panel-body">
							<div class="row">
								<?php 
									foreach ($all_data as $data) {
										echo '
											<div class="col-md-4">
												<div class="metric">
													<p>
														<a href="'.base_url().'index.php/detail/detail_private/'.$data->id_artikel.'">
															<span class="number" style="font-size: 22px;">'.$data->judul.'</span>
														</a>
														<span class="title">'.$data->waktu.'</span>
													</p>
												</div>
											</div>
										';
									}
								?>
								<a href="<?php echo base_url(); ?>index.php/tulis">
									<div class="col-md-4">
										<div class="metric">
											<p>
												<span class="number" style="font-size: 22px;text-align: center">+</span>
												<span class="number" style="font-size: 16px;text-align: center">Tambah Karya</span>
											</p>
										</div>
									</div>	
								</a>	
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>