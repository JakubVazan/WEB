<?php       
    if( ! defined('BASEPATH')) exit('No direct script access allowed');

        class hlavni_model extends CI_Model{
            
            public function get_menu_polozky() 
            {
                $this->db->select('*');
                $this->db->from('menu');
                $this->db->order_by('idmenu');

                $query = $this->db->get();
                return $query->result();
            }

            public function vypsat_knihy($idobdobi)
            {
                $query = $this->db->query("SELECT * FROM knihy WHERE obdobi =  ". $idobdobi);
                return $query->result();
            }

            public function kniha($kniha)
            {
                $this->db->select('*');
                $this->db->from('knihy');
                $this->db->where('id_knihy = '. $kniha);

                $query = $this->db->get();
                return $query->result();
            }

            public function kliknuti_na_knihu($id)
            {
                $query = $this->db->query('SELECT * FROM knihy WHERE id_knihy = '.$id);
                return $query->result();
            }

        }
 ?>