<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends Front{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Video_model','video');
  }

  function index()
  {
    $this->template->set_title("Videos | ".setting('title'));
    $this->meta_tags->set_meta_tag('description', setting('title').' '.setting('alamat').'.Telepon '.setting('telepon'));
    $data['row']=$this->video->video();
    $this->template->view("video/index",$data);
  }

}
