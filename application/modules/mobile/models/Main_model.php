<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_model extends CI_Model
{

	function view($view, $main = '')
	{
		$info = $this->info();
		$telepon = $info->telepon;
		$whatsapp = $info->whatsapp;
		$header['alamat'] = $info->alamat;
		$header['email'] = $info->email;

		$tlp = preg_replace('/\D/', '', $telepon);
		if (substr($tlp, 0, 1) == "0") {
			$header['telepon'] = "62";
			$header['telepon'] .= substr($tlp, 1);
		} else {
			$header['telepon'] = $tlp;
		}

		$wa = preg_replace('/\D/', '', $whatsapp);
		if (substr($wa, 0, 1) == "0") {
			$header['whatsapp'] = "62";
			$header['whatsapp'] .= substr($wa, 1);
		} else {
			$header['whatsapp'] = $wa;
		}

		$this->load->view('v_header', $header);
		$this->load->view($view, $main);
		$this->load->view('v_footer');
	}

	function info()
	{
		$query = $this->db->query("SELECT *
                                    FROM setting
                                    WHERE id = '999'");
		return $query->row();
	}
}
