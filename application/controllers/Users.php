<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\x53\x45\x50\101\x54\x48") or exit("\x4e\157\40\x64\151\x72\x65\143\164\40\x73\143\x72\151\x70\164\x20\141\x63\x63\x65\x73\x73\40\x61\154\154\157\167\145\x64"); class Users extends CI_Controller { public function __construct() { goto TFM8J; AfPI3: $this->form_validation->set_error_delimiters('', ''); goto A7qlO; h35lM: $this->load->model("\125\163\145\x72\x73\x5f\x6d\157\x64\x65\x6c", "\x75\x73\x65\162\163"); goto N_03u; TFM8J: parent::__construct(); goto jktfr; Zd2Z2: $this->load->library(["\144\x61\164\141\164\141\x62\154\145\163", "\146\157\162\155\137\166\x61\x6c\151\144\x61\x74\x69\x6f\x6e"]); goto h35lM; f9XCX: L5tRA: goto Zd2Z2; N_03u: $this->load->model("\x4d\x61\163\164\x65\x72\x5f\155\157\144\x65\154", "\155\x61\x73\164\x65\x72"); goto UPOGb; jvSQq: redirect("\141\x75\x74\150"); goto f9XCX; UPOGb: $this->load->model("\104\x61\163\x68\x62\x6f\x61\x72\x64\x5f\x6d\x6f\x64\x65\154", "\141\144\155\x69\156\x64\141\163\x68\142\157\x61\x72\144"); goto AfPI3; jktfr: if ($this->ion_auth->logged_in()) { goto L5tRA; } goto jvSQq; A7qlO: } public function is_admin() { goto rExtb; WfhUd: show_error("\x48\x61\156\x79\x61\40\x41\144\x6d\x69\156\x69\163\x74\x72\x61\x74\x6f\x72\40\171\141\156\x67\40\144\151\142\145\162\x69\x20\x68\x61\x6b\40\x75\x6e\x74\x75\x6b\x20\155\x65\156\147\x61\153\x73\145\163\x20\150\141\x6c\141\x6d\141\156\x20\151\x6e\x69\54\x20\74\x61\40\x68\x72\145\x66\75\42" . base_url("\144\141\x73\150\x62\157\141\162\144") . "\x22\76\113\145\x6d\142\x61\x6c\x69\40\153\145\x20\x6d\145\x6e\165\40\141\x77\141\154\x3c\x2f\x61\x3e", 403, "\x41\153\x73\145\x73\40\x54\x65\x72\154\x61\x72\141\156\x67"); goto Kj0Lw; rExtb: if ($this->ion_auth->is_admin()) { goto GcYcv; } goto WfhUd; Kj0Lw: GcYcv: goto iJUNY; iJUNY: } public function output_json($data, $encode = true) { goto AdGF7; QV9gH: PiF45: goto U_580; AdGF7: if (!$encode) { goto PiF45; } goto a0Q05; U_580: $this->output->set_content_type("\141\160\x70\154\151\x63\x61\x74\151\x6f\156\57\152\x73\x6f\x6e")->set_output($data); goto iCL4N; a0Q05: $data = json_encode($data); goto QV9gH; iCL4N: } public function data($id = null) { $this->is_admin(); $this->output_json($this->users->getDataUsers($id), false); } public function index() { goto oTa2t; ZMzv3: $data = ["\x75\163\x65\162" => $this->ion_auth->user()->row(), "\x6a\x75\x64\x75\154" => "\125\163\x65\162\40\x4d\x61\x6e\141\x67\x65\155\x65\156\x74", "\163\165\x62\x6a\x75\x64\x75\154" => "\x44\141\164\x61\40\x55\x73\145\162"]; goto DYq7P; oTa2t: $this->is_admin(); goto ZMzv3; wCyoP: $this->load->view("\137\x74\145\155\x70\x6c\x61\164\x65\x73\x2f\x64\x61\163\150\x62\157\141\x72\x64\x2f\x66\157\157\x74\x65\162\x2e\160\150\x70"); goto XKyF2; KQD4o: $data["\163\x6d\x74"] = $this->admindashboard->getSemester(); goto t5Kps; t5Kps: $data["\163\x6d\x74\x5f\141\x63\164\151\166\x65"] = $this->admindashboard->getSemesterActive(); goto RBiC5; NtZef: $data["\x74\x70\x5f\141\x63\164\151\166\145"] = $this->admindashboard->getTahunActive(); goto KQD4o; DYq7P: $data["\164\x70"] = $this->admindashboard->getTahun(); goto NtZef; MwD8A: $this->load->view("\165\163\145\162\163\x2f\x64\x61\x74\141"); goto wCyoP; RBiC5: $this->load->view("\137\164\x65\x6d\x70\x6c\x61\164\x65\163\57\144\x61\x73\150\x62\157\141\x72\x64\57\x68\145\x61\x64\145\x72\x2e\x70\x68\160", $data); goto MwD8A; XKyF2: } public function edit($id) { goto KYUvc; jYYsZ: $this->load->view("\x75\163\145\162\163\57\145\144\151\x74"); goto O0YO9; kVBQu: $data = ["\165\x73\x65\162" => $this->ion_auth->user()->row(), "\152\x75\x64\165\154" => "\125\163\145\x72\x20\x4d\141\156\x61\x67\x65\155\145\x6e\x74", "\163\x75\142\x6a\165\x64\x75\x6c" => "\105\x64\151\164\x20\x44\x61\x74\x61\40\125\163\145\162", "\x75\x73\145\162\x73" => $this->ion_auth->user($id)->row(), "\x67\162\x6f\165\160\163" => $this->ion_auth->groups()->result(), "\x6c\145\166\x65\x6c" => $level[0]]; goto ruroy; O0YO9: $this->load->view("\x5f\164\145\x6d\x70\x6c\x61\x74\145\163\57\144\141\163\x68\142\x6f\x61\x72\x64\x2f\146\x6f\x6f\x74\145\162\x2e\x70\x68\160"); goto dWSBr; ruroy: $this->load->view("\x5f\164\145\x6d\x70\154\x61\164\x65\x73\x2f\x64\141\x73\x68\142\157\x61\x72\x64\x2f\x68\x65\x61\x64\x65\x72\56\x70\150\160", $data); goto jYYsZ; KYUvc: $level = $this->ion_auth->get_users_groups($id)->result(); goto kVBQu; dWSBr: } public function edit_info() { goto a2Wzw; WgcUE: EcF0b: goto YLn6r; hFz0E: $data["\163\x74\x61\x74\165\163"] = $update ? true : false; goto tuLEh; h_sKw: $data["\x73\x74\x61\x74\x75\x73"] = false; goto YsQhI; YsQhI: $data["\x65\x72\x72\x6f\162\x73"] = ["\165\163\145\x72\156\x61\155\x65" => form_error("\x75\x73\145\x72\156\141\x6d\145"), "\146\151\162\163\x74\137\156\141\155\145" => form_error("\146\x69\x72\x73\164\137\x6e\x61\155\145"), "\x6c\x61\163\x74\137\156\141\155\x65" => form_error("\154\141\x73\x74\x5f\x6e\141\x6d\145"), "\145\x6d\141\151\154" => form_error("\145\155\141\x69\154")]; goto WgcUE; FvTM0: if ($this->form_validation->run() === FALSE) { goto cALe5; } goto Otlt1; VkpPL: cALe5: goto h_sKw; vDet3: $this->form_validation->set_rules("\x66\151\162\163\164\137\x6e\x61\155\x65", "\106\151\162\x73\164\x20\116\x61\x6d\145", "\x72\x65\x71\x75\x69\x72\x65\x64"); goto IrFAG; YLn6r: $this->output_json($data); goto Vda9H; Otlt1: $id = $this->input->post("\151\x64", true); goto vOOLk; TMy7k: $this->form_validation->set_rules("\145\155\141\x69\154", "\105\x6d\141\x69\x6c", "\162\x65\161\165\x69\x72\x65\x64\x7c\x76\x61\x6c\x69\x64\x5f\145\x6d\141\151\154"); goto FvTM0; N11PV: $this->form_validation->set_rules("\165\x73\x65\x72\156\x61\155\145", "\125\163\x65\162\156\141\x6d\145", "\162\x65\x71\x75\x69\162\x65\x64"); goto vDet3; tuLEh: goto EcF0b; goto VkpPL; UC_nz: $update = $this->master->update("\x75\163\x65\x72\163", $input, "\x69\144", $id); goto hFz0E; a2Wzw: $this->is_admin(); goto N11PV; vOOLk: $input = ["\x75\163\145\x72\x6e\x61\x6d\x65" => $this->input->post("\x75\x73\x65\162\x6e\x61\155\145", true), "\146\x69\162\163\164\137\x6e\141\x6d\x65" => $this->input->post("\146\x69\x72\163\x74\137\x6e\141\155\x65", true), "\154\x61\x73\x74\137\156\141\x6d\x65" => $this->input->post("\x6c\x61\x73\x74\137\156\141\155\x65", true), "\145\x6d\141\151\x6c" => $this->input->post("\145\155\x61\x69\154", true)]; goto UC_nz; IrFAG: $this->form_validation->set_rules("\x6c\x61\163\164\137\156\141\x6d\x65", "\114\141\163\164\40\116\x61\155\x65", "\162\x65\x71\x75\151\x72\145\144"); goto TMy7k; Vda9H: } public function edit_status() { goto Jlwbc; DiZLE: goto q75sc; goto c3eOI; Etswp: $this->form_validation->set_rules("\163\164\141\x74\165\163", "\x53\x74\141\164\165\x73", "\x72\x65\161\165\x69\162\x65\144"); goto DC53R; nMgar: $input = ["\x61\143\164\151\x76\145" => $this->input->post("\163\x74\141\x74\x75\163", true)]; goto laLOJ; kSDjk: $id = $this->input->post("\x69\x64", true); goto nMgar; c3eOI: M1l6S: goto T5iEf; g77h1: q75sc: goto X4tvq; bHaDV: $data["\145\x72\162\x6f\162\x73"] = ["\163\x74\x61\164\165\x73" => form_error("\163\x74\x61\164\x75\163")]; goto g77h1; X4tvq: $this->output_json($data); goto rnpLG; T5iEf: $data["\x73\164\141\x74\165\x73"] = false; goto bHaDV; laLOJ: $update = $this->master->update("\165\x73\x65\162\x73", $input, "\151\144", $id); goto TYJle; TYJle: $data["\163\164\x61\x74\x75\x73"] = $update ? true : false; goto DiZLE; Jlwbc: $this->is_admin(); goto Etswp; DC53R: if ($this->form_validation->run() === FALSE) { goto M1l6S; } goto kSDjk; rnpLG: } public function edit_level() { goto elD7u; uCS3x: $data["\145\x72\x72\157\162\163"] = ["\x6c\145\x76\x65\154" => form_error("\154\145\166\145\x6c")]; goto aaDf8; BVWa3: goto lm0tS; goto wp0fc; JFtv3: $this->output_json($data); goto u2qkt; W0cKB: if ($this->form_validation->run() === FALSE) { goto KXlhP; } goto RPiWl; RTabs: $input = ["\147\162\157\165\160\x5f\x69\144" => $this->input->post("\154\x65\166\145\154", true)]; goto JpOaS; dYNKi: $this->form_validation->set_rules("\x6c\145\166\145\x6c", "\x4c\x65\x76\145\154", "\162\145\161\x75\151\x72\145\x64"); goto W0cKB; JpOaS: $update = $this->master->update("\165\x73\145\x72\x73\137\147\162\157\165\160\x73", $input, "\x75\x73\x65\x72\137\x69\x64", $id); goto MCxuR; aaDf8: lm0tS: goto JFtv3; p7OIu: $data["\163\x74\x61\x74\x75\x73"] = false; goto uCS3x; wp0fc: KXlhP: goto p7OIu; RPiWl: $id = $this->input->post("\x69\x64", true); goto RTabs; MCxuR: $data["\x73\x74\141\164\165\x73"] = $update ? true : false; goto BVWa3; elD7u: $this->is_admin(); goto dYNKi; u2qkt: } public function change_password() { goto mjmsk; Z4rw4: W3c1f: goto NMXxy; hsepc: goto L0kRe; goto CMe0n; j1Zxd: $change = $this->ion_auth->change_password($identity, $this->input->post("\157\154\144"), $this->input->post("\x6e\x65\167")); goto ar1kJ; VI6mz: $this->output_json($data); goto y9Z7A; ar1kJ: if ($change) { goto W3c1f; } goto RCt3Q; ekqp4: $data = ["\x73\164\141\164\165\x73" => false, "\145\x72\x72\157\x72\x73" => ["\x6f\x6c\144" => form_error("\157\154\144"), "\156\145\x77" => form_error("\156\x65\167"), "\x6e\x65\167\x5f\143\157\156\x66\x69\x72\x6d" => form_error("\x6e\145\x77\137\x63\x6f\x6e\x66\x69\x72\x6d")]]; goto hUzoB; mjmsk: $this->form_validation->set_rules("\157\x6c\x64", $this->lang->line("\x63\x68\x61\156\x67\145\x5f\x70\141\x73\x73\x77\x6f\162\x64\x5f\x76\x61\x6c\151\144\x61\x74\151\157\156\x5f\157\x6c\144\137\160\141\163\163\x77\157\162\x64\x5f\154\141\x62\145\x6c"), "\162\x65\x71\x75\x69\162\145\144"); goto Wbm6I; hUzoB: L0kRe: goto VI6mz; CMe0n: E508o: goto ekqp4; NMXxy: $data["\x73\164\141\164\165\x73"] = true; goto NmnWX; w8KS8: $identity = $this->session->userdata("\151\x64\x65\x6e\164\x69\164\171"); goto j1Zxd; y3SxQ: $this->form_validation->set_rules("\156\x65\x77\137\143\157\x6e\146\x69\162\x6d", $this->lang->line("\143\x68\x61\x6e\x67\145\137\x70\141\x73\x73\x77\157\162\x64\137\x76\x61\154\151\x64\141\x74\151\x6f\156\x5f\x6e\x65\167\137\x70\141\x73\x73\x77\x6f\162\x64\137\x63\x6f\156\146\151\162\x6d\x5f\154\x61\142\145\x6c"), "\162\145\161\165\151\x72\145\144"); goto a3lie; ZMdIp: goto Pmy8O; goto Z4rw4; a3lie: if ($this->form_validation->run() === FALSE) { goto E508o; } goto w8KS8; Wbm6I: $this->form_validation->set_rules("\156\x65\167", $this->lang->line("\143\x68\x61\x6e\147\x65\x5f\160\141\x73\x73\x77\157\162\144\137\x76\x61\154\x69\144\141\164\151\x6f\x6e\137\x6e\x65\167\137\x70\x61\163\x73\167\157\162\144\x5f\154\x61\x62\145\154"), "\x72\x65\x71\165\151\162\x65\x64\174\155\151\156\137\x6c\145\156\147\164\x68\133" . $this->config->item("\x6d\x69\156\x5f\x70\141\x73\163\x77\157\162\x64\x5f\x6c\145\156\147\x74\x68", "\151\x6f\156\137\141\165\x74\150") . "\x5d\x7c\155\x61\x74\x63\x68\x65\163\133\x6e\x65\167\137\x63\x6f\156\x66\151\162\155\x5d"); goto y3SxQ; RCt3Q: $data = ["\x73\164\x61\164\x75\163" => false, "\155\x73\147" => $this->ion_auth->errors()]; goto ZMdIp; NmnWX: Pmy8O: goto hsepc; y9Z7A: } public function delete($id) { goto zXlnW; OWwQY: $data["\x73\x74\x61\164\x75\x73"] = $this->ion_auth->delete_user($id) ? true : false; goto DSlXf; DSlXf: $this->output_json($data); goto xONC0; zXlnW: $this->is_admin(); goto OWwQY; xONC0: } }
