<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtalokasi extends CI_Controller { public function __construct() { goto TSSXY; TSSXY: parent::__construct(); goto n2d83; O2Ixs: $this->load->model("\x43\142\x74\137\x6d\157\x64\x65\x6c", "\x63\x62\164"); goto Mn0Sz; L2JkW: CQaLn: goto H8SbW; m1nCd: goto CQaLn; goto IpkhW; IpkhW: P4aMA: goto ggqXU; Mn0Sz: $this->load->model("\x4c\x6f\x67\137\155\157\144\x65\154", "\x6c\157\x67\147\151\156\x67"); goto nk1fP; IY4gL: $this->load->model("\104\141\163\150\142\157\x61\x72\144\137\155\x6f\x64\145\154", "\144\x61\x73\x68\x62\x6f\141\x72\144"); goto O2Ixs; bTFH4: VRTt4: goto m1nCd; psr2l: $this->load->model("\x4d\x61\x73\164\145\162\x5f\x6d\x6f\x64\x65\154", "\155\141\x73\x74\x65\162"); goto IY4gL; nk1fP: $this->load->model("\104\162\157\160\x64\157\167\156\x5f\x6d\x6f\x64\x65\x6c", "\144\x72\157\160\144\157\x77\x6e"); goto XwuUh; lzNLN: if ($this->ion_auth->is_admin()) { goto VRTt4; } goto ksMwb; XwuUh: $this->form_validation->set_error_delimiters('', ''); goto mxhxz; H8SbW: $this->load->library(["\x64\x61\x74\x61\x74\x61\x62\154\145\x73", "\x66\x6f\162\155\137\166\x61\154\x69\x64\141\x74\x69\157\156"]); goto psr2l; ksMwb: show_error("\x48\x61\x6e\171\x61\40\x41\144\155\151\x6e\x69\163\x74\x72\141\164\x6f\162\40\171\x61\156\147\40\x64\x69\142\x65\162\151\x20\150\141\x6b\40\x75\156\164\x75\x6b\40\x6d\x65\x6e\x67\x61\153\163\x65\x73\x20\x68\141\154\141\x6d\x61\156\x20\151\x6e\x69\x2c\40\x3c\141\40\x68\162\x65\x66\75\x22" . base_url("\x64\x61\163\x68\x62\157\141\162\x64") . "\x22\x3e\113\145\155\142\x61\154\x69\x20\153\x65\40\155\145\x6e\165\40\x61\x77\141\154\74\57\141\76", 403, "\x41\153\x73\x65\x73\40\x54\145\x72\x6c\141\x72\x61\x6e\x67"); goto bTFH4; n2d83: if (!$this->ion_auth->logged_in()) { goto P4aMA; } goto lzNLN; ggqXU: redirect("\x61\x75\x74\150"); goto L2JkW; mxhxz: } public function output_json($data, $encode = true) { goto gWuiL; bZQIa: $this->output->set_content_type("\141\x70\x70\154\x69\143\x61\x74\x69\x6f\x6e\x2f\x6a\x73\x6f\156")->set_output($data); goto PztFp; iLlji: A0qGD: goto bZQIa; gWuiL: if (!$encode) { goto A0qGD; } goto RNZ5g; RNZ5g: $data = json_encode($data); goto iLlji; PztFp: } public function index() { goto VRLfb; EkcYV: $smt = $this->dashboard->getSemesterActive(); goto cwFm5; y33XI: $data["\144\141\162\x69\x5f\x73\x65\154\145\x63\x74\145\x64"] = $dari_selected; goto OvxXw; FYN1F: $data["\x6c\x65\166\145\154\137\163\x65\x6c\145\143\x74\x65\x64"] = $level_selected; goto idZX6; aXnXs: if ($setting->jenjang == "\62") { goto iHAHT; } goto UStqx; jKHx_: foreach ($id_jenis as $jenis) { array_push($ids, $jenis->id_jenis); WLeTw: } goto JmPI3; JmPI3: WDiih: goto JeLSi; RbzmN: $this->load->view("\143\x62\164\x2f\141\154\x6f\153\x61\163\151\57\144\141\x74\141"); goto k6l9a; gkEm0: UhCRR: goto Hhg4r; ZJ2lm: $levels = ["\x30" => "\x50\151\x6c\151\150\x20\114\145\166\x65\x6c", "\67" => "\x37", "\70" => "\x38", "\71" => "\x39"]; goto ptsNH; ls3TC: goto UwmbQ; goto pMpeK; RSDTY: $data["\164\x70\x5f\x61\143\x74\151\x76\x65"] = $tp; goto HhlUs; yDBdP: if (!($jenis_selected != null && $level_selected != null)) { goto KV911; } goto NwsVW; VRLfb: $user = $this->ion_auth->user()->row(); goto sJXgZ; iCPHF: $id_jenis = $this->cbt->getDistinctJenisJadwal($tp->id_tp, $smt->id_smt); goto ScAZx; yunow: $this->load->view("\137\x74\145\x6d\160\x6c\x61\164\x65\163\x2f\x64\141\163\x68\142\x6f\x61\x72\144\57\x5f\150\x65\141\x64\x65\x72", $data); goto RbzmN; ZeMnc: $level_selected = $this->input->get("\154\145\166\145\154", true); goto lT3Z6; vwb7x: UwmbQ: goto q9zJZ; ScAZx: $ids = []; goto Jq2Lb; QyFEY: $data["\152\x65\156\151\x73"] = ['' => "\142\x65\x6c\165\155\x20\141\x64\141\x20\x6a\x61\x64\167\141\154\x20\165\152\151\141\x6e"]; goto RUHNA; OvxXw: $data["\163\141\x6d\160\141\x69\x5f\163\145\x6c\145\x63\x74\x65\x64"] = $sampai_selected; goto c3HX0; POIq_: goto UwmbQ; goto CVWPI; q9zJZ: $data["\154\x65\x76\x65\154\x73"] = $levels; goto Nc9R6; J6yzx: YM0Wy: goto fpFRD; JeLSi: dBNRD: goto MN5_e; Hhg4r: $data["\152\141\144\167\141\154\x73"] = $jadwals; goto wI0sG; pCCZC: $data = ["\165\163\x65\162" => $user, "\x6a\165\x64\165\154" => "\101\x6c\157\x6b\141\163\151\x20\127\141\153\164\165", "\163\165\142\152\x75\x64\x75\x6c" => "\101\x6c\x6f\x6b\141\x73\x69\x20\127\141\153\x74\x75\40\x55\152\151\x61\x6e", "\x73\145\x74\x74\x69\x6e\147" => $setting]; goto mdXGn; lT3Z6: $filter_selected = $this->input->get("\x66\x69\154\x74\x65\162", true); goto bn5Ga; Y2Yeh: $data["\x6a\145\156\x69\163\x5f\x73\145\154\145\x63\x74\x65\144"] = $jenis_selected; goto FYN1F; k6l9a: $this->load->view("\137\x74\x65\x6d\x70\x6c\141\164\145\x73\57\x64\141\163\x68\x62\x6f\x61\162\144\57\x5f\x66\x6f\x6f\x74\x65\x72"); goto roQuJ; FcljQ: kCqxA: goto amT9o; mdXGn: $tp = $this->dashboard->getTahunActive(); goto EkcYV; LvUPe: $data["\x66\x69\x6c\164\x65\x72"] = ["\x30" => "\123\x65\155\165\x61", "\x31" => "\124\x61\x6e\x67\x67\x61\x6c"]; goto Y2Yeh; vdQg2: $levels = []; goto YCwmx; fpFRD: $levels = ["\60" => "\x50\151\154\151\x68\x20\114\x65\x76\145\x6c", "\61\60" => "\x31\x30", "\61\x31" => "\x31\61", "\x31\x32" => "\x31\62"]; goto vwb7x; xbc2e: $sampai_selected = $this->input->get("\163\x61\x6d\x70\x61\x69", true); goto LvUPe; cwFm5: $data["\x74\x70"] = $this->dashboard->getTahun(); goto RSDTY; QAsC_: $levels = ["\60" => "\x50\151\x6c\x69\150\x20\114\x65\166\145\154", "\61" => "\61", "\x32" => "\62", "\x33" => "\63", "\x34" => "\x34", "\65" => "\x35", "\66" => "\x36"]; goto ls3TC; wI0sG: $data["\160\x72\x6f\146\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto yunow; CVWPI: b66BS: goto QAsC_; NwsVW: $jadwals = $this->cbt->getJadwalByJenis($jenis_selected, $level_selected, $dari_selected, $sampai_selected); goto TCbTZ; c3HX0: $jadwals = []; goto yDBdP; bn5Ga: $dari_selected = $this->input->get("\144\x61\162\x69", true); goto xbc2e; rlaAB: $data["\x72\165\x61\156\x67"] = $this->dropdown->getAllRuang(); goto vdQg2; YU59z: $data["\x6b\x65\154\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto rlaAB; sJXgZ: $setting = $this->dashboard->getSetting(); goto pCCZC; TCbTZ: KV911: goto YU59z; HhlUs: $data["\163\155\164"] = $this->dashboard->getSemester(); goto nwvFa; i5XHh: foreach ($jadwals as $key => $row) { goto QqUTd; Xtk7_: zjrMl: goto x139R; QqUTd: if (isset($ret[$row->tgl_mulai])) { goto fMvAV; } goto Kq_aL; jqm2G: array_push($ret[$row->tgl_mulai], $row); goto Xtk7_; Vz2TA: array_push($ret[$row->tgl_mulai], $row); goto tQttP; Kq_aL: $ret[$row->tgl_mulai] = []; goto Vz2TA; nErl8: fMvAV: goto jqm2G; x139R: nRsl5: goto cWhZN; tQttP: goto zjrMl; goto nErl8; cWhZN: } goto gkEm0; MN5_e: if (count($ids) > 0) { goto q3aFU; } goto QyFEY; pMpeK: iHAHT: goto ZJ2lm; RUHNA: goto kCqxA; goto IOHUg; ptsNH: goto UwmbQ; goto J6yzx; amT9o: $jenis_selected = $this->input->get("\152\145\x6e\151\163", true); goto ZeMnc; qQK0M: $data["\x6a\145\x6e\151\x73"] = $this->cbt->getAllJenisUjianByArrJenis($ids); goto FcljQ; nwvFa: $data["\163\x6d\x74\x5f\x61\x63\x74\151\166\145"] = $smt; goto iCPHF; idZX6: $data["\146\x69\154\x74\145\x72\137\163\x65\154\x65\143\x74\x65\x64"] = $filter_selected; goto y33XI; UStqx: if ($setting->jenjang == "\x33") { goto YM0Wy; } goto POIq_; IOHUg: q3aFU: goto qQK0M; YCwmx: if ($setting->jenjang == "\x31") { goto b66BS; } goto aXnXs; Jq2Lb: if (!(count($id_jenis) > 0)) { goto dBNRD; } goto jKHx_; Nc9R6: $ret = []; goto i5XHh; roQuJ: } public function saveAlokasi() { goto EWbEs; Ubuje: $update = $this->db->update_batch("\x63\142\164\x5f\152\141\x64\167\141\154", $insert, "\x69\x64\137\152\141\x64\167\141\x6c"); goto wwtNT; aMpAZ: $insert = []; goto kpbtf; kpbtf: foreach ($input as $d) { goto D6gqu; weMX_: array_push($insert, ["\x69\x64\137\152\x61\144\x77\141\x6c" => $d->id_jadwal, "\152\141\x6d\x5f\153\145" => $d->jam_ke]); goto xoNgY; B5NcW: rZjFY: goto Bm0wP; D6gqu: if (!($d->id_jadwal != "\x30")) { goto keDza; } goto weMX_; xoNgY: keDza: goto B5NcW; Bm0wP: } goto uxckU; uxckU: rn9iO: goto Ubuje; ktgC6: $this->output_json($data); goto mALyh; EWbEs: $input = json_decode($this->input->post("\x61\x6c\x6f\153\x61\x73\x69", true)); goto aMpAZ; wwtNT: $data["\x73\x74\x61\x74\x75\x73"] = $update; goto ktgC6; mALyh: } }
