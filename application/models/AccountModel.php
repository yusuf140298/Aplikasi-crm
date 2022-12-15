<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class AccountModel extends CI_model {
    
    public function get($id = null){
        $this->db->from('user');
        if($id !=null){
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add_admin($post){
        $params['nama'] = $post['nama'];
        $params['username'] = $post['username'];
        $params['email'] = $post['email'];
        $params['password'] = sha1($post['password']);
        $params['no_tlp'] = $post['no_tlp'];
        $params['rule'] = $post['rule'];

        $this->db->insert('user', $params);
    }
    public function delete_admin($id){
        $this->db->where('id_user', $id);
        $this->db->delete('user');
     }


}