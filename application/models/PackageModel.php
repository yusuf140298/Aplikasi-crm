<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class PackageModel extends CI_model {

    // models.category
    public function get($id = null){
        $this->db->select('package.*, product.nama_product,product.description as product_description, sablon.ukuran_sablon, sablon.description as sablon_description');
        $this->db->from('package');
        $this->db->join('product', 'product.id_product = package.items_product');
        $this->db->join('sablon', 'sablon.id_sablon = package.material_product');
        if($id !=null){
            $this->db->where('id_package', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    // public function add($post){
    //     $params['nama_category'] = $post['category'];
    //     $params['description'] = $post['description'];

    //     $this->db->insert('category', $params);
    // }
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