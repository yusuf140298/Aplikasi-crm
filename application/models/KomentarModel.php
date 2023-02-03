<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class KomentarModel extends CI_model {

    public function add($post){
        $params['komentar'] = $post['komentar'];
        $params['rate'] = $post['rate'];
        $params['tanggal_input'] = date('Y-m-d H:i:s');
        
        $this->db->where('kode_transaksi', $post['kode']);
        $this->db->update('komentar', $params);
    }
    
}