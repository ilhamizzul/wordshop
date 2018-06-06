<div class="main-content">
				<div class="container-fluid">
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
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading" style="text-align: center">
							<h2 class="panel-title">Make Something Creative</h2>
							<p class="panel-subtitle">Let Your Imagination Flow</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<form method="post" action="<?php echo base_url() ?>index.php/tulis/tambah">
									<div class="form-group">
										<label>Judul</label>
										<input type="text" class="form-control" required name="judul">
									</div>
									<div class="form-group">
										<label>Isi Singkat</label>
										<textarea rows="4" name="isi_singkat" required class="form-control"></textarea>
									</div>
									<div class="form-group">
										<label>Isi</label>
										<textarea id="tinymce" name="isi" required class="form-control">
			                            </textarea>
									</div>
									<input type="submit" class="btn btn-success col-md-6 col-md-offset-3" value="Submit" name="submit">
								</form>
									
		                            
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>