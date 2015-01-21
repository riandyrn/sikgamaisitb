$( '#btn_simpan_entry' ).click(function(){
	saveDataToPostVar();
	if(checkIsFormValid()) {
		prepareDataModalKonfirmasi();
		$( '#modal_konfirmasi' ).modal('show');
	} else {
		$( '#modal_informasi').modal('show');
	}
});

$( '#btn_batal' ).click(function(){
	clearPostVar();
});

$( '#btn_simpan' ).click(function(){
	sendDataToServer(pathAddKader, redirectURL);
	clearPostVar();
});

$( '#btn_update' ).click(function(){
	id_kader = $(this).data('id');
	
	$.post(pathUpdateKader + '/' + id_kader, postVar, function(state){
		console.log(state);
		window.location.replace(redirectURL + '/' + id_kader);
	});
});

function setupAddKader(pg, url)
{
	pathAddKader = pg;
	redirectURL = url;
}

function setUpdateKader(pg, url)
{
	pathUpdateKader = pg;
	redirectURL = url;
}

var pathAddKader;
var pathUpdateKader;
var redirectURL;

var postVar = 
{
	nama_lengkap: '',
	nama_panggilan: '',
	nim: '',
	jurusan: '', 
	angkatan: '',
	hp: '',
	email: '',
	tempat_lahir: '',
	tanggal_lahir: '',
	alamat_libur: '',
	alamat_bdg: '',
	asal_sma: '',
	hobi: '',
	kondisi_mentoring: '',
	data_akademik: '',
}

function clearPostVar()
{
	postVar = 
	{
		nama_lengkap: '',
		nama_panggilan: '',
		nim: '',
		jurusan: '', 
		angkatan: '',
		hp: '',
		email: '',
		tempat_lahir: '',
		tanggal_lahir: '',
		alamat_libur: '',
		alamat_bdg: '',
		asal_sma: '',
		hobi: '',
		kondisi_mentoring: '',
		data_akademik: '',
	}
}

function saveDataToPostVar()
{
	postVar.nama_lengkap = $( '#nama_lengkap' ).val();
	postVar.nama_panggilan = $( '#nama_panggilan' ).val();
	postVar.nim = $( '#nim' ).val();
	postVar.jurusan = $( '#jurusan' ).val();
	postVar.angkatan = $( '#angkatan' ).val();
	postVar.hp = $( '#hp' ).val();
	postVar.email = $( '#email' ).val();
	postVar.tempat_lahir = $( '#tempat_lahir' ).val();
	postVar.tanggal_lahir = constructTanggalLahir($( '#tanggal_lahir' ).val(), $( '#bulan_lahir' ).val(), $( '#tahun_lahir' ).val());
	postVar.alamat_libur = $( '#alamat_libur' ).val();
	postVar.alamat_bdg = $( '#alamat_bdg' ).val();
	postVar.asal_sma = $( '#asal_sma' ).val();
	postVar.hobi = $( '#hobi' ).val();
	postVar.kondisi_mentoring = $( '#kondisi_mentoring' ).val();
	postVar.data_akademik = $( '#data_akademik' ).val();
}

function constructTanggalLahir(day, month, year)
{
	var myDate = new Date(year, month - 1, day);
	return myDate.format('Y-m-d'); 
}

function prepareDataModalKonfirmasi()
{
	$( '#nama_lengkap_k' ).html(postVar.nama_lengkap);
	$( '#nama_panggilan_k' ).html(postVar.nama_panggilan);
	$( '#nim_k' ).html(postVar.nim);
	$( '#jurusan_k' ).html(postVar.jurusan);
	$( '#angkatan_k' ).html(postVar.angkatan);
	$( '#hp_k' ).html(postVar.hp);
	$( '#email_k' ).html(postVar.email);
	
	tanggal = new Date(postVar.tanggal_lahir);
	$( '#ttl_k' ).html(postVar.tempat_lahir + ', ' + tanggal.format('d-M-Y'));
	$( '#alamat_libur_k' ).html(postVar.alamat_libur);
	$( '#alamat_bdg_k' ).html(postVar.alamat_bdg);
	$( '#asal_sma_k' ).html(postVar.asal_sma);
	$( '#hobi_k' ).html(postVar.hobi);
	
	kondisi_mentoring_k = $( '#kondisi_mentoring_k' );
	console.log(postVar.kondisi_mentoring + ' ' + postVar.data_akademik);
	switch(postVar.kondisi_mentoring)
	{
		case '0':
			$( '#kondisi_mentoring_k' ).html('belum ada kelompok');
			paintParagraph(kondisi_mentoring_k, 0); 
			break;
		case '1':
			$( '#kondisi_mentoring_k' ).html('tidak berjalan');
			paintParagraph(kondisi_mentoring_k, 1); 
			break;
		case '2':
			$( '#kondisi_mentoring_k' ).html('sudah mentoring');
			paintParagraph(kondisi_mentoring_k, 3); 
			break;
	}
	
	data_akademik_k = $( '#data_akademik_k' );
	switch(postVar.data_akademik)
	{
		case '0':
			data_akademik_k.html('kurang dari 1');
			paintParagraph(data_akademik_k, 0); 
			break;
		case '1':
			data_akademik_k.html('diantara 1-2');
			paintParagraph(data_akademik_k, 1); 
			break;
		case '2':
			data_akademik_k.html('diantara 2-3');
			paintParagraph(data_akademik_k, 2); 
			break;
		case '3':
			data_akademik_k.html('diatas 3');
			paintParagraph(data_akademik_k, 3); 
			break;
	}
}

function paintParagraph(obj, state)
{
	clearColorClass(obj);
	switch(state)
	{
		case 0:
			$(obj).addClass('text-red');
			break;
		case 1:
			$(obj).addClass('text-yellow');
			break;
		case 2:
			$(obj).addClass('text-blue');
			break;
		case 3:
			$(obj).addClass('text-green');
			break;
	}
}

function clearColorClass(obj)
{
	$(obj).removeClass('text-red');
	$(obj).removeClass('text-yellow');
	$(obj).removeClass('text-blue');
	$(obj).removeClass('text-green');
}

function checkIsFormValid()
{
	return (postVar.nama_lengkap != '') && (postVar.nama_panggilan != '') && (postVar.nim != '') && (postVar.jurusan != '') && (postVar.angkatan != '') && (postVar.hp != '') && (postVar.email != '') && (postVar.tempat_lahir != '') && (postVar.tanggal_lahir != '') && (postVar.nama_lengkap != '') && (postVar.alamat_libur != '') && (postVar.alamat_bdg != '') && (postVar.asal_sma != '') && (postVar.hobi != '');
}

function sendDataToServer(pathAddKader, redirectURL)
{
	$.post(pathAddKader, postVar, function(id){
		//console.log(id);
		window.location.replace(redirectURL + '/' + id);
	});
}