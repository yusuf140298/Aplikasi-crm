<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_model {

    // models.category
    public function get($id = null){
        $this->db->select('product.*, category.nama_category,category.description as category_description');
        $this->db->from('product');
        $this->db->join('category', 'category.id_category = product.product_category');
        if($id !=null){
            $this->db->where('id_category', $id);
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
    // public function delete($id){
    //     $this->db->where('id_category', $id);
    //     $this->db->delete('category');
    // }
    // public function edit($post){
    //     $params['nama_category'] = $post['editcategory'];
    //     $params['description'] = $post['editdescription'];

    //     $this->db->where('id_category', $post['id_category']);
    //     $this->db->update('category', $params);

    // }
}