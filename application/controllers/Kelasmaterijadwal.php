<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasmaterijadwal extends CI_Controller { public function __construct() { goto UpE7j; jglDh: $this->load->library(["\x64\141\x74\x61\x74\141\x62\x6c\x65\163", "\146\157\x72\155\x5f\x76\141\x6c\151\144\141\x74\x69\157\x6e"]); goto nMvy4; OTXwv: $this->load->model("\x43\142\x74\x5f\155\157\144\x65\154", "\x63\x62\x74"); goto uQw0S; UpE7j: parent::__construct(); goto yXi1z; wqXvk: SNvBV: goto jglDh; lPThO: $this->load->model("\104\162\x6f\x70\x64\x6f\x77\156\137\155\157\144\x65\x6c", "\x64\162\157\x70\144\x6f\167\156"); goto yp1YO; CfmNS: redirect("\x61\165\x74\x68"); goto wqXvk; yp1YO: $this->form_validation->set_error_delimiters('', ''); goto hbmbr; sngUT: $this->load->model("\x4b\x65\x6c\x61\163\137\155\x6f\144\x65\154", "\x6b\145\154\141\x73"); goto lPThO; OHN_6: $this->load->model("\104\x61\163\150\142\157\x61\162\x64\x5f\x6d\x6f\144\x65\154", "\144\x61\163\x68\x62\157\141\162\x64"); goto OTXwv; nMvy4: $this->load->model("\115\x61\x73\164\145\x72\137\155\x6f\144\145\x6c", "\x6d\x61\163\x74\145\162"); goto OHN_6; uQw0S: $this->load->model("\x4c\x6f\x67\137\x6d\x6f\x64\x65\x6c", "\154\x6f\x67\147\151\156\x67"); goto sngUT; yXi1z: if ($this->ion_auth->logged_in()) { goto SNvBV; } goto CfmNS; hbmbr: } public function output_json($data, $encode = true) { goto k5vf4; GF0m3: $data = json_encode($data); goto bWOsf; k5vf4: if (!$encode) { goto JBkSb; } goto GF0m3; bWOsf: JBkSb: goto X6XcV; X6XcV: $this->output->set_content_type("\x61\x70\160\x6c\x69\x63\141\x74\x69\x6f\x6e\57\152\x73\157\x6e")->set_output($data); goto JXtkC; JXtkC: } public function index() { goto hBaMq; AA0Ok: $this->load->view("\137\x74\x65\155\160\x6c\141\164\x65\163\57\144\141\x73\150\x62\157\141\162\144\57\137\x66\x6f\157\164\145\162"); goto Z6C3c; b9XO3: $data["\x6a\x6d\154\111\163\164"] = []; goto TRCVU; T1IdT: $tp = $this->dashboard->getTahunActive(); goto U_McU; AxmgB: if ($this->ion_auth->is_admin()) { goto GHDFR; } goto Y0JGL; xwEpb: $data["\x64\141\x74\x65\137\163\145\x6c\145\x63\164\145\x64"] = $thn . "\55" . $bln . "\x2d" . date("\144"); goto AxmgB; gGT4x: $bln = $smt->id_smt == "\x31" ? "\x37" : "\61"; goto m1Z2z; hBaMq: $user = $this->ion_auth->user()->row(); goto gBv33; QH8_P: $data["\164\160"] = $this->dashboard->getTahun(); goto hb275; nelCE: $data["\x67\165\x72\x75"] = $guru; goto UaQR2; U_McU: $smt = $this->dashboard->getSemesterActive(); goto QH8_P; OhIDI: $data["\160\x72\x6f\146\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto yYlnf; RLixg: $this->load->view("\x6d\x65\155\142\145\162\x73\x2f\x67\x75\x72\165\x2f\164\x65\x6d\x70\154\x61\164\145\163\57\x66\157\x6f\x74\x65\162"); goto a7A7G; iMMku: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto iES9z; rlyB8: $this->load->view("\153\145\x6c\141\163\57\155\x61\164\x65\162\x69\x6a\x61\x64\x77\x61\x6c\x2f\x64\x61\164\x61"); goto AA0Ok; Y0JGL: if ($this->ion_auth->in_group("\x67\165\x72\165")) { goto P52SS; } goto AvihP; vNkOC: GHDFR: goto OhIDI; TRCVU: $data["\x6a\155\x6c\115\141\x70\145\154"] = []; goto biiPg; yYlnf: $this->load->view("\x5f\x74\145\155\160\154\141\164\x65\x73\x2f\144\x61\x73\150\142\157\x61\162\x64\x2f\x5f\150\145\x61\x64\145\162", $data); goto rlyB8; b4J0m: $this->load->view("\153\x65\x6c\x61\x73\x2f\x6d\141\x74\x65\162\151\152\141\144\x77\x61\x6c\x2f\144\141\164\141"); goto RLixg; eO4AI: $data["\x62\154\156\137\163\145\154\x65\143\x74\145\144"] = $bln; goto xwEpb; gBv33: $data = ["\165\x73\145\x72" => $user, "\x6a\x75\x64\165\154" => "\112\x61\144\x77\141\154\x20\120\145\x6c\141\152\141\x72\x61\x6e", "\x73\x75\142\x6a\165\x64\165\154" => "\123\x65\x74\40\x4a\x61\x64\x77\x61\x6c\x20\120\x65\x6c\141\x6a\x61\162\141\156", "\x73\145\164\x74\x69\x6e\x67" => $this->dashboard->getSetting()]; goto T1IdT; GCg3D: $thn = $smt->id_smt == "\x31" ? $tahun[0] : $tahun[1]; goto eO4AI; AvihP: goto iospN; goto vNkOC; a7A7G: iospN: goto OIlxF; Z6C3c: goto iospN; goto laKuW; iES9z: $data["\x73\155\164\x5f\141\x63\164\151\166\x65"] = $smt; goto psPfW; m1Z2z: $tahun = explode("\x2f", $tp->tahun); goto GCg3D; gzgFu: $data["\x69\144\137\x6b\x65\x6c\141\x73"] = "\60"; goto kQxVN; psPfW: $data["\153\145\x6c\141\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto gzgFu; oBJ2B: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto nelCE; kQxVN: $data["\155\145\x74\x68\x6f\x64"] = ''; goto b9XO3; biiPg: $data["\x74\150\x6e\137\163\x65\154\145\x63\164\145\144"] = $tp->tahun; goto gGT4x; UaQR2: $this->load->view("\155\145\x6d\142\145\162\163\57\x67\165\x72\x75\57\x74\x65\x6d\160\154\141\164\145\x73\x2f\x68\145\141\x64\x65\x72", $data); goto b4J0m; laKuW: P52SS: goto oBJ2B; hb275: $data["\164\x70\137\x61\143\x74\x69\166\145"] = $tp; goto iMMku; OIlxF: } public function kelas() { goto G8piY; CND59: $this->load->view("\x6d\145\155\142\x65\162\163\57\x67\165\162\165\57\164\145\x6d\x70\x6c\141\x74\x65\163\x2f\x68\x65\141\x64\145\x72", $data); goto gP49l; HsTmb: $i++; goto OCyYB; h6Th3: $data["\x6a\141\144\167\x61\x6c\x5f\x6b\x62\x6d"] = $jadk; goto bArcK; LvxFN: HZmG4: goto P8e5d; Xw4Hm: $jadk = $this->kelas->getJadwalKbm($tp->id_tp, $smt->id_smt, $kelas); goto hx2wD; q907U: if ($this->ion_auth->in_group("\x67\x75\162\x75")) { goto v34Xt; } goto ztuio; P8U0p: nm5Qu: goto syJx0; mCVQB: KXRJW: goto suQwR; hvAJJ: zm1um: goto YJdWs; suQwR: $i = 0; goto hvAJJ; SAyFN: $data["\x74\x70"] = $this->dashboard->getTahun(); goto o4CyB; pSKYq: $date = $this->input->get("\144\141\x74\x65"); goto UmZIL; tE4of: $data["\x6b\x65\x6c\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto Xw4Hm; s2QB9: $data["\160\162\157\146\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto G7Pnk; n2kaf: $data["\147\x75\162\x75"] = $this->dashboard->getDetailGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto CND59; P8e5d: $data["\x6d\x65\x74\x68\157\144"] = "\x61\x64\144"; goto Iw5vV; PV38y: v34Xt: goto n2kaf; BQjEb: $data["\x74\150\x6e\137\x73\x65\x6c\x65\x63\164\145\x64"] = $tahun; goto s6zgm; V5o_0: $data["\152\141\144\167\141\x6c\x5f\x6b\142\155"] = json_decode(json_encode(["\x69\144\x5f\164\160" => $tp->tahun, "\x69\144\x5f\163\155\164" => $smt->smt, "\x69\x64\137\153\x65\154\x61\163" => $kelas, "\x6b\142\x6d\x5f\152\x61\155\137\x70\x65\154" => '', "\153\x62\155\x5f\152\141\x6d\x5f\155\x75\154\141\x69" => '', "\x6b\x62\155\x5f\152\155\154\137\155\x61\160\x65\154\x5f\150\x61\162\x69" => '', "\x69\x73\x74\x69\x72\x61\x68\x61\164" => serialize([]), "\x61\144\x61" => false])); goto fPifd; YeDZ5: $jml_mapel = $jadk == null ? 1 : $jadk->kbm_jml_mapel_hari; goto YzSk4; Oi05b: $data["\167\x65\145\x6b"] = $week; goto aCTDF; B1fFH: $bulan = $this->input->get("\x62\165\x6c\x61\156"); goto xPfk5; OObcF: $data["\x64\x61\x74\x65\137\163\145\x6c\145\143\x74\145\144"] = $date; goto Oi05b; Mcg6O: c5Hum: goto s2QB9; TrHEx: $semua_materi = $this->kelas->getAllJadwalMateriByKelas($tp->id_tp, $smt->id_smt); goto WRAz_; GM95V: $this->load->view("\155\x65\x6d\x62\x65\162\x73\x2f\147\165\x72\x75\x2f\x74\x65\155\x70\x6c\x61\164\x65\163\57\x66\x6f\x6f\164\145\162"); goto rH3KQ; aCTDF: $data["\x6f\160\163\151\137\x6d\141\x74\x65\x72\x69"] = $this->kelas->getAllMateriByKelas($tp->id_tp, $smt->id_smt); goto TrHEx; Iw5vV: C7FIS: goto reMij; UmZIL: $user = $this->ion_auth->user()->row(); goto FunhN; YzSk4: if ($jadm == null) { goto KXRJW; } goto LFkjG; CSlEw: $data["\163\155\x74\x5f\x61\143\164\x69\166\145"] = $smt; goto tE4of; Q5mf3: $this->load->view("\x6b\145\154\x61\163\x2f\155\141\164\145\162\x69\152\141\144\x77\141\x6c\x2f\144\141\164\x61"); goto U0ORI; v_KIN: $week = [date("\131\x2d\155\55\144", strtotime("\x6d\157\156\144\141\x79\40\x74\150\x69\163\40\167\145\x65\153", strtotime($date))), date("\131\x2d\155\55\144", strtotime("\x74\165\145\163\x64\x61\171\40\x74\x68\x69\163\x20\x77\x65\x65\153", strtotime($date))), date("\x59\x2d\155\55\x64", strtotime("\167\x65\x64\156\x65\x73\144\141\x79\40\x74\150\151\163\40\x77\145\145\153", strtotime($date))), date("\131\55\155\x2d\x64", strtotime("\164\x68\165\162\x73\144\141\x79\40\164\x68\151\x73\40\167\x65\x65\153", strtotime($date))), date("\x59\x2d\155\x2d\x64", strtotime("\x66\x72\151\144\141\x79\x20\x74\x68\151\163\x20\x77\145\145\153", strtotime($date))), date("\x59\55\155\55\x64", strtotime("\163\x61\x74\x75\162\x64\x61\171\40\164\x68\151\x73\40\167\x65\x65\153", strtotime($date)))]; goto BQjEb; fPifd: wiyFv: goto cM3UU; xPfk5: $kelas = $this->input->get("\x6b\145\x6c\141\163"); goto pSKYq; AhGLV: bSCX0: goto HsTmb; bArcK: goto wiyFv; goto ufKsi; hx2wD: if ($jadk == null) { goto aLYeB; } goto h6Th3; rH3KQ: t4P3o: goto nX7fR; o4CyB: $data["\164\160\137\141\143\x74\x69\x76\x65"] = $tp; goto tnvSA; DxpO3: $jadm = $this->kelas->getJadwalMapelGroupJam($tp->id_tp, $smt->id_smt, $kelas); goto YeDZ5; ufKsi: aLYeB: goto V5o_0; U0ORI: $this->load->view("\x5f\x74\145\x6d\x70\x6c\x61\x74\x65\163\57\x64\141\x73\x68\x62\x6f\141\x72\144\57\x5f\x66\157\157\x74\145\x72"); goto FiYR2; FiYR2: goto t4P3o; goto PV38y; syJx0: $data["\x6d\x65\x74\x68\x6f\x64"] = "\145\144\151\x74"; goto Wa4cY; Wa4cY: goto C7FIS; goto mCVQB; tnvSA: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto CSlEw; WRAz_: $data["\x64\145\x74\x61\151\x6c\137\x6a\x61\144\x77\x61\154\137\155\x61\164\145\162\x69"] = isset($semua_materi[1]) ? $semua_materi[1] : []; goto xE28_; rqqJi: if ($this->ion_auth->is_admin()) { goto c5Hum; } goto q907U; s6zgm: $data["\x62\154\156\x5f\x73\145\154\x65\x63\164\x65\x64"] = $bulan; goto OObcF; G8piY: $tahun = $this->input->get("\164\x61\150\165\156"); goto B1fFH; FunhN: $setting = $this->dashboard->getSetting(); goto BdKfR; eIS_q: $jadwal_mapel[] = ["\x6a\141\x64\167\141\x6c" => $this->kelas->getDummyJadwalMapel($tp->id_tp, $smt->id_smt, $i + 1, $kelas)]; goto AhGLV; gP49l: $this->load->view("\153\x65\154\141\163\x2f\155\x61\164\x65\162\x69\x6a\x61\144\x77\x61\154\x2f\144\141\x74\141"); goto GM95V; YJdWs: if (!($i < $jml_mapel)) { goto HZmG4; } goto eIS_q; OCyYB: goto zm1um; goto LvxFN; LFkjG: foreach ($jadm as $j) { $jadwal_mapel[] = ["\152\141\144\167\141\154" => $this->kelas->getJadwalMapelByHari($tp->id_tp, $smt->id_smt, $j->jam_ke, $kelas)]; InO6U: } goto P8U0p; G7Pnk: $this->load->view("\137\x74\145\x6d\x70\154\x61\x74\x65\163\57\144\x61\163\150\x62\157\141\x72\144\x2f\137\150\x65\141\x64\145\x72", $data); goto Q5mf3; xE28_: $data["\144\x65\164\x61\x69\154\x5f\x6a\141\144\167\141\x6c\137\164\x75\147\x61\x73"] = isset($semua_materi[2]) ? $semua_materi[2] : []; goto rqqJi; dr695: $tp = $this->dashboard->getTahunActive(); goto M5WtL; cM3UU: $data["\x69\x64\x5f\153\145\x6c\141\x73"] = $kelas; goto DxpO3; ztuio: goto t4P3o; goto Mcg6O; i9_fz: $data["\x6d\141\160\x65\154\x73"] = $this->master->getAllMapel(); goto v_KIN; M5WtL: $smt = $this->dashboard->getSemesterActive(); goto SAyFN; BdKfR: $data = ["\165\x73\145\x72" => $user, "\x6a\x75\144\165\x6c" => "\x4a\141\x64\167\x61\154\x20\115\x61\x74\x65\162\x69\40\x2f\40\124\x75\147\141\163", "\x73\165\142\x6a\165\x64\x75\x6c" => "\123\145\164\x20\112\141\x64\x77\141\x6c\x20\115\141\164\145\162\x69\x20\x2f\x20\x54\x75\x67\x61\x73", "\163\145\164\x74\x69\x6e\x67" => $setting]; goto dr695; reMij: $data["\x6a\141\x64\x77\x61\154\137\x6d\x61\160\145\154"] = $jadwal_mapel; goto i9_fz; nX7fR: } public function setJadwal() { goto t9EQO; z4idi: im2s2: goto KmIPa; aNRJe: $jamke = $this->input->post("\151\163\x74" . $i, true); goto t0NPs; Tn60G: jq2VB: goto W907N; KmIPa: sTeze: goto zgPMl; IuY_n: $this->logging->saveLog(3, "\x6d\x65\x72\165\x62\141\150\x20\x6a\141\144\167\141\x6c\40\160\145\x6c\x61\x6a\141\162\141\156"); goto X6D9g; zcIy1: goto yHEGE; goto Tn60G; IdJrG: $id_smt = $this->master->getSemesterActive()->id_smt; goto wA0rc; X6D9g: $data["\x73\164\x61\x74\165\163"] = $update; goto iGtEa; NttMY: $insert = ["\151\144\x5f\x6b\142\x6d" => $id_tp . $id_smt . $id_kelas, "\151\144\x5f\x74\160" => $id_tp, "\151\144\x5f\163\155\x74" => $id_smt, "\151\x64\137\x6b\x65\154\141\163" => $id_kelas, "\153\x62\x6d\x5f\x6a\141\155\137\160\145\154" => $this->input->post("\152\141\155\x5f\155\141\160\145\154", true), "\153\x62\155\x5f\152\141\x6d\x5f\x6d\x75\154\x61\151" => $this->input->post("\x6a\x61\155\x5f\155\165\x6c\141\x69", true), "\x6b\x62\155\x5f\x6a\155\154\x5f\x6d\141\x70\145\154\x5f\x68\x61\162\x69" => $this->input->post("\x6a\155\154\137\155\141\160\x65\x6c", true), "\151\163\x74\151\x72\141\x68\x61\x74" => serialize($istirahat)]; goto S_yQf; iGtEa: $this->output_json($data); goto Xbtko; woNjn: $i = 1; goto Cyii_; wA0rc: $id_kelas = $this->input->post("\151\x64\137\153\x65\x6c\x61\x73", true); goto NttMY; R6SqD: if (!($i < 5)) { goto jq2VB; } goto aNRJe; t0NPs: $durasi = $this->input->post("\x64\165\162\x5f\x69\x73\164" . $i, true); goto XPaXY; XPaXY: if (!$jamke) { goto im2s2; } goto oYUk9; zgPMl: $i++; goto zcIy1; oYUk9: $istirahat[] = ["\x69\163\164" => $jamke, "\x64\x75\162" => $durasi]; goto z4idi; S_yQf: $update = $this->db->replace("\153\x65\x6c\141\x73\137\152\141\x64\x77\141\x6c\x5f\x6b\x62\155", $insert); goto IuY_n; W907N: $id_tp = $this->master->getTahunActive()->id_tp; goto IdJrG; t9EQO: $istirahat = []; goto woNjn; Cyii_: yHEGE: goto R6SqD; Xbtko: } public function setMapel() { goto KWbvq; xyH3k: $id_kelas = $this->input->post("\151\144\137\x6b\x65\154\141\x73", true); goto XZepZ; s1Dno: $this->output_json($res); goto WKkRt; XZepZ: foreach ($input as $d) { goto oxalP; oxalP: $data = ["\151\x64\x5f\x6a\x61\x64\167\x61\154" => $d->id_tp . $d->id_smt . $id_kelas . $d->id_hari . $d->jam_ke, "\151\144\137\x74\x70" => $d->id_tp, "\151\144\137\x73\155\164" => $d->id_smt, "\151\x64\x5f\x6b\x65\154\141\163" => $id_kelas, "\x69\144\x5f\x68\141\x72\x69" => $d->id_hari, "\152\x61\155\137\x6b\145" => $d->jam_ke, "\x69\144\x5f\155\141\x70\145\x6c" => $d->id_mapel]; goto EjCFN; CBP4c: Jxq93: goto TmU4_; EjCFN: $update = $this->db->replace("\153\x65\154\x61\x73\x5f\x6a\x61\144\x77\x61\x6c\137\155\141\x70\x65\x6c", $data); goto CBP4c; TmU4_: } goto eMscu; KWbvq: $input = json_decode($this->input->post("\144\141\x74\x61", true)); goto xyH3k; eMscu: E1VOL: goto lRsXt; lRsXt: $res["\163\x74\x61\x74\x75\x73"] = $update; goto s1Dno; WKkRt: } public function saveJadwal() { goto ai5ug; h1CMY: $this->logging->saveLog(3, "\155\145\162\x75\x62\x61\x68\40\152\141\144\167\141\x6c\x20\x6d\x61\x74\145\x72\x69\40\x64\141\x6e\x20\164\165\x67\x61\163"); goto u19VU; Ix2pb: $input_tugas = json_decode($this->input->post("\x74\165\x67\x61\163", true)); goto bBBFF; bBBFF: foreach ($input_materi as $im) { goto PMzqv; YdBxn: eg22C: goto VIyo2; PMzqv: $insert = ["\x6a\145\156\151\x73" => "\61", "\151\x64\x5f\153\152\155" => $im->id_kjm, "\x69\144\x5f\x74\x70" => $im->id_tp, "\x69\144\137\x73\155\x74" => $im->id_smt, "\x69\144\x5f\153\145\154\141\x73" => $im->id_kelas, "\x69\x64\x5f\x6d\141\164\x65\162\x69" => $im->id_materi, "\x69\144\137\155\141\x70\145\154" => $im->id_mapel, "\x6a\141\x64\167\141\x6c\x5f\x6d\141\x74\x65\162\x69" => $im->jadwal_materi]; goto h06sj; h06sj: $update = $this->db->replace("\153\x65\154\141\x73\x5f\x6a\141\x64\167\141\154\137\155\x61\x74\x65\x72\x69", $insert); goto YdBxn; VIyo2: } goto D68Zy; u19VU: $this->output_json($update); goto d0_6Q; D68Zy: Y_j9C: goto iq5rk; FeA82: OoNpb: goto h1CMY; iq5rk: foreach ($input_tugas as $im) { goto Sc4Au; WVDzs: $update = $this->db->replace("\153\x65\154\x61\163\137\x6a\141\x64\x77\141\x6c\137\x6d\x61\x74\145\162\x69", $insert); goto kAAWS; kAAWS: DzTRX: goto UqsB8; Sc4Au: $insert = ["\x6a\x65\156\151\163" => "\x32", "\151\144\x5f\153\x6a\155" => $im->id_kjm, "\151\144\137\164\x70" => $im->id_tp, "\x69\x64\137\163\x6d\164" => $im->id_smt, "\x69\x64\x5f\x6b\x65\x6c\x61\x73" => $im->id_kelas, "\x69\144\137\155\141\164\145\x72\151" => $im->id_materi, "\x69\144\x5f\x6d\x61\x70\x65\154" => $im->id_mapel, "\x6a\x61\144\x77\141\x6c\137\x6d\x61\164\145\162\x69" => $im->jadwal_materi]; goto WVDzs; UqsB8: } goto FeA82; ai5ug: $input_materi = json_decode($this->input->post("\155\141\164\145\162\x69", true)); goto Ix2pb; d0_6Q: } }
