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
	        $this->table->set_heading('<input type="checkbox" class="setup_all_select">','Name');


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

	public function edit($setup_type = NULL,$id = NULL){
		if( $id ){
			$this->data['record'] = $this->setup_m->get_record($id);
		}else{
			$this->data['record'] = (object)['ID' => NULL,'type'=>$setup_type,'title' => ''];
		}

		//if post
		if( $this->input->post('title') ){
			$rules = array(
				'title' => array(
					'field' => 'title', 
					'label' => 'Title', 
					'rules' => 'trim|required|callback__unique_name|xss_clean'
				),
				'setup_type' => array(
					'field' => 'setup_type', 
					'label' => 'Type', 
					'rules' => 'trim|required|xss_clean'
				),

			);
			$this->form_validation->set_rules($rules);
			// Process the form
			if ($this->form_validation->run() == TRUE) {
				$insert['title'] = $this->input->post('title');
				$insert['type'] = $this->input->post('setup_type');
				if($this->setup_m->insert($insert,$this->input->post('ID') )){
					$output['insert'] = true;
					$output['msg'] = '<div class="alert alert-success" role="alert"><strong> Data Saved ! </strong></div> ';
				}else{
					$output['insert'] = false;
					$output['msg'] = '<div class="alert alert-warning" role="alert">Some thing seems wrong Try Again !</div> ';
				}
			}else{
				$output['insert'] = false;
				$output['msg'] = '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';
			}

			echo json_encode($output);
		}else{
			//load view
			$this->load->view('setup/edit_modal', $this->data);
		} 
	}

	public function delete(){
		if( $this->input->post('ids') ){
			$ids = $this->input->post('ids');
			$this->setup_m->delete_all($ids);
			$output['insert'] = true;
			$output['msg'] = '<div class="alert alert-success" role="alert"> Deleted Sucessfully !</div>';
		}else{
			$output['insert'] = false;
			$output['msg'] = '<div class="alert alert-danger" role="alert"> No Records Available </div>';
		}

		echo json_encode($output);
	}

	public function _unique_name(){
		$id = $this->input->post('ID');		
		$where = "title = '".$this->input->post('title')."' ";
		!$id || $where .= " AND ID != '".$id."' ";

		if ($this->setup_m->nor($where)) {
			$this->form_validation->set_message('_unique_name', '%s should be unique');
			return FALSE;
		}

		return TRUE;
	}

}
?>