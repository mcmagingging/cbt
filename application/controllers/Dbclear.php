<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\101\123\x45\120\101\x54\110") or exit("\x4e\157\40\144\151\162\145\143\164\x20\163\x63\162\151\160\164\x20\141\x63\143\145\x73\163\40\x61\154\154\157\x77\x65\144"); class Dbclear extends CI_Controller { public function __construct() { goto Cs2mD; opkDN: ActKs: goto HHdyE; Cs2mD: parent::__construct(); goto Qj8XC; YSqR8: $this->load->dbforge(); goto g8YBV; c82Tn: $this->load->library("\165\160\x6c\x6f\x61\x64"); goto YSqR8; P3hK3: redirect("\x61\165\x74\150"); goto yvWRS; yvWRS: Df2nS: goto c82Tn; HHdyE: goto Df2nS; goto xxZ2g; xxZ2g: xZjZz: goto P3hK3; cD_na: show_error("\x48\141\x6e\x79\141\40\101\144\155\151\x6e\40\171\141\x6e\x67\x20\142\x6f\154\x65\x68\40\x6d\145\x6e\147\x61\x6b\x73\145\x73\x20\x68\141\x6c\x61\x6d\x61\x6e\40\x69\x6e\151", 403, "\101\153\163\145\x73\40\144\151\154\141\162\x61\156\x67"); goto opkDN; g8YBV: $this->load->model("\123\145\164\x74\x69\x6e\x67\x73\x5f\x6d\157\144\145\154", "\163\x65\x74\x74\x69\x6e\x67\163"); goto vRXto; vRXto: $this->load->model("\104\x61\x73\x68\142\157\x61\162\x64\137\x6d\157\144\145\x6c", "\x64\141\x73\x68\x62\x6f\141\162\144"); goto zxceu; Qj8XC: if (!$this->ion_auth->logged_in()) { goto xZjZz; } goto CTO3x; zxceu: $this->load->helper("\144\x69\162\x65\x63\164\157\162\171"); goto j1ijh; CTO3x: if ($this->ion_auth->is_admin()) { goto ActKs; } goto cD_na; j1ijh: } public function output_json($data, $encode = true) { goto pi0wd; cvkUq: $data = json_encode($data); goto C8nxf; C8nxf: kz1Bg: goto K83wL; pi0wd: if (!$encode) { goto kz1Bg; } goto cvkUq; K83wL: $this->output->set_content_type("\141\160\160\x6c\x69\x63\x61\x74\151\x6f\x6e\x2f\152\163\157\156")->set_output($data); goto CSOZ6; CSOZ6: } public function index() { goto mXq0f; ufnb1: $json = json_decode($json); goto vSgZz; YI1lx: $user = $this->ion_auth->user()->row(); goto ukv96; mXq0f: $json = file_get_contents("\x2e\57\141\x73\163\145\164\x73\x2f\141\x70\160\57\x64\142\x2f\144\141\x74\x61\142\x61\163\x65\56\152\163\157\x6e"); goto ufnb1; FHCYT: $data["\164\x61\142\x6c\x65\163"] = $data_tables; goto xv7gY; ukv96: $data = ["\165\x73\x65\162" => $user, "\x6a\x75\144\x75\x6c" => "\x42\145\x72\163\151\150\153\141\x6e\x20\x44\141\x74\141", "\x73\x75\142\152\165\144\x75\x6c" => "\x48\141\x70\x75\163\x20\x44\x61\164\141", "\160\162\157\146\151\154\145" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\164\x74\151\156\147" => $this->dashboard->getSetting()]; goto nXl5H; HuCic: $this->load->view("\137\x74\145\x6d\160\154\x61\x74\x65\163\57\x64\141\x73\x68\142\157\141\162\x64\57\x5f\146\x6f\x6f\164\145\162"); goto LTzfn; D6Z0y: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto bhcbK; Uekhq: foreach ($tables as $table) { goto RYlBR; pR9zz: PFVgx: goto gEuoT; CUatU: if ($table == "\142\x75\x6b\165\x5f\x6e\x69\x6c\x61\x69") { goto hEzRI; } goto cDxgF; bFAwe: if (!($nums == 0)) { goto zO6Zl; } goto uK4vl; IMYSv: goto oUM0E; goto dKhYu; gEuoT: z9q86: goto Da7Gc; SnWde: zO6Zl: goto MB849; Da7Gc: D_kbg: goto h0BP4; uK4vl: $this->dbforge->drop_table("\142\x75\x6b\x75\137\x6e\151\154\x61\x69", true); goto SnWde; ihqgG: if (in_array($table, $excludes)) { goto PFVgx; } goto FCCFN; nRw0B: $nums = $this->db->get("\x62\x75\x6b\x75\137\156\151\154\x61\151")->num_rows(); goto bFAwe; cDxgF: $this->dbforge->drop_table($table, true); goto IMYSv; NxPcF: goto z9q86; goto BHznu; tbSVd: if (in_array($table, $excludes)) { goto fEMT9; } goto CUatU; RYlBR: if (isset($json[$table])) { goto YcKlL; } goto tbSVd; bUEca: fEMT9: goto NxPcF; BHznu: YcKlL: goto ihqgG; dKhYu: hEzRI: goto nRw0B; MB849: oUM0E: goto bUEca; FCCFN: $name = str_replace("\137", "\x20", $table); goto SYIHK; xnpw1: $data_tables[$table_info["\x6b\145\x74"]][] = $table_info; goto pR9zz; SYIHK: $table_info = ["\153\145\164" => $this->keterangan()[$table], "\x73\151\x7a\x65" => $this->settings->rowSize($table), "\x74\x61\142\154\145" => $table, "\x6e\141\x6d\x65" => ucwords($name)]; goto xnpw1; h0BP4: } goto EG36b; vSgZz: $json = (array) $json; goto YI1lx; EG36b: JdCOM: goto FHCYT; C7M1A: $data["\164\160\137\x61\x63\x74\151\x76\x65"] = $this->dashboard->getTahunActive(); goto D6Z0y; xv7gY: $this->load->view("\x5f\x74\x65\155\160\154\x61\164\x65\x73\57\x64\141\163\150\142\157\141\162\x64\x2f\x5f\150\x65\x61\144\x65\x72", $data); goto foBoR; qNYgP: $tables = $this->db->list_tables(); goto Uekhq; nXl5H: $data["\x74\x70"] = $this->dashboard->getTahun(); goto C7M1A; zbX1O: $data_tables = []; goto qNYgP; bhcbK: $data["\x73\x6d\164\137\141\x63\164\151\x76\x65"] = $this->dashboard->getSemesterActive(); goto GbGfQ; GbGfQ: $excludes = ["\x62\165\153\165\137\x69\x6e\x64\x75\153", "\x61\160\x69\x5f\163\x65\x74\164\x69\156\147", "\141\x70\151\137\164\157\153\x65\x6e", "\x62\x75\x6c\x61\x6e", "\150\141\162\x69", "\x73\145\x74\x74\151\x6e\x67", "\143\142\164\x5f\x6a\x65\156\151\x73", "\x63\x62\164\x5f\162\165\141\x6e\147", "\143\x62\164\137\x73\145\x73\x69", "\x63\x62\x74\137\164\157\153\145\x6e", "\154\145\166\145\154\x5f\147\x75\162\165", "\x6c\x65\x76\x65\154\x5f\153\x65\x6c\141\x73", "\x6d\x61\163\164\145\162\137\x74\x70", "\x6d\141\x73\164\145\162\137\163\x6d\164", "\155\141\x73\164\145\x72\137\150\141\162\x69\137\x65\x66\x65\x6b\x74\151\146", "\x75\163\x65\162\x73", "\x67\162\x6f\x75\x70\163", "\165\163\145\162\163\137\147\162\x6f\165\160\x73", "\154\157\x67\x69\156\x5f\141\x74\x74\145\x6d\x70\164\x73", "\165\x73\x65\x72\163\137\160\x72\157\x66\151\154\x65", "\162\x61\160\157\162\137\141\144\x6d\151\x6e\137\163\145\164\164\x69\x6e\x67", "\x72\x75\x6e\x6e\151\156\147\x5f\x74\145\x78\x74"]; goto zbX1O; foBoR: $this->load->view("\x73\145\x74\164\151\x6e\147\x2f\155\x61\156\x61\x67\x65"); goto HuCic; LTzfn: } public function hapusTable() { goto YzfDi; zOY77: $this->load->helper("\146\x69\x6c\145"); goto NnPsd; rJRzb: $this->db->truncate($table); goto aieoA; wMnUi: $prefs = ["\164\x61\x62\x6c\x65\x73" => array($table), "\151\x67\x6e\157\x72\145" => array(), "\x66\157\162\x6d\141\164" => "\164\x78\x74", "\x66\x69\154\145\156\x61\155\x65" => $table . "\x2e\163\x71\x6c", "\141\144\x64\137\144\162\157\160" => TRUE, "\x61\x64\144\137\x69\156\163\x65\162\164" => TRUE, "\156\145\x77\x6c\x69\156\145" => "\xa"]; goto QmrX9; aieoA: $this->output_json(["\164\x79\160\x65" => "\x64\141\164\141\x62\141\x73\145", "\155\x65\x73\163\x61\x67\145" => "\104\x61\x74\x61\142\141\163\145\x20\142\145\162\150\x61\163\151\x6c\x20\x64\151\150\141\x70\165\x73"]); goto n4HLc; QmrX9: $backup = $this->dbutil->backup(array($prefs)); goto zOY77; RJezy: $this->load->dbutil(); goto wMnUi; NnPsd: write_file("\56\57\x62\x61\143\153\165\160\x73\x2f\142\x61\143\x6b\165\x70\x5f" . $table . "\137" . date("\131\x5f\x6d\137\144\137\x48\x5f\151\x5f\x73") . "\56\163\161\x6c", $backup); goto rJRzb; YzfDi: $table = $this->input->post("\164\x61\x62\154\x65", true); goto RJezy; n4HLc: } public function truncate() { goto k3Qpc; yUNAd: $this->output_json(["\x73\x74\141\x74\165\163" => true]); goto zjV1H; k3Qpc: $tables = $this->db->list_tables(); goto lfTCY; lfTCY: $this->settings->truncate($tables); goto yUNAd; zjV1H: } private function keterangan() { $data = ["\x61\x70\x69\x5f\x73\x65\x74\x74\x69\156\147" => "\x31", "\x61\160\x69\137\164\157\x6b\145\156" => "\x31", "\142\x75\x6b\165\x5f\x69\x6e\144\x75\153" => "\61", "\142\x75\154\141\156" => "\x30", "\x63\x62\x74\x5f\142\x61\x6e\153\137\163\x6f\141\x6c" => "\x32", "\143\142\x74\137\144\165\x72\141\163\x69\x5f\163\151\x73\x77\141" => "\62", "\143\x62\164\137\x6a\x61\x64\167\x61\154" => "\x32", "\x63\142\x74\x5f\152\x61\144\167\x61\x6c\x5f\x75\x6a\151\141\156" => "\62", "\143\142\x74\x5f\x6a\145\156\x69\163" => "\60", "\x63\142\x74\137\x6b\x65\154\x61\163\x5f\162\165\141\156\x67" => "\x32", "\143\142\164\137\153\157\x70\x5f\141\142\163\x65\x6e\163\151" => "\61", "\143\x62\x74\137\153\x6f\160\x5f\142\x65\162\x69\164\x61" => "\61", "\x63\x62\x74\137\x6b\157\160\137\153\141\x72\164\x75" => "\61", "\x63\x62\164\x5f\x6e\151\154\x61\x69" => "\62", "\x63\142\164\x5f\x6e\157\x6d\x6f\162\137\160\x65\163\x65\162\x74\x61" => "\x32", "\143\142\164\x5f\160\x65\x6e\147\x61\x77\x61\163" => "\62", "\x63\x62\x74\x5f\x72\x65\x6b\x61\x70" => "\62", "\143\142\x74\137\x72\145\153\x61\x70\137\156\151\154\x61\x69" => "\x32", "\x63\142\164\137\162\165\141\156\147" => "\x31", "\x63\142\x74\x5f\x73\145\x73\151" => "\x31", "\143\x62\x74\x5f\x73\x65\x73\x69\137\163\x69\x73\167\x61" => "\x32", "\x63\142\164\x5f\x73\x6f\141\x6c" => "\x32", "\x63\x62\x74\137\163\x6f\x61\154\x5f\x73\151\x73\167\x61" => "\62", "\x63\x62\x74\x5f\x74\x6f\x6b\145\156" => "\x31", "\x67\162\157\165\x70\163" => "\x30", "\150\x61\162\151" => "\x30", "\x6a\x61\142\x61\x74\x61\x6e\137\147\x75\162\165" => "\61", "\153\145\154\141\x73\x5f\x63\141\164\x61\164\141\156\137\155\x61\x70\145\154" => "\x32", "\153\145\154\141\163\137\x63\x61\x74\x61\x74\141\156\x5f\x77\x61\154\151" => "\x32", "\153\145\x6c\x61\x73\x5f\145\153\x73\164\x72\x61" => "\61", "\153\145\154\141\x73\137\x6a\141\x64\167\x61\x6c\137\x6b\x62\155" => "\62", "\153\145\x6c\141\163\x5f\x6a\141\x64\167\141\154\137\x6d\141\x70\x65\154" => "\62", "\x6b\x65\x6c\141\163\137\152\141\144\167\141\154\x5f\x6d\141\164\145\162\151" => "\62", "\x6b\x65\x6c\141\x73\137\x6a\x61\x64\167\141\154\x5f\x74\165\147\x61\x73" => "\62", "\x6b\145\154\x61\x73\137\155\x61\x74\145\162\151" => "\62", "\x6b\x65\x6c\141\x73\x5f\163\x69\x73\167\141" => "\62", "\x6b\x65\x6c\x61\x73\x5f\x73\164\x72\x75\x6b\x74\x75\x72" => "\x32", "\153\145\x6c\x61\x73\x5f\164\x75\x67\x61\163" => "\x32", "\154\x65\x76\145\154\x5f\147\165\x72\165" => "\x30", "\x6c\x65\x76\145\x6c\x5f\153\145\x6c\141\x73" => "\60", "\x6c\x6f\x67" => "\62", "\154\157\147\151\x6e\x5f\141\x74\164\145\x6d\160\164\163" => "\60", "\x6c\157\147\x5f\x6d\x61\x74\x65\x72\151" => "\x32", "\154\157\x67\137\164\x75\147\x61\163" => "\62", "\154\157\x67\x5f\x75\152\151\x61\156" => "\62", "\155\141\x73\x74\145\x72\x5f\145\153\x73\x74\x72\141" => "\61", "\155\141\x73\x74\x65\162\x5f\x67\x75\x72\165" => "\x31", "\155\141\x73\x74\x65\162\137\150\x61\x72\151\137\x65\x66\x65\x6b\164\151\x66" => "\x31", "\x6d\x61\163\164\145\x72\137\x6a\165\162\x75\163\141\156" => "\61", "\x6d\x61\x73\x74\145\x72\137\153\x65\154\x61\x73" => "\x31", "\x6d\x61\163\164\x65\x72\x5f\153\145\154\157\155\160\157\153\137\x6d\x61\x70\145\154" => "\61", "\x6d\141\x73\x74\145\162\x5f\x6d\141\x70\x65\x6c" => "\x31", "\x6d\141\163\x74\145\162\137\x73\x69\163\x77\141" => "\x31", "\155\141\x73\164\x65\162\137\x73\x6d\164" => "\x30", "\155\x61\163\164\145\x72\137\x74\160" => "\x30", "\x70\x6f\x73\164" => "\x32", "\x70\x6f\x73\164\x5f\143\x6f\x6d\x6d\145\156\164\x73" => "\62", "\x70\x6f\163\164\x5f\162\145\x70\x6c\x79" => "\62", "\x72\141\160\x6f\x72\x5f\141\144\x6d\x69\156\137\x73\145\x74\x74\151\156\147" => "\61", "\162\141\x70\157\162\137\x63\x61\164\x61\x74\x61\x6e\137\167\x61\x6c\x69" => "\x31", "\162\141\x70\157\x72\x5f\144\141\x74\141\137\x63\x61\x74\x61\164\x61\x6e" => "\x31", "\162\x61\x70\x6f\162\x5f\144\141\x74\x61\x5f\x66\x69\163\151\153" => "\61", "\162\x61\160\x6f\162\137\144\141\164\x61\x5f\163\151\x6b\141\x70" => "\x31", "\x72\141\160\x6f\162\137\146\x69\163\151\x6b" => "\61", "\x72\x61\x70\x6f\x72\x5f\153\x69\153\144" => "\61", "\x72\x61\x70\x6f\x72\137\153\153\155" => "\x31", "\x72\x61\160\x6f\x72\x5f\156\x61\151\153" => "\61", "\x72\141\x70\157\162\137\156\x69\154\141\151\x5f\141\153\x68\151\x72" => "\61", "\x72\x61\x70\157\162\137\156\x69\154\x61\x69\137\x65\x6b\x73\164\x72\x61" => "\x31", "\x72\x61\x70\x6f\x72\137\156\151\x6c\141\151\x5f\150\141\162\151\141\x6e" => "\x31", "\162\x61\x70\157\x72\137\156\x69\x6c\x61\x69\x5f\x70\164\163" => "\61", "\162\x61\160\157\x72\137\156\x69\x6c\141\151\x5f\163\151\153\141\x70" => "\x31", "\x72\x61\160\x6f\162\x5f\x70\x72\x65\x73\164\141\x73\151" => "\x31", "\162\165\156\x6e\151\156\147\x5f\164\x65\170\164" => "\x31", "\x73\x65\164\x74\151\156\147" => "\x31", "\165\163\x65\x72\163" => "\60", "\165\x73\x65\162\163\137\x67\x72\157\x75\x70\x73" => "\x30", "\x75\x73\x65\162\163\137\160\162\157\x66\x69\154\x65" => "\x30"]; return $data; } }
