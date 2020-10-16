<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
        class hlavni_controller extends CI_Controller {
            function construct()
            {
                parent :: __construct();
                $this->load->model('hlavni_model');
            }
            
            public function PrvniVypis()
            {
                $data['knihy'] = $this->hlavni_model->vypsat_knihy(1);
                $data['menu'] = $this->hlavni_model->get_menu_polozky();

                $this->load->view('layout/header', $data);
                $this->load->view('content/hlavni_view', $data);
                $this->load->view('layout/footer');

            }

            public function vypis($obdobi)
            {
                $data['knihy'] = $this->hlavni_model->vypsat_knihy($obdobi);
                $data['menu'] = $this->hlavni_model->get_menu_polozky();

                $this->load->view('layout/header', $data);
                $this->load->view('content/hlavni_view', $data);
                $this->load->view('layout/footer');

            }

            public function petaridl()
            {
                $data['menu'] = $this->hlavni_model->get_menu_polozky();

                $this->load->view('layout/header', $data);
                $this->load->view('content/petaridl');
                $this->load->view('layout/footer');
            }

            public function kliknuti_na_knihu($kniha)
            {

                $data['menu'] = $this->hlavni_model->get_menu_polozky();

                $this->load->model("hlavni_model");
                $data['anotace_view'] = $this->hlavni_model->kliknuti_na_knihu($kniha);
                $this->load->view("layout/header", $data);
                $this->load->view('content/anotace_view', $data);
                $this->load->view("layout/footer");
           }

        }    
?>