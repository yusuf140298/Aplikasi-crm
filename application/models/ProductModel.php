<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_model {

    // models.product
    public function get($id = null){
        $this->db->select('product.*, category.nama_category,category.description as category_description');
        $this->db->from('product');
        $this->db->join('category', 'category.id_category = product.product_category');
        if($id !=null){
            $this->db->where('id_product', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function tampil($id = null){
        $this->db->select('product.*, category.nama_category,category.description as category_description');
        $this->db->from('product');
        $this->db->group_by('product_category');
        $this->db->join('category', 'category.id_category = product.product_category');
        if($id !=null){
            $this->db->where('id_product', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post){
        $params['nama_product'] = $post['items'];
        $params['qty'] = $post['qty'];
        $params['price'] = $post['price'];
        $params['product_category'] = $post['category'];
        $params['image'] = $post['image_product'];
        $params['color'] = $post['color'];
        $params['size'] = $post['size'];
        $params['description'] = $post['description'];

        $this->db->insert('product', $params);
    }
    public function delete($id){
        $this->db->where('id_product', $id);
        $this->db->delete('product');
    }
    public function edit($post){
        $params['nama_product'] = $post['items'];
        $params['qty'] = $post['qty'];
        $params['price'] = $post['price'];
        $params['product_category'] = $post['category'];
        if ($post['image_product'] != null){
        $params['image'] = $post['image_product'];
        }
        $params['color'] = $post['color'];
        $params['size'] = $post['size'];
        $params['description'] = $post['description'];

        $this->db->where('id_product', $post['id_product']);
        $this->db->update('product', $params);

    }
    public function get_sablon($id = null){
        $this->db->from('sablon');
        if($id !=null){
            $this->db->where('id_sablon', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add_sablon($post){
        $params['ukuran_sablon'] = $post['ukuran'];
        $params['price'] = $post['price'];
        $params['spesification'] = $post['spesifikasi'];
        $params['image'] = $post['image_sablon'];
        $params['description'] = $post['description'];

        $this->db->insert('sablon', $params);
    }
    public function edit_Sablon($post){
        $params['ukuran_sablon'] = $post['ukuran'];
        $params['price'] = $post['price'];
        $params['spesification'] = $post['spesifikasi'];
        if ($post['image_sablon'] != null){
            $params['image'] = $post['image_sablon'];
        }
        $params['description'] = $post['description'];

        $this->db->where('id_sablon', $post['id_sablon']);
        $this->db->update('sablon', $params);

    }
    public function get_image($post){
        $query= $this->db->get_where('sablon',['id_sablon' => $post]);
         if($query->num_rows()>0){
             foreach($query->result() as $data){
                 $hasil = array(
                     'image' => $data->image,
                     'price' => $data->price
                 );
             }
         }
         return $hasil;
    }
    public function get_size($post){
        $idproduct = $post['idProduct'];
        $idsize = $post['idSize'];
        $idcolor = $post['val'];
        // $where = array(
        //     product_category => $post['idProduct'],
        //     size => $post['idSize'],
        //     color => $post['val']
        // );
        // echo $post['idProduct'];
        $query = $this->db->query("SELECT * FROM product WHERE product_category=$idproduct AND size='".$idsize."' AND color='".$idcolor."'");
         if($query->num_rows()>0){
             foreach($query->result() as $data){
                 $tampil = array(
                     'price' => $data->price
                 );
             }
         }else{
            $tampil = array(
                'price' => null
            );
         }
         return $tampil;
    }
    
}