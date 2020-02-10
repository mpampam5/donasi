<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends Front
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Page_model', 'model');
  }

  function index($str = "")
  {
    $this->template->set_title('' . setting('title'));
    //meta seo
    $this->meta_tags->set_meta_tag('description', setting('title') . ' ' . setting('alamat'));
    // *$this->meta_tags->unset_meta_tag('author');
    // * $this->meta_tags->add_robots_rule('NOINDEX');
    // * $this->meta_tags->add_keyword('php');
    //end meta seo


    if ($row = $this->model->get_data($str)) {
      $data = [
        'row' => $row
      ];

      $this->template->view('page/index', $data);
    } else {
      $this->_error404();
    }
  }

  function ask()
  {
    $this->template->set_title('' . setting('title'));
    //meta seo
    $this->meta_tags->set_meta_tag('contact', setting('title') . ' ' . setting('alamat'));
    // *$this->meta_tags->unset_meta_tag('author');
    // * $this->meta_tags->add_robots_rule('NOINDEX');
    // * $this->meta_tags->add_keyword('php');
    //end meta seo

    $query = $this->db->query(' SELECT *
                                FROM setting
                                WHERE id = "999"');
    $result = $query->row_array();
    // return $result['SUM(amount)'];

    // $row = $this->model->get_where($this->table, ['id' => $this->id]);

    $telepon = $result['telepon'];
    $whatsapp = $result['whatsapp'];
    $data['alamat'] = $result['alamat'];

    $tlp = preg_replace('/\D/', '', $telepon);
    if (substr($tlp, 0, 1) == "0") {
      $data['telepon'] = "62";
      $data['telepon'] .= substr($tlp, 1);
    } else {
      $data['telepon'] = $tlp;
    }

    $wa = preg_replace('/\D/', '', $whatsapp);
    if (substr($wa, 0, 1) == "0") {
      $data['whatsapp'] = "62";
      $data['whatsapp'] .= substr($wa, 1);
    } else {
      $data['whatsapp'] = $wa;
    }

    $this->template->view('page/ask', $data);
  }
}//end class
