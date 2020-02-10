<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

    function get_article()
    {

        return $this->db->select("title, slug, description, image, created_at")
            ->from("news")
            ->order_by("created_at", "DESC")
            ->get()
            ->result();
    }

    function get_article_detail($slug)
    {
        $query = $this->db->query("SELECT
                                        title, slug, description, image, created_at
                                    FROM news
                                    WHERE
                                        slug = '$slug'
                                        ");
        return $query;
    }

    function get_photos()
    {
        $query = $this->db->get("media_foto");
        return $query->result();
    }

    function get_videos()
    {
        $query = $this->db->get("media_video");
        return $query->result();
    }
}
