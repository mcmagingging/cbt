<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\x41\123\x45\x50\101\x54\x48") or exit("\116\157\x20\144\x69\x72\x65\143\x74\40\x73\x63\162\x69\x70\164\40\x61\143\x63\x65\x73\163\40\x61\154\x6c\157\167\x65\144"); class Update extends CI_Controller { function __construct() { goto mG9C0; ng9Ep: include APPPATH . "\x63\x6f\156\146\x69\147\57\x64\x61\164\141\142\x61\163\145\56\x70\150\160"; goto gSbkI; XIM9v: $this->load->library("\x65\x6e\x63\x72\x79\160\164\x69\157\x6e"); goto jDm7k; mG9C0: parent::__construct(); goto ng9Ep; A3FCX: $this->load->database(); goto XIM9v; gSbkI: $this->load->dbforge(); goto A3FCX; jDm7k: } public function output_json($data, $encode = true) { goto olXif; olXif: if (!$encode) { goto oeNDH; } goto oou5r; uuSbC: $this->output->set_content_type("\x61\x70\x70\154\151\143\141\164\151\x6f\156\57\x6a\x73\157\x6e")->set_output($data); goto JXMRt; oou5r: $data = json_encode($data); goto q9aMV; q9aMV: oeNDH: goto uuSbC; JXMRt: } public function index() { goto LbI0I; LbI0I: $json = file_get_contents("\x2e\x2f\x61\x73\x73\145\x74\163\x2f\141\160\160\57\144\142\x2f\x64\141\164\x61\142\x61\x73\145\x2e\x6a\163\157\156"); goto FT36G; Ng0Ab: $this->load->view("\x69\156\x73\164\141\154\x6c\57\x68\x65\x61\144\145\x72", $data); goto viHbV; viHbV: $this->load->view("\x69\156\x73\x74\x61\x6c\154\57\x75\160\x64\x61\x74\x65"); goto c5maa; FT36G: $json = json_decode($json); goto yVzjH; yVzjH: $json = (array) $json; goto qXtHW; qXtHW: $data["\x6a\163\x6f\156"] = $json; goto Ng0Ab; c5maa: $this->load->view("\x69\156\163\x74\x61\154\x6c\x2f\x66\157\157\x74\145\162"); goto LlMaE; LlMaE: } function object_to_array($data) { goto o0NAm; d3lDp: $result = []; goto EshiL; dEj_j: x36t0: goto DPcLg; m0F6K: AHQ2Z: goto cnxmB; EshiL: foreach ($data as $key => $value) { $result[$key] = is_array($data) || is_object($data) ? $this->object_to_array($value) : $value; IEfpI: } goto m0F6K; o0NAm: if (!(is_array($data) || is_object($data))) { goto x36t0; } goto d3lDp; cnxmB: return $result; goto dEj_j; DPcLg: return $data; goto pjXLv; pjXLv: } public function checkDatabase() { goto ORW_m; q9RLq: PI5vs: goto QLuND; ORuua: $add_columns = []; goto kWQTU; Z2uG9: $create_tables = []; goto ORuua; mPTOc: $tabless = $this->db->list_tables(); goto dQP4m; O6W8F: sort($full_tables); goto Z2uG9; ORW_m: $db_debug = $this->db->db_debug; goto Y4bHO; obRbZ: $tbl_baru = array_keys($json); goto KA5sA; kJfzF: $json = json_decode($json); goto lcpJy; mAEjV: $json = file_get_contents("\x2e\57\141\163\163\145\164\163\57\x61\x70\x70\x2f\x64\142\x2f\x64\x61\x74\141\x62\141\163\x65\x2e\x6a\x73\x6f\156"); goto kJfzF; dQP4m: $fields = []; goto eSJ0q; fX4fI: $this->output_json($data); goto CLhhX; eGU6R: $full_tables = array_unique($full_tables); goto O6W8F; Y4bHO: $this->db->db_debug = FALSE; goto mPTOc; sDedm: foreach ($tabless as $table) { goto V5GUK; KOwIi: $datafld[$i]->extra = $query[$i]->extra; goto i7fIE; iuT_m: $c = count($query); goto XYkQT; kfAcP: goto FIOOO; goto iD2kL; bjRvZ: $retval = array(); goto j6ZgZ; ZO3ZD: $query = $query->result_object(); goto bjRvZ; GOWI8: avfOg: goto iX4T3; MopHq: $retval[$i]->name = $query[$i]->column_name; goto vdyLW; LVPxc: if ($query[$i]->extra == "\141\165\x74\x6f\x5f\151\156\x63\162\145\x6d\145\156\x74") { goto lcCoL; } goto KOwIi; V5GUK: $datafld = $this->db->field_data($table); goto gqoki; yI0hy: AcGKq: goto M8f98; iD2kL: iWNjd: goto Jam2_; ZNGFi: $datafld[$i]->auto_increment = true; goto sypqc; NzbVY: lJ101: goto rg2O5; a1Sl2: $currentDb = FALSE; goto aviAt; Jam2_: $currentDb[$table] = $retval; goto aTMpM; vdyLW: $retval[$i]->extra = $query[$i]->extra; goto GOWI8; gyhXE: if (!(($query = $this->db->query($sql)) === FALSE)) { goto mbDAB; } goto a1Sl2; XYkQT: FIOOO: goto q1vO8; aTMpM: $fields[$table] = $datafld; goto yI0hy; ANT9m: if (!($query[$i]->extra != '')) { goto lJ101; } goto LVPxc; gqoki: $sql = "\x53\x45\114\x45\103\124\40\x60\143\157\154\x75\x6d\156\x5f\x6e\141\x6d\x65\x60\54\40\x60\156\x75\155\145\162\151\143\137\x70\162\x65\143\x69\x73\151\x6f\156\x60\54\x20\x60\145\170\164\x72\141\x60\54\40\140\151\x73\x5f\x6e\165\x6c\x6c\141\x62\154\x65\140" . "\x20\106\122\117\x4d\x20\x60\151\x6e\146\x6f\162\x6d\x61\164\151\157\156\x5f\x73\143\x68\145\155\141\x60\x2e\140\143\x6f\154\165\x6d\156\x73\x60\x20\127\x48\105\x52\105\40\164\x61\142\x6c\x65\137\x73\143\x68\x65\x6d\x61\40\75\40\42" . $this->db->database . "\x22\x20\101\116\x44\40\164\x61\142\154\145\x5f\156\141\155\x65\x20\x3d\40\x22" . $table . "\x22"; goto gyhXE; sypqc: p2a89: goto NzbVY; i7fIE: goto p2a89; goto MDeQC; j6ZgZ: $i = 0; goto iuT_m; rg2O5: uUhre: goto o2yLZ; o2yLZ: $retval[$i] = new stdClass(); goto MopHq; lEB3F: if (!($datafld[$i]->name == $query[$i]->column_name)) { goto uUhre; } goto ANT9m; aviAt: mbDAB: goto ZO3ZD; MDeQC: lcCoL: goto ZNGFi; q1vO8: if (!($i < $c)) { goto iWNjd; } goto lEB3F; iX4T3: $i++; goto kfAcP; M8f98: } goto OwgpC; EegEt: $full_tables = array_merge($tbl_baru, $tbl_ada); goto eGU6R; eSJ0q: $currentDb = []; goto sDedm; boxfk: $data = ["\144\x62" => $fields, "\x63\x72\x65\141\x74\145" => $create_tables, "\x6d\157\x64\151\146\x79" => $edit_columns, "\141\144\x64" => $add_columns, "\x63\x6f\x75\156\x74\x73" => $counts, "\152\x73\x6f\x6e" => $json, "\x63\x75\162\x72\145\156\x74" => $currentDb]; goto fX4fI; QLuND: $counts = count($create_tables) + count($add_columns) + count($edit_columns); goto boxfk; lcpJy: $json = (array) $json; goto obRbZ; OwgpC: zbkyl: goto mAEjV; kWQTU: $edit_columns = []; goto aLKVJ; KA5sA: $tbl_ada = array_keys($fields); goto EegEt; aLKVJ: foreach ($full_tables as $table) { goto SqgZT; stARe: gM6_Q: goto cw0P7; EMCsW: fIlbF: goto NiWDm; P7P7H: foreach ($json[$table] as $jtbl) { goto DKHkN; dqJkd: Vliyf: goto jz7E2; YfKm4: j1I7r: goto dqJkd; dBmQu: foreach ($fields[$table] as $ftbl) { goto ksdAg; KqHWR: if (!($jtbl->default != $ftbl->default || $jtbl->max_length != $ftbl->max_length || $jtbl->type != $ftbl->type)) { goto aAdEW; } goto HJN4J; rQ4eG: Rh2K2: goto AXkYJ; eFEOv: JIQba: goto rQ4eG; HJN4J: $edit_columns[$table][] = $jtbl; goto jLMHQ; ksdAg: if (!($jtbl->name == $ftbl->name)) { goto JIQba; } goto KqHWR; jLMHQ: aAdEW: goto eFEOv; AXkYJ: } goto MtLvj; i0OFi: PEPFM: goto dBmQu; MtLvj: kamgc: goto YfKm4; hWh7C: goto j1I7r; goto i0OFi; p_wg5: $add_columns[$table][] = $jtbl; goto hWh7C; DKHkN: if ($this->db->field_exists($jtbl->name, $table)) { goto PEPFM; } goto p_wg5; jz7E2: } goto ZFUjQ; NiWDm: m4lRw: goto lpeEk; SqgZT: if ($this->db->table_exists($table)) { goto gM6_Q; } goto zeIbo; zeIbo: $create_tables[$table] = $json[$table]; goto QX5mL; cw0P7: if (!isset($json[$table])) { goto fIlbF; } goto P7P7H; QX5mL: goto m4lRw; goto stARe; ZFUjQ: OuyZ2: goto EMCsW; lpeEk: dQ5gC: goto s8B6P; s8B6P: } goto q9RLq; CLhhX: } public function updateDatabase() { goto VbnR5; NJJ0U: $json = json_decode($json); goto o7hOp; G1raT: $tbl_ada = array_keys($fields); goto m2a_q; jjhSE: $fields = []; goto wXG3i; o7hOp: $json = (array) $json; goto ipVEy; wXG3i: foreach ($tabless as $table) { $fields[$table] = $this->db->field_data($table); Y553w: } goto F_2sA; BvoFL: $full_tables = array_unique($full_tables); goto saGlM; RjmaB: foreach ($full_tables as $table) { goto eLo1A; APYrT: wVVlD: goto L3vdA; n_Z5n: $this->db->query("\101\x4c\124\105\122\40\124\101\x42\114\x45\40\40\x60" . $table . "\140\x20\105\116\107\x49\x4e\105\x20\75\x20\111\x6e\156\x6f\x44\x42"); goto dWc_1; IjtaW: mMZQz: goto APYrT; DA34y: foreach ($json[$table] as $tbl => $jtbl) { goto Pu32C; F6IEc: if (!($jtbl->primary_key == 1)) { goto V7hNN; } goto RwIb3; Pu32C: $field = [$jtbl->name => ["\x74\x79\x70\145" => $jtbl->type, "\x63\157\x6e\x73\164\162\x61\151\156\164" => $jtbl->max_length, "\x6e\165\154\154" => $jtbl->primary_key == 0]]; goto ck6Pl; ck6Pl: $this->dbforge->add_field($field); goto F6IEc; FhDYy: rreW6: goto qrABS; RwIb3: $this->dbforge->add_key($jtbl->name, true); goto ndWh9; ndWh9: V7hNN: goto FhDYy; qrABS: } goto yfNMv; Ody3e: foreach ($json[$table] as $jtbl) { goto BM0Cl; GAV8R: $this->dbforge->add_column($table, $field); goto lGT3_; BM0Cl: if ($this->db->field_exists($jtbl->name, $table)) { goto QA1oI; } goto lPlLt; NyFYe: $field = array($jtbl->name => array("\x74\171\160\145" => $jtbl->type, "\x63\x6f\156\163\164\162\141\x69\x6e\164" => $jtbl->max_length, "\156\165\x6c\154" => false)); goto x9sUe; lGT3_: JC6se: goto P_jle; fo4gL: OlvLD: goto iX0bC; wrQ2s: $field = array($jtbl->name => array("\164\x79\160\x65" => $jtbl->type, "\x63\157\156\163\x74\162\x61\151\x6e\x74" => $jtbl->max_length, "\x64\145\146\141\165\x6c\x74" => $jtbl->default)); goto GAV8R; wry_L: goto JC6se; goto ncHMd; C4W03: foreach ($fields[$table] as $ftbl) { goto K3dbL; LQgLh: QWAJb: goto X32MW; pfUTC: mKmtk: goto ngA_g; C0bLz: lDifh: goto ZM0Qu; Xi35Q: DcZ2D: goto xa0Lu; Qv1gt: ZRweN: goto pfUTC; oFD5F: $field = array($jtbl->name => array("\164\x79\x70\145" => $jtbl->type, "\x63\x6f\x6e\163\164\162\141\x69\156\164" => $jtbl->max_length, "\144\145\x66\x61\x75\x6c\164" => $jtbl->default)); goto javVR; ptquq: if ($jtbl->auto_increment == true) { goto uhT2R; } goto Jkmtx; RkaEn: goto DcZ2D; goto VAgcM; ngA_g: faUiU: goto iUMFF; xa0Lu: $this->dbforge->add_key($jtbl->name, true); goto IJ8Jk; X32MW: $onUpdate = isset($jtbl->extra) ? "\40" . strtolower($jtbl->extra) : ''; goto tpThQ; iUMFF: ot2zg: goto zoGlK; Jkmtx: $field = array($jtbl->name => array("\x74\171\160\145" => $jtbl->type, "\143\157\156\163\164\162\141\x69\x6e\x74" => $jtbl->max_length, "\x6e\x75\154\154" => false)); goto RkaEn; VfhW4: if ($jtbl->primary_key == 0) { goto S6C76; } goto ptquq; tpThQ: $field = array($jtbl->name . "\x20\144\141\x74\x65\x74\x69\x6d\145\40\x64\x65\146\x61\165\154\164\x20\x63\165\x72\x72\145\156\164\x5f\x74\151\155\145\163\x74\x61\155\x70" . $onUpdate); goto C0bLz; oEI4w: if ($jtbl->default == "\x43\125\x52\122\105\116\x54\137\124\x49\x4d\x45\123\x54\x41\x4d\120") { goto QWAJb; } goto oFD5F; javVR: goto lDifh; goto LQgLh; JRvO0: $field = array($jtbl->name => array("\x74\171\x70\145" => $jtbl->type, "\x63\x6f\x6e\x73\x74\x72\141\x69\156\x74" => $jtbl->max_length, "\156\165\x6c\x6c" => false, "\x61\x75\164\x6f\x5f\151\x6e\143\x72\x65\x6d\x65\x6e\x74" => true)); goto Xi35Q; Y8_CW: S6C76: goto oEI4w; IJ8Jk: $this->dbforge->modify_column($table, $field); goto hsfgf; VAgcM: uhT2R: goto JRvO0; K3dbL: if (!($jtbl->name == $ftbl->name)) { goto faUiU; } goto e1pP5; e1pP5: if (!($jtbl->default != $ftbl->default || $jtbl->max_length != $ftbl->max_length || $jtbl->type != $ftbl->type)) { goto mKmtk; } goto VfhW4; hsfgf: goto ZRweN; goto Y8_CW; ZM0Qu: $this->dbforge->modify_column($table, $field); goto Qv1gt; zoGlK: } goto lw3Sc; P_jle: goto OlvLD; goto SyfEw; dVQA9: $this->dbforge->add_column($table, $field); goto wry_L; ncHMd: uZipJ: goto wrQ2s; iX0bC: ypJkE: goto aXhVM; lPlLt: if ($jtbl->primary_key == 0) { goto uZipJ; } goto NyFYe; lw3Sc: uDvup: goto fo4gL; SyfEw: QA1oI: goto C4W03; x9sUe: $this->dbforge->add_key($jtbl->name, true); goto dVQA9; aXhVM: } goto gAUcR; gAUcR: VazUc: goto kNOZg; yfNMv: VRhBK: goto tl0i6; kNOZg: LJk0n: goto IjtaW; PBz_M: goto mMZQz; goto UBL9h; dWc_1: TWro6: goto PBz_M; UBL9h: P9TOp: goto kQgQD; tl0i6: $this->dbforge->create_table($table, TRUE); goto n_Z5n; kQgQD: if (!isset($json[$table])) { goto LJk0n; } goto Ody3e; eLo1A: if ($this->db->table_exists($table)) { goto P9TOp; } goto HkpDa; HkpDa: if (!isset($json[$table])) { goto TWro6; } goto DA34y; L3vdA: } goto xH86U; UWXfS: $json = file_get_contents("\x2e\x2f\x61\163\163\x65\164\163\57\141\160\160\x2f\x64\x62\x2f\144\x61\164\141\142\141\163\x65\56\x6a\163\x6f\156"); goto NJJ0U; saGlM: sort($full_tables); goto RjmaB; F_2sA: izd6U: goto UWXfS; QAscs: echo true; goto AGLpk; xH86U: izgMT: goto QAscs; VbnR5: $tabless = $this->db->list_tables(); goto jjhSE; ipVEy: $tbl_baru = array_keys($json); goto G1raT; m2a_q: $full_tables = array_merge($tbl_baru, $tbl_ada); goto BvoFL; AGLpk: } public function checkDb() { goto FdIID; iyyvF: $tbl_seharusnya = array_keys($json); goto D7BX0; C_tT4: $json = (array) $json; goto iyyvF; ikZau: $script_edit_column = []; goto g_LUE; DzeuK: $json = json_decode($json); goto C_tT4; dhQZh: $this->db->db_debug = FALSE; goto OtN9K; qhB9i: $full_tables = array_unique($full_tables); goto nHgD3; D7BX0: $tbl_ada = array_keys($fields); goto PJNYH; g_LUE: foreach ($full_tables as $table) { goto mEOem; VeLta: zGbz5: goto rtLBB; Oy1A9: $create_tables[] = $json[$table]; goto dqoPU; L2b5T: nvpiY: goto Pm84f; fsm82: foreach ($json[$table]->columns as $jtbl) { goto xB7IF; ZoZ9k: KsyAH: goto Wi30V; ZUxoa: zQrLQ: goto gxIdc; Wi30V: $length = ''; goto qGE0A; h7_gr: if ($jtbl->type == "\x69\x6e\164") { goto qRcO9; } goto yYRwR; zxD8S: $comment = $jtbl->comment == '' ? '' : "\x20\103\117\115\115\x45\116\x54\x20\x27" . $jtbl->comment . "\47"; goto MmW96; sxE_7: goto zQrLQ; goto mcZv3; eMK2B: $length = "\50" . ($jtbl->max_length + 1) . "\x29"; goto ZUxoa; QTYEU: Hm3op: goto LJOUi; tqqaX: if ($jtbl->type != "\154\157\x6e\147\x74\145\170\164" && $jtbl->type != "\155\145\144\151\165\155\x74\145\x78\x74" && $jtbl->type != "\164\x65\x78\x74") { goto LnFY8; } goto lE3Se; h6XPS: FOpnQ: goto zxD8S; gPewF: vsCk_: goto QTYEU; lE3Se: $length = ''; goto YSVrB; mcZv3: qRcO9: goto eMK2B; gxIdc: fXmHB: goto tCqnO; b9eHj: $default = $jtbl->default == null ? '' : "\x20\x44\105\x46\x41\x55\114\x54\40" . $jtbl->default; goto oCPlS; oCPlS: $extra = $jtbl->extra == '' ? '' : "\x20" . strtoupper($jtbl->extra); goto qShi2; jlc4Z: foreach ($fields[$table]->columns as $ftbl) { goto yvmlo; HLvbU: if (!($jtbl->primary != $ftbl->primary)) { goto vQFwm; } goto XnQuO; tKti3: $ftbl->default = str_replace("\50\51", '', $ftbl->default); goto MHgTa; sY8l0: $extra = $jtbl->extra == '' ? '' : "\x20" . strtoupper($jtbl->extra); goto SXye5; bxy8r: $jtbl->extra = strtoupper($jtbl->extra); goto sVrwr; qNxz5: if (!($jtbl->nullable != $ftbl->nullable)) { goto m8NTS; } goto TG4Mo; BsnCn: array_push($modif_column, "\x4d\117\x44\x49\106\131\40\x60" . $jtbl->name . "\140\x20" . $jtbl->col_type . $nullable . $default . $extra . $comment); goto aNgKR; hhFch: goto KuQd_; goto WFiiG; XnQuO: $edit_columns[$table][$jtbl->name]["\160\162\x69\155\141\162\171"] = $jtbl->primary; goto uP9ll; QR5mh: if (!($jtbl->extra != null)) { goto mM8Lj; } goto pvMPd; XWI0N: b5Nfa: goto V3gcl; YAWoD: s1rip: goto HLvbU; ozW6h: s_EJF: goto vWkfh; W4M8F: $ftbl->extra = strtoupper($ftbl->extra); goto viMg8; vWkfh: array_push($modif_column, "\101\104\x44\x20\120\122\x49\115\101\x52\x59\x20\x4b\x45\131\40\x28\140" . $jtbl->name . "\x60\x29"); goto hhFch; TG4Mo: $edit_columns[$table][$jtbl->name]["\x6e\165\154\x6c\141\x62\154\x65"] = $jtbl->nullable; goto iwXLB; Nyqfl: if (!($jtbl->extra != $ftbl->extra)) { goto OQtrC; } goto rjOp4; bm9So: $nullable = $jtbl->nullable == "\x4e\117" ? "\x20\116\x4f\x54\40\116\125\x4c\x4c" : ''; goto GAIn9; ygP0M: if (!($ftbl->default != null)) { goto b5Nfa; } goto tKti3; E7rKo: if (!($jtbl->comment != $ftbl->comment)) { goto s1rip; } goto MN3OT; OywIG: if (!($jtbl->col_type != $ftbl->col_type)) { goto ntPe4; } goto I_R_Z; q5J6y: if (!($jtbl->default != null)) { goto rSgzd; } goto cvFHV; ZT4cy: DrERk: goto QR5mh; fWlBJ: nMJxI: goto BmN3t; F7ijx: $ftbl->extra = str_replace("\x28\x29", '', $ftbl->extra); goto W4M8F; biZfV: if (!($ftbl->extra != null)) { goto f9AvA; } goto F7ijx; kEKWt: rSgzd: goto ygP0M; GAIn9: $default = $jtbl->default == null ? '' : "\x20\x44\x45\x46\x41\125\114\x54\40" . $jtbl->default; goto sY8l0; iwXLB: m8NTS: goto q5J6y; v2E13: ntPe4: goto qNxz5; uP9ll: if (strtolower($jtbl->primary) == "\160\x72\x69") { goto s_EJF; } goto f2sy_; SXye5: $comment = $jtbl->comment == '' ? '' : "\40\103\x4f\x4d\x4d\105\x4e\124\40\47" . $jtbl->comment . "\x27"; goto BsnCn; sVrwr: mM8Lj: goto biZfV; MHgTa: $ftbl->default = strtoupper($ftbl->default); goto XWI0N; I_R_Z: $edit_columns[$table][$jtbl->name]["\143\157\154\137\164\x79\160\145"] = $jtbl->col_type; goto v2E13; viMg8: f9AvA: goto Nyqfl; RXkX9: array_push($modif_column, "\101\x44\104\x20\125\x4e\111\x51\x55\x45\x20\113\105\x59\40\140" . $jtbl->name . "\140\40\50\x60" . $jtbl->name . "\140\51"); goto THm8R; M26M9: $edit_columns[$table][$jtbl->name]["\144\145\146\x61\x75\x6c\x74"] = $jtbl->default; goto ZT4cy; WFiiG: od2Hi: goto RXkX9; PS05i: vQFwm: goto hPyM9; L3zM7: goto KuQd_; goto ozW6h; f2sy_: if (strtolower($jtbl->primary) == "\x75\x6e\x69") { goto od2Hi; } goto L3zM7; f3OBT: $jtbl->default = strtoupper($jtbl->default); goto kEKWt; pvMPd: $jtbl->extra = str_replace("\50\x29", '', $jtbl->extra); goto bxy8r; yvmlo: if (!($jtbl->name == $ftbl->name)) { goto nMJxI; } goto OywIG; cvFHV: $jtbl->default = str_replace("\x28\x29", '', $jtbl->default); goto f3OBT; THm8R: KuQd_: goto PS05i; MN3OT: $edit_columns[$table][$jtbl->name]["\x63\x6f\x6d\155\x65\156\x74"] = $jtbl->comment; goto YAWoD; BmN3t: o0_oa: goto tz4YO; aNgKR: P3Bl4: goto fWlBJ; rjOp4: $edit_columns[$table][$jtbl->name]["\x65\x78\164\x72\x61"] = $jtbl->extra; goto BCIhD; hPyM9: if (!($jtbl->col_type != $ftbl->col_type || $jtbl->nullable != $ftbl->nullable || $jtbl->default != $ftbl->default || $jtbl->extra != $ftbl->extra || $jtbl->comment != $ftbl->comment)) { goto P3Bl4; } goto bm9So; V3gcl: if (!($jtbl->default != $ftbl->default)) { goto DrERk; } goto M26M9; BCIhD: OQtrC: goto E7rKo; tz4YO: } goto gPewF; pk9Hw: kOdtO: goto jlc4Z; MEjnP: LnFY8: goto h7_gr; dyQ5U: $add_columns[$table][] = $jtbl; goto ziD3_; xB7IF: if ($this->db->field_exists($jtbl->name, $table)) { goto kOdtO; } goto dyQ5U; qShi2: if (!(strtoupper($extra) == "\40\101\x55\124\117\137\111\116\103\122\105\115\x45\x4e\x54")) { goto FOpnQ; } goto Z3R0K; YSVrB: goto fXmHB; goto ZoZ9k; MmW96: array_push($add_column, "\101\x44\104\40\140" . $jtbl->name . "\x60\x20" . $jtbl->type . $length . $nullable . $default . $extra . $comment); goto pk9Hw; Z3R0K: $extra .= "\x20\x50\x52\111\115\101\122\131\x20\x4b\x45\x59"; goto h6XPS; ziD3_: if ($jtbl->max_length == null) { goto KsyAH; } goto tqqaX; qGE0A: goto fXmHB; goto MEjnP; tCqnO: $nullable = $jtbl->nullable == "\116\117" ? "\40\x4e\117\124\x20\116\x55\x4c\114" : ''; goto b9eHj; yYRwR: $length = "\50" . $jtbl->max_length . "\x29"; goto sxE_7; LJOUi: } goto VeLta; Htj2K: if (!isset($json[$table])) { goto Ei9Ln; } goto uz3xJ; dqoPU: $script = "\x43\x52\x45\101\x54\105\40\x54\101\102\114\105\40\140" . $table . "\140\40\x28"; goto xxMbn; AG3zS: Ge5MJ: goto INkIg; Pm84f: $script .= $pri . "\x29\40\x45\x4e\107\111\116\x45\75\111\x6e\156\157\x44\x42\x20\x44\105\106\x41\x55\x4c\124\40\x43\x48\x41\x52\123\105\124\x3d\x75\x74\x66\x38\155\x62\64\x3b"; goto R4v81; CSui5: $script_create_column[$table] = "\101\114\x54\x45\122\x20\x54\101\x42\114\x45\40\140" . $table . "\x60\40" . implode("\54\40", $add_column) . "\x3b"; goto PaLVG; Gis3y: $modif_column = []; goto fsm82; R4v81: $script_create_table[$table] = $script; goto CS5OF; mEOem: if (!$this->db->table_exists($table)) { goto sV29E; } goto Htj2K; SRlk2: goto GLZt6; goto vOyL1; PaLVG: Niw9b: goto oeDnZ; oeDnZ: if (!(count($modif_column) > 0)) { goto Ge5MJ; } goto k8RQ1; vOyL1: sV29E: goto Oy1A9; CS5OF: GLZt6: goto MlQ1j; CkrJ9: foreach ($json[$table]->columns as $column) { goto lyEAk; lY4v0: $default = $column->default == null ? '' : "\x20\x44\105\x46\x41\125\x4c\x54\40" . $column->default; goto Ltehw; myFpV: $comment = $column->comment == '' ? '' : "\x20\103\x4f\115\x4d\x45\x4e\124\40\x27" . $column->comment . "\x27"; goto MaSz6; gnkbn: Zn7li: goto xCjCZ; TQQcn: if ($column->type != "\x6c\157\156\147\164\145\170\x74" && $column->type != "\155\145\144\151\165\155\x74\x65\x78\x74" && $column->type != "\x74\x65\170\164") { goto i4hlN; } goto V6NMp; cyatK: i4hlN: goto l5lYB; rxZFN: $length = "\x28" . $column->max_length . "\51"; goto XPV3W; qOb5M: Fs6Qp: goto H_mqi; LYaQw: $nullable = $column->nullable == "\116\117" ? "\40\x4e\117\x54\40\116\125\114\x4c" : ''; goto lY4v0; V6NMp: $length = ''; goto C5qqj; x4RRP: OP9JR: goto AP7v8; XPV3W: goto Fs6Qp; goto gnkbn; lyEAk: if ($column->max_length == null) { goto U1Vf0; } goto TQQcn; JVl_0: $pri .= $column->primary != '' ? "\120\122\111\x4d\101\122\131\x20\113\105\131\x20\x28\140" . $column->name . "\140\x29" : ''; goto x4RRP; Atc42: U1Vf0: goto xm1o3; Ltehw: $extra = $column->extra == '' ? '' : "\40" . strtoupper($column->extra); goto myFpV; xm1o3: $length = ''; goto KTmnB; l5lYB: if ($column->type == "\x69\x6e\x74") { goto Zn7li; } goto rxZFN; MaSz6: $script .= "\140" . $column->name . "\x60\x20" . $column->type . $length . $nullable . $default . $extra . $comment . "\54\40"; goto JVl_0; xCjCZ: $length = "\x28" . ($column->max_length + 1) . "\x29"; goto qOb5M; C5qqj: goto zcEkE; goto Atc42; KTmnB: goto zcEkE; goto cyatK; H_mqi: zcEkE: goto LYaQw; AP7v8: } goto L2b5T; xxMbn: $pri = ''; goto CkrJ9; rtLBB: if (!(count($add_column) > 0)) { goto Niw9b; } goto CSui5; k8RQ1: $script_edit_column[$table] = "\x41\x4c\x54\105\x52\x20\124\x41\x42\114\x45\40\140" . $table . "\x60\40" . implode("\54\x20", $modif_column) . "\73"; goto AG3zS; uz3xJ: $add_column = []; goto Gis3y; INkIg: Ei9Ln: goto SRlk2; MlQ1j: tZxOf: goto TvuGD; TvuGD: } goto F1DwH; ctSJv: foreach ($tabless as $table) { goto Mti0d; K4jEJ: if (!($i < $c)) { goto LrVqv; } goto FXrnx; qcEWI: $retval[$i]->comment = $query[$i]->column_comment; goto UNfwa; XCCkI: $retval[$i]->col_type = $query[$i]->column_type; goto CbLhS; bPXrK: LrVqv: goto hnboR; YrUXs: $fields = FALSE; goto F9lbH; K2G_I: $retval[$i]->nullable = $query[$i]->is_nullable; goto Xi2UW; U2Nq6: $query = $query->result_object(); goto Dap3C; BMbUP: $retval[$i]->name = $query[$i]->column_name; goto XCCkI; hnboR: $fields[$table] = (object) ["\164\141\142\154\x65\x5f\x6e\141\x6d\x65" => $table, "\143\x6f\x6c\x75\155\x6e\163" => $retval]; goto iZEsm; caAtb: $i++; goto XjWHd; iZEsm: bzj1N: goto rEGIm; FXrnx: $retval[$i] = new stdClass(); goto BMbUP; C0vLa: $retval[$i]->max_length = $query[$i]->character_maximum_length > 0 ? $query[$i]->character_maximum_length : $query[$i]->numeric_precision; goto sQe6D; UNfwa: $retval[$i]->extra = $query[$i]->extra; goto K2G_I; kun3t: $c = count($query); goto cv4X9; Xi2UW: $retval[$i]->primary = $query[$i]->column_key; goto LIUd2; H2H7M: $retval[$i]->collation = $query[$i]->collation_name; goto C0vLa; F9lbH: yjTMW: goto U2Nq6; XjWHd: goto A2XCT; goto bPXrK; sQe6D: $retval[$i]->default = $query[$i]->column_default; goto qcEWI; rp5RZ: $i = 0; goto kun3t; DVJeO: if (!(($query = $this->db->query($sql)) === FALSE)) { goto yjTMW; } goto YrUXs; CbLhS: $retval[$i]->type = $query[$i]->data_type; goto H2H7M; LIUd2: LJuA9: goto caAtb; cv4X9: A2XCT: goto K4jEJ; Dap3C: $retval = array(); goto rp5RZ; Mti0d: $sql = "\x53\105\x4c\105\x43\x54\x20\140\143\x6f\154\x75\x6d\156\137\156\x61\x6d\145\140\x2c\x20\x60\x63\x6f\x6c\165\155\156\137\164\171\160\145\x60\x2c\x20\x60\143\x6f\x6c\154\x61\x74\151\x6f\156\x5f\x6e\x61\x6d\145\x60\x2c\40\140\144\141\164\x61\x5f\x74\171\160\145\x60\54\x20\x60\x63\150\x61\x72\x61\143\164\145\x72\x5f\x6d\141\x78\x69\155\165\x6d\137\x6c\x65\156\x67\x74\x68\140\54\40\x60\156\x75\155\x65\x72\151\143\137\x70\x72\145\x63\151\x73\151\x6f\x6e\140\x2c" . "\40\140\x63\157\154\x75\x6d\156\137\x64\145\146\141\x75\x6c\x74\x60\x2c\x20\x60\x63\157\154\165\155\x6e\x5f\153\x65\171\140\x2c\40\x60\143\157\154\x75\x6d\156\137\x63\x6f\x6d\x6d\x65\x6e\x74\x60\54\x20\x60\145\x78\x74\x72\141\140\x2c\40\x60\x69\163\137\156\x75\x6c\x6c\x61\x62\x6c\x65\140\15\12\11\11\11\106\x52\117\115\40\140\x69\x6e\146\157\x72\x6d\x61\x74\151\157\x6e\137\x73\143\150\145\x6d\x61\140\x2e\x60\x63\157\154\x75\155\x6e\163\140\40\127\110\x45\122\105\x20\164\x61\142\x6c\x65\x5f\x73\x63\150\x65\155\141\x20\x3d\40\x22" . $this->db->database . "\x22\x20\101\116\104\40\x74\x61\x62\x6c\145\x5f\x6e\x61\x6d\145\x20\75\40\42" . $table . "\42"; goto DVJeO; rEGIm: } goto KNz_P; gO723: $this->db->db_debug = $db_debug; goto gl33s; hP_va: $script_create_column = []; goto tpd4_; ijopy: $add_columns = []; goto hP_va; Z8nzb: $create_tables = []; goto SH80P; nHgD3: sort($full_tables); goto Z8nzb; gl33s: $data = ["\146\151\145\154\144\163" => $fields, "\143\x72\x65\141\164\x65\x5f\x74\141\142\x6c\x65\x73" => $create_tables, "\x63\157\165\x6e\164\x5f\164\142\154" => count($create_tables), "\141\144\144\x5f\x63\157\x6c\x75\155\156\x73\x5f\x74\x6f\x5f\164\x61\x62\x6c\x65" => $add_columns, "\x63\157\165\x6e\164\137\143\x6f\154" => count($add_columns), "\x65\144\151\x74\x5f\x63\x6f\154\165\x6d\x6e\x73" => $edit_columns, "\x63\x6f\x75\156\x74\x5f\155\157\x64" => count($edit_columns), "\x61\144\x64\137\164\142\x6c" => $this->encryption->encrypt(json_encode($script_create_table)), "\x61\144\x64\x5f\x63\157\x6c" => $this->encryption->encrypt(json_encode($script_create_column)), "\155\x6f\x64\137\x63\157\x6c" => $this->encryption->encrypt(json_encode($script_edit_column))]; goto ct3GB; G4IEA: $json = file_get_contents("\x2e\x2f\x61\163\x73\145\x74\x73\x2f\x61\x70\x70\57\x64\x62\57\x64\x61\164\x61\142\x61\163\145\56\x6a\x73\157\x6e"); goto DzeuK; OtN9K: $tabless = $this->db->list_tables(); goto JlLA4; tpd4_: $edit_columns = []; goto ikZau; F1DwH: Qyhmm: goto gO723; PJNYH: $full_tables = array_merge($tbl_seharusnya, $tbl_ada); goto qhB9i; KNz_P: CSsJk: goto G4IEA; SH80P: $script_create_table = []; goto ijopy; JlLA4: $fields = []; goto ctSJv; FdIID: $db_debug = $this->db->db_debug; goto dhQZh; ct3GB: $this->output_json($data); goto GEFTy; GEFTy: } public function createTable() { goto GI13_; GI13_: $scripts = $this->input->post("\144\x61\164\141", true); goto KW11W; Rw1pL: $data["\155\145\x73\x73\141\147\145"] = "\125\160\144\x61\164\145\40\x6b\x6f\x6c\157\155"; goto Y5pMe; uLCHm: foreach ($scripts as $script) { $queries .= $script; jTNdv: } goto vI44Z; HDBfy: $queries = ''; goto uLCHm; Y5pMe: $this->output_json($data); goto WV1hM; WVwmY: sleep(1); goto B63oB; B63oB: $scripts = json_decode($this->encryption->decrypt($scripts)); goto HDBfy; vI44Z: Py1Kr: goto z35T6; KW11W: str_replace("\45\x32\102", "\53", $scripts); goto WVwmY; z35T6: $data["\x73\x75\x63\143\145\x73\x73"] = $this->runQuery($queries); goto Rw1pL; WV1hM: } public function createColumn() { goto syx2P; z2KKA: $data["\x6d\145\163\x73\x61\147\145"] = "\115\157\x64\x69\x66\x79\x20\x6b\157\154\x6f\155"; goto Naha4; Naha4: $this->output_json($data); goto HvNZl; MBBiD: foreach ($scripts as $script) { $queries .= $script; tEius: } goto EXENk; EXENk: F98OD: goto nJAd1; gDNfl: sleep(1); goto CZjJt; nJAd1: if (!(strpos("\140\x75\x69\144\140", $queries) !== false)) { goto cEaix; } goto rJf9p; LDNgn: cEaix: goto SeV02; SeV02: $data["\x73\165\x63\x63\145\163\x73"] = $this->runQuery($queries); goto z2KKA; CZjJt: $scripts = json_decode($this->encryption->decrypt($scripts)); goto XEO0W; syx2P: $scripts = $this->input->post("\144\x61\164\x61", true); goto PUKAj; rJf9p: $this->updateUID(); goto LDNgn; PUKAj: str_replace("\x25\x32\x42", "\53", $scripts); goto gDNfl; XEO0W: $queries = ''; goto MBBiD; HvNZl: } public function editColumn() { goto o1635; s0Qek: $scripts = json_decode($this->encryption->decrypt($scripts)); goto Xs96U; Xs96U: $queries = ''; goto MQu1t; MQu1t: foreach ($scripts as $script) { $queries .= $script; Je1PR: } goto OeJ17; OYfjo: sleep(1); goto s0Qek; JEuwF: $data["\x73\x75\143\143\145\163\x73"] = $this->runQuery($queries); goto rGpTj; OeJ17: Wn1wo: goto JEuwF; c5UaR: str_replace("\45\x32\x42", "\x2b", $scripts); goto OYfjo; pEaQn: $this->output_json($data); goto hxzdL; o1635: $scripts = $this->input->post("\x64\x61\164\x61", true); goto c5UaR; rGpTj: $data["\155\145\163\163\x61\147\145"] = "\125\x70\x64\x61\x74\145\x20\x73\145\154\145\x73\x61\151"; goto pEaQn; hxzdL: } function runQuery($script) { goto nkT5z; a9k4y: $database = $this->db->database; goto ixSvz; ixSvz: $mysqli = new mysqli($hostname, $hostuser, $hostpass, $database); goto AHB52; W2iT3: $mysqli->multi_query($script); goto aAdr2; AHB52: if (!mysqli_connect_errno()) { goto Mq206; } goto LUzXB; nkT5z: $hostname = $this->db->hostname; goto uAtCG; LUzXB: return mysqli_connect_errno(); goto IRH1F; kSQMJ: $hostpass = $this->db->password; goto a9k4y; IRH1F: Mq206: goto W2iT3; uAtCG: $hostuser = $this->db->username; goto kSQMJ; aAdr2: $mysqli->close(); goto FASnQ; FASnQ: return true; goto yPLmw; yPLmw: } function updateUID() { goto As1Ur; Y5pYb: foreach ($siswas as $siswa) { $input[] = array("\151\x64\x5f\x73\151\163\x77\x61" => $siswa->id_siswa, "\x75\x69\144" => $this->uuid->v4()); iotuP: } goto pZJr5; As1Ur: $this->load->library("\x55\165\151\x64", "\x75\x75\151\x64"); goto N9WF5; m9wPd: return $this->db->update_batch("\155\x61\x73\x74\x65\x72\x5f\x73\151\x73\167\141", $input, "\151\x64\137\x73\x69\163\167\141"); goto v1FP5; N9WF5: $siswas = $this->db->get("\x6d\x61\x73\x74\145\162\137\x73\x69\x73\167\141")->result(); goto zn32A; zn32A: $input = array(); goto Y5pYb; pZJr5: Jr7vB: goto m9wPd; v1FP5: } function make_base() { } }
