/*** CRUD Riwayat Kepanitiaan ***/

var currentElementKepanitiaan;
var ctxIdKepanitiaan;

var pathAddKepanitiaan;
var pathUpdateKepanitiaan;
var pathDeleteKepanitiaan;

var postKepanitiaan =
{
	tahun: '',
	kegiatan: '',
	jabatan: ''
}

function setCtxIdKepanitiaan(val)
{
	/* 
		fungsi ini untuk set id yang diperlukan
		untuk proses CRUD kepanitiaan
	*/
	
	ctxIdKepanitiaan = val;
}

function showButtonKepanitiaan(id_btn)
{
	switch(id_btn)
	{
		case 0:
			$( '#btn_tambah_kepanitiaan' ).show();
			$( '#btn_ubah_kepanitiaan' ).hide();
			$( '#btn_hapus_kepanitiaan' ).hide();
			$( '#label_hapus_kepanitiaan' ).hide();
			$( '#form_kepanitiaan' ).show();
			break;
		case 1:
			$( '#btn_tambah_kepanitiaan' ).hide();
			$( '#btn_ubah_kepanitiaan' ).show();
			$( '#btn_hapus_kepanitiaan' ).hide();
			$( '#label_hapus_kepanitiaan' ).hide();
			$( '#form_kepanitiaan' ).show();
			break;
		case 2:
			$( '#btn_tambah_kepanitiaan' ).hide();
			$( '#btn_ubah_kepanitiaan' ).hide();
			$( '#btn_hapus_kepanitiaan' ).show();
			$( '#label_hapus_kepanitiaan' ).show();
			$( '#form_kepanitiaan' ).hide();
			break;
	}
}

function addKepanitiaan(tahun, kegiatan, jabatan)
{
	postKepanitiaan.tahun = tahun;
	postKepanitiaan.kegiatan = kegiatan;
	postKepanitiaan.jabatan = jabatan;
	
	$.post(pathAddKepanitiaan, postKepanitiaan, function(id){
		console.log(id);
		element = $(
			"<tr data-id=" + id + ">" +
				"<td>" + tahun + "</td>" +
				"<td>" + kegiatan + "</td>" +
				"<td>" + jabatan +"</td>" +
				"<td><a href='#' class='btn-ubah-entri-kepanitiaan'><span class='glyphicon glyphicon-pencil'></span></a></td>" +
				"<td><a href='#' class='btn-hapus-entri-kepanitiaan'><span class='glyphicon glyphicon-remove' style='color: red;'></span></a></td>" +											
			"</tr>"
		);
		
		sendSuccess('Entri kepanitiaan berhasil ditambahkan');
		$( '#tabel_kepanitiaan' ).prepend(element);
		applyUbahHapusListenerKepanitiaan(element);
	});
}

function updateKepanitiaan(element, tahun, kegiatan, jabatan)
{
	postKepanitiaan.tahun = tahun;
	postKepanitiaan.kegiatan = kegiatan;
	postKepanitiaan.jabatan = jabatan;
	
	id_entry = $(element).data('id');
	
	$.post(pathUpdateKepanitiaan + '/' + id_entry, postKepanitiaan, function(id){		
		$(element).children('td:nth-child(1)').html(tahun);
		$(element).children('td:nth-child(2)').html(kegiatan);
		$(element).children('td:nth-child(3)').html(jabatan);
		
		sendSuccess('Entri kepanitiaan berhasil diubah');
	});
}

function removeKepanitiaan(element)
{
	//ini nanti ditambahin fungsi post
	id_entry = $(element).data('id');
	
	$.post(pathDeleteKepanitiaan + '/' + id_entry, '', function(){
		sendSuccess('Entri kepanitiaan berhasil dihapus');		
		$(element).remove();
	});
}				

function closeModalKepanitiaan()
{
	$('#modal_kepanitiaan').modal('hide');
	clearModalKepanitiaan();
}

function clearModalKepanitiaan()
{
	$('#txt_tahun_kepanitiaan').val('');
	$('#txt_kegiatan_kepanitiaan').val('');
	$('#txt_jabatan_kepanitiaan').val('');
}

function applyUbahHapusListenerKepanitiaan(element)
{
	/*
		dia bakalan select elemen yg ada di bawah tr
	*/
	
	$(element).find( '.btn-ubah-entri-kepanitiaan' ).click(function(){						
		// set isi txt_agenda_kepanitiaan dulu
		currentElementKepanitiaan = $(this).parents('tr');
		currTahun = $(currentElementKepanitiaan).children('td:nth-child(1)').text();
		currKegiatan = $(currentElementKepanitiaan).children('td:nth-child(2)').text();
		currJabatan = $(currentElementKepanitiaan).children('td:nth-child(3)').text();
		
		$( '#txt_tahun_kepanitiaan' ).val(currTahun);
		$( '#txt_kegiatan_kepanitiaan' ).val(currKegiatan);
		$( '#txt_jabatan_kepanitiaan' ).val(currJabatan);
		
		// ubah interface label
		$('#modal_kepanitiaan_label').html('Ubah Kepanitiaan');
		showButtonKepanitiaan(1);
		
		// show modal
		$('#modal_kepanitiaan').modal('show');
	});

	$(element).find( '.btn-hapus-entri-kepanitiaan' ).click(function(){
		$('#modal_kepanitiaan_label').html('Hapus Kepanitiaan');
		showButtonKepanitiaan(2);
		$('#modal_kepanitiaan').modal('show');
		currentElementKepanitiaan = $(this).parents('tr');
	});
	
}

function setupKepanitiaan(add, update, del)
{	
	pathAddKepanitiaan = add;
	pathUpdateKepanitiaan = update;
	pathDeleteKepanitiaan = del;
	
	$( '.btn-tambah-entri-kepanitiaan' ).click(function(){
		$('#modal_kepanitiaan_label').html('Tambah Kepanitiaan');
		showButtonKepanitiaan(0);
		clearModalKepanitiaan();
		$('#modal_kepanitiaan').modal('show')
	});
	
	$( '#btn_tambah_kepanitiaan' ).click(function(){
		tahun = $( '#txt_tahun_kepanitiaan' ).val();
		kegiatan = $( '#txt_kegiatan_kepanitiaan' ).val();
		jabatan = $( '#txt_jabatan_kepanitiaan' ).val();
		addKepanitiaan(tahun, kegiatan, jabatan);
		closeModalKepanitiaan();
	});
	
	$( '#btn_ubah_kepanitiaan' ).click(function(){
		tahun = $( '#txt_tahun_kepanitiaan' ).val();
		kegiatan = $( '#txt_kegiatan_kepanitiaan' ).val();
		jabatan = $( '#txt_jabatan_kepanitiaan' ).val();
		updateKepanitiaan(currentElementKepanitiaan, tahun, kegiatan, jabatan);
		closeModalKepanitiaan();
	});
	
	$( '#btn_hapus_kepanitiaan' ).click(function(){
		removeKepanitiaan(currentElementKepanitiaan);
		closeModalKepanitiaan();
	});
	
	$( '#btn_batal_kepanitiaan' ).click(function(){
		closeModalKepanitiaan();
	});
	
	applyUbahHapusListenerKepanitiaan('#tabel_kepanitiaan > tr');
}
