<?php

class AddressController extends CI_Controller {
    public function edit() {
        $address = array(
            'address1' => $this->input->post('address1'),
            'address2' => $this->input->post('address2'),
            'city' => $this->input->post('city'),
            'state' => $this->input->post('state'),
            'country' => $this->input->post('country'),
            'id' => $this->input->post('id')
        );
        $this->load->model('address_model');
        $this->address_model->updateAddress($address);
        $this->load->view('edit_success');
        
    }
    
    public function index() {
        $this->load->view('HomeView');
        $this->load->model('address_model');
        $data['addresses'] = $this->address_model->getAddresses();
        $this->load->view('address_info', $data);
    }
    
    public function new_address() {
        $this->load->view('address_create');
    }
    
    public function edit_address() {
        $this->load->model('address_model');
        $id = $this->input->get("id");
        $data['address'] = $this->address_model->getAddress($id)->result_array()[0];
//        echo "Query result is ".serialize($data['address']['address1']);
        $this->load->view("address_edit", $data);
    }
    
    public function create() {
        $address = array(
            'address1' => $this->input->post('address1'),
            'address2' => $this->input->post('address2'),
            'city' => $this->input->post('city'),
            'state' => $this->input->post('state'),
            'country' => $this->input->post('country'),
        );
        $this->load->model('address_model');
        $this->address_model->insertAddress($address);
        $this->load->view('create_success');
    }
    
    public function delete() {
        $id = $this->input->get('id');
        $this->load->model('address_model');
        $this->address_model->deleteAddress($id);
        redirect('AddressController');
    }
}
