<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtstatus extends CI_Controller { public function __construct() { goto fpLO4; tQ6Dj: redirect("\141\165\x74\150"); goto MCEAb; SmrS3: GS7NK: goto tQ6Dj; SLUjT: $this->load->library("\165\160\x6c\157\141\144"); goto MsuyW; wY9VR: $this->load->library(["\x64\141\x74\141\164\141\142\154\145\163", "\x66\x6f\x72\155\137\166\141\x6c\151\144\x61\x74\151\157\x6e"]); goto SLUjT; KKPyo: oLqaa: goto IbDo7; MsuyW: $this->load->model("\x4d\141\163\164\x65\x72\137\155\x6f\x64\145\154", "\x6d\x61\x73\164\145\162"); goto CcMM_; CcMM_: $this->load->model("\104\x61\x73\150\x62\157\x61\x72\144\137\155\157\144\145\x6c", "\144\x61\163\150\x62\x6f\x61\162\144"); goto X72gF; wL1cN: $this->form_validation->set_error_delimiters('', ''); goto KHTgZ; IbDo7: goto Ua2TG; goto SmrS3; SbzX3: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\x72\x75"))) { goto oLqaa; } goto NmWRe; fpLO4: parent::__construct(); goto VLnEj; MCEAb: Ua2TG: goto wY9VR; X72gF: $this->load->model("\x43\142\x74\x5f\x6d\x6f\x64\145\x6c", "\143\x62\164"); goto rDka6; VLnEj: if (!$this->ion_auth->logged_in()) { goto GS7NK; } goto SbzX3; rDka6: $this->load->model("\x44\162\x6f\160\144\x6f\167\156\x5f\155\157\144\145\154", "\144\x72\157\x70\x64\x6f\x77\x6e"); goto wL1cN; NmWRe: show_error("\x48\141\x6e\171\x61\x20\101\144\155\151\x6e\x69\163\x74\162\x61\x74\x6f\162\x20\171\141\x6e\147\x20\x64\151\x62\145\x72\x69\x20\x68\141\x6b\x20\x75\x6e\164\x75\x6b\40\x6d\x65\x6e\x67\x61\153\x73\145\163\x20\150\141\154\x61\155\x61\x6e\40\151\156\151\54\x20\x3c\141\40\x68\162\x65\x66\75\x22" . base_url("\x64\141\163\150\x62\157\x61\162\x64") . "\42\76\113\x65\x6d\142\x61\x6c\151\40\153\145\40\155\145\x6e\165\x20\141\x77\141\154\74\57\x61\76", 403, "\x41\x6b\x73\x65\163\x20\x54\145\x72\154\x61\162\x61\156\x67"); goto KKPyo; KHTgZ: } public function output_json($data, $encode = true) { goto sq3rL; iX5FQ: $this->output->set_content_type("\x61\x70\x70\x6c\151\143\x61\164\x69\157\156\x2f\152\x73\157\x6e")->set_output($data); goto ArfyF; unHdf: Jgtdx: goto iX5FQ; sq3rL: if (!$encode) { goto Jgtdx; } goto H2sfQ; H2sfQ: $data = json_encode($data); goto unHdf; ArfyF: } public function index() { goto KicVD; CC6y4: $data["\x74\x70\x5f\141\x63\x74\x69\x76\x65"] = $tp; goto REqx8; Meh4e: AkH_S: goto W2_pp; EPjr5: $data["\163\x65\x73\151"] = $this->dropdown->getAllSesi(); goto Gy30E; dKbCQ: $this->load->view("\137\164\145\x6d\x70\154\141\164\x65\x73\x2f\144\x61\163\150\142\x6f\x61\x72\x64\x2f\x5f\150\145\141\144\x65\x72", $data); goto mQr1y; qOGEn: $jadwals = $this->cbt->getJadwalGuru($tp->id_tp, $smt->id_smt, $guru->id_guru); goto nlX6o; WP6ZN: $data["\152\141\144\x77\x61\x6c"] = $this->dropdown->getAllJadwalGuru($tp->id_tp, $smt->id_smt, $guru->id_guru); goto ThoGg; zcRsY: hxDro: goto Ug_vI; yWWGm: PEcuX: goto bhG8i; PY8ou: $this->load->view("\155\145\x6d\142\145\162\163\x2f\x67\165\162\x75\x2f\164\x65\155\x70\154\x61\164\x65\x73\x2f\x66\157\157\x74\x65\162"); goto oLGyW; fnLFJ: $arrKls = []; goto QoX_8; oLGyW: goto AkH_S; goto yWWGm; mmyM6: foreach ($jadwals as $jad) { goto S5SAA; CDALx: foreach ($kls as $kl) { array_push($arrKls, $kl["\153\x65\x6c\x61\x73\137\x69\144"]); cUafm: } goto dpK2J; S5SAA: $kls = unserialize($jad->bank_kelas); goto CDALx; dpK2J: bTmc0: goto pZARN; pZARN: dJLYq: goto xOUOB; xOUOB: } goto zcRsY; KHGUx: $data["\x67\165\162\x75"] = $guru; goto WP6ZN; bmvk4: $data = ["\x75\163\x65\x72" => $user, "\x6a\x75\x64\x75\x6c" => "\123\x74\x61\x74\165\163\x20\x55\x6a\x69\141\x6e\x20\123\x69\x73\x77\141", "\163\x75\142\x6a\165\144\165\x6c" => "\123\x74\x61\164\165\163\x20\123\151\x73\x77\141", "\163\x65\x74\164\151\x6e\147" => $this->dashboard->getSetting()]; goto RFFE6; bhG8i: $data["\x70\x72\157\146\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto P03UH; nlX6o: $arrKls = []; goto mmyM6; EXipa: $smt = $this->dashboard->getSemesterActive(); goto VIolF; mQr1y: $this->load->view("\x63\142\x74\x2f\x73\x74\x61\164\165\x73\57\x64\141\x74\141"); goto Sqizp; Sqizp: $this->load->view("\137\x74\145\155\160\154\141\164\145\x73\x2f\x64\x61\163\x68\142\x6f\x61\x72\x64\57\x5f\x66\x6f\x6f\x74\x65\162"); goto Meh4e; P03UH: $data["\x6a\x61\144\167\141\x6c"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt); goto WlJPI; dh86G: $data["\163\x6d\164\137\141\x63\x74\151\166\145"] = $smt; goto GPMtS; Gy30E: $data["\x70\x65\156\x67\x61\167\x61\163"] = $this->cbt->getPengawasByGuru($tp->id_tp, $smt->id_smt, $guru->id_guru); goto qOGEn; ThoGg: $data["\162\x75\141\x6e\147"] = $this->dropdown->getAllRuang(); goto EPjr5; REqx8: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto dh86G; Nx_pl: $this->load->view("\x6d\x65\x6d\142\145\x72\163\x2f\x67\165\x72\165\x2f\x63\142\164\x2f\x73\164\x61\164\165\163\57\x64\x61\x74\141"); goto PY8ou; lmVk2: $data["\x72\x75\141\156\x67\163"] = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, $arrKls); goto dKbCQ; KicVD: $user = $this->ion_auth->user()->row(); goto bmvk4; VIolF: $data["\164\x70"] = $this->dashboard->getTahun(); goto CC6y4; GPMtS: if ($this->ion_auth->is_admin()) { goto PEcuX; } goto wvrxM; WlJPI: $data["\162\x75\x61\156\x67"] = $this->dropdown->getAllRuang(); goto HeOYb; Pfi1N: bUg14: goto lmVk2; RFFE6: $tp = $this->dashboard->getTahunActive(); goto EXipa; QoX_8: foreach ($jadwals as $jad) { goto PaBXa; Adm2T: zGhBG: goto yPjZb; kn29s: foreach ($kls as $kl) { array_push($arrKls, $kl["\153\x65\154\x61\x73\x5f\151\x64"]); wxU6a: } goto G4yIS; G4yIS: qDlPg: goto Adm2T; PaBXa: $kls = unserialize($jad->bank_kelas); goto kn29s; yPjZb: } goto Pfi1N; HeOYb: $data["\x73\x65\163\151"] = $this->dropdown->getAllSesi(); goto BC8BK; WxmZJ: $this->load->view("\x6d\x65\x6d\x62\x65\x72\x73\x2f\x67\165\x72\x75\57\x74\x65\x6d\x70\154\141\164\145\x73\57\150\145\141\x64\145\x72", $data); goto Nx_pl; Ug_vI: $data["\x72\165\141\x6e\147\163"] = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, $arrKls); goto WxmZJ; BC8BK: $jadwals = $this->cbt->getJadwalKelas($tp->id_tp, $smt->id_smt); goto fnLFJ; wvrxM: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto KHGUx; W2_pp: } public function statusRuang() { goto dCxQu; kpIks: $this->db->trans_start(); goto ZsqBf; FOiwb: $this->load->view("\x6d\145\155\142\145\162\163\57\x67\x75\162\x75\57\x74\145\155\x70\154\x61\164\x65\163\x2f\146\157\x6f\x74\145\x72"); goto hG6TR; ZsqBf: $tp = $this->dashboard->getTahunActive(); goto R0n21; jSwQS: $this->load->view("\x6d\x65\155\142\x65\162\x73\x2f\147\x75\x72\x75\x2f\143\x62\x74\57\163\164\x61\x74\165\163\57\x73\164\x61\x74\165\163"); goto FOiwb; y581O: $ids_pengawas = []; goto vpX6S; i0goM: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto K2T3O; RUSUW: SVeD3: goto f64gN; uErl9: $sesi = $this->input->get("\163\x65\163\x69"); goto vQsyY; V3xxd: $pengawas = $this->cbt->getPengawasByJadwal($tp->id_tp, $smt->id_smt, $jadwal, $sesi, $ruang); goto y581O; vQsyY: $jadwal = $this->input->get("\152\x61\x64\x77\141\154"); goto jDev7; h_I6y: $logs = $this->cbt->getLogUjianByJadwal($jadwal); goto V3xxd; vpX6S: foreach ($pengawas as $pws) { $ids_pengawas = explode("\54", $pws->id_guru); EADKw: } goto RUSUW; pypPo: xtaIS: goto g7L0Y; iCuby: $data["\x73\151\x73\x77\x61"] = $siswas; goto q9H0l; guVWx: $data = ["\x75\163\x65\x72" => $user, "\152\x75\x64\x75\154" => "\123\164\141\x74\x75\x73\40\125\152\x69\x61\x6e\40\123\151\163\x77\141", "\x73\x75\142\152\x75\x64\x75\154" => "\123\x74\x61\x74\x75\x73\x20\x53\x69\x73\167\x61", "\163\145\164\x74\151\156\x67" => $this->dashboard->getSetting()]; goto kpIks; TmHEH: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto JPPOX; y3xTT: $data["\x70\145\156\147\x61\167\141\x73"] = $this->master->getGuruByArrId($ids_pengawas); goto OHd0a; dCxQu: $ruang = $this->input->get("\x72\165\x61\156\147"); goto uErl9; jDev7: $user = $this->ion_auth->user()->row(); goto guVWx; K2T3O: $data["\163\155\x74\137\x61\x63\x74\151\166\145"] = $smt; goto TmHEH; R2ceo: $siswas = $this->cbt->getSiswaByRuang($tp->id_tp, $smt->id_smt, $ruang, $sesi); goto u6TMz; vU2G3: $data["\x69\x6e\x66\157"] = $info; goto IId_G; kmFiS: foreach ($siswas as $siswa) { goto utd80; fE3FN: $log_siswa = []; goto SN0rp; utd80: $dur_siswa = null; goto EHFYI; Gg0ir: z2qE0: goto fE3FN; EHFYI: foreach ($durasies as $durasi) { goto udtTr; nv6fx: if (strpos($lamanya, "\72") !== false) { goto AOleF; } goto yMg4v; xFYmy: Tx8qc: goto zZeDZ; zZeDZ: goto Q2oDH; goto QDtuE; yk46K: $ej = $elap[0] == "\60\x30" ? '' : intval($elap[0]) . "\x20\152\x20"; goto AxGwz; udtTr: if (!($durasi->id_siswa == $siswa->id_siswa)) { goto wFeAO; } goto TNU_E; QWYGI: $dur_siswa = $durasi; goto nUOCj; TNU_E: if ($durasi->lama_ujian == null) { goto hP8qZ; } goto pWH2A; eO38F: $mins = (strtotime($durasi->selesai) - strtotime($durasi->mulai)) / 60; goto XXbu6; t1I48: $dd = $ej . $em; goto u0Edk; rQi6d: goto Tx8qc; goto WX2Z0; D2nYf: $elap = explode("\72", $lamanya); goto dryCz; dryCz: $ed = $elap[2] == "\60\x30" ? 0 : 1; goto yk46K; ZVYMP: Q2oDH: goto QWYGI; QDtuE: hP8qZ: goto eO38F; yMg4v: $durasi->lama_ujian .= "\x6d"; goto rQi6d; pWH2A: $lamanya = $durasi->lama_ujian; goto nv6fx; AxGwz: $em = $elap[1] == "\60\60" ? '' : intval($elap[1]) + $ed . "\x20\x6d"; goto t1I48; NwOLS: eNejY: goto VN5Zg; u0Edk: $durasi->lama_ujian = $dd == '' ? "\60\x20\155" : $dd; goto xFYmy; XXbu6: $durasi->lama_ujian = round($mins, 2) . "\40\155"; goto ZVYMP; WX2Z0: AOleF: goto D2nYf; nUOCj: wFeAO: goto NwOLS; VN5Zg: } goto Gg0ir; SN0rp: foreach ($logs as $log) { goto FPl_8; KWZVX: qSY2m: goto wgxt2; CrM1e: array_push($log_siswa, $log); goto LzhgF; FPl_8: if (!($log->id_siswa == $siswa->id_siswa)) { goto S1bO3; } goto CrM1e; LzhgF: S1bO3: goto KWZVX; wgxt2: } goto cdaUZ; j31z9: $arrDur[$siswa->id_siswa] = ["\x64\x75\x72" => $dur_siswa, "\x6c\x6f\x67" => $log_siswa]; goto dUyJV; cdaUZ: YO0x2: goto j31z9; dUyJV: cP8Mw: goto QjXvN; QjXvN: } goto pypPo; JPPOX: $data["\x67\165\162\165"] = $guru; goto dfMlg; g7L0Y: $this->db->trans_complete(); goto iCuby; f64gN: $arrDur = []; goto kmFiS; n1jlm: $data["\x74\x70\x5f\x61\x63\x74\151\166\145"] = $tp; goto i0goM; urApP: $data["\x74\160"] = $this->dashboard->getTahun(); goto n1jlm; R0n21: $smt = $this->dashboard->getSemesterActive(); goto urApP; OHd0a: $this->load->view("\155\145\x6d\x62\x65\x72\x73\x2f\147\x75\162\165\x2f\x74\145\x6d\160\154\x61\164\145\163\x2f\x68\x65\x61\144\x65\x72", $data); goto jSwQS; IId_G: $data["\151\144\163\137\x70\145\x6e\147\x61\x77\x61\163"] = $ids_pengawas; goto y3xTT; q9H0l: $data["\144\x75\162\x61\x73\151\x5f\x73\151\163\167\141"] = $arrDur; goto vU2G3; dfMlg: $info = $this->cbt->getJadwalById($jadwal); goto R2ceo; u6TMz: $durasies = $this->cbt->getDurasiSiswaByJadwal($jadwal); goto h_I6y; hG6TR: } public function getJadwalUjianByJadwal() { goto wX8Jh; wX8Jh: $jadwal = $this->input->get("\151\x64\x5f\152\141\144\x77\x61\154"); goto S6gvR; QDXpx: $kelases = []; goto QPhqs; QPhqs: foreach ($kelas as $key => $value) { $kelases[$value["\153\145\x6c\141\163\x5f\151\144"]] = $this->dropdown->getNamaKelasById($info->id_tp, $info->id_smt, $value["\x6b\x65\154\141\x73\x5f\151\x64"]); xb0mK: } goto ITsqM; jRvf8: $this->output_json($kelases); goto zTB33; x7Czs: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto YFZRF; u0tY2: $smt = $this->dashboard->getSemesterActive(); goto pO5xQ; ITsqM: oLNgt: goto jRvf8; eRVib: $kelas = unserialize($info->bank_kelas); goto QDXpx; V_Sha: $tp = $this->dashboard->getTahunActive(); goto u0tY2; pO5xQ: $data["\164\160"] = $this->dashboard->getTahun(); goto hr5zB; S6gvR: $info = $this->cbt->getJadwalById($jadwal); goto V_Sha; YFZRF: $data["\163\x6d\x74\x5f\141\x63\164\x69\x76\145"] = $smt; goto eRVib; hr5zB: $data["\x74\x70\x5f\x61\143\x74\x69\x76\x65"] = $tp; goto x7Czs; zTB33: } public function getJadwalUjianByKelas() { goto lotU6; LjI7b: goto pw9OP; goto Yp4ae; lotU6: $kelas = $this->input->get("\x69\x64\x5f\153\x65\154\141\x73"); goto FZEm1; axURV: pw9OP: goto BBpMx; lV02R: $jdwl = []; goto Aw2t1; BBpMx: $jadwals = $this->cbt->getAllJadwal($tp->id_tp, $smt->id_smt, $id_guru); goto lV02R; kRhrs: $this->output_json($jdwl); goto qNTfz; Pu3NQ: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto boBHS; Yd2mW: $id_guru = null; goto LjI7b; Aw2t1: foreach ($jadwals as $jadwal) { goto SNwdR; G3L3T: MTvq9: goto X1UtT; X1UtT: BaaDT: goto Z8HeK; SNwdR: $kls = unserialize($jadwal->bank_kelas); goto hrZoS; hrZoS: foreach ($kls as $kl) { goto oHMFj; mb9EQ: R7jcq: goto LH83W; nN1Wp: J7zrS: goto mb9EQ; oHMFj: if (!($kl["\x6b\145\x6c\x61\x73\x5f\x69\144"] == $kelas)) { goto J7zrS; } goto hqrPc; hqrPc: $jdwl[$jadwal->id_jadwal] = $jadwal->bank_kode; goto nN1Wp; LH83W: } goto G3L3T; Z8HeK: } goto GEu_l; nQs_S: if ($this->ion_auth->in_group("\x67\165\162\165")) { goto bUjem; } goto Yd2mW; FZEm1: $tp = $this->dashboard->getTahunActive(); goto yQ4D8; q8fId: $user = $this->ion_auth->user()->row(); goto Pu3NQ; boBHS: $id_guru = $guru->id_guru; goto axURV; GEu_l: GATrq: goto kRhrs; yQ4D8: $smt = $this->dashboard->getSemesterActive(); goto nQs_S; Yp4ae: bUjem: goto q8fId; qNTfz: } public function getSiswaKelas() { goto IDE1w; m3I0F: $info = $this->cbt->getJadwalById($jadwal); goto hcSmu; QZl37: $jadwal = $this->input->get("\x6a\141\x64\167\x61\154"); goto IjF5J; nkKA5: QjZcc: goto HIErJ; hcSmu: $siswas = $this->cbt->getSiswaByKelas($tp->id_tp, $smt->id_smt, $kelas); goto Glbyh; tt09A: $smt = $this->dashboard->getSemesterActive(); goto m3I0F; IuZAX: $data["\x64\165\162\141\x73\151"] = $arrDur; goto BR7aW; wk1qZ: foreach ($siswas as $siswa) { goto J4_kF; px3lb: foreach ($logs as $log) { goto zno1Z; abT8l: ruRDy: goto UQJUw; FjLuy: Ftw1M: goto abT8l; zno1Z: if (!($log->id_siswa == $siswa->id_siswa)) { goto Ftw1M; } goto vTlFb; vTlFb: array_push($log_siswa, $log); goto FjLuy; UQJUw: } goto X901d; J4_kF: $dur_siswa = null; goto hNxyb; BxPeU: $log_siswa = []; goto px3lb; X901d: YDlrs: goto r5z6u; XTXCC: ElkqT: goto v_WCa; r5z6u: $arrDur[$siswa->id_siswa] = ["\x64\x75\x72" => $dur_siswa, "\154\x6f\x67" => $log_siswa]; goto XTXCC; JbSQW: w705e: goto BxPeU; hNxyb: foreach ($durasies as $durasi) { goto og6jG; YeaVv: $mins = (strtotime($durasi->selesai) - strtotime($durasi->mulai)) / 60; goto Kft2p; oAueL: $dur_siswa = $durasi; goto Cg2dO; EgXfW: $durasi->lama_ujian = $dd == '' ? "\x30\x20\155" : $dd; goto xwM_g; e2CK0: if ($durasi->lama_ujian == null) { goto ZwTp7; } goto mGcvI; sGn3k: ZwTp7: goto YeaVv; xwM_g: QOa0N: goto vbeCw; geln2: $elap = explode("\x3a", $lamanya); goto MvPDo; Kft2p: $durasi->lama_ujian = round($mins, 2) . "\x20\155"; goto mZAgD; mZAgD: xsWhE: goto oAueL; vbeCw: goto xsWhE; goto sGn3k; wV1Wx: $durasi->lama_ujian .= "\x6d"; goto SAUTs; SAUTs: goto QOa0N; goto izHS5; oTqME: kcW9B: goto bmhZO; og6jG: if (!($durasi->id_siswa == $siswa->id_siswa)) { goto tMleu; } goto e2CK0; Cg2dO: tMleu: goto oTqME; izHS5: bo_JC: goto geln2; MvPDo: $ed = $elap[2] == "\60\x30" ? 0 : 1; goto OcyqE; MfYyz: $dd = $ej . $em; goto EgXfW; rpWDf: if (strpos($lamanya, "\72") !== false) { goto bo_JC; } goto wV1Wx; OcyqE: $ej = $elap[0] == "\60\60" ? '' : intval($elap[0]) . "\40\x6a\40"; goto DLRWr; mGcvI: $lamanya = $durasi->lama_ujian; goto rpWDf; DLRWr: $em = $elap[1] == "\x30\x30" ? '' : intval($elap[1]) + $ed . "\x20\x6d"; goto MfYyz; bmhZO: } goto JbSQW; v_WCa: } goto AYcvb; Glbyh: $durasies = $this->cbt->getDurasiSiswaByJadwal($jadwal); goto jEFSW; IfZAo: foreach ($pengawas as $pws) { $ids_pengawas = explode("\54", $pws->id_guru); PROBs: } goto nkKA5; WObkj: $ids_pengawas = []; goto IfZAo; BR7aW: $data["\151\156\146\x6f"] = $info; goto L0i5P; aq9V9: $this->db->trans_complete(); goto p1u6N; L0i5P: $data["\160\x65\156\x67\141\167\x61\x73"] = $this->master->getGuruByArrId($ids_pengawas); goto w3RBW; IjF5J: $this->db->trans_start(); goto zDFRK; jEFSW: $logs = $this->cbt->getLogUjianByJadwal($jadwal); goto afk64; AYcvb: h0u5D: goto aq9V9; HIErJ: $arrDur = []; goto wk1qZ; w3RBW: $this->output_json($data); goto pNu0S; IDE1w: $kelas = $this->input->get("\153\x65\x6c\141\x73"); goto QZl37; afk64: $pengawas = $this->cbt->getPengawasByJadwal($tp->id_tp, $smt->id_smt, $jadwal); goto WObkj; p1u6N: $data["\x73\151\163\x77\x61"] = $siswas; goto IuZAX; zDFRK: $tp = $this->dashboard->getTahunActive(); goto tt09A; pNu0S: } public function getSiswaRuang() { goto lp0ho; h51dJ: $tp = $this->dashboard->getTahunActive(); goto HDDNX; BJizq: qimXY: goto Ee4G_; H6Bov: $jadwal = $this->input->get("\152\x61\144\167\141\154"); goto jKcH3; xSWb7: $data["\144\x75\x72\x61\163\151"] = $arrDur; goto cs6PY; x8ih1: $durasies = $this->cbt->getDurasiSiswaByJadwal($jadwal); goto yE49q; Ee4G_: $this->db->trans_complete(); goto IPKvQ; HDDNX: $smt = $this->dashboard->getSemesterActive(); goto NfMJf; J2hhx: $arrDur = []; goto j8pFk; rYOKQ: $siswas = $this->cbt->getSiswaByRuang($tp->id_tp, $smt->id_smt, $ruang, $sesi); goto x8ih1; cVq96: $this->output_json($data); goto d0HKj; BsqTt: $sesi = $this->input->get("\x73\145\163\x69"); goto H6Bov; j8pFk: foreach ($siswas as $siswa) { goto A0DkL; ZtII0: tcBSA: goto nzQiZ; A0DkL: $dur_siswa = null; goto z4D9G; ZQXtQ: Rs4fh: goto ZsuTz; ue02Y: $log_siswa = []; goto t2NWM; t2NWM: foreach ($logs as $log) { goto AKu0V; AKu0V: if (!($log->id_siswa == $siswa->id_siswa)) { goto eJINU; } goto YKoe5; YKoe5: array_push($log_siswa, $log); goto K1Xbv; XfEiA: UPvqJ: goto pVS5i; K1Xbv: eJINU: goto XfEiA; pVS5i: } goto ZQXtQ; ZsuTz: $arrDur[$siswa->id_siswa] = ["\x64\x75\162" => $dur_siswa, "\154\x6f\x67" => $log_siswa]; goto ZtII0; Y1f2q: dNei0: goto ue02Y; z4D9G: foreach ($durasies as $durasi) { goto Ya2aV; MKyyc: $ed = $elap[2] == "\x30\x30" ? 0 : 1; goto CHqxr; vTugc: $minutes = $interval->days * 24 * 60 + $interval->h * 60 + $interval->i; goto X602t; UNuoQ: $mins = (strtotime($durasi->selesai) - strtotime($durasi->mulai)) / 60; goto iSEYO; gkRhV: if ($durasi->lama_ujian == null) { goto opUg4; } goto tZYGU; X602t: $durasi->ada_waktu = $minutes < $info->durasi_ujian; goto gkRhV; CHqxr: $ej = $elap[0] == "\60\x30" ? '' : intval($elap[0]) . "\x20\152\40"; goto vvbsv; LKiHS: rhxce: goto C43vg; tiTVN: if (strpos($lamanya, "\72") !== false) { goto qTsr2; } goto MOkcq; tZYGU: $lamanya = $durasi->lama_ujian; goto tiTVN; Q3nr_: qTsr2: goto BXEJT; YnPrA: $dd = $ej . $em; goto gCVeS; ucZH9: goto WQQJQ; goto eSCrt; gCVeS: $durasi->lama_ujian = $dd == '' ? "\x30\40\155" : $dd; goto xLo2q; Hw1WD: goto x3VZ2; goto Q3nr_; xLo2q: x3VZ2: goto ucZH9; EtuD5: WQQJQ: goto Z30dQ; MOkcq: $durasi->lama_ujian .= "\x6d"; goto Hw1WD; xL217: $mulai = new DateTime($durasi->mulai); goto LfhXr; C43vg: Rzw4p: goto Q1mLl; iSEYO: $durasi->lama_ujian = round($mins, 2) . "\x20\155"; goto EtuD5; vvbsv: $em = $elap[1] == "\x30\x30" ? '' : intval($elap[1]) + $ed . "\x20\155"; goto YnPrA; eSCrt: opUg4: goto UNuoQ; Ya2aV: if (!($durasi->id_siswa == $siswa->id_siswa)) { goto rhxce; } goto xL217; LfhXr: $interval = $mulai->diff(new DateTime()); goto vTugc; BXEJT: $elap = explode("\72", $lamanya); goto MKyyc; Z30dQ: $dur_siswa = $durasi; goto LKiHS; Q1mLl: } goto Y1f2q; nzQiZ: } goto BJizq; jKcH3: $this->db->trans_start(); goto h51dJ; IPKvQ: $data["\163\x69\163\167\141"] = $siswas; goto xSWb7; lp0ho: $ruang = $this->input->get("\162\165\x61\156\147"); goto BsqTt; cs6PY: $data["\x69\156\146\x6f"] = $info; goto cVq96; yE49q: $logs = $this->cbt->getLogUjianByJadwal($jadwal); goto J2hhx; NfMJf: $info = $this->cbt->getJadwalById($jadwal); goto rYOKQ; d0HKj: } public function detail() { goto Une9m; HPy3J: $this->load->view("\x5f\164\145\155\160\154\141\164\x65\x73\x2f\x64\141\163\x68\142\x6f\x61\x72\x64\57\137\146\157\157\x74\145\162"); goto kxX4y; L7uXz: $this->load->view("\143\142\x74\57\163\x74\x61\164\x75\x73\57\144\145\164\141\x69\x6c"); goto HPy3J; HFV3J: $this->load->view("\155\x65\155\x62\x65\x72\x73\57\147\x75\162\x75\x2f\164\x65\155\160\154\141\x74\145\163\57\x66\x6f\x6f\x74\145\x72"); goto GUOQk; NRoQp: $data["\x74\x70"] = $this->dashboard->getTahun(); goto Yd0XX; WjAfR: $tp = $this->dashboard->getTahunActive(); goto hxnJa; hxnJa: $smt = $this->dashboard->getSemesterActive(); goto NRoQp; BEJCY: rSeUZ: goto yPc13; NgYnk: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto SXkiL; mPW5L: $this->load->view("\155\145\155\x62\145\x72\163\57\147\x75\x72\165\57\x74\145\x6d\160\x6c\x61\164\145\163\57\150\145\x61\144\x65\x72", $data); goto pySWd; xuCkN: $data = ["\165\163\x65\x72" => $user, "\x6a\165\144\165\x6c" => "\104\145\164\x61\151\154\x20\x53\x74\141\x74\x75\x73\40\x53\x69\163\167\x61", "\x73\x75\142\x6a\x75\144\165\x6c" => "\x53\164\141\x74\165\163\40\x53\151\163\167\141", "\163\145\164\164\x69\x6e\147" => $this->dashboard->getSetting()]; goto WjAfR; EWxja: $this->load->view("\x5f\x74\x65\x6d\x70\x6c\141\x74\145\x73\x2f\x64\141\163\150\x62\x6f\141\162\144\x2f\x5f\x68\x65\x61\144\145\162", $data); goto L7uXz; Yd0XX: $data["\164\x70\x5f\x61\x63\164\x69\x76\x65"] = $tp; goto NgYnk; MpW_u: $jadwal = $this->input->get("\x6a\x61\x64\167\x61\154"); goto NiqGL; pySWd: $this->load->view("\x63\142\x74\57\163\164\x61\x74\165\x73\57\144\x65\x74\141\151\154"); goto HFV3J; xQbAO: $data["\163\x6f\x61\x6c"] = $this->cbt->getSoalSiswaByJadwal($jadwal, $siswa); goto QVsFZ; vwjGn: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto Xw18w; kxX4y: PQJSI: goto MjKXz; JJRK3: $data["\x73\x69\163\x77\141"] = $this->master->getSiswaById($siswa); goto xQbAO; Une9m: $siswa = $this->input->get("\x73\151\x73\x77\141"); goto MpW_u; QVsFZ: if ($this->ion_auth->is_admin()) { goto rSeUZ; } goto vwjGn; Xw18w: $data["\x67\165\162\x75"] = $guru; goto mPW5L; GUOQk: goto PQJSI; goto BEJCY; NiqGL: $user = $this->ion_auth->user()->row(); goto xuCkN; SXkiL: $data["\x73\155\x74\137\x61\143\x74\151\x76\145"] = $smt; goto JJRK3; yPc13: $data["\x70\162\x6f\146\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto EWxja; MjKXz: } }
