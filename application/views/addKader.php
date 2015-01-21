<div class="panel panel-default">
	<div class="panel-heading" style="text-transform: uppercase; font-weight: bold;">
		<span class="fa fa-plus-circle"></span> Tambah Data Kader
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Nama Lengkap:</label>
					<input id="nama_lengkap" type="text" class="form-control" placeholder="Masukkan nama lengkap disini...">
				</div>
				<div class="form-group">
					<label for="">Nama Panggilan:</label>
					<input id="nama_panggilan" type="text" class="form-control" placeholder="Masukkan nama panggilan disini...">
				</div>								
				<div class="form-group">
					<label for="">NIM:</label> 
					<input id="nim" type="text" class="form-control" placeholder="Masukkan nim disini...">
				</div>
				<div class="form-group">
					<label for="">Jurusan:</label> 
					<input id="jurusan" type="text" class="form-control" placeholder="Masukkan jurusan disini...">
				</div>
				
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Angkatan:</label>
					<input id="angkatan" type="text" class="form-control" placeholder="mis. 2012">
				</div>
				<div class="form-group">
					<label for="">No HP:</label>
					<input id="hp" type="text" class="form-control" placeholder="mis. 081570397xx">
				</div>								
				<div class="form-group">
					<label for="">Email:</label> 
					<input id="email" type="text" class="form-control" placeholder="mis. someone@gmail.com">
				</div>
				<div class="form-group">
					<label for="">Tempat Lahir:</label> 
					<input id="tempat_lahir" type="text" class="form-control" placeholder="Masukkan tempat lahir disini...">
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Tanggal Lahir:</label> 
					<input id="tanggal_lahir" type="text" class="form-control" placeholder="Masukkan tanggal lahir disini...">
				</div>
				<div class="form-group">
					<label for="">Alamat Libur:</label>
					<textarea name="" id="alamat_libur" cols="30" rows="3" class="form-control" placeholder="Masukkan alamat libur disini..."></textarea>
				</div>
				<div class="form-group">
					<label for="">Alamat Bandung:</label>
					<textarea name="" id="alamat_bdg" cols="30" rows="3" class="form-control" placeholder="Masukkan alamat bandung disini..."></textarea>
				</div>														
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Asal SMA:</label> 
					<input id="asal_sma" type="text" class="form-control" placeholder="Masukkan asal sma disini...">
				</div>
				<div class="form-group">
					<label for="">Hobi:</label> 
					<input id="hobi" type="text" class="form-control" placeholder="Masukkan hobi disini...">
				</div>
				<div class="form-group">
					<label for="">Kondisi Mentoring:</label>
					<select name="" id="kondisi_mentoring" class="form-control">
						<option value="0">belum ada kelompok</option>
						<option value="1">tidak berjalan</option>
						<option value="2">sudah mentoring</option>
					</select>
				</div>
				<div class="form-group">
					<label for="">Data Akademik:</label>
					<select name="" id="data_akademik" class="form-control">
						<option value="0">kurang dari 1</option>
						<option value="1">diantara 1-2</option>
						<option value="2">diantara 2-3</option>
						<option value="3">diatas 3</option>
					</select>
				</div>
			</div>
			<div class="col-md-12">
				<a id="btn_simpan_entry" href="#" class="btn btn-primary btn-block" style="padding: 18px;">
					<span class="fa fa-save"></span> Simpan Data
				</a>
			</div>
		</div>
		<!-- /.row -->
		
		<!-- modals -->
		<div class="modal fade" id="modal_konfirmasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title" id="modal_organisasi_label">Simpan Data?</h3>
			  </div>
			  <div class="modal-body">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Nama Lengkap:</label>
							<p id="nama_lengkap_k"></p>
						</div>
						<div class="form-group">
							<label for="">Nama Panggilan:</label>
							<p id="nama_panggilan_k"></p>
						</div>								
						<div class="form-group">
							<label for="">NIM:</label> 
							<p id="nim_k"></p>
						</div>
						<div class="form-group">
							<label for="">Jurusan:</label> 
							<p id="jurusan_k"></p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Angkatan:</label>
							<p id="angkatan_k"></p>
						</div>
						<div class="form-group">
							<label for="">No HP:</label>
							<p id="hp_k"></p>
						</div>								
						<div class="form-group">
							<label for="">Email:</label> 
							<p id="email_k"></p>
						</div>
						<div class="form-group">
							<label for="">TTL:</label> 
							<p id="ttl_k"></p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Alamat Libur:</label>
							<p id="alamat_libur_k"></p>
						</div>
						<div class="form-group">
							<label for="">Alamat Bandung:</label>
							<p id="alamat_bdg_k"></p>
						</div>								
						<div class="form-group">
							<label for="">Asal SMA:</label> 
							<p id="asal_sma_k"></p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Hobi:</label>
							<p id="hobi_k"></p>
						</div>
						<div class="form-group">
							<label for="">Kondisi Mentoring:</label>
							<p id="kondisi_mentoring_k">sudah berjalan</p>
						</div>
						<div class="form-group">
							<label for="">Data Akademik:</label>
							<p id="data_akademik_k">diatas 3</p>
						</div>
					</div>
				</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" id="btn_batal" data-dismiss="modal">Batal</button>
				<a href="#" class="btn btn-primary" id="btn_simpan">Simpan</a>
			  </div>
			</div>
		  </div>
		</div>

		<div class="modal fade" id="modal_informasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title text-red" id="modal_organisasi_label"><span class="glyphicon glyphicon-remove"></span> Data Tidak Lengkap</h4>
			  </div>
			  <div class="modal-body">
				<p>Data yang diisikan tidak lengkap, pastikan seluruh data telah terisi.</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
			  </div>
			</div>
		  </div>
		</div>
		<!-- /.modals -->

		<!-- scripts -->
		<script src="<?=$assets;?>js/modulformaddkader.js"></script>
		<script>
			setupAddKader('<?=$base_path;?>addKader_P', '<?=$base_path;?>seeInfoKader');
		</script>
		<!-- ./scripts -->					
	</div>
</div>
