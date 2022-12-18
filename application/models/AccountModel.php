<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class AccountModel extends CI_model {

    // Login Admin
    public function login($post){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }
    // Account Admin
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
    public function edit_admin($post){
        $params['nama'] = $post['nama'];
        $params['username'] = $post['username'];
        $params['email'] = $post['email'];
        if (!empty($post['password'])) {
            $params['password'] = sha1($post['password']);
        }
        $params['no_tlp'] = $post['no_tlp'];
        $params['rule'] = $post['rule'];


        $this->db->where('id_user', $post['id_user']);
        $this->db->update('user', $params);

    }


}