<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coba extends CI_Controller
{
    public function index(){
        $ipk[]= $this->Model_fuzzyfikasi->coba();
        echo $ipk[0][0]['Keterangan'];
        echo $ipk[0][1]['Keterangan'];
        echo $ipk[0][2]['Keterangan'];



//         $result = json_decode($data, true);
        
// foreach($data as $c) {   echo $c['keterangan']; }




        //      echo "<pre>";
        // print_r($ipk);
        // echo "</pre>";
    
    }

}