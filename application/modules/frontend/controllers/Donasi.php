<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi extends Front
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Home_model', 'model');
  }

  function index()
  {
    $this->template->set_title('' . setting('title'));
    //meta seo
    $this->meta_tags->set_meta_tag('description', setting('title') . ' ' . setting('alamat') . '.Telepon ' . setting('telepon'));
    // *$this->meta_tags->unset_meta_tag('author');
    // * $this->meta_tags->add_robots_rule('NOINDEX');
    // * $this->meta_tags->add_keyword('php');
    //end meta seo
    $data = [
      'donatur' => $this->model->donatur(),
    ];
    $this->template->view('donasi/index', $data);
  }


  function action()
  {
      if ($this->input->is_ajax_request()) {
        $this->load->library("form_validation");
          $json = array('success'=>false, 'alert'=>array());
          $this->form_validation->set_rules("nama","&nbsp;*","trim|xss_clean|required");
          $this->form_validation->set_rules("telepon","&nbsp;*","trim|xss_clean|numeric|required");
          $this->form_validation->set_rules("email","&nbsp;*","trim|xss_clean|valid_email|required");
          $this->form_validation->set_rules("jumlah_donasi","&nbsp;*","trim|xss_clean|numeric|required");
          $this->form_validation->set_rules("provinsi","&nbsp;*","trim|xss_clean|numeric|required");
          $this->form_validation->set_rules("is_anonim","&nbsp;*","trim|xss_clean|numeric|required");
          $this->form_validation->set_rules("rekening","&nbsp;*","trim|xss_clean|numeric|required");
          $this->form_validation->set_error_delimiters('<span class="text-danger" style="font-size:12px;">','</span>');
          if ($this->form_validation->run()) {
            $insert = [
    										'nama'	=>	$this->input->post('nama',true),
    										'telepon'	=>	$this->input->post('telepon',true),
                        'email'	=>	$this->input->post('email',true),
                        'donasi'	=>	$this->input->post('jumlah_donasi',true),
                        'provinsi'	=>	$this->input->post('provinsi',true),
                        'id_bank'	=>	$this->input->post('rekening',true),
                        'is_anonim'	=>	$this->input->post('is_anonim',true),
                        'is_verifikasi'	=>	"0",
                        'is_created'	=>	date('Y-m-d H:i:s'),
    									];

              $this->db->insert("donatur",$insert);
              $json['alert']   = '<div class="mt-3">
                                    <h4>TERIMA KASIH TELAH MELAKUKAN DONASI UNTUK PROGRAM INI.</h4>
                                    <h5>Donasi Anda Sebesar Rp.'.format_rupiah($this->input->post("jumlah_donasi")).'</h5>
                                  </div>';


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
