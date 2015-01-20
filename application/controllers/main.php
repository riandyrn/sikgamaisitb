<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Main extends MY_Controller
{

	private $seeAllKaderGamaisPath;
	
	public function __construct()
	{
		parent::__construct();
		$this->base_path = base_url() . 'index.php/main/';
		$this->seeAllKaderGamaisPath = $this->base_path . 'seeAllKaderGamais';
	}
	
	/*** FUNGSI-FUNGSI VIEW ***/
	
	public function addKader()
	{
		$this->displayView('addKader');
	}
	
	public function seeInfoKader($id_kader)
	{
		$this->session->set_userdata('id_kader', $id_kader);
		
		$data = array
		(
			'info_kader' => $this->m_m->getInfoKader($id_kader),
			'riwayat_organisasi' => $this->m_m->getRiwayatOrganisasi($id_kader),
			'riwayat_kepanitiaan' => $this->m_m->getRiwayatKepanitiaan($id_kader),
			'riwayat_pembinaan' => $this->m_m->getRiwayatPembinaan($id_kader)
		);
		
		$this->displayView('seeInfoKader', $data);
	}
	
	public function seeAllKaderGamais()
	{
		$data['all_kader_gamais'] = $this->m_m->getAllKaderGamais();
		$this->displayView('seeAllKaderGamais', $data);
	}
	
	public function index()
	{
		$this->seeAllKaderGamais();
	}
	
	/*** FUNGSI-FUNGSI PROSES ***/
	
	public function addKader_P()
	{
		$state = $this->m_m->addKader($_POST);
		$this->notifyState($state, 'Kader baru berhasil ditambahkan', 'Penambahan kader gagal dilakukan', $this->seeAllKaderGamaisPath);
	}
	
	public function addOrganisasi_P()
	{
		$id_kader = $this->session->userdata('id_kader');
		$state = $this->m_m->addOrganisasi($id_kader, $_POST);
		$this->notifyStateAJAX($state);
	}
	
	public function addKepanitiaan_P()
	{
		$id_kader = $this->session->userdata('id_kader');
		$state = $this->m_m->addKepanitiaan($id_kader, $_POST);
		$this->notifyStateAJAX($state);		
	}
	
	public function addPembinaan_P()
	{
		$id_kader = $this->session->userdata('id_kader');
		$state = $this->m_m->addPembinaan($id_kader, $_POST);
		$this->notifyStateAJAX($state);	
	}
	
	public function updateInfoKader_P()
	{
		$id_kader = $this->session->userdata('id_kader');
		$state = $this->m_m->updateInfoKader($id_kader, $_POST);
		$this->notifyStateAJAX($state);		
	}
	
	public function updateOrganisasi_P()
	{
		$id_kader = $this->session->userdata('id_kader');
		$state = $this->m_m->updateOrganisasi($id_kader, $_POST);
		$this->notifyStateAJAX($state);		
	}
	
	public function updateKepanitiaan_P()
	{
		$id_kader = $this->session->userdata('id_kader');
		$state = $this->m_m->updateKepanitiaan($id_kader, $_POST);
		$this->notifyStateAJAX($state);		
	}
	
	public function updatePembinaan_P()
	{
		$id_kader = $this->session->userdata('id_kader');
		$state = $this->m_m->updatePembinaan($id_kader, $_POST);
		$this->notifyStateAJAX($state);	
	}
}

?>