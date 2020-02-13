<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Backend{


 public function __construct()
 {
   parent::__construct();
   $this->load->model("News_model","model");
 }


  function index()
  {
    $this->temp_backend->set_title('home');
    $this->temp_backend->view('index');
  }

function action()
{
  if ($this->input->is_ajax_request()) {
      $json = array('success'=>false, 'alert'=>array());
      $this->form_validation->set_rules("jumlah_donatur","&nbsp;*","trim|xss_clean|numeric|required");
      $this->form_validation->set_rules("jumlah_donasi","&nbsp;*","trim|xss_clean|numeric|required");
      $this->form_validation->set_rules("jumlah_donasi_tersalurkan","&nbsp;*","trim|xss_clean|numeric|required");
      $this->form_validation->set_error_delimiters('<p class="form-text text-danger">','</p>');
      if ($this->form_validation->run()) {
        $insert = [
										'jumlah_donatur'	=>	$this->input->post('jumlah_donatur',true),
										'jumlah_donasi'	=>	$this->input->post('jumlah_donasi',true),
										'jumlah_donasi_tersalurkan'	=>	$this->input->post('jumlah_donasi_tersalurkan',true),
									];

        $this->db->update("donasi_total",$insert,["id"=>1]);
          $json['alert']   = '<div id="alert" class="alert alert-success">
                                <i class="fa fa-check"></i> Berhasil Menambahkan.
                              <div>';


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



}
