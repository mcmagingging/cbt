<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Log_model extends CI_Model { function __construct() { parent::__construct(); $this->load->library("\x75\x73\145\162\137\141\147\x65\156\164"); } public function saveLog($type, $desc) { goto Nd9JH; xWEHf: $this->insertLog($user_id, $group->id, $group->name, $type, $desc, $agent, $os, $ip); goto go9yJ; G586a: cLfRb: goto BgHn0; nFmiu: if ($this->agent->is_mobile()) { goto cLfRb; } goto DT1Vt; DT1Vt: $agent = "\104\x61\x74\141\40\x75\x73\x65\x72\x20\147\141\147\x61\154\x20\x64\151\x20\x64\141\x70\x61\x74\x6b\141\x6e"; goto GZXS7; BgHn0: $agent = $this->agent->mobile(); goto xJCDg; zQgjm: $group = $this->ion_auth->get_users_groups($user_id)->row(); goto mBqkb; mBqkb: if ($this->agent->is_browser()) { goto EY_YJ; } goto nFmiu; xJCDg: HQuHU: goto Ro7bh; Ro7bh: $os = $this->agent->platform(); goto vMBSM; GZXS7: goto HQuHU; goto VcPaf; vMBSM: $ip = $this->input->ip_address(); goto xWEHf; HTOjt: goto HQuHU; goto G586a; B6YkA: $agent = $this->agent->browser() . "\40" . $this->agent->version(); goto HTOjt; Nd9JH: $user_id = $this->ion_auth->user()->row()->id; goto zQgjm; VcPaf: EY_YJ: goto B6YkA; go9yJ: } private function insertLog($id_user, $group_id, $group_name, $type, $desc, $agent, $os, $ip) { $data = array("\151\x64\x5f\x75\x73\145\162" => $id_user, "\151\x64\x5f\x67\162\x6f\x75\160" => $group_id, "\x6e\141\155\145\x5f\147\x72\157\165\x70" => $group_name, "\x6c\x6f\147\x5f\x64\145\163\x63" => $desc, "\x61\144\144\162\145\163\x73" => $ip, "\x61\x67\x65\x6e\164" => $agent, "\144\145\166\151\143\145" => $os); $this->db->insert("\x6c\x6f\x67", $data); } public function loadNotifikasi() { } public function loadChat() { } public function loadAktifitas($limit = null) { goto y0BSE; hcgpU: IsgL7: goto W384T; G3kKo: $this->db->from("\x6c\157\147\40\x61"); goto XJGtp; BQ241: $this->db->join("\x67\x72\x6f\165\x70\x73\x20\x64", "\144\56\151\144\x3d\141\x2e\151\144\x5f\147\x72\157\165\x70"); goto Xp_bu; y0BSE: $this->db->query("\123\105\124\x20\x53\121\x4c\x5f\102\x49\107\x5f\123\105\x4c\105\x43\124\123\x3d\61"); goto ovZDr; ovZDr: $this->db->select("\141\x2e\52\x2c\x20\142\x2e\x66\151\x72\x73\164\137\x6e\141\x6d\x65\54\40\142\x2e\x6c\141\163\x74\x5f\x6e\141\x6d\x65\x2c\40\x64\56\x6e\x61\x6d\x65"); goto G3kKo; XJGtp: $this->db->join("\165\163\x65\162\x73\40\x62", "\142\x2e\x69\x64\75\141\x2e\151\x64\137\x75\163\x65\162", "\154\145\146\164"); goto BQ241; l2cHJ: return $result; goto SsIV7; W384T: $this->db->order_by("\x61\x2e\154\157\147\x5f\x74\151\155\x65", "\x44\x45\123\103"); goto e50Vq; e50Vq: $result = $this->db->get()->result(); goto l2cHJ; YHjZ3: $this->db->limit($limit, 0); goto hcgpU; Xp_bu: if (!($limit != null)) { goto IsgL7; } goto YHjZ3; SsIV7: } public function loadAktifitasSiswa($limit = null) { goto vHZbY; NOcPo: $this->db->where("\141\56\151\144\137\x67\x72\157\165\x70", "\63"); goto WNp8m; vHZbY: $this->db->query("\x53\105\x54\40\123\x51\x4c\x5f\102\111\107\137\123\x45\114\105\x43\x54\x53\x3d\x31"); goto ql1eY; ql1eY: $this->db->select("\x61\x2e\x2a\x2c\x20\x62\56\x66\x69\x72\x73\164\137\156\x61\155\x65\54\40\142\56\x6c\141\163\x74\x5f\x6e\x61\155\x65\54\40\x64\56\156\141\155\145"); goto mCUqf; qupMp: if (!($limit != null)) { goto xh5so; } goto XWT1O; mCUqf: $this->db->from("\x6c\x6f\147\x20\x61"); goto I3KUi; fV9UV: $result = $this->db->get()->result(); goto I_TjR; I3KUi: $this->db->join("\165\163\145\162\x73\40\142", "\x62\x2e\151\x64\x3d\x61\x2e\151\x64\137\x75\163\x65\x72", "\x6c\x65\x66\x74"); goto TPG5H; TPG5H: $this->db->join("\x67\162\157\165\160\163\x20\x64", "\144\x2e\151\x64\x3d\x61\56\151\x64\x5f\x67\162\157\165\x70"); goto qupMp; WNp8m: $this->db->order_by("\141\56\x6c\x6f\x67\137\164\x69\x6d\145", "\x44\105\x53\103"); goto fV9UV; I_TjR: return $result; goto wvofj; weGRy: xh5so: goto NOcPo; XWT1O: $this->db->limit($limit, 0); goto weGRy; wvofj: } }
