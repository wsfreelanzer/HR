<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tools extends Front_Controller
{	

	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->data['sub_view'] = 'Tools/index';
		$this->load->view('_admin_main', $this->data);
	}

}
?>