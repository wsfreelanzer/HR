<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Setup extends Front_Controller
{	

	function __construct()
	{
		parent::__construct();
		//datatable
		$this->load->library('table');
        $this->load->library('datatables');

		$this->load->model('setup_m');
	}

	public function index(){
		if( $this->uri->segment(3) ){
			$uri = $this->uri->segment(3);

			$page_title[''] = "Empty Array";
			$page_title['employment_type'] = "Employment Type";
			$page_title['branch'] = "Branch";

			$type = array_search($uri,array_keys($page_title));

			($type) || redirect('dashboard');

			$this->data['meta_title'] = $page_title[$uri].' - '.$this->data['meta_title'];
			$this->data['setup_type'] = $type;

			$search['type'] = $type;
			$count = $this->setup_m->nor($search);			
			$this->data['nor'] = $count;
			if($count>0){
				$this->data['records'] = $this->setup_m->get_records($type);
			}
			
			//datatable
			$tmpl = array ( 'table_open'  => '<table id="big_table" border="1" cellpadding="2" cellspacing="1" class="table table-striped">' );
	        $this->table->set_template($tmpl); 
	        $this->table->set_heading('<input type="checkbox">','Name');


			//load view
			$this->data['sub_view'] = 'setup/setup';
			$this->load->view('_admin_main', $this->data);
		}else{
			//nouri load view
			$this->data['sub_view'] = 'setup/index';
			$this->load->view('_admin_main', $this->data);
		}
	}

	//datatable list 
	public function list_data( $type = NULL ){
		if($type){
			echo $this->setup_m->list_data($type);
		}
	}

	public function edit($setup_type,$id = NULL){
		if( $id ){
			$this->data['record'] = $this->setup_m->get_record($id);
		}else{
			$this->data['record'] = (object)['ID' => NULL,'type'=>$setup_type,'title' => ''];
		}

		
		$this->load->view('setup/edit_modal', $this->data);
	}

}
?>