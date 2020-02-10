<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_model extends CI_Model{

  function video()
  {
    $query = $this->db->get("media_video");
    return $query->result();
  }


}
