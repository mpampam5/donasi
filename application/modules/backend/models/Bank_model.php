<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* modules/backend/models/Bank_model.php */
/* MPAMPAM CRUD GENERATOR */
/* PENGEMBANG : MPAMPAM */
/* EMAIL : MPAMPAM5@GMAIL.COM */
/* FACEBOOK : https://www.facebook.com/mpampam */
/* DIBUAT OLEH MPAMPAM CRUD GENERTOR 2020-02-10 10:15:29 */
/* https://mpampam.com */
/* DI GUNAKAN OLEH USER  */


class Bank_model extends MY_Model{

	private $table = "bank";


	function json()
	{
		$this->datatables->select('id_rek,bank,no_rek,nama_rek');
		$this->datatables->from($this->table);
    $this->datatables->where("is_delete","0");
    $this->datatables->add_column('action',
                                  '<a href="'.site_url("backend/bank/detail/$1").'" id="detail" class="btn btn-link p-a-5 text-info" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="fa fa-file"></i></a>
                                  <a href="'.site_url("backend/bank/update/$1").'" id="update" class="btn btn-link p-a-5 text-warning" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil"></i></a>
                                  <a href="'.site_url("backend/bank/delete/$1").'" id="hapus" class="btn btn-link p-a-5 text-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus"><i class="fa fa-trash"></i></a>',
                                  'id_rek');
    return $this->datatables->generate();
	}




} /*End Class Bank_model*/
