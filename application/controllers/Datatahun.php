<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\123\x45\120\101\124\x48") or exit("\116\157\x20\144\x69\x72\x65\x63\164\x20\163\143\x72\151\x70\x74\x20\x61\x63\143\145\163\163\x20\141\154\x6c\157\167\x65\144"); class Datatahun extends CI_Controller { public function __construct() { goto j7Nf1; tzsXZ: $this->load->library(["\x64\x61\x74\141\164\141\142\x6c\x65\x73", "\146\x6f\x72\x6d\137\x76\141\x6c\151\x64\141\164\151\157\156"]); goto rCuGg; HvBrd: aUIyM: goto tzsXZ; vHvn1: VZvC2: goto ysNNm; ZQEA3: $this->load->model("\x4c\157\x67\x5f\155\157\x64\145\x6c", "\154\x6f\147\x67\x69\x6e\147"); goto cvg4e; L2_Z9: WZ46M: goto oF5jy; cvg4e: $this->form_validation->set_error_delimiters('', ''); goto YOET0; tDMVH: $this->load->model("\x44\141\x73\x68\142\157\x61\162\144\137\155\x6f\x64\145\x6c", "\144\141\163\150\142\x6f\x61\162\x64"); goto ZQEA3; rCuGg: $this->load->model("\115\x61\163\x74\x65\x72\137\155\157\x64\145\x6c", "\x6d\x61\x73\x74\145\162"); goto tDMVH; oF5jy: redirect("\x61\x75\x74\x68"); goto HvBrd; ChvlY: show_error("\110\x61\x6e\x79\141\x20\101\x64\x6d\x69\156\x69\x73\164\x72\141\164\157\162\x20\171\141\x6e\x67\x20\x64\151\x62\x65\162\151\x20\150\x61\153\40\165\156\x74\x75\153\x20\x6d\145\156\147\141\153\x73\x65\x73\x20\x68\x61\x6c\x61\155\x61\156\x20\151\x6e\x69\x2c\x20\74\x61\x20\x68\162\x65\146\75\42" . base_url("\x64\141\x73\x68\142\157\141\162\x64") . "\x22\x3e\113\x65\x6d\x62\141\154\x69\40\153\x65\40\x6d\x65\x6e\x75\40\141\167\x61\154\74\x2f\x61\x3e", 403, "\101\x6b\163\x65\163\x20\124\x65\162\x6c\x61\162\141\156\147"); goto vHvn1; MSNNF: if ($this->ion_auth->is_admin()) { goto VZvC2; } goto ChvlY; ysNNm: goto aUIyM; goto L2_Z9; L3xN4: if (!$this->ion_auth->logged_in()) { goto WZ46M; } goto MSNNF; j7Nf1: parent::__construct(); goto L3xN4; YOET0: } public function output_json($data, $encode = true) { goto X1c9Q; tt5TZ: dLRFe: goto iD6_c; iD6_c: $this->output->set_content_type("\x61\160\x70\154\151\143\x61\x74\151\157\156\57\x6a\163\157\x6e")->set_output($data); goto wOHIq; X1c9Q: if (!$encode) { goto dLRFe; } goto lBD4h; lBD4h: $data = json_encode($data); goto tt5TZ; wOHIq: } public function index() { goto oBU4F; nuYUz: $this->load->view("\137\x74\145\x6d\x70\154\141\164\145\x73\x2f\144\x61\163\150\x62\157\141\x72\144\57\x5f\146\157\x6f\164\x65\x72"); goto NeN5o; kC9Jw: $data["\163\x6d\x74\137\x61\x63\x74\x69\x76\145"] = $smt; goto A8TLp; dMLvS: $data = ["\165\x73\145\x72" => $user, "\x6a\x75\x64\165\x6c" => "\x54\141\x68\x75\156\40\x50\x65\x6c\141\152\x61\x72\x61\156\x20\x64\x61\x6e\x20\x53\145\155\x65\x73\x74\x65\x72", "\163\165\142\x6a\165\144\x75\154" => "\101\164\x75\x72\40\124\x61\x68\x75\156\40\120\x65\x6c\141\x6a\141\x72\141\156\x20\144\x61\156\40\123\x65\x6d\x65\163\164\145\162", "\x70\x72\157\146\151\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\163\145\164\164\151\x6e\x67" => $this->dashboard->getSetting()]; goto lZc1o; oBU4F: $user = $this->ion_auth->user()->row(); goto dMLvS; l90nx: $data["\x74\160"] = $this->dashboard->getTahun(); goto Q6E5w; B2P5R: $this->load->view("\137\x74\145\155\x70\x6c\x61\x74\145\x73\57\144\141\x73\150\x62\x6f\141\x72\144\57\137\150\145\141\x64\145\162", $data); goto Ig1X6; lZc1o: $tp = $this->dashboard->getTahunActive(); goto pD34j; pD34j: $smt = $this->dashboard->getSemesterActive(); goto l90nx; Q6E5w: $data["\x74\160\x5f\x61\143\164\x69\x76\x65"] = $tp; goto tZKbx; Ig1X6: $this->load->view("\155\x61\163\164\145\162\57\x74\x61\x68\x75\x6e\57\x64\x61\x74\x61"); goto nuYUz; KUrLH: $data["\x6a\x6d\x6c\x5f\150\x61\x72\151"] = $jml == null ? "\60" : $jml->jml_hari_efektif; goto B2P5R; A8TLp: $jml = $this->master->getJmlHariEfektif($tp->id_tp . $smt->id_smt); goto KUrLH; tZKbx: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto kC9Jw; NeN5o: } public function data() { $this->output_json($this->dashboard->getDataTahun(), false); } public function gantiTahun() { goto Ey9ev; mi2gG: $this->output_json($data); goto upGww; UlKOq: $this->dashboard->update("\x6d\141\163\164\145\x72\137\164\x70", $update, "\151\x64\137\x74\160", null, true); goto c_9o7; c_9o7: $data["\155\x73\147"] = "\115\x65\x72\165\142\x61\x68\40\x54\141\x68\165\156\x20\101\153\x74\x69\146"; goto K2Oxp; hWfIU: $this->logging->saveLog(4, "\x6d\145\x6e\147\x67\141\156\x74\151\40\x74\x61\x68\165\x6e\40\x61\152\141\x72\141\156\x20\x61\153\x74\x69\x66"); goto mi2gG; K2Oxp: $data["\x75\x70\x64\141\x74\145"] = $update; goto TYNZ4; TYNZ4: $data["\x73\164\x61\x74\x75\x73"] = true; goto hWfIU; cDCIq: $inputTp = json_decode($this->input->post("\x74\x61\x68\165\156", false)); goto zdRNn; zdRNn: foreach ($inputTp as $tps) { goto HV6Ko; pEeNQ: if ($id_tp === $aktif) { goto uBkaR; } goto c1iBo; dNOgC: $active = 1; goto emFr7; c1iBo: $active = 0; goto w4sOF; w4sOF: goto McNtQ; goto X290X; w_eAf: $update[] = array("\x69\144\x5f\x74\x70" => $id_tp, "\x74\141\150\x75\156" => $tahun, "\x61\143\164\151\x76\145" => $active); goto Knj4d; W9qRd: $tahun = $tps->tp; goto pEeNQ; HV6Ko: $id_tp = $tps->id; goto W9qRd; emFr7: McNtQ: goto w_eAf; X290X: uBkaR: goto dNOgC; Knj4d: qf9Rx: goto YjTPa; YjTPa: } goto P07fW; P07fW: DhrOa: goto UlKOq; Ey9ev: $aktif = $this->input->post("\x61\x63\x74\x69\x76\145", true); goto cDCIq; upGww: } public function gantiSemester() { goto DaakC; SJigV: $data["\165\x70\x64\141\x74\145"] = $update; goto CHRr_; l_zmT: $inputSmt = json_decode($this->input->post("\x73\x65\155\x65\x73\164\145\x72", false)); goto xsuQA; CUmm7: $this->dashboard->update("\x6d\141\x73\164\145\162\x5f\163\155\164", $update, "\151\144\137\163\155\164", null, true); goto YvH_O; xsuQA: foreach ($inputSmt as $tps) { goto h12yu; wDXi0: $update[] = array("\x69\144\137\x73\155\164" => $id_smt, "\x73\x6d\164" => $smt, "\141\x63\x74\151\x76\x65" => $active); goto iZjjz; Vrlpx: $smt = $tps->Semester; goto Sm0Wf; h12yu: $id_smt = $tps->id; goto Vrlpx; hE5Uf: $active = 0; goto H9Db8; jtyjO: tzHk1: goto vB567; Sm0Wf: if ($id_smt === $aktif) { goto tzHk1; } goto hE5Uf; BW2Ec: CdWqw: goto wDXi0; iZjjz: lMD1L: goto lWCp1; vB567: $active = 1; goto BW2Ec; H9Db8: goto CdWqw; goto jtyjO; lWCp1: } goto CCyA4; Mejej: $this->logging->saveLog(4, "\x6d\x65\156\x67\x67\x61\x6e\x74\x69\x20\163\145\155\x65\163\x74\x65\162\40\141\x6b\x74\x69\146"); goto SO9Vq; YvH_O: $data["\155\x73\x67"] = "\x4d\x65\162\165\x62\x61\150\40\123\x65\155\145\x73\x74\x65\162\40\x41\x6b\164\151\146"; goto SJigV; CHRr_: $data["\163\164\141\x74\x75\x73"] = true; goto Mejej; SO9Vq: $this->output_json($data); goto TcVau; CCyA4: TPbr9: goto CUmm7; DaakC: $aktif = $this->input->post("\141\x63\164\x69\x76\145", true); goto l_zmT; TcVau: } public function add() { goto hOqqw; qttQ3: V2knM: goto G8YAB; CHstm: $this->logging->saveLog(4, "\x6d\145\x6e\x67\x65\x64\x69\164\40\x74\x61\x68\165\x6e\40\160\145\x6c\x61\152\x61\x72\141\156"); goto wsleq; x_L8P: UFf72: goto tOOJ7; tOOJ7: $insert = ["\164\x61\x68\x75\156" => $tahun]; goto HcGBg; G8YAB: $this->output->set_content_type("\141\x70\160\154\x69\x63\141\164\151\157\x6e\57\x6a\x73\157\x6e")->set_output($data); goto CXHhv; piCTg: $data = $this->master->update("\155\x61\163\x74\145\x72\x5f\164\x70", $update, "\151\144\x5f\x74\160", $id); goto CHstm; q3TB8: if ($method === "\141\x64\144") { goto UFf72; } goto YD0on; S3IKO: $this->logging->saveLog(3, "\x6d\145\x6e\x61\155\142\x61\x68\40\164\x61\x68\165\x6e\40\x70\x65\154\141\x6a\141\x72\141\156"); goto qttQ3; gRn71: $update = array("\151\x64\x5f\x74\x70" => $id, "\164\141\x68\x75\156" => $tahun); goto piCTg; YD0on: $id = $this->input->post("\x69\144\x5f\x74\x61\150\x75\156", true); goto gRn71; hOqqw: $method = $this->input->post("\x6d\145\x74\150\157\x64", true); goto rYDVR; rYDVR: $tahun = $this->input->post("\x74\141\x68\165\x6e", true); goto q3TB8; wsleq: goto V2knM; goto x_L8P; HcGBg: $data = $this->master->create("\155\141\163\164\x65\x72\x5f\x74\160", $insert); goto S3IKO; CXHhv: } public function saveHariEfektif() { goto fChWg; fc_yr: $this->output_json($data); goto mCkFl; QPzSO: $update = $this->db->replace("\x6d\x61\163\x74\145\x72\137\150\141\162\x69\137\x65\146\145\153\164\x69\146", $input); goto euKG8; UNZSU: $smt = $this->dashboard->getSemesterActive(); goto XTc6Y; euKG8: $data["\x73\x74\141\x74\x75\163"] = $update; goto fc_yr; XTc6Y: $input = ["\x69\144\x5f\x68\x61\x72\x69\137\145\146\145\153\x74\x69\x66" => $tp->id_tp . $smt->id_smt, "\x6a\155\x6c\137\150\141\162\x69\x5f\145\146\x65\x6b\164\151\x66" => $this->input->post("\152\155\154\137\x68\x61\162\x69", true)]; goto QPzSO; fChWg: $tp = $this->dashboard->getTahunActive(); goto UNZSU; mCkFl: } public function hapusTahun() { goto O6zrd; p2kh8: $this->logging->saveLog(5, "\x6d\145\x6e\x67\150\x61\160\x75\163\40\164\x61\x68\165\x6e\40\x70\145\154\141\x6a\141\x72\x61\156"); goto TcfJz; cD_sB: S4V8H: goto W7BCd; O6zrd: $id = $this->input->post("\x68\141\160\x75\x73", true); goto pmVwH; pmVwH: if ($this->dashboard->hapus("\155\141\x73\x74\145\162\137\164\160", $id, "\x69\144\137\164\160")) { goto U1OY4; } goto wOY19; KdpoQ: U1OY4: goto p2kh8; W7BCd: $data["\x6d\163\147"] = "\115\145\x6e\x67\150\141\x70\x75\x73\x20\x54\141\150\x75\x6e\x20\120\145\154\141\x6a\x61\x72\141\x6e"; goto b2psm; wOY19: $data["\163\x74\141\x74\x75\x73"] = false; goto TkJdh; b2psm: $this->output_json($data); goto psS3A; TcfJz: $data["\x73\164\x61\x74\x75\163"] = true; goto cD_sB; TkJdh: goto S4V8H; goto KdpoQ; psS3A: } public function hapus() { goto CM5E5; qDow9: $this->logging->saveLog(5, "\x6d\145\156\147\150\x61\x70\x75\x73\40\x74\141\x68\165\156\40\160\x65\x6c\141\x6a\141\162\141\156"); goto pBviz; CM5E5: $chk = $this->input->post("\x63\x68\145\143\x6b\x65\x64", true); goto sLvPG; sLvPG: if (!$chk) { goto HjM1f; } goto ulbvK; DueCs: goto Zlh6A; goto OPLh0; NZer5: $this->output_json(["\163\x74\x61\x74\165\x73" => false]); goto JbNX1; Ut26i: hR13i: goto DueCs; JbNX1: Zlh6A: goto skn1_; pBviz: $this->output_json(["\163\164\x61\x74\165\163" => true, "\164\157\x74\x61\x6c" => count($chk)]); goto Ut26i; ulbvK: if (!$this->dashboard->hapus("\155\141\x73\x74\145\162\137\164\x70", $chk, "\x69\x64\137\x74\160")) { goto hR13i; } goto qDow9; OPLh0: HjM1f: goto NZer5; skn1_: } }
