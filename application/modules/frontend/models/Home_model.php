<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{

  function news()
  {
    $query = $this->db->query("SELECT
                              	trans_news_category.id_news_category,
                              	trans_news_category.id_category,
                              	trans_news_category.id_news,
                                trans_news_category.headline,
                              	trans_news_category.delete,
                              	news.id_news,
                              	news.title,
                              	news.slug,
                              	news.description,
                              	news.image,
                              	news.created_at,
                              	category.id_category,
                              	category.category
                              FROM
                              	trans_news_category
                              	INNER JOIN news ON trans_news_category.id_news = news.id_news
                              	INNER JOIN category ON trans_news_category.id_category = category.id_category
                              WHERE
                              	trans_news_category.delete = '0'
                              ORDER BY
                                trans_news_category.id_news_category DESC
                              LIMIT 4");
    return $query;
  }

  function headline_news()
  {
    $query = $this->db->query("SELECT
                              	trans_news_category.id_news_category,
                              	trans_news_category.id_category,
                              	trans_news_category.id_news,
                                trans_news_category.headline,
                              	trans_news_category.delete,
                              	news.id_news,
                              	news.title,
                              	news.slug,
                              	news.description,
                              	news.image,
                              	news.created_at,
                              	category.id_category,
                              	category.category
                              FROM
                              	trans_news_category
                              	INNER JOIN news ON trans_news_category.id_news = news.id_news
                              	INNER JOIN category ON trans_news_category.id_category = category.id_category
                              WHERE
                              	trans_news_category.delete = '0'
                                AND
                                trans_news_category.headline = 1
                              ORDER BY
                                trans_news_category.id_news_category DESC");
    return $query;
  }


  function foto()
  {
    $qry = $this->db->select("*")
                    ->from("media_foto")
                    ->order_by("id","DESC")
                    ->limit(3)
                    ->get();
    return $qry->result();
  }


  function video()
  {
    $qry = $this->db->select("*")
                    ->from("media_video")
                    ->order_by("id","DESC")
                    ->limit(2)
                    ->get();
    return $qry->result();
  }

  function donatur()
  {
    $qry = $this->db->select("donatur.id_donatur,
                              donatur.nama,
                              donatur.is_anonim,
                              donatur.donasi,
                              donatur.is_verifikasi,
                              donatur.is_delete,
                              wil_provinsi.name")
                    ->from("donatur")
                    ->join("wil_provinsi","wil_provinsi.id = donatur.provinsi")
                    ->where("donatur.is_verifikasi","1")
                    ->where("donatur.is_delete","0")
                    ->order_by("id_donatur","DESC")
                    ->limit(10)
                    ->get();
    return $qry->result();
  }

}
