<?php

class MainModel extends MY_Model
{

	/*
		Model utama dari SIK-Gamais ITB, memuat functions berikut:

		addKader($data): int
		addOrganisasi($id_kader, $data): int			
		addKepanitiaan($id_kader, $data): int
		addPembinaan($id_kader, $data): int
		updateInfoKader($id_entry, $data): int
		updateOrganisasi($id_entry, $data): int
		updateKepanitiaan($id_entry, $data): int
		updatePembinaan($id_entry, $data): int
		getInfoKader($id_kader): arr
		getRiwayatOrganisasi($id_kader): arr
		getRiwayatKepanitiaan($id_kader): arr
		getRiwayatPembinaan($id_kader): arr
		getAllKaderGamais(): arr
		uploadFotoKader($data): int (in progress)
		getFotoKader($id_kader): text (in progress)
		
		Riandy R.N. (riandyrn@gmail.com)
	*/
	
	public function addKader($data)
	{
		return $this->addData('kader', $data);
	}
	
	public function addOrganisasi($id_kader, $data)
	{
		$data['id_kader'] = $id_kader;
		return $this->addData('riwayat_organisasi', $data);
	}
	
	public function addKepanitiaan($id_kader, $data)
	{
		$data['id_kader'] = $id_kader;
		return $this->addData('riwayat_kepanitiaan', $data);
	}
	
	public function addPembinaan($id_kader, $data)
	{
		$data['id_kader'] = $id_kader;
		return $this->addData('riwayat_pembinaan', $data);
	}
	
	public function updateInfoKader($id_kader, $data)
	{
		$wheres = array
		(
			'id' => $id_kader
		);
		
		return $this->updateData('kader', $data, $wheres);
	}
	
	public function updateOrganisasi($id_entry, $data)
	{
		$wheres = array
		(
			'id' => $id_entry
		);
		
		return $this->updateData('riwayat_organisasi', $data, $wheres);
	}
	
	public function updateKepanitiaan($id_entry, $data)
	{
		$wheres = array
		(
			'id' => $id_entry
		);
		
		return $this->updateData('riwayat_kepanitiaan', $data, $wheres);	
	}
	
	public function updatePembinaan($id_entry, $data)
	{
		$wheres = array
		(
			'id' => $id_entry
		);
		
		return $this->updateData('riwayat_pembinaan', $data, $wheres);	
	}
	
	public function getInfoKader($id_kader)
	{
		$wheres = array
		(
			'id' => $id_kader
		);
		
		$result = $this->getData('kader', $wheres);
		return $result[0];
	}
	
	public function getRiwayatOrganisasi($id_kader)
	{
		$wheres = array
		(
			'id_kader' => $id_kader
		);
		
		return $this->getData('riwayat_organisasi', $wheres);
	}
	
	public function getRiwayatKepanitiaan($id_kader)
	{
		$wheres = array
		(
			'id_kader' => $id_kader
		);
		
		return $this->getData('riwayat_kepanitiaan', $wheres);	
	}
	
	public function getRiwayatPembinaan($id_kader)
	{
		$wheres = array
		(
			'id_kader' => $id_kader
		);
		
		return $this->getData('riwayat_pembinaan', $wheres);			
	}
	
	public function getAllKaderGamais()
	{
		return $this->getData('kader', null, 'id, nim, nama_lengkap, jurusan, angkatan, hp');
	}
	
	public function deletePembinaan($id_entry)
	{
		$wheres = array
		(
			'id' => $id_entry
		);
		
		return $this->deleteData('riwayat_pembinaan', $wheres);
	}
	
	public function deleteOrganisasi($id_entry)
	{
		$wheres = array
		(
			'id' => $id_entry
		);
		
		return $this->deleteData('riwayat_organisasi', $wheres);
	}
	
	public function deleteKepanitiaan($id_entry)
	{
		$wheres = array
		(
			'id' => $id_entry
		);
		
		return $this->deleteData('riwayat_kepanitiaan', $wheres);
	}
	
	public function deleteKader($id_kader)
	{
		
		$wheres = array
		(
			'id_kader' => $id_kader
		);
		
		$del_panitia = $this->deleteData('riwayat_kepanitiaan', $wheres);
		$del_organisasi = $this->deleteData('riwayat_organisasi', $wheres);
		$del_pembinaan = $this->deleteData('riwayat_pembinaan', $wheres);
		
		$wheres = array
		(
			'id' => $id_kader
		);
		
		$del_kader = $this->deleteData('kader', $wheres);
		
		$ret = $del_panitia && $del_organisasi && $del_pembinaan && $del_kader;
		
		return $ret;
	}
}

?>