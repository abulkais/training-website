<?php
class BlogModel extends CI_Model
{
    function get_posts()
    {
        $this->db->select('posts.id,posts.status,posts.title,posts.slug,posts.post_image,posts.body,posts.created_at,');
        $this->db->from('posts');
        $this->db->where(array('posts.status'=>0));
        $this->db->order_by('posts.id','desc');
        $query = $this->db->get();
        return $query->result_array();
    }
	
	function single_post($url_title)
    {
        $this->db->select('posts.id,posts.status,posts.title,posts.meta_description,posts.meta_keywords,posts.canonical_link,posts.slug,posts.post_image,posts.body,posts.created_at');
        $this->db->from('posts');
        $this->db->where(array('posts.status'=>0,'posts.slug'=>$url_title));
        $query = $this->db->get();
        return $query->result_array();
    }
    
	public function loadmoredata($page){
        $offset = 12*$page;
        $limit = 12;
        $sql = "select posts.id,posts.status,posts.title,posts.meta_description,posts.meta_keywords,posts.canonical_link,posts.slug,posts.post_image,posts.body,posts.created_at from posts as posts
        order by posts.id DESC limit $offset ,$limit";
        $result = $this->db->query($sql)->result();
        return $result;
    }
}
