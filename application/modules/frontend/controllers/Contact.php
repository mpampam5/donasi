<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Front{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->library('form_validation');
  }

  function index()
  {
    $this->template->set_title("Contact | ".setting('title'));
    $this->meta_tags->set_meta_tag('description', setting('title').' '.setting('alamat').'.Telepon '.setting('telepon'));
    $this->template->view("contact/index");

  }

  function add()
  {

    $this->form_validation->set_rules('email','Field','required|valid_email');
    $this->form_validation->set_rules('nama','Nama','required|alpha');
    $this->form_validation->set_rules('subjek','Subjek','required');
    $this->form_validation->set_rules('pesan','Pesan','required');

    if ($this->form_validation->run()) {
      
      $this->load->model("Contact_model");

      $datainsert = array('nama' => $_POST['nama'],
                          'email' => $_POST['email'],
                          'subjek' => $_POST['subjek'],
                          'pesan' => $_POST['pesan'],
                          'delete' => '0'
      );

      if ($this->Contact_model->insert($datainsert) == 1) {
        $alert = "Berhasil tambah data!";
        $this->Contact_model->showAlert($alert,'success');
      }else{
        $alert = "Gagal mengirim!";
        $this->Contact_model->showAlert($alert,'danger');
      }

      redirect(base_url('contact'),'refresh');
    }else{
      $this->index();
    }
  
  }



}
