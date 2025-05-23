<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

    private $table = 'tm_news';

    public function get_all_news() {
        return $this->db->get($this->table)->result();
    }

    public function get_news_by_id($id) {
        return $this->db->get_where($this->table, ['news_id' => $id])->row();
    }

    public function get_related_news($current_id) 
    {
    $this->db->where('news_id !=', $current_id);
    $this->db->order_by('updated_at', 'DESC');
    return $this->db->get('tm_news')->result();
    }



    public function insert_news($data) {
        return $this->db->insert($this->table, $data);
    }

    public function update_news($id, $data) {
        return $this->db->where('news_id', $id)->update($this->table, $data);
    }

    public function delete_news($id) {
        return $this->db->where('news_id', $id)->delete($this->table);
    }
}
