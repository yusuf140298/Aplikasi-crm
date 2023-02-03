<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class TransaksiModel extends CI_model {
    public function add($data){
        $params['kode_transaksi'] = $data['kode_transaksi'];
        $params['tanggal_transaksi'] = $data['tanggal'];
        $params['id_user'] = $data['id_user'];
        $params['nama_product'] = $data['product'];
        $params['size'] = $data['size'];
        $params['color'] = $data['color'];
        $params['qty'] = $data['qty'];
        $params['id_sablon'] = $data['sablon'];
        $params['file_sablon'] = $data['image'];
        $params['total_transaksi'] = $data['total'];
        $params['status'] = $data['status'];
        $params['pesan_description'] = $data['pd'];
        $this->db->insert('transaksi', $params);
    }
    public function pembayaran($input, $potonganharga, $totalsemua) {
        $params['kode_transaksi'] = $input;
        $params['potongan_harga'] = $potonganharga;
        $params['total_bayar'] = $totalsemua;

        $this->db->insert('pembayaran', $params);

    }
    public function pengiriman($input, $totalsemua, $alamatLengkap) {
        $params['kode_transaksi'] = $input;
        $params['pembayaran'] = $totalsemua;
        $params['alamat'] = $alamatLengkap;

        $this->db->insert('pengiriman', $params);
    }
    public function komentar($input) {
        $params['kode_transaksi'] = $input;

        $this->db->insert('komentar', $params);
    }
    public function get($id = null){
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('user', 'user.id_user = transaksi.id_user');
        $this->db->join('sablon', 'sablon.id_sablon = transaksi.id_sablon');
        $this->db->join('pembayaran', 'pembayaran.kode_transaksi = transaksi.kode_transaksi');
        $this->db->join('pengiriman', 'pengiriman.kode_transaksi = transaksi.kode_transaksi');
        $this->db->join('komentar', 'komentar.kode_transaksi = transaksi.kode_transaksi');
        if($id != null){
            $this->db->where('id_transaksi', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
