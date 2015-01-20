<div id="alert_container">
	<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<span class="glyphicon glyphicon-ok"></span> Data kader baru berhasil ditambahkan
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading" style="text-transform: uppercase; font-weight: bold;">
		<span class="fa fa-user"></span>&nbsp; Detail Informasi Kader
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-2">
				<img src="img.jpg" alt="" style="width: 100%; height: auto; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;">
				<p class="text-center" style="margin-top: 5px;">
					<a href="addKader.html" class="btn btn-primary btn-sm btn-block">
						<span class="glyphicon glyphicon-pencil"></span> Ubah Informasi
					</a>
					<a href="#" class="btn btn-primary btn-sm btn-block" style="margin-top: 3px;">
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
								<p>Riandy Rahman Nugraha</p>
							</div>
							<div class="form-group">
								<label for="">Nama Panggilan:</label>
								<p>Riandy</p>
							</div>								
							<div class="form-group">
								<label for="">NIM:</label> 
								<p>13511014</p>
							</div>
							<div class="form-group">
								<label for="">Jurusan:</label> 
								<p>Teknik Informatika</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="">Angkatan:</label>
								<p>2011</p>
							</div>
							<div class="form-group">
								<label for="">No HP:</label>
								<p>085793174788</p>
							</div>								
							<div class="form-group">
								<label for="">Email:</label> 
								<p>riandyrn@gmail.com</p>
							</div>
							<div class="form-group">
								<label for="">TTL:</label> 
								<p>Semarang, 26-Oct-1993</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="">Alamat Libur:</label>
								<p>Komp. Graha Alam Raya W2/4, Margaluyu, Buah Batu, Bandung</p>
							</div>
							<div class="form-group">
								<label for="">Alamat Bandung:</label>
								<p>Komp. Graha Alam Raya W2/4, Margaluyu, Buah Batu, Bandung</p>
							</div>								
							<div class="form-group">
								<label for="">Asal SMA:</label> 
								<p>SMA Negeri 3 Bandung</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="">Hobi:</label> 
								<p>Baca buku, main game</p>
							</div>
							<div class="form-group">
								<label for="">Kondisi Mentoring:</label>
								<p style="color: green;">sudah berjalan</p>
							</div>
							<div class="form-group">
								<label for="">Data Akademik:</label>
								<p style="color: green;">diatas 3</p>
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
								<tr>
									<td>2014</td>
									<td>Gamais ITB</td>
									<td>Kepala Divisi G-TECH</td>
									<td><a href="#" class="btn-ubah-entri-organisasi"><span class="glyphicon glyphicon-pencil"></span></a></td>
									<td><a href="#" class="btn-hapus-entri-organisasi"><span class="glyphicon glyphicon-remove" style="color: red;"></span></a></td>
								</tr>
								<tr>
									<td>2012</td>
									<td>HMIF</td>
									<td>Anggota biasa</td>
									<td><a href="#" class="btn-ubah-entri-organisasi"><span class="glyphicon glyphicon-pencil"></span></a></td>
									<td><a href="#" class="btn-hapus-entri-organisasi"><span class="glyphicon glyphicon-remove" style="color: red;"></span></a></td>
								</tr>
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
								<tr>
									<td>2014</td>
									<td>LMD 170</td>
									<td>Kepala Divisi Akomtrans</td>
									<td><a href="#" class="btn-ubah-entri-kepanitiaan"><span class="glyphicon glyphicon-pencil"></span></a></td>
									<td><a href="#" class="btn-hapus-entri-kepanitiaan"><span class="glyphicon glyphicon-remove" style="color: red;"></span></a></td>												
								</tr>
								<tr>
									<td>2014</td>
									<td>LMD 171</td>
									<td>Anggota biasa</td>
									<td><a href="#" class="btn-ubah-entri-kepanitiaan"><span class="glyphicon glyphicon-pencil"></span></a></td>
									<td><a href="#" class="btn-hapus-entri-kepanitiaan"><span class="glyphicon glyphicon-remove" style="color: red;"></span></a></td>
								</tr>
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
								<tr>
									<td>Simfoni Day 1</td>
									<td><a href="#" class="btn-ubah-entri-pembinaan"><span class="glyphicon glyphicon-pencil"></span></a></td>
									<td><a href="#" class="btn-hapus-entri-pembinaan"><span class="glyphicon glyphicon-remove" style="color: red;"></span></a></td>												
								</tr>
								<tr>
									<td>Simfoni Day 2</td>
									<td><a href="#" class="btn-ubah-entri-pembinaan"><span class="glyphicon glyphicon-pencil"></span></a></td>
									<td><a href="#" class="btn-hapus-entri-pembinaan"><span class="glyphicon glyphicon-remove" style="color: red;"></span></a></td>
								</tr>
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
		<script src="modulorganisasi.js"></script>
		<script src="modulkepanitiaan.js"></script>
		<script src="modulpembinaan.js"></script>
		<script>
			setupOrganisasi();
			setupKepanitiaan();
			setupPembinaan();
			
			setCtxIdPembinaan(1);
			setCtxIdOrganisasi(1);
			setCtxIdPembinaan(1);
		</script>
		<!-- /.scripts -->
	</div>
</div>