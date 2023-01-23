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
    public function add($post){
        $params['nama_product'] = $post['items'];
        $params['qty'] = $post['qty'];
        $params['price'] = $post['price'];
        $params['product_category'] = $post['category'];
        $params['image'] = $post['image_product'];
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
        $params['image'] = $post['image_product'];
        $params['description'] = $post['description'];

        $this->db->where('id_product', $post['id_product']);
        $this->db->update('product', $params);

    }
}