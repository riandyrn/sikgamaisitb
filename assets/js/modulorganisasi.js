/*** CRUD Riwayat Pembinaan ***/

var currentElementOrganisasi;
var ctxIdOrganisasi;

function setCtxIdOrganisasi(val)
{
	/* 
		fungsi ini untuk set id yang diperlukan
		untuk proses CRUD kepanitiaan
	*/
	
	ctxIdOrganisasi = val;
}

function showButtonOrganisasi(id_btn)
{
	switch(id_btn)
	{
		case 0:
			$( '#btn_tambah_organisasi' ).show();
			$( '#btn_ubah_organisasi' ).hide();
			$( '#btn_hapus_organisasi' ).hide();
			$( '#label_hapus_organisasi' ).hide();
			$( '#form_organisasi' ).show();
			break;
		case 1:
			$( '#btn_tambah_organisasi' ).hide();
			$( '#btn_ubah_organisasi' ).show();
			$( '#btn_hapus_organisasi' ).hide();
			$( '#label_hapus_organisasi' ).hide();
			$( '#form_organisasi' ).show();
			break;
		case 2:
			$( '#btn_tambah_organisasi' ).hide();
			$( '#btn_ubah_organisasi' ).hide();
			$( '#btn_hapus_organisasi' ).show();
			$( '#label_hapus_organisasi' ).show();
			$( '#form_organisasi' ).hide();
			break;
	}
}

function addOrganisasi(tahun, organisasi, jabatan)
{
	element = $(
		"<tr>" +
			"<td>" + tahun + "</td>" +
			"<td>" + organisasi + "</td>" +
			"<td>" + jabatan +"</td>" +
			"<td><a href='#' class='btn-ubah-entri-organisasi'><span class='glyphicon glyphicon-pencil'></span></a></td>" +
			"<td><a href='#' class='btn-hapus-entri-organisasi'><span class='glyphicon glyphicon-remove' style='color: red;'></span></a></td>" +											
		"</tr>"
	);
	
	//ini nanti ditambahin fungsi post
	sendSuccess('Entri organisasi berhasil ditambahkan');
	
	$( '#tabel_organisasi' ).prepend(element);
	applyUbahHapusListenerOrganisasi(element);
}

function updateOrganisasi(element, tahun, organisasi, jabatan)
{
	//ini nanti ditambahin fungsi post
	sendSuccess('Entri organisasi berhasil diubah');
	
	$(element).children('td:nth-child(1)').html(tahun);
	$(element).children('td:nth-child(2)').html(organisasi);
	$(element).children('td:nth-child(3)').html(jabatan);
}

function removeOrganisasi(element)
{
	//ini nanti ditambahin fungsi post
	sendSuccess('Entri organisasi berhasil dihapus');
	
	$(element).remove();
}				

function closeModalOrganisasi()
{
	$('#modal_organisasi').modal('hide');
	clearModalOrganisasi();
}

function clearModalOrganisasi()
{
	$('#txt_tahun_organisasi').val('');
	$('#txt_organisasi_organisasi').val('');
	$('#txt_jabatan_organisasi').val('');
}

function applyUbahHapusListenerOrganisasi(element)
{
	/*
		dia bakalan select elemen yg ada di bawah tr
	*/
	
	$(element).find( '.btn-ubah-entri-organisasi' ).click(function(){						
		// set isi txt_agenda_organisasi dulu
		currentElementOrganisasi = $(this).parents('tr');
		currTahun = $(currentElementOrganisasi).children('td:nth-child(1)').text();
		currOrganisasi = $(currentElementOrganisasi).children('td:nth-child(2)').text();
		currJabatan = $(currentElementOrganisasi).children('td:nth-child(3)').text();
		
		$( '#txt_tahun_organisasi' ).val(currTahun);
		$( '#txt_organisasi_organisasi' ).val(currOrganisasi);
		$( '#txt_jabatan_organisasi' ).val(currJabatan);
		
		// ubah interface label
		$('#modal_organisasi_label').html('Ubah Organisasi');
		showButtonOrganisasi(1);
		
		// show modal
		$('#modal_organisasi').modal('show');
	});

	$(element).find( '.btn-hapus-entri-organisasi' ).click(function(){
		$('#modal_organisasi_label').html('Hapus Organisasi');
		showButtonOrganisasi(2);
		$('#modal_organisasi').modal('show');
		currentElementOrganisasi = $(this).parents('tr');
	});
	
}

function setupOrganisasi()
{	
	$( '.btn-tambah-entri-organisasi' ).click(function(){
		$('#modal_organisasi_label').html('Tambah Organisasi');
		showButtonOrganisasi(0);
		clearModalOrganisasi();
		$('#modal_organisasi').modal('show')
	});
	
	$( '#btn_tambah_organisasi' ).click(function(){
		tahun = $( '#txt_tahun_organisasi' ).val();
		organisasi = $( '#txt_organisasi_organisasi' ).val();
		jabatan = $( '#txt_jabatan_organisasi' ).val();
		addOrganisasi(tahun, organisasi, jabatan);
		closeModalOrganisasi();
	});
	
	$( '#btn_ubah_organisasi' ).click(function(){
		tahun = $( '#txt_tahun_organisasi' ).val();
		organisasi = $( '#txt_organisasi_organisasi' ).val();
		jabatan = $( '#txt_jabatan_organisasi' ).val();
		updateOrganisasi(currentElementOrganisasi, tahun, organisasi, jabatan);
		closeModalOrganisasi();
	});
	
	$( '#btn_hapus_organisasi' ).click(function(){
		removeOrganisasi(currentElementOrganisasi);
		closeModalOrganisasi();
	});
	
	$( '#btn_batal_organisasi' ).click(function(){
		closeModalOrganisasi();
	});
	
	applyUbahHapusListenerOrganisasi('#tabel_organisasi > tr');
}
