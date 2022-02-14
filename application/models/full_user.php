<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Full_user extends CI_Model
{
    public function Bacauser()
    {
        return $this->db->get('users')->result_array();
    }
    public function getUser($id)
    {
        return $this->db->get_where('users', ['id_user' => $id])->row_array();
    }
    public function tambahuser()
    {

        $fullname = $this->input->post('fullname');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $repassword = $this->input->post('repassword');

        if ($password != $repassword) {
            echo 'password tdk sama';
        } else {
            $data = array(
                'fullname' => $fullname,
                'username' => $username,
                'password' => md5($password)
            );
            $this->db->insert('users', $data);
            redirect('View_user');
        }
    }
    public function hapususer($id){
        $this->db->delete('users', ['id_user' => $id]); 
    }
    public function ubah_user(){
        $fullname = $this->input->post('fullname');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data=[
            'fullname' => $fullname,
            'username' => $username,
            'password' => md5($password)
        ];
        $this->db->where('id_user', $this->input->post('id'));
        $this->db->update('users', $data);
    }
}
