<?php

class Address_model extends CI_Model {
    public function __construct() {        
        parent::__construct();
        $this->load->database();
    }
    
    public function getAddresses() {
        $query = $this->db->get('addresses');
        return $query->result();
    }
    
    public function getAddress($id) {
        $this->db->select("*")->from('addresses')->where('id', $id);
        return $this->db->get();     
    }
    
    public function insertAddress($address) {
        /*
         * data should be like
         * "address1" => address1,
         * "address2" => address2, etc
         * 
         */
        $this->db->insert('addresses', $address);
    }
    
    public function updateAddress($address) {
        $this->db->where('id', $address['id']);
        $this->db->update('addresses', $address);
    }
    
    public function deleteAddress($id) {
        $this->db->where('id', $id);
        $this->db->delete('addresses');
    }
}
