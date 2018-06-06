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
										<center><h3 class="panel-title">'.$data->judul.'</h3>
										<p class="panel-subtitle">'.$data->waktu.'</p></center>
										<p>'.$data->isi.'</p>
									';
								}
							?>
										
						</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>