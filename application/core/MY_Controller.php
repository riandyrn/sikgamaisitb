<?php

class MY_Controller extends CI_Controller
{
	public $base_path;
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function displayView($page, $data = array())
	{
		$data['error'] = $this->session->flashdata('error');
		$data['success'] = $this->session->flashdata('success');
		$data['assets'] = base_url() . 'assets/';
		$data['base_path'] = $this->base_path;
		$data['current_page'] = $page;
		
		$this->load->view('template/header', $data);
		$this->load->view($page, $data);
		$this->load->view('template/footer', $data);
	}
	
	public function notifyState($state, $msg_success, $msg_error, $path = null)
	{
		/*
			state bernilai ada atau null
		*/
		
		if($state) {
			$this->session->set_flashdata('success', $msg_success);
		} else {
			$this->session->set_flashdata('error', $msg_error);
		}
		
		if($path) redirect($path);
	}
	
	public function notifyStateAJAX($state)
	{
		echo $state;
	}
	
}

?>