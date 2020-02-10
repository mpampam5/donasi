<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* modules/backend/controllers/Donatur_terverifikasi.php */
/* MPAMPAM CRUD GENERATOR */
/* PENGEMBANG : MPAMPAM */
/* EMAIL : MPAMPAM5@GMAIL.COM */
/* FACEBOOK : https://www.facebook.com/mpampam */
/* DIBUAT OLEH MPAMPAM CRUD GENERTOR 2020-02-10 11:39:21 */
/* https://mpampam.com */
/* DI GUNAKAN OLEH USER  */


class Donatur_terverifikasi extends Backend{

	private $table = "donatur";

	public function __construct()
  {
    parent::__construct();
    $this->load->library(array("datatables"));
    $this->load->model("Donatur_terverifikasi_model","model");
  }


	function _rules()
	{
		$this->form_validation->set_rules("nama","Nama","trim|xss_clean|max_length[255]|required");
		$this->form_validation->set_rules("telepon","Telepon","trim|xss_clean|max_length[20]|required");
		$this->form_validation->set_rules("email","Email","trim|xss_clean|max_length[255]|required");
		$this->form_validation->set_rules("provinsi","Provinsi","trim|xss_clean|required|numeric");
		$this->form_validation->set_rules("donasi","Donasi","trim|xss_clean|required|numeric");
		$this->form_validation->set_rules("image","Image","trim|xss_clean|max_length[255]|required");
		$this->form_validation->set_rules("keterangan","Keterangan","trim|xss_clean");
		$this->form_validation->set_rules("is_anonim","Is Anonim","trim|xss_clean|required|numeric");
		$this->form_validation->set_rules("is_verifikasi","Is Verifikasi","trim|xss_clean|required|numeric");
    $this->form_validation->set_rules("id_bank","Bank","trim|xss_clean|required|numeric");
		$this->form_validation->set_error_delimiters('<p class="form-text text-danger">','</p>');
	}


	function index()
  {
    $this->temp_backend->set_title('Donatur terverifikasi');
    $this->temp_backend->view('content/donatur_terverifikasi/index');
  }


	function json()
  {
    header('Content-Type: application/json');
    echo $this->model->json();
  }


	function detail($id)
  {
    if ($row = $this->model->get_where($this->table,['id_donatur'=>$id])) {
      	$this->temp_backend->set_title('Donatur terverifikasi');
        $data = [
									'nama'	=>	$row->nama,
									'telepon'	=>	$row->telepon,
									'email'	=>	$row->email,
									'provinsi'	=>	$row->provinsi,
									'donasi'	=>	$row->donasi,
									'image'	=>	$row->image,
									'keterangan'	=>	$row->keterangan,
									'is_anonim'	=>	$row->is_anonim,
									'is_created'	=>	$row->is_created,
									'is_verifikasi'	=>	$row->is_verifikasi,
									'is_delete'	=>	$row->is_delete,
								];
      $this->temp_backend->view('content/donatur_terverifikasi/detail',$data);
    }else {
      $this->_error404();
    }
  }


function add()
{
    $this->temp_backend->set_title('Donatur terverifikasi');
      $data = [
                'button' => 'tambah',
                'action' => site_url('backend/donatur_terverifikasi/add_action'),
								'nama'	=>	set_value('nama'),
								'telepon'	=>	set_value('telepon'),
								'email'	=>	set_value('email'),
								'provinsi'	=>	set_value('provinsi'),
								'donasi'	=>	set_value('donasi'),
								'image'	=>	set_value('image'),
								'keterangan'	=>	set_value('keterangan'),
								'is_anonim'	=>	set_value('is_anonim'),
								'is_created'	=>	set_value('is_created'),
								'is_verifikasi'	=>	set_value('is_verifikasi'),
                'id_bank'	=>	set_value('id_bank'),
							];

    $this->temp_backend->view('content/donatur_terverifikasi/form',$data);
}



function update($id)
{
  if ($row = $this->model->get_where($this->table,['id_donatur'=>$id])) {
    $this->temp_backend->set_title('Donatur terverifikasi');

      $data = [
                'button' => 'edit',
                'action' => site_url('backend/donatur_terverifikasi/update_action/'.$id),
								'nama'	=>	set_value('nama',$row->nama),
								'telepon'	=>	set_value('telepon',$row->telepon),
								'email'	=>	set_value('email',$row->email),
								'provinsi'	=>	set_value('provinsi',$row->provinsi),
								'donasi'	=>	set_value('donasi',$row->donasi),
								'image'	=>	set_value('image',$row->image),
								'keterangan'	=>	set_value('keterangan',$row->keterangan),
								'is_anonim'	=>	set_value('is_anonim',$row->is_anonim),
								'is_created'	=>	set_value('is_created',$row->is_created),
								'is_verifikasi'	=>	set_value('is_verifikasi',$row->is_verifikasi),
                'id_bank'	=>	set_value('id_bank',$row->id_bank),
							];

    $this->temp_backend->view('content/donatur_terverifikasi/form',$data);
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
										'telepon'	=>	$this->input->post('telepon',true),
										'email'	=>	$this->input->post('email',true),
										'provinsi'	=>	$this->input->post('provinsi',true),
										'donasi'	=>	$this->input->post('donasi',true),
										'image'	=>	$this->input->post('image',true),
										'keterangan'	=>	$this->input->post('keterangan',true),
										'is_anonim'	=>	$this->input->post('is_anonim',true),
										'is_verifikasi'	=>	$this->input->post('is_verifikasi',true),
                    'id_bank'	=>	$this->input->post('id_bank',true),
									];

        if ($this->model->get_update($this->table,$update,["id_donatur"=>$id])) {
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
    if ($this->model->get_update($this->table,['is_delete'=>"1"],["id_donatur"=>$id])) {
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




} //End Class Donatur_terverifikasi
