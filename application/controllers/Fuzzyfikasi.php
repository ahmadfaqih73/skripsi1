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
            $nama = $this->input->post('nama_mhs');
            $ipk = $this->input->post('ipk');
            $itaq = $this->input->post('itaq');
            $taat = $this->input->post('taat');
            $visi = $this->input->post('visi');
            $getStatusIPK[] =  $this->Model_fuzzyfikasi->StatusIpk();
            $getStatusItaq[] = $this->Model_fuzzyfikasi->StatusItaq();
            $getStatusTaat[] = $this->Model_fuzzyfikasi->StatusTaat();
            $getStatusVisi[] = $this->Model_fuzzyfikasi->StatusVisi();
            $getStatusHasil[] = $this->Model_fuzzyfikasi->StatusHasil();

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
                $jenisIpk2 = 0;
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
                $jenisItaq2 = 0;
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
                $jenistaat2 = 0;
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
                $jenisvisi2 = 0;
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
            $tbfuzzyfikasi=array(
                'Nama_mhs'=>$nama,
                'nilai1'=>$jenisIpk,
                'status1'=>$statusIpk,
                'nilai2'=>$jenisItaq,
                'status2'=>$statusitaq,
                'nilai3'=>$jenistaat,
                'status3'=>$statusTaat,
                'nilai_4'=>$jenisvisi,
                'status4'=>$statusVisi,
                'nilai_5' => $jenisIpk2,
                'status5' => $statusIpk2,
                'nilai_6' => $jenisItaq2,
                'status6' => $statusitaq2,
                'nilai_7' => $jenistaat2,
                'status_7' => $statusTaat2,
                'nilai_8' => $jenisvisi2,
                'status_8' => $statusVisi2,
                'nilai_9' => $jenisIpk3,
                'status_9' => $statusIpk3,
                'nilai_10' => $jenisItaq3,
                'status_10' => $statusitaq3,
                'nilai_11' => $jenistaat3,
                'status_11' => $statusTaat3,
                'nilai_12' => $jenisvisi3,
                'status_12' => $statusVisi3,
        
            );
            $this->db->insert('tb_fuzzyfikasi', $tbfuzzyfikasi);


            // // array push, 1 variabel, 4 data,
            // $ipk = array('nilai1' => $jenisIpk, 'nilai2' => $jenisIpk2, 'nilai3' => $jenisIpk3);
            // $status = array('status1' => $statusIpk, 'status2' => $statusIpk2, 'status3' => $statusIpk3);
            // $itaq = array('nilai1' => $jenisItaq, 'nilai2' => $jenisItaq2, 'nilai3' => $jenisItaq3);
            // $status2 = array('status1' => $statusitaq, 'status2' => $statusitaq2, 'status3' => $statusitaq3);
            // $taat = array('nilai1' => $jenistaat, 'nilai2' => $jenistaat2, 'nilai3' => $jenistaat3);
            // $status3 = array('status1' => $statusTaat, 'status2' => $statusTaat2, 'status3' => $statusTaat3);
            // $visimisi = array('nilai1' => $jenisvisi, 'nilai2' => $jenisvisi2, 'nilai3' => $jenisvisi3);
            // $status4 = array('status1' => $statusVisi, 'status2' => $statusVisi2, 'status3' => $statusVisi3);

            // $ipk2 = array_merge($ipk, $status);
            // $itaq2 = array_merge($itaq, $status2);
            // $taat2 = array_merge($taat, $status3);
            // $visi = array_merge($visimisi, $status4);
            // echo "<pre> ";
            //     print_r($itaq2);
            //     echo "</pre>";

            // data kedua
            // Proses Implikasi
            $r1 = min($jenisIpk, $jenisItaq, $jenistaat, $jenisvisi);
            $r2 = min($jenisIpk, $jenisItaq, $jenistaat, $jenisvisi2);
            $r3 = min($jenisIpk, $jenisItaq, $jenistaat, $jenisvisi3);
            $r4 = min($jenisIpk, $jenisItaq, $jenistaat2, $jenisvisi);
            $r5 = min($jenisIpk, $jenisItaq, $jenistaat2, $jenisvisi2);
            $r6 = min($jenisIpk, $jenisItaq, $jenistaat2, $jenisvisi3);
            $r7 = min($jenisIpk, $jenisItaq, $jenistaat3, $jenisvisi);
            $r8 = min($jenisIpk, $jenisItaq, $jenistaat3, $jenisvisi2);
            $r9 = min($jenisIpk, $jenisItaq, $jenistaat3, $jenisvisi3);
            $r10 = min($jenisIpk, $jenisItaq2, $jenistaat, $jenisvisi);
            $r11 = min($jenisIpk, $jenisItaq2, $jenistaat, $jenisvisi2);
            $r12 = min($jenisIpk, $jenisItaq2, $jenistaat, $jenisvisi3);
            $r13 = min($jenisIpk, $jenisItaq2, $jenistaat2, $jenisvisi);
            $r14 = min($jenisIpk, $jenisItaq2, $jenistaat2, $jenisvisi2);
            $r15 = min($jenisIpk, $jenisItaq2, $jenistaat2, $jenisvisi3);
            $r16 = min($jenisIpk, $jenisItaq2, $jenistaat3, $jenisvisi);
            $r17 = min($jenisIpk, $jenisItaq2, $jenistaat3, $jenisvisi2);
            $r18 = min($jenisIpk, $jenisItaq2, $jenistaat3, $jenisvisi3);
            $r19 = min($jenisIpk, $jenisItaq3, $jenistaat, $jenisvisi);
            $r20 = min($jenisIpk, $jenisItaq3, $jenistaat, $jenisvisi2);
            $r21 = min($jenisIpk, $jenisItaq3, $jenistaat, $jenisvisi3);
            $r22 = min($jenisIpk, $jenisItaq3, $jenistaat2, $jenisvisi);
            $r23 = min($jenisIpk, $jenisItaq3, $jenistaat2, $jenisvisi2);
            $r24 = min($jenisIpk, $jenisItaq3, $jenistaat2, $jenisvisi3);
            $r25 = min($jenisIpk, $jenisItaq3, $jenistaat3, $jenisvisi);
            $r26 = min($jenisIpk, $jenisItaq3, $jenistaat3, $jenisvisi2);
            $r27 = min($jenisIpk, $jenisItaq3, $jenistaat3, $jenisvisi3);
            $r28 = min($jenisIpk2, $jenisItaq, $jenistaat, $jenisvisi);
            $r29 = min($jenisIpk2, $jenisItaq, $jenistaat, $jenisvisi2);
            $r30 = min($jenisIpk2, $jenisItaq, $jenistaat, $jenisvisi3);
            $r31 = min($jenisIpk2, $jenisItaq, $jenistaat2, $jenisvisi);
            $r32 = min($jenisIpk2, $jenisItaq, $jenistaat2, $jenisvisi2);
            $r33 = min($jenisIpk2, $jenisItaq, $jenistaat2, $jenisvisi3);
            $r34 = min($jenisIpk2, $jenisItaq, $jenistaat3, $jenisvisi);
            $r35 = min($jenisIpk2, $jenisItaq, $jenistaat3, $jenisvisi2);
            $r36 = min($jenisIpk2, $jenisItaq, $jenistaat3, $jenisvisi3);
            $r37 = min($jenisIpk2, $jenisItaq2, $jenistaat, $jenisvisi);
            $r38 = min($jenisIpk2, $jenisItaq2, $jenistaat, $jenisvisi2);
            $r39 = min($jenisIpk2, $jenisItaq2, $jenistaat, $jenisvisi3);
            $r40 = min($jenisIpk2, $jenisItaq2, $jenistaat2, $jenisvisi);
            $r41 = min($jenisIpk2, $jenisItaq2, $jenistaat2, $jenisvisi2);
            $r42 = min($jenisIpk2, $jenisItaq2, $jenistaat2, $jenisvisi3);
            $r43 = min($jenisIpk2, $jenisItaq2, $jenistaat3, $jenisvisi);
            $r44 = min($jenisIpk2, $jenisItaq2, $jenistaat3, $jenisvisi2);
            $r45 = min($jenisIpk2, $jenisItaq2, $jenistaat3, $jenisvisi3);
            $r46 = min($jenisIpk2, $jenisItaq3, $jenistaat, $jenisvisi);
            $r47 = min($jenisIpk2, $jenisItaq3, $jenistaat, $jenisvisi2);
            $r48 = min($jenisIpk2, $jenisItaq3, $jenistaat, $jenisvisi3);
            $r49 = min($jenisIpk2, $jenisItaq3, $jenistaat2, $jenisvisi);
            $r50 = min($jenisIpk2, $jenisItaq3, $jenistaat2, $jenisvisi2);
            $r51 = min($jenisIpk2, $jenisItaq3, $jenistaat2, $jenisvisi3);
            $r52 = min($jenisIpk2, $jenisItaq3, $jenistaat3, $jenisvisi);
            $r53 = min($jenisIpk2, $jenisItaq3, $jenistaat3, $jenisvisi2);
            $r54 = min($jenisIpk2, $jenisItaq3, $jenistaat3, $jenisvisi3);
            $r55 = min($jenisIpk3, $jenisItaq, $jenistaat, $jenisvisi);
            $r56 = min($jenisIpk3, $jenisItaq, $jenistaat, $jenisvisi2);
            $r57 = min($jenisIpk3, $jenisItaq, $jenistaat, $jenisvisi3);
            $r58 = min($jenisIpk3, $jenisItaq, $jenistaat2, $jenisvisi);
            $r59 = min($jenisIpk3, $jenisItaq, $jenistaat2, $jenisvisi2);
            $r60 = min($jenisIpk3, $jenisItaq, $jenistaat2, $jenisvisi3);
            $r61 = min($jenisIpk3, $jenisItaq, $jenistaat3, $jenisvisi);
            $r62 = min($jenisIpk3, $jenisItaq, $jenistaat3, $jenisvisi2);
            $r63 = min($jenisIpk3, $jenisItaq, $jenistaat3, $jenisvisi3);
            $r64 = min($jenisIpk3, $jenisItaq2, $jenistaat, $jenisvisi);
            $r65 = min($jenisIpk3, $jenisItaq2, $jenistaat, $jenisvisi2);
            $r66 = min($jenisIpk3, $jenisItaq2, $jenistaat, $jenisvisi3);
            $r67 = min($jenisIpk3, $jenisItaq2, $jenistaat2, $jenisvisi);
            $r68 = min($jenisIpk3, $jenisItaq2, $jenistaat2, $jenisvisi2);
            $r69 = min($jenisIpk3, $jenisItaq2, $jenistaat2, $jenisvisi3);
            $r70 = min($jenisIpk3, $jenisItaq2, $jenistaat3, $jenisvisi);
            $r71 = min($jenisIpk3, $jenisItaq2, $jenistaat3, $jenisvisi2);
            $r72 = min($jenisIpk3, $jenisItaq2, $jenistaat3, $jenisvisi3);
            $r73 = min($jenisIpk3, $jenisItaq3, $jenistaat, $jenisvisi);
            $r74 = min($jenisIpk3, $jenisItaq3, $jenistaat, $jenisvisi2);
            $r75 = min($jenisIpk3, $jenisItaq3, $jenistaat, $jenisvisi3);
            $r76 = min($jenisIpk3, $jenisItaq3, $jenistaat2, $jenisvisi);
            $r77 = min($jenisIpk3, $jenisItaq3, $jenistaat2, $jenisvisi2);
            $r78 = min($jenisIpk3, $jenisItaq3, $jenistaat2, $jenisvisi3);
            $r79 = min($jenisIpk3, $jenisItaq3, $jenistaat3, $jenisvisi);
            $r80 = min($jenisIpk3, $jenisItaq3, $jenistaat3, $jenisvisi2);
            $r81 = min($jenisIpk3, $jenisItaq3, $jenistaat3, $jenisvisi3);

            $Rule = array(
                'Nama_mhs'=>$nama, 'R1' => $r1, 'R2' => $r2, 'R3' => $r3, 'R4' => $r4,
                'R5' => $r5, 'R6' => $r6, 'R7' =>$r7, 'R8' =>$r8, 'R9' =>$r9, 'R10' =>$r10,
                'R11' =>$r11, 'R12' =>$r12, 'R13' =>$r13, 'R14' =>$r14, 'R15' =>$r15, 'R16' =>$r16, 'R17' =>$r17, 'R18' =>$r18, 'R19' =>$r19, 'R20' =>$r20,
                'R21' =>$r21, 'R22' =>$r22,'R23' => $r23, 'R24' =>$r24, 'R25' =>$r25, 'R26' =>$r26,'R27' => $r27, 'R28' =>$r28, 'R29' =>$r29, 'R30' =>$r30,
                'R31' =>$r31, 'R32' =>$r32, 'R33' =>$r33, 'R34' =>$r34, 'R35' =>$r35, 'R36' =>$r36, 'R37' =>$r37, 'R38' =>$r38, 'R39' =>$r39, 'R40' =>$r40,
                'R41' =>$r41, 'R42' =>$r42, 'R43' =>$r43, 'R44' =>$r44, 'R45' =>$r45, 'R46' =>$r46, 'R47' =>$r47, 'R48' =>$r48, 'R49' =>$r49, 'R50' =>$r50,
                'R51' =>$r51, 'R52' =>$r52, 'R53' =>$r53, 'R54' =>$r54, 'R55' =>$r55, 'R56' =>$r56, 'R57' =>$r57, 'R58' =>$r58, 'R59' =>$r59, 'R60' =>$r60,
                'R61' =>$r61, 'R62' =>$r62, 'R63' =>$r63, 'R64' =>$r64, 'R65' =>$r65, 'R66' =>$r66, 'R67' =>$r67, 'R68' =>$r68, 'R69' =>$r69, 'R70' =>$r70,
                'R71' =>$r71, 'R72' =>$r72,'R73' => $r73,'R74' => $r74,'R75' => $r75, 'R76' =>$r76, 'R77' =>$r77, 'R78' =>$r78, 'R79' =>$r79, 'R80' =>$r80,
                'R81' =>$r81
            );
            $this->db->insert('implikasi',$Rule);


            $hasil_tidak_cocok = array(
                $r1, $r2,   $r3,  $r4,  $r5,  $r6,  $r7,  $r8,  $r9,  $r10,
                $r11, $r12, $r13, $r14, $r15, $r16, $r17, $r18, $r19, $r20,
                $r21, $r22, $r23, $r24, $r25, $r26, $r27, $r28, $r29, $r30,
                $r31, $r32, $r33, $r34, $r35, $r36, $r37, $r38, $r39, $r40,
                $r43, $r46, $r47, $r48, $r49, $r52, $r55, $r56, $r57, $r58, $r59, $r60,
                $r61, $r62, $r63, $r64, $r65, $r66, $r67, $r70, $r73, $r74, $r75, $r76, $r79
            );
            $hasil_cocok = array(
                $r41, $r42, $r44, $r45, $r50, $r51, $r53, $r54,
                $r68, $r69, $r71
            );
            $hasil_sangat_cocok = array(
                $r72, $r77, $r78, $r80,
                $r81
            );

            $infrensi_tdk_cocok[] = 0;
            $infrensi_cocok[] = 0;
            $infrensi_sangat_cocok[] = 0;
            for ($i = 0; $i < 65; $i++) {
                $infrensi_tdk_cocok[$i] = (($hasil_tidak_cocok[$i] * (70 - 50)) + 50);
                // echo "<pre> defu_tdk_cocok ";
                // print_r($hasil_tidak_cocok[$i] . " anu " . $infrensi_tdk_cocok[$i]);
                // echo "</pre>";
                if ($i >= 64) {
                    $defuzifikasi_tdk_cocok = 0.0;
                    $alfa_tdk_cocok = 0.0;
                    $omega_tdk_cocok = 0.0;
                    for ($i = 0; $i < 65; $i++) {
                        if ($hasil_tidak_cocok[$i] == 0) {
                            $defuzifikasi_tdk_cocok += 0.0;
                            $alfa_tdk_cocok += 0.0;
                        }
                        if ($hasil_tidak_cocok[$i] != 0) {
                            $defuzifikasi_tdk_cocok += ($infrensi_tdk_cocok[$i] * $hasil_tidak_cocok[$i]);
                            // $alfa_tdk_cocok += $hasil_tidak_cocok[$i];
                        }

                        // if ($i >= 64) {
                        //     $totale = 0.0;
                        //     if ($alfa_tdk_cocok == 0) $totale = 0.0;
                        //     else $totale = $defuzifikasi_tdk_cocok / $alfa_tdk_cocok;
                        //     echo "<pre> \t \t \t defu_tdk_cocok ";
                        //     print_r($totale);
                        //     echo "</pre>";

                        // }
                    }
                }
            }
            for ($i = 0; $i < 11; $i++) {
                $infrensi_cocok[$i] = (($hasil_cocok[$i] * (70 - 50)) + 50);
                // echo "<pre> hasil_cocok ";
                // print_r($hasil_cocok[$i] . " anu " . $infrensi_cocok[$i]);
                // echo "</pre>";
                if ($i >= 10) {
                    $defuzifikasi_cocok = 0.0;
                    $alfa_cocok = 0.0;
                    for ($i = 0; $i < 11; $i++) {
                        if ($hasil_cocok[$i] == 0) {
                            $defuzifikasi_cocok += 0.0;
                            $alfa_cocok += 0.0;
                        }
                        if ($hasil_cocok[$i] != 0) {
                            $defuzifikasi_cocok += ($infrensi_cocok[$i] * $hasil_cocok[$i]);
                            $alfa_cocok += $hasil_cocok[$i];
                        }
                        // if ($i >= 10) {
                        //     $totale = 0.0;
                        //     if ($alfa_cocok == 0) $totale = 0.0;
                        //     else $totale = $defuzifikasi_cocok / $alfa_cocok;
                        //     echo "<pre> \t \t \t defu_cocok ";
                        //     print_r($totale);
                        //     echo "</pre>";
                        // }
                    }
                }
            }
            // echo "<pre> \t \t \t defu_cocok ";
            // print_r($defuzifikasi_tdk_cocok);
            // echo "</pre>";

            for ($i = 0; $i < 5; $i++) {
                $infrensi_sangat_cocok[$i] = (($hasil_sangat_cocok[$i] * (70 - 50)) + 70);
                // echo "<pre> hasil_sangat_cocok ";
                // print_r($hasil_sangat_cocok[$i] . " hasil implikasi " . $infrensi_sangat_cocok[$i]);
                // echo "</pre>";
                if ($i >= 4) {
                    $defuzifikasi_sangat_cocok = 0.0;
                    $alfa_sangat_cocok = 0.0;
                    for ($i = 0; $i < 5; $i++) {
                        if ($hasil_sangat_cocok[$i] == 0) {
                            $defuzifikasi_sangat_cocok += 0.0;
                            $alfa_sangat_cocok += 0.0;
                        }
                        if ($hasil_sangat_cocok[$i] != 0) {
                            $defuzifikasi_sangat_cocok += ($infrensi_sangat_cocok[$i] * $hasil_sangat_cocok[$i]);
                            $alfa_sangat_cocok += $hasil_sangat_cocok[$i];
                        }
                        // if ($i >= 4) {
                        //     $totale = 0.0;
                        //     if ($alfa_sangat_cocok == 0) $totale = 0.0;
                        //     else $totale = $defuzifikasi_sangat_cocok / $alfa_sangat_cocok;
                        //     echo "<pre> \t \t \t defu_tdk_cocok ";
                        //     print_r($totale);
                        //     echo "</pre>";
                        // }
                    }
                }
                //   echo "<pre> \t \t \t implikasi ";
                //             print_r($infrensi_tdk_cocok);
                //             echo "</pre>";
            }
            $Hasil_defuz = ($defuzifikasi_tdk_cocok + $defuzifikasi_cocok + $defuzifikasi_sangat_cocok) / ($alfa_tdk_cocok + $alfa_cocok + $alfa_sangat_cocok);
            // echo "<pre> \t \t \t defu_tdk_cocok ";
            //                 print_r($Hasil_defuz);
            //                 echo "</pre>";
            //Hasil
            //Tidak Baik
            if ($Hasil_defuz <= 50) {
                $jenishasil = 1;
                $statushasil  =
                    $getStatusHasil[0][0]['Keterangan'];
            } elseif ($Hasil_defuz >= 50 and $Hasil_defuz <= 70) {
                $jenishasil = (70 - $Hasil_defuz) / (70 - 50);
                $statushasil =
                    $getStatusHasil[0][0]['Keterangan'];
            } elseif ($Hasil_defuz >= 70) {
                $jenishasil = 0;
                $statushasil =
                    $getStatusHasil[0][0]['Keterangan'];
            }

            //Baik
            if ($Hasil_defuz <= 50) {
                $jenishasil2 = 0;
                $statushasil2 =
                    $getStatusHasil[0][1]['Keterangan'];
            } elseif ($taat >= 50 and $Hasil_defuz <= 70) {
                $jenishasil2 = ($Hasil_defuz - 50) / (70 - 50);
                $statushasil2 =
                    $getStatusHasil[0][1]['Keterangan'];
            } elseif ($Hasil_defuz >= 70  and $Hasil_defuz <= 90) {
                $jenishasil2 = (90 - $Hasil_defuz) / (90 - 70);
                $statushasil2 =
                    $getStatusHasil[0][1]['Keterangan'];
            } elseif ($Hasil_defuz >= 90) {
                $jenishasil2 = 1;
                $statushasil2 =
                    $getStatusHasil[0][1]['Keterangan'];
            }

            //Sangat Baik
            if ($Hasil_defuz  <= 70) {
                $jenishasil3 = 0;
                $statushasil3 =
                    $getStatusHasil[0][2]['Keterangan'];
            } elseif ($Hasil_defuz >= 70 and $Hasil_defuz <= 90) {
                $jenishasil3 = ($Hasil_defuz - 70) / (90 - 70);
                $statushasil3 =
                    $getStatusHasil[0][2]['Keterangan'];
            } elseif ($Hasil_defuz >= 90) {
                $jenishasil3 = 1;
                $statushasil3 =
                    $getStatusHasil[0][2]['Keterangan'];
            }

            $final_defuz = array($jenishasil, $jenishasil2, $jenishasil3);
            $final_status = array($statushasil, $statushasil2, $statushasil3);


            //data ketiga
            $final = array(
                'nama_mhs' => $nama,
                'Hasil_dezufikasi'=>$Hasil_defuz,
                'nilai_tidakcocok' => $jenishasil,
                'status_1' => $statushasil,
                'nilai_cocok' => $jenishasil2,
                'status_2' => $statushasil2,
                'nilai_sangatcocok' => $jenishasil3,
                'status_3' => $statushasil3

            );
            //  echo "<pre>";
            //     print_r($final);
            //     echo "</pre>";
                $this->db->insert('hasil',$final);
                redirect('fuzzyfikasi');

            // $data = array(
            //     'ipk' => $ipk2,
            //     'itaq' => $itaq2,
            //     'taat' => $taat2,
            //     'visi' => $visi,
            //     'rule' => $Rule,
            //     'final' => $final,
            //     'nama' => $nama
            // );
            // $this->load->view('template/header');
            // $this->load->view('template/Navbar');
            // $this->load->view('template/sidebar');
            // $this->load->view('hasil', $data);
            // $this->load->view('template/footer');
        }

        public function prosesfuzifikasi2()
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
            $getStatusHasil[] = $this->Model_fuzzyfikasi->StatusHasil();

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
                $jenisIpk2 = 0;
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
                $jenisItaq2 = 0;
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
                $jenistaat2 = 0;
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
                $jenisvisi2 = 0;
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
                // data pertama
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

                // $this->db->insert('fuzzyfikasi', $data);
                // echo "<pre>";
                // print_r($data);
                // echo "</pre>";
                // redirect('Fuzzyfikasi'); 


            }
            // data kedua
            // Proses Implikasi
            $r1 = min($jenisIpk, $jenisItaq, $jenistaat, $jenisvisi);
            $r2 = min($jenisIpk, $jenisItaq, $jenistaat, $jenisvisi2);
            $r3 = min($jenisIpk, $jenisItaq, $jenistaat, $jenisvisi3);
            $r4 = min($jenisIpk, $jenisItaq, $jenistaat2, $jenisvisi);
            $r5 = min($jenisIpk, $jenisItaq, $jenistaat2, $jenisvisi2);
            $r6 = min($jenisIpk, $jenisItaq, $jenistaat2, $jenisvisi3);
            $r7 = min($jenisIpk, $jenisItaq, $jenistaat3, $jenisvisi);
            $r8 = min($jenisIpk, $jenisItaq, $jenistaat3, $jenisvisi2);
            $r9 = min($jenisIpk, $jenisItaq, $jenistaat3, $jenisvisi3);
            $r10 = min($jenisIpk, $jenisItaq2, $jenistaat, $jenisvisi);
            $r11 = min($jenisIpk, $jenisItaq2, $jenistaat, $jenisvisi2);
            $r12 = min($jenisIpk, $jenisItaq2, $jenistaat, $jenisvisi3);
            $r13 = min($jenisIpk, $jenisItaq2, $jenistaat2, $jenisvisi);
            $r14 = min($jenisIpk, $jenisItaq2, $jenistaat2, $jenisvisi2);
            $r15 = min($jenisIpk, $jenisItaq2, $jenistaat2, $jenisvisi3);
            $r16 = min($jenisIpk, $jenisItaq2, $jenistaat3, $jenisvisi);
            $r17 = min($jenisIpk, $jenisItaq2, $jenistaat3, $jenisvisi2);
            $r18 = min($jenisIpk, $jenisItaq2, $jenistaat3, $jenisvisi3);
            $r19 = min($jenisIpk, $jenisItaq3, $jenistaat, $jenisvisi);
            $r20 = min($jenisIpk, $jenisItaq3, $jenistaat, $jenisvisi2);
            $r21 = min($jenisIpk, $jenisItaq3, $jenistaat, $jenisvisi3);
            $r22 = min($jenisIpk, $jenisItaq3, $jenistaat2, $jenisvisi);
            $r23 = min($jenisIpk, $jenisItaq3, $jenistaat2, $jenisvisi2);
            $r24 = min($jenisIpk, $jenisItaq3, $jenistaat2, $jenisvisi3);
            $r25 = min($jenisIpk, $jenisItaq3, $jenistaat3, $jenisvisi);
            $r26 = min($jenisIpk, $jenisItaq3, $jenistaat3, $jenisvisi2);
            $r27 = min($jenisIpk, $jenisItaq3, $jenistaat3, $jenisvisi3);
            $r28 = min($jenisIpk2, $jenisItaq, $jenistaat, $jenisvisi);
            $r29 = min($jenisIpk2, $jenisItaq, $jenistaat, $jenisvisi2);
            $r30 = min($jenisIpk2, $jenisItaq, $jenistaat, $jenisvisi3);
            $r31 = min($jenisIpk2, $jenisItaq, $jenistaat2, $jenisvisi);
            $r32 = min($jenisIpk2, $jenisItaq, $jenistaat2, $jenisvisi2);
            $r33 = min($jenisIpk2, $jenisItaq, $jenistaat2, $jenisvisi3);
            $r34 = min($jenisIpk2, $jenisItaq, $jenistaat3, $jenisvisi);
            $r35 = min($jenisIpk2, $jenisItaq, $jenistaat3, $jenisvisi2);
            $r36 = min($jenisIpk2, $jenisItaq, $jenistaat3, $jenisvisi3);
            $r37 = min($jenisIpk2, $jenisItaq2, $jenistaat, $jenisvisi);
            $r38 = min($jenisIpk2, $jenisItaq2, $jenistaat, $jenisvisi2);
            $r39 = min($jenisIpk2, $jenisItaq2, $jenistaat, $jenisvisi3);
            $r40 = min($jenisIpk2, $jenisItaq2, $jenistaat2, $jenisvisi);
            $r41 = min($jenisIpk2, $jenisItaq2, $jenistaat2, $jenisvisi2);
            $r42 = min($jenisIpk2, $jenisItaq2, $jenistaat2, $jenisvisi3);
            $r43 = min($jenisIpk2, $jenisItaq2, $jenistaat3, $jenisvisi);
            $r44 = min($jenisIpk2, $jenisItaq2, $jenistaat3, $jenisvisi2);
            $r45 = min($jenisIpk2, $jenisItaq2, $jenistaat3, $jenisvisi3);
            $r46 = min($jenisIpk2, $jenisItaq3, $jenistaat, $jenisvisi);
            $r47 = min($jenisIpk2, $jenisItaq3, $jenistaat, $jenisvisi2);
            $r48 = min($jenisIpk2, $jenisItaq3, $jenistaat, $jenisvisi3);
            $r49 = min($jenisIpk2, $jenisItaq3, $jenistaat2, $jenisvisi);
            $r50 = min($jenisIpk2, $jenisItaq3, $jenistaat2, $jenisvisi2);
            $r51 = min($jenisIpk2, $jenisItaq3, $jenistaat2, $jenisvisi3);
            $r52 = min($jenisIpk2, $jenisItaq3, $jenistaat3, $jenisvisi);
            $r53 = min($jenisIpk2, $jenisItaq3, $jenistaat3, $jenisvisi2);
            $r54 = min($jenisIpk2, $jenisItaq3, $jenistaat3, $jenisvisi3);
            $r55 = min($jenisIpk3, $jenisItaq, $jenistaat, $jenisvisi);
            $r56 = min($jenisIpk3, $jenisItaq, $jenistaat, $jenisvisi2);
            $r57 = min($jenisIpk3, $jenisItaq, $jenistaat, $jenisvisi3);
            $r58 = min($jenisIpk3, $jenisItaq, $jenistaat2, $jenisvisi);
            $r59 = min($jenisIpk3, $jenisItaq, $jenistaat2, $jenisvisi2);
            $r60 = min($jenisIpk3, $jenisItaq, $jenistaat2, $jenisvisi3);
            $r61 = min($jenisIpk3, $jenisItaq, $jenistaat3, $jenisvisi);
            $r62 = min($jenisIpk3, $jenisItaq, $jenistaat3, $jenisvisi2);
            $r63 = min($jenisIpk3, $jenisItaq, $jenistaat3, $jenisvisi3);
            $r64 = min($jenisIpk3, $jenisItaq2, $jenistaat, $jenisvisi);
            $r65 = min($jenisIpk3, $jenisItaq2, $jenistaat, $jenisvisi2);
            $r66 = min($jenisIpk3, $jenisItaq2, $jenistaat, $jenisvisi3);
            $r67 = min($jenisIpk3, $jenisItaq2, $jenistaat2, $jenisvisi);
            $r68 = min($jenisIpk3, $jenisItaq2, $jenistaat2, $jenisvisi2);
            $r69 = min($jenisIpk3, $jenisItaq2, $jenistaat2, $jenisvisi3);
            $r70 = min($jenisIpk3, $jenisItaq2, $jenistaat3, $jenisvisi);
            $r71 = min($jenisIpk3, $jenisItaq2, $jenistaat3, $jenisvisi2);
            $r72 = min($jenisIpk3, $jenisItaq2, $jenistaat3, $jenisvisi3);
            $r73 = min($jenisIpk3, $jenisItaq3, $jenistaat, $jenisvisi);
            $r74 = min($jenisIpk3, $jenisItaq3, $jenistaat, $jenisvisi2);
            $r75 = min($jenisIpk3, $jenisItaq3, $jenistaat, $jenisvisi3);
            $r76 = min($jenisIpk3, $jenisItaq3, $jenistaat2, $jenisvisi);
            $r77 = min($jenisIpk3, $jenisItaq3, $jenistaat2, $jenisvisi2);
            $r78 = min($jenisIpk3, $jenisItaq3, $jenistaat2, $jenisvisi3);
            $r79 = min($jenisIpk3, $jenisItaq3, $jenistaat3, $jenisvisi);
            $r80 = min($jenisIpk3, $jenisItaq3, $jenistaat3, $jenisvisi2);
            $r81 = min($jenisIpk3, $jenisItaq3, $jenistaat3, $jenisvisi3);

            $Rule = array(
                $r1, $r2, $r3, $r4, $r5, $r6, $r7, $r8, $r9, $r10,
                $r11, $r12, $r13, $r14, $r15, $r16, $r17, $r18, $r19, $r20,
                $r21, $r22, $r23, $r24, $r25, $r26, $r27, $r28, $r29, $r30,
                $r31, $r32, $r33, $r34, $r35, $r36, $r37, $r38, $r39, $r40,
                $r41, $r42, $r43, $r44, $r45, $r46, $r47, $r48, $r49, $r50,
                $r51, $r52, $r53, $r54, $r55, $r56, $r57, $r58, $r59, $r60,
                $r61, $r62, $r63, $r64, $r65, $r66, $r67, $r68, $r69, $r70,
                $r71, $r72, $r73, $r74, $r75, $r76, $r77, $r78, $r79, $r80,
                $r81
            );
            // echo "<pre>";
            // print_r($Rule);
            // echo "</pre>";
            for ($i = 0; $i < 81; $i++) {
                $data1 = $Rule[$i];
                //  echo "<pre>";
                // print_r($data1);
                // echo "</pre>";


            }


            $hasil_tidak_cocok = array(
                $r1, $r2,   $r3,  $r4,  $r5,  $r6,  $r7,  $r8,  $r9,  $r10,
                $r11, $r12, $r13, $r14, $r15, $r16, $r17, $r18, $r19, $r20,
                $r21, $r22, $r23, $r24, $r25, $r26, $r27, $r28, $r29, $r30,
                $r31, $r32, $r33, $r34, $r35, $r36, $r37, $r38, $r39, $r40,
                $r43, $r46, $r47, $r48, $r49, $r52, $r55, $r56, $r57, $r58, $r59, $r60,
                $r61, $r62, $r63, $r64, $r65, $r66, $r67, $r70, $r73, $r74, $r75, $r76, $r79
            );
            $hasil_cocok = array(
                $r41, $r42, $r44, $r45, $r50, $r51, $r53, $r54,
                $r68, $r69, $r71
            );
            $hasil_sangat_cocok = array(
                $r72, $r77, $r78, $r80,
                $r81
            );

            $infrensi_tdk_cocok[] = 0;
            $infrensi_cocok[] = 0;
            $infrensi_sangat_cocok[] = 0;
            for ($i = 0; $i < 65; $i++) {
                $infrensi_tdk_cocok[$i] = (($hasil_tidak_cocok[$i] * (70 - 50)) + 50);
                // echo "<pre> defu_tdk_cocok ";
                // print_r($hasil_tidak_cocok[$i] . " anu " . $infrensi_tdk_cocok[$i]);
                // echo "</pre>";
                if ($i >= 64) {
                    $defuzifikasi_tdk_cocok = 0.0;
                    $alfa_tdk_cocok = 0.0;
                    $omega_tdk_cocok = 0.0;
                    for ($i = 0; $i < 65; $i++) {
                        if ($hasil_tidak_cocok[$i] == 0) {
                            $defuzifikasi_tdk_cocok += 0.0;
                            $alfa_tdk_cocok += 0.0;
                        }
                        if ($hasil_tidak_cocok[$i] != 0) {
                            $defuzifikasi_tdk_cocok += ($infrensi_tdk_cocok[$i] * $hasil_tidak_cocok[$i]);
                            // $alfa_tdk_cocok += $hasil_tidak_cocok[$i];
                        }

                        // if ($i >= 64) {
                        //     $totale = 0.0;
                        //     if ($alfa_tdk_cocok == 0) $totale = 0.0;
                        //     else $totale = $defuzifikasi_tdk_cocok / $alfa_tdk_cocok;
                        //     echo "<pre> \t \t \t defu_tdk_cocok ";
                        //     print_r($totale);
                        //     echo "</pre>";

                        // }
                    }
                }
            }
            for ($i = 0; $i < 11; $i++) {
                $infrensi_cocok[$i] = (($hasil_cocok[$i] * (70 - 50)) + 50);
                // echo "<pre> hasil_cocok ";
                // print_r($hasil_cocok[$i] . " anu " . $infrensi_cocok[$i]);
                // echo "</pre>";
                if ($i >= 10) {
                    $defuzifikasi_cocok = 0.0;
                    $alfa_cocok = 0.0;
                    for ($i = 0; $i < 11; $i++) {
                        if ($hasil_cocok[$i] == 0) {
                            $defuzifikasi_cocok += 0.0;
                            $alfa_cocok += 0.0;
                        }
                        if ($hasil_cocok[$i] != 0) {
                            $defuzifikasi_cocok += ($infrensi_cocok[$i] * $hasil_cocok[$i]);
                            $alfa_cocok += $hasil_cocok[$i];
                        }
                        // if ($i >= 10) {
                        //     $totale = 0.0;
                        //     if ($alfa_cocok == 0) $totale = 0.0;
                        //     else $totale = $defuzifikasi_cocok / $alfa_cocok;
                        //     echo "<pre> \t \t \t defu_cocok ";
                        //     print_r($totale);
                        //     echo "</pre>";
                        // }
                    }
                }
            }
            // echo "<pre> \t \t \t defu_cocok ";
            // print_r($defuzifikasi_tdk_cocok);
            // echo "</pre>";

            for ($i = 0; $i < 5; $i++) {
                $infrensi_sangat_cocok[$i] = (($hasil_sangat_cocok[$i] * (70 - 50)) + 70);
                // echo "<pre> hasil_sangat_cocok ";
                // print_r($hasil_sangat_cocok[$i] . " hasil implikasi " . $infrensi_sangat_cocok[$i]);
                // echo "</pre>";
                if ($i >= 4) {
                    $defuzifikasi_sangat_cocok = 0.0;
                    $alfa_sangat_cocok = 0.0;
                    for ($i = 0; $i < 5; $i++) {
                        if ($hasil_sangat_cocok[$i] == 0) {
                            $defuzifikasi_sangat_cocok += 0.0;
                            $alfa_sangat_cocok += 0.0;
                        }
                        if ($hasil_sangat_cocok[$i] != 0) {
                            $defuzifikasi_sangat_cocok += ($infrensi_sangat_cocok[$i] * $hasil_sangat_cocok[$i]);
                            $alfa_sangat_cocok += $hasil_sangat_cocok[$i];
                        }
                        // if ($i >= 4) {
                        //     $totale = 0.0;
                        //     if ($alfa_sangat_cocok == 0) $totale = 0.0;
                        //     else $totale = $defuzifikasi_sangat_cocok / $alfa_sangat_cocok;
                        //     echo "<pre> \t \t \t defu_tdk_cocok ";
                        //     print_r($totale);
                        //     echo "</pre>";
                        // }
                    }
                }
                //   echo "<pre> \t \t \t implikasi ";
                //             print_r($infrensi_tdk_cocok);
                //             echo "</pre>";
            }
            $Hasil_defuz = ($defuzifikasi_tdk_cocok + $defuzifikasi_cocok + $defuzifikasi_sangat_cocok) / ($alfa_tdk_cocok + $alfa_cocok + $alfa_sangat_cocok);
            // echo "<pre> \t \t \t defu_tdk_cocok ";
            //                 print_r($Hasil_defuz);
            //                 echo "</pre>";
            //Hasil
            //Tidak Baik
            if ($Hasil_defuz <= 50) {
                $jenishasil = 1;
                $statushasil  =
                    $getStatusHasil[0][0]['Keterangan'];
            } elseif ($Hasil_defuz >= 50 and $Hasil_defuz <= 70) {
                $jenishasil = (70 - $Hasil_defuz) / (70 - 50);
                $statushasil =
                    $getStatusHasil[0][0]['Keterangan'];
            } elseif ($Hasil_defuz >= 70) {
                $jenishasil = 0;
                $statushasil =
                    $getStatusHasil[0][0]['Keterangan'];
            }

            //Baik
            if ($Hasil_defuz <= 50) {
                $jenishasil2 = 0;
                $statushasil2 =
                    $getStatusHasil[0][1]['Keterangan'];
            } elseif ($taat >= 50 and $Hasil_defuz <= 70) {
                $jenishasil2 = ($Hasil_defuz - 50) / (70 - 50);
                $statushasil2 =
                    $getStatusHasil[0][1]['Keterangan'];
            } elseif ($Hasil_defuz >= 70  and $Hasil_defuz <= 90) {
                $jenishasil2 = (90 - $Hasil_defuz) / (90 - 70);
                $statushasil2 =
                    $getStatusHasil[0][1]['Keterangan'];
            } elseif ($Hasil_defuz >= 90) {
                $jenishasil2 = 1;
                $statushasil2 =
                    $getStatusHasil[0][1]['Keterangan'];
            }

            //Sangat Baik
            if ($Hasil_defuz  <= 70) {
                $jenishasil3 = 0;
                $statushasil3 =
                    $getStatusHasil[0][2]['Keterangan'];
            } elseif ($Hasil_defuz >= 70 and $Hasil_defuz <= 90) {
                $jenishasil3 = ($Hasil_defuz - 70) / (90 - 70);
                $statushasil3 =
                    $getStatusHasil[0][2]['Keterangan'];
            } elseif ($Hasil_defuz >= 90) {
                $jenishasil3 = 1;
                $statushasil3 =
                    $getStatusHasil[0][2]['Keterangan'];
            }

            // $final_defuz=array($jenishasil,$jenishasil2,$jenishasil3);
            // $final_status=array($statushasil,$statushasil2,$statushasil3);


            // data ketiga
            $data = array(
                'nama_mahasiswa' => $nama,
                'nilai_hasil_tdkcocok' => $jenishasil,
                'status_tdkcocok' => $statushasil,
                'nilai_hasil_cocok' => $jenishasil2,
                'status_cocok' => $statushasil2,
                'nilai_hasil_sangatcocok' => $jenishasil3,
                'status_sangatcocok' => $statushasil3

            );

            // $this->db->insert('fuzzyfikasi', $data);
            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";
            // redirect('Fuzzyfikasi'); 




            // if ($i >= 64) {
            //     for ($j = 0; $j < 11; $j++) {
            //         $defu_cocok = 0;
            //         if ($hasil_cocok[$j] == 0) {
            //             // echo 'tidak ada hasil defuzi';
            //             //    $defu_tdk_cocok=(($hasil_tidak_cocok[$i]*(70-50))+50);
            //         } elrint_r($sum_defucocok);
            //         // echo "</pre>";
            //         if ($j >= 10) {
            //             for ($k = 0; $k < 5; $k++) {
            //                 $defu_sangat_cocok = 0;
            //                 if ($hasil_sangat_cocok[$k] == 0) {
            //                     // echo 'tidak ada hasil defuzi';
            //                     //    $defu_tdk_cocok=(($hasil_tidak_cocok[$i]*(70-50))+50);
            //                 } else {
            //                     $defu_sangat_cocok = $hasil_sangat_cocok[$k] * (70 - 50) + 70;
            //                 }

            //                 echo "<pre> defu_sangat_cocok  ";
            //                 print_r($hasil_sangat_cocok[$k] . " anu " . $defu_sangat_cocok);
            //                 echo "</pre>";
            //             }
            //         }
            //     }
            // }



            // }

        }

        // echo $ipk[$i] . ' ' .
        // $status[$i] . ' ' . 
        // $itaq[$i] . ' ' .
        //         $status2[$i] . ' ' . 
        // $taat[$i]  . ' ' .
        //         $status3[$i] . ' ' . 
        // $visimisi[$i]  .' '.
        // $status[$i] . '<br/> ';
    }
