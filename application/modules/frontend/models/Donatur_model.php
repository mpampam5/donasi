<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donatur_model extends CI_Model{


function json()
{
  $this->datatables->select('donatur.id_donatur AS id_donatur,
                              donatur.nama AS nama,
                              FORMAT(donatur.donasi,0) AS donasi,
                              donatur.is_anonim AS is_anonim,
                              DATE_FORMAT(donatur.is_created,"%d/%m/%Y %H:%i") AS is_created,
                              donatur.is_verifikasi AS is_verifikasi,
                              donatur.is_delete AS is_delete,
                              wil_provinsi.`name` AS provinsi');
  $this->datatables->from("donatur");
  $this->datatables->join("wil_provinsi","wil_provinsi.id = donatur.provinsi");
  $this->datatables->where("donatur.is_verifikasi","1");
  $this->datatables->where("donatur.is_delete","0");
  return $this->datatables->generate();
}



} //end model
