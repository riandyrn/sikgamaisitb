var pathDelete;

var currentElement;

function applyListener(element)
{
	$(element).find('.btn-hapus-entri-kader').click(function(){
		currentElement = $(this).parents('tr');
		nama = $(currentElement).data('nama');
		$('#label_hapus_kader').html('Hapus entri kader <b>' + nama + "</b>?");
		$( '#modal_kader' ).modal('show');
		
	});
}

function setupSeeAllKader(del)
{
	pathDelete = del;
	
	$( '#btn_batal_kader' ).click(function(){
		closeModalKader();
	});
	
	$( '#btn_hapus_kader' ).click(function(){
		id_entry = $(currentElement).data('id');
		nama = $(currentElement).data('nama');
		
		$.post(pathDelete + '/' + id_entry, '', function(){
			$(currentElement).remove();
			sendSuccess('Entri kader ' + nama + ' berhasil dihapus');
			closeModalKader();
		});
	});
	
	applyListener($('#tabel_kader_data > tr'));
}

function closeModalKader()
{
	$( '#modal_kader' ).modal('hide');
}