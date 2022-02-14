 <?php
   defined('BASEPATH') or exit('No direct script access allowed');

   class Model_mahasiswa extends CI_Model
   {
      public function input_mhs()
      {

         $Nim = $this->input->post('nim');
         $mahasiswa = $this->input->post('mahasiswa');
         $jurusan = $this->input->post('jurusan');
         $gender = $this->input->post('gender');
         $alamat = $this->input->post('alamat');
         $about = $this->input->post('about');
         $tanggal = $this->input->post('tanggal');
         $image = $this->upload_foto_mhs();
         $visi = $this->input->post('visi');
         $hp = $this->input->post('nohp');

         $data = array(
            'Nim' => $Nim,
            'Nama_mhs' => $mahasiswa,
            'Jurusan' => $jurusan,
            'Alamat' => $alamat,
            'Jenis_kelamin' => $gender,
            'about' => $about,
            'TTL' => $tanggal,
            'foto' => $image,
            'Visi_misi' => $visi,
            'No_hp' => $hp
         );
         // echo "<pre>  ";
         //    print_r($data);
         //    echo "</pre>";
         $this->db->insert('mahasiswa', $data);
         redirect('mahasiswa/view_mhs');
      }
      public function upload_foto_mhs()
      {
         $config['upload_path']          = './uploads/foto_mhs/';
         $config['allowed_types']        = 'jpeg|jpg|png';
         $config['max_size']             = 2048;
         // $config['max_width']            = 1024;
         // $config['max_height']           = 768;

         $this->load->library('upload', $config);

         if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
         }
      }
      public function getDataById($id)
      {
         return $this->db->get_where('mahasiswa', ['id_mahasiswa' => $id])->row_array();
      }

      public function readmhs()
      {
         return $this->db->get('mahasiswa')->result_array();
      }

      public function update_mhs()
      {

         // if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
    
         // } else {
            
         // }

         $Nim = $this->input->post('nim');
         $mahasiswa = $this->input->post('mahasiswa');
         $jurusan = $this->input->post('jurusan');
         $gender = $this->input->post('gender');
         $alamat = $this->input->post('alamat');
         $about = $this->input->post('about');
         $tanggal = $this->input->post('tanggal');
         // $image = $this->upload_foto_mhs();
         $visi = $this->input->post('visi');
         $hp = $this->input->post('nohp');
         $data = array(
            'Nim' => $Nim,
            'Nama_mhs' => $mahasiswa,
            'Jurusan' => $jurusan,
            'Alamat' => $alamat,
            'Jenis_kelamin' => $gender,
            'about' => $about,
            'TTL' => $tanggal,
            // 'foto' => $image,
            'Visi_misi' => $visi,
            'No_hp' => $hp
         );
         // echo "<pre>";
         // print_r($data);
         // echo "</pre>";
         // $this->db->where('id_mahasiswa', $this->input->post('id'));
         // $this->db->update('mahasiswa', $data);

      }
      public function hapus_mhs($id)
      {
         $this->db->delete('mahasiswa', ['id_mahasiswa' => $id]); 
      }
   }
