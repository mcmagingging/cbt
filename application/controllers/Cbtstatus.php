<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtstatus extends CI_Controller { public function __construct() { goto clAp8; onJfu: show_error("\x48\141\x6e\x79\x61\x20\x41\x64\x6d\x69\156\151\163\x74\162\141\x74\157\162\x20\171\x61\x6e\x67\40\144\151\x62\145\162\x69\40\150\141\x6b\40\165\156\x74\x75\x6b\40\x6d\145\156\x67\141\153\x73\145\x73\40\x68\x61\x6c\141\155\141\x6e\40\151\x6e\151\54\x20\74\141\x20\x68\x72\x65\146\x3d\42" . base_url("\144\x61\163\150\x62\x6f\141\x72\144") . "\x22\x3e\113\145\x6d\x62\141\x6c\x69\40\x6b\x65\x20\x6d\x65\156\x75\x20\141\x77\141\154\74\57\x61\76", 403, "\101\x6b\163\x65\x73\x20\124\145\x72\x6c\141\162\141\156\147"); goto glNVq; U1QxC: $this->form_validation->set_error_delimiters('', ''); goto OALHK; clAp8: parent::__construct(); goto qhyZ2; paSFs: $this->load->model("\104\162\157\160\x64\157\167\x6e\x5f\x6d\x6f\144\145\154", "\x64\x72\157\160\x64\x6f\x77\156"); goto U1QxC; t9gbQ: redirect("\x61\165\x74\x68"); goto rWCR7; AWOze: $this->load->model("\x4d\141\163\164\145\x72\x5f\x6d\157\x64\145\154", "\x6d\141\163\164\x65\x72"); goto c0mOJ; ChuUS: $this->load->model("\103\x62\x74\137\155\157\x64\x65\154", "\143\142\x74"); goto paSFs; rrcTn: $this->load->library(["\144\141\x74\141\x74\141\x62\x6c\x65\x73", "\146\157\162\x6d\137\166\141\154\x69\x64\141\x74\151\x6f\x6e"]); goto Mnh2p; glNVq: qY13Z: goto ztOqj; ztOqj: goto ZZYDC; goto tz10L; qhyZ2: if (!$this->ion_auth->logged_in()) { goto GOdre; } goto u35A8; rWCR7: ZZYDC: goto rrcTn; u35A8: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\x72\x75"))) { goto qY13Z; } goto onJfu; c0mOJ: $this->load->model("\104\x61\x73\150\142\157\x61\162\x64\137\x6d\x6f\x64\145\x6c", "\144\141\163\x68\x62\x6f\141\x72\144"); goto ChuUS; Mnh2p: $this->load->library("\x75\160\x6c\157\x61\144"); goto AWOze; tz10L: GOdre: goto t9gbQ; OALHK: } public function output_json($data, $encode = true) { goto yE1er; eXY0N: XuXC2: goto xBlz5; xBlz5: $this->output->set_content_type("\141\x70\160\154\x69\x63\141\164\151\157\x6e\x2f\152\x73\x6f\156")->set_output($data); goto eBAnr; yE1er: if (!$encode) { goto XuXC2; } goto n4ZdW; n4ZdW: $data = json_encode($data); goto eXY0N; eBAnr: } public function data() { $this->output_json($this->cbt->getJenis(), false); } public function index() { goto snCRZ; jGucF: $this->load->view("\x6d\145\x6d\x62\x65\162\x73\x2f\147\165\162\165\57\164\x65\155\160\154\x61\164\x65\x73\x2f\x66\157\157\164\x65\x72"); goto FGfq3; JztHU: DASpB: goto ZIRno; xgEU6: XH0nO: goto ZvGIy; WN3Qd: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto ATHhW; G7wMs: $tp = $this->dashboard->getTahunActive(); goto t1fbe; ORYjQ: $data["\162\x75\x61\156\147\163"] = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, $arrKls); goto WIp9P; JQyL1: $this->load->view("\155\145\155\142\x65\162\x73\57\x67\165\162\x75\x2f\x74\145\155\160\x6c\x61\x74\x65\x73\x2f\150\x65\x61\x64\145\x72", $data); goto PUUrz; sjGXT: foreach ($jadwals as $jad) { goto wvu2B; m1uO_: foreach ($kls as $kl) { array_push($arrKls, $kl["\153\145\x6c\141\163\x5f\151\x64"]); MStxq: } goto zynNF; zynNF: uqoCC: goto Qkbmw; Qkbmw: sD9tB: goto CLpdu; wvu2B: $kls = unserialize($jad->bank_kelas); goto m1uO_; CLpdu: } goto f6m_H; ATHhW: $data["\x67\165\162\165"] = $guru; goto zdtcK; Vx7RV: $data["\x70\145\156\147\141\x77\141\x73"] = $this->cbt->getPengawasByGuru($tp->id_tp, $smt->id_smt, $guru->id_guru); goto R_QzW; ZvGIy: $data["\162\x75\141\156\147\163"] = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, $arrKls); goto JQyL1; kouOO: $data["\x74\x70\x5f\141\143\164\x69\x76\145"] = $tp; goto e_Fi9; zdtcK: $data["\x6a\141\144\167\x61\154"] = $this->dropdown->getAllJadwalGuru($tp->id_tp, $smt->id_smt, $guru->id_guru); goto K40fB; ZIRno: $data["\160\162\x6f\146\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto yX38r; G7FIm: $data["\x73\x6d\x74\x5f\x61\x63\x74\x69\x76\x65"] = $smt; goto sTnqH; FzEcO: $data["\163\x65\x73\151"] = $this->dropdown->getAllSesi(); goto Vx7RV; K40fB: $data["\x72\165\x61\x6e\147"] = $this->dropdown->getAllRuang(); goto FzEcO; FGfq3: goto beIf9; goto JztHU; aX6W2: $arrKls = []; goto sjGXT; mmFiF: $this->load->view("\x63\142\x74\x2f\163\x74\x61\x74\x75\x73\57\x64\x61\x74\x61"); goto hyH1c; ceeJb: $jadwals = $this->cbt->getJadwalKelas($tp->id_tp, $smt->id_smt); goto aX6W2; e_Fi9: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto G7FIm; f6m_H: aIu4C: goto ORYjQ; sTnqH: if ($this->ion_auth->is_admin()) { goto DASpB; } goto WN3Qd; x83JH: $data = ["\x75\163\x65\x72" => $user, "\152\165\144\x75\154" => "\x53\x74\141\x74\165\x73\40\125\x6a\x69\x61\156\40\x53\x69\163\167\141", "\163\x75\x62\152\165\144\165\x6c" => "\x53\x74\141\x74\165\x73\40\123\151\163\x77\141", "\x73\145\164\x74\x69\156\147" => $this->dashboard->getSetting()]; goto G7wMs; WIp9P: $this->load->view("\137\164\145\x6d\160\154\141\x74\x65\x73\x2f\x64\141\x73\x68\x62\x6f\x61\162\x64\x2f\137\x68\145\141\144\145\x72", $data); goto mmFiF; JQSG4: $data["\x73\x65\163\x69"] = $this->dropdown->getAllSesi(); goto ceeJb; t1fbe: $smt = $this->dashboard->getSemesterActive(); goto RaDoh; MqG32: foreach ($jadwals as $jad) { goto NAjNL; qTQjM: foreach ($kls as $kl) { array_push($arrKls, $kl["\x6b\145\154\x61\x73\137\x69\144"]); Xu4I5: } goto snU0v; snU0v: fR2zN: goto XhPq3; NAjNL: $kls = unserialize($jad->bank_kelas); goto qTQjM; XhPq3: CZ0mS: goto cw7O8; cw7O8: } goto xgEU6; PUUrz: $this->load->view("\155\145\155\x62\x65\162\x73\57\147\x75\162\x75\x2f\x63\x62\164\57\163\164\x61\164\165\x73\57\144\141\164\141"); goto jGucF; Z4PJT: $data["\162\x75\x61\156\147"] = $this->dropdown->getAllRuang(); goto JQSG4; RaDoh: $data["\x74\160"] = $this->dashboard->getTahun(); goto kouOO; HKJyr: $arrKls = []; goto MqG32; hyH1c: $this->load->view("\137\164\x65\x6d\x70\x6c\141\164\145\163\57\144\x61\163\150\x62\157\141\162\x64\57\137\146\x6f\157\164\145\162"); goto PZHEs; R_QzW: $jadwals = $this->cbt->getJadwalGuru($tp->id_tp, $smt->id_smt, $guru->id_guru); goto HKJyr; snCRZ: $user = $this->ion_auth->user()->row(); goto x83JH; PZHEs: beIf9: goto pMiRX; yX38r: $data["\152\141\x64\167\x61\x6c"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt); goto Z4PJT; pMiRX: } public function statusRuang() { goto RSBwD; QECYR: $this->db->trans_start(); goto OBP9R; Fho9A: $data = ["\x75\163\145\162" => $user, "\152\165\144\165\x6c" => "\x53\x74\x61\164\165\163\x20\x55\x6a\x69\x61\x6e\x20\x53\151\163\167\x61", "\163\x75\x62\x6a\165\x64\x75\x6c" => "\x53\164\141\164\165\163\x20\x53\x69\x73\167\141", "\163\145\164\x74\151\x6e\x67" => $this->dashboard->getSetting()]; goto QECYR; ccZRc: $this->load->view("\155\x65\x6d\x62\x65\x72\163\x2f\x67\165\x72\165\57\x63\x62\x74\57\163\x74\x61\164\165\x73\57\x73\164\x61\x74\165\163"); goto nssds; DoNkG: $info = $this->cbt->getJadwalById($jadwal); goto aZLRE; wWdFm: mLARp: goto EJWQ2; xvhi1: foreach ($pengawas as $pws) { $ids_pengawas = explode("\54", $pws->id_guru); j6Abb: } goto gbKHu; ngdcN: $data["\163\151\x73\167\141"] = $siswas; goto FPfAT; shSZl: foreach ($siswas as $siswa) { goto a3S30; llTGJ: xGSd3: goto Udv_3; CeRLx: RHym4: goto Zd3x4; CfSu7: foreach ($durasies as $durasi) { goto gJtad; LlCRS: CX06w: goto EqkLx; inNby: $dd = $ej . $em; goto K0keC; BonbH: $em = $elap[1] == "\x30\60" ? '' : intval($elap[1]) + $ed . "\40\155"; goto inNby; pRvNf: zxW0c: goto D7P0a; D7P0a: So5C0: goto i0rWF; K0keC: $durasi->lama_ujian = $dd == '' ? "\60\x20\155" : $dd; goto LlCRS; uLHAo: if (strpos($lamanya, "\72") !== false) { goto AoYMI; } goto r496Q; OgAnX: $ej = $elap[0] == "\60\60" ? '' : intval($elap[0]) . "\x20\152\40"; goto BonbH; hOf1X: $elap = explode("\x3a", $lamanya); goto jgRm_; R2xeT: goto CX06w; goto jy_z7; EqkLx: $dur_siswa = $durasi; goto pRvNf; jgRm_: $ed = $elap[2] == "\x30\x30" ? 0 : 1; goto OgAnX; gJtad: if (!($durasi->id_siswa == $siswa->id_siswa)) { goto zxW0c; } goto Q1HMZ; Q1HMZ: $lamanya = $durasi->lama_ujian; goto uLHAo; jy_z7: AoYMI: goto hOf1X; r496Q: $durasi->lama_ujian .= "\155"; goto R2xeT; i0rWF: } goto oVmUX; B_Oen: $log_siswa = []; goto Nj701; a3S30: $dur_siswa = null; goto CfSu7; Udv_3: $arrDur[$siswa->id_siswa] = ["\144\165\162" => $dur_siswa, "\x6c\x6f\147" => $log_siswa]; goto CeRLx; Nj701: foreach ($logs as $log) { goto Uz3dD; sSL77: ZQOBl: goto cxguf; cxguf: jai_S: goto VNGyM; Atcbl: array_push($log_siswa, $log); goto sSL77; Uz3dD: if (!($log->id_siswa == $siswa->id_siswa)) { goto ZQOBl; } goto Atcbl; VNGyM: } goto llTGJ; oVmUX: vvxb1: goto B_Oen; Zd3x4: } goto wWdFm; Bik2H: $smt = $this->dashboard->getSemesterActive(); goto Lhnca; qfFx2: $ids_pengawas = []; goto xvhi1; YxN4T: $sesi = $this->input->get("\x73\145\163\x69"); goto b3ZvV; OTiGW: $data["\163\x6d\164\x5f\141\x63\x74\151\166\x65"] = $smt; goto EyF75; gPwlI: $data["\x69\x6e\146\157"] = $info; goto cB9Bd; PX2YI: $durasies = $this->cbt->getDurasiSiswaByJadwal($jadwal); goto ggKrW; xZ_36: $data["\x74\x70\x5f\x61\x63\164\151\x76\x65"] = $tp; goto xCERf; RSBwD: $ruang = $this->input->get("\x72\165\141\156\x67"); goto YxN4T; FPfAT: $data["\144\165\162\141\163\x69\x5f\x73\151\x73\167\141"] = $arrDur; goto gPwlI; m2dgu: $data["\x67\x75\x72\165"] = $guru; goto DoNkG; Bhxzl: $user = $this->ion_auth->user()->row(); goto Fho9A; cB9Bd: $data["\151\x64\163\137\160\145\156\147\141\x77\x61\163"] = $ids_pengawas; goto Bn_ZY; VqrEg: $this->load->view("\x6d\145\155\142\x65\162\163\57\147\x75\x72\165\57\x74\x65\x6d\160\x6c\141\164\145\x73\57\x68\145\x61\144\145\162", $data); goto ccZRc; ggKrW: $logs = $this->cbt->getLogUjianByJadwal($jadwal); goto CCCIY; CCCIY: $pengawas = $this->cbt->getPengawasByJadwal($tp->id_tp, $smt->id_smt, $jadwal, $sesi, $ruang); goto qfFx2; gbKHu: ZdmsQ: goto X73xa; EJWQ2: $this->db->trans_complete(); goto ngdcN; b3ZvV: $jadwal = $this->input->get("\152\x61\144\x77\x61\154"); goto Bhxzl; nssds: $this->load->view("\155\145\x6d\x62\145\x72\163\57\x67\x75\x72\x75\x2f\x74\x65\155\x70\154\141\164\145\163\57\146\x6f\157\x74\x65\162"); goto i0wOt; xCERf: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto OTiGW; Lhnca: $data["\x74\160"] = $this->dashboard->getTahun(); goto xZ_36; aZLRE: $siswas = $this->cbt->getSiswaByRuang($tp->id_tp, $smt->id_smt, $ruang, $sesi); goto PX2YI; OBP9R: $tp = $this->dashboard->getTahunActive(); goto Bik2H; EyF75: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto m2dgu; Bn_ZY: $data["\160\145\x6e\147\141\167\x61\x73"] = $this->master->getGuruByArrId($ids_pengawas); goto VqrEg; X73xa: $arrDur = []; goto shSZl; i0wOt: } public function getJadwalUjianByJadwal() { goto Zyza7; uNwm7: $kelas = unserialize($info->bank_kelas); goto wVsOh; AlHMA: $tp = $this->dashboard->getTahunActive(); goto FzyNL; Q0Pq6: $data["\164\x70"] = $this->dashboard->getTahun(); goto KWD3q; SfY39: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto yneOJ; UMYjI: $this->output_json($kelases); goto raUun; yneOJ: $data["\x73\155\x74\137\141\143\x74\x69\x76\x65"] = $smt; goto uNwm7; KWD3q: $data["\164\160\137\x61\x63\164\x69\166\145"] = $tp; goto SfY39; b7Wni: foreach ($kelas as $key => $value) { $kelases[$value["\x6b\x65\x6c\141\x73\x5f\151\x64"]] = $this->dropdown->getNamaKelasById($info->id_tp, $info->id_smt, $value["\153\145\x6c\141\x73\x5f\x69\144"]); gj1te: } goto KDpHr; FzyNL: $smt = $this->dashboard->getSemesterActive(); goto Q0Pq6; Zyza7: $jadwal = $this->input->get("\151\144\x5f\152\x61\x64\x77\141\154"); goto N1NoW; wVsOh: $kelases = []; goto b7Wni; N1NoW: $info = $this->cbt->getJadwalById($jadwal); goto AlHMA; KDpHr: Ssz1A: goto UMYjI; raUun: } public function getJadwalUjianByKelas() { goto RX7e9; r5L6_: $this->output_json($jdwl); goto NIqXe; Ogb6w: $user = $this->ion_auth->user()->row(); goto onVF7; Jm69u: $tp = $this->dashboard->getTahunActive(); goto imnJR; Hh0SB: foreach ($jadwals as $jadwal) { goto jIOju; jIOju: $kls = unserialize($jadwal->bank_kelas); goto cOVeM; KwNth: oONzR: goto ep8J2; ep8J2: aBgfr: goto n1Xir; cOVeM: foreach ($kls as $kl) { goto h8H7W; h8H7W: if (!($kl["\153\145\x6c\141\163\137\x69\x64"] == $kelas)) { goto INTlQ; } goto Lb_pZ; iQB_T: INTlQ: goto eaoIt; Lb_pZ: $jdwl[$jadwal->id_jadwal] = $jadwal->bank_kode; goto iQB_T; eaoIt: BL_P8: goto EClBY; EClBY: } goto KwNth; n1Xir: } goto NcPMZ; ehvSx: $id_guru = null; goto NuOUs; gfbKi: if ($this->ion_auth->in_group("\x67\x75\x72\165")) { goto HfdtH; } goto ehvSx; NcPMZ: J7zq8: goto r5L6_; VY1Rv: $id_guru = $guru->id_guru; goto N2Vsj; N2Vsj: OCzTa: goto P8nTm; P8nTm: $jadwals = $this->cbt->getAllJadwal($tp->id_tp, $smt->id_smt, $id_guru); goto lOK_A; imnJR: $smt = $this->dashboard->getSemesterActive(); goto gfbKi; lOK_A: $jdwl = []; goto Hh0SB; onVF7: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto VY1Rv; vS3rR: HfdtH: goto Ogb6w; RX7e9: $kelas = $this->input->get("\x69\x64\137\x6b\145\x6c\141\x73"); goto Jm69u; NuOUs: goto OCzTa; goto vS3rR; NIqXe: } public function getSiswaKelas() { goto kLxlN; wUS40: $siswas = $this->cbt->getSiswaByKelas($tp->id_tp, $smt->id_smt, $kelas); goto yH8ng; AG1LP: eFNan: goto u92Qs; u92Qs: $arrDur = []; goto r0plo; tI3oM: $info = $this->cbt->getJadwalById($jadwal); goto wUS40; rZHVq: $jadwal = $this->input->get("\x6a\141\144\x77\141\x6c"); goto rIexc; AKhBg: foreach ($pengawas as $pws) { $ids_pengawas = explode("\x2c", $pws->id_guru); eNMTE: } goto AG1LP; QmOV6: $this->db->trans_complete(); goto CjbP1; xdNks: $data["\160\145\156\x67\x61\x77\x61\163"] = $this->master->getGuruByArrId($ids_pengawas); goto BKtKY; c4176: $data["\x69\156\x66\157"] = $info; goto xdNks; rIexc: $this->db->trans_start(); goto fFlXf; QDExh: $ids_pengawas = []; goto AKhBg; YjCss: $smt = $this->dashboard->getSemesterActive(); goto tI3oM; yH8ng: $durasies = $this->cbt->getDurasiSiswaByJadwal($jadwal); goto HP8ES; fFlXf: $tp = $this->dashboard->getTahunActive(); goto YjCss; kLxlN: $kelas = $this->input->get("\x6b\x65\154\141\x73"); goto rZHVq; HP8ES: $logs = $this->cbt->getLogUjianByJadwal($jadwal); goto KbIGv; r0plo: foreach ($siswas as $siswa) { goto W5mdn; LI2WH: $log_siswa = []; goto C_16E; H6N06: foreach ($durasies as $durasi) { goto pcPt3; M5Np1: $durasi->lama_ujian .= "\x6d"; goto NUaG4; Ac3z9: Gc2Vj: goto wG0kM; cS8OM: $em = $elap[1] == "\x30\x30" ? '' : intval($elap[1]) + $ed . "\40\155"; goto MyqPG; MyqPG: $dd = $ej . $em; goto SzURm; BcLL3: aivY4: goto L9Iec; khhuS: EeveP: goto Ac3z9; DDLfq: if (strpos($lamanya, "\x3a") !== false) { goto iNz1b; } goto M5Np1; pcPt3: if (!($durasi->id_siswa == $siswa->id_siswa)) { goto EeveP; } goto Pr8Ln; JAesz: $ed = $elap[2] == "\60\x30" ? 0 : 1; goto i16TR; pJUhD: $elap = explode("\x3a", $lamanya); goto JAesz; Pr8Ln: $lamanya = $durasi->lama_ujian; goto DDLfq; L9Iec: $dur_siswa = $durasi; goto khhuS; NUaG4: goto aivY4; goto w_E_u; i16TR: $ej = $elap[0] == "\60\x30" ? '' : intval($elap[0]) . "\40\x6a\40"; goto cS8OM; SzURm: $durasi->lama_ujian = $dd == '' ? "\60\40\x6d" : $dd; goto BcLL3; w_E_u: iNz1b: goto pJUhD; wG0kM: } goto ursa5; ursa5: PK3Vr: goto LI2WH; C_16E: foreach ($logs as $log) { goto zdsQQ; QOZ3b: tD9e4: goto QBp03; zdsQQ: if (!($log->id_siswa == $siswa->id_siswa)) { goto XwKfb; } goto ghPkI; ghPkI: array_push($log_siswa, $log); goto R_eU6; R_eU6: XwKfb: goto QOZ3b; QBp03: } goto cF0tR; W5mdn: $dur_siswa = null; goto H6N06; EvaNO: $arrDur[$siswa->id_siswa] = ["\x64\x75\x72" => $dur_siswa, "\x6c\157\x67" => $log_siswa]; goto zy4M2; cF0tR: pNef3: goto EvaNO; zy4M2: Yv14t: goto QABdH; QABdH: } goto ymxfb; CjbP1: $data["\163\x69\163\167\141"] = $siswas; goto MFP09; ymxfb: ET0qu: goto QmOV6; KbIGv: $pengawas = $this->cbt->getPengawasByJadwal($tp->id_tp, $smt->id_smt, $jadwal); goto QDExh; BKtKY: $this->output_json($data); goto SGUmb; MFP09: $data["\x64\x75\162\x61\x73\151"] = $arrDur; goto c4176; SGUmb: } public function getSiswaRuang() { goto kpPOB; qq7Hq: $this->db->trans_complete(); goto YOegC; z8kZj: $siswas = $this->cbt->getSiswaByRuang($tp->id_tp, $smt->id_smt, $ruang, $sesi); goto GafgF; v18W8: $tp = $this->dashboard->getTahunActive(); goto tnVmQ; U1Nl9: $info = $this->cbt->getJadwalById($jadwal); goto z8kZj; GafgF: $durasies = $this->cbt->getDurasiSiswaByJadwal($jadwal); goto VVqMk; ZQVlc: $arrDur = []; goto j1x1u; HK95P: $pengawas = $this->cbt->getPengawasByJadwal($tp->id_tp, $smt->id_smt, $jadwal, $sesi, $ruang); goto ZQVlc; pcd8i: $jadwal = $this->input->get("\x6a\141\144\x77\x61\x6c"); goto A063f; tnVmQ: $smt = $this->dashboard->getSemesterActive(); goto U1Nl9; tdpE0: $data["\160\145\x6e\147\141\167\141\x73"] = $pengawas; goto bWBLG; bWBLG: $this->output_json($data); goto z60AO; j1x1u: foreach ($siswas as $siswa) { goto z5dir; FWTh3: PX13g: goto afkdT; m1GLe: $arrDur[$siswa->id_siswa] = ["\x64\x75\x72" => $dur_siswa, "\154\x6f\147" => $log_siswa]; goto FWTh3; Hz2oj: X4doE: goto m1GLe; Bc2Tl: foreach ($durasies as $durasi) { goto Qzh1P; cCuxb: $lamanya = $durasi->lama_ujian; goto wAJX8; ncOi3: vX_Bl: goto lnnae; g6um0: $durasi->ada_waktu = $minutes < $info->durasi_ujian; goto Bn7iM; LkNMe: $ed = $elap[2] == "\x30\60" ? 0 : 1; goto qsaJU; wAJX8: $mulai = new DateTime($durasi->mulai); goto fVsiT; HInqF: $durasi->lama_ujian = $dd == '' ? "\60\x20\155" : $dd; goto ncOi3; Qzh1P: if (!($durasi->id_siswa == $siswa->id_siswa)) { goto cZSO8; } goto cCuxb; qsaJU: $ej = $elap[0] == "\60\60" ? '' : intval($elap[0]) . "\x20\x6a\40"; goto QYO1G; fVsiT: $interval = $mulai->diff(new DateTime()); goto RimAf; S1skx: mG2wL: goto fnBKS; lnnae: $dur_siswa = $durasi; goto MtNuM; dTvRL: ItBjI: goto ONBa0; ONBa0: $elap = explode("\x3a", $lamanya); goto LkNMe; bhF7X: goto vX_Bl; goto dTvRL; RimAf: $minutes = $interval->days * 24 * 60 + $interval->h * 60 + $interval->i; goto g6um0; tevw1: $dd = $ej . $em; goto HInqF; QYO1G: $em = $elap[1] == "\60\60" ? '' : intval($elap[1]) + $ed . "\40\x6d"; goto tevw1; Z_6gp: $durasi->lama_ujian .= "\155"; goto bhF7X; MtNuM: cZSO8: goto S1skx; Bn7iM: if (strpos($lamanya, "\72") !== false) { goto ItBjI; } goto Z_6gp; fnBKS: } goto zWuYk; zWuYk: akZxk: goto xUdJe; MuEt_: foreach ($logs as $log) { goto hKfOW; YjDfW: ehbmR: goto RHO9f; RHO9f: q5v3L: goto rsVq3; o1e5D: array_push($log_siswa, $log); goto YjDfW; hKfOW: if (!($log->id_siswa == $siswa->id_siswa)) { goto ehbmR; } goto o1e5D; rsVq3: } goto Hz2oj; xUdJe: $log_siswa = []; goto MuEt_; z5dir: $dur_siswa = null; goto Bc2Tl; afkdT: } goto i6uT4; Of5wm: $sesi = $this->input->get("\x73\x65\163\151"); goto pcd8i; kpPOB: $ruang = $this->input->get("\x72\165\141\x6e\147"); goto Of5wm; A063f: $this->db->trans_start(); goto v18W8; VVqMk: $logs = $this->cbt->getLogUjianByJadwal($jadwal); goto HK95P; YOegC: $data["\x73\151\x73\x77\x61"] = $siswas; goto FLzsE; i6uT4: mYNJd: goto qq7Hq; K8CTX: $data["\151\x6e\146\x6f"] = $info; goto tdpE0; FLzsE: $data["\144\x75\162\x61\163\x69"] = $arrDur; goto K8CTX; z60AO: } public function detail() { goto zcHxt; zcHxt: $siswa = $this->input->get("\163\x69\163\167\x61"); goto EWCvJ; FikQ8: $smt = $this->dashboard->getSemesterActive(); goto cpA0r; C0GLE: $data["\x73\x69\x73\167\141"] = $this->master->getSiswaById($siswa); goto TGLxW; HPsv0: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto TmKHR; qFBbW: $this->load->view("\x63\142\164\x2f\163\x74\141\x74\165\x73\x2f\x64\x65\x74\141\151\154"); goto VyQt7; X9AU9: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto PkiDG; VyQt7: $this->load->view("\x5f\x74\145\x6d\160\154\x61\x74\x65\163\57\x64\141\163\x68\142\157\141\x72\x64\57\137\146\157\157\164\x65\162"); goto WkqFT; jWERI: $this->load->view("\x5f\164\145\x6d\x70\x6c\x61\164\145\x73\x2f\144\x61\x73\150\x62\157\x61\x72\x64\57\x5f\x68\145\141\144\145\162", $data); goto qFBbW; MwCzo: goto aQO7z; goto hLYsV; JNeBX: if ($this->ion_auth->is_admin()) { goto Lb4HS; } goto X9AU9; RcJnL: $data["\164\160\137\x61\x63\x74\151\x76\145"] = $tp; goto HPsv0; hLYsV: Lb4HS: goto usl2F; WkqFT: aQO7z: goto JwOyn; h5spj: $user = $this->ion_auth->user()->row(); goto f4DeY; R25Tg: $this->load->view("\155\145\x6d\142\145\162\x73\x2f\x67\165\162\165\57\x74\x65\155\x70\x6c\x61\164\x65\x73\x2f\150\145\x61\x64\x65\162", $data); goto tD2pB; PkiDG: $data["\x67\x75\162\x75"] = $guru; goto R25Tg; cpA0r: $data["\164\160"] = $this->dashboard->getTahun(); goto RcJnL; usl2F: $data["\160\162\x6f\x66\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto jWERI; UXG_l: $tp = $this->dashboard->getTahunActive(); goto FikQ8; tD2pB: $this->load->view("\x63\x62\x74\x2f\x73\x74\141\164\x75\163\x2f\144\x65\164\x61\151\x6c"); goto YG7Z2; f4DeY: $data = ["\165\163\x65\x72" => $user, "\152\165\x64\x75\154" => "\x44\145\164\x61\x69\x6c\40\123\164\141\x74\165\163\40\x53\151\163\x77\x61", "\163\x75\x62\x6a\x75\x64\x75\154" => "\123\x74\x61\x74\x75\x73\x20\x53\x69\x73\x77\141", "\x73\145\x74\x74\x69\x6e\147" => $this->dashboard->getSetting()]; goto UXG_l; TmKHR: $data["\163\x6d\x74\137\141\x63\164\151\x76\x65"] = $smt; goto C0GLE; EWCvJ: $jadwal = $this->input->get("\x6a\x61\x64\167\141\x6c"); goto h5spj; YG7Z2: $this->load->view("\x6d\x65\155\142\145\162\163\x2f\147\x75\x72\165\57\x74\x65\155\x70\x6c\x61\164\x65\163\57\146\x6f\157\164\x65\x72"); goto MwCzo; TGLxW: $data["\x73\157\141\154"] = $this->cbt->getSoalSiswaByJadwal($jadwal, $siswa); goto JNeBX; JwOyn: } }
