<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Walisiswa extends CI_Controller { public function __construct() { goto VAQnq; ZRiK0: $this->load->library(["\144\141\x74\x61\164\141\x62\154\145\x73", "\x66\157\162\x6d\x5f\166\x61\154\x69\x64\x61\x74\151\x6f\156"]); goto EQrzG; VAQnq: parent::__construct(); goto trkLQ; N23dW: IObYC: goto xvded; rLADT: $this->load->model("\104\x61\x73\150\142\x6f\141\x72\x64\x5f\x6d\x6f\x64\145\154", "\144\141\163\x68\142\157\x61\162\144"); goto r2G7f; EQrzG: $this->load->model("\115\x61\163\x74\145\x72\137\155\157\x64\145\x6c", "\x6d\x61\x73\x74\145\162"); goto rLADT; trkLQ: if (!$this->ion_auth->logged_in()) { goto IObYC; } goto iS7kT; xvded: redirect("\x61\165\x74\150"); goto w2JL0; JPBEB: show_error("\110\x61\156\x79\x61\x20\101\x64\x6d\x69\x6e\151\x73\164\162\x61\164\x6f\x72\x20\x64\x61\156\x20\147\165\162\x75\x20\171\141\x6e\147\40\x64\x69\142\145\x72\151\x20\x68\x61\153\40\165\x6e\x74\165\x6b\40\x6d\145\x6e\x67\x61\x6b\163\x65\163\40\x68\x61\x6c\141\155\x61\x6e\40\x69\x6e\x69\54\x20\x3c\141\40\150\162\x65\146\75\42" . base_url("\x64\141\163\x68\142\157\141\x72\144") . "\42\x3e\x4b\145\x6d\x62\141\x6c\x69\x20\x6b\x65\40\155\145\156\165\x20\141\167\141\x6c\x3c\x2f\x61\x3e", 403, "\x41\153\163\x65\x73\40\x54\x65\x72\x6c\x61\x72\x61\156\x67"); goto mnA_2; w2JL0: oFXzY: goto ZRiK0; mnA_2: pl_ik: goto hfx9W; r2G7f: $this->load->model("\x43\x62\x74\137\155\x6f\x64\x65\x6c", "\143\142\164"); goto Wn5Sc; iS7kT: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\x72\x75"))) { goto pl_ik; } goto JPBEB; hfx9W: goto oFXzY; goto N23dW; Wn5Sc: $this->form_validation->set_error_delimiters('', ''); goto RAwiM; RAwiM: } public function output_json($data, $encode = true) { goto bL5_9; gP0fi: $data = json_encode($data); goto gFuyR; bL5_9: if (!$encode) { goto VLyen; } goto gP0fi; RRgk3: $this->output->set_content_type("\x61\160\160\154\151\143\x61\164\151\x6f\156\57\152\x73\157\x6e")->set_output($data); goto CTOth; gFuyR: VLyen: goto RRgk3; CTOth: } public function index() { goto c4FKs; OnDod: $smt = $this->master->getSemesterActive(); goto pwGjv; M5Ppe: $data = ["\165\163\x65\x72" => $user, "\x6a\165\x64\x75\x6c" => "\x44\x61\146\x74\141\162\x20\123\151\x73\x77\x61", "\x73\165\x62\152\x75\144\x75\x6c" => "\123\x69\163\x77\x61\40\x4b\x65\154\141\163\40\101\156\x64\x61", "\x73\145\164\x74\x69\156\x67" => $this->dashboard->getSetting()]; goto jJiol; OlTVt: $data["\x74\x70\x5f\141\143\164\x69\x76\145"] = $tp; goto ib32a; pwGjv: $data["\164\160"] = $this->dashboard->getTahun(); goto OlTVt; jJiol: $tp = $this->master->getTahunActive(); goto OnDod; L6gxs: $this->load->view("\155\x65\155\x62\x65\162\163\57\147\165\x72\x75\x2f\x74\x65\x6d\160\x6c\x61\164\145\163\57\x68\145\141\x64\x65\162", $data); goto uR8ML; ib32a: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto TPj5_; TPj5_: $data["\x73\x6d\164\137\x61\x63\x74\151\x76\x65"] = $smt; goto Zgjmi; c4FKs: $user = $this->ion_auth->user()->row(); goto M5Ppe; n0NG4: $this->load->view("\x6d\x65\x6d\142\145\x72\x73\57\x67\x75\x72\165\57\164\x65\x6d\160\154\141\164\145\163\57\146\x6f\157\x74\145\x72"); goto GCEwr; Zgjmi: $data["\x67\165\162\x75"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto L6gxs; uR8ML: $this->load->view("\x6d\x65\x6d\142\145\162\163\x2f\x67\x75\162\x75\x2f\x77\x61\x6c\151\x2f\153\x65\x6c\141\163"); goto n0NG4; GCEwr: } public function dataKelas() { goto tHGaF; DRz56: $smt = $this->dashboard->getSemesterActive(); goto hMBvk; Yep58: $tp = $this->dashboard->getTahunActive(); goto DRz56; hMBvk: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto ch3ip; tHGaF: $user = $this->ion_auth->user()->row(); goto Yep58; ch3ip: $this->output_json($this->master->getDataSiswaByKelas($tp->id_tp, $smt->id_smt, $guru->wali_kelas), false); goto bWCHA; bWCHA: } public function edit($id) { goto XlbkG; XlbkG: $siswa = $this->master->getSiswaById($id); goto D6B1L; tEIlZ: $this->load->view("\155\145\x6d\x62\145\x72\x73\57\x67\165\162\165\57\164\x65\x6d\x70\154\x61\164\x65\x73\x2f\146\x6f\157\164\x65\x72"); goto EERd6; MELp0: $inputWali = [["\156\141\x6d\x65" => "\x6e\x61\x6d\x61\x5f\167\141\x6c\x69", "\x6c\141\142\145\154" => "\116\x61\155\x61\40\127\x61\x6c\151", "\166\141\x6c\165\145" => $siswa->nama_wali, "\151\143\157\156" => "\146\x61\x72\x20\x66\141\x2d\x75\x73\145\162", "\x74\171\x70\145" => "\x74\145\170\164"], ["\x6e\x61\x6d\x65" => "\160\145\156\x64\151\x64\x69\x6b\141\156\137\x77\141\x6c\151", "\x6c\x61\142\145\x6c" => "\x50\145\x6e\x64\151\x64\x69\153\141\156\x20\127\141\x6c\151", "\x76\141\154\x75\x65" => $siswa->pendidikan_wali, "\x69\x63\157\156" => "\x66\x61\162\x20\146\x61\x2d\x75\x73\x65\162", "\164\x79\160\145" => "\x74\145\x78\164"], ["\x6e\x61\x6d\145" => "\x70\x65\153\145\162\x6a\141\141\x6e\137\x77\x61\154\x69", "\x6c\141\x62\145\154" => "\x50\145\153\x65\x72\x6a\141\141\x6e\x20\127\x61\154\x69", "\x76\141\154\x75\145" => $siswa->pekerjaan_wali, "\x69\x63\157\156" => "\x66\x61\x72\x20\146\x61\55\x75\163\x65\162", "\164\171\160\145" => "\164\145\170\164"], ["\156\x61\155\145" => "\x61\x6c\141\x6d\141\x74\x5f\167\x61\x6c\x69", "\x6c\x61\x62\x65\154" => "\x41\154\x61\x6d\x61\164\40\127\x61\x6c\x69", "\x76\x61\x6c\165\145" => $siswa->alamat_wali, "\151\143\157\x6e" => "\x66\x61\162\x20\x66\141\x2d\x75\x73\145\162", "\x74\171\x70\145" => "\164\x65\170\x74"], ["\x6e\x61\155\x65" => "\x6e\x6f\x68\160\x5f\167\x61\x6c\x69", "\x6c\x61\142\x65\154" => "\116\x6f\56\40\x48\x50\x20\127\x61\154\x69", "\166\141\x6c\165\x65" => $siswa->nohp_wali, "\x69\x63\157\x6e" => "\x66\x61\162\40\x66\x61\x2d\165\x73\145\x72", "\164\x79\x70\145" => "\x6e\165\155\142\145\x72"]]; goto rrUzU; rrUzU: $user = $this->ion_auth->user()->row(); goto P9qw7; D6B1L: $inputData = [["\154\141\142\145\x6c" => "\x4e\141\x6d\x61\x20\x4c\145\156\x67\x6b\x61\160", "\156\141\x6d\145" => "\x6e\141\155\141", "\166\x61\x6c\165\x65" => $siswa->nama, "\151\x63\x6f\156" => "\x66\x61\162\x20\x66\141\55\165\x73\x65\x72", "\x72\x65\x71" => "\x72\x65\x71\165\x69\x72\x65\144", "\x63\x6c\x61\163\x73" => '', "\x74\171\x70\x65" => "\x74\x65\170\164"], ["\154\x61\142\145\x6c" => "\116\111\123", "\x6e\141\155\145" => "\x6e\151\163", "\x76\x61\154\x75\145" => $siswa->nis, "\x69\143\157\x6e" => "\146\x61\x72\40\146\141\x2d\x69\x64\55\143\141\x72\144", "\162\x65\161" => "\162\x65\x71\x75\x69\x72\x65\x64", "\x63\154\141\163\x73" => '', "\x74\x79\x70\145" => "\x6e\x75\x6d\x62\x65\162"], ["\x6e\x61\155\145" => "\x6e\151\163\x6e", "\154\141\x62\145\x6c" => "\x4e\111\x53\116", "\166\x61\x6c\x75\x65" => $siswa->nisn, "\x69\143\x6f\156" => "\146\141\162\x20\146\x61\x2d\151\x64\55\143\x61\162\144", "\x72\145\161" => '', "\x63\154\141\163\x73" => '', "\x74\171\x70\145" => "\164\x65\x78\164"], ["\154\x61\x62\145\154" => "\112\145\156\151\x73\x20\x4b\x65\x6c\141\155\x69\156", "\x6e\x61\155\145" => "\x6a\x65\156\151\163\x5f\x6b\x65\154\x61\155\151\156", "\x76\x61\x6c\165\x65" => $siswa->jenis_kelamin, "\151\143\157\x6e" => "\146\141\x73\x20\146\141\x2d\166\145\156\x75\163\x2d\x6d\x61\162\163", "\162\x65\161" => "\162\x65\x71\165\151\162\x65\144", "\x63\x6c\141\x73\163" => '', "\164\x79\x70\145" => "\x74\145\170\x74"], ["\x6e\x61\x6d\145" => "\x6b\145\154\x61\163\x5f\141\x77\141\x6c", "\154\141\x62\145\x6c" => "\104\x69\164\x65\x72\x69\155\x61\40\x64\151\40\153\x65\x6c\x61\163", "\166\x61\154\165\x65" => $siswa->kelas_awal, "\x69\143\157\x6e" => "\146\x61\x73\40\x66\141\55\147\162\x61\144\165\141\164\151\x6f\x6e\55\143\141\160", "\162\x65\x71" => "\x72\145\x71\165\x69\162\x65\144", "\143\154\x61\163\x73" => '', "\164\x79\x70\145" => "\164\x65\170\164"], ["\156\x61\155\145" => "\x74\x61\x68\165\x6e\x5f\155\141\163\165\x6b", "\x6c\x61\x62\x65\x6c" => "\124\x67\x6c\x20\144\x69\x74\145\x72\x69\155\141", "\166\x61\154\165\x65" => $siswa->tahun_masuk, "\x69\143\x6f\x6e" => "\164\141\150\x75\156\40\x66\141\162\40\x66\141\55\x63\x61\154\x65\156\x64\141\x72\55\x61\154\x74", "\162\145\161" => "\x72\145\x71\x75\151\x72\x65\x64", "\x63\x6c\x61\x73\163" => "\164\141\x68\165\x6e", "\x74\171\x70\145" => "\x74\x65\170\164"], ["\156\141\x6d\x65" => "\x73\145\153\x6f\154\141\x68\x5f\141\x73\x61\x6c", "\x6c\x61\x62\x65\x6c" => "\x53\x65\153\157\154\x61\150\x20\x41\163\x61\154", "\166\141\x6c\165\145" => $siswa->sekolah_asal, "\151\143\157\x6e" => "\146\x61\163\40\146\141\55\x67\162\141\144\165\x61\x74\151\x6f\x6e\x2d\143\141\160", "\162\x65\x71" => '', "\143\x6c\x61\163\163" => '', "\164\171\160\x65" => "\164\145\170\164"]]; goto VUkNw; gbTma: $this->load->view("\155\x65\x6d\142\145\162\x73\57\147\x75\162\165\57\x77\x61\x6c\x69\x2f\x65\x64\x69\x74"); goto tEIlZ; VUkNw: $inputBio = [["\x6e\x61\x6d\145" => "\x73\164\x61\164\165\163\137\x6b\145\154\x75\x61\162\147\141", "\154\x61\x62\145\154" => "\x53\x74\x61\x74\165\163\40\x64\141\x6c\141\x6d\x20\113\145\x6c\x75\x61\x72\x67\x61", "\x76\141\x6c\x75\145" => $siswa->status_keluarga == '' ? "\61" : $siswa->status_keluarga, "\151\143\x6f\156" => "\x66\x61\x72\x20\x66\x61\x2d\165\163\x65\x72", "\143\154\x61\163\x73" => '', "\x74\171\160\145" => "\x74\x65\x78\x74"], ["\x6e\141\x6d\145" => "\141\x6e\141\153\137\153\145", "\154\x61\x62\x65\x6c" => "\101\156\141\x6b\x20\x6b\x65", "\x76\141\154\x75\145" => $siswa->anak_ke, "\151\143\x6f\156" => "\x66\141\x72\x20\146\141\55\x75\163\x65\162", "\x63\154\x61\163\163" => '', "\x74\171\x70\145" => "\x6e\165\x6d\x62\x65\162"], ["\x6e\x61\x6d\145" => "\x74\x65\x6d\x70\x61\164\137\x6c\x61\150\151\162", "\x6c\141\142\x65\154" => "\124\x65\x6d\x70\141\x74\x20\114\x61\150\x69\162", "\x76\x61\x6c\x75\x65" => $siswa->tempat_lahir, "\151\143\157\156" => "\x66\141\162\x20\x66\141\x2d\155\141\160", "\143\154\141\163\x73" => '', "\x74\x79\160\145" => "\x74\x65\x78\x74"], ["\156\x61\155\145" => "\164\x61\156\x67\x67\x61\154\137\154\x61\150\151\162", "\154\141\x62\145\x6c" => "\x54\141\156\147\147\x61\154\40\114\141\150\151\x72", "\x76\141\x6c\165\145" => $siswa->tanggal_lahir, "\151\143\x6f\156" => "\146\x61\x72\40\146\141\x2d\x63\x61\x6c\x65\156\x64\x61\162", "\x63\154\141\x73\163" => "\x74\141\x68\165\x6e", "\164\x79\x70\x65" => "\x74\x65\x78\164"], ["\143\154\x61\163\x73" => '', "\156\141\155\145" => "\141\x67\141\x6d\x61", "\154\141\142\x65\x6c" => "\101\x67\141\x6d\x61", "\x76\x61\154\165\145" => $siswa->agama, "\x69\143\157\x6e" => "\146\141\162\40\146\x61\55\143\141\154\145\x6e\144\x61\x72", "\164\x79\x70\x65" => "\164\145\x78\x74"], ["\143\x6c\141\x73\x73" => '', "\x6e\141\x6d\145" => "\x61\x6c\x61\x6d\141\x74", "\154\141\x62\x65\154" => "\101\154\x61\x6d\141\164", "\166\x61\x6c\x75\145" => $siswa->alamat, "\151\143\157\x6e" => "\146\141\162\40\x66\x61\x2d\165\x73\x65\162", "\x74\x79\x70\x65" => "\164\x65\170\x74"], ["\143\154\x61\x73\x73" => '', "\x6e\x61\155\145" => "\x72\164", "\x6c\x61\x62\145\154" => "\x52\x74", "\166\x61\154\165\145" => $siswa->rt, "\x69\x63\157\156" => "\x66\141\162\x20\x66\141\55\165\x73\145\x72", "\164\x79\160\x65" => "\164\145\170\x74"], ["\x63\154\x61\163\163" => '', "\x6e\141\x6d\145" => "\162\167", "\x6c\141\142\x65\x6c" => "\122\x77", "\x76\x61\154\x75\x65" => $siswa->rw, "\151\143\157\x6e" => "\x66\141\x72\40\146\x61\x2d\x75\x73\145\x72", "\x74\171\x70\x65" => "\164\145\170\164"], ["\x63\x6c\x61\x73\163" => '', "\x6e\x61\155\145" => "\x6b\145\x6c\165\x72\141\150\x61\x6e", "\x6c\x61\x62\x65\154" => "\x4b\145\x6c\x75\162\x61\150\x61\x6e\x2f\x44\145\x73\x61", "\166\141\x6c\165\x65" => $siswa->kelurahan, "\151\x63\x6f\x6e" => "\x66\x61\x72\40\x66\141\55\x75\163\145\162", "\164\x79\x70\145" => "\x74\145\170\x74"], ["\x63\154\141\x73\x73" => '', "\156\x61\155\145" => "\153\145\x63\x61\155\141\x74\141\156", "\x6c\x61\142\x65\x6c" => "\x4b\145\143\x61\x6d\141\x74\141\x6e", "\166\141\154\x75\x65" => $siswa->kecamatan, "\151\143\157\156" => "\146\141\x72\x20\x66\x61\55\x75\x73\x65\162", "\x74\171\160\x65" => "\x74\145\170\164"], ["\x63\154\x61\163\163" => '', "\156\141\x6d\x65" => "\x6b\141\x62\165\x70\x61\164\x65\x6e", "\154\141\x62\x65\154" => "\113\141\142\x75\x70\141\164\145\156\x2f\113\157\164\141", "\166\141\x6c\165\145" => $siswa->kabupaten, "\151\x63\157\156" => "\x66\x61\x72\40\x66\x61\55\165\163\x65\162", "\x74\x79\160\145" => "\164\145\x78\164"], ["\143\154\x61\x73\x73" => '', "\156\141\x6d\x65" => "\x70\162\x6f\x76\151\x6e\163\151", "\x6c\x61\x62\x65\154" => "\x50\x72\157\x76\151\156\x73\151", "\166\x61\x6c\x75\145" => $siswa->provinsi, "\151\x63\x6f\156" => "\146\141\x72\40\x66\141\x2d\165\163\145\162", "\164\x79\160\x65" => "\x74\x65\x78\164"], ["\143\154\141\x73\163" => '', "\156\141\155\x65" => "\153\157\x64\x65\x5f\x70\157\x73", "\x6c\141\x62\145\154" => "\x4b\x6f\144\x65\x20\x50\157\163", "\x76\x61\x6c\165\x65" => $siswa->kode_pos, "\x69\143\x6f\156" => "\146\141\162\40\x66\141\55\165\x73\x65\162", "\164\171\160\145" => "\164\145\170\x74"], ["\x63\154\x61\163\163" => '', "\156\x61\155\x65" => "\150\x70", "\154\141\142\145\154" => "\110\160", "\166\x61\x6c\x75\x65" => $siswa->hp, "\151\x63\x6f\156" => "\x66\141\162\x20\x66\141\x2d\x75\163\x65\162", "\x74\x79\x70\145" => "\x74\x65\x78\x74"]]; goto nLcFK; HX48z: $data["\x67\x75\162\x75"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto ql32o; Twx01: $data["\x74\x70"] = $this->dashboard->getTahun(); goto KN4kv; zeMy0: $data["\x69\x6e\x70\165\x74\137\144\x61\x74\141"] = json_decode(json_encode($inputData), FALSE); goto iG0z9; RLlMe: $data["\163\x6d\x74\x5f\x61\143\x74\151\166\x65"] = $smt; goto zeMy0; ewokC: $data["\151\x6e\x70\165\164\x5f\167\141\x6c\x69"] = json_decode(json_encode($inputWali), FALSE); goto HX48z; QSRV8: $tp = $this->master->getTahunActive(); goto jlofA; iG0z9: $data["\x69\156\x70\165\x74\137\142\x69\157"] = json_decode(json_encode($inputBio), FALSE); goto Q85IZ; jlofA: $smt = $this->master->getSemesterActive(); goto Twx01; wCNNU: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto RLlMe; KN4kv: $data["\x74\160\137\x61\x63\x74\151\166\x65"] = $tp; goto wCNNU; ql32o: $this->load->view("\155\x65\x6d\x62\x65\162\163\x2f\x67\x75\x72\x75\x2f\164\145\155\160\x6c\141\x74\x65\x73\x2f\150\x65\x61\144\x65\x72", $data); goto gbTma; P9qw7: $data = ["\165\163\x65\162" => $user, "\x6a\165\x64\x75\154" => "\123\151\163\x77\x61", "\163\x75\x62\152\165\144\165\154" => "\x45\144\151\164\x20\104\141\x74\x61\40\123\x69\x73\167\141", "\163\151\x73\x77\x61" => $siswa, "\163\145\164\164\x69\156\x67" => $this->dashboard->getSetting()]; goto QSRV8; nLcFK: $inputOrtu = [["\x6e\141\x6d\x65" => "\x6e\141\155\x61\x5f\x61\171\x61\x68", "\154\141\142\145\x6c" => "\x4e\141\x6d\x61\40\101\171\141\150", "\x76\x61\x6c\165\145" => $siswa->nama_ayah, "\x69\143\x6f\x6e" => "\x66\x61\162\40\146\x61\55\165\163\x65\162", "\164\171\x70\x65" => "\164\145\170\164"], ["\x6e\141\155\x65" => "\160\x65\x6e\x64\x69\144\151\153\x61\156\137\x61\x79\x61\150", "\154\x61\x62\x65\x6c" => "\120\x65\x6e\x64\151\144\151\153\x61\156\x20\101\171\141\150", "\166\141\154\165\x65" => $siswa->pendidikan_ayah, "\151\143\157\x6e" => "\x66\141\x72\40\x66\141\x2d\x75\x73\145\162", "\164\171\x70\x65" => "\164\x65\170\164"], ["\156\141\x6d\x65" => "\160\145\153\x65\x72\152\141\141\x6e\137\x61\171\x61\x68", "\x6c\x61\x62\x65\154" => "\120\x65\x6b\145\x72\152\141\x61\x6e\40\101\171\141\150", "\166\x61\154\x75\x65" => $siswa->pekerjaan_ayah, "\151\143\157\156" => "\146\141\x72\40\x66\x61\x2d\x75\x73\145\x72", "\x74\x79\x70\145" => "\164\145\x78\164"], ["\x6e\141\x6d\145" => "\x6e\x6f\150\160\x5f\141\171\141\150", "\x6c\141\142\145\154" => "\116\x6f\56\40\x48\x50\40\x41\171\141\x68", "\x76\141\x6c\x75\x65" => $siswa->nohp_ayah, "\151\x63\x6f\156" => "\146\x61\162\x20\146\141\x2d\x75\x73\x65\x72", "\164\x79\x70\145" => "\156\x75\155\142\x65\x72"], ["\x6e\x61\x6d\x65" => "\x61\154\x61\x6d\141\164\137\141\x79\141\150", "\x6c\x61\142\x65\x6c" => "\x41\x6c\141\x6d\x61\164\x20\x41\171\x61\x68", "\x76\141\154\x75\145" => $siswa->alamat_ayah, "\x69\143\x6f\x6e" => "\x66\141\x72\x20\146\x61\55\x75\x73\145\x72", "\x74\x79\x70\x65" => "\x74\x65\170\x74"], ["\x6e\141\x6d\145" => "\x6e\141\155\141\137\x69\x62\165", "\154\x61\x62\x65\x6c" => "\x4e\x61\x6d\x61\40\111\x62\165", "\x76\141\154\x75\145" => $siswa->nama_ibu, "\x69\x63\x6f\156" => "\146\141\162\40\x66\141\x2d\165\x73\x65\162", "\164\x79\160\x65" => "\x74\145\170\x74"], ["\156\141\x6d\145" => "\x70\145\x6e\144\151\x64\x69\x6b\141\156\x5f\151\142\x75", "\154\141\142\145\154" => "\120\145\x6e\x64\x69\144\x69\153\x61\x6e\40\111\142\x75", "\166\x61\x6c\x75\145" => $siswa->pendidikan_ibu, "\x69\143\x6f\x6e" => "\x66\x61\162\40\146\x61\x2d\x75\x73\x65\162", "\x74\171\x70\x65" => "\x74\x65\170\164"], ["\x6e\141\x6d\145" => "\x70\145\153\x65\x72\x6a\141\141\x6e\x5f\x69\x62\165", "\x6c\x61\x62\x65\x6c" => "\120\145\153\x65\x72\x6a\141\141\x6e\40\111\x62\165", "\166\141\154\165\145" => $siswa->pekerjaan_ibu, "\151\143\157\x6e" => "\146\x61\x72\40\146\141\55\x75\163\145\x72", "\164\x79\x70\145" => "\x74\x65\x78\x74"], ["\156\x61\x6d\145" => "\156\157\x68\x70\x5f\151\142\165", "\154\x61\142\x65\x6c" => "\116\157\x2e\x20\x48\120\x20\111\x62\x75", "\x76\x61\x6c\165\145" => $siswa->nohp_ibu, "\151\x63\x6f\x6e" => "\146\141\162\x20\146\141\x2d\165\163\145\x72", "\x74\171\160\x65" => "\156\x75\x6d\142\145\162"], ["\156\x61\x6d\x65" => "\141\x6c\x61\155\x61\164\x5f\x69\142\x75", "\154\141\142\x65\154" => "\x41\154\x61\x6d\141\x74\x20\111\x62\x75", "\x76\x61\x6c\x75\x65" => $siswa->alamat_ibu, "\151\143\157\x6e" => "\146\x61\162\40\x66\141\x2d\165\x73\x65\162", "\x74\171\x70\x65" => "\x74\x65\x78\x74"]]; goto MELp0; Q85IZ: $data["\151\x6e\160\x75\164\x5f\157\x72\164\165"] = json_decode(json_encode($inputOrtu), FALSE); goto ewokC; EERd6: } public function updateData() { goto QnyNA; QnyNA: $id_siswa = $this->input->post("\151\144\x5f\x73\x69\163\167\x61", true); goto IsYRM; w4uYB: nsRvE: goto gKbZ0; nYFa_: $data["\151\156\163\x65\x72\x74"] = $input; goto cVpB3; u4cYK: $data["\151\156\x73\x65\162\x74"] = false; goto vh8lJ; RXoEg: $action = $this->master->update("\x6d\141\x73\164\x65\162\137\x73\151\163\167\141", $input, "\x69\x64\x5f\163\x69\163\167\x61", $id_siswa); goto nYFa_; vh8lJ: $data["\164\x65\x78\164"] = "\x44\141\164\x61\40\x53\165\144\141\x68\x20\141\144\x61\54\40\x50\141\x73\164\x69\153\141\x6e\x20\x4e\111\123\54\x20\144\x61\x6e\40\x4e\x49\x53\116\40\x62\x65\x6c\165\155\x20\x64\151\x67\x75\x6e\x61\x6b\x61\x6e\40\163\x69\163\167\141\x20\x6c\141\151\156"; goto w4uYB; IsYRM: $nis = $this->input->post("\x6e\x69\163", true); goto zH40K; KeLDt: if ($this->form_validation->run() == FALSE) { goto bCaAo; } goto uZvzk; C6HqH: $siswa = $this->master->getSiswaById($id_siswa); goto zxMJi; nismi: goto nsRvE; goto JA5lN; JA5lN: bCaAo: goto u4cYK; uZvzk: $input = ["\156\x69\163\156" => $this->input->post("\x6e\x69\x73\156", true), "\156\151\x73" => $this->input->post("\156\151\x73", true), "\x6e\x61\155\x61" => $this->input->post("\x6e\141\x6d\x61", true), "\x6a\x65\x6e\x69\x73\137\153\x65\x6c\x61\x6d\151\156" => $this->input->post("\152\145\156\151\163\x5f\153\145\154\x61\155\151\156", true), "\164\x65\155\160\x61\x74\137\x6c\x61\x68\x69\162" => $this->input->post("\164\x65\155\160\141\x74\137\x6c\141\150\151\x72", true), "\x74\141\156\x67\147\x61\x6c\137\x6c\141\x68\151\162" => $this->input->post("\x74\141\x6e\147\x67\141\x6c\x5f\154\x61\x68\x69\x72", true), "\x61\147\141\155\141" => $this->input->post("\x61\x67\141\x6d\141", true), "\163\164\x61\x74\165\x73\137\x6b\145\x6c\x75\x61\x72\147\141" => $this->input->post("\163\164\141\164\x75\163\137\x6b\x65\154\165\141\x72\147\141", true), "\x61\156\141\153\137\x6b\145" => $this->input->post("\141\x6e\x61\x6b\x5f\x6b\x65", true), "\141\x6c\141\155\141\x74" => $this->input->post("\141\x6c\141\155\141\164", true), "\162\x74" => $this->input->post("\162\164", true), "\x72\167" => $this->input->post("\162\167", true), "\153\145\x6c\x75\162\x61\150\x61\x6e" => $this->input->post("\x6b\x65\154\165\162\x61\x68\141\x6e", true), "\153\145\143\141\155\141\164\x61\156" => $this->input->post("\x6b\x65\x63\x61\155\141\164\x61\156", true), "\x6b\x61\x62\x75\160\x61\x74\x65\x6e" => $this->input->post("\x6b\x61\142\165\160\141\x74\x65\x6e", true), "\160\x72\157\166\151\156\x73\151" => $this->input->post("\160\x72\x6f\x76\151\x6e\x73\x69", true), "\x6b\157\x64\x65\x5f\160\157\163" => $this->input->post("\x6b\157\x64\x65\x5f\x70\x6f\163", true), "\150\x70" => $this->input->post("\x68\x70", true), "\x6e\141\x6d\x61\x5f\141\171\x61\150" => $this->input->post("\156\141\155\x61\x5f\141\x79\141\x68", true), "\x6e\x6f\x68\x70\x5f\141\x79\x61\150" => $this->input->post("\x6e\157\x68\x70\x5f\x61\x79\141\150", true), "\x70\x65\x6e\x64\151\x64\x69\153\141\156\x5f\x61\x79\141\x68" => $this->input->post("\x70\x65\156\144\x69\144\151\x6b\141\156\x5f\141\171\x61\150", true), "\160\x65\x6b\x65\x72\152\141\141\x6e\137\x61\171\x61\x68" => $this->input->post("\160\145\153\x65\162\x6a\x61\x61\x6e\x5f\141\x79\141\150", true), "\x61\x6c\141\x6d\x61\x74\x5f\141\x79\141\x68" => $this->input->post("\x61\154\x61\155\141\x74\137\x61\x79\x61\x68", true), "\x6e\141\155\141\137\x69\142\x75" => $this->input->post("\156\141\x6d\141\x5f\x69\x62\x75", true), "\156\157\x68\x70\137\x69\142\165" => $this->input->post("\x6e\157\x68\x70\137\x69\142\x75", true), "\x70\145\156\x64\x69\x64\x69\x6b\x61\x6e\137\151\142\165" => $this->input->post("\x70\x65\156\x64\151\x64\x69\x6b\141\x6e\137\151\142\165", true), "\x70\x65\x6b\145\162\152\x61\141\156\137\151\x62\165" => $this->input->post("\x70\145\153\145\x72\152\x61\141\x6e\137\151\x62\165", true), "\x61\x6c\x61\x6d\x61\164\x5f\151\x62\x75" => $this->input->post("\x61\154\141\155\x61\164\137\x69\142\165", true), "\x6e\141\155\141\137\x77\x61\x6c\x69" => $this->input->post("\x6e\141\155\141\137\167\141\154\151", true), "\160\x65\156\x64\151\x64\151\x6b\x61\156\137\x77\x61\154\151" => $this->input->post("\160\x65\156\144\x69\x64\x69\153\x61\156\137\167\141\x6c\151", true), "\x70\145\153\145\162\x6a\x61\x61\x6e\137\167\141\x6c\x69" => $this->input->post("\160\x65\x6b\x65\x72\x6a\141\x61\156\x5f\167\141\154\151", true), "\x6e\x6f\x68\160\x5f\x77\x61\x6c\151" => $this->input->post("\156\157\x68\x70\137\x77\x61\x6c\151", true), "\141\154\141\x6d\141\x74\x5f\167\141\x6c\x69" => $this->input->post("\141\x6c\x61\x6d\x61\x74\137\167\141\154\151", true), "\x74\x61\150\x75\x6e\137\x6d\x61\163\165\153" => $this->input->post("\x74\141\150\x75\156\x5f\155\141\163\165\153", true), "\x6b\145\154\141\163\137\x61\167\x61\x6c" => $this->input->post("\153\145\x6c\x61\x73\137\141\167\141\x6c", true), "\164\147\154\x5f\154\141\x68\151\x72\x5f\141\171\141\x68" => $this->input->post("\164\x67\x6c\137\154\x61\x68\x69\x72\x5f\x61\x79\x61\x68", true), "\x74\147\x6c\x5f\154\141\150\151\x72\x5f\x69\142\x75" => $this->input->post("\x74\x67\154\137\x6c\x61\x68\x69\x72\x5f\151\142\x75", true), "\x74\x67\x6c\137\x6c\141\150\x69\x72\x5f\x77\141\x6c\151" => $this->input->post("\164\147\154\137\x6c\x61\x68\x69\162\137\x77\141\x6c\151", true), "\163\145\153\x6f\x6c\141\x68\137\x61\x73\x61\154" => $this->input->post("\x73\x65\153\157\x6c\141\150\137\141\163\x61\154", true), "\146\157\x74\x6f" => "\165\160\154\157\x61\x64\x73\x2f\146\x6f\164\157\137\x73\x69\163\167\141\x2f" . $nis . "\x2e\152\x70\x67"]; goto RXoEg; Mapfq: $this->form_validation->set_rules("\x6e\151\163", "\116\111\123", "\162\x65\161\165\151\x72\145\144\x7c\x6e\x75\x6d\145\162\x69\x63\174\x74\162\x69\x6d\x7c\155\151\x6e\x5f\154\x65\156\147\x74\150\x5b\66\135\x7c\x6d\141\x78\x5f\154\x65\156\147\x74\x68\x5b\63\x30\135" . $u_nis); goto KeLDt; gKbZ0: $this->output_json($data); goto Rn7Db; zxMJi: $u_nis = $siswa->nis === $nis ? '' : "\174\151\163\137\165\x6e\151\161\165\x65\x5b\155\141\x73\x74\x65\162\137\163\x69\163\167\x61\x2e\x6e\x69\x73\x5d"; goto Mapfq; zH40K: $nisn = $this->input->post("\156\x69\x73\x6e", true); goto C6HqH; cVpB3: $data["\x74\145\x78\164"] = "\x53\x69\163\167\141\x20\x62\145\x72\x68\141\x73\151\x6c\40\x64\x69\x70\145\162\142\x61\150\141\162\165\151"; goto nismi; Rn7Db: } function uploadFile($id_siswa) { goto bko_K; oKKz9: $this->output_json($data); goto dt7Ri; WEnSC: $data["\163\x74\141\x74\165\x73"] = true; goto hWxD9; WnXve: YZAk7: goto NAIew; MRUg_: $config["\x6f\166\x65\162\167\x72\x69\164\x65"] = true; goto UmUvr; UmUvr: $config["\x66\151\x6c\145\x5f\x6e\141\x6d\x65"] = $siswa->nis; goto Uof_J; MyQs5: $data["\163\162\x63"] = $this->upload->display_errors(); goto m8SLT; IvsaM: $data["\146\x69\154\145\x6e\x61\x6d\x65"] = pathinfo($result["\146\151\x6c\x65\137\x6e\141\155\145"], PATHINFO_FILENAME); goto WEnSC; z0lVs: $data["\163\x74\141\x74\165\163"] = false; goto MyQs5; YOCOl: $data["\x73\162\143"] = base_url() . "\165\x70\154\x6f\x61\144\163\57\x66\157\164\157\137\x73\151\163\x77\x61\57" . $result["\x66\151\x6c\x65\x5f\156\141\155\145"]; goto IvsaM; ozVWx: if (isset($_FILES["\x66\x6f\x74\x6f"]["\156\141\155\x65"])) { goto YZAk7; } goto sJNPn; nD2DV: $data["\163\x69\172\x65"] = $_FILES["\x66\157\x74\x6f"]["\163\151\172\x65"]; goto yZjD5; fBfh9: goto eGMHh; goto eciJL; JvNUc: $result = $this->upload->data(); goto YOCOl; eciJL: TLoKY: goto z0lVs; m59np: $this->db->where("\x69\x64\x5f\163\x69\x73\167\x61", $id_siswa); goto cp2Wl; sJNPn: $data["\163\162\x63"] = ''; goto RKSmt; bko_K: $siswa = $this->master->getSiswaById($id_siswa); goto ozVWx; cp2Wl: $this->db->update("\x6d\141\163\164\x65\162\x5f\x73\151\x73\167\141"); goto fBfh9; qPzJ0: $config["\141\x6c\x6c\x6f\x77\x65\144\137\x74\x79\160\x65\163"] = "\147\151\146\x7c\152\160\x67\174\x70\x6e\x67\x7c\152\160\x65\x67\174\x4a\120\105\107\x7c\112\x50\x47\174\x50\116\107\x7c\107\111\x46"; goto MRUg_; NAIew: $config["\165\x70\154\157\141\x64\137\160\141\164\150"] = "\x2e\x2f\x75\160\x6c\157\141\x64\163\x2f\x66\157\164\157\x5f\163\151\163\x77\x61\x2f"; goto qPzJ0; fuefM: if (!$this->upload->do_upload("\x66\x6f\x74\x6f")) { goto TLoKY; } goto JvNUc; RKSmt: goto CDlC9; goto WnXve; m8SLT: eGMHh: goto huFct; yZjD5: CDlC9: goto oKKz9; Uof_J: $this->upload->initialize($config); goto fuefM; huFct: $data["\x74\x79\x70\145"] = $_FILES["\x66\x6f\164\x6f"]["\164\171\160\145"]; goto nD2DV; hWxD9: $this->db->set("\x66\157\x74\x6f", "\x75\x70\x6c\157\141\x64\163\x2f\x66\x6f\x74\157\137\x73\x69\x73\167\x61\x2f" . $result["\146\x69\x6c\x65\137\156\141\x6d\x65"]); goto m59np; dt7Ri: } function deleteFile($id_siswa) { goto z1gr2; gAdtt: $file_name = str_replace(base_url(), '', $src); goto ijyc6; CKLC7: P8pEP: goto Yzrkb; RuUDE: echo "\x46\x69\x6c\x65\x20\104\145\154\145\164\145\x20\123\165\143\x63\x65\163\x73\x66\165\154\x6c\x79"; goto CKLC7; Yzrkb: zjXy6: goto Sw_Tr; G80qE: $this->db->update("\x6d\x61\163\164\x65\x72\137\x73\x69\x73\167\141"); goto RuUDE; m_p7A: if (!unlink($file_name)) { goto P8pEP; } goto ICf1s; z1gr2: $src = $this->input->post("\163\162\143"); goto gAdtt; oOmji: $this->db->where("\x69\144\x5f\x73\x69\163\167\x61", $id_siswa); goto G80qE; ICf1s: $this->db->set("\146\x6f\x74\x6f", ''); goto oOmji; ijyc6: if (!($file_name != "\141\x73\x73\x65\164\x73\x2f\x69\155\147\57\163\x69\x73\x77\141\56\x70\x6e\147")) { goto zjXy6; } goto m_p7A; Sw_Tr: } public function delete() { goto oL8Qt; oL8Qt: $chk = $this->input->post("\143\150\145\x63\153\145\x64", true); goto aLS63; hIhiP: goto TeVai; goto aYocc; aLS63: if (!$chk) { goto mwPZA; } goto HBjz3; Elg4x: $this->output_json(["\x73\x74\141\164\165\163" => false]); goto S32GX; HBjz3: if (!$this->master->delete("\155\141\163\164\145\x72\137\163\151\x73\167\x61", $chk, "\151\144\x5f\163\x69\x73\x77\141")) { goto jRamn; } goto lksLh; aV0ax: jRamn: goto hIhiP; aYocc: mwPZA: goto Elg4x; S32GX: TeVai: goto eX5dr; iEqjZ: $this->output_json(["\x73\x74\x61\x74\x75\x73" => true, "\164\x6f\164\141\x6c" => count($chk)]); goto aV0ax; lksLh: $this->master->delete("\142\165\x6b\165\137\x69\156\x64\x75\153", $chk, "\151\x64\137\x73\151\x73\167\141"); goto iEqjZ; eX5dr: } }
