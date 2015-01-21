<div id="alert_container">
	<?php if($success) { ?>
		<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<span class="glyphicon glyphicon-ok"></span> <?=$success;?>
		</div>
	<?php } else if($error) { ?>
		<div class="alert alert-warning alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<span class="glyphicon glyphicon-remove"></span> <?=$error;?>
		</div>
	<?php } ?>
</div>

<div class="panel panel-default">
	<div class="panel-heading" style="text-transform: uppercase; font-weight: bold;">
		<span class="fa fa-user"></span>&nbsp; Detail Informasi Kader
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-2">
				<img src="<?=$assets;?>/img/img.jpg" alt="" style="width: 100%; height: auto; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;">
				<p class="text-center" style="margin-top: 5px;">
					<a href="<?=$base_path;?>updateInfoKader" class="btn btn-primary btn-sm btn-block">
						<span class="glyphicon glyphicon-pencil"></span> Ubah Informasi
					</a>
					<a href="#" data-target="#modal_underdev" data-toggle="modal" class="btn btn-primary btn-sm btn-block" style="margin-top: 3px;">
						<span class="glyphicon glyphicon-picture"></span> Upload Foto
					</a>
				</p>
			</div>
			
			<div class="col-md-10">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#informasi_dasar" aria-controls="home" role="tab" data-toggle="tab">Informasi Dasar</a></li>
					<li role="presentation"><a href="#riwayat_organisasi" aria-controls="profile" role="tab" data-toggle="tab">Riwayat Organisasi</a></li>
					<li role="presentation"><a href="#riwayat_kepanitiaan" aria-controls="messages" role="tab" data-toggle="tab">Riwayat Kepanitiaan</a></li>
					<li role="presentation"><a href="#riwayat_pembinaan" aria-controls="settings" role="tab" data-toggle="tab">Riwayat Pembinaan</a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<br>
					<div role="tabpanel" class="tab-pane active" id="informasi_dasar">
						<div class="col-md-3">
							<div class="form-group">
								<label for="">Nama Lengkap:</label>
								<p><?=$info_kader->nama_lengkap;?></p>
							</div>
							<div class="form-group">
								<label for="">Nama Panggilan:</label>
								<p><?=$info_kader->nama_panggilan;?></p>
							</div>								
							<div class="form-group">
								<label for="">NIM:</label> 
								<p><?=$info_kader->nim;?></p>
							</div>
							<div class="form-group">
								<label for="">Jurusan:</label> 
								<p><?=$info_kader->jurusan;?></p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="">Angkatan:</label>
								<p><?=$info_kader->angkatan;?></p>
							</div>
							<div class="form-group">
								<label for="">No HP:</label>
								<p><?=$info_kader->hp;?></p>
							</div>								
							<div class="form-group">
								<label for="">Email:</label> 
								<p><?=$info_kader->email;?></p>
							</div>
							<div class="form-group">
								<label for="">TTL:</label> 
								<p><?=$info_kader->tempat_lahir;?>, <?=date('d-M-Y', strtotime($info_kader->tanggal_lahir));?></p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="">Alamat Libur:</label>
								<p><?=$info_kader->alamat_libur;?></p>
							</div>
							<div class="form-group">
								<label for="">Alamat Bandung:</label>
								<p><?=$info_kader->alamat_bdg;?></p>
							</div>								
							<div class="form-group">
								<label for="">Asal SMA:</label> 
								<p><?=$info_kader->asal_sma;?></p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="">Hobi:</label> 
								<p><?=$info_kader->hobi;?></p>
							</div>
							<div class="form-group">
								<label for="">Kondisi Mentoring:</label>
								<?php 
									switch($info_kader->kondisi_mentoring)
									{
										case 0:
											echo "<p class='text-red'>belum ada kelompok</p>";
											break;
										case 1:
											echo "<p class='text-yellow'>tidak berjalan</p>";
											break;
										case 2:
											echo "<p class='text-green'>sudah mentoring</p>";
											break;
									}
								?>
								
							</div>
							<div class="form-group">
								<label for="">Data Akademik:</label>
								<?php 
									switch($info_kader->data_akademik)
									{
										case 0:
											echo "<p class='text-red'>kurang dari 1</p>";
											break;
										case 1:
											echo "<p class='text-yellow'>diantara 1-2</p>";
											break;
										case 2:
											echo "<p class='text-blue'>diantara 2-3</p>";
											break;	
										case 3:
											echo "<p class='text-green'>diatas 3</p>";
											break;
									}
								?>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="riwayat_organisasi">
						<p>
							<a href="#" class="btn btn-primary btn-sm btn-tambah-entri-organisasi">
								<span class="glyphicon glyphicon-plus"></span> Tambah Entri Baru
							</a>
						</p>
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Tahun</th>
									<th>Organisasi</th>
									<th>Jabatan</th>
									<th class="col-md-1">Ubah</th>
									<th class="col-md-1">Hapus</th>
								</tr>
							</thead>
							<tbody id="tabel_organisasi">
								<?php foreach($riwayat_organisasi as $entry) { ?>
									<tr data-id="<?=$entry->id;?>">
										<td><?=$entry->tahun;?></td>
										<td><?=$entry->organisasi;?></td>
										<td><?=$entry->jabatan;?></td>
										<td><a href="#" class="btn-ubah-entri-organisasi"><span class="glyphicon glyphicon-pencil"></span></a></td>
										<td><a href="#" class="btn-hapus-entri-organisasi"><span class="glyphicon glyphicon-remove" style="color: red;"></span></a></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<div role="tabpanel" class="tab-pane" id="riwayat_kepanitiaan">
						<p>
							<a href="#" class="btn btn-primary btn-sm btn-tambah-entri-kepanitiaan">
								<span class="glyphicon glyphicon-plus"></span> Tambah Entri Baru
							</a>
						</p>
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Tahun</th>
									<th>Kegiatan</th>
									<th>Jabatan</th>
									<th class="col-md-1">Ubah</th>
									<th class="col-md-1">Hapus</th>
								</tr>
							</thead>
							<tbody id="tabel_kepanitiaan">
								<?php foreach($riwayat_kepanitiaan as $entry) { ?>
									<tr data-id="<?=$entry->id;?>">
										<td><?=$entry->tahun;?></td>
										<td><?=$entry->kegiatan;?></td>
										<td><?=$entry->jabatan;?></td>
										<td><a href="#" class="btn-ubah-entri-kepanitiaan"><span class="glyphicon glyphicon-pencil"></span></a></td>
										<td><a href="#" class="btn-hapus-entri-kepanitiaan"><span class="glyphicon glyphicon-remove" style="color: red;"></span></a></td>												
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<div role="tabpanel" class="tab-pane" id="riwayat_pembinaan">
						<p>
							<a href="#" class="btn btn-primary btn-sm btn-tambah-entri-pembinaan">
								<span class="glyphicon glyphicon-plus"></span> Tambah Entri Baru
							</a>
						</p>
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Agenda</th>
									<th class="col-md-1">Ubah</th>
									<th class="col-md-1">Hapus</th>
								</tr>
							</thead>
							<tbody id="tabel_pembinaan">
								<?php foreach($riwayat_pembinaan as $entry) { ?>
									<tr data-id="<?=$entry->id;?>">
										<td><?=$entry->agenda;?></td>
										<td><a href="#" class="btn-ubah-entri-pembinaan"><span class="glyphicon glyphicon-pencil"></span></a></td>
										<td><a href="#" class="btn-hapus-entri-pembinaan"><span class="glyphicon glyphicon-remove" style="color: red;"></span></a></td>												
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		
		<!-- modal -->
		<div class="modal fade" id="modal_pembinaan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-sm">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="modal_pembinaan_label">...</h4>
			  </div>
			  <div class="modal-body">
				<p id="label_hapus_pembinaan">Hapus entri pembinaan?</p>
				<div id="form_pembinaan" class="form-group">
					<label for="">Agenda:</label>
					<input id="txt_agenda_pembinaan" type="text" class="form-control" placeholder="Masukkan agenda pembinaan...">
				</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" id="btn_batal_pembinaan">Batal</button>
				<button type="button" class="btn btn-primary" id="btn_tambah_pembinaan">Tambah</button>
				<button type="button" class="btn btn-primary" id="btn_ubah_pembinaan">Simpan</button>
				<button type="button" class="btn btn-danger" id="btn_hapus_pembinaan">Hapus</button>
			  </div>
			</div>
		  </div>
		</div>
		
		<div class="modal fade" id="modal_kepanitiaan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-sm">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="modal_kepanitiaan_label">...</h4>
			  </div>
			  <div class="modal-body">
				<p id="label_hapus_kepanitiaan">Hapus entri kepanitiaan?</p>
				<div id="form_kepanitiaan">
					<div class="form-group">
						<label for="">Tahun:</label>
						<input id="txt_tahun_kepanitiaan" type="text" class="form-control" placeholder="Masukkan tahun kepanitiaan...">
					</div>
					<div class="form-group">
						<label for="">Kegiatan:</label>
						<input id="txt_kegiatan_kepanitiaan" type="text" class="form-control" placeholder="Masukkan kegiatan kepanitiaan...">
					</div>
					<div class="form-group">
						<label for="">Jabatan:</label>
						<input id="txt_jabatan_kepanitiaan" type="text" class="form-control" placeholder="Masukkan jabatan kepanitiaan...">
					</div>
				</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" id="btn_batal_kepanitiaan">Batal</button>
				<button type="button" class="btn btn-primary" id="btn_tambah_kepanitiaan">Tambah</button>
				<button type="button" class="btn btn-primary" id="btn_ubah_kepanitiaan">Simpan</button>
				<button type="button" class="btn btn-danger" id="btn_hapus_kepanitiaan">Hapus</button>
			  </div>
			</div>
		  </div>
		</div>

		<div class="modal fade" id="modal_organisasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-sm">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="modal_organisasi_label">...</h4>
			  </div>
			  <div class="modal-body">
				<p id="label_hapus_organisasi">Hapus entri organisasi?</p>
				<div id="form_organisasi">
					<div class="form-group">
						<label for="">Tahun:</label>
						<input id="txt_tahun_organisasi" type="text" class="form-control" placeholder="Masukkan tahun organisasi...">
					</div>
					<div class="form-group">
						<label for="">Organisasi:</label>
						<input id="txt_organisasi_organisasi" type="text" class="form-control" placeholder="Masukkan nama organisasi...">
					</div>
					<div class="form-group">
						<label for="">Jabatan:</label>
						<input id="txt_jabatan_organisasi" type="text" class="form-control" placeholder="Masukkan jabatan organisasi...">
					</div>
				</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" id="btn_batal_organisasi">Batal</button>
				<button type="button" class="btn btn-primary" id="btn_tambah_organisasi">Tambah</button>
				<button type="button" class="btn btn-primary" id="btn_ubah_organisasi">Simpan</button>
				<button type="button" class="btn btn-danger" id="btn_hapus_organisasi">Hapus</button>
			  </div>
			</div>
		  </div>
		</div>			
		<!-- / .modal -->
		
		<!-- scripts -->
		<script>
			function sendSuccess(msg)
			{
				$( '#alert_container' ).html
				(
					"<div class='alert alert-success alert-dismissable'>" +
						"<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>" +
						"<span class='glyphicon glyphicon-ok'></span> " + msg +
					"</div>"
				);
			}
			
			function sendError(msg)
			{
				$( '#alert_container' ).html
				(
					"<div class='alert alert-danger alert-dismissable'>" +
						"<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>" +
						"<span class='glyphicon glyphicon-remove'></span> " + msg +
					"</div>"
				);
			}
		</script>
		<script src="<?=$assets;?>/js/modulorganisasi.js"></script>
		<script src="<?=$assets;?>/js/modulkepanitiaan.js"></script>
		<script src="<?=$assets;?>/js/modulpembinaan.js"></script>
		<script>
			setupOrganisasi('<?=$base_path;?>addOrganisasi_P', '<?=$base_path;?>updateOrganisasi_P', '<?=$base_path;?>deleteOrganisasi_P');
			setupKepanitiaan('<?=$base_path;?>addKepanitiaan_P', '<?=$base_path;?>updateKepanitiaan_P', '<?=$base_path;?>deleteKepanitiaan_P');
			setupPembinaan('<?=$base_path;?>addPembinaan_P', '<?=$base_path;?>updatePembinaan_P', '<?=$base_path;?>deletePembinaan_P');
			
			setCtxIdPembinaan(1);
			setCtxIdOrganisasi(1);
			setCtxIdPembinaan(1);
		</script>
		<!-- /.scripts -->
	</div>
</div>