<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Post_model extends CI_Model { public function getPostUser($id_user) { goto BU3Ci; OmI4R: $this->db->order_by("\x61\56\x75\160\144\141\164\145\x64", "\x64\145\163\143"); goto CoCPN; osgvu: return $posts; goto g1ck8; Ju6j7: $this->db->join("\155\141\163\164\145\x72\x5f\x67\x75\x72\x75\x20\142", "\x61\x2e\x64\x61\x72\x69\75\x62\56\x69\144\137\x67\165\x72\x75", "\x6c\x65\146\x74"); goto cySGK; ilUqe: RIALW: goto OmI4R; glVfc: $this->db->from("\x70\157\x73\164\40\x61"); goto Ju6j7; CoCPN: $posts = $this->db->get()->result(); goto osgvu; MCzhw: $this->db->where("\x61\56\144\x61\x72\x69", $id_user); goto ilUqe; BU3Ci: $this->db->select("\x61\56\x2a\x2c\40\x62\x2e\156\x61\x6d\141\137\x67\x75\x72\x75\x2c\40\x62\x2e\146\x6f\x74\x6f\54\x20\50\x53\x45\x4c\x45\x43\124\x20\103\117\x55\116\x54\x28\160\157\x73\x74\137\143\157\155\x6d\x65\156\x74\x73\56\x69\144\137\x63\157\155\155\145\156\x74\51\40\106\122\117\x4d\x20\160\x6f\x73\164\137\x63\x6f\155\x6d\145\x6e\164\163\40\127\110\105\x52\105\x20\x61\56\x69\144\x5f\160\x6f\163\x74\40\x3d\x20\160\x6f\x73\164\137\143\157\x6d\x6d\145\x6e\x74\x73\x2e\151\144\137\x70\x6f\163\164\x29\40\x41\123\x20\x6a\155\154"); goto glVfc; cySGK: if (!($id_user != 0)) { goto RIALW; } goto MCzhw; g1ck8: } public function getPostForUser($kepada, $kelas = null) { goto e_r2g; SPwKD: $posts = $this->db->get()->result(); goto m_Ypt; s6gvd: $this->db->order_by("\x61\56\165\x70\x64\x61\164\x65\x64", "\x64\145\163\x63"); goto SPwKD; e_r2g: $this->db->select("\141\56\x2a\x2c\x20\142\56\156\x61\x6d\x61\137\x67\165\x72\165\54\40\142\56\x66\x6f\x74\x6f\x2c\x20\50\x53\105\114\x45\103\124\x20\x43\117\125\116\x54\x28\160\x6f\163\164\x5f\143\x6f\x6d\155\145\156\x74\x73\56\151\x64\x5f\x63\157\155\155\x65\x6e\164\51\x20\106\x52\117\115\40\160\157\163\164\137\143\x6f\x6d\155\145\x6e\164\x73\40\x57\110\x45\122\105\40\x61\56\151\x64\x5f\160\x6f\x73\164\x20\x3d\40\x70\157\x73\x74\137\143\x6f\x6d\155\x65\x6e\x74\163\56\151\x64\x5f\160\157\x73\164\51\40\101\123\40\152\155\154"); goto NbFdn; PfXXg: LIvnm: goto s6gvd; NbFdn: $this->db->from("\160\157\x73\164\40\141"); goto BwXRC; gkeWB: if (!($kepada != null)) { goto LIvnm; } goto PhWgX; BwXRC: $this->db->join("\155\x61\x73\x74\x65\162\x5f\147\165\x72\165\x20\x62", "\141\x2e\144\141\162\x69\x3d\142\x2e\x69\x64\137\147\x75\162\x75", "\x6c\x65\146\x74"); goto gkeWB; PhWgX: $this->db->where("\50\141\56\x6b\145\160\141\144\x61\40\114\x49\113\x45\x20" . $kepada . "\x29\x20\x4f\x52\x20\50\141\x2e\153\x65\x70\x61\x64\141\x20\114\111\113\x45\40" . $kelas . "\x29"); goto PfXXg; m_Ypt: return $posts; goto xI7e3; xI7e3: } public function getIdComments($id_post) { goto yNqU4; yNqU4: $this->db->select("\x69\x64\x5f\143\157\x6d\155\145\156\x74"); goto c4Y8S; z4szF: return $ids; goto LiszR; c4Y8S: $this->db->where("\151\144\x5f\x70\157\163\164", $id_post); goto yP1DX; yP1DX: $ids = $this->db->get("\x70\157\163\164\x5f\143\x6f\155\155\x65\156\x74\x73")->result(); goto z4szF; LiszR: } public function getIdReplies($id_comment) { goto MP7_D; tHqPl: $this->db->where_in("\x69\x64\x5f\143\157\x6d\x6d\x65\x6e\x74", $id_comment); goto feuHg; hH6qP: goto XNkxO; goto GxKt6; QmRXY: return $ids; goto fNf0a; feuHg: XNkxO: goto rATw1; MP7_D: $this->db->select("\x69\x64\x5f\x72\x65\160\154\x79"); goto Obwm0; GxKt6: LzZla: goto tHqPl; Obwm0: if (is_array($id_comment)) { goto LzZla; } goto Whu8u; rATw1: $ids = $this->db->get("\x70\x6f\x73\164\x5f\x72\x65\x70\154\x79")->result(); goto QmRXY; Whu8u: $this->db->where("\x69\144\137\143\x6f\155\155\145\x6e\164", $id_comment); goto hH6qP; fNf0a: } }
