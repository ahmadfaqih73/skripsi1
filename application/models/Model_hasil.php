 <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Model_hasil extends CI_Model
    {
        public function readall()
        {

            $query = $this->db->query('SELECT hasil.id_hasil, Hasil_dezufikasi AS hasil, mahasiswa.Nama_mhs AS nama_mahasiswa  FROM `hasil` JOIN `mahasiswa` ON `mahasiswa`.`id_mahasiswa` = `hasil`.`nama_mhs` ORDER BY hasil.Hasil_dezufikasi DESC');
            return $query->result_array();
            // $this->db->join('mahasiswa', 'mahasiswa.id_mahassiswa = hasil.nama_mhs');
            // return $this->db->get('hasil')->result_array();
        }
        public function readfuzzifikasi()
        {
            $this->db->join('mahasiswa', 'mahasiswa.id_mahasiswa = tb_fuzzyfikasi.Nama_mhs');
            return $this->db->get('tb_fuzzyfikasi')->result_array();
        }
        public function readimplikasi()
        {
            $this->db->join('mahasiswa', 'mahasiswa.id_mahasiswa = implikasi.Nama_mhs');
            return $this->db->get('implikasi')->result_array();
        }
        public function gethasil($id_hasil)
        {
            return $this->db->get_where('hasil', ['id_hasil' => $id_hasil],)->row_array();
        }
        public function getfuzifikasi($id_fuzzyfikasi)
        {
            return $this->db->get_where('tb_fuzzyfikasi', ['id_tb_fuzzyfikasi' => $id_fuzzyfikasi])->row_array();
        }
        public function getImplikasi($id_implikasi)
        {
            return $this->db->get_where('implikasi', ['id_implikasi' => $id_implikasi])->row_array();
        }
        public function hapus_fuzzi($id_fuzzyfikasi){
            $this->db->delete('tb_fuzzyfikasi', ['id_tb_fuzzyfikasi' => $id_fuzzyfikasi]);
        }
        public function hapus_implikasi($id_implikasi){
            $this->db->delete('implikasi', ['id_implikasi' => $id_implikasi]);
        }
        public function hapus_defuz($id_hasil){
            $this->db->delete('hasil', ['id_hasil' => $id_hasil]);
        }
    }
