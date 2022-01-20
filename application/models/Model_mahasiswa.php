 <?php
   defined('BASEPATH') or exit('No direct script access allowed');

   class Model_mahasiswa extends CI_Model
   {
      public function input_mhs()
      {
         $Nim = $this->input->post('nim');
         $mahasiswa = $this->input->post('mahasiswa');
         $jurusan = $this->input->post('jurusan');

         $data = array(
            'Nim' => $Nim,
            'Nama_mhs' => $mahasiswa,
            'Jurusan' => $jurusan
         );
         $this->db->insert('mahasiswa', $data);
         redirect('mahasiswa');
      }

      public function readmhs(){
         return $this->db->get('mahasiswa')->result_array();
      }
      
      public function update_mhs(){

      }
      public function hapus_mhs(){
         
      }
   }
