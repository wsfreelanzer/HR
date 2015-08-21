<?php
class Front_Controller extends CI_Controller
{
	function __construct ()
	{
		parent::__construct();
		
		//$this->session->set_userdata("user_id",10);

		$this->load->helper(array('form', 'url', 'custom'));
		$this->load->library('form_validation');
		$this->load->helper('security');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
		
		$this->data['meta_title'] = 'Human Resource';
		
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}		
	}
}