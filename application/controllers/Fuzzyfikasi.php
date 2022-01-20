 <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Fuzzyfikasi extends CI_Controller
    {
        public function index()
        {
            $this->load->view('template/header');
            $this->load->view('template/Navbar');
            $this->load->view('template/sidebar');
            $this->load->view('Proses_Fuzzy/Fuzzyfikasi');
            $this->load->view('template/footer');
        }

        public function hasil()
        {
            $data['fuzzyfikasi'] = $this->Model_fuzzyfikasi->hasil_fuzzyfikasi();
            $this->load->view('template/header');
            $this->load->view('template/Navbar');
            $this->load->view('template/sidebar');
            $this->load->view('Proses_Fuzzy/hasil_fuzzyfikasi', $data);
            $this->load->view('template/footer');
        }

        public function getNamaMahasiswa()
        {
            header('Content-type: application/json');
            $nama = $this->input->post('nama_mhs');
            $this->db->like('Nama_mhs', $nama);
            $hasil = $this->db->get('mahasiswa')->result();
            foreach ($hasil as $dataNamaMhs) {
                $data[] = array(
                    'id'    => $dataNamaMhs->id_mahasiswa,
                    'text'  => $dataNamaMhs->Nama_mhs
                );
            }

            echo json_encode($data);
        }

        public function prosesfuzifikasi()
        {
            $nama = $this->input->post('nama');
            $ipk = $this->input->post('ipk');
            $itaq = $this->input->post('itaq');
            $taat = $this->input->post('taat');
            $visi = $this->input->post('visi');
            $getStatusIPK[] =  $this->Model_fuzzyfikasi->StatusIpk();
            $getStatusItaq[] = $this->Model_fuzzyfikasi->StatusItaq();
            $getStatusTaat[] = $this->Model_fuzzyfikasi->StatusTaat();
            $getStatusVisi[] = $this->Model_fuzzyfikasi->StatusVisi();

            //Fuzzyfikasi

            //IPk
            //Tidak Baik

            if ($ipk <= 2) {
                $jenisIpk = 1;
                $statusIpk = $getStatusIPK[0][0]['Keterangan'];
            } elseif ($ipk >= 2 and $ipk <= 2.5) {
                $jenisIpk = (2.5 - $ipk) / (2.5 - 2);
                $statusIpk = $getStatusIPK[0][0]['Keterangan'];
            } elseif ($ipk >= 2.5) {
                $jenisIpk = 0;
                $statusIpk = $getStatusIPK[0][0]['Keterangan'];
            }

            // $jenisIpk = $jenisIpk . ' ' . $statusIpk;

            //Baik
            if ($ipk <= 2) {
                $jenisIpk2 = 0;
                $statusIpk2 = $getStatusIPK[0][1]['Keterangan'];
            } elseif ($ipk >= 2 and $ipk <= 2.5) {
                $jenisIpk2 = ($ipk - 2) / (2.5 - 2);
                $statusIpk2 = $getStatusIPK[0][1]['Keterangan'];
            } elseif ($ipk >= 2.5 and $ipk <= 3) {
                $jenisIpk2 = (3 - $ipk) / (3 - 2.5);
                $statusIpk2 = $getStatusIPK[0][1]['Keterangan'];
            } elseif ($ipk >= 3) {
                $jenisIpk2 = 1;
                $statusIpk2 = $getStatusIPK[0][1]['Keterangan'];
            }

            // $jenisIpk2 = $jenisIpk2. ' ' . $statusIpk2;
            //Sangat Baik
            if ($ipk <= 2.75) {
                $jenisIpk3 = 0;
                $statusIpk3 = $getStatusIPK[0][2]['Keterangan'];
            } elseif ($ipk >= 2.75 and $ipk <= 3) {
                $jenisIpk3 = ($ipk - 2.75) / (3 - 2.75);
                $statusIpk3 = $getStatusIPK[0][2]['Keterangan'];
            } elseif ($ipk >= 3) {
                $jenisIpk3 = 1;
                $statusIpk3 = $getStatusIPK[0][2]['Keterangan'];
            }
            // $jenisIpk3 = $jenisIpk3. ' ' . $statusIpk3;

            //Itaq
            //Tidak Baik
            if ($itaq <= 50) {
                $jenisItaq = 1;
                $statusitaq = $getStatusItaq[0][0]['Keterangan'];
            } elseif ($itaq >= 50 and $itaq <= 70) {
                $jenisItaq = (70 - $itaq) / (70 - 50);
                $statusitaq = $getStatusItaq[0][0]['Keterangan'];
            } elseif ($itaq >= 70) {
                $jenisItaq = 0;
                $statusitaq = $getStatusItaq[0][0]['Keterangan'];
            }
            // $jenisitaq = $jenisItaq . ' ' . $statusitaq;

            //Baik
            if ($itaq <= 50) {
                $jenisItaq2 = 0;
                $statusitaq2 = $getStatusItaq[0][1]['Keterangan'];
            } elseif ($itaq >= 50 and $itaq <= 70) {
                $jenisItaq2 = ($itaq - 50) / (70 - 50);
                $statusitaq2 =
                    $getStatusItaq[0][1]['Keterangan'];
            } elseif ($itaq >= 70  and $itaq <= 90) {
                $jenisItaq2 = (90 - $itaq) / (90 - 70);
                $statusitaq2 =
                    $getStatusItaq[0][1]['Keterangan'];
            } elseif ($itaq >= 90) {
                $jenisItaq2 = 1;
                $statusitaq2 =
                    $getStatusItaq[0][1]['Keterangan'];
            }

            //Sangat Baik
            if ($itaq  <= 70) {
                $jenisItaq3 = 0;
                $statusitaq3 = $getStatusItaq[0][2]['Keterangan'];
            } elseif ($itaq >= 70 and $itaq <= 90) {
                $jenisItaq3 = ($itaq - 70) / (90 - 70);
                $statusitaq3 = $getStatusItaq[0][2]['Keterangan'];
            } elseif ($itaq >= 90) {
                $jenisItaq3 = 1;
                $statusitaq3 = $getStatusItaq[0][2]['Keterangan'];
            }

            //Taat Pancasila
            //Tidak Baik
            if ($taat <= 50) {
                $jenistaat = 1;
                $statusTaat =
                    $getStatusTaat[0][0]['Keterangan'];
            } elseif ($taat >= 50 and $taat <= 70) {
                $jenistaat = (70 - $taat) / (70 - 50);
                $statusTaat =
                    $getStatusTaat[0][0]['Keterangan'];
            } elseif ($taat >= 70) {
                $jenistaat = 0;
                $statusTaat =
                    $getStatusTaat[0][0]['Keterangan'];
            }

            //Baik
            if ($taat <= 50) {
                $jenistaat2 = 0;
                $statusTaat2 =
                    $getStatusTaat[0][1]['Keterangan'];
            } elseif ($taat >= 50 and $taat <= 70) {
                $jenistaat2 = ($taat - 50) / (70 - 50);
                $statusTaat2 =
                    $getStatusTaat[0][1]['Keterangan'];
            } elseif ($taat >= 70  and $taat <= 90) {
                $jenistaat2 = (90 - $taat) / (90 - 70);
                $statusTaat2 =
                    $getStatusTaat[0][1]['Keterangan'];
            } elseif ($taat >= 90) {
                $jenistaat2 = 1;
                $statusTaat2 =
                    $getStatusTaat[0][1]['Keterangan'];
            }

            //Sangat Baik
            if ($taat  <= 70) {
                $jenistaat3 = 0;
                $statusTaat3 =
                    $getStatusTaat[0][2]['Keterangan'];
            } elseif ($taat >= 70 and $taat <= 90) {
                $jenistaat3 = ($taat - 70) / (90 - 70);
                $statusTaat3 =
                    $getStatusTaat[0][2]['Keterangan'];
            } elseif ($taat >= 90) {
                $jenistaat3 = 1;
                $statusTaat3 =
                    $getStatusTaat[0][2]['Keterangan'];
            }

            //Visi_misi
            //Tidak Baik
            if ($visi <= 50) {
                $jenisvisi = 1;
                $statusVisi
                    = $getStatusVisi[0][0]['Keterangan'];
            } elseif ($visi >= 50 and $visi <= 70) {
                $jenisvisi = (70 - $visi) / (70 - 50);
                $statusVisi
                    = $getStatusVisi[0][0]['Keterangan'];
            } elseif ($visi >= 70) {
                $jenisvisi = 0;
                $statusVisi
                    = $getStatusVisi[0][0]['Keterangan'];
            }

            //Baik
            if ($visi <= 50) {
                $jenisvisi2 = 0;
                $statusVisi2 = $getStatusVisi[0][1]['Keterangan'];
            } elseif ($visi >= 50 and $visi <= 70) {
                $jenisvisi2 = ($visi - 50) / (70 - 50);
                $statusVisi2 = $getStatusVisi[0][1]['Keterangan'];
            } elseif ($visi >= 70  and $visi <= 90) {
                $jenisvisi2 = (90 - $visi) / (90 - 70);
                $statusVisi2 = $getStatusVisi[0][1]['Keterangan'];
            } elseif ($visi >= 90) {
                $jenisvisi2 = 1;
                $statusVisi2 = $getStatusVisi[0][1]['Keterangan'];
            }

            //Sangat Baik
            if ($visi  <= 70) {
                $jenisvisi3 = 0;
                $statusVisi3 = $getStatusVisi[0][2]['Keterangan'];
            } elseif ($visi >= 70 and $visi <= 90) {
                $jenisvisi3 = ($visi - 70) / (90 - 70);
                $statusVisi3 = $getStatusVisi[0][2]['Keterangan'];
            } elseif ($visi >= 90) {
                $jenisvisi3 = 1;
                $statusVisi3 = $getStatusVisi[0][2]['Keterangan'];
            }


            // array push, 1 variabel, 4 data,
            $ipk = array($jenisIpk, $jenisIpk2, $jenisIpk3);
            $status = array($statusIpk, $statusIpk2, $statusIpk3);
            $itaq = array($jenisItaq, $jenisItaq2, $jenisItaq3);
            $status2 = array($statusitaq, $statusitaq2, $statusitaq3);
            $taat = array($jenistaat, $jenistaat2, $jenistaat3);
            $status3 = array($statusTaat, $statusTaat2, $statusTaat3);
            $visimisi = array($jenisvisi, $jenisvisi2, $jenisvisi3);
            $status4 = array($statusVisi, $statusVisi2, $statusVisi3);
            for ($i = 0; $i < 3; $i++) {
              
                    $data = array(
                        'nama_mahasiswa' => $nama,
                        'nilai_ipk' => $ipk[$i],
                        'status_ipk' => $status[$i],
                        'nilai_itaq' => $itaq[$i],
                        'status_itaq' => $status2[$i],
                        'nilai_taat' => $taat[$i],
                        'status_taat' => $status3[$i],
                        'nilai_visi' => $visimisi[$i],
                        'status_visi' => $status4[$i],
                    );
               
                    $this->db->insert('fuzzyfikasi', $data);
                // echo "<pre>";
                // print_r($data);
                // echo "</pre>";
                    // redirect('Fuzzyfikasi'); 
                
                  
            }
        }
    }

   // echo $ipk[$i] . ' ' .
            // $status[$i] . ' ' . 
            // $itaq[$i] . ' ' .
            //         $status2[$i] . ' ' . 
            // $taat[$i]  . ' ' .
            //         $status3[$i] . ' ' . 
            // $visimisi[$i]  .' '.
            // $status[$i] . '<br/> ';
