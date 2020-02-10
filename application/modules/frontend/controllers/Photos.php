<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Photos extends Front
{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Photos_model', 'photos');
  }

  function index()
  {
    $this->template->set_title("Photos | " . setting('title'));
    $this->meta_tags->set_meta_tag('description', setting('title') . ' ' . setting('alamat') . '.Telepon ' . setting('telepon'));
    $data['row'] = $this->photos->photos();
    $this->template->view("photos/index", $data);
  }
}
