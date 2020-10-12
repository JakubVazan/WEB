<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class cetba_controller extends CI_Controller {
        function  __construct(){
            parent :: __construct();
            $this->load->model('cetba_model');            
        }

    public function menu()
    {
    
        $data['polozky'] = $this->cetba_model->get_menu_polozky();

    $this->load->view('layout/header', $data);
    $this->load->view('content/hlavni_view', $data);
    $this->load->view('layout/footer');

    }