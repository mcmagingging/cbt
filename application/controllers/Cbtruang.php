<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtruang extends CI_Controller { public function __construct() { goto UQ_s2; vVGUa: kMGTi: goto Pi724; vFr24: if ($this->ion_auth->is_admin()) { goto qSHFa; } goto qNw3Q; ZJpsl: $this->form_validation->set_error_delimiters('', ''); goto NrCz0; CWyc1: $this->load->model("\x44\x61\163\150\x62\157\x61\x72\x64\x5f\155\157\x64\x65\x6c", "\144\x61\x73\x68\x62\x6f\141\x72\144"); goto t5ZYn; qNw3Q: show_error("\x48\141\156\x79\x61\x20\101\144\x6d\151\156\x69\163\x74\x72\x61\x74\x6f\x72\40\x79\141\x6e\147\40\x64\x69\142\145\162\151\x20\150\141\153\x20\x75\156\164\165\153\40\x6d\x65\x6e\x67\x61\x6b\x73\145\x73\40\150\141\154\141\x6d\141\x6e\40\x69\x6e\x69\x2c\x20\x3c\x61\40\150\162\145\x66\x3d\42" . base_url("\x64\x61\163\150\x62\x6f\141\162\144") . "\42\x3e\x4b\145\155\142\x61\154\151\x20\153\x65\40\x6d\x65\156\165\40\141\167\x61\154\x3c\57\141\x3e", 403, "\x41\x6b\163\x65\163\40\124\x65\162\x6c\141\x72\141\x6e\147"); goto lBs9R; HiCvT: $this->load->model("\x4d\x61\163\164\145\x72\137\x6d\x6f\x64\x65\154", "\155\x61\x73\x74\x65\x72"); goto CWyc1; M2NnH: goto wtKlD; goto vVGUa; JkaZc: if (!$this->ion_auth->logged_in()) { goto kMGTi; } goto vFr24; t5ZYn: $this->load->model("\103\x62\x74\x5f\155\157\144\145\154", "\143\x62\x74"); goto ZJpsl; Pi724: redirect("\x61\x75\164\150"); goto k5quG; lBs9R: qSHFa: goto M2NnH; k5quG: wtKlD: goto YI1U2; UQ_s2: parent::__construct(); goto JkaZc; YI1U2: $this->load->library(["\x64\x61\x74\x61\x74\141\x62\x6c\145\163", "\x66\x6f\x72\155\137\x76\x61\x6c\151\x64\x61\164\x69\x6f\x6e"]); goto HiCvT; NrCz0: } public function output_json($data, $encode = true) { goto VpTRB; VpTRB: if (!$encode) { goto vvEKQ; } goto EhUQO; QNqDB: vvEKQ: goto m87d_; m87d_: $this->output->set_content_type("\x61\x70\160\154\x69\x63\x61\164\x69\157\156\57\x6a\x73\157\156")->set_output($data); goto cKtUy; EhUQO: $data = json_encode($data); goto QNqDB; cKtUy: } public function index() { goto wAQS2; u631Q: $data["\164\x70"] = $this->dashboard->getTahun(); goto uEbYv; RkMTj: $this->load->view("\137\164\145\x6d\160\154\x61\164\x65\x73\x2f\144\x61\163\x68\142\x6f\x61\x72\144\x2f\x5f\x68\145\141\144\x65\162", $data); goto KUKyg; rGRTG: $this->load->view("\137\164\x65\155\x70\x6c\x61\164\145\163\x2f\x64\141\x73\x68\142\x6f\x61\162\144\x2f\137\146\x6f\x6f\x74\145\x72"); goto iCLok; ayh4R: $data["\x73\155\164\x5f\141\x63\164\151\x76\x65"] = $this->dashboard->getSemesterActive(); goto RkMTj; uEbYv: $data["\x74\160\x5f\x61\x63\x74\151\166\x65"] = $this->dashboard->getTahunActive(); goto StugP; NnPpR: $data = ["\165\x73\x65\x72" => $user, "\152\165\144\165\x6c" => "\x52\x75\141\156\147\x20\x55\152\x69\141\156", "\x73\165\x62\152\x75\x64\x75\x6c" => "\104\141\164\141\x20\122\165\x61\156\x67\40\125\x6a\x69\141\x6e", "\x70\162\x6f\x66\151\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\x74\164\x69\x6e\x67" => $this->dashboard->getSetting()]; goto u631Q; StugP: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto ayh4R; wAQS2: $user = $this->ion_auth->user()->row(); goto NnPpR; KUKyg: $this->load->view("\143\142\164\57\x72\x75\x61\156\147\57\x64\141\x74\x61"); goto rGRTG; iCLok: } public function data() { $this->output_json($this->cbt->getRuang(), false); } public function add() { goto akf9k; akf9k: $insert = ["\x6e\141\155\x61\137\162\165\x61\156\x67" => $this->input->post("\156\141\155\x61\137\x72\165\141\x6e\147", true), "\153\157\x64\145\137\162\x75\x61\x6e\x67" => $this->input->post("\153\157\144\x65\x5f\x72\x75\141\x6e\x67", true)]; goto JE5Qj; drSJj: $this->output_json($data); goto mN2_y; JE5Qj: $this->master->create("\x63\x62\x74\x5f\x72\165\141\156\x67", $insert, false); goto yVgfc; yVgfc: $data["\163\164\141\164\165\163"] = $insert; goto drSJj; mN2_y: } public function update() { $data = $this->cbt->updateRuang(); $this->output->set_content_type("\x61\160\160\x6c\x69\143\141\164\151\157\156\x2f\152\163\x6f\156")->set_output($data); } public function delete() { goto Ah_4H; l2ffe: goto Hr94s; goto T3T1t; ap5mW: if (!$this->master->delete("\x63\x62\164\137\x72\x75\141\156\147", $chk, "\151\144\137\x72\165\x61\156\147")) { goto XR8BX; } goto Rs7tI; uHvzM: $this->output_json(["\163\x74\141\164\165\163" => false]); goto Fmawi; yzv4p: XR8BX: goto l2ffe; Fmawi: Hr94s: goto tL1kr; s4dZF: if (!$chk) { goto GkfoN; } goto ap5mW; Rs7tI: $this->output_json(["\x73\164\x61\x74\165\x73" => true, "\164\x6f\164\141\x6c" => count($chk)]); goto yzv4p; Ah_4H: $chk = $this->input->post("\143\150\145\x63\153\145\x64", true); goto s4dZF; T3T1t: GkfoN: goto uHvzM; tL1kr: } }
