<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Walicatatan extends CI_Controller { public function __construct() { goto we7Di; we7Di: parent::__construct(); goto t_gyA; NVIXp: redirect("\x61\x75\164\x68"); goto qBmCP; gy6jt: $this->load->model("\113\145\154\141\x73\137\155\157\144\x65\154", "\153\145\x6c\141\x73"); goto s0wX9; rXy5Q: OjK7V: goto NVIXp; LtZvw: goto Zs06B; goto rXy5Q; zfv9s: OE0hY: goto LtZvw; RpArs: show_error("\110\141\x6e\171\x61\x20\x41\144\x6d\151\156\x69\163\164\x72\141\164\157\162\x20\144\x61\156\40\147\x75\x72\x75\x20\171\141\156\x67\x20\144\151\142\145\162\x69\x20\150\141\x6b\40\x75\156\164\x75\153\x20\155\145\x6e\147\141\x6b\163\145\x73\40\150\141\x6c\141\x6d\141\156\x20\151\x6e\x69\x2c\x20\74\141\x20\x68\x72\145\x66\x3d\x22" . base_url("\144\141\163\x68\142\157\x61\162\144") . "\42\x3e\x4b\x65\155\x62\141\154\x69\x20\x6b\x65\40\155\145\156\165\40\x61\x77\141\x6c\74\57\x61\x3e", 403, "\101\x6b\x73\145\x73\40\124\145\x72\x6c\x61\x72\141\x6e\147"); goto zfv9s; s0wX9: $this->load->model("\104\x72\157\x70\x64\157\167\156\137\x6d\x6f\x64\145\x6c", "\x64\x72\157\160\x64\157\x77\156"); goto hieIA; PLvMU: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\162\x75"))) { goto OE0hY; } goto RpArs; hieIA: $this->form_validation->set_error_delimiters('', ''); goto M6Rs4; qBmCP: Zs06B: goto MoHFi; MoHFi: $this->load->library(["\144\x61\x74\141\164\141\142\x6c\145\x73", "\x66\157\162\155\137\x76\141\x6c\151\144\141\x74\x69\157\x6e"]); goto qwt7q; qwt7q: $this->load->model("\115\141\163\x74\x65\162\x5f\155\157\144\145\x6c", "\155\141\x73\164\145\x72"); goto iLNnK; t_gyA: if (!$this->ion_auth->logged_in()) { goto OjK7V; } goto PLvMU; iLNnK: $this->load->model("\104\x61\163\x68\x62\x6f\141\x72\144\x5f\155\x6f\x64\x65\154", "\x64\141\x73\150\x62\x6f\x61\x72\144"); goto gy6jt; M6Rs4: } public function output_json($data, $encode = true) { goto B1408; rJEnF: sk_Fn: goto mJzqy; B1408: if (!$encode) { goto sk_Fn; } goto o7f2q; mJzqy: $this->output->set_content_type("\x61\x70\x70\x6c\x69\143\x61\x74\x69\157\x6e\x2f\x6a\x73\x6f\156")->set_output($data); goto exmyp; o7f2q: $data = json_encode($data); goto rJEnF; exmyp: } public function index() { goto Z1KuD; za4kP: $data["\147\x75\162\x75"] = $guru; goto qbkb0; Z1KuD: $user = $this->ion_auth->user()->row(); goto XLWIJ; XLWIJ: $data = ["\165\x73\145\162" => $user, "\152\165\144\x75\154" => "\x43\141\164\141\164\x61\156\40\127\141\154\151\40\113\x65\x6c\141\x73", "\163\165\142\x6a\165\x64\165\x6c" => "\103\141\x74\141\x74\141\x6e\40\113\x65\154\141\x73", "\x73\x65\x74\x74\151\156\x67" => $this->dashboard->getSetting()]; goto DIUdA; DIUdA: $tp = $this->master->getTahunActive(); goto OdANm; q3WQ7: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto za4kP; HD8qs: $data["\164\x70\x5f\x61\x63\x74\x69\x76\145"] = $tp; goto PSVmg; lc6oC: $data["\x63\141\x74\x61\x74\x61\x6e\137\x73\x69\163\167\141"] = $this->kelas->getCatatanSiswa($tp->id_tp, $smt->id_smt, $guru->wali_kelas); goto fF0hf; OdANm: $smt = $this->master->getSemesterActive(); goto KpEWY; KpEWY: $data["\x74\x70"] = $this->dashboard->getTahun(); goto HD8qs; fF0hf: $this->load->view("\155\145\155\x62\145\162\163\57\147\165\x72\x75\x2f\x74\145\155\160\x6c\141\x74\x65\x73\57\x68\x65\x61\x64\145\x72", $data); goto cZSfb; UnLAP: $data["\x73\x6d\164\x5f\x61\x63\164\151\166\x65"] = $smt; goto q3WQ7; qbkb0: $data["\143\141\164\x61\164\x61\x6e\x5f\x6b\x65\x6c\x61\x73"] = $this->kelas->getCatatanKelas($guru->wali_kelas, $tp->id_tp, $smt->id_smt); goto lc6oC; PSVmg: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto UnLAP; cZSfb: $this->load->view("\x6d\145\155\142\x65\x72\x73\x2f\147\x75\162\x75\57\167\141\154\x69\x2f\143\141\164\x61\x74\x61\156"); goto ixzgy; ixzgy: $this->load->view("\155\x65\155\142\145\x72\163\57\147\165\162\x75\x2f\164\x65\x6d\160\x6c\x61\164\x65\163\57\146\x6f\x6f\x74\145\162"); goto a9I6Z; a9I6Z: } public function siswa() { goto ntbrP; ntbrP: $id_siswa = $this->input->get("\151\x64\137\x73\x69\163\167\x61"); goto qkwXX; uvbLn: $data["\x74\160"] = $this->dashboard->getTahun(); goto PZVJW; hw0Pi: $this->load->view("\x6d\x65\155\142\145\x72\x73\x2f\147\x75\x72\165\57\x74\x65\155\x70\x6c\141\x74\145\163\x2f\x66\157\x6f\164\145\162"); goto d0Q2P; sPq8w: $data["\143\141\164\141\164\141\156\137\163\x69\163\167\x61"] = $this->kelas->getAllCatatanSiswa($id_siswa, $tp->id_tp, $smt->id_smt); goto j3jOl; Cvxjk: $smt = $this->master->getSemesterActive(); goto uvbLn; jQMqH: $user = $this->ion_auth->user()->row(); goto rUmcg; rUmcg: $data = ["\165\163\x65\162" => $user, "\152\x75\x64\165\x6c" => "\103\x61\164\141\164\141\x6e\x20\x53\x69\x73\x77\x61", "\x73\165\x62\152\165\x64\x75\x6c" => "\x43\x61\164\x61\x74\141\x6e\40\x53\151\163\x77\x61", "\x73\145\164\x74\x69\x6e\x67" => $this->dashboard->getSetting()]; goto Ggub0; Funui: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto eTKA_; eTKA_: $data["\x73\x6d\164\137\x61\143\164\151\166\x65"] = $smt; goto AxV2e; pMRhU: $this->load->view("\155\145\155\x62\x65\x72\163\57\x67\165\x72\165\x2f\x77\141\x6c\x69\57\x70\x65\162\163\x69\x73\167\141"); goto hw0Pi; Ggub0: $tp = $this->master->getTahunActive(); goto Cvxjk; PZVJW: $data["\164\160\x5f\141\x63\164\151\166\145"] = $tp; goto Funui; j3jOl: $data["\x69\x64\137\x6b\x65\x6c\x61\163"] = $id_kelas; goto V2M63; PTlJM: $data["\x73\151\x73\167\141"] = $this->master->getSiswaById($id_siswa); goto sPq8w; SJHz0: $data["\147\x75\162\x75"] = $guru; goto PTlJM; qkwXX: $id_kelas = $this->input->get("\151\x64\137\153\x65\154\x61\x73"); goto jQMqH; AxV2e: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto SJHz0; V2M63: $this->load->view("\x6d\x65\x6d\x62\145\x72\x73\x2f\147\x75\162\x75\x2f\164\145\155\160\154\x61\164\145\163\57\150\x65\x61\144\x65\x72", $data); goto pMRhU; d0Q2P: } public function saveCatatanKelas() { goto MVIyW; x3Pfg: $level = $this->input->post("\154\145\x76\145\x6c", true); goto Tu3fb; MVIyW: $tp = $this->dashboard->getTahunActive(); goto V2Gol; iPdb5: $this->output_json($insert); goto I0wK1; eDrJZ: $insert = $this->master->create("\153\145\154\x61\163\137\143\141\x74\141\164\141\x6e\137\167\x61\x6c\151", $data); goto iPdb5; gyIvn: $user = $this->ion_auth->user()->row(); goto ixA9n; MVHSL: $text = $this->input->post("\x74\x65\x78\x74", true); goto x3Pfg; V2Gol: $smt = $this->dashboard->getSemesterActive(); goto gyIvn; ixA9n: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto MVHSL; Tu3fb: $data = ["\151\144\x5f\164\x70" => $tp->id_tp, "\x69\x64\137\x73\x6d\164" => $smt->id_smt, "\x74\x79\x70\x65" => "\x31", "\154\x65\x76\x65\154" => $level, "\x69\x64\137\153\x65\x6c\x61\163" => $guru->wali_kelas, "\x74\145\170\164" => $text, "\x72\x65\x61\x64\151\x6e\147" => serialize([])]; goto eDrJZ; I0wK1: } public function saveCatatanSiswa() { goto a13pe; MoeZv: $level = $this->input->post("\154\145\166\145\x6c", true); goto JHUnc; CR4Sy: $id_siswa = $this->input->post("\151\144\x5f\x73\x69\163\167\141"); goto l9IM3; JHUnc: $data = ["\x69\144\x5f\164\160" => $tp->id_tp, "\151\144\137\x73\155\164" => $smt->id_smt, "\164\x79\x70\x65" => "\x32", "\x6c\145\x76\x65\154" => $level, "\x69\x64\137\x6b\145\x6c\141\163" => $guru->wali_kelas, "\151\144\x5f\x73\x69\163\x77\x61" => $id_siswa, "\164\x65\x78\x74" => $text, "\x72\145\141\x64\x69\156\147" => serialize([])]; goto UMnLh; a13pe: $tp = $this->dashboard->getTahunActive(); goto KbD3o; az5q8: $this->output_json($insert); goto s1wyo; gDJto: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto CR4Sy; KbD3o: $smt = $this->dashboard->getSemesterActive(); goto oJ4d8; UMnLh: $insert = $this->master->create("\153\x65\x6c\x61\163\137\x63\x61\164\141\x74\x61\x6e\x5f\x77\x61\x6c\151", $data); goto az5q8; oJ4d8: $user = $this->ion_auth->user()->row(); goto gDJto; l9IM3: $text = $this->input->post("\x74\145\170\164", true); goto MoeZv; s1wyo: } public function updateCatatanKelas() { } public function hapus($id_catatan) { $delete = $this->master->delete("\x6b\x65\154\x61\x73\x5f\143\x61\164\x61\x74\x61\x6e\x5f\x77\x61\154\x69", $id_catatan, "\151\x64\137\x63\141\164\141\164\141\x6e"); $this->output_json($delete); } }
