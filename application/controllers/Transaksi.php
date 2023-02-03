<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
    private $db2;
    function __construct(){
		parent::__construct();
		$this->load->model('ProductModel');
		$this->load->model('CategoryModel');
		$this->load->model('WilayahModel');
		$this->load->model('TransaksiModel');
        $this->db2 = $this->load->database('database_kedua', TRUE);
		// check_not_login();
	}

    public function transaksi($id){
        $query = $this->CategoryModel->get($id);
        if ($query->num_rows() > 0) {
                $data['title'] = "Transaksi";
				$data ['row'] = $query->row();
                $data ['sablon'] = $this->ProductModel->get_sablon();
				$data ['siz'] = $this->db->query("SELECT * FROM product WHERE product_category = $id GROUP BY size ASC");
				$data ['col'] = $this->db->query("SELECT * FROM product WHERE product_category = $id GROUP BY color ASC");
                $this->template->load('user/maincontents','user/page/shop', $data);
			}else{
				echo "<script>alert('Data Tidak di Temukan!');
				window.location='".site_url('Product')."';
				</script>";
			}
    }
    public function get_data(){
        $post = $this->input->post('id');
        $data = $this->ProductModel->get_image($post);
        echo json_encode($data);
        

    }

    public function get_size(){
        $post = $this->input->post(null, TRUE);
        $data = $this->ProductModel->get_size($post);
        echo json_encode($data);
        

    }

    public function invoice(){
        $data ['provinsi'] = $this->WilayahModel->get_all();
        $this->template->load('user/maincontents','user/page/invoice', $data);
    }

    // ajax wilayah data
    public function add_ajax_kota($id_prov){
        $query = $this->db2->get_where('wilayah_kabupaten',array('provinsi_id'=>$id_prov));
        // $data = "<option value=''>- Select Kabupaten -</option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='".$value->id."'>".$value->nama."</option>";
        }
        echo $data;
    }
    public function add_ajax_kec($id_kab){
        $query = $this->db2->get_where('wilayah_kecamatan',array('kabupaten_id'=>$id_kab));
        // $data = "<option value=''> - Pilih Kecamatan - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='".$value->id."'>".$value->nama."</option>";
        }
        echo $data;
    }
    public function add_ajax_des($id_kec){
        $query = $this->db2->get_where('wilayah_desa',array('kecamatan_id'=>$id_kec));
        // $data = "<option value=''> - Pilih Desa - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='".$value->id."'>".$value->nama."</option>";
        }
        echo $data;
    }
    public function prosess(){
        $data['kode_transaksi'] = $this->input->post('kodetransaksi');
        $data['tanggal'] = date('Y-m-d H:i:s');
        $data['id_user'] = $this->input->post('iduser');
        $data['product'] = $this->input->post('product');
        $data['size'] = $this->input->post('size');
        $data['color'] = $this->input->post('color');
        $data['qty'] = $this->input->post('qty');
        $data['sablon'] = $this->input->post('sablon');
        $data['image'] = $this->input->post('image');
        $data['pd'] = $this->input->post('pd');
        $data['hargaproduct'] = $this->input->post('hargaProduct');
        $data['hargasablon'] = $this->input->post('hargaSablon');
        $data['status'] = "1";
        $data['total'] = ($data['hargaproduct']*$data['qty'])+$data['hargasablon'];

        $config['upload_path']          = './uploads/img_sablon';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['file_name']             ='product-'.date('ymd').'-'.substr(md5(rand()),0,10);
        $this->load->library('upload',$config);

        if(@$_FILES['image']['name'] != null){
            if($this->upload->do_upload('image')){
                $data['image'] = $this->upload->data('file_name');
                $this->TransaksiModel->add($data);
                if($this->db->affected_rows()>0){
                    // $this->session->set_flashdata('success', 'Data Berhasi Disimpan');
                }
                $data ['provinsi'] = $this->WilayahModel->get_all();
                $data['kode_transaksi'] = $this->input->post('kodetransaksi');
                $data['tanggal'] = date('Y-m-d H:i:s');
                $data['hargaproduct'] = $this->input->post('hargaProduct');
                $data['hargasablon'] = $this->input->post('hargaSablon');
                $data['qty'] = $this->input->post('qty');
                $data['total'] = ($data['hargaproduct']*$data['qty'])+$data['hargasablon'];
                $this->template->load('user/maincontents','user/page/invoice', $data);
            }else{
                $error =$this->upload->display_errors();
                // echo $error;
                redirect('Transaksi/transaksi');

            }
        }

    }
    public function bayar(){
        error_reporting(0);
        $input = $this->input->post('kode');
        $hargap = $this->input->post('hargap');
        $hargas = $this->input->post('hargas');
        $potonganharga = $this->input->post('potonganharga');
        $sublotal = $this->input->post('subToValue');
        $totalsemua = $this->input->post('totalsemua');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $tlp = $this->input->post('no_tlp');
        $provinsi = $this->input->post('provinsi');
        $kota = $this->input->post('kota');
        $kecamatan = $this->input->post('kecamatan');
        $desa = $this->input->post('desa');
        $alamat = $this->input->post('alamat');
        $alamatLengkap = $alamat.','.$desa.','.$kecamatan.','.$kota.','.$provinsi;
        $query = $this->db->query("SELECT * FROM transaksi JOIN user ON transaksi.id_user = user.id_user JOIN sablon ON transaksi.id_sablon = sablon.id_sablon WHERE kode_transaksi = '$input'");
        if($query->num_rows() > 0){
            $data = $query->row();
        }

        $pdf = new FPDF('P', 'mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(130 ,5,'THE KING PRINTING AND CLOTHING',0,0);
        $pdf->Cell(59 ,5,'INVOICE',0,1);//end of line

        $pdf->SetFont('Arial','',12);
        $pdf->Cell(130 ,5,'Jl. Utama Cikande Permai, Situterate, Kec. Cikande',0,0);
        $pdf->Cell(59 ,5,'',0,1);//end of line

        $pdf->Cell(130 ,5,'Kabupaten Serang, Banten (42186)',0,0);
        $pdf->Cell(12 ,5,'Date :',0,0);
        $pdf->Cell(34 ,5,$data->tanggal_transaksi,0,1);//end of line

        $pdf->Cell(130 ,5,'Phone +62 895 4055 8360 0',0,0);

        $pdf->SetFont('Arial','B',12);

        $pdf->Cell(25 ,10,'No Transaksi',0,0);
        $pdf->Cell(34 ,5,'',0,1);//end of line

        $pdf->Cell(130 ,5,'',0,0);
        $pdf->Cell(25 ,10,$data->kode_transaksi,0,0);
        $pdf->Cell(34 ,5,'',0,1);//end of line

        $pdf->SetFont('Arial','',12);

        $pdf->Cell(130 ,5,'',0,0);
        $pdf->Cell(25 ,5,'',0,0);
        $pdf->Cell(34 ,5,'',0,1);//end of line
        //buat dummy cell untuk memberi jarak vertikal
        $pdf->Cell(189 ,10,'',0,1);//end of line

        //alamat billing 
        $pdf->Cell(100 ,5,'Data Transaksi',0,1);//end of line

        //tambah dummy cell di awal untuk indentasi
        $pdf->Cell(10 ,5,'',0,0);
        $pdf->Cell(90 ,5,$nama,0,1);

        $pdf->Cell(10 ,5,'',0,0);
        $pdf->Cell(90 ,5,$email,0,1);

        $pdf->Cell(10 ,5,'',0,0);
        $pdf->Cell(90 ,5,$alamat.','.$desa.','.$kecamatan.','.$kota.','.$provinsi,0,1);

        $pdf->Cell(10 ,5,'',0,0);
        $pdf->Cell(90 ,5,$tlp,0,1);
        //buat dummy cell untuk memberi jarak vertikal
        $pdf->Cell(189 ,10,'',0,1);//end of line

        //invoice 
        $pdf->SetFont('Arial','B',12);

        $pdf->Cell(130 ,5,'Description',1,0);
        $pdf->Cell(25 ,5,'Qty',1,0);
        $pdf->Cell(34 ,5,'Amount',1,1);//end of line

        $pdf->SetFont('Arial','',12);

        //Angka diratakan kanan, jadi kita beri property 'R'

        $pdf->Cell(130 ,5,$data->nama_product.'-'.$data->color.' ('.$data->size.') ',1,0);
        $pdf->Cell(25 ,5,$data->qty,1,0);
        $pdf->Cell(34 ,5,$hargap * $data->qty,1,1,'R');//end of line

        $pdf->Cell(130 ,5,'('.$data->ukuran_sablon.') - '.$data->spesification,1,0);
        $pdf->Cell(25 ,5,'-',1,0);
        $pdf->Cell(34 ,5,$hargas==null?'0':$hargas,1,1,'R');//end of line

        $pdf->Cell(130 ,5,'Biaya Pengiriman',1,0);
        $pdf->Cell(25 ,5,'-',1,0);
        $pdf->Cell(34 ,5,'10,000',1,1,'R');//end of line

        //total
        $pdf->Cell(130 ,5,'',0,0);
        $pdf->Cell(25 ,5,'Subtotal',0,0);
        $pdf->Cell(4 ,5,'#',1,0);
        $pdf->Cell(30 ,5,$sublotal,1,1,'R');//end of line

        $pdf->Cell(130 ,5,'',0,0);
        $pdf->Cell(25 ,5,'Potongan',0,0);
        $pdf->Cell(4 ,5,'#',1,0);
        $pdf->Cell(30 ,5,$potonganharga==null?'0':$potonganharga,1,1,'R');//end of line

        // $pdf->Cell(130 ,5,'',0,0);
        // $pdf->Cell(25 ,5,'Tax Rate',0,0);
        // $pdf->Cell(4 ,5,'#',1,0);
        // $pdf->Cell(30 ,5,'10%',1,1,'R');//end of line

        $pdf->Cell(130 ,5,'',0,0);
        $pdf->Cell(25 ,5,'Total Bayar',0,0);
        $pdf->Cell(4 ,5,'#',1,0);
        $pdf->Cell(30 ,5,$totalsemua,1,1,'R');//end of line

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(130 ,100,'Note :',0,0);
        $pdf->Cell(59 ,5,'',0,1);//end of line

        $pdf->SetFont('Arial','',12);

        $pdf->Cell(130 ,102,'1. Invoice harus di simpan dan jangan sampai hilang! (Untuk bukti pengambilan pesanan)',0,0);
        $pdf->Cell(59 ,5,'',0,1);//end of line

        $pdf->Cell(130 ,102,'2. Pesanan Akan diproses ketika pesanan sudah dibayar',0,0);
        $pdf->Cell(59 ,5,'',0,1);//end of line

        $pdf->Cell(130 ,102,'3. Jika ada keluhan dan masalah bisa hubungi customer service melalui web',0,0);
        $pdf->Cell(59 ,5,'',0,1);//end of line

        $pdf->Cell(130 ,102,'4. pembayaran Menggunakan Bank Transfer 12012934 A/n Fitter Thia Armando',0,0);
        $pdf->Cell(59 ,5,'',0,1);//end of line
        $pdf->Cell(130 ,102,'5. kirim bukti pembayaran melalui WA 0895405583600 untuk validasi pembayaran',0,0);
        $pdf->Cell(59 ,5,'',0,1);//end of line

        // $pdf->Cell(130 ,102,'5. Invoice harus di simpan dan jangan sampai hilang',0,0);
        // $pdf->Cell(59 ,5,'',0,1);//end of line
        $pdf->Output();

        $this->TransaksiModel->pembayaran($input, $potonganharga, $totalsemua);
        $this->TransaksiModel->pengiriman($input, $totalsemua, $alamatLengkap);
        $this->TransaksiModel->komentar($input);

        if($this->db->affected_rows() > 0){
            redirect('Landing');
        }
        
        
        
    }
    public function history(){
            $data['transaksi'] = $this->TransaksiModel->get();
            $this->template->load('user/maincontents','user/page/history_transaksi',$data);
        
    }


}