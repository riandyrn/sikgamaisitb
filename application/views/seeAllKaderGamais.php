<div class="panel panel-default">
	<div class="panel-heading" style="text-transform: uppercase; font-weight: bold;">
		<span class="fa fa-users"></span> Kader Gamais ITB
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-12">
				<div class="dataTable_wrapper">
					<table class="table table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>Nama Lengkap</th>
								<th>NIM</th>
								<th>Jurusan</th>
								<th>Angkatan</th>
								<th>Handphone</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($all_kader_gamais as $kader) { ?>
								<tr>
									<td><a href="<?=$base_path;?>seeInfoKader/<?=$kader->id;?>"><?=$kader->nama_lengkap;?></a></td>
									<td><?=$kader->nim;?></td>
									<td><?=$kader->jurusan;?></td>
									<td><?=$kader->angkatan;?></td>
									<td><?=$kader->hp;?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<!-- /.table-responsive -->

			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		
		<!-- scripts -->
		<script>
			$(document).ready(function() {
				$('#dataTables-example').DataTable();
			});
		</script>
		<!-- /.scripts -->
	</div>
</div>