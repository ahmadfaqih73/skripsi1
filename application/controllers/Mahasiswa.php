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
        $this->load->view('Mahasiswa/index', $data);
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
    public function input_mhs()
    {
        $this->Model_mahasiswa->input_mhs();
    }
    public function update_mhs()
    {
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Mahasiswa/update_mhs');
        $this->load->view('template/footer');
    }
    public function delete_mhs()
    {
    }
}
