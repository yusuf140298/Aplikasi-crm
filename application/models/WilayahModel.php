<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class WilayahModel extends CI_model {
    private $db2;
    public function __construct(){
        parent::__construct();
        $this->db2 = $this->load->database('database_kedua', TRUE);
    }

    public function get_all(){
        $this->db2->select('*');
        $this->db2->from('wilayah_provinsi');
        $query = $this->db2->get();

        return $query->result();
    }
}