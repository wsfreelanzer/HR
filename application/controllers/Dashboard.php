<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Front_Controller
{	

	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		
		$this->data['sub_view'] = 'dashboard/index';
		$this->load->view('_admin_main', $this->data);
	}
}
?>