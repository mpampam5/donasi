<?php defined('BASEPATH') or exit('No direct script access allowed');

function setting($field)
{
  $ci = get_instance();
  $news = $ci->db->get_where("setting", ["id" => 999])->row();
  return $news->$field;
}

//WIDGET

function donasi($field){
  $ci=get_instance();
  $row = $ci->db->get_where("donasi_total",["id"=>1])->row();
  return $row->$field;
}

function format_rupiah($int)
  {
    return number_format($int, 0, ',', '.');
  }

function widget_video($title, $limit)
{
  $ci = &get_instance();
  $query = $ci->db->select('id,judul,slug,url,created_at')
    ->from('media_video')
    ->order_by('id', 'DESC')
    ->limit($limit)
    ->get();
  if ($query->num_rows() > 0) {
    $str = '<div class="widget widget-video">
              <h5 class="widget-title">' . $title . '</h5>';
    foreach ($query->result() as $news) {
      $image_yt = explode("=",$news->url);
      $str .= '
      <a class="gallery-item type-video mb-2" href="'.$news->url.'&amp;amp;autoplay=1&amp;amp;rel=0&amp;amp;controls=0&amp;amp;showinfo=0" data-options="{&quot;caption&quot;: &quot;'.$news->judul.'&quot;}" data-fancybox="single" data-width="1000" data-height="563">
        <img src="http://i3.ytimg.com/vi/'.$image_yt[1].'/hqdefault.jpg" alt="Gallery Image">
      </a>';
    }



    return $str;
  }
}



function get_menu()
{
  $ci = &get_instance();
  $menu = $ci->db->select('id,name,url,sort,type,is_active')
    ->from("menu_public")
    ->where("is_active", 1)
    ->where("is_parent", 0)
    ->order_by("sort", "asc")
    ->get();
  $str = "<ul class='navbar-nav d-none d-lg-block'>";
  foreach ($menu->result() as $menus) {
    $sub_menu = $ci->db->select('id,name,url,sort,type,is_active')
      ->from("menu_public")
      ->where("is_active", 1)
      ->where("is_parent", $menus->id)
      ->order_by("sort", "asc")
      ->get();
    if ($sub_menu->num_rows() > 0) {
      $str .= '<li class="nav-item dropdown-toggle">';
      $str .= '<a href="#" class="nav-link">' . $menus->name . '</a>';
      $str .= '<ul class="dropdown-menu">';
      foreach ($sub_menu->result() as $sub_menus) {
        $str .= '<li class="dropdown-item"><a class="nav-link" href="' . site_url($sub_menus->url) . '" target="' . $sub_menus->type . '">' . $sub_menus->name . '</a></li>';
      }
      $str .= '</ul>';
      $str .= '</li>';
    } else {
      $str .= '<li class="nav-item"><a class="nav-link" href="' . site_url($menus->url) . '" target="' . $menus->type . '">' . $menus->name . '</a></li>';
    }
  }

  $str .= '</ul>';

  return $str;
}


function get_menu_mobile()
{
  $ci = &get_instance();
  $menu = $ci->db->select('id,name,url,sort,type,is_active')
    ->from("menu_public")
    ->where("is_active", 1)
    ->where("is_parent", 0)
    ->order_by("sort", "asc")
    ->get();
  $str = "";
  foreach ($menu->result() as $menus) {
    $sub_menu = $ci->db->select('id,name,url,sort,type,is_active')
      ->from("menu_public")
      ->where("is_active", 1)
      ->where("is_parent", $menus->id)
      ->order_by("sort", "asc")
      ->get();
    if ($sub_menu->num_rows() > 0) {
      $str .= '<div class="card">
                  <div class="card-header">';
      $str .= '<a href="#" class="mobile-menu-link">' . $menus->name . '</a>
              <a class="collapsed" href="#account-submenu" data-toggle="collapse"></a>
              ';
      $str .= '</div>
                <div class="collapse" id="account-submenu" data-parent="#accordion-menu">
                  <div class="card-body">
                <ul>';
      foreach ($sub_menu->result() as $sub_menus) {
        $str .= '<li class="dropdown-item"><a href="' . site_url($sub_menus->url) . '" target="' . $sub_menus->type . '">' . $sub_menus->name . '</a></li>';
      }
      $str .= '</ul>
                  </div>
                </div>
              </div>';
    } else {
      $str .= '<div class="card">
                  <div class="card-header">
                    <a class="mobile-menu-link" href="' . site_url($menus->url) . '" target="' . $menus->type . '">' . $menus->name . '</a>
                  </div>
                </div>';
    }
  }


  return $str;
}


function other_article($id)
{
  $ci = &get_instance();
  $query = $ci->db->query("SELECT
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
                              trans_news_category.id_news != $id
                            ORDER BY
                              news.title ASC
                            LIMIT 4");

  $str = "";
  foreach ($query->result() as $news) {

    if ($news->image != "") {
      $image_post = base_url("temp/img_manager/news/thumbs/$news->image");
    } else {
      $image_post = base_url("temp/default.png");
    }

    $str .= '<div class="col-12 col-sm-6 col-md-3">
            <div class="card card-widget">
              <div class="card-img">
                <a href="' . site_url("news/detail/$news->id_news/$news->slug") . '">
                  <div class="other-article-img" style="background:url(' . $image_post . ')"></div>
                </a>
              </div>
              <div class="card-block">
                <h4 class="card-title"><a href="' . site_url("news/detail/$news->id_news/$news->slug") . '">' . substr($news->title, 0, 50) . '...</a></h4>
                <div class="card-meta"><span><i class="fa fa-clock-o"></i> ' . date('d M Y', strtotime($news->created_at)) . '</span></div>
                <p>' . substr(strip_tags($news->description), 0, 100) . '...</p>
              </div>
            </div>
          </div>';
  }

  return $str;
}

function img_alpha($str)
{
  $img = strtolower($str);
  $imgs = substr($img,0,1);
  return base_url()."temp/icon-alpha/$imgs.ico";
}
