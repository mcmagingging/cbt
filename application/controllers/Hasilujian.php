<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\123\x45\x50\101\124\x48") or exit("\116\157\x20\x64\151\162\145\x63\x74\40\x73\x63\x72\151\x70\164\x20\141\143\x63\145\x73\163\40\x61\154\154\x6f\x77\x65\x64"); class HasilUjian extends CI_Controller { public function __construct() { goto wLgnG; iE0kg: $this->load->model("\x4d\x61\163\164\x65\162\137\x6d\157\x64\x65\154", "\x6d\141\x73\x74\x65\x72"); goto YT_xO; Ej7wc: redirect("\x61\x75\164\150"); goto OXBZt; YT_xO: $this->load->model("\x55\152\151\x61\156\137\155\157\144\145\x6c", "\165\152\151\x61\x6e"); goto P4C4U; OXBZt: lTNbT: goto CZEVd; Tx69a: if ($this->ion_auth->logged_in()) { goto lTNbT; } goto Ej7wc; CZEVd: $this->load->library(["\144\141\x74\141\164\x61\x62\x6c\x65\x73"]); goto iE0kg; wLgnG: parent::__construct(); goto Tx69a; P4C4U: $this->user = $this->ion_auth->user()->row(); goto fAFcZ; fAFcZ: } public function output_json($data, $encode = true) { goto oojX3; oojX3: if (!$encode) { goto Dv5AV; } goto Q_kJ1; IGZgb: $this->output->set_content_type("\x61\160\160\154\x69\x63\141\164\151\157\156\57\152\163\x6f\156")->set_output($data); goto Ptdpq; VPgwm: Dv5AV: goto IGZgb; Q_kJ1: $data = json_encode($data); goto VPgwm; Ptdpq: } public function data() { goto cKFMZ; JTcIS: $this->output_json($this->ujian->getHasilUjian($nip_guru), false); goto u3i_a; MTB5r: $nip_guru = $this->user->username; goto N6Xr1; N6Xr1: ybPBt: goto JTcIS; cKFMZ: $nip_guru = null; goto VxhNK; VxhNK: if (!$this->ion_auth->in_group("\147\x75\162\x75")) { goto ybPBt; } goto MTB5r; u3i_a: } public function NilaiMhs($id) { $this->output_json($this->ujian->HslUjianById($id, true), false); } public function index() { goto o3CYb; XrHkW: $this->load->view("\x5f\164\x65\155\x70\154\141\164\145\x73\x2f\144\x61\x73\x68\142\157\x61\x72\144\x2f\137\150\x65\141\144\x65\x72\56\160\x68\160", $data); goto Fegfn; o3CYb: $data = ["\165\163\145\x72" => $this->user, "\152\165\144\165\x6c" => "\125\152\151\141\x6e", "\x73\x75\142\152\x75\x64\165\154" => "\110\x61\163\x69\x6c\x20\125\x6a\151\141\x6e"]; goto XrHkW; Fegfn: $this->load->view("\165\152\151\x61\156\57\150\141\163\x69\154"); goto UgepX; UgepX: $this->load->view("\x5f\164\x65\155\160\x6c\141\164\x65\x73\57\x64\141\163\x68\x62\x6f\x61\162\x64\57\137\146\157\157\x74\145\162\56\x70\x68\160"); goto bqT57; bqT57: } public function detail($id) { goto ROljw; B2tjV: $nilai = $this->ujian->bandingNilai($id); goto QhUNH; efDg6: $this->load->view("\x5f\x74\145\x6d\160\x6c\x61\x74\145\x73\57\x64\x61\163\x68\x62\157\141\162\144\57\137\x66\x6f\x6f\x74\x65\162\x2e\160\x68\160"); goto sQCAF; WisQv: $this->load->view("\165\152\x69\141\156\57\x64\x65\x74\141\151\154\x5f\150\141\163\151\154"); goto efDg6; QhUNH: $data = ["\x75\163\x65\x72" => $this->user, "\x6a\x75\144\x75\154" => "\x55\x6a\x69\141\x6e", "\163\x75\142\x6a\165\144\x75\x6c" => "\x44\x65\164\141\151\x6c\40\x48\141\163\151\154\40\x55\x6a\x69\141\156", "\165\152\x69\x61\x6e" => $ujian, "\156\151\154\141\151" => $nilai]; goto feckm; ROljw: $ujian = $this->ujian->getUjianById($id); goto B2tjV; feckm: $this->load->view("\x5f\164\x65\x6d\160\x6c\141\164\x65\x73\x2f\144\x61\163\x68\142\157\141\x72\x64\57\137\150\145\141\x64\145\162\56\160\x68\160", $data); goto WisQv; sQCAF: } public function cetak($id) { goto OI_zu; YF0ww: $data = ["\x75\x6a\x69\141\156" => $ujian, "\x68\x61\163\151\154" => $hasil, "\x6d\150\163" => $mhs]; goto XREks; XJD2q: $ujian = $this->ujian->getUjianById($id); goto YF0ww; n5vQh: $hasil = $this->ujian->HslUjian($id, $mhs->id_siswa)->row(); goto XJD2q; XREks: $this->load->view("\x75\152\x69\141\156\x2f\143\145\164\x61\x6b", $data); goto lkihB; OI_zu: $mhs = $this->ujian->getIdMahasiswa($this->user->username); goto n5vQh; lkihB: } public function cetak_detail($id) { goto ITcI3; z6oai: $data = ["\x75\x6a\151\141\156" => $ujian, "\156\x69\154\x61\151" => $nilai, "\x68\x61\163\151\x6c" => $hasil]; goto X4Mwz; SL2Do: $hasil = $this->ujian->HslUjianById($id)->result(); goto z6oai; eN2eX: $nilai = $this->ujian->bandingNilai($id); goto SL2Do; ITcI3: $ujian = $this->ujian->getUjianById($id); goto eN2eX; X4Mwz: $this->load->view("\165\x6a\x69\x61\x6e\57\x63\x65\x74\x61\x6b\x5f\144\x65\x74\141\x69\x6c", $data); goto caAcv; caAcv: } }
