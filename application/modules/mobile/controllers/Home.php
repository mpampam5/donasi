<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends Front
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Main_model', 'Main');
    $this->load->model('Home_model', 'Home');
  }

  function index()
  {
    $this->Main->view('home');
  }

  function about()
  {
    $this->Main->view('about');
  }

  function project()
  {
    $this->Main->view('project');
  }

  function ask()
  {
    $query = $this->db->query("SELECT *
                                    FROM setting
                                    WHERE id = '999'");
    $info = $query->row();

    $telepon = $info->telepon;
    $whatsapp = $info->whatsapp;
    $main['alamat'] = $info->alamat;
    $main['email'] = $info->email;

    $tlp = preg_replace('/\D/', '', $telepon);
    if (substr($tlp, 0, 1) == "0") {
      $main['telepon'] = "62";
      $main['telepon'] .= substr($tlp, 1);
    } else {
      $main['telepon'] = $tlp;
    }

    $wa = preg_replace('/\D/', '', $whatsapp);
    if (substr($wa, 0, 1) == "0") {
      $main['whatsapp'] = "62";
      $main['whatsapp'] .= substr($wa, 1);
    } else {
      $main['whatsapp'] = $wa;
    }
    $this->Main->view('contact', $main);
  }

  function article()
  {
    $main['news'] = $this->Home->get_article();
    $this->Main->view('article', $main);
  }

  function article_detail($slug)
  {
    if ($row = $this->Home->get_article_detail($slug)->row()) {

      $main = [
        'data' => $row
      ];
      $this->Main->view('article_detail', $main);
    } else {
      $this->_error404();
    }
  }

  function photos()
  {
    $main['photos'] = $this->Home->get_photos();
    $this->Main->view('photos', $main);
  }

  function videos()
  {
    $main['videos'] = $this->Home->get_videos();
    $this->Main->view('videos', $main);
  }
}
