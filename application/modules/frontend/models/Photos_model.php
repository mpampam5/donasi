<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Photos_model extends CI_Model
{

  function photos()
  {
    $query = $this->db->get("media_foto");
    return $query->result();
  }
}
