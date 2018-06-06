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
							<div class="container-fluid option pull-right">
								<button type="button" data-toggle="modal" data-target="#edit" class="">
									<i class="lnr lnr-pencil"></i>
									<span>Edit</span>
								</button>
								<button type="button" data-toggle="modal" data-target="#hapus" class="">
									<i class="lnr lnr-trash"></i>
									<span>Hapus</span>
								</button>
							</div><br>
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

						<div class="panel-heading">
							<form method="post" action="">
								<textarea class="form-control" placeholder="komentar . . . " rows="3" name="komentar"></textarea>
								<center>
									<input style="margin-top: 10px;padding-bottom: 15px:width:100%" type="submit" class="btn btn-lg btn-info" name="">
								</center>	
							</form>
							<br>
							<div class="metric" style="margin-bottom: 5px;">
								<p>
									<img src="<?php echo base_url(); ?>assets/img/cry.png" style="padding-right: 12px;width: 10%;height:auto;" class="img-circle pull-left" alt="Avatar">
									<span class="number">Ilham Izzul Hadyan</span>
									<span class="title">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic </span>
								</p>
							</div>
							<div class="metric">
								<p>
									<img src="<?php echo base_url(); ?>assets/img/cry.png" style="padding-right: 12px;width: 10%;height:auto;" class="img-circle pull-left" alt="Avatar">
									<span class="number">Ilham Izzul Hadyan</span>
									<span class="title">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic </span>
								</p>
							</div>

						</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
					<div class="modal fade" id="hapus" tabindex="-1" role="dialog">
					    <div class="modal-dialog" role="document">
					        <div class="modal-content">
					            <div class="modal-header">
					                <h4 class="modal-title" id="defaultModalLabel">Hapus Artikel</h4>
					            </div>
					            <div class="modal-body">
					                Apakah Anda Yakin Ingin Menghapus Artikel Ini?
					            </div>
					            <div class="modal-footer">
					                <a href="<?php echo base_url() ?>index.php/detail/hapus/<?php echo $this->uri->segment(3) ?>" class="btn btn-danger btn-xs">hapus</a>
					                <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Tutup</button>
					            </div>
					        </div>
					    </div>
					</div> 

					<div class="modal fade" id="edit" tabindex="-1" role="dialog">
					    <div class="modal-dialog modal-lg" role="document">
					        <div class="modal-content col-md-12">
					            <div class="modal-header">
					                <h4 class="modal-title" id="defaultModalLabel">Ubah Artikel</h4>
					            </div>
					            <div class="modal-body col-md-12">
					            	<?php 
					            		foreach ($detail_artikel as $data) {
					            			echo '
					            				<form method="post" action="'.base_url().'index.php/detail/ubah/'.$this->uri->segment(3).'">
								                	<div class="form-group col-md-12">
								                        	<label>Judul</label>
								                            <input type="text" class="form-control" required name="judul" value="'.$data->judul.'" placeholder="Judul . . ." />
								                    </div>
								                    <div class="form-group col-md-12">
								                        	<label>Isi Singkat</label>
								                            <textarea rows="4" name="isi_singkat" required class="form-control">'.$data->isi_singkat.'</textarea>
								                    </div>
								                    <div class="form-group col-md-12">
								                        	<label>Isi</label>
															<textarea rows="4" name="isi" required class="form-control">'.$data->isi.'</textarea>
								                    </div>
								                    <input type="submit" class="btn btn-success col-md-6 col-md-offset-3" value="Submit" name="">
								                    <button type="button" class="btn btn-info col-md-6 col-md-offset-3" data-dismiss="modal">Tutup</button>

								                </form>
					            			';
					            		}
					            	?>
								                
					            </div>
					        </div>
					    </div>
					</div>
				</div>