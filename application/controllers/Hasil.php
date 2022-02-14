<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
{
    public function index()
    {
        $data['hasil'] = $this->Model_hasil->readall();
        // var_dump($data);
        // die;
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Proses_Fuzzy/hasil_dezufikasi', $data);
        $this->load->view('template/footer');
    }
    public function lihat($id_hasil){
        $data['hasil'] = $this->Model_hasil->gethasil($id_hasil);
        // $data['fuzi']= $this->Model_hasil->getfuzi($id_fuzzyfikasi);
        // var_dump($data);
        // die; 
        //  echo '<pre>';
        // print_r($data['fuzzyfikasi']);
        // echo '</pre>';
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Proses_Fuzzy/detail_dezufikasi', $data);
        $this->load->view('template/footer');
    }
    public function hapus_defuz($id_hasil){
        $this->Model_hasil->hapus_defuz($id_hasil);
        redirect('hasil');

    }
    public function lihat_implikasi(){
        $data['implikasi']= $this->Model_hasil->readimplikasi();
        // var_dump($data);
        // die; 
        //  echo '<pre>';
        // print_r($data['fuzzyfikasi']);
        // echo '</pre>';
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Proses_Fuzzy/hasil_implikasi', $data);
        $this->load->view('template/footer');
    }
    public function detail_implikasi($id_implikasi){
        $data['Rule']=$this->Model_hasil->getImplikasi($id_implikasi);
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Proses_Fuzzy/detail_implikasi',$data);
        $this->load->view('template/footer');
    }
    public function delete_implikasi($id_implikasi){
        $this->Model_hasil->hapus_implikasi($id_implikasi);
        redirect('hasil/lihat_implikasi');
    }
    public function lihat_fuzyfikasi(){
        $data['fuzzy'] = $this->Model_hasil->readfuzzifikasi();
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Proses_Fuzzy/hasil_fuzifikasi',$data);
        $this->load->view('template/footer');
    }
    public function detail_fuzzi($id_fuzzyfikasi){
        $data['fuzzy'] = $this->Model_hasil->getfuzifikasi($id_fuzzyfikasi);
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Proses_Fuzzy/detail_fuzzifikasi', $data);
        $this->load->view('template/footer');

    }
    public function delete_fuzzi($id_fuzzyfikasi){
        $this->Model_hasil->hapus_fuzzi($id_fuzzyfikasi);
        redirect('hasil/lihat_fuzyfikasi');
    }
}
