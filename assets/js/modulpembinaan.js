/*** CRUD Riwayat Pembinaan ***/

var currentElementPembinaan;
var ctxIdPembinaan;

var pathAddPembinaan;
var pathUpdatePembinaan;
var pathDeletePembinaan;

var id_kader;

var postPembinaan =
{
	agenda: ''
}

function setCtxIdPembinaan(val)
{
	/* 
		fungsi ini untuk set id yang diperlukan
		untuk proses CRUD pembinaan
	*/
	
	ctxIdPembinaan = val;
}

function showButtonPembinaan(id_btn)
{
	switch(id_btn)
	{
		case 0:
			$( '#btn_tambah_pembinaan' ).show();
			$( '#btn_ubah_pembinaan' ).hide();
			$( '#btn_hapus_pembinaan' ).hide();
			$( '#label_hapus_pembinaan' ).hide();
			$( '#form_pembinaan' ).show();
			break;
		case 1:
			$( '#btn_tambah_pembinaan' ).hide();
			$( '#btn_ubah_pembinaan' ).show();
			$( '#btn_hapus_pembinaan' ).hide();
			$( '#label_hapus_pembinaan' ).hide();
			$( '#form_pembinaan' ).show();
			break;
		case 2:
			$( '#btn_tambah_pembinaan' ).hide();
			$( '#btn_ubah_pembinaan' ).hide();
			$( '#btn_hapus_pembinaan' ).show();
			$( '#label_hapus_pembinaan' ).show();
			$( '#form_pembinaan' ).hide();
			break;
	}
}

function addPembinaan(agenda)
{
	postPembinaan.agenda = agenda;
	
	$.post(pathAddPembinaan, postPembinaan, function(id){
		console.log(id);
		element = $(
			"<tr data-id='" + id + "'>" +
				"<td>" + agenda + "</td>" +
				"<td><a href='#' class='btn-ubah-entri-pembinaan'><span class='glyphicon glyphicon-pencil'></span></a></td>" + 
				"<td><a href='#' class='btn-hapus-entri-pembinaan'><span class='glyphicon glyphicon-remove' style='color: red;'></span></a></td>" +												
			"</tr>"
		);
		
		sendSuccess('Entri pembinaan berhasil ditambahkan');
		
		$( '#tabel_pembinaan' ).prepend(element);
		applyUbahHapusListenerPembinaan(element);			
	});

}

function updatePembinaan(element, agenda)
{
	postPembinaan.agenda = agenda;
	id_entry = $(element).data('id');
	
	$.post(pathUpdatePembinaan + '/' + id_entry, postPembinaan, function(id){
		console.log(id);
		sendSuccess('Entri kepanitiaan berhasil diubah');
		$(element).children('td:first-child').html(agenda);
	});
}

function removePembinaan(element)
{
	id_entry = $(element).data('id');
	
	$.post(pathDeletePembinaan + '/' + id_entry, '', function(state){
		console.log(state);
		sendSuccess('Entri kepanitiaan berhasil dihapus');
		$(element).remove();
	});
}				

function closeModalPembinaan()
{
	$('#modal_pembinaan').modal('hide');
	clearModalPembinaan();
}

function clearModalPembinaan()
{
	$('#txt_agenda_pembinaan').val('');
}

function applyUbahHapusListenerPembinaan(element)
{
	/*
		dia bakalan select elemen yg ada di bawah tr
	*/
	
	$(element).find( '.btn-ubah-entri-pembinaan' ).click(function(){						
		// set isi txt_agenda_pembinaan dulu
		currentElementPembinaan = $(this).parents('tr');
		currAgenda = $(currentElementPembinaan).children('td:first-child').text();
		$( '#txt_agenda_pembinaan' ).val(currAgenda);
		
		// ubah interface label
		$('#modal_pembinaan_label').html('Ubah Pembinaan');
		showButtonPembinaan(1);
		
		// show modal
		$('#modal_pembinaan').modal('show');
	});

	$(element).find( '.btn-hapus-entri-pembinaan' ).click(function(){
		$('#modal_pembinaan_label').html('Hapus Pembinaan');
		showButtonPembinaan(2);
		$('#modal_pembinaan').modal('show');
		currentElementPembinaan = $(this).parents('tr');
	});
	
}

function setupPembinaan(add, update, del)
{	
	pathAddPembinaan = add;
	pathUpdatePembinaan = update;
	pathDeletePembinaan = del;

	$( '.btn-tambah-entri-pembinaan' ).click(function(){
		$('#modal_pembinaan_label').html('Tambah Pembinaan');
		showButtonPembinaan(0);
		clearModalPembinaan();
		$('#modal_pembinaan').modal('show')
	});
	
	$( '#btn_tambah_pembinaan' ).click(function(){
		val = $( '#txt_agenda_pembinaan' ).val();
		addPembinaan(val);
		closeModalPembinaan();
	});
	
	$( '#btn_ubah_pembinaan' ).click(function(){
		agenda = $( '#txt_agenda_pembinaan' ).val();
		updatePembinaan(currentElementPembinaan, agenda);
		closeModalPembinaan();
	});
	
	$( '#btn_hapus_pembinaan' ).click(function(){
		removePembinaan(currentElementPembinaan);
		closeModalPembinaan();
	});
	
	$( '#btn_batal_pembinaan' ).click(function(){
		closeModalPembinaan();
	});
	
	applyUbahHapusListenerPembinaan('#tabel_pembinaan > tr');
		
}
