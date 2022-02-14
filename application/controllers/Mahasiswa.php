<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $data['mahasiswa'] = $this->Model_mahasiswa->readmhs();
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Mahasiswa/detail_mahasiswa', $data);
        $this->load->view('template/footer');
    }

    public function tambah_mahasiswa()
    {
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Mahasiswa/tambah_mahasiswa');
        $this->load->view('template/footer');
    }
    public function view_mhs()
    {
        $data['mahasiswa'] = $this->Model_mahasiswa->readmhs();
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Mahasiswa/View_mhs', $data);
        $this->load->view('template/footer');
    }

    public function detail_mhs($id)
    {
        $data['mahasiswa'] = $this->Model_mahasiswa->getDataById($id);
        // echo '<pre>';
        // print_r($data['mahasiswa']);
        // echo '</pre>';

        // // langsung panggil dgn cara seperti ini
        // echo $data['mahasiswa']['Nama_mhs'];
        // die();

        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Mahasiswa/detail_mhs', $data);
        $this->load->view('template/footer');
    }

    public function input_mhs()
    {
        $this->Model_mahasiswa->input_mhs();
    }

    public function Tes()
    {
        echo $this->input->post('nim');
    }

    public function update_mhs()
    {
        // $this->load->model('Model_mahasiswa');
        $this->Model_mahasiswa->update_mhs();
        // redirect('mahasiswa/view_mhs');
    }
    public function delete_mhs($id)
    {
        $this->Model_mahasiswa->hapus_mhs($id);
        redirect('mahasiswa');
    }
}
