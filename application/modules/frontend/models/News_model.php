<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News_model extends CI_Model
{



  function category()
  {
    return $this->db->select("*")
      ->from("category")
      ->where("delete", '0')
      ->order_by("category", "ASC")
      ->get();
  }


  function news_total_count()
  {
    return  $this->db->query("SELECT
                                trans_news_category.id_news_category,
                                trans_news_category.id_category,
                                trans_news_category.id_news,
                                trans_news_category.delete,
                                news.id_news,
                                category.id_category
                              FROM
                                trans_news_category
                                INNER JOIN news ON trans_news_category.id_news = news.id_news
                                INNER JOIN category ON trans_news_category.id_category = category.id_category
                              WHERE
                                trans_news_category.delete = '0'")
      ->num_rows();
  }


  function fetch_detail($start, $limit)
  {
    $output = '';
    $query = $this->db->select("trans_news_category.id_news_category,
                                trans_news_category.id_category,
                                trans_news_category.id_news,
                                trans_news_category.delete,
                                news.id_news,
                                news.title,
                                news.slug,
                                news.description,
                                news.image,
                                news.created_at,
                                category.id_category,
                                category.category")
      ->from("trans_news_category")
      ->join("news", "trans_news_category.id_news = news.id_news")
      ->join("category", "trans_news_category.id_category = category.id_category")
      ->where("trans_news_category.delete", '0')
      ->order_by("id_news_category", "DESC")
      ->limit($start, $limit)
      ->get();

    foreach ($query->result() as $row) {

      if ($row->image != "") {
        $image_post = base_url("temp/img_manager/news/thumbs/$row->image");
      } else {
        $image_post = base_url("temp/default.png");
      }

      // $output .='<a class="featured-post" href="blog-single-gallery.html">
      //             <div class="featured-post-thumb" style="min-width:200px;!important">
      //                 <img src="'.$image_post.'" alt="Post Thumbnail">
      //             </div>
      //             <div class="featured-post-info">
      //               <div class="featured-post-meta">
      //                 <span class="text-primary opacity-70"><i class="fe-icon-clock"></i>'.date("d/m/Y",strtotime($row->created_at)).'</span>
      //                 <span class="ml-3"><i class="fe-icon-link"></i>'.$row->category.'</span>
      //               </div>
      //               <div class="featured-post-title" style="font-size:16px;font-weight:bold">'.ucfirst($row->title).'</div>
      //             </div>
      //           </a>';


      $output .='<div class="card blog-card mb-3">
                  <div class="card-body">
                    <h5 class="post-title"><a href="'.site_url("news/detail/".$row->id_news."/".$row->slug).'">'.ucfirst($row->title).'</a></h5>
                    <p class="text-muted">'.substr($row->description,0,200).'
                      <a href="'.site_url("news/detail/".$row->id_news."/".$row->slug).'" class="text-primary">[Baca Selengkapnya]</a>
                    </p>
                  </div>
                  <div class="card-footer">
                    <div class="post-meta">
                    <a href="blog-single-audio.html#comments">
                    <i class="fe-icon-link"></i>'.$row->category.'
                    </a>
                    <span><i class="fe-icon-clock"></i>'.date("d/m/Y",strtotime($row->created_at)).'</div>
                  </div>
                </div>';

    }



    return $output;
  }


  function news_detail($id, $slug)
  {
    $query = $this->db->query("SELECT
                                trans_news_category.id_news_category,
                                trans_news_category.id_category,
                                trans_news_category.id_news,
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
                              INNER JOIN
                                news ON trans_news_category.id_news = news.id_news
                              INNER JOIN
                                category ON trans_news_category.id_category = category.id_category
                              WHERE
                                trans_news_category.delete = '0' AND
                                trans_news_category.id_news = $id AND
                                news.slug = '$slug'
                                ");
    return $query;
  }
} //end model
