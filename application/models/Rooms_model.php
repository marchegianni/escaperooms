<?php

class Rooms_model extends CI_model {
    
    public function __construct() {
        
        $this->load->database();
    }
    
    public function get_rooms($slug = FALSE) {
        
        if ($slug === FALSE) {
                $query = $this->db->get('news');
                return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function create_room() {
        
        $this->load->helper('url');
    
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
    
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );
    
        return $this->db->insert('rooms', $data);
    }
}

?>