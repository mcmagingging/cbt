<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasjadwal extends CI_Controller { public function __construct() { goto E2F_5; C62CM: $this->load->model("\104\x61\x73\150\142\x6f\x61\x72\x64\x5f\155\157\144\x65\154", "\144\141\x73\150\142\157\x61\x72\x64"); goto KGtVu; S94vf: $this->load->model("\104\x72\x6f\x70\x64\x6f\x77\156\137\155\157\144\x65\154", "\144\x72\157\160\x64\157\167\156"); goto zNt9N; YC4CV: redirect("\141\165\164\x68"); goto hKfuv; hKfuv: rXWe1: goto Gz_N1; KGtVu: $this->load->model("\103\x62\x74\137\x6d\157\144\x65\154", "\143\x62\164"); goto PH9Pc; E2F_5: parent::__construct(); goto yfJER; KLgSj: $this->load->model("\x4d\x61\x73\164\x65\x72\x5f\155\x6f\144\145\154", "\155\141\163\164\145\162"); goto C62CM; PH9Pc: $this->load->model("\114\157\x67\x5f\155\x6f\144\145\x6c", "\154\157\147\x67\x69\156\x67"); goto khmTc; yfJER: if ($this->ion_auth->logged_in()) { goto rXWe1; } goto YC4CV; Gz_N1: $this->load->library(["\x64\x61\x74\x61\x74\x61\x62\154\145\x73", "\x66\x6f\x72\155\x5f\x76\x61\154\151\x64\x61\x74\x69\157\156"]); goto KLgSj; khmTc: $this->load->model("\113\x65\x6c\x61\x73\137\155\157\x64\145\x6c", "\x6b\145\154\x61\x73"); goto S94vf; zNt9N: $this->form_validation->set_error_delimiters('', ''); goto ueRG0; ueRG0: } public function output_json($data, $encode = true) { goto bMiRL; bMiRL: if (!$encode) { goto Ah7Cu; } goto ilMmg; s0Gt1: Ah7Cu: goto E2osK; E2osK: $this->output->set_content_type("\x61\x70\x70\x6c\151\143\141\x74\x69\157\x6e\x2f\152\x73\x6f\156")->set_output($data); goto HdKY6; ilMmg: $data = json_encode($data); goto s0Gt1; HdKY6: } public function index() { goto GDNsk; h9yOh: $this->load->view("\137\164\145\155\160\154\x61\164\x65\163\x2f\144\x61\163\x68\142\x6f\141\162\144\x2f\137\x66\157\x6f\x74\145\x72"); goto ptO3q; YhWx5: $this->load->view("\x6d\145\x6d\142\x65\162\x73\57\x67\x75\x72\x75\57\x6b\145\x6c\x61\x73\57\x6a\141\144\167\x61\154\57\x64\141\x74\x61"); goto qjmok; Llwfe: if ($this->ion_auth->is_admin()) { goto A59YW; } goto Hl7J3; hGLbf: goto BI5uC; goto eCF6T; owEOc: $data["\x70\162\157\146\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto hpKcn; gUo0P: $data["\x6a\x6d\154\115\x61\160\145\154"] = []; goto Llwfe; eCF6T: A59YW: goto owEOc; brNp4: $data["\164\160\137\x61\143\x74\151\x76\145"] = $tp; goto YYP0V; qjmok: $this->load->view("\x6d\x65\x6d\142\145\x72\163\57\x67\x75\x72\x75\x2f\x74\x65\155\x70\154\x61\164\x65\x73\57\x66\x6f\x6f\x74\145\x72"); goto JxWMh; eyNuo: $this->load->view("\155\145\x6d\142\145\x72\163\x2f\147\165\x72\x75\x2f\x74\145\155\160\x6c\x61\x74\x65\163\57\x68\x65\x61\x64\x65\162", $data); goto YhWx5; UoJzB: $data["\x6a\155\154\x49\x73\x74"] = []; goto gUo0P; DXthr: $data["\163\x6d\164\137\x61\x63\164\151\x76\x65"] = $smt; goto Bn9Au; ro8IW: t0OVv: goto Cb0ML; oneCg: $data["\x74\x70"] = $this->dashboard->getTahun(); goto brNp4; AzuwR: $this->load->view("\153\145\x6c\141\x73\x2f\x6a\x61\x64\167\x61\x6c\57\144\141\164\x61"); goto h9yOh; JxWMh: BI5uC: goto Zhz4i; Hl7J3: if ($this->ion_auth->in_group("\147\165\x72\x75")) { goto t0OVv; } goto hGLbf; PUs0V: $data["\147\x75\162\x75"] = $guru; goto eyNuo; ptO3q: goto BI5uC; goto ro8IW; pZUXX: $smt = $this->dashboard->getSemesterActive(); goto oneCg; YYP0V: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto DXthr; OH1ze: $data["\151\144\137\x6b\x65\x6c\x61\x73"] = "\x30"; goto DvG3C; GDNsk: $user = $this->ion_auth->user()->row(); goto J4in7; Bn9Au: $data["\x6b\x65\154\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto OH1ze; Cb0ML: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto PUs0V; J4in7: $data = ["\165\163\145\162" => $user, "\152\165\x64\165\154" => "\112\x61\x64\167\x61\154\40\x50\145\x6c\141\152\141\162\x61\x6e", "\x73\165\x62\x6a\165\x64\x75\x6c" => "\123\x65\164\x20\x4a\141\x64\x77\x61\154\x20\120\x65\154\x61\152\141\x72\141\156", "\x73\x65\164\x74\151\156\147" => $this->dashboard->getSetting()]; goto YO66c; hpKcn: $this->load->view("\x5f\164\x65\x6d\160\x6c\x61\164\x65\163\x2f\144\141\x73\150\142\x6f\x61\162\144\x2f\x5f\150\145\141\x64\145\x72", $data); goto AzuwR; DvG3C: $data["\x6d\x65\164\x68\157\x64"] = ''; goto UoJzB; YO66c: $tp = $this->dashboard->getTahunActive(); goto pZUXX; Zhz4i: } public function kelas($kelas) { goto TlVkt; KnHwe: $data = ["\x75\163\x65\162" => $user, "\152\165\144\x75\154" => "\112\x61\144\167\x61\x6c\40\x50\145\x6c\141\x6a\141\x72\141\156", "\163\x75\142\x6a\x75\144\x75\x6c" => "\123\x65\x74\40\112\x61\x64\167\x61\x6c\x20\120\145\154\141\152\x61\x72\x61\156", "\163\145\164\x74\151\156\147" => $setting]; goto LdLEv; XDR1g: $jadm = $this->kelas->getJadwalMapelGroupJam($tp->id_tp, $smt->id_smt, $kelas); goto uiIDJ; yrrHY: JSB7q: goto ZXuV7; yGLNf: $jadwal_mapel[] = ["\x6a\x61\144\x77\x61\154" => $this->kelas->getDummyJadwalMapel($tp->id_tp, $smt->id_smt, $i + 1, $kelas)]; goto RRh7k; H7ZPu: ppbjA: goto GdWXh; MbLrc: $data["\x74\160"] = $this->dashboard->getTahun(); goto bFBoZ; v0kaY: foreach ($jadm as $j) { $jadwal_mapel[] = ["\152\x61\x64\x77\x61\154" => $this->kelas->getJadwalMapelByHari($tp->id_tp, $smt->id_smt, $j->jam_ke, $kelas)]; P08VS: } goto x_JKJ; bFBoZ: $data["\x74\160\137\141\143\164\151\x76\145"] = $tp; goto zEPZs; PS862: if ($jadk == null) { goto N2O9e; } goto fe3OE; fe3OE: $data["\x6a\141\144\167\141\x6c\137\x6b\142\155"] = $jadk; goto dk5_T; QWinU: if ($this->ion_auth->is_admin()) { goto LxaJ2; } goto Yf0ik; gmUQz: N2O9e: goto DiSAs; GdWXh: if (!($i < $jml_mapel)) { goto vApLA; } goto yGLNf; EBxao: $data["\x70\x72\157\146\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto HFrkU; VL_6s: $this->load->view("\x6d\x65\x6d\142\145\162\x73\57\x67\165\x72\x75\x2f\x74\x65\x6d\x70\154\141\x74\x65\163\x2f\146\157\157\164\x65\162"); goto yrrHY; lhUoz: $this->load->view("\153\x65\x6c\x61\163\x2f\x6a\x61\144\167\x61\x6c\57\144\x61\x74\141"); goto LBLab; BOe4E: goto JSB7q; goto ywZmv; R2JCm: $data["\153\145\154\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto Y9Pus; kVyCf: $data["\163\x6d\x74\137\141\143\x74\151\x76\145"] = $smt; goto R2JCm; uiIDJ: $jml_mapel = $jadk == null ? 1 : $jadk->kbm_jml_mapel_hari; goto XGY68; FBufL: $i = 0; goto H7ZPu; x_JKJ: zvI35: goto AOmFT; H7yH2: vApLA: goto lZQwH; RRh7k: wzMSO: goto KDAJ0; TlVkt: $user = $this->ion_auth->user()->row(); goto w66jj; WRteO: goto ppbjA; goto H7yH2; Y9Pus: $jadk = $this->kelas->getJadwalKbm($tp->id_tp, $smt->id_smt, $kelas); goto PS862; E3Ixu: $data["\147\x75\162\x75"] = $this->dashboard->getDetailGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto B2YTh; HFrkU: $this->load->view("\x5f\164\x65\x6d\160\154\x61\x74\x65\x73\57\x64\141\x73\x68\x62\x6f\x61\162\x64\57\137\150\x65\x61\144\145\x72", $data); goto lhUoz; lZQwH: $data["\x6d\x65\x74\x68\157\x64"] = "\x61\144\x64"; goto VjY2H; LBLab: $this->load->view("\137\164\x65\x6d\x70\x6c\x61\x74\145\163\57\x64\x61\x73\x68\142\x6f\141\x72\144\x2f\137\x66\157\157\164\145\162"); goto BOe4E; xy530: yseG1: goto FBufL; WkZRf: $data["\x69\144\x5f\x6b\145\x6c\141\163"] = $kelas; goto XDR1g; ywZmv: OI1K3: goto E3Ixu; MQRf9: V5rkg: goto WkZRf; CqWCE: $data["\152\141\x64\x77\x61\154\137\x6d\141\160\145\x6c"] = $jadwal_mapel; goto h6YvZ; VjY2H: omnKo: goto CqWCE; pdtzm: $this->load->view("\x6d\145\155\142\145\162\x73\x2f\x67\x75\162\x75\x2f\x6b\x65\x6c\141\x73\x2f\x6a\141\144\x77\141\x6c\57\x64\141\x74\141"); goto VL_6s; KDAJ0: $i++; goto WRteO; B2YTh: $this->load->view("\x6d\x65\155\x62\145\x72\x73\57\x67\x75\162\165\57\164\145\155\x70\154\141\164\145\163\x2f\150\x65\x61\144\x65\162", $data); goto pdtzm; h6YvZ: $data["\x6d\x61\x70\145\154\x73"] = $this->dropdown->getAllKodeMapel(); goto QWinU; AOmFT: $data["\x6d\145\x74\x68\x6f\x64"] = "\x65\144\x69\x74"; goto GR0gz; w66jj: $setting = $this->dashboard->getSetting(); goto KnHwe; lGvfW: goto JSB7q; goto h4eBm; GR0gz: goto omnKo; goto xy530; Tp08C: $smt = $this->dashboard->getSemesterActive(); goto MbLrc; XGY68: if ($jadm == null) { goto yseG1; } goto v0kaY; DiSAs: $data["\x6a\x61\x64\167\x61\x6c\137\153\x62\x6d"] = json_decode(json_encode(["\x69\x64\x5f\164\160" => $tp->tahun, "\151\144\x5f\x73\155\164" => $smt->smt, "\x69\144\137\x6b\145\x6c\x61\x73" => $kelas, "\x6b\x62\x6d\137\152\141\155\x5f\x70\x65\154" => '', "\153\142\155\137\152\x61\155\x5f\155\165\154\x61\x69" => '', "\x6b\x62\155\137\152\x6d\154\x5f\155\x61\160\x65\x6c\x5f\150\x61\162\151" => '', "\x69\163\164\151\x72\141\150\x61\x74" => serialize([]), "\141\x64\141" => false])); goto MQRf9; LdLEv: $tp = $this->dashboard->getTahunActive(); goto Tp08C; zEPZs: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto kVyCf; Yf0ik: if ($this->ion_auth->in_group("\147\165\162\165")) { goto OI1K3; } goto lGvfW; dk5_T: goto V5rkg; goto gmUQz; h4eBm: LxaJ2: goto EBxao; ZXuV7: } public function setJadwal() { goto bEueX; Oamf1: $i = 1; goto PFDEQ; mXf21: $i++; goto IYjxk; Was3N: $update = $this->db->replace("\153\x65\x6c\141\163\x5f\x6a\x61\x64\167\x61\x6c\x5f\x6b\x62\x6d", $insert); goto qKgSQ; uvxdr: if (!$jamke) { goto DNweG; } goto g_v6y; WRveB: $id_tp = $this->master->getTahunActive()->id_tp; goto NghJb; Lk1V9: $durasi = $this->input->post("\x64\165\162\137\x69\x73\164" . $i, true); goto uvxdr; nwXrj: if (!($i < 5)) { goto bYRWs; } goto KiuFF; bPkAy: T7O3N: goto mXf21; Wn6tb: $insert = ["\x69\144\x5f\x6b\x62\155" => $id_tp . $id_smt . $id_kelas, "\151\144\x5f\x74\160" => $id_tp, "\x69\144\x5f\x73\155\x74" => $id_smt, "\151\x64\137\x6b\145\x6c\141\163" => $id_kelas, "\x6b\142\x6d\137\152\141\155\x5f\160\145\154" => $this->input->post("\x6a\x61\x6d\x5f\155\141\160\x65\x6c", true), "\x6b\142\155\137\152\141\155\x5f\155\x75\x6c\141\x69" => $this->input->post("\152\141\155\x5f\155\165\154\141\151", true), "\153\142\155\137\x6a\x6d\154\x5f\x6d\x61\x70\x65\154\x5f\x68\x61\x72\151" => $this->input->post("\152\x6d\x6c\x5f\155\141\160\x65\x6c", true), "\x69\163\164\x69\x72\141\150\x61\x74" => serialize($istirahat)]; goto Was3N; IYjxk: goto LAQ2V; goto Wgwwv; KiuFF: $jamke = $this->input->post("\x69\x73\x74" . $i, true); goto Lk1V9; PFDEQ: LAQ2V: goto nwXrj; urfen: $this->output_json($data); goto c6Cyd; PiIZk: $id_kelas = $this->input->post("\151\144\137\153\145\154\141\163", true); goto Wn6tb; NghJb: $id_smt = $this->master->getSemesterActive()->id_smt; goto PiIZk; qKgSQ: $this->logging->saveLog(3, "\155\x65\x72\x75\142\141\x68\40\152\x61\x64\x77\x61\x6c\x20\160\145\x6c\x61\152\x61\x72\141\x6e"); goto a7bTt; a7bTt: $data["\x73\x74\x61\164\x75\163"] = $update; goto urfen; g_v6y: $istirahat[] = ["\151\x73\164" => $jamke, "\x64\x75\162" => $durasi]; goto WKZF8; Wgwwv: bYRWs: goto WRveB; WKZF8: DNweG: goto bPkAy; bEueX: $istirahat = []; goto Oamf1; c6Cyd: } public function setMapel() { goto lVHtQ; wzgjc: $this->db->delete("\x6b\145\154\141\x73\x5f\x6a\x61\144\167\x61\x6c\137\155\141\x70\145\154"); goto YJ44Y; BWqE5: $array = array("\151\144\137\164\x70" => $input[0]->id_tp, "\151\144\137\163\155\164" => $input[0]->id_smt, "\x69\144\x5f\153\x65\x6c\x61\x73" => $id_kelas); goto LQJEb; mp0Xp: foreach ($input as $d) { $data[] = ["\x69\144\137\152\x61\x64\x77\x61\x6c" => $d->id_tp . $d->id_smt . $id_kelas . $d->id_hari . $d->jam_ke, "\151\144\137\x74\x70" => $d->id_tp, "\151\x64\x5f\x73\x6d\164" => $d->id_smt, "\x69\144\137\153\145\x6c\141\x73" => $id_kelas, "\151\x64\137\150\141\x72\x69" => $d->id_hari, "\152\141\x6d\137\153\x65" => $d->jam_ke, "\151\144\137\155\x61\x70\145\154" => $d->id_mapel]; OYlSd: } goto yyWeR; yyWeR: ogB6F: goto j34Kx; RHXAx: $id_kelas = $this->input->post("\x69\x64\x5f\x6b\145\x6c\x61\x73", true); goto BWqE5; lVHtQ: $input = json_decode($this->input->post("\x64\141\x74\141", true)); goto RHXAx; YJ44Y: $data = []; goto mp0Xp; LQJEb: $this->db->where($array); goto wzgjc; ajAX1: $this->output_json($res); goto wF0vL; mThHf: $res["\163\164\141\164\x75\x73"] = $update; goto ajAX1; j34Kx: $update = $this->db->insert_batch("\153\145\x6c\x61\163\137\152\141\144\x77\x61\x6c\137\155\x61\160\145\x6c", $data); goto mThHf; wF0vL: } }
