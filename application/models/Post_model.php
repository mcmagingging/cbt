<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Post_model extends CI_Model { public function getPostUser($id_user) { goto aeOYu; bj4X4: $this->db->where("\141\56\x64\x61\x72\151", $id_user); goto COSou; u6dUi: if (!($id_user != 0)) { goto gRolE; } goto bj4X4; eKtNz: return $posts; goto zHA3F; XM8TA: $this->db->from("\x70\x6f\163\x74\40\141"); goto qblLS; qblLS: $this->db->join("\x6d\x61\163\164\x65\x72\137\147\165\x72\165\x20\x62", "\141\x2e\144\141\162\151\75\142\56\x69\x64\137\147\x75\x72\165", "\x6c\x65\x66\164"); goto u6dUi; WSqZx: $posts = $this->db->get()->result(); goto eKtNz; aeOYu: $this->db->select("\x61\x2e\x2a\54\x20\142\x2e\156\141\155\x61\137\x67\x75\x72\165\x2c\x20\x62\56\x66\157\x74\x6f\x2c\x20\x28\x53\x45\114\x45\x43\124\40\x43\117\125\x4e\124\x28\160\x6f\x73\164\x5f\x63\157\x6d\x6d\145\x6e\x74\163\x2e\x69\144\x5f\x63\x6f\155\x6d\x65\156\164\51\40\106\122\x4f\115\40\x70\x6f\x73\164\x5f\143\157\x6d\155\x65\x6e\x74\x73\40\x57\x48\x45\122\x45\40\141\x2e\x69\x64\137\160\x6f\163\164\x20\x3d\x20\x70\157\x73\164\137\x63\157\155\x6d\145\x6e\x74\x73\x2e\x69\144\x5f\x70\x6f\163\x74\x29\x20\x41\123\40\152\155\154"); goto XM8TA; COSou: gRolE: goto Jrv8u; Jrv8u: $this->db->order_by("\141\x2e\165\x70\144\141\x74\145\x64", "\144\145\163\x63"); goto WSqZx; zHA3F: } public function getPostForUser($kepada, $kelas = null) { goto S4oq3; S4oq3: $this->db->select("\141\56\52\x2c\40\x62\56\156\141\x6d\x61\x5f\x67\x75\x72\165\54\40\142\56\x66\157\x74\x6f\x2c\x20\50\123\105\x4c\x45\x43\124\x20\x43\x4f\125\x4e\x54\x28\x70\157\x73\x74\137\x63\x6f\x6d\155\145\x6e\164\163\x2e\151\x64\137\143\x6f\155\x6d\x65\156\x74\51\x20\x46\122\x4f\115\x20\160\157\163\x74\x5f\143\157\155\155\145\156\x74\163\40\127\110\x45\x52\105\x20\x61\x2e\151\144\x5f\160\157\x73\x74\40\x3d\x20\160\157\163\x74\137\143\x6f\155\155\x65\156\x74\163\56\151\x64\x5f\160\157\x73\x74\51\40\x41\123\x20\x6a\155\154"); goto ykcSQ; lDDnO: if (!($kepada != null)) { goto uYeAh; } goto JlVYx; by1sF: uYeAh: goto ow7BM; JlVYx: $this->db->where("\50\x61\56\153\x65\160\141\144\141\40\114\x49\x4b\105\x20" . $kepada . "\51\40\x4f\122\40\50\x61\x2e\153\145\x70\141\x64\141\x20\x4c\111\113\105\x20" . $kelas . "\51"); goto by1sF; ow7BM: $this->db->order_by("\141\56\x75\x70\x64\x61\x74\x65\144", "\x64\145\x73\143"); goto U_K65; gF5hU: return $posts; goto E6nb1; ItszY: $this->db->join("\x6d\141\x73\x74\x65\162\137\x67\x75\x72\165\40\142", "\x61\56\144\x61\x72\151\x3d\x62\x2e\x69\x64\137\147\x75\162\x75", "\x6c\x65\146\164"); goto lDDnO; ykcSQ: $this->db->from("\160\x6f\163\x74\x20\141"); goto ItszY; U_K65: $posts = $this->db->get()->result(); goto gF5hU; E6nb1: } public function getIdComments($id_post) { goto Od0fI; WXSBe: $ids = $this->db->get("\160\x6f\163\x74\137\x63\x6f\x6d\x6d\145\x6e\164\163")->result(); goto bFkba; CW3yI: $this->db->where("\x69\x64\x5f\160\157\x73\x74", $id_post); goto WXSBe; bFkba: return $ids; goto tGm3g; Od0fI: $this->db->select("\151\144\137\143\x6f\x6d\155\145\x6e\x74"); goto CW3yI; tGm3g: } public function getIdReplies($id_comment) { goto rAdY6; Z3fVw: $this->db->where("\151\x64\x5f\143\157\155\155\145\156\164", $id_comment); goto OD1fZ; rAdY6: $this->db->select("\151\144\x5f\162\145\160\154\171"); goto CWl8Q; GU6l1: $this->db->where_in("\x69\x64\137\143\157\155\155\145\156\164", $id_comment); goto zJ8yd; cJvqX: $ids = $this->db->get("\160\x6f\x73\x74\137\162\145\x70\154\x79")->result(); goto R0oJ4; gVqlc: R3Cnb: goto GU6l1; OD1fZ: goto tIdC4; goto gVqlc; zJ8yd: tIdC4: goto cJvqX; CWl8Q: if (is_array($id_comment)) { goto R3Cnb; } goto Z3fVw; R0oJ4: return $ids; goto qWOrI; qWOrI: } }
