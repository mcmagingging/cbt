<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtstatus extends CI_Controller { public function __construct() { goto VDv4M; Sd27a: xdHL_: goto c3pnO; ukAfi: ZoxRa: goto oRFxp; rJBXf: if (!$this->ion_auth->logged_in()) { goto ZoxRa; } goto IT0b8; seQK8: show_error("\x48\x61\156\x79\x61\40\101\x64\155\151\156\151\163\164\162\x61\164\x6f\162\x20\x79\x61\x6e\x67\x20\144\151\142\x65\162\x69\40\150\x61\153\40\x75\156\164\165\153\x20\x6d\145\x6e\147\141\x6b\x73\145\163\40\150\141\154\x61\x6d\141\156\40\x69\x6e\x69\54\40\x3c\x61\x20\150\162\145\146\x3d\42" . base_url("\144\x61\x73\x68\x62\157\141\162\x64") . "\42\x3e\113\145\x6d\x62\141\154\151\x20\153\145\x20\x6d\x65\x6e\x75\40\141\x77\x61\x6c\74\x2f\x61\x3e", 403, "\x41\x6b\163\x65\x73\x20\124\145\x72\154\141\x72\141\x6e\147"); goto nPnX8; VDv4M: parent::__construct(); goto rJBXf; E7Y22: $this->load->model("\104\141\163\150\142\x6f\x61\x72\x64\x5f\155\x6f\x64\145\x6c", "\144\141\163\150\x62\157\x61\x72\144"); goto hm7t6; nPnX8: EyT73: goto TLV35; TLV35: goto xdHL_; goto ukAfi; y2Kit: $this->form_validation->set_error_delimiters('', ''); goto nODjV; c3pnO: $this->load->library(["\x64\141\x74\x61\164\141\x62\x6c\x65\x73", "\146\x6f\x72\155\x5f\166\141\x6c\x69\144\x61\x74\151\157\x6e"]); goto fRFUP; fRFUP: $this->load->library("\x75\x70\x6c\157\x61\144"); goto FAfqH; hm7t6: $this->load->model("\x43\x62\x74\x5f\155\x6f\144\145\154", "\143\x62\164"); goto oeeEn; FAfqH: $this->load->model("\115\141\163\164\x65\162\137\x6d\x6f\144\x65\154", "\155\x61\163\x74\x65\162"); goto E7Y22; oRFxp: redirect("\141\x75\164\x68"); goto Sd27a; oeeEn: $this->load->model("\104\162\157\x70\144\x6f\x77\156\137\x6d\157\144\x65\154", "\144\162\157\x70\144\157\x77\x6e"); goto y2Kit; IT0b8: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\x72\x75"))) { goto EyT73; } goto seQK8; nODjV: } public function output_json($data, $encode = true) { goto pugQ5; PK0ch: $data = json_encode($data); goto mRYuM; pugQ5: if (!$encode) { goto t7SBR; } goto PK0ch; HwdyX: $this->output->set_content_type("\x61\160\x70\x6c\x69\143\141\x74\x69\157\156\x2f\152\163\157\x6e")->set_output($data); goto q5Ol0; mRYuM: t7SBR: goto HwdyX; q5Ol0: } public function index() { goto S3tNX; dfQcv: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto tn59c; XZoVS: AiYv3: goto OtMzv; myK61: $this->load->view("\x6d\145\155\142\x65\162\x73\57\x67\x75\x72\x75\57\164\145\155\x70\154\141\x74\145\x73\x2f\146\x6f\x6f\164\145\162"); goto RyFXm; tn59c: $data["\163\x6d\x74\137\x61\x63\164\x69\x76\145"] = $smt; goto zUdx3; PD29m: $data["\x72\x75\x61\156\x67"] = $this->dropdown->getAllRuang(); goto d8jWP; enNAX: $data["\x74\x70\137\x61\143\x74\x69\x76\x65"] = $tp; goto dfQcv; WBGeo: $this->load->view("\x63\x62\x74\57\163\x74\141\x74\x75\163\x2f\x64\141\164\x61"); goto jFbjX; d8jWP: $data["\x73\145\163\151"] = $this->dropdown->getAllSesi(); goto nDqSv; gwzsE: $data["\x72\165\x61\156\x67"] = $this->dropdown->getAllRuang(); goto iZjHQ; RyFXm: goto AiYv3; goto oFsNS; a24Cl: $data["\152\141\144\x77\141\154"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt); goto PD29m; cuIhQ: $this->load->view("\x63\142\164\x2f\163\x74\141\164\x75\x73\x2f\x64\141\164\141"); goto myK61; nDqSv: $this->load->view("\x5f\x74\145\x6d\160\154\141\164\x65\163\57\x64\x61\163\150\142\x6f\x61\x72\x64\57\x5f\x68\x65\141\x64\x65\162", $data); goto WBGeo; oFsNS: cfxlq: goto NI5iX; aOYes: $data["\164\x70"] = $this->dashboard->getTahun(); goto enNAX; jFbjX: $this->load->view("\x5f\164\145\155\160\x6c\x61\x74\x65\163\x2f\x64\141\163\150\142\x6f\x61\x72\x64\x2f\137\146\x6f\x6f\164\x65\162"); goto XZoVS; S0QHF: $smt = $this->dashboard->getSemesterActive(); goto aOYes; bZ7AT: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto DNsA5; dIxL0: $tp = $this->dashboard->getTahunActive(); goto S0QHF; DNsA5: $data["\x67\x75\x72\x75"] = $guru; goto ZqSJs; INSir: $this->load->view("\x6d\x65\x6d\142\145\x72\163\x2f\147\165\x72\165\57\164\145\155\x70\154\141\164\145\163\x2f\x68\x65\x61\x64\145\162", $data); goto cuIhQ; S3tNX: $user = $this->ion_auth->user()->row(); goto s8vCz; zUdx3: if ($this->ion_auth->is_admin()) { goto cfxlq; } goto bZ7AT; ZqSJs: $data["\x6a\x61\x64\x77\x61\154"] = $this->dropdown->getAllJadwalGuru($tp->id_tp, $smt->id_smt, $guru->id_guru); goto gwzsE; NI5iX: $data["\160\x72\x6f\x66\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto a24Cl; iZjHQ: $data["\x73\x65\x73\151"] = $this->dropdown->getAllSesi(); goto INSir; s8vCz: $data = ["\165\163\145\x72" => $user, "\152\x75\x64\165\x6c" => "\x53\164\x61\164\x75\163\x20\x53\x69\x73\x77\141", "\x73\x75\x62\152\x75\144\165\154" => "\x53\164\x61\164\x75\x73\40\123\x69\x73\x77\141", "\163\145\x74\164\151\156\147" => $this->dashboard->getSetting()]; goto dIxL0; OtMzv: } public function data() { $this->output_json($this->cbt->getJenis(), false); } public function getJadwalUjianByJadwal() { goto EUGQV; T1Fi1: $data["\x73\x6d\x74\x5f\x61\143\x74\x69\166\x65"] = $smt; goto VNrb2; EUGQV: $jadwal = $this->input->get("\151\144\137\152\x61\144\x77\141\x6c"); goto BmVBH; D604v: foreach ($kelas as $key => $value) { $kelases[$value["\153\145\x6c\141\x73\x5f\151\x64"]] = $this->dropdown->getNamaKelasById($info->id_tp, $info->id_smt, $value["\x6b\145\154\x61\x73\137\151\144"]); Yi3LV: } goto uBfYn; XkD4w: $this->output_json($kelases); goto pIWs7; BmVBH: $info = $this->cbt->getJadwalById($jadwal); goto M5CuN; uBfYn: fKmuI: goto XkD4w; G3rOs: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto T1Fi1; M5CuN: $tp = $this->dashboard->getTahunActive(); goto zAEGQ; VNrb2: $kelas = unserialize($info->bank_kelas); goto amwXy; amwXy: $kelases = []; goto D604v; zMOkM: $data["\164\160\x5f\141\143\x74\151\x76\145"] = $tp; goto G3rOs; Nwv7B: $data["\164\x70"] = $this->dashboard->getTahun(); goto zMOkM; zAEGQ: $smt = $this->dashboard->getSemesterActive(); goto Nwv7B; pIWs7: } public function getJadwalUjianByKelas() { goto ho0Fv; yn8li: foreach ($jadwals as $jadwal) { goto AgF9S; EpsHW: T9455: goto aURjn; aURjn: Z3WRi: goto OoGpG; Bycp9: foreach ($kls as $kl) { goto kgw2K; iTjnA: LaLbZ: goto aprzQ; kgw2K: if (!($kl["\153\x65\154\141\163\137\151\144"] == $kelas)) { goto gjRqt; } goto ByI79; ByI79: $jdwl[$jadwal->id_jadwal] = $jadwal->bank_kode; goto aqrh9; aqrh9: gjRqt: goto iTjnA; aprzQ: } goto EpsHW; AgF9S: $kls = unserialize($jadwal->bank_kelas); goto Bycp9; OoGpG: } goto lMtWd; ZKttf: $jdwl = []; goto yn8li; bKIfD: $tp = $this->dashboard->getTahunActive(); goto p9r1A; yPwYL: $this->output_json($jdwl); goto uemqI; ho0Fv: $kelas = $this->input->get("\x69\x64\137\153\145\x6c\141\x73"); goto bKIfD; lMtWd: ZZytB: goto yPwYL; K7EE3: $jadwals = $this->cbt->getAllJadwal($tp->id_tp, $smt->id_smt); goto ZKttf; p9r1A: $smt = $this->dashboard->getSemesterActive(); goto K7EE3; uemqI: } public function getSiswaKelas() { goto JxMzu; dlRUH: $this->db->trans_start(); goto o7gqf; FGfI_: $smt = $this->dashboard->getSemesterActive(); goto gviju; gviju: $info = $this->cbt->getJadwalById($jadwal); goto M7A2N; JxMzu: $kelas = $this->input->get("\x6b\145\154\141\x73"); goto WG6be; dVL6o: $data["\163\151\163\x77\141"] = $siswas; goto ZbGIG; KDFLL: foreach ($siswas as $siswa) { goto SbI45; aolug: foreach ($logs as $log) { goto wiPlf; s8aL9: array_push($log_siswa, $log); goto uxTOj; wiPlf: if (!($log->id_siswa == $siswa->id_siswa)) { goto GoOPR; } goto s8aL9; uxTOj: GoOPR: goto P8Mr1; P8Mr1: rC8OS: goto XIanM; XIanM: } goto UaWq8; SbI45: $dur_siswa = null; goto pnQi0; ukzvE: $arrDur[$siswa->id_siswa] = ["\x64\x75\x72" => $dur_siswa, "\154\x6f\x67" => $log_siswa]; goto rlzx1; UaWq8: RYFB1: goto ukzvE; Uk3c0: eYmqK: goto cDKtx; cDKtx: $log_siswa = []; goto aolug; pnQi0: foreach ($durasies as $durasi) { goto RP1fs; y0yF2: $durasi->lama_ujian .= "\x6d"; goto TS4QM; MqFbO: IXKhv: goto Kj7kD; WEsbW: qgoj1: goto HYWhE; ywwf4: if (strpos($lamanya, "\x3a") !== false) { goto IXKhv; } goto y0yF2; M_nQI: DEx8T: goto cULRQ; TBbqe: $durasi->lama_ujian = $dd == '' ? "\60\40\155" : $dd; goto WEsbW; Kj7kD: $elap = explode("\72", $lamanya); goto oosNw; oosNw: $ed = $elap[2] == "\x30\x30" ? 0 : 1; goto UJ0Gf; TS4QM: goto qgoj1; goto MqFbO; HYWhE: $dur_siswa = $durasi; goto G7K8U; G7K8U: UOYyE: goto M_nQI; EFsPt: $lamanya = $durasi->lama_ujian; goto ywwf4; UJ0Gf: $ej = $elap[0] == "\x30\x30" ? '' : intval($elap[0]) . "\x20\152\x20"; goto AUHiL; AUHiL: $em = $elap[1] == "\x30\60" ? '' : intval($elap[1]) + $ed . "\x20\155"; goto QEu4M; QEu4M: $dd = $ej . $em; goto TBbqe; RP1fs: if (!($durasi->id_siswa == $siswa->id_siswa)) { goto UOYyE; } goto EFsPt; cULRQ: } goto Uk3c0; rlzx1: zR1Ur: goto NIe04; NIe04: } goto LV9mq; ZbGIG: $data["\x64\x75\162\x61\163\x69"] = $arrDur; goto ZTLYf; lVWuw: $durasies = $this->cbt->getDurasiSiswaByJadwal($jadwal); goto AxQ2i; AxQ2i: $logs = $this->cbt->getLogUjianByJadwal($jadwal); goto BGHWO; ZTLYf: $data["\151\x6e\x66\x6f"] = $info; goto t1sjU; LV9mq: AS3Y2: goto FEvnQ; o7gqf: $tp = $this->dashboard->getTahunActive(); goto FGfI_; FEvnQ: $this->db->trans_complete(); goto dVL6o; WG6be: $jadwal = $this->input->get("\x6a\x61\144\167\x61\154"); goto dlRUH; M7A2N: $siswas = $this->cbt->getSiswaByKelas($tp->id_tp, $smt->id_smt, $kelas); goto lVWuw; BGHWO: $arrDur = []; goto KDFLL; t1sjU: $this->output_json($data); goto hkUFA; hkUFA: } public function getSiswaRuang() { goto p8xhC; dC_Yv: $sesi = $this->input->get("\x73\145\163\151"); goto i1cce; qDHXa: $tp = $this->dashboard->getTahunActive(); goto wyFIR; E4MWA: $siswas = $this->cbt->getSiswaByRuang($tp->id_tp, $smt->id_smt, $ruang, $sesi); goto cMW2X; otMbE: $data["\144\165\x72\141\x73\151"] = $arrDur; goto igY03; wyFIR: $smt = $this->dashboard->getSemesterActive(); goto E4MWA; igY03: $data["\151\156\146\157"] = $info; goto jZJtI; p8xhC: $ruang = $this->input->get("\x72\x75\x61\156\147"); goto dC_Yv; ZX1fz: foreach ($siswas as $siswa) { goto Xrwy9; l3jWz: if (!($i < $info->jml_soal)) { goto bIqLX; } goto LASOE; GweYy: $i = 0; goto N4qLL; im7uL: bIqLX: goto S9fvl; Xrwy9: $arrJawab = []; goto GweYy; N4qLL: BWETZ: goto l3jWz; n07Bd: er26B: goto LtuLx; nMFou: lB3ch: goto fpbES; s_tlx: goto BWETZ; goto im7uL; LASOE: $arrJawab[$siswa->id_siswa][] = $this->cbt->getJawabanSiswa($siswa->id_siswa . $jadwal . $info->id_bank . 1 . ($i + 1)); goto n07Bd; LtuLx: $i++; goto s_tlx; S9fvl: $arrDur[$siswa->id_siswa] = ["\144\x75\162" => $this->cbt->getDurasiSiswa($siswa->id_siswa . $jadwal), "\x6a\x61\x77\x61\142" => $arrJawab[$siswa->id_siswa], "\x6c\157\x67" => $this->cbt->getLogUjian($siswa->id_siswa, $jadwal)]; goto nMFou; fpbES: } goto A10St; i1cce: $jadwal = $this->input->get("\x6a\x61\144\x77\x61\154"); goto SK3QG; Z1M9u: $this->db->trans_complete(); goto v8ZpH; A10St: aUr3x: goto Z1M9u; cMW2X: $info = $this->cbt->getJadwalById($jadwal, $sesi); goto YVmPh; YVmPh: $arrDur = []; goto ZX1fz; jZJtI: $this->output_json($data); goto q3dxA; SK3QG: $this->db->trans_start(); goto qDHXa; v8ZpH: $data["\163\x69\x73\167\x61"] = $siswas; goto otMbE; q3dxA: } public function detail() { goto p8kGb; GNkEi: $this->load->view("\x5f\164\x65\x6d\x70\154\x61\x74\145\x73\57\x64\x61\x73\150\x62\x6f\141\x72\144\x2f\137\x66\x6f\157\x74\x65\x72"); goto o1P5m; VjS8G: if ($this->ion_auth->is_admin()) { goto iTtPf; } goto Z7qoP; eMxYm: $data["\x74\x70"] = $this->dashboard->getTahun(); goto p5HXG; k19E1: $user = $this->ion_auth->user()->row(); goto jzw1s; KSm5b: $data["\147\165\x72\165"] = $guru; goto UermF; ivaNN: $this->load->view("\x5f\x74\145\155\160\154\141\x74\x65\x73\57\x64\x61\163\150\142\x6f\141\162\x64\x2f\137\x68\x65\141\x64\145\x72", $data); goto IcO6F; qpLxW: goto R_Y7e; goto meQtM; Z7qoP: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto KSm5b; YXlXP: $data["\163\151\163\x77\x61"] = $this->master->getSiswaById($siswa); goto Hc2oh; B23or: $this->load->view("\x63\142\164\57\x73\164\x61\164\x75\163\57\x64\145\x74\x61\x69\154"); goto q7P2A; IcO6F: $this->load->view("\x63\142\164\x2f\163\164\141\x74\165\x73\57\144\145\x74\x61\x69\154"); goto GNkEi; p8kGb: $siswa = $this->input->get("\x73\x69\163\x77\141"); goto vALvJ; o1P5m: R_Y7e: goto UdDC5; UniOl: $tp = $this->dashboard->getTahunActive(); goto lJS7S; YEkm6: $data["\163\x6d\164\x5f\x61\x63\x74\x69\166\x65"] = $smt; goto YXlXP; UermF: $this->load->view("\x6d\x65\155\x62\145\162\x73\57\147\x75\162\x75\x2f\x74\145\x6d\160\x6c\141\164\x65\163\57\x68\x65\141\144\145\162", $data); goto B23or; p5HXG: $data["\x74\160\x5f\x61\143\164\x69\x76\145"] = $tp; goto rLLB4; meQtM: iTtPf: goto dhRpP; q7P2A: $this->load->view("\x6d\x65\x6d\x62\145\162\x73\x2f\x67\x75\162\x75\57\x74\x65\155\x70\x6c\141\164\145\163\57\146\157\x6f\x74\145\162"); goto qpLxW; jzw1s: $data = ["\x75\x73\x65\162" => $user, "\x6a\165\144\x75\154" => "\104\145\x74\x61\151\x6c\x20\x53\x74\141\164\165\x73\x20\123\x69\x73\x77\x61", "\163\165\x62\152\165\144\165\x6c" => "\123\164\x61\x74\x75\x73\40\x53\151\163\x77\141", "\163\145\164\164\151\156\x67" => $this->dashboard->getSetting()]; goto UniOl; vALvJ: $jadwal = $this->input->get("\x6a\x61\144\167\x61\154"); goto k19E1; dhRpP: $data["\160\162\x6f\146\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto ivaNN; lJS7S: $smt = $this->dashboard->getSemesterActive(); goto eMxYm; rLLB4: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto YEkm6; Hc2oh: $data["\x73\157\x61\x6c"] = $this->cbt->getSoalSiswaByJadwal($jadwal, $siswa); goto VjS8G; UdDC5: } }
