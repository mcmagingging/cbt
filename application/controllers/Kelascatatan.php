<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelascatatan extends CI_Controller { public function __construct() { goto DGoiv; v2xgK: $this->form_validation->set_error_delimiters('', ''); goto rosYq; ouGST: goto z6A42; goto ZOQDd; tD0h0: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\162\x75"))) { goto vMPku; } goto xTyT1; xTyT1: show_error("\110\x61\156\x79\141\40\x41\x64\x6d\x69\156\151\163\164\162\x61\164\157\x72\x20\x79\141\156\147\x20\x64\x69\142\x65\162\151\40\x68\x61\x6b\40\x75\156\164\x75\153\40\x6d\145\156\x67\x61\153\x73\145\163\40\x68\x61\x6c\141\x6d\141\156\x20\151\156\151\x2c\40\74\141\40\x68\162\145\x66\x3d\x22" . base_url("\144\141\163\x68\142\157\x61\x72\144") . "\x22\76\113\x65\155\142\141\x6c\151\40\153\145\40\155\145\x6e\x75\40\x61\167\x61\x6c\74\57\x61\x3e", 403, "\x41\153\163\145\163\40\124\x65\x72\154\x61\x72\141\156\147"); goto xTUHc; ZOQDd: w9w1s: goto tdaW2; tsr4y: $this->load->library(["\x64\141\164\141\164\x61\142\x6c\x65\163", "\146\x6f\162\x6d\x5f\166\x61\x6c\151\144\x61\164\151\157\156"]); goto Mp9ZH; Mp9ZH: $this->load->model("\115\141\163\x74\x65\x72\137\x6d\x6f\144\x65\x6c", "\155\x61\x73\x74\x65\162"); goto GUw9X; RYBWm: $this->load->model("\104\x72\x6f\160\x64\157\167\156\137\x6d\x6f\144\145\154", "\x64\162\x6f\x70\144\157\167\x6e"); goto MbGom; ZYkDh: z6A42: goto tsr4y; tdaW2: redirect("\141\165\x74\x68"); goto ZYkDh; xTUHc: vMPku: goto ouGST; MbGom: $this->load->model("\113\x65\154\x61\163\x5f\x6d\x6f\x64\145\154", "\153\x65\154\x61\x73"); goto v2xgK; GUw9X: $this->load->model("\x44\x61\x73\150\142\157\x61\162\144\x5f\155\157\144\x65\154", "\144\x61\x73\150\x62\x6f\x61\162\144"); goto RYBWm; VNnKX: if (!$this->ion_auth->logged_in()) { goto w9w1s; } goto tD0h0; DGoiv: parent::__construct(); goto VNnKX; rosYq: } public function output_json($data, $encode = true) { goto MWu0t; rcZIZ: $this->output->set_content_type("\141\160\160\154\x69\143\141\164\151\x6f\156\57\x6a\x73\x6f\x6e")->set_output($data); goto NLCMX; MWu0t: if (!$encode) { goto ch53g; } goto yvzyn; yvzyn: $data = json_encode($data); goto xQO2P; xQO2P: ch53g: goto rcZIZ; NLCMX: } public function index() { goto KvakR; Xd8N9: $arrKelas = []; goto s37nI; CSM9J: $data["\143\x61\x74\x5f\153\145\154\x61\x73"] = $cat_kelas; goto soXk0; P9ouU: $smt = $this->dashboard->getSemesterActive(); goto LIh05; HHri5: $this->load->view("\137\164\x65\155\160\154\141\164\x65\x73\57\x64\x61\x73\x68\x62\157\141\162\x64\x2f\x5f\x68\145\141\144\145\x72", $data); goto rzMl0; lJ0BM: foreach ($cat_kelas as $ck) { $ck->reading = unserialize($ck->reading); LxTsu: } goto tulR3; rFeSO: $id_mapel = $this->input->get("\x6d\141\x70\145\154", true); goto iBaRd; eAIHv: $this->load->view("\155\x65\155\142\145\162\x73\x2f\147\165\x72\165\57\x74\145\x6d\x70\x6c\x61\164\145\x73\x2f\146\x6f\157\x74\x65\x72"); goto OeiNL; hsFJi: $data["\x6d\141\x70\x65\154"] = $this->dropdown->getAllMapel(); goto YbdnW; Vhd_W: $this->load->view("\x6d\x65\155\142\145\162\x73\x2f\147\x75\162\165\x2f\x6b\145\154\x61\x73\x2f\x63\141\164\x61\x74\141\156\57\x64\141\164\x61"); goto eAIHv; tJ3O0: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto BU9PJ; DI2fu: $data["\x73\155\164\137\x61\143\164\151\x76\x65"] = $smt; goto lSGtf; SPsoE: if ($this->ion_auth->is_admin()) { goto c_VX4; } goto tJ3O0; QvrXL: $data["\160\162\x6f\146\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto hsFJi; mSzoW: foreach ($mapel as $m) { goto aaMma; pkMgT: xGZTA: goto wC7uH; aaMma: $arrMapel[$m->id_mapel] = $m->nama_mapel; goto o3YvQ; jPH2S: Hk5Xi: goto pkMgT; o3YvQ: foreach ($m->kelas_mapel as $kls_mapel) { goto fIVew; ToxjF: vEfs9: goto UX5T9; fIVew: foreach ($kelasses as $key => $kelass) { goto L2Dzi; b5fU2: $arrKelas[$m->id_mapel][$key] = $kelass; goto hwBT7; hwBT7: k9QfG: goto lhZxS; lhZxS: riZje: goto fLgwV; L2Dzi: if (!($kls_mapel->kelas == $key)) { goto k9QfG; } goto b5fU2; fLgwV: } goto ToxjF; UX5T9: lpUpC: goto OfGzZ; OfGzZ: } goto jPH2S; wC7uH: } goto ErHiJ; M83at: $tp = $this->dashboard->getTahunActive(); goto P9ouU; jMP1V: $data["\151\144\x5f\x67\165\162\x75"] = $guru->id_guru; goto ie29o; cgbYO: $data = ["\165\x73\x65\x72" => $user, "\x6a\x75\x64\165\x6c" => "\x43\x61\164\x61\x74\141\156\x20\107\x75\x72\165", "\163\x75\142\x6a\165\x64\x75\x6c" => "\103\141\164\x61\x74\x61\156\40\x53\145\x6c\141\x6d\141\x20\x50\x65\155\x62\x65\x6c\141\152\141\162\141\156", "\x73\145\164\x74\x69\x6e\x67" => $setting]; goto M83at; GWKgZ: LahUf: goto taH2w; YxPek: if (!($mapel != null)) { goto LahUf; } goto M2ua6; ys7aF: $kelasses = $this->dropdown->getAllKelasByArrayId($tp->id_tp, $smt->id_smt, $arrId); goto XgH50; gtmEL: $cat_kelas = $this->kelas->getCatatanMapelKelas($id_kelas, $id_mapel, $tp->id_tp, $smt->id_smt); goto lJ0BM; ErHiJ: a8no1: goto Yap5Q; tulR3: poCfv: goto CSM9J; pcSLy: fibQM: goto GWKgZ; OeiNL: goto kZ2ID; goto nrCb3; XgH50: uLp4n: goto P_6Jt; KvakR: $user = $this->ion_auth->user()->row(); goto Z4SPf; sVnnt: if (!(count($arrId) > 0)) { goto uLp4n; } goto ys7aF; erall: iGjHD: goto SPsoE; LIh05: $data["\164\x70"] = $this->dashboard->getTahun(); goto oTx50; ie29o: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto HWcCT; jUQ_w: if (!($id_kelas != null)) { goto iGjHD; } goto gtmEL; oTx50: $data["\x74\x70\x5f\x61\143\x74\x69\166\145"] = $tp; goto Uarjs; hkqFK: $this->load->view("\155\x65\155\142\x65\162\x73\x2f\x67\x75\x72\165\x2f\x74\x65\x6d\x70\154\141\x74\145\163\x2f\x68\x65\x61\x64\x65\x72", $data); goto Vhd_W; wl26i: $data["\155\141\160\145\x6c"] = $arrMapel; goto VuDGJ; HWcCT: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto WLAql; TCLXx: $data["\155\141\160\x65\x6c\137\x73\145\154\x65\143\164\x65\144"] = $id_mapel; goto jUQ_w; lSGtf: $id_kelas = $this->input->get("\x6b\145\154\x61\x73", true); goto rFeSO; Wxdfa: $this->load->view("\x5f\164\x65\x6d\160\154\141\x74\x65\163\57\144\x61\x73\x68\x62\157\x61\162\x64\x2f\137\146\157\x6f\164\x65\162"); goto HFYUt; rzMl0: $this->load->view("\155\x65\x6d\142\145\162\x73\x2f\147\x75\x72\165\x2f\153\145\154\141\x73\x2f\143\x61\x74\141\x74\x61\156\x2f\x64\x61\164\141"); goto Wxdfa; BU9PJ: $data["\x67\165\x72\165"] = $guru; goto jMP1V; nrCb3: c_VX4: goto QvrXL; Uarjs: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto DI2fu; WLAql: $arrId = []; goto YxPek; soXk0: $data["\x63\141\x74\137\163\151\163\167\x61"] = $this->kelas->getCatatanMapelSiswa($tp->id_tp, $smt->id_smt, $id_kelas, $id_mapel); goto erall; M2ua6: foreach ($mapel as $mpl) { goto imigh; imigh: foreach ($mpl->kelas_mapel as $id_mapel) { array_push($arrId, $id_mapel->kelas); zLMNt: } goto lzOSa; tftFL: YqTL7: goto nXNvy; lzOSa: IGCbw: goto tftFL; nXNvy: } goto pcSLy; HFYUt: kZ2ID: goto LdMbX; s37nI: if (!($mapel != null)) { goto a9irA; } goto mSzoW; YbdnW: $data["\x6b\x65\154\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto HHri5; P_6Jt: $arrMapel = []; goto Xd8N9; Yap5Q: a9irA: goto wl26i; Z4SPf: $setting = $this->dashboard->getSetting(); goto cgbYO; VuDGJ: $data["\x6b\x65\x6c\x61\x73"] = $arrKelas; goto hkqFK; taH2w: $kelasses = []; goto sVnnt; iBaRd: $data["\153\145\x6c\141\x73\x5f\163\145\154\145\143\164\x65\x64"] = $id_kelas; goto TCLXx; LdMbX: } public function siswa() { goto TvBRI; tlPaI: $id_kelas = $this->input->get("\153\145\154\141\x73"); goto VzOB7; hoEIi: $this->load->view("\137\164\x65\155\160\x6c\141\164\145\163\x2f\x64\x61\163\150\x62\157\x61\162\144\57\x5f\150\x65\141\144\x65\x72", $data); goto o9UHQ; XR1vc: $data = ["\165\163\145\162" => $user, "\x6a\165\x64\x75\154" => "\x43\x61\164\x61\164\141\156\40\123\151\163\167\x61", "\x73\x75\142\x6a\x75\x64\165\x6c" => "\x43\x61\164\141\x74\141\156\40\x53\x69\163\x77\141", "\163\145\x74\x74\151\156\147" => $this->dashboard->getSetting()]; goto piKgi; Q10Av: $data["\x67\165\162\165"] = $guru; goto ZkPs5; TEAOt: PAX9M: goto kerC8; AXMQd: $data["\x6b\145\x6c\x61\163"] = $id_kelas; goto zc20b; H53UO: goto PAX9M; goto y0c_p; xgMmx: $data["\x6d\141\160\x65\x6c"] = $id_mapel; goto AXMQd; GmOnY: $this->load->view("\155\145\155\x62\x65\162\x73\x2f\x67\165\x72\x75\x2f\x74\145\x6d\x70\x6c\x61\164\x65\x73\57\146\x6f\x6f\x74\x65\162"); goto H53UO; o9UHQ: $this->load->view("\x6d\145\x6d\142\145\162\x73\57\x67\x75\162\x75\x2f\153\x65\154\141\x73\57\x63\141\164\x61\x74\141\x6e\57\x70\145\x72\x73\151\x73\167\141"); goto ubkP2; bc8Rk: $this->load->view("\x6d\145\x6d\x62\x65\x72\163\x2f\147\x75\x72\165\x2f\153\145\x6c\141\163\57\x63\141\164\x61\x74\141\156\x2f\160\x65\162\x73\x69\x73\x77\x61"); goto GmOnY; R2GW9: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto Q10Av; TvBRI: $id_siswa = $this->input->get("\151\144"); goto WWlti; zc20b: if ($this->ion_auth->is_admin()) { goto x4O1Z; } goto R2GW9; tvY4l: $data["\164\x70"] = $this->dashboard->getTahun(); goto WBRPq; VzOB7: $user = $this->ion_auth->user()->row(); goto XR1vc; y0c_p: x4O1Z: goto Srjq1; Jdek9: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto FJO4Q; F14Ok: $data["\143\141\164\141\164\x61\156\x5f\163\151\x73\167\141"] = $this->kelas->getAllCatatanMapelSiswa($id_siswa, $id_mapel, $tp->id_tp, $smt->id_smt); goto xgMmx; ZkPs5: $this->load->view("\x6d\x65\155\x62\x65\162\163\x2f\147\x75\162\165\57\x74\x65\x6d\x70\154\x61\x74\145\163\57\x68\145\x61\144\x65\162", $data); goto bc8Rk; FJO4Q: $data["\163\155\164\x5f\x61\143\164\151\166\145"] = $smt; goto N1BF9; YYTdE: $smt = $this->master->getSemesterActive(); goto tvY4l; piKgi: $tp = $this->master->getTahunActive(); goto YYTdE; Srjq1: $data["\x70\162\x6f\x66\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto hoEIi; ubkP2: $this->load->view("\137\164\x65\155\160\x6c\141\x74\145\163\57\144\141\x73\x68\x62\x6f\141\162\x64\57\x5f\146\157\157\x74\145\162"); goto TEAOt; N1BF9: $data["\163\x69\x73\x77\x61"] = $this->master->getSiswaById($id_siswa); goto F14Ok; WBRPq: $data["\x74\x70\137\x61\x63\164\x69\166\x65"] = $tp; goto Jdek9; WWlti: $id_mapel = $this->input->get("\x6d\141\160\145\x6c"); goto tlPaI; kerC8: } public function saveCatatanKelas() { goto FK60D; xiGxl: $text = $this->input->post("\164\145\170\164", true); goto MXrgu; FK60D: $tp = $this->dashboard->getTahunActive(); goto Znbwj; QqGcs: $id_kelas = $this->input->post("\151\144\x5f\153\145\x6c\141\163"); goto Qg1ek; a7MDj: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto QqGcs; aqjOi: $data = ["\x69\144\x5f\x74\160" => $tp->id_tp, "\151\x64\x5f\x73\x6d\164" => $smt->id_smt, "\x74\x79\160\145" => "\x31", "\x69\x64\137\155\x61\160\x65\154" => $id_mapel, "\151\144\x5f\x6b\x65\x6c\x61\x73" => $id_kelas, "\x69\x64\x5f\x67\165\162\165" => $guru->id_guru, "\154\x65\166\145\154" => $level, "\164\145\x78\164" => $text, "\162\x65\141\144\x69\x6e\x67" => serialize([])]; goto Ogpu1; MpmHJ: $user = $this->ion_auth->user()->row(); goto a7MDj; MXrgu: $level = $this->input->post("\154\x65\x76\x65\154", true); goto wYLTR; Qg1ek: $id_mapel = $this->input->post("\x69\144\137\x6d\141\160\x65\154", true); goto xiGxl; wYLTR: $tgl = date("\x59\x2d\x6d\55\x64"); goto aqjOi; Znbwj: $smt = $this->dashboard->getSemesterActive(); goto MpmHJ; Ogpu1: $insert = $this->master->create("\x6b\145\154\141\x73\x5f\143\141\164\x61\164\x61\156\137\155\141\160\145\x6c", $data); goto fosmV; fosmV: $this->output_json($insert); goto RFHB0; RFHB0: } public function saveCatatanSiswa() { goto w8y4j; n5S6M: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto pcA2U; lQeMs: $level = $this->input->post("\154\145\166\145\x6c", true); goto ODvj3; pcA2U: $id_siswa = $this->input->post("\x69\144\x5f\163\151\163\x77\x61"); goto mgIwZ; ODvj3: $data = ["\x69\144\137\164\x70" => $tp->id_tp, "\151\x64\x5f\163\x6d\x74" => $smt->id_smt, "\164\x79\x70\145" => "\62", "\151\144\137\x6d\141\160\145\154" => $id_mapel, "\151\x64\x5f\163\x69\163\x77\x61" => $id_siswa, "\x69\144\x5f\x67\165\x72\165" => $guru->id_guru, "\154\x65\x76\145\154" => $level, "\x74\145\x78\x74" => $text, "\x72\145\141\x64\151\x6e\147" => serialize([])]; goto bvs4b; gPxQC: $this->output_json($insert); goto WXCiA; OFpLS: $smt = $this->dashboard->getSemesterActive(); goto ujMdX; ujMdX: $user = $this->ion_auth->user()->row(); goto n5S6M; bvs4b: $insert = $this->master->create("\153\145\x6c\x61\x73\x5f\x63\141\x74\x61\x74\141\x6e\137\155\141\x70\145\x6c", $data); goto gPxQC; w8y4j: $tp = $this->dashboard->getTahunActive(); goto OFpLS; uSZmF: $text = $this->input->post("\164\145\x78\164", true); goto lQeMs; mgIwZ: $id_mapel = $this->input->post("\151\144\137\155\141\x70\x65\154", true); goto uSZmF; WXCiA: } public function hapus($id_catatan) { $delete = $this->master->delete("\153\x65\x6c\141\163\137\143\x61\164\141\164\x61\156\x5f\155\x61\160\145\154", $id_catatan, "\151\144\x5f\143\141\164\141\164\141\156"); $this->output_json($delete); } }
