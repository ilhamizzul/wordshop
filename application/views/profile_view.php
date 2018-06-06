<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="<?php echo base_url(); ?>uploads/<?php echo $this->session->userdata('foto_profil') ?>" class="img-circle" alt="Avatar">
										<h3 class="name"><?php echo $this->session->userdata('nama_user'); ?></h3>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-6 stat-item">
												<?php echo $count_tulisan; ?> <span>Tulisan</span>
											</div>
											<div class="col-md-6 stat-item">
												2174 <span>Komentar</span>
											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
											<li>Birthdate <span><?php echo $this->session->userdata('tanggal_lahir'); ?></span></li>
											<li>Mobile <span><?php echo $this->session->userdata('nomor_telepon'); ?></span></li>
											<li>Email <span><?php echo $this->session->userdata('email'); ?></span></li>
										</ul>
									</div>
									<div class="profile-info">
										<h4 class="heading">About</h4>
										<p><?php echo $this->session->userdata('tentang_penulis'); ?></p>
									</div>
									<div class="text-center"><a href="<?php echo base_url() ?>index.php/edit_profile" class="btn btn-primary">Edit Profile</a></div>
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<h4 class="heading">Samuel's Awards</h4>
								<!-- AWARDS -->
								<div class="awards">
									<div class="row">
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<span class="lnr lnr-sun award-icon"></span>
												</div>
												<span>Most Bright Idea</span>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<span class="lnr lnr-clock award-icon"></span>
												</div>
												<span>Most On-Time</span>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<span class="lnr lnr-magic-wand award-icon"></span>
												</div>
												<span>Problem Solver</span>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<span class="lnr lnr-heart award-icon"></span>
												</div>
												<span>Most Loved</span>
											</div>
										</div>
									</div>
									<div class="text-center"><a href="#" class="btn btn-default">See all awards</a></div>
								</div>
								<!-- END AWARDS -->
								<?php 

									if ($count_tulisan != null) {
										foreach ($tulisan as $data) {
											echo '
												<div class="metric">
													<p>
														<span class="number">'.$data->judul.'</span>
														<span class="title">'.$data->waktu.'</span>
													</p>
													<p>'.$data->isi_singkat.'</p>
												</div>
											';
										}
										echo '
											<div class="text-center"><a href="'.base_url().'index.php/semua_tulis" class="btn btn-primary">Lihat Semua Tulisan</a></div>
										';
									} else {
										echo '
											<center>
												<img style="width:25%;height:auto" src="'.base_url().'assets/img/cry.png">
												<h2>Masih Belum Ada Tulisan~</h2>
											</center>
											<div class="text-center"><a href="'.base_url().'index.php/tulis" class="btn btn-primary">Buatlah Tulisan Pertamamu</a></div>
										';
									}
									
										
								?>
											
										
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>