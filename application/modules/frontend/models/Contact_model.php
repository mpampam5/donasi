<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Contact_model extends CI_Model
{
	
	function insert($datainsert){
		$query = $this->db->insert('message',$datainsert);
		if ($query) {
			return 1;

		}else{
			return 0;
		}
	}

	function showAlert($alert,$tipe){
    $this->session->set_flashdata('info', '<div class="alert alert-'.$tipe.' alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      '.$alert.'
      </div> ');
  }
}

/* End of file Contact_model.php */
/* Location: ./application/modules/frontend/models/Contact_model.php */