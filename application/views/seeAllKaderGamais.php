<div id="alert_container"></div>

<div class="panel panel-default">
	<div class="panel-heading" style="text-transform: uppercase; font-weight: bold;">
		<span class="fa fa-users"></span> Kader Gamais ITB
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-12">
				<div class="dataTable_wrapper">
					<table class="table table-bordered table-hover" id="tabel_kader">
						<thead>
							<tr>
								<th>Nama Lengkap</th>
								<th>NIM</th>
								<th>Jurusan</th>
								<th>Angkatan</th>
								<th>Handphone</th>
								<th>Hapus</th>
							</tr>
						</thead>
						<tbody id="tabel_kader_data">
							<?php foreach($all_kader_gamais as $kader) { ?>
								<tr data-id="<?=$kader->id;?>" data-nama="<?=$kader->nama_lengkap;?>">
									<td><a href="<?=$base_path;?>seeInfoKader/<?=$kader->id;?>"><?=$kader->nama_lengkap;?></a></td>
									<td><?=$kader->nim;?></td>
									<td><?=$kader->jurusan;?></td>
									<td><?=$kader->angkatan;?></td>
									<td><?=$kader->hp;?></td>
									<td><a href="#" class="btn-hapus-entri-kader"><span class="glyphicon glyphicon-remove" style="color: red;"></span></a></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<!-- /.table-responsive -->
				
				<!-- modal -->
				<div class="modal fade" id="modal_kader" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-sm">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="modal_kader_label">Hapus Kader</h4>
					  </div>
					  <div class="modal-body">
						<p id="label_hapus_kader">...</p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" id="btn_batal_kader">Batal</button>
						<button type="button" class="btn btn-danger" id="btn_hapus_kader">Hapus</button>
					  </div>
					</div>
				  </div>
				</div>
				
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		
		<!-- scripts -->
		<script src="<?=$assets;?>js/modulseeallkader.js"></script>
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
		<script>
			$(document).ready(function() {
				$('#tabel_kader').DataTable();
			});
			
			
			setupSeeAllKader('<?=$base_path;?>deleteKader_P');
		</script>
		
		<!-- /.scripts -->
	</div>
</div>