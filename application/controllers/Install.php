<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\x41\123\x45\120\x41\124\x48") or exit("\116\157\40\x64\x69\x72\x65\143\164\40\x73\143\x72\x69\x70\x74\x20\x61\143\x63\145\163\163\40\141\154\154\157\x77\145\144"); class Install extends CI_Controller { function __construct() { goto HlwmV; u6cob: $this->load->model("\104\141\163\x68\142\157\x61\x72\x64\137\x6d\157\x64\x65\x6c", "\144\141\x73\150\142\x6f\x61\x72\144"); goto N_pPb; AsZlG: $this->load->model("\x49\156\x73\x74\141\x6c\154\137\x6d\x6f\144\145\154", "\151\156\163\x74\x61\154\154"); goto u6cob; hyPQG: $this->load->dbforge(); goto n11SE; n11SE: TebCY: goto AsZlG; CLSM1: $this->load->database(); goto hyPQG; Kliwv: include APPPATH . "\x63\x6f\x6e\146\151\x67\57\144\x61\164\141\x62\x61\163\x65\56\160\150\160"; goto rBWTf; HlwmV: parent::__construct(); goto Kliwv; rBWTf: if (!($db["\x64\145\x66\x61\x75\154\164"]["\x64\x61\164\x61\142\x61\163\145"] != '')) { goto TebCY; } goto CLSM1; N_pPb: } public function output_json($data, $encode = true) { goto rZspE; SkIUt: $this->output->set_content_type("\141\160\160\154\151\x63\x61\164\x69\157\156\57\152\x73\157\156")->set_output($data); goto VZhWS; rZspE: if (!$encode) { goto DwPW6; } goto angAb; NrZjU: DwPW6: goto SkIUt; angAb: $data = json_encode($data); goto NrZjU; VZhWS: } public function index() { goto gH2QU; V1uMe: if ($res == "\62") { goto dRw__; } goto Rtd1a; t3DSb: redirect("\165\x70\x64\x61\x74\145"); goto IbdwS; wqzX1: q7xGK: goto JVqYr; RNP3I: $data = $this->getSaved(); goto bZooG; CDeBP: $this->load->view("\x69\x6e\x73\164\141\154\154\x2f\163\x74\x65\160"); goto ReVve; JVqYr: $data["\x6d\163\x67"] = "\x62\145\x6c\165\x6d\40\x61\x64\141\x20\141\144\x6d\x69\156\151\x73\164\x72\x61\x74\157\162"; goto n2Qzx; FLmAj: $data["\x6d\x73\147"] = "\142\x65\x6c\165\x6d\x20\x61\x64\x61\x20\x64\141\164\141\40\x73\145\153\157\x6c\x61\x68"; goto foU7b; aQX9N: goto AQ9pz; goto X8BX3; IbdwS: AQ9pz: goto Qo63c; l55WL: $data["\155\x73\x67"] = "\x73\145\x62\x61\147\151\141\x6e\x20\x74\141\142\145\x6c\x20\x62\145\154\x75\x6d\x20\x64\151\x62\165\x61\164"; goto p2KzH; bZooG: $data->error = $res; goto NTLAP; n2Qzx: xC_wG: goto RNP3I; NTLAP: $this->load->view("\x69\156\163\x74\x61\154\x6c\57\150\x65\141\x64\x65\162", ["\144\x61\164\141" => $data]); goto CDeBP; X8BX3: Q1AUK: goto t3DSb; hpfQf: if ($res == "\60") { goto Q1AUK; } goto V1uMe; Rtd1a: if ($res == "\63") { goto q7xGK; } goto FLmAj; foU7b: goto xC_wG; goto wnN0m; gH2QU: $res = $this->install->check_installer(); goto hpfQf; p2KzH: goto xC_wG; goto wqzX1; wnN0m: dRw__: goto l55WL; ReVve: $this->load->view("\x69\x6e\x73\x74\141\x6c\x6c\57\x66\157\x6f\164\145\x72"); goto aQX9N; Qo63c: } function getSaved() { goto bMPMJ; COstk: return json_decode(json_encode($data)); goto NbJ19; dRIci: $data["\153\157\164\141"] = $setting->kota; goto KIiwG; PMY1R: $data["\144\x65\163\141"] = $setting->desa; goto yTN7W; qdy0K: $data["\144\145\163\x61"] = ''; goto UHiLU; ghZJI: if (!($admin != null)) { goto nuhrm; } goto XG40P; AYsS4: $data["\165\163\145\x72\137\141\x64\155\151\156"] = $admin->username; goto UU2Yv; M6ZpG: $data["\x73\145\153\157\x6c\141\x68"] = $setting->sekolah; goto jAXdB; phH7p: $database = $db["\144\x65\146\x61\x75\154\164"]["\x64\x61\164\141\x62\x61\x73\x65"]; goto jCa9A; EOO7V: $data["\141\x6c\x61\155\x61\x74"] = $setting->alamat; goto PMY1R; G3QbO: $admin = $this->db->get("\x75\x73\145\x72\163")->row(); goto ghZJI; UU2Yv: $data["\x70\x61\x73\x73\x5f\x61\144\155\151\156"] = $admin->password; goto p_taR; ZhkK5: $setting = $this->dashboard->getSetting(); goto ZEvu2; LzZgR: $data["\163\141\164\165\141\x6e"] = ''; goto JPFif; Kw016: goto l5HF0; goto zspYZ; WMtj2: $data["\165\163\x65\x72\137\x61\144\x6d\151\x6e"] = ''; goto e75Wa; p4XHu: $data["\141\154\x61\155\x61\x74"] = ''; goto qdy0K; P2wsC: $data["\160\x72\x6f\166"] = ''; goto rqh7k; tnXRG: $data["\x73\141\164\165\141\x6e"] = $setting->satuan_pendidikan; goto dPIja; JPFif: $data["\x6b\145\x70\x73\x65\x6b"] = ''; goto p4XHu; rqh7k: $current_page = 2; goto KCq4s; SQTvE: $data["\x6a\x65\156\x6a\x61\156\x67"] = ''; goto LzZgR; GrQr8: $data["\x63\165\x72\162\145\x6e\x74\x5f\160\x61\147\145"] = $current_page; goto COstk; jLMv4: $data["\165\163\145\162\156\x61\155\145"] = $db["\x64\145\x66\141\165\x6c\164"]["\x75\163\145\x72\156\x61\x6d\x65"]; goto s3CJY; brc7e: l5HF0: goto GrQr8; yYNYL: $data["\x6e\141\x6d\x61\137\x61\144\x6d\x69\x6e"] = ''; goto WMtj2; UHiLU: $data["\x6b\145\x63"] = ''; goto nE7Sa; KIiwG: $data["\x70\162\x6f\x76"] = $setting->provinsi; goto OfSMa; qquUf: $data["\x6d\x73\147"] = "\124\x61\142\x6c\x65\x20\x60\x75\163\145\x72\x73\140\x20\142\x65\154\165\x6d\x20\x64\x69\x62\x75\x61\164"; goto Kw016; jCa9A: $data["\x68\x6f\163\x74\156\x61\155\145"] = $db["\144\145\146\141\x75\x6c\164"]["\150\x6f\163\164\156\141\x6d\145"]; goto jLMv4; x760X: $data["\141\160\x6c\x69\153\x61\163\151"] = $setting->nama_aplikasi; goto M6ZpG; ZEvu2: if (!($setting != null)) { goto oZz3E; } goto x760X; QdP1S: $current_page = 2; goto qquUf; p_taR: nuhrm: goto ZhkK5; zspYZ: yeyK2: goto G3QbO; KQewF: $data["\141\x70\154\x69\x6b\x61\x73\151"] = ''; goto jVyFF; tRWWr: $current_page = $admin == null ? 2 : ($setting == null ? 3 : 4); goto brc7e; yTN7W: $data["\153\x65\143"] = $setting->kecamatan; goto dRIci; e75Wa: $data["\x70\x61\x73\x73\137\x61\144\x6d\x69\156"] = ''; goto KQewF; dPIja: $data["\x6b\145\160\163\145\x6b"] = $setting->kepsek; goto EOO7V; xauBF: $data["\x64\141\164\x61\x62\x61\163\x65"] = $database; goto yYNYL; s3CJY: $data["\x70\141\163\163\167\157\162\144"] = $db["\x64\x65\x66\141\165\154\x74"]["\160\x61\163\163\167\157\x72\144"]; goto xauBF; nE7Sa: $data["\x6b\x6f\164\x61"] = ''; goto P2wsC; bMPMJ: include APPPATH . "\x63\157\156\146\x69\147\x2f\144\x61\164\141\142\x61\163\145\56\x70\x68\x70"; goto phH7p; KCq4s: if ($this->db->table_exists("\165\163\x65\x72\x73")) { goto yeyK2; } goto QdP1S; jVyFF: $data["\163\x65\153\x6f\154\x61\x68"] = ''; goto SQTvE; XG40P: $data["\156\141\x6d\141\x5f\141\144\155\x69\156"] = $admin->first_name . "\40" . $admin->last_name; goto AYsS4; OfSMa: oZz3E: goto tRWWr; jAXdB: $data["\x6a\x65\156\x6a\x61\156\x67"] = $setting->jenjang; goto tnXRG; NbJ19: } public function steps() { goto GSa1v; JaiRL: $this->load->view("\151\156\163\164\141\154\x6c\x2f\x66\157\x6f\x74\145\x72"); goto n9eQi; yGANH: $this->load->view("\151\156\163\164\x61\x6c\x6c\x2f\x68\145\141\x64\x65\x72", ["\144\141\164\141" => $data]); goto DtOpr; DtOpr: $this->load->view("\151\x6e\x73\x74\x61\154\x6c\x2f\x73\164\x65\160"); goto JaiRL; GSa1v: $data = $this->getSaved(); goto yGANH; n9eQi: } public function checkDatabase() { goto OXM06; dO8zx: bFthS: goto AkWfQ; n7CCV: $handle = fopen($output_path, "\167\53"); goto UZMnT; qkHxd: $new = str_replace("\x25\110\117\x53\x54\x4e\101\x4d\105\x25", $hostname, $database_file); goto ug0G4; ayH1u: $data["\x68\x6f\163\x74"] = true; goto ni00s; OAHbx: $data["\150\157\x73\164"] = false; goto MaCZL; ni00s: $data["\150\x6f\x73\164\x5f\x6d\163\x67"] = "\163\165\x6b\163\145\163"; goto ZM8Qt; M0VYv: $hostpass = $this->input->post("\x68\157\163\164\160\141\163\x73", true); goto sM2cV; ItXO3: m8JSP: goto rpXO3; LyhoA: $database_file = file_get_contents($template_path); goto qkHxd; w4E7U: $output_path = APPPATH . "\x63\157\x6e\x66\x69\x67\x2f\x64\141\x74\141\x62\141\x73\145\x2e\x70\150\160"; goto LyhoA; ARFYo: $data["\x74\x61\x62\x6c\145"] = $this->create_tables($hostname, $hostuser, $hostpass, $database); goto ayH1u; OXM06: $hostname = $this->input->post("\150\x6f\x73\164\156\141\x6d\145", true); goto P7S7m; Qbup1: goto m8JSP; goto dO8zx; UZMnT: @chmod($output_path, 0777); goto xrQN5; YAjXc: $data["\x68\157\x73\x74\137\155\x73\x67"] = "\x74\x69\x64\x61\x6b\40\x62\157\154\x65\x68\40\x61\144\141\x20\x79\141\156\x67\x20\x6b\157\163\157\x6e\x67"; goto IJ0Yn; XNV0D: $data["\150\x6f\x73\164"] = false; goto zqpPl; HSBeE: $data["\150\x6f\x73\x74\x5f\x6d\163\x67"] = "\142\145\150\x61\x73\x69\154"; goto gWq0U; ug0G4: $new = str_replace("\x25\x55\x53\x45\122\x4e\101\115\x45\45", $hostuser, $new); goto t3sSp; rpXO3: yWWtC: goto rrpBJ; P7S7m: $hostuser = $this->input->post("\x68\157\x73\164\165\x73\x65\162", true); goto M0VYv; IJ0Yn: goto yWWtC; goto bTsEj; bTsEj: T63bY: goto wNHKy; YC6jn: $data["\x68\x6f\163\x74"] = true; goto HSBeE; W9jV2: rn7XN: goto ItXO3; sM2cV: $database = $this->input->post("\x64\141\x74\x61\142\x61\x73\x65", true); goto sjygr; wNHKy: $template_path = "\x2e\x2f\x61\163\x73\x65\x74\163\57\x61\160\160\57\x64\x62\57\144\x61\164\141\x62\x61\163\x65\x2e\x70\150\x70"; goto w4E7U; sjygr: if ($this->validate_host($hostname, $hostuser, $database)) { goto T63bY; } goto vYR49; zqpPl: $data["\150\x6f\163\164\137\x6d\x73\147"] = "\147\141\x67\141\x6c\x20\x6d\x65\x6d\x62\165\141\x74\40\x6e\x61\x6d\x61\x20\x64\141\x74\141\x62\x61\x73\145"; goto XrJgT; ZM8Qt: $data["\144\x61\x74\141\x62\x61\x73\145"] = true; goto W9jV2; t3sSp: $new = str_replace("\x25\x50\101\123\x53\x57\x4f\x52\104\45", $hostpass, $new); goto rOgQ3; rOgQ3: $new = str_replace("\x25\104\101\124\x41\102\x41\x53\x45\x25", $database, $new); goto n7CCV; gWq0U: $data["\x64\x61\164\141\x62\x61\163\x65"] = $this->create_database($hostname, $hostuser, $hostpass, $database); goto ARFYo; XrJgT: goto rn7XN; goto BlDYv; vYR49: $data["\150\157\x73\164"] = false; goto YAjXc; AkWfQ: if (fwrite($handle, $new)) { goto eTkdR; } goto XNV0D; xrQN5: if (is_writable($output_path)) { goto bFthS; } goto OAHbx; MaCZL: $data["\x68\x6f\163\164\137\155\x73\147"] = "\x74\151\x64\141\x6b\40\x61\x64\141\40\141\x6b\163\145\x73\x20\153\145\40\x66\x69\154\145\40\x64\141\x74\141\142\x61\x73\145\56\x70\150\160\x2c\40\160\141\163\164\151\153\x61\156\40\160\x65\162\155\x69\x73\x73\x69\x6f\x6e\40\x73\x75\144\x61\150\40\x64\151\x7a\151\x6e\x6b\x61\x6e"; goto Qbup1; rrpBJ: $this->output_json($data); goto E1I4e; BlDYv: eTkdR: goto YC6jn; E1I4e: } public function createDb() { goto q7vPj; gL9N7: $data["\150\157\x73\164"] = true; goto iMHO3; RsACG: $data["\150\157\x73\164\x5f\x6d\163\147"] = "\163\164\145\x70\x20\163\141\154\x61\x68"; goto lBSGg; CoEmg: $data["\x68\157\163\164"] = true; goto RsACG; fVb23: if ($page == "\x30") { goto Dosx6; } goto CoEmg; U3iix: $database = $this->input->post("\144\141\164\x61\142\141\163\145", true); goto OQ_Tv; q7vPj: $page = $this->input->post("\x70\x61\x67\145", true); goto fVb23; lBSGg: $data["\x64\141\164\141\142\141\x73\145"] = false; goto ik5mc; FloeT: E2wXi: goto cIWG_; ECTgf: goto E2wXi; goto yI6Vp; iMHO3: $data["\150\157\x73\164\x5f\155\x73\147"] = "\163\x75\153\x73\x65\163"; goto yXATu; Q1dYi: $hostname = $this->input->post("\150\x6f\163\x74\x6e\141\x6d\145", true); goto fWd5v; ik5mc: $data["\x74\x61\142\x6c\145"] = false; goto ECTgf; cIWG_: $this->output_json($data); goto l5_0z; OQ_Tv: $data["\164\141\x62\x6c\145"] = $this->create_tables($hostname, $hostuser, $hostpass, $database); goto gL9N7; fWd5v: $hostuser = $this->input->post("\150\157\x73\x74\165\x73\x65\x72", true); goto spaty; yXATu: $data["\x64\141\164\x61\142\x61\163\x65"] = true; goto FloeT; spaty: $hostpass = $this->input->post("\x68\157\163\164\x70\x61\163\x73", true); goto U3iix; yI6Vp: Dosx6: goto Q1dYi; l5_0z: } function validate_host($host, $usr, $db) { return !empty($host) && !empty($usr) && !empty($db); } function create_database($hostname, $hostuser, $hostpass, $database) { goto vFRL1; u84Kt: $mysqli->query("\103\x52\x45\x41\124\105\x20\104\101\124\x41\102\101\x53\x45\40\111\106\40\116\x4f\124\x20\105\x58\x49\123\x54\x53\x20" . $database); goto L06zv; r3lcu: return false; goto VmG3q; DAPP5: return true; goto brzpG; vFRL1: $mysqli = new mysqli($hostname, $hostuser, $hostpass, ''); goto Etgat; Etgat: if (!mysqli_connect_errno()) { goto cnA2U; } goto r3lcu; VmG3q: cnA2U: goto u84Kt; L06zv: $mysqli->close(); goto DAPP5; brzpG: } function create_tables($hostname, $hostuser, $hostpass, $database) { goto DCjMX; YK2Eo: g6USb: goto r2nNA; HCHwO: if (!mysqli_connect_errno()) { goto g6USb; } goto xrjeI; uYXfM: $mysqli->multi_query($query); goto hkyGB; DCjMX: $mysqli = new mysqli($hostname, $hostuser, $hostpass, $database); goto HCHwO; hkyGB: $mysqli->close(); goto s6yGM; r2nNA: $query = file_get_contents("\x2e\57\x61\x73\x73\x65\164\163\x2f\141\160\160\57\144\x62\x2f\155\x61\163\x74\145\162\56\163\x71\x6c"); goto uYXfM; s6yGM: return true; goto alhXM; xrjeI: return false; goto YK2Eo; alhXM: } public function createSetting() { goto lY2sl; CT14r: $tlp = $this->input->post("\x74\154\160", true); goto dNPnD; ptWL0: $this->output_json($data); goto zPVAo; C0xU1: $sekolah = $this->input->post("\x6e\x61\x6d\x61\x5f\163\145\153\157\x6c\x61\x68", true); goto tKPfn; vnHvp: $data["\x69\156\x73\x65\x72\x74"] = $this->db->insert("\163\x65\x74\164\151\156\147", $insert); goto dZmjh; tKPfn: $jenjang = $this->input->post("\152\145\x6e\x6a\x61\x6e\147", true); goto aVHFD; HkMaK: $kota = $this->input->post("\x6b\x6f\x74\x61", true); goto Bv2dP; dNPnD: $insert = ["\x69\x64\137\163\x65\164\164\x69\x6e\147" => 1, "\163\145\153\157\x6c\141\150" => $sekolah, "\x6a\x65\156\152\x61\156\147" => $jenjang, "\163\x61\164\x75\x61\x6e\x5f\x70\145\156\x64\x69\x64\x69\153\x61\x6e" => $satuan_pendidikan, "\x61\154\141\155\x61\x74" => $alamat, "\144\x65\x73\141" => $desa, "\153\x6f\164\x61" => $kota, "\153\145\143\141\x6d\x61\x74\141\x6e" => $kec, "\x74\145\154\x70" => $tlp, "\153\x65\x70\163\x65\153" => $kepsek, "\x6e\x61\x6d\141\137\x61\x70\154\x69\153\141\x73\151" => $nama_aplikasi]; goto vnHvp; dZmjh: $data["\x73\141\x76\x65\x64"] = $this->getSaved(); goto ptWL0; B0ry1: $desa = $this->input->post("\x64\145\163\x61", true); goto CT14r; lY2sl: $nama_aplikasi = $this->input->post("\156\141\155\x61\137\x61\x70\154\151\153\141\x73\151", true); goto C0xU1; aVHFD: $satuan_pendidikan = $this->input->post("\163\141\x74\165\141\x6e\137\x70\145\156\144\x69\144\151\x6b\x61\156", true); goto r7MRw; r7MRw: $kepsek = $this->input->post("\x6b\145\x70\x73\145\x6b", true); goto t0u8j; Bv2dP: $kec = $this->input->post("\x6b\145\x63", true); goto B0ry1; t0u8j: $alamat = $this->input->post("\141\x6c\x61\155\x61\164", true); goto HkMaK; zPVAo: } public function createAdmin() { goto VBXZN; H4qkJ: $group = array("\61"); goto zni2y; eZvJD: $data["\x61\x64\x6d\x69\x6e"] = $create; goto Jw02c; zni2y: $email = strtolower($nama) . "\x40\x61\144\155\x69\x6e\56\143\x6f\155"; goto lviAk; VBXZN: $nama = $this->input->post("\x6e\141\155\x61\x5f\x6c\x65\x6e\x67\153\141\160", true); goto z06tJ; suPjv: $last_name = end($namaAdmin); goto MALGV; fr3s3: $namaAdmin = explode("\40", $nama); goto bi3L1; z06tJ: $username = $this->input->post("\165\x73\x65\x72\x6e\141\155\145", true); goto qUERA; MALGV: $additional_data = ["\x66\x69\x72\x73\164\x5f\x6e\x61\x6d\x65" => $first_name, "\x6c\141\163\x74\137\x6e\x61\155\x65" => $last_name]; goto H4qkJ; lviAk: $create = $this->ion_auth->register($username, $password, $email, $additional_data, $group); goto eZvJD; Jw02c: $this->output_json($data); goto OerQn; qUERA: $password = $this->input->post("\x70\141\x73\163\x77\x6f\162\144", true); goto fr3s3; bi3L1: $first_name = $namaAdmin[0]; goto suPjv; OerQn: } public function createApp() { goto YoZd5; UuWuo: $nama_aplikasi = $this->input->post("\x6e\x61\155\x61\137\x61\x70\154\x69\153\x61\x73\x69", true); goto POh8H; POh8H: $sekolah = $this->input->post("\x6e\141\155\141\137\163\145\153\157\154\141\150", true); goto Gb9HP; rENHV: $kec = $this->input->post("\x6b\x65\x63", true); goto Fdl2F; FA3JD: $insert = ["\151\144\x5f\x73\145\164\164\151\x6e\x67" => 1, "\163\x65\153\157\x6c\141\x68" => $sekolah, "\x6a\x65\x6e\152\x61\x6e\147" => $jenjang, "\x73\141\164\165\141\156\x5f\x70\x65\x6e\x64\x69\144\x69\x6b\141\156" => $satuan_pendidikan, "\x61\x6c\x61\x6d\141\x74" => $alamat, "\x64\x65\163\x61" => $desa, "\153\x6f\164\x61" => $kota, "\x6b\x65\x63\141\155\141\x74\x61\x6e" => $kec, "\160\162\x6f\166\x69\156\x73\x69" => $prov, "\x6b\x65\160\163\145\153" => $kepsek, "\x6e\x61\x6d\x61\x5f\x61\x70\154\151\153\141\x73\151" => $nama_aplikasi]; goto VJEG8; DSlmr: $alamat = $this->input->post("\x61\154\x61\155\141\164", true); goto kqken; UZhav: $satuan_pendidikan = $this->input->post("\x73\x61\x74\165\141\156", true); goto aE8Tj; NgYXe: $data["\x61\x64\155\x69\156"] = $create; goto poKkw; NQV8l: $last_name = end($namaAdmin); goto SK7yq; K1_B0: $email = strtolower($nama) . "\100\141\x64\155\x69\x6e\56\x63\157\155"; goto h6KtO; X0R0s: $username = $this->input->post("\165\163\145\x72\x6e\141\x6d\145", true); goto uFW9n; sliBp: $first_name = $namaAdmin[0]; goto NQV8l; A8GKg: $group = array("\61"); goto K1_B0; uFW9n: $password = $this->input->post("\160\141\163\x73\x77\157\162\x64", true); goto UuWuo; YoZd5: $nama = $this->input->post("\x6e\141\155\141\x5f\x6c\145\x6e\x67\x6b\x61\160", true); goto X0R0s; g7lwP: $data["\x69\x6e\163\145\x72\164"] = $this->db->insert("\x73\145\x74\x74\x69\156\x67", $insert); goto NgYXe; poKkw: $this->output_json($data); goto VKxjc; VJEG8: $namaAdmin = explode("\40", $nama); goto sliBp; Fdl2F: $desa = $this->input->post("\144\x65\163\x61", true); goto XB0Wy; XB0Wy: $prov = $this->input->post("\x70\162\157\x76", true); goto FA3JD; Gb9HP: $jenjang = $this->input->post("\x6a\x65\156\x6a\141\x6e\x67", true); goto UZhav; kqken: $kota = $this->input->post("\153\157\x74\x61", true); goto rENHV; h6KtO: $create = $this->ion_auth->register($username, $password, $email, $additional_data, $group); goto g7lwP; SK7yq: $additional_data = ["\x66\151\162\x73\x74\x5f\x6e\x61\x6d\145" => $first_name, "\x6c\x61\163\x74\x5f\x6e\141\155\x65" => $last_name]; goto A8GKg; aE8Tj: $kepsek = $this->input->post("\x6b\145\160\x73\x65\153", true); goto DSlmr; VKxjc: } }
