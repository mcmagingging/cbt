<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\x41\x53\105\120\101\x54\110") or exit("\116\157\40\144\151\x72\x65\143\x74\40\x73\x63\x72\151\160\164\x20\141\143\x63\145\x73\x73\x20\141\x6c\154\157\x77\x65\144"); class Settings_model extends CI_Model { public function not_admin() { goto Ce16X; TR9Yq: $this->db->from("\x75\163\x65\162\163\40\141"); goto Dip9c; Dip9c: $this->db->join("\165\x73\x65\162\163\x5f\147\162\x6f\x75\160\x73\x20\142", "\x61\56\151\144\75\x62\x2e\165\x73\145\162\137\x69\x64"); goto FBPjP; FBPjP: $this->db->where_not_in("\x62\x2e\147\162\157\x75\160\x5f\151\x64", ["\61"]); goto FJsFH; FJsFH: return $this->db->get()->result(); goto vCbGS; Ce16X: $this->db->select("\141\56\x69\x64"); goto TR9Yq; vCbGS: } public function truncate($table) { goto oHzZD; hkiLX: $this->db->query("\x53\x45\124\x20\x46\117\x52\x45\111\107\116\137\x4b\105\x59\137\103\x48\105\x43\113\123\40\x3d\x20\60"); goto PPcbL; oHzZD: $this->load->helper("\x66\151\154\x65"); goto hkiLX; X1z9q: HGb0r: goto XQ7JM; XQ7JM: $this->db->query("\x53\x45\124\40\x46\117\x52\105\x49\x47\116\x5f\x4b\x45\131\137\103\110\x45\103\x4b\123\40\x3d\x20\x31"); goto ekzKs; iSStd: miI7l: goto stXR1; PPcbL: foreach ($table as $tb) { $this->db->truncate($tb); dOMSE: } goto X1z9q; riNGt: $users = $this->not_admin(); goto prFkV; ekzKs: delete_files("\56\57\x75\160\x6c\x6f\x61\x64\x73\57\x62\x61\x6e\153\x5f\163\157\141\154\x2f"); goto riNGt; stXR1: return; goto iKA3V; prFkV: foreach ($users as $user) { $this->db->delete("\x75\x73\145\162\163", array("\151\144" => $user->id)); AFZr6: } goto iSStd; iKA3V: } public function getSetting() { return $this->db->get("\x73\145\x74\164\x69\156\147")->row(); } function toJSON($table) { $query = $this->db->get($table); return json_encode($query->result(), JSON_PRETTY_PRINT); } function rowSize($table) { $query = $this->db->get($table); return $query->num_rows(); } }
