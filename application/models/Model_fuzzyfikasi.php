 <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Model_fuzzyfikasi extends CI_Model
    {

        public function status_tidakbaik_ipk()
        {
            $query = $this->db->query("SELECT `Status` FROM variabel_ipk WHERE id_variable_ipk=1;");
            return $query->result();
        }
        public function hasil_fuzzyfikasi()
        {
            return $this->db->get('fuzzyfikasi')->result_array();
        }
        public function coba()
        {
            //     $query= $this->db->get_where('kategori',array('Keterangan'=>$keterangan));
            // return $query->row_array();   
            // $query= $this->db->query("SELECT Keterangan,
            // nilai_minimum,nilai_maksimal FROM 
            // kategori WHERE id_kategori='1'");
            // return $query->row_array();

            $query = $this->db->query("SELECT Keterangan FROM 
 kategori WHERE id_variabel='1';");
            return $query->result_array();


            // $this->db->select('*');
            // $this->db->from('kategori');
            // $this->db->where('keterangan',$keterangan);
            // $query=$this->db->get();
            // return $query->row();

        }
        public function StatusIpk()
        {
            $query = $this->db->query("SELECT Keterangan FROM 
 kategori WHERE id_variabel='1';");
            return $query->result_array();
        }
        public function StatusItaq()
        {
            $query = $this->db->query("SELECT Keterangan FROM 
 kategori WHERE id_variabel='2';");
            return $query->result_array();
        }
        public function StatusTaat(){
            $query = $this->db->query("SELECT Keterangan FROM 
 kategori WHERE id_variabel='3';");
            return $query->result_array();  
        }
        public function StatusVisi(){
            $query = $this->db->query("SELECT Keterangan FROM 
 kategori WHERE id_variabel='4';");
            return $query->result_array();  
        }
        public function StatusHasil()
        {
            $query = $this->db->query("SELECT Keterangan FROM 
 kategori WHERE id_variabel='5';");
            return $query->result_array();
        }
    }
