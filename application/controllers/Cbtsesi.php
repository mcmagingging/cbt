<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtsesi extends CI_Controller { public function __construct() { goto BlBoA; s9gdK: $this->load->model("\x4d\x61\163\164\x65\162\x5f\x6d\157\144\x65\154", "\x6d\141\163\x74\145\x72"); goto wk3dp; wk3dp: $this->load->model("\104\141\x73\x68\x62\157\x61\162\x64\x5f\x6d\x6f\144\x65\154", "\144\x61\x73\x68\142\x6f\141\162\144"); goto eSkK3; VNfut: $this->form_validation->set_error_delimiters('', ''); goto KKELc; q0UnK: goto lEc7t; goto oVhQi; eSkK3: $this->load->model("\x43\x62\x74\x5f\x6d\157\x64\145\154", "\x63\142\164"); goto VNfut; hdnFd: PYaoI: goto q0UnK; JxhF_: show_error("\110\x61\156\171\x61\x20\101\x64\155\151\x6e\151\x73\164\162\141\164\157\162\40\171\x61\x6e\147\40\144\151\142\x65\x72\x69\x20\x68\141\x6b\x20\165\x6e\x74\x75\x6b\x20\155\145\x6e\147\x61\153\x73\145\163\40\x68\x61\x6c\141\155\x61\x6e\40\151\156\151\54\x20\x3c\x61\40\x68\162\145\x66\75\42" . base_url("\144\141\x73\x68\x62\x6f\141\x72\x64") . "\42\x3e\x4b\x65\155\x62\141\x6c\151\x20\x6b\x65\40\155\145\156\x75\x20\x61\x77\x61\154\x3c\57\x61\76", 403, "\x41\x6b\163\x65\x73\x20\x54\145\162\x6c\141\x72\141\x6e\x67"); goto hdnFd; cae1I: redirect("\141\x75\x74\150"); goto vyjhg; D6QaN: if (!$this->ion_auth->logged_in()) { goto HAavD; } goto LoIo7; BlBoA: parent::__construct(); goto D6QaN; vyjhg: lEc7t: goto mtrTE; LoIo7: if ($this->ion_auth->is_admin()) { goto PYaoI; } goto JxhF_; oVhQi: HAavD: goto cae1I; mtrTE: $this->load->library(["\144\x61\164\141\164\x61\x62\154\145\x73", "\x66\157\x72\x6d\x5f\x76\141\x6c\x69\x64\x61\164\151\x6f\156"]); goto s9gdK; KKELc: } public function output_json($data, $encode = true) { goto gAUHd; zMw4T: jrdPt: goto Chah2; AKip0: $data = json_encode($data); goto zMw4T; Chah2: $this->output->set_content_type("\141\160\x70\154\151\x63\141\x74\x69\x6f\x6e\x2f\x6a\163\157\x6e")->set_output($data); goto Wpe91; gAUHd: if (!$encode) { goto jrdPt; } goto AKip0; Wpe91: } public function index() { goto eapuO; uponc: $data["\164\160"] = $this->dashboard->getTahun(); goto EslVL; EslVL: $data["\x74\x70\137\x61\x63\164\151\166\145"] = $this->dashboard->getTahunActive(); goto YYq2C; eapuO: $user = $this->ion_auth->user()->row(); goto sO7eV; tT1vj: $this->load->view("\x5f\164\x65\x6d\160\x6c\141\x74\145\x73\x2f\144\x61\x73\x68\x62\157\x61\162\x64\57\137\150\145\x61\144\145\162", $data); goto rWxdO; YYq2C: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto AZaSQ; FjmTQ: $this->load->view("\x5f\x74\x65\155\160\x6c\141\164\145\x73\x2f\144\141\163\x68\x62\x6f\x61\x72\144\57\x5f\146\x6f\x6f\164\145\x72"); goto pAsnS; AZaSQ: $data["\163\x6d\x74\137\141\143\164\x69\x76\145"] = $this->dashboard->getSemesterActive(); goto tT1vj; rWxdO: $this->load->view("\x63\x62\x74\57\x73\145\x73\x69\57\144\x61\164\x61"); goto FjmTQ; sO7eV: $data = ["\x75\x73\145\162" => $user, "\152\165\144\x75\x6c" => "\123\145\x73\151\40\125\x6a\x69\x61\156", "\163\x75\142\x6a\165\144\165\x6c" => "\104\x61\x74\x61\x20\x53\145\x73\x69\x20\x55\152\x69\x61\156", "\160\x72\157\146\x69\154\145" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\164\164\151\156\147" => $this->dashboard->getSetting()]; goto uponc; pAsnS: } public function data() { $this->output_json($this->cbt->getSesi(), false); } public function add() { goto Z7zed; tAQPo: $this->output_json($data); goto ML5cN; C62To: $this->master->create("\x63\x62\x74\137\163\x65\163\x69", $insert, false); goto W38iZ; Z7zed: $insert = ["\x6e\x61\155\141\137\x73\x65\163\x69" => $this->input->post("\156\141\x6d\141\x5f\163\x65\163\x69", true), "\153\157\x64\x65\x5f\x73\x65\x73\x69" => $this->input->post("\153\x6f\x64\145\x5f\x73\145\163\151", true), "\x77\141\x6b\x74\x75\137\155\x75\x6c\141\x69" => $this->input->post("\x77\141\153\x74\x75\x5f\x6d\165\x6c\x61\x69", true), "\x77\x61\153\x74\x75\137\141\153\x68\151\x72" => $this->input->post("\167\141\153\164\x75\x5f\141\x6b\150\x69\x72", true)]; goto C62To; W38iZ: $data["\163\x74\x61\164\165\x73"] = $insert; goto tAQPo; ML5cN: } public function update() { $data = $this->cbt->updateSesi(); $this->output->set_content_type("\x61\x70\x70\x6c\151\x63\141\164\x69\x6f\x6e\57\152\x73\x6f\x6e")->set_output($data); } public function edit($id) { goto ncysX; dy_P3: $data["\163\155\164"] = $this->dashboard->getSemester(); goto DUUar; OhyNe: $this->load->view("\143\142\x74\x2f\x73\145\x73\151\57\145\144\x69\164"); goto w5RVu; QMw0o: $data = ["\x75\x73\145\x72" => $this->ion_auth->user()->row(), "\152\x75\144\x75\154" => "\123\145\x73\151\x20\123\151\x73\167\141", "\163\165\x62\x6a\x75\144\165\x6c" => "\101\x74\x75\x72\40\123\145\163\x69\40\x53\151\x73\x77\x61", "\x73\x65\x73\151" => $this->cbt->getSesiById($id)]; goto wHV_B; nC6mY: $smt = $this->dashboard->getSemesterActive(); goto WynOR; DUUar: $data["\x73\155\164\x5f\x61\x63\164\151\166\145"] = $smt; goto QMw0o; w5RVu: $this->load->view("\137\164\x65\155\x70\154\x61\164\145\163\x2f\x64\x61\163\150\x62\157\x61\x72\144\x2f\137\146\157\157\164\145\x72"); goto v89j0; WynOR: $data["\x74\x70"] = $this->dashboard->getTahun(); goto t4_Np; wHV_B: $this->load->view("\137\164\145\x6d\x70\154\x61\164\x65\163\57\x64\x61\x73\x68\x62\x6f\x61\x72\144\57\137\150\145\141\144\145\x72", $data); goto OhyNe; t4_Np: $data["\x74\160\x5f\x61\x63\x74\151\166\x65"] = $tp; goto dy_P3; ncysX: $tp = $this->dashboard->getTahunActive(); goto nC6mY; v89j0: } public function delete() { goto LuKnE; Yqq70: WxDx3: goto g7ERE; uHDW1: if (!$this->master->delete("\143\x62\x74\x5f\x73\145\x73\151", $chk, "\x69\144\x5f\x73\x65\163\x69")) { goto v3wf8; } goto JmIv5; EGyr9: lD04G: goto TG5MT; xnewh: goto lD04G; goto Yqq70; g7ERE: $this->output_json(["\x73\x74\x61\x74\x75\163" => false]); goto EGyr9; JmIv5: $this->output_json(["\163\164\x61\164\x75\163" => true, "\x74\157\164\141\154" => count($chk)]); goto wcoHI; zSgUV: if (!$chk) { goto WxDx3; } goto uHDW1; wcoHI: v3wf8: goto xnewh; LuKnE: $chk = $this->input->post("\x63\150\145\x63\x6b\x65\144", true); goto zSgUV; TG5MT: } public function sesisiswa() { goto jefFi; odgpr: $this->load->view("\x5f\x74\145\155\x70\154\141\x74\145\163\57\144\141\x73\x68\x62\157\141\162\x64\x2f\137\146\x6f\x6f\x74\145\x72"); goto xocLe; Ptdrf: $data["\164\160\137\141\143\164\x69\166\145"] = $this->dashboard->getTahunActive(); goto jVC31; Ej5wY: $data["\x73\x6d\164\137\141\143\164\x69\x76\x65"] = $this->dashboard->getSemesterActive(); goto FCluf; FCluf: $this->load->view("\x5f\164\x65\x6d\160\154\141\x74\145\x73\x2f\x64\141\x73\150\x62\157\x61\162\144\57\x5f\150\145\141\144\145\x72", $data); goto bd6Jc; GHriX: $data["\x74\x70"] = $this->dashboard->getTahun(); goto Ptdrf; jefFi: $data = ["\165\x73\145\x72" => $this->ion_auth->user()->row(), "\152\165\x64\165\154" => "\123\145\163\x69\x20\x55\x6a\151\x61\156", "\x73\x75\142\152\x75\x64\x75\x6c" => "\104\141\x74\x61\40\123\x65\x73\151\x20\x55\x6a\151\x61\x6e"]; goto GHriX; jVC31: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto Ej5wY; bd6Jc: $this->load->view("\143\x62\164\57\163\145\163\151\163\151\x73\x77\x61\57\x64\141\x74\141"); goto odgpr; xocLe: } }
