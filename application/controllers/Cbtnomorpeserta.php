<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtnomorpeserta extends CI_Controller { public function __construct() { goto W9dC4; nPGbl: urKwX: goto PwY0e; CZ2NG: v1rG8: goto JU9iZ; PwY0e: $this->load->library(["\x64\x61\164\x61\164\141\142\154\145\163", "\146\157\x72\155\x5f\x76\141\x6c\x69\x64\x61\x74\x69\x6f\156"]); goto HCQhy; r81Q_: if ($this->ion_auth->is_admin()) { goto v1rG8; } goto RO6HM; K0Ybp: p154E: goto rWHMD; nFBIW: if (!$this->ion_auth->logged_in()) { goto p154E; } goto r81Q_; wdfwG: $this->load->model("\103\x62\164\x5f\155\157\x64\145\x6c", "\143\x62\164"); goto cJByW; cJByW: $this->load->model("\104\162\x6f\x70\144\157\x77\x6e\137\155\157\144\x65\x6c", "\x64\x72\x6f\x70\144\157\x77\156"); goto DGgQQ; JU9iZ: goto urKwX; goto K0Ybp; kxqMo: $this->load->model("\104\x61\x73\x68\x62\x6f\x61\162\x64\137\155\157\x64\x65\x6c", "\x64\141\x73\x68\x62\x6f\x61\162\x64"); goto wdfwG; rWHMD: redirect("\x61\165\164\150"); goto nPGbl; RO6HM: show_error("\110\141\x6e\171\x61\x20\x41\x64\155\x69\x6e\x69\163\x74\162\141\164\x6f\x72\x20\x79\141\x6e\147\x20\144\x69\x62\x65\162\x69\40\150\x61\153\x20\165\156\x74\x75\153\40\x6d\x65\156\x67\141\x6b\x73\x65\x73\x20\150\141\x6c\x61\155\141\156\40\x69\156\151\x2c\40\74\141\x20\150\x72\x65\x66\x3d\42" . base_url("\144\141\163\x68\142\x6f\141\x72\144") . "\x22\x3e\113\x65\x6d\142\141\154\151\x20\x6b\x65\40\x6d\145\x6e\x75\x20\x61\x77\141\154\x3c\57\x61\76", 403, "\x41\x6b\x73\x65\163\x20\x54\x65\162\x6c\x61\162\141\156\x67"); goto CZ2NG; HCQhy: $this->load->library("\x75\160\154\x6f\141\x64"); goto e01JC; DGgQQ: $this->form_validation->set_error_delimiters('', ''); goto FjOWE; W9dC4: parent::__construct(); goto nFBIW; e01JC: $this->load->model("\115\x61\x73\164\145\x72\x5f\x6d\157\x64\x65\154", "\x6d\141\x73\x74\145\x72"); goto kxqMo; FjOWE: } public function output_json($data, $encode = true) { goto ixDKa; ixDKa: if (!$encode) { goto vnfqR; } goto UuclF; UuclF: $data = json_encode($data); goto spG79; spG79: vnfqR: goto SHw7M; SHw7M: $this->output->set_content_type("\x61\x70\160\154\x69\x63\141\164\151\157\x6e\x2f\152\x73\157\x6e")->set_output($data); goto trV3a; trV3a: } public function index() { goto kTc2m; IdzaH: $data["\x6b\145\x6c\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto SPXJn; O0IF7: $data["\x73\155\164\137\141\143\164\x69\x76\145"] = $smt; goto dTM0v; b9Urx: $data["\164\160"] = $this->dashboard->getTahun(); goto dwYZW; b4t0S: $smt = $this->dashboard->getSemesterActive(); goto b9Urx; XHpPk: $tp = $this->dashboard->getTahunActive(); goto b4t0S; otXT_: $this->load->view("\x63\x62\x74\x2f\156\x6f\155\157\x72\160\x65\163\145\162\164\x61\x2f\144\x61\164\141"); goto Hi5UV; Hi5UV: $this->load->view("\137\164\x65\155\x70\154\141\x74\145\163\x2f\x64\x61\163\150\142\x6f\x61\162\x64\57\137\146\157\157\x74\x65\162"); goto Q4xzW; kTc2m: $user = $this->ion_auth->user()->row(); goto u4vKK; SPXJn: $data["\x72\x75\x61\x6e\x67"] = $this->dropdown->getAllRuang(); goto cSGy7; cSGy7: $data["\x73\x65\x73\x69"] = $this->dropdown->getAllSesi(); goto aQrdE; dwYZW: $data["\164\160\x5f\141\x63\164\151\x76\145"] = $tp; goto mlT3p; u4vKK: $data = ["\x75\x73\145\x72" => $user, "\152\165\x64\165\x6c" => "\116\x6f\x6d\x6f\x72\40\x50\145\163\145\162\x74\x61", "\x73\x75\142\152\x75\x64\x75\x6c" => "\107\145\156\145\x72\x61\164\x65\40\x4e\157\155\157\162\40\120\x65\x73\x65\x72\x74\x61\40\125\152\x69\141\x6e", "\x70\x72\157\x66\151\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\x74\164\x69\x6e\x67" => $this->dashboard->getSetting()]; goto XHpPk; mlT3p: $data["\163\155\164"] = $this->dashboard->getSemester(); goto O0IF7; aQrdE: $this->load->view("\x5f\x74\x65\155\160\x6c\141\164\145\163\x2f\x64\141\x73\150\x62\157\x61\162\144\57\x5f\150\145\x61\x64\145\x72", $data); goto otXT_; dTM0v: $data["\152\x61\x64\x77\141\154"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt); goto IdzaH; Q4xzW: } public function saveNomor() { goto EczLK; ddPlo: $this->output_json($update); goto aJaAj; bBAvf: foreach ($input as $in) { goto XJSfN; crT27: goto sE_r4; goto QuFBB; R0tR7: $insert = ["\151\x64\x5f\156\157\x6d\157\162" => $in->id . $tp->id_tp, "\x69\144\137\163\151\163\167\x61" => $in->id, "\x69\x64\137\x74\x70" => $tp->id_tp, "\156\x6f\x6d\x6f\x72\x5f\160\x65\x73\145\x72\x74\x61" => $in->nomor]; goto tqCAa; XJSfN: $nomorAda = isset($arrNomor[$in->id]) ? $arrNomor[$in->id] : null; goto aLTCM; tqCAa: $update = $this->db->replace("\143\x62\164\x5f\156\x6f\x6d\x6f\x72\x5f\160\145\x73\x65\162\164\x61", $insert); goto crT27; tWB5K: sE_r4: goto PwcTq; aLTCM: if ($nomorAda != null && $nomorAda->nomor_peserta == $in->nomor && $nomorAda->id_siswa != $in->id) { goto EubIx; } goto R0tR7; PwcTq: ChtTb: goto EMhJa; QuFBB: EubIx: goto O40rc; O40rc: $update = false; goto tWB5K; EMhJa: } goto TR9i6; NRLsd: $arrNomor = $this->cbt->getAllNomorPeserta(); goto vDM0x; vDM0x: $tp = $this->dashboard->getTahunActive(); goto RWtzc; TR9i6: JeRQ0: goto ddPlo; EczLK: $input = json_decode($this->input->post("\x73\x69\x73\167\x61", true)); goto NRLsd; RWtzc: $update = false; goto bBAvf; aJaAj: } public function resetNomor() { goto HHJyJ; YrQQT: uLRM2: goto ea80z; seXNL: $tp = $this->dashboard->getTahunActive(); goto pWbS3; ua71e: $this->output_json($res); goto nVwi9; BPTHe: $siswas = $this->cbt->getSiswaByKelasArray($tp->id_tp, $smt->id_smt, $input); goto AEyXP; AEyXP: foreach ($siswas as $siswa) { goto ALg83; mi_Po: nHSAE: goto H_u6b; Ys3HY: $update = $this->db->replace("\x63\142\x74\137\x6e\157\x6d\157\x72\137\160\145\163\x65\162\x74\141", $insert); goto mi_Po; ALg83: $insert = ["\151\144\x5f\156\157\x6d\157\162" => $siswa->id_siswa . $tp->id_tp, "\x69\x64\x5f\163\x69\163\x77\x61" => $siswa->id_siswa, "\151\144\x5f\x74\160" => $tp->id_tp, "\x6e\157\155\x6f\x72\137\160\145\x73\x65\x72\x74\x61" => '']; goto Ys3HY; H_u6b: } goto YrQQT; HHJyJ: $input = json_decode($this->input->get("\x6b\145\154\x61\x73", true)); goto seXNL; pWbS3: $smt = $this->dashboard->getSemesterActive(); goto BPTHe; ea80z: $res["\x73\x74\x61\x74\165\x73"] = $update; goto ua71e; nVwi9: } public function getSiswaKelas($arr_kelas) { goto mvmJc; YshHT: $siswas = $this->cbt->getSiswaByKelasArray($tp->id_tp, $smt->id_smt, $kelas); goto TvMet; mvmJc: $tp = $this->dashboard->getTahunActive(); goto uLARJ; Mq2IT: $kelas = json_decode(urldecode($arr_kelas)); goto YshHT; TvMet: $arrNomor = $this->cbt->getAllNomorPeserta(); goto B_PRm; gi7_V: $data["\156\x6f\155\157\x72"] = $arrNomor; goto Vd1MA; B_PRm: $data["\x73\x69\163\167\x61"] = $siswas; goto gi7_V; Vd1MA: $this->output_json($data); goto eYrsC; uLARJ: $smt = $this->dashboard->getSemesterActive(); goto Mq2IT; eYrsC: } }
