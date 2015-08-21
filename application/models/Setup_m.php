<?php
class Setup_m extends CI_Model {

    function __construct(){
        parent::__construct();
    }

	function nor($search=false){			
			$this->db->where($search);				
			return $this->db->count_all_results('setup');
	}
		
	function search($search){
		$query = $this->db->get_where('setup', $search);
        return $query->first_row(); 
    }
	
	function get_record($id){
		$query = $this->db->get_where('setup', array('ID' => $id));
        return $query->first_row();
    }
	
	function get_records($id){
		$this->db->order_by("title", "asc"); 
		$query = $this->db->get_where('setup', array('type' => $id));
        return $query->result();
    }

    function insert($data, $id = NULL){
    	if($id){
    		//update
    		$insert_id =  $this->db->update('setup', $data, array('ID' => $id));
    	}else{
    		//insert new
    		$insert_id = $this->db->insert('setup', $data);
    	}

    	return ($insert_id) ? $insert_id : FALSE;
    }

    function update($data,$id){
       return $this->db->update('setup', $data, array('ID' => $id));
    }

    function delete($id){		
        $this->db->delete('setup', array('ID' => $id));
    }
	
	function delete_all($ids){
		$this->db->where_in('ID', $ids);
		$this->db->delete('setup');        
    }


    // >add_column('Actions', btn_edit('admin/state/edit/' . '$1').' '.btn_delete('admin/state/delete/' .  '$1') ,'id')
    function list_data($type){
    	$this->datatables->select('id,title,type')
    	->unset_column('id')->unset_column('title')->unset_column('type')
	    ->add_column('checkbox', btn_chkbox('$1'),'id')
	    ->add_column('title', btn_anchor('setup/edit/'.'$1/$2','$3') ,'type,id,title')
	    ->where('type = "'.$type.'" ')
	    ->from('setup');
	    return $this->datatables->generate();
    }
}
?>