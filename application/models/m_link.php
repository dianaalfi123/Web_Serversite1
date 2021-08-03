<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_link extends CI_Model {

	
    public function data_produk(){
        $id_users = $this->session->userdata('id_users');
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where('id_users="'.$id_users.'"');
        return $this->db->get();
    }
}
?>