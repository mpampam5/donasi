<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* modules/backend/controllers/Bank.php */
/* MPAMPAM CRUD GENERATOR */
/* PENGEMBANG : MPAMPAM */
/* EMAIL : MPAMPAM5@GMAIL.COM */
/* FACEBOOK : https://www.facebook.com/mpampam */
/* DIBUAT OLEH MPAMPAM CRUD GENERTOR 2020-02-10 10:15:29 */
/* https://mpampam.com */
/* DI GUNAKAN OLEH USER  */


class Bank extends Backend{

	private $table = "bank";

	public function __construct()
  {
    parent::__construct();
    $this->load->library(array("datatables"));
    $this->load->model("Bank_model","model");
  }


	function _rules()
	{
		$this->form_validation->set_rules("bank","Bank","trim|xss_clean|max_length[255]|required");
		$this->form_validation->set_rules("no_rek","No.Rekening","trim|xss_clean|max_length[255]|required|numeric");
		$this->form_validation->set_rules("nama_rek","Nama Rek","trim|xss_clean|max_length[255]|required");
		$this->form_validation->set_error_delimiters('<p class="form-text text-danger">','</p>');
	}


	function index()
  {
    $this->temp_backend->set_title('Rekening Bank');
    $this->temp_backend->view('content/bank/index');
  }


	function json()
  {
    header('Content-Type: application/json');
    echo $this->model->json();
  }


	function detail($id)
  {
    if ($row = $this->model->get_where($this->table,['id_rek'=>$id])) {
      	$this->temp_backend->set_title('Rekening Bank');
        $data = [
									'bank'	=>	$row->bank,
									'no_rek'	=>	$row->no_rek,
									'nama_rek'	=>	$row->nama_rek,
								];
      $this->temp_backend->view('content/bank/detail',$data);
    }else {
      $this->_error404();
    }
  }


function add()
{
    $this->temp_backend->set_title('Rekening Bank');
      $data = [
                'button' => 'tambah',
                'action' => site_url('backend/bank/add_action'),
								'bank'	=>	set_value('bank'),
								'no_rek'	=>	set_value('no_rek'),
								'nama_rek'	=>	set_value('nama_rek')
							];

    $this->temp_backend->view('content/bank/form',$data);
}


function add_action()
{
  if ($this->input->is_ajax_request()) {
      $json = array('success'=>false, 'alert'=>array());
      $this->_rules();
      if ($this->form_validation->run()) {
        $insert = [
										'bank'	=>	strtoupper($this->input->post('bank',true)),
										'no_rek'	=>	$this->input->post('no_rek',true),
										'nama_rek'	=>	$this->input->post('nama_rek',true),
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
  if ($row = $this->model->get_where($this->table,['id_rek'=>$id])) {
    $this->temp_backend->set_title('Rekening Bank');

      $data = [
                'button' => 'edit',
                'action' => site_url('backend/bank/update_action/'.$id),
								'bank'	=>	set_value('bank',$row->bank),
								'no_rek'	=>	set_value('no_rek',$row->no_rek),
								'nama_rek'	=>	set_value('nama_rek',$row->nama_rek),
							];

    $this->temp_backend->view('content/bank/form',$data);
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
										'bank'	=>	$this->input->post('bank',true),
										'no_rek'	=>	$this->input->post('no_rek',true),
										'nama_rek'	=>	$this->input->post('nama_rek',true),
									];

        if ($this->model->get_update($this->table,$update,["id_rek"=>$id])) {
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
    if ($this->model->get_update($this->table,['is_delete'=>'1'],["id_rek"=>$id])) {
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




} //End Class Bank
