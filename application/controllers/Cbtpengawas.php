<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtpengawas extends CI_Controller { public function __construct() { goto mUfTL; MNkfL: if ($this->ion_auth->is_admin()) { goto MyiKY; } goto ipasv; YLBwN: $this->load->model("\x43\142\x74\137\155\x6f\x64\x65\154", "\x63\x62\x74"); goto vFN1x; ipasv: show_error("\110\141\x6e\171\x61\x20\x41\144\155\x69\156\x69\x73\164\x72\x61\x74\157\x72\x20\x79\x61\156\147\x20\144\x69\x62\x65\x72\151\x20\150\x61\x6b\40\x75\x6e\164\165\x6b\x20\x6d\145\156\147\x61\x6b\x73\145\x73\x20\150\x61\154\x61\155\141\156\40\x69\x6e\151\x2c\40\x3c\x61\x20\150\x72\145\146\75\42" . base_url("\x64\x61\x73\150\142\157\141\x72\144") . "\42\76\113\145\x6d\142\141\x6c\151\40\153\145\40\155\x65\x6e\x75\40\x61\167\141\154\74\x2f\141\76", 403, "\101\x6b\x73\x65\x73\40\124\145\x72\x6c\141\x72\x61\x6e\147"); goto nG1w1; AHUR8: $this->load->library(["\144\141\x74\141\x74\x61\x62\154\x65\x73", "\146\157\x72\x6d\137\x76\141\154\x69\144\x61\x74\x69\157\x6e"]); goto JH8rD; mUfTL: parent::__construct(); goto Ya_65; x9qrS: eyNHu: goto FO3tg; HRiGw: LTVbB: goto AHUR8; vFN1x: $this->load->model("\x44\x72\157\160\144\157\x77\x6e\137\x6d\157\x64\x65\x6c", "\144\x72\x6f\x70\x64\x6f\x77\x6e"); goto KaxHD; JH8rD: $this->load->model("\x4d\x61\x73\164\x65\162\137\155\157\144\x65\154", "\155\x61\x73\x74\x65\x72"); goto fFaxc; UE6AW: goto LTVbB; goto x9qrS; fFaxc: $this->load->model("\104\141\163\x68\x62\x6f\141\x72\x64\137\x6d\157\x64\x65\154", "\144\141\163\x68\142\157\x61\162\x64"); goto YLBwN; KaxHD: $this->form_validation->set_error_delimiters('', ''); goto avnr5; Ya_65: if (!$this->ion_auth->logged_in()) { goto eyNHu; } goto MNkfL; FO3tg: redirect("\141\x75\164\x68"); goto HRiGw; nG1w1: MyiKY: goto UE6AW; avnr5: } public function output_json($data, $encode = true) { goto dy7g2; ifoIN: $this->output->set_content_type("\x61\160\x70\154\151\x63\x61\164\x69\x6f\x6e\57\152\163\157\x6e")->set_output($data); goto VeFjh; kVV8f: $data = json_encode($data); goto o45Jv; o45Jv: PrUeG: goto ifoIN; dy7g2: if (!$encode) { goto PrUeG; } goto kVV8f; VeFjh: } public function index() { goto ndmpC; GrI85: goto CCXfJ; goto BOoUi; vl_Tu: foreach ($tglJadwals as $tgl => $jadwalss) { goto QoDMM; f9peT: tXfjC: goto smBw7; QoDMM: foreach ($jadwalss as $mpl => $jadwals) { goto mnSA0; mnSA0: foreach ($jadwals as $jadwal) { goto CxO6f; gkbdh: foreach ($jadwal->bank_kelas as $kb) { goto IbeHe; ifuXZ: $jadwal->peserta[] = $klss; goto Dqokj; IbeHe: if (!($kb["\x6b\145\x6c\x61\x73\x5f\151\x64"] != '')) { goto v1vv3; } goto s6G0e; Nr5LE: DPPvh: goto V_Dmf; s6G0e: $klss = $this->cbt->getKelasUjian($kb["\x6b\x65\154\141\x73\x5f\151\x64"]); goto ifuXZ; Dqokj: v1vv3: goto Nr5LE; V_Dmf: } goto Qp21t; CxO6f: $jadwal->bank_kelas = unserialize($jadwal->bank_kelas); goto gkbdh; NyvRx: z4Iwg: goto SuCdi; Qp21t: y8S79: goto NyvRx; SuCdi: } goto LhVDd; nvKZX: z_Hs4: goto eXKCv; LhVDd: f0MC_: goto nvKZX; eXKCv: } goto Tjm22; Tjm22: OlVe1: goto f9peT; smBw7: } goto TMfeC; TYK5t: CCXfJ: goto fqFJr; YjjJQ: $data["\x6b\145\154\141\x73"] = $kelass; goto FYBVn; q1Mre: $ids = []; goto dgvEb; cHph_: wb1tC: goto Kjki8; pwNx8: $tglJadwals = []; goto qs678; bbkZN: $data["\x74\x70"] = $this->dashboard->getTahun(); goto ICbes; oq1A8: $data["\162\x75\141\x6e\x67\x5f\163\x65\163\x69"] = $this->cbt->getRuangSesi($tp->id_tp, $smt->id_smt); goto rXCbA; CcxOR: $data["\152\145\x6e\151\163"] = $this->cbt->getAllJenisUjianByArrJenis($ids); goto TYK5t; e7inQ: $this->load->view("\x5f\164\x65\155\160\154\141\164\145\163\57\x64\141\x73\x68\142\157\x61\x72\144\57\137\150\x65\x61\x64\x65\x72", $data); goto u2k6e; tpsjI: $data["\x67\x75\x72\x75\163"] = $this->dropdown->getAllGuru(); goto n4iVZ; rXCbA: $data["\162\x75\x61\x6e\147\x73"] = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, []); goto DUrlU; nqJP_: $data["\152\x65\156\x69\x73"] = ['' => "\x62\145\x6c\165\155\x20\x61\x64\x61\x20\152\x61\x64\x77\141\x6c\40\x75\152\x69\141\156"]; goto GrI85; Kp08B: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto d7TkO; u2k6e: $this->load->view("\x63\142\x74\x2f\x70\145\156\x67\x61\x77\141\x73\x2f\144\141\x74\x61"); goto Eng8B; BOoUi: kUtMS: goto CcxOR; Eng8B: $this->load->view("\137\x74\x65\x6d\x70\154\x61\x74\x65\x73\x2f\144\141\163\150\142\157\141\162\144\57\137\146\157\x6f\164\x65\x72"); goto GxEtN; y5S71: $setting = $this->dashboard->getSetting(); goto VCuw0; sKctb: $smt = $this->dashboard->getSemesterActive(); goto bbkZN; Kjki8: $data["\164\x67\x6c\x5f\x6a\141\x64\x77\x61\154\x73"] = $tglJadwals; goto L9ZmI; Bg3z8: foreach ($id_jenis as $jenis) { array_push($ids, $jenis->id_jenis); MhyGX: } goto S0Rps; FYBVn: $data["\x70\162\157\146\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto tpsjI; L9ZmI: $data["\x72\165\x61\x6e\x67"] = $this->dropdown->getAllRuang(); goto kUUS3; ICbes: $data["\164\x70\x5f\x61\143\x74\x69\x76\145"] = $tp; goto Kp08B; if0uC: $tp = $this->dashboard->getTahunActive(); goto sKctb; n4iVZ: $id_jenis = $this->cbt->getDistinctJenisJadwal($tp->id_tp, $smt->id_smt); goto q1Mre; d7TkO: $data["\163\155\164\x5f\x61\x63\x74\x69\166\145"] = $smt; goto Gt0Sh; DUrlU: $data["\x70\145\156\x67\141\x77\141\163"] = $this->cbt->getAllPengawas($tp->id_tp, $smt->id_smt); goto e7inQ; dgvEb: if (!(count($id_jenis) > 0)) { goto H8zxr; } goto Bg3z8; ndmpC: $user = $this->ion_auth->user()->row(); goto y5S71; VCuw0: $data = ["\165\163\x65\x72" => $user, "\x6a\165\144\165\154" => "\x41\164\165\x72\x20\120\145\x6e\147\x61\167\x61\x73", "\x73\x75\142\152\165\144\x75\x6c" => "\120\x65\156\x67\141\167\x61\163\x20\125\152\x69\x61\156\x2f\x55\x6c\141\x6e\147\x61\x6e", "\163\x65\x74\164\151\156\147" => $setting]; goto if0uC; iKH7y: H8zxr: goto KzHSz; KzHSz: if (count($ids) > 0) { goto kUtMS; } goto nqJP_; qs678: if (!($jenis_selected != null)) { goto wb1tC; } goto PM4g6; S0Rps: PHS2k: goto iKH7y; TMfeC: rP7m4: goto cHph_; Gt0Sh: $kelass = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto YjjJQ; fqFJr: $jenis_selected = $this->input->get("\x6a\x65\x6e\151\x73", true); goto DhptX; kUUS3: $data["\163\145\x73\x69"] = $this->dropdown->getAllSesi(); goto oq1A8; DhptX: $data["\152\x65\x6e\x69\163\x5f\163\x65\x6c\145\143\x74\x65\x64"] = $jenis_selected; goto pwNx8; PM4g6: $tglJadwals = $this->cbt->getAllJadwalByJenis($jenis_selected, $tp->id_tp, $smt->id_smt); goto vl_Tu; GxEtN: } public function savePengawas() { goto U3bgM; K6cqV: $data["\145\162\162\157\x72"] = "\x2d\55"; goto zTspV; WS1IF: foreach ($input as $d) { goto WQTwM; tDIMp: $update = $this->db->replace("\143\142\x74\137\x70\x65\x6e\147\141\167\x61\x73", $dataInsert); goto bZHx3; T2Ii0: $id_pengawas = $id_tp . $id_smt . $jadwal . $ruang . $sesi; goto FUQlt; t7YL1: vz1ue: goto JnW5L; JnW5L: qvmFC: goto QNoX5; s69tP: $sesi = $d->sesi; goto Gnj6_; bZHx3: if (!$update) { goto vz1ue; } goto PYKFi; WQTwM: $ruang = $d->ruang; goto s69tP; PYKFi: $updated++; goto t7YL1; FUQlt: $dataInsert = ["\151\144\x5f\x70\145\156\x67\x61\x77\x61\x73" => $id_pengawas, "\x69\144\x5f\x6a\x61\144\x77\x61\154" => $jadwal, "\151\x64\137\164\160" => $id_tp, "\151\144\137\x73\155\164" => $id_smt, "\151\144\x5f\162\x75\x61\156\x67" => $ruang, "\151\144\x5f\163\x65\163\151" => $sesi, "\x69\144\x5f\147\x75\162\165" => implode("\54", $d->guru)]; goto tDIMp; Gnj6_: $jadwal = $d->jadwal; goto T2Ii0; QNoX5: } goto Y731L; Y731L: Zn_ia: goto K6cqV; U3bgM: $input = json_decode($this->input->post("\x64\141\x74\x61", true)); goto YbcDD; LRJpK: $id_smt = $smt->id_smt; goto HTrRz; qd0L2: $id_tp = $tp->id_tp; goto LRJpK; zTspV: $data["\x73\x74\x61\x74\x75\163"] = $updated; goto I4EaE; HTrRz: $updated = 0; goto WS1IF; YbcDD: $tp = $this->dashboard->getTahunActive(); goto RfOTX; I4EaE: $this->output_json($data); goto dMQVh; RfOTX: $smt = $this->dashboard->getSemesterActive(); goto qd0L2; dMQVh: } }
