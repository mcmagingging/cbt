<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\101\x53\x45\120\101\124\x48") or exit("\116\x6f\40\144\x69\x72\145\143\x74\40\163\x63\162\x69\160\164\x20\x61\143\x63\145\x73\163\40\141\x6c\154\x6f\167\145\144"); class Install extends CI_Controller { function __construct() { goto DLEns; eL3I0: $this->load->dbforge(); goto w90Je; XJW0B: if (!($db["\144\145\x66\141\x75\x6c\164"]["\144\x61\164\x61\x62\141\163\145"] != '')) { goto e0N7O; } goto kt20z; Vx3Dj: $this->load->model("\111\x6e\x73\164\x61\x6c\x6c\x5f\x6d\157\x64\145\154", "\x69\x6e\163\x74\x61\x6c\x6c"); goto zKVQT; DLEns: parent::__construct(); goto gDNc2; zKVQT: $this->load->model("\104\x61\x73\150\142\157\x61\162\144\x5f\x6d\x6f\144\x65\x6c", "\x64\141\163\150\x62\x6f\x61\162\x64"); goto kTTf2; w90Je: e0N7O: goto Vx3Dj; kt20z: $this->load->database(); goto eL3I0; gDNc2: include APPPATH . "\143\157\x6e\146\151\147\x2f\144\x61\164\141\142\x61\163\145\56\160\x68\160"; goto XJW0B; kTTf2: } public function output_json($data, $encode = true) { goto IbxMi; IbxMi: if (!$encode) { goto Id52z; } goto jV1j5; jV1j5: $data = json_encode($data); goto T5XvX; Yk3pc: $this->output->set_content_type("\x61\160\160\x6c\151\x63\x61\164\x69\157\x6e\x2f\152\x73\157\x6e")->set_output($data); goto zMD9j; T5XvX: Id52z: goto Yk3pc; zMD9j: } public function index() { goto K5gTV; JzDzZ: if ($res == "\62") { goto yGv2f; } goto E1hBd; qwPNK: W_88w: goto poALO; HogA7: goto NtNKA; goto p0zYS; E1hBd: if ($res == "\x33") { goto YKfVV; } goto EofCh; dbSH9: $data["\x6d\x73\x67"] = "\142\x65\154\x75\x6d\x20\141\x64\141\40\141\x64\x6d\151\156\151\163\x74\x72\141\x74\157\x72"; goto gaJBa; gaJBa: NtNKA: goto LFqcv; Usedw: goto NtNKA; goto ynJhq; LFqcv: $data = $this->getSaved(); goto al2mD; K5gTV: $res = $this->install->check_installer(); goto VZ5rZ; qLeNB: goto T09YV; goto qwPNK; al2mD: $data->error = $res; goto FHddr; p0zYS: yGv2f: goto eBL1O; Py8en: T09YV: goto xQL9m; EofCh: $data["\x6d\x73\x67"] = "\x62\145\154\165\x6d\x20\141\x64\x61\x20\x64\x61\164\x61\x20\x73\x65\153\157\x6c\x61\x68"; goto HogA7; s2ChC: $this->load->view("\x69\156\163\x74\141\x6c\x6c\57\146\157\x6f\164\x65\162"); goto qLeNB; ynJhq: YKfVV: goto dbSH9; FHddr: $this->load->view("\x69\156\163\164\141\x6c\x6c\57\x68\x65\x61\x64\x65\x72", ["\144\x61\164\141" => $data]); goto mXJZX; mXJZX: $this->load->view("\151\156\163\x74\x61\154\154\x2f\x73\164\145\160"); goto s2ChC; VZ5rZ: if ($res == "\x30") { goto W_88w; } goto JzDzZ; poALO: redirect("\165\160\x64\141\x74\x65"); goto Py8en; eBL1O: $data["\155\163\x67"] = "\x73\145\x62\x61\x67\151\x61\x6e\x20\x74\x61\x62\145\x6c\x20\142\145\154\x75\155\x20\x64\151\x62\165\x61\164"; goto Usedw; xQL9m: } function getSaved() { goto G6V0t; g4LWa: $data["\141\154\x61\x6d\141\164"] = $setting->alamat; goto Ml6yR; G5z8S: $data["\155\163\147"] = "\124\x61\142\x6c\145\40\140\165\x73\145\x72\163\140\x20\x62\x65\x6c\165\155\x20\144\151\x62\165\x61\x74"; goto CExCs; smsxO: $data["\165\163\x65\162\156\141\x6d\x65"] = $db["\144\145\146\x61\165\x6c\x74"]["\165\163\145\x72\x6e\x61\x6d\x65"]; goto MBDtK; ZCXI2: $current_page = $admin == null ? 2 : ($setting == null ? 3 : 4); goto gj3rV; Gwv6M: $data["\144\141\164\141\x62\141\163\x65"] = $database; goto XRskM; VcWlf: $data["\153\x65\143"] = $setting->kecamatan; goto gQdLL; koGxK: $data["\x64\x65\x73\141"] = ''; goto EpN61; GHYYM: $data["\152\x65\156\x6a\141\x6e\147"] = ''; goto kRXx2; lr5BV: $data["\156\141\x6d\141\x5f\x61\x64\155\151\x6e"] = $admin->first_name . "\40" . $admin->last_name; goto edRBh; yX_Zz: if (!($admin != null)) { goto lDHrg; } goto lr5BV; JHfV7: $data["\143\x75\x72\x72\x65\156\x74\137\x70\x61\147\145"] = $current_page; goto CSVqj; NoEVZ: $data["\x6b\x65\160\x73\145\x6b"] = ''; goto y6xDz; iTcvd: $data["\141\x70\x6c\151\x6b\141\163\151"] = ''; goto P2uv_; CSVqj: return json_decode(json_encode($data)); goto EZ1D_; P2uv_: $data["\163\145\x6b\x6f\154\141\x68"] = ''; goto GHYYM; nKzQl: $database = $db["\x64\145\146\141\x75\x6c\164"]["\x64\141\164\141\x62\141\x73\x65"]; goto P6Fi6; j6rQT: $data["\160\141\x73\x73\x5f\141\144\x6d\x69\156"] = ''; goto iTcvd; soG4w: $setting = $this->dashboard->getSetting(); goto g83CF; EpN61: $data["\153\145\x63"] = ''; goto ETrGx; kRXx2: $data["\x73\141\x74\x75\x61\x6e"] = ''; goto NoEVZ; OHxiw: FaZRF: goto nq9je; bRVYI: $data["\163\x65\153\x6f\x6c\x61\x68"] = $setting->sekolah; goto kOK5N; MBDtK: $data["\x70\141\x73\163\x77\157\162\144"] = $db["\x64\x65\146\x61\165\154\164"]["\x70\141\x73\x73\167\x6f\x72\144"]; goto Gwv6M; d1osQ: lDHrg: goto soG4w; hp6e7: $data["\160\162\x6f\x76"] = ''; goto ivZpF; XWPz3: $data["\x70\162\x6f\166"] = $setting->provinsi; goto nlGsy; ivZpF: $current_page = 2; goto NzFAu; XRskM: $data["\156\x61\x6d\x61\x5f\x61\144\x6d\x69\156"] = ''; goto Lp2jd; ETrGx: $data["\x6b\157\x74\x61"] = ''; goto hp6e7; yn2F9: $data["\160\x61\x73\163\x5f\x61\x64\x6d\151\156"] = $admin->password; goto d1osQ; P6Fi6: $data["\x68\x6f\163\164\156\141\x6d\x65"] = $db["\x64\145\x66\141\165\154\164"]["\x68\x6f\163\x74\156\x61\155\x65"]; goto smsxO; edRBh: $data["\165\163\x65\x72\137\x61\x64\155\x69\156"] = $admin->username; goto yn2F9; CExCs: goto EKElD; goto OHxiw; lVjfm: $data["\153\145\160\x73\145\153"] = $setting->kepsek; goto g4LWa; nq9je: $admin = $this->db->get("\165\x73\x65\162\x73")->row(); goto yX_Zz; Lp2jd: $data["\165\163\x65\x72\x5f\141\144\155\151\x6e"] = ''; goto j6rQT; iPM54: $data["\141\160\154\151\x6b\x61\163\x69"] = $setting->nama_aplikasi; goto bRVYI; b8OmW: $data["\163\x61\x74\165\x61\x6e"] = $setting->satuan_pendidikan; goto lVjfm; NzFAu: if ($this->db->table_exists("\165\163\145\162\163")) { goto FaZRF; } goto g3oro; gj3rV: EKElD: goto JHfV7; kOK5N: $data["\x6a\145\156\x6a\x61\x6e\147"] = $setting->jenjang; goto b8OmW; Ml6yR: $data["\144\145\163\x61"] = $setting->desa; goto VcWlf; nlGsy: YJh8N: goto ZCXI2; g3oro: $current_page = 2; goto G5z8S; gQdLL: $data["\x6b\157\164\x61"] = $setting->kota; goto XWPz3; G6V0t: include APPPATH . "\x63\x6f\156\x66\151\147\x2f\144\141\164\x61\x62\141\163\145\x2e\160\x68\x70"; goto nKzQl; g83CF: if (!($setting != null)) { goto YJh8N; } goto iPM54; y6xDz: $data["\x61\x6c\141\155\x61\x74"] = ''; goto koGxK; EZ1D_: } public function steps() { goto UQxEb; RcnRR: $this->load->view("\151\156\163\164\x61\x6c\x6c\x2f\163\x74\x65\x70"); goto fUm0C; mDvcu: $this->load->view("\151\x6e\163\x74\141\154\154\57\150\x65\x61\x64\145\x72", ["\x64\x61\164\141" => $data]); goto RcnRR; UQxEb: $data = $this->getSaved(); goto mDvcu; fUm0C: $this->load->view("\x69\x6e\163\x74\141\154\x6c\57\146\x6f\x6f\x74\145\162"); goto gYzpH; gYzpH: } public function checkDatabase() { goto WouYD; WL8ml: $data["\x68\157\163\x74"] = false; goto VCg0r; zqIUf: $data["\x64\141\164\141\142\141\163\x65"] = $this->create_database($hostname, $hostuser, $hostpass, $database); goto zG47n; HQGv1: $new = str_replace("\x25\x55\x53\105\122\116\x41\115\x45\x25", $hostuser, $new); goto UaClc; SRtZd: H3e9D: goto r5yo1; orZKc: goto H3e9D; goto SpT1A; tbt8u: $handle = fopen($output_path, "\167\x2b"); goto A2KnW; D7Epy: if ($this->validate_host($hostname, $hostuser, $database)) { goto ov8kN; } goto WL8ml; r5yo1: Dl_f5: goto pHcQ2; ETQYF: goto g_XUx; goto VCaAx; UaClc: $new = str_replace("\x25\120\101\123\123\x57\117\x52\x44\x25", $hostpass, $new); goto EYBuF; Eaxar: $hostuser = $this->input->post("\x68\157\163\164\x75\163\145\x72", true); goto baskY; VCaAx: ov8kN: goto d8elu; wMojt: DfQIQ: goto qdwuE; VCg0r: $data["\150\157\163\164\137\155\x73\147"] = "\164\x69\x64\141\x6b\x20\142\157\x6c\x65\x68\x20\141\144\x61\40\x79\141\x6e\147\x20\x6b\x6f\163\157\x6e\x67"; goto ETQYF; kDmRr: $data["\150\157\163\164\x5f\155\163\x67"] = "\x73\x75\x6b\x73\x65\163"; goto e6XlB; zW2st: $database = $this->input->post("\x64\141\164\141\142\141\163\145", true); goto D7Epy; ZCDdu: $new = str_replace("\45\x48\117\123\124\x4e\x41\x4d\x45\45", $hostname, $database_file); goto HQGv1; cMNyW: $data["\150\x6f\163\164\137\x6d\x73\x67"] = "\142\x65\x68\141\163\151\x6c"; goto zqIUf; PgDOD: if (is_writable($output_path)) { goto DfQIQ; } goto Cm3FX; SpT1A: XlQtU: goto qR4TK; eR9ay: $database_file = file_get_contents($template_path); goto ZCDdu; e6XlB: $data["\144\x61\164\141\142\x61\163\145"] = true; goto SRtZd; WouYD: $hostname = $this->input->post("\x68\x6f\163\x74\x6e\141\x6d\145", true); goto Eaxar; FjS0q: $data["\150\157\x73\164\x5f\x6d\163\147"] = "\147\141\x67\141\154\x20\155\145\x6d\142\x75\x61\164\40\x6e\x61\155\x61\x20\x64\x61\164\141\142\141\163\145"; goto orZKc; qR4TK: $data["\150\x6f\x73\x74"] = true; goto cMNyW; baskY: $hostpass = $this->input->post("\x68\x6f\163\x74\160\x61\163\163", true); goto zW2st; tPTih: $this->output_json($data); goto pwMxO; zG47n: $data["\164\x61\x62\154\x65"] = $this->create_tables($hostname, $hostuser, $hostpass, $database); goto Lra67; A2KnW: @chmod($output_path, 0777); goto PgDOD; uUoA2: goto Dl_f5; goto wMojt; EYBuF: $new = str_replace("\x25\x44\x41\x54\x41\102\x41\123\x45\x25", $database, $new); goto tbt8u; qdwuE: if (fwrite($handle, $new)) { goto XlQtU; } goto IUhUT; IUhUT: $data["\x68\157\163\x74"] = false; goto FjS0q; ul_vr: $data["\x68\x6f\x73\164\137\x6d\163\147"] = "\164\151\x64\141\x6b\x20\141\144\141\40\x61\x6b\163\x65\163\40\x6b\x65\x20\146\151\154\x65\x20\144\141\164\x61\142\141\x73\x65\56\160\x68\160\54\40\160\x61\163\164\x69\153\141\156\40\160\145\x72\x6d\151\163\163\151\x6f\156\x20\163\165\144\141\150\x20\x64\151\x7a\x69\x6e\153\x61\x6e"; goto uUoA2; pHcQ2: g_XUx: goto tPTih; d8elu: $template_path = "\56\57\141\x73\163\x65\x74\163\x2f\x61\160\x70\x2f\x64\x62\57\144\x61\x74\x61\142\141\163\145\x2e\x70\150\x70"; goto eKDcY; eKDcY: $output_path = APPPATH . "\143\157\x6e\x66\x69\147\57\x64\x61\164\x61\x62\141\163\x65\x2e\160\x68\160"; goto eR9ay; Cm3FX: $data["\150\157\163\164"] = false; goto ul_vr; Lra67: $data["\150\x6f\x73\x74"] = true; goto kDmRr; pwMxO: } public function createDb() { goto YV1p4; lKEDV: $this->output_json($data); goto yQoLA; cWYqt: $hostuser = $this->input->post("\x68\x6f\163\x74\x75\163\x65\162", true); goto ZYVgS; QD3Y1: goto I9e4e; goto pRBlS; pRBlS: Z7X6_: goto hoV2y; YV1p4: $page = $this->input->post("\160\x61\x67\x65", true); goto FaMvF; US7gJ: $data["\x68\157\x73\x74\x5f\x6d\163\147"] = "\x73\164\145\160\40\x73\x61\154\x61\x68"; goto C4aj5; D20MT: $data["\x74\141\x62\154\145"] = $this->create_tables($hostname, $hostuser, $hostpass, $database); goto akktR; hoV2y: $hostname = $this->input->post("\x68\157\163\164\156\141\x6d\x65", true); goto cWYqt; AfbTD: $data["\144\x61\164\x61\x62\141\163\145"] = true; goto HE3Ua; ZYVgS: $hostpass = $this->input->post("\x68\x6f\x73\164\160\141\x73\163", true); goto AwoSf; FaMvF: if ($page == "\60") { goto Z7X6_; } goto uJ_uy; uJ_uy: $data["\x68\x6f\163\164"] = true; goto US7gJ; C4aj5: $data["\144\141\164\x61\142\x61\163\x65"] = false; goto IxPlr; yFb_d: $data["\150\x6f\163\x74\x5f\x6d\x73\x67"] = "\x73\x75\153\163\x65\x73"; goto AfbTD; IxPlr: $data["\x74\141\x62\154\145"] = false; goto QD3Y1; akktR: $data["\x68\x6f\x73\164"] = true; goto yFb_d; AwoSf: $database = $this->input->post("\x64\141\x74\141\x62\x61\163\145", true); goto D20MT; HE3Ua: I9e4e: goto lKEDV; yQoLA: } function validate_host($host, $usr, $db) { return !empty($host) && !empty($usr) && !empty($db); } function create_database($hostname, $hostuser, $hostpass, $database) { goto ABjst; MVJNw: $mysqli->close(); goto IE0oG; DjKXl: Lpt5M: goto UuJsj; QDyxH: return false; goto DjKXl; ABjst: $mysqli = new mysqli($hostname, $hostuser, $hostpass, ''); goto BhC8D; IE0oG: return true; goto fz7_n; BhC8D: if (!mysqli_connect_errno()) { goto Lpt5M; } goto QDyxH; UuJsj: $mysqli->query("\103\122\105\x41\x54\105\40\x44\101\x54\101\102\x41\x53\x45\x20\x49\106\x20\x4e\x4f\124\40\105\130\111\123\124\x53\x20" . $database); goto MVJNw; fz7_n: } function create_tables($hostname, $hostuser, $hostpass, $database) { goto OOcC5; Vnx60: return false; goto xzV7O; ZYa9V: return true; goto ltMjW; UBxfJ: $mysqli->close(); goto ZYa9V; xzV7O: louDo: goto rpYEL; u2jn0: $mysqli->multi_query($query); goto UBxfJ; rpYEL: $query = file_get_contents("\x2e\x2f\x61\x73\163\145\164\163\x2f\141\x70\x70\57\144\x62\x2f\x6d\x61\163\x74\x65\x72\x2e\163\x71\154"); goto u2jn0; OOcC5: $mysqli = new mysqli($hostname, $hostuser, $hostpass, $database); goto rG2rL; rG2rL: if (!mysqli_connect_errno()) { goto louDo; } goto Vnx60; ltMjW: } public function createSetting() { goto A202o; A202o: $nama_aplikasi = $this->input->post("\156\x61\155\141\137\141\x70\154\x69\x6b\x61\163\x69", true); goto OFGKY; rW0x0: $satuan_pendidikan = $this->input->post("\x73\141\x74\165\x61\156\x5f\x70\145\x6e\144\x69\x64\x69\x6b\141\156", true); goto CpBJA; XpzGJ: $insert = ["\151\x64\x5f\x73\145\x74\x74\151\x6e\x67" => 1, "\x73\x65\x6b\x6f\x6c\141\x68" => $sekolah, "\x6a\x65\156\x6a\141\156\147" => $jenjang, "\x73\141\164\x75\141\156\137\160\145\x6e\144\151\144\151\x6b\141\x6e" => $satuan_pendidikan, "\x61\x6c\x61\155\x61\164" => $alamat, "\x64\x65\x73\x61" => $desa, "\153\x6f\x74\141" => $kota, "\153\145\143\x61\155\x61\x74\141\156" => $kec, "\164\x65\154\x70" => $tlp, "\153\145\x70\163\x65\153" => $kepsek, "\x6e\141\x6d\x61\x5f\141\160\154\151\x6b\141\x73\151" => $nama_aplikasi]; goto Ix_kF; Ix_kF: $data["\x69\x6e\x73\x65\162\164"] = $this->db->insert("\x73\145\164\x74\151\156\147", $insert); goto koiel; koiel: $data["\163\141\x76\x65\144"] = $this->getSaved(); goto PUZ07; bS3_r: $alamat = $this->input->post("\141\x6c\x61\x6d\141\x74", true); goto Y25OT; UT1HE: $kec = $this->input->post("\153\145\143", true); goto jCMQ3; DipJq: $tlp = $this->input->post("\x74\154\160", true); goto XpzGJ; OFGKY: $sekolah = $this->input->post("\x6e\x61\155\x61\137\163\x65\x6b\157\x6c\x61\150", true); goto ykr8b; PUZ07: $this->output_json($data); goto czxRw; Y25OT: $kota = $this->input->post("\153\x6f\164\x61", true); goto UT1HE; jCMQ3: $desa = $this->input->post("\144\x65\x73\141", true); goto DipJq; ykr8b: $jenjang = $this->input->post("\x6a\x65\156\x6a\141\156\147", true); goto rW0x0; CpBJA: $kepsek = $this->input->post("\153\145\160\163\145\153", true); goto bS3_r; czxRw: } public function createAdmin() { goto upTb9; XlWKX: $username = $this->input->post("\165\x73\x65\162\156\x61\x6d\x65", true); goto yTZ7_; upTb9: $nama = $this->input->post("\156\141\x6d\x61\137\154\145\x6e\x67\153\x61\160", true); goto XlWKX; pIsXi: $namaAdmin = explode("\x20", $nama ?? ''); goto Veat0; ZLXTw: $additional_data = ["\146\x69\162\163\x74\x5f\156\141\155\x65" => $first_name, "\154\x61\x73\x74\137\x6e\141\x6d\x65" => $last_name]; goto NtIbh; dHHWD: $email = strtolower($nama) . "\x40\x61\x64\155\x69\x6e\x2e\143\157\155"; goto TS2IJ; NtIbh: $group = array("\x31"); goto dHHWD; Veat0: $first_name = $namaAdmin[0]; goto NqtDg; Os3s2: $data["\x61\x64\155\x69\x6e"] = $create; goto oG8Tg; TS2IJ: $create = $this->ion_auth->register($username, $password, $email, $additional_data, $group); goto Os3s2; oG8Tg: $this->output_json($data); goto WbD_I; yTZ7_: $password = $this->input->post("\x70\141\x73\x73\167\157\162\144", true); goto pIsXi; NqtDg: $last_name = end($namaAdmin); goto ZLXTw; WbD_I: } public function createApp() { goto d0Kad; whCT6: $group = array("\61"); goto grvwG; mtFXo: $data["\x61\x64\155\151\x6e"] = $create; goto zt9oN; Vexqk: $prov = $this->input->post("\160\162\x6f\166", true); goto o6igP; ieYMc: $desa = $this->input->post("\144\145\x73\141", true); goto Vexqk; wWcnO: $nama_aplikasi = $this->input->post("\156\141\155\141\x5f\141\x70\154\151\153\141\x73\x69", true); goto fDBps; XkwzO: $username = $this->input->post("\x75\x73\x65\x72\x6e\x61\155\145", true); goto P8xn2; zMGz3: $create = $this->ion_auth->register($username, $password, $email, $additional_data, $group); goto aKk4r; o6igP: $insert = ["\151\144\x5f\163\x65\x74\164\x69\156\147" => 1, "\x73\x65\x6b\x6f\x6c\141\150" => $sekolah, "\152\x65\x6e\152\x61\156\147" => $jenjang, "\163\x61\164\165\141\x6e\137\x70\145\x6e\x64\x69\144\151\x6b\x61\156" => $satuan_pendidikan, "\x61\154\x61\155\x61\164" => $alamat, "\x64\x65\x73\x61" => $desa, "\x6b\157\164\x61" => $kota, "\153\145\x63\141\155\141\x74\141\x6e" => $kec, "\x70\x72\157\x76\151\x6e\x73\151" => $prov, "\153\145\x70\163\x65\x6b" => $kepsek, "\x6e\x61\x6d\141\x5f\141\160\x6c\x69\x6b\141\x73\151" => $nama_aplikasi]; goto T7vQR; h7Zu7: $kec = $this->input->post("\153\x65\x63", true); goto ieYMc; TegWJ: $additional_data = ["\146\x69\162\x73\164\137\156\x61\x6d\145" => $first_name, "\154\141\163\164\x5f\x6e\x61\155\x65" => $last_name]; goto whCT6; J1oxP: $satuan_pendidikan = $this->input->post("\x73\x61\x74\165\141\x6e", true); goto OM8ZU; grvwG: $email = strtolower($nama) . "\x40\141\x64\x6d\151\x6e\x2e\x63\157\155"; goto zMGz3; aq0SD: $last_name = end($namaAdmin); goto TegWJ; aKk4r: $data["\151\156\163\145\162\164"] = $this->db->insert("\163\x65\x74\164\x69\156\147", $insert); goto mtFXo; T7vQR: $namaAdmin = explode("\x20", $nama ?? ''); goto CnA3R; ouWGH: $kota = $this->input->post("\153\x6f\164\141", true); goto h7Zu7; zt9oN: $this->output_json($data); goto ofslA; fDBps: $sekolah = $this->input->post("\156\141\x6d\141\x5f\x73\x65\x6b\x6f\154\x61\150", true); goto YvrRf; OM8ZU: $kepsek = $this->input->post("\153\x65\160\163\x65\x6b", true); goto GPFS6; d0Kad: $nama = $this->input->post("\x6e\x61\x6d\x61\x5f\x6c\145\x6e\147\153\x61\x70", true); goto XkwzO; CnA3R: $first_name = $namaAdmin[0]; goto aq0SD; P8xn2: $password = $this->input->post("\x70\141\x73\163\167\157\162\x64", true); goto wWcnO; YvrRf: $jenjang = $this->input->post("\152\x65\x6e\152\141\156\147", true); goto J1oxP; GPFS6: $alamat = $this->input->post("\141\154\x61\x6d\141\x74", true); goto ouWGH; ofslA: } }
