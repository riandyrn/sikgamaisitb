<?php

class MyController extends CI_Controller
{

	public function __construct()
	{
		$this->load->model('mainmodel', 'm_m');
	}
	
	public function displayView($page, $data = array())
	{
		$data['error'] = $this->session->flashdata('error');
		$data['success'] = $this->session->flashdata('success');
		$this->load->view($page, $data);
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
		if($state) {
			echo 1;
		} else {
			echo 0;
		}
	}
	
}

?>