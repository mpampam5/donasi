<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* modules/backend/controllers/Contact.php */
/* MPAMPAM CRUD GENERATOR */
/* PENGEMBANG : MPAMPAM */
/* EMAIL : MPAMPAM5@GMAIL.COM */
/* FACEBOOK : https://www.facebook.com/mpampam */
/* DIBUAT OLEH MPAMPAM CRUD GENERTOR 2019-09-23 10:21:07 */
/* https://mpampam.com */
/* DI GUNAKAN OLEH USER  */
    

class Contact extends Backend{
    
	private $table = "message";
    
	public function __construct()
  {
    parent::__construct();
    $this->load->library(array("datatables"));
    $this->load->model("Contact_model","model");
  }


	function _rules()
	{
		$this->form_validation->set_rules("nama","Nama","trim|xss_clean|max_length[255]");
		$this->form_validation->set_rules("email","Email","trim|xss_clean|max_length[255]");
		$this->form_validation->set_rules("subjek","Subjek","trim|xss_clean|max_length[255]");
		$this->form_validation->set_rules("pesan","Pesan","trim|xss_clean");
		$this->form_validation->set_rules("delete","Delete","trim|xss_clean");
		$this->form_validation->set_error_delimiters('<p class="form-text text-danger">','</p>');
	}


	function index()
  {
    $this->temp_backend->set_title('Contact');
    $this->temp_backend->view('content/contact/index');
  }


	function json()
  {
    header('Content-Type: application/json');
    echo $this->model->json();
  }


	function detail($id)
  {
    if ($row = $this->model->get_where($this->table,['id_pesan'=>$id])) {
      	$this->temp_backend->set_title('Contact');
        $data = [
									'nama'	=>	$row->nama,
									'email'	=>	$row->email,
									'subjek'	=>	$row->subjek,
									'pesan'	=>	$row->pesan,
									'delete'	=>	$row->delete,
								];
      $this->temp_backend->view('content/contact/detail',$data);
    }else {
      $this->_error404();
    }
  }


function add()
{
    $this->temp_backend->set_title('Contact');
      $data = [
                'button' => 'tambah',
                'action' => site_url('backend/contact/add_action'),
								'nama'	=>	set_value('nama'),
								'email'	=>	set_value('email'),
								'subjek'	=>	set_value('subjek'),
								'pesan'	=>	set_value('pesan'),
								'delete'	=>	set_value('delete'),
							];

    $this->temp_backend->view('content/contact/form',$data);
}


function add_action()
{
  if ($this->input->is_ajax_request()) {
      $json = array('success'=>false, 'alert'=>array());
      $this->_rules();
      if ($this->form_validation->run()) {
        $insert = [
										'nama'	=>	$this->input->post('nama',true),
										'email'	=>	$this->input->post('email',true),
										'subjek'	=>	$this->input->post('subjek',true),
										'pesan'	=>	$this->input->post('pesan',true),
										'delete'	=>	$this->input->post('delete',true),
									];

        if ($this->model->get_insert($this->table,$insert)) {
          $json['alert']   = '<div id="alert" class="alert alert-success">
                                <i class="fa fa-check"></i> Berhasil Menambahkan.
                              <div>';
        }else {
          $json['alert']   = '<div id="alert" class="alert alert-danger">
                                <i class="fa fa-close"></i> Gagal Menambahkan.
                              <div>';
        }

        $json['success'] = true;
      }else {
        foreach ($_POST as $key => $value)
          {
            $json['alert'][$key] = form_error($key);
          }
      }

      echo json_encode($json);
  }
}


function update($id)
{
  if ($row = $this->model->get_where($this->table,['id_pesan'=>$id])) {
    $this->temp_backend->set_title('Contact');

      $data = [
                'button' => 'edit',
                'action' => site_url('backend/contact/update_action/'.$id),
								'nama'	=>	set_value('nama',$row->nama),
								'email'	=>	set_value('email',$row->email),
								'subjek'	=>	set_value('subjek',$row->subjek),
								'pesan'	=>	set_value('pesan',$row->pesan),
								'delete'	=>	set_value('delete',$row->delete),
							];

    $this->temp_backend->view('content/contact/form',$data);
  }else {
    $this->_error404();
  }
}


function update_action($id)
{
  if ($this->input->is_ajax_request()) {
      $json = array('success'=>false, 'alert'=>array());
      $this->_rules();
      if ($this->form_validation->run()) {
        $update = [
										'nama'	=>	$this->input->post('nama',true),
										'email'	=>	$this->input->post('email',true),
										'subjek'	=>	$this->input->post('subjek',true),
										'pesan'	=>	$this->input->post('pesan',true),
										'delete'	=>	$this->input->post('delete',true),
									];

        if ($this->model->get_update($this->table,$update,["id_pesan"=>$id])) {
          $json['alert']   = '<div id="alert" class="alert alert-success">
                                <i class="fa fa-check"></i> Berhasil Mengedit.
                              <div>';
        }else {
          $json['alert']   = '<div id="alert" class="alert alert-danger">
                                <i class="fa fa-close"></i> Gagal Mengedit.
                              <div>';
        }

        $json['success'] = true;
      }else {
        foreach ($_POST as $key => $value)
          {
            $json['alert'][$key] = form_error($key);
          }
      }

      echo json_encode($json);
  }
}


function delete($id)
{
  if ($this->input->is_ajax_request()) {
    if ($this->model->get_delete($this->table,["id_pesan"=>$id])) {
      $json['alert']   = '<div id="alert" class="alert alert-success">
                            <i class="fa fa-check"></i> Berhasil Menghapus.
                          <div>';
    }else {
      $json['alert']   = '<div id="alert" class="alert alert-danger">
                            <i class="fa fa-close"></i> Gagal Menghapus.
                          <div>';
    }
    echo json_encode($json);
  }
}




} //End Class Contact