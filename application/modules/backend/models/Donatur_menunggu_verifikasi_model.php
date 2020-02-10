<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* modules/backend/models/Donatur_menunggu_verifikasi_model.php */
/* MPAMPAM CRUD GENERATOR */
/* PENGEMBANG : MPAMPAM */
/* EMAIL : MPAMPAM5@GMAIL.COM */
/* FACEBOOK : https://www.facebook.com/mpampam */
/* DIBUAT OLEH MPAMPAM CRUD GENERTOR 2020-02-10 11:39:21 */
/* https://mpampam.com */
/* DI GUNAKAN OLEH USER  */


class Donatur_menunggu_verifikasi_model extends MY_Model{

	private $table = "donatur";


	function json()
	{
		$this->datatables->select('id_donatur,nama,telepon,email,FORMAT(donasi,0) AS donasi,DATE_FORMAT(is_created,"%d/%m/%Y %H:%i") AS is_created');
		$this->datatables->from($this->table);
    $this->datatables->where("is_verifikasi","0");
    $this->datatables->where("is_delete","0");
    $this->datatables->add_column('action',
                                  '
                                  <a href="'.site_url("backend/donatur_menunggu_verifikasi/update/$1").'" id="update" class="badge badge-success p-a-5 text-white" data-toggle="tooltip" data-placement="bottom" title="Edit">Edit & Konfirmasi</a>
                                  <a href="'.site_url("backend/donatur_menunggu_verifikasi/delete/$1").'" id="hapus" class="badge badge-danger p-a-5 text-white" data-toggle="tooltip" data-placement="bottom" title="Hapus"><i class="fa fa-trash"></i></a>',
                                  'id_donatur');
    return $this->datatables->generate();
	}




} /*End Class Donatur_menunggu_verifikasi_model*/
