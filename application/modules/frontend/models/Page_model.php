<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model{


function  get_data($slug)
{
  return $this->db->get_where('page',array("slug"=>$slug))
                  ->row();

}



} //end model
