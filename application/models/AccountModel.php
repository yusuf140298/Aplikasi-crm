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
    public function login_user($post){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $post['email']);
        $this->db->where('password', sha1($post['pass']));
        $query = $this->db->get();
        return $query;
    }
    // Account Admin
    public function get($id = null){
        $this->db->from('user');
        $this->db->where('rule <', 4);
        
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
        $params['status'] = 1;

        $this->db->insert('user', $params);
    }
    public function add_user($post){
        $params['nama'] = $post['nama'];
        $params['username'] = $post['username'];
        $params['email'] = $post['email'];
        $params['password'] = sha1($post['conpass']);
        $params['no_tlp'] = $post['no_tlp'];
        $params['rule'] = $post['rule'];
        $params['status'] = 1;

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
        $params['status'] = $post['status'];


        $this->db->where('id_user', $post['id_user']);
        $this->db->update('user', $params);

    }
    //  Account User

    public function getUser($id = null){
        $this->db->from('user');
        $this->db->where('rule >', 3);
        
        if($id !=null){
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function edit_user($post){
        $params['status'] = $post['status'];
        $this->db->where('id_user', $post['id_user']);
        $this->db->update('user', $params);

    }


}