<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* modules/backend/models/Contact_model.php */
/* MPAMPAM CRUD GENERATOR */
/* PENGEMBANG : MPAMPAM */
/* EMAIL : MPAMPAM5@GMAIL.COM */
/* FACEBOOK : https://www.facebook.com/mpampam */
/* DIBUAT OLEH MPAMPAM CRUD GENERTOR 2019-09-23 10:21:07 */
/* https://mpampam.com */
/* DI GUNAKAN OLEH USER  */


class Contact_model extends MY_Model{
    
	private $table = "message";


	function json()
	{
		$this->datatables->select('id_pesan,nama,email,subjek,pesan');
		$this->datatables->from($this->table);
    $this->datatables->add_column('action',
                                  '<a href="'.site_url("backend/contact/detail/$1").'" id="detail" class="btn btn-link p-a-5 text-info" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="fa fa-file"></i></a>
                                  ',
                                  'id_pesan');
    return $this->datatables->generate();
	}




} /*End Class Contact_model*/