<?php
defined('BASEPATH') or exit('No direct script access allowed');

class View_user extends CI_Controller
{
    public function index()
    {
        $data['users'] = $this->full_user->Bacauser();
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('view_user/view_user',$data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {

        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('view_user/tambah_user');
        $this->load->view('template/footer');
    }
    public function tambah_user()
    {
        $this->full_user->tambahuser();
        redirect('View_user');
    }
    public function view_edit($id)
    {
        $data['user'] = $this->full_user->getUser($id);
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('view_user/edit_user', $data);
        $this->load->view('template/footer');
    }
    public function delete_user($id){
        $this->full_user->hapususer($id);
        redirect('View_user');
}
public function update_user(){
    $this->full_user->ubah_user();
        redirect('View_user');
}
}
