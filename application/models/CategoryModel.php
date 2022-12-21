<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryModel extends CI_model {

    // models.category
    public function get($id = null){
        $this->db->from('category');
        if($id !=null){
            $this->db->where('id_category', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post){
        $params['nama_category'] = $post['category'];
        $params['description'] = $post['description'];

        $this->db->insert('category', $params);
    }
    public function delete($id){
        $this->db->where('id_category', $id);
        $this->db->delete('category');
    }
}