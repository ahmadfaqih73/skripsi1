<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_rule extends CI_Model
{
    function get_kategori()
    {
        $query = $this->db->query("SELECT prioritas From variables GROUP BY prioritas Order By prioritas DESC");
        return $query->result();
    }

    function add_rule()
    {
        $data = array(

            'IPK' => $this->input->post('ipk'),
            'Itaq' => $this->input->post('itaq'),
            'Taat_pancasila' => $this->input->post('taat'),
            'Visi_misi' => $this->input->post('visi'),
            'hasil' => $this->input->post('hasil')

        );
        // var_dump($data);
        $this->db->insert('rules', $data);
    }
    public function Bacarules()
    {
        return $this->db->get('rules')->result_array();
    }
    function get_ipk()
    {
        $statusipk = $this->db->query("SELECT `Keterangan` FROM kategori WHERE id_variabel=1");
        return $statusipk->result();
    }

    public function get_status_hasil()
    {
        $get_statusvisi = $this->db->query("SELECT `nama_variabel` From variabel_output GROUP BY `nama_variabel` Order By nama_variabel DESC");
        return $get_statusvisi->result();
    }
}
