<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Dropdown_model extends CI_Model { public function getBulan() { goto qFE3P; qFE3P: $result = $this->db->get("\x62\165\154\x61\156")->result(); goto ZSQXk; YcTkE: kLlDv: goto Ez351; csPoS: foreach ($result as $key => $row) { $ret[$row->id_bln] = $row->nama_bln; pDZ5r: } goto YcTkE; lrKpi: if (!$result) { goto QI67R; } goto csPoS; Ez351: QI67R: goto z4OdY; ZSQXk: $ret = []; goto lrKpi; z4OdY: return $ret; goto WZKzK; WZKzK: } public function getAllSesi() { goto AQToD; P4FtB: return $ret; goto PIDzC; qQ2RC: Bcgzm: goto P4FtB; taVaH: foreach ($result as $key => $row) { $ret[$row->id_sesi] = $row->nama_sesi; kNU5u: } goto r53ai; AQToD: $this->db->select("\151\144\137\x73\145\x73\x69\x2c\x20\x6e\141\155\x61\x5f\x73\x65\x73\151\54\40\x6b\157\144\x65\137\163\x65\x73\151"); goto tM5rS; lXqP5: if (!$result) { goto Bcgzm; } goto taVaH; r53ai: d2x0g: goto qQ2RC; tM5rS: $result = $this->db->get("\x63\x62\x74\137\x73\145\163\x69")->result(); goto lXqP5; PIDzC: } public function getAllRuang() { goto KgA_z; O9DT6: $ret = []; goto PnbUj; PnbUj: if (!$result) { goto q3DBi; } goto mdd65; PSA2N: RT8I6: goto Lpiyk; mdd65: foreach ($result as $key => $row) { $ret[$row->id_ruang] = $row->nama_ruang; uk_jx: } goto PSA2N; KgA_z: $result = $this->db->get("\x63\x62\164\137\162\165\x61\x6e\147")->result(); goto O9DT6; Lpiyk: q3DBi: goto wsuaw; wsuaw: return $ret; goto Nq_dX; Nq_dX: } public function getAllWaktuSesi() { goto b3Bmy; ciays: SA6JK: goto XoWNa; R47Kf: if (!$result) { goto RiH09; } goto V0NQD; MmCzt: return $ret; goto Cx3i7; V0NQD: foreach ($result as $key => $row) { $ret[$row->id_sesi] = ["\x6d\165\154\141\151" => $row->waktu_mulai, "\141\153\150\151\162" => $row->waktu_akhir]; mkMnE: } goto ciays; XoWNa: RiH09: goto MmCzt; b3Bmy: $result = $this->db->get("\143\x62\x74\137\x73\x65\163\151")->result(); goto R47Kf; Cx3i7: } public function getDataKelompokMapel() { goto XHtE9; ITOq3: foreach ($result as $row) { $ret[$row->kode_kel_mapel] = $row->nama_kel_mapel; CP8Jv: } goto tj_UO; oJGVE: $result = $this->db->get()->result(); goto wFiZY; tj_UO: fyPf2: goto xKB_l; wFiZY: $ret = []; goto ITOq3; QoJYf: $this->db->from("\155\x61\163\x74\x65\x72\x5f\153\x65\154\x6f\x6d\160\157\153\137\155\141\x70\x65\x6c"); goto EfA8p; XHtE9: $this->db->select("\52"); goto QoJYf; xKB_l: return $ret; goto LF9AC; EfA8p: $this->db->order_by("\153\x6f\x64\145\137\x6b\145\154\137\155\141\x70\145\x6c"); goto oJGVE; LF9AC: } public function getAllMapel() { goto MO09Q; mRrRV: $result = $this->db->get("\x6d\x61\163\164\x65\x72\137\x6d\141\160\x65\154")->result(); goto bxLAf; znEU0: return $ret; goto ivd1P; Qn222: $this->db->order_by("\x75\162\x75\164\x61\156\137\x74\141\x6d\160\151\154"); goto M8EpL; uRaUm: VsBiy: goto znEU0; deqvW: foreach ($result as $key => $row) { $ret[$row->id_mapel] = $row->nama_mapel; qZIBS: } goto LMkYH; M8EpL: $this->db->where("\163\164\141\164\x75\163", "\61"); goto mRrRV; bxLAf: if (!$result) { goto VsBiy; } goto deqvW; MO09Q: $this->db->select("\x69\x64\x5f\155\x61\160\x65\x6c\x2c\156\x61\155\x61\x5f\x6d\x61\x70\145\154\x2c\x75\x72\x75\164\x61\x6e\x5f\164\x61\155\x70\x69\x6c"); goto Qn222; LMkYH: Jx35Z: goto uRaUm; ivd1P: } public function getAllKodeMapel() { goto yr8z4; eIj3T: return $ret; goto m2xVB; QQUNj: $ret[''] = "\124\x69\x64\141\x6b\40\x61\144\x61"; goto VRp2B; wUZZy: $this->db->where("\163\x74\141\164\x75\x73", "\61"); goto mjtB2; guypQ: q3D3a: goto eIj3T; VRp2B: if (!$result) { goto q3D3a; } goto Kjqtn; Kjqtn: foreach ($result as $key => $row) { $ret[$row->id_mapel] = $row->kode; eekPy: } goto tQ5Qo; mjtB2: $result = $this->db->get("\155\141\163\x74\x65\162\x5f\155\x61\160\x65\x6c")->result(); goto QQUNj; yr8z4: $this->db->order_by("\165\x72\165\x74\x61\x6e\137\x74\x61\x6d\x70\x69\x6c"); goto wUZZy; tQ5Qo: bmmlC: goto guypQ; m2xVB: } public function getAllMapelPeminatan() { goto FT90X; w4ljb: foreach ($result as $key => $row) { $ret[$row->id_mapel] = $row->nama_mapel; puBU1: } goto qnK8P; Jr37x: $this->db->where("\x6b\x61\x74\x65\x67\x6f\x72\x69\40\74\x3e\x20\x22\x57\x41\112\x49\x42\x22")->or_where("\153\141\x74\145\147\x6f\x72\151\x20\74\76\40\42\x50\x41\x49\x20\x28\x4b\145\x6d\x65\x6e\141\147\51\x22"); goto IHLGq; Ts15o: $this->db->from("\x6d\x61\x73\x74\145\162\137\x6b\x65\x6c\x6f\x6d\x70\x6f\153\x5f\x6d\x61\x70\145\x6c"); goto Jr37x; qnK8P: NYVxB: goto Nd5zv; zmCQc: if (!$result) { goto h2MX6; } goto w4ljb; Ql5ku: lx3Zm: goto VWyUj; FAFgU: $this->db->order_by("\165\162\x75\x74\141\156\x5f\164\x61\155\x70\x69\154"); goto MHxYc; s8VSa: YVf6w: goto Z_5ff; MHxYc: $result = $this->db->get("\155\x61\163\x74\145\x72\x5f\155\141\160\145\154")->result(); goto zmCQc; FT90X: $this->db->select("\x2a"); goto Ts15o; B2B8Y: foreach ($res as $key => $row) { $ress[$row->id_kel_mapel] = $row->kode_kel_mapel; PXFcp: } goto V39ng; qlU21: if (!(count($ress) > 0)) { goto lx3Zm; } goto GigDZ; V39ng: EPykA: goto s8VSa; ReYeG: if (!$res) { goto YVf6w; } goto B2B8Y; mPtiV: $ress = []; goto ReYeG; IHLGq: $res = $this->db->get("\x6d\x61\x73\x74\x65\x72\137\x6d\141\160\x65\154")->result(); goto mPtiV; Nd5zv: h2MX6: goto Ql5ku; VWyUj: return $ret; goto opsM0; GigDZ: $this->db->where_in("\x6b\x65\154\157\x6d\160\x6f\x6b", $ress); goto FAFgU; Z_5ff: $ret = []; goto qlU21; opsM0: } public function getAllLevel($jenjang) { goto qOHi3; gUd2m: o_vcs: goto NOdUc; y1bLn: goto o_vcs; goto cq4Kf; NOdUc: return $levels; goto PMY33; x5iVl: $levels = ["\61\x30" => "\61\x30", "\x31\x31" => "\x31\61", "\x31\x32" => "\x31\62"]; goto gUd2m; jNnut: $levels = ["\x31" => "\61", "\x32" => "\x32", "\x33" => "\63", "\x34" => "\x34", "\x35" => "\x35", "\66" => "\x36"]; goto Nw8e1; Nw8e1: goto o_vcs; goto uGNF6; ChtoE: goto o_vcs; goto YDfX0; MliEp: $levels = ["\x37" => "\x37", "\x38" => "\70", "\71" => "\71"]; goto ChtoE; uGNF6: sI_Qq: goto MliEp; qOHi3: $levels = []; goto jGRQZ; cq4Kf: V91nb: goto jNnut; YDfX0: dl2GZ: goto x5iVl; mYz2c: if ($jenjang == "\62") { goto sI_Qq; } goto Rp3bW; Rp3bW: if ($jenjang == "\x33") { goto dl2GZ; } goto y1bLn; jGRQZ: if ($jenjang == "\x31") { goto V91nb; } goto mYz2c; PMY33: } public function getAllKelas($tp, $smt, $level = null) { goto d12SL; aXGg2: $this->db->where("\151\144\x5f\163\x6d\x74", $smt); goto HYqwW; VzJLe: $this->db->order_by("\x6e\x61\x6d\x61\x5f\x6b\145\x6c\141\x73", "\x41\123\x43"); goto OUgu7; OiDQm: foreach ($result as $key => $row) { $ret[$row->id_kelas] = $row->nama_kelas; CD3me: } goto Bs4ph; HYqwW: $this->db->order_by("\x6c\145\166\145\x6c\137\x69\x64", "\x41\x53\103"); goto VzJLe; Vbzpe: $ret = []; goto hQkGZ; hQkGZ: goto KHv1R; goto xsNAs; tELOI: jDJxR: goto oGHI8; wvGL2: $this->db->where("\x6c\x65\x76\x65\154\137\151\x64" . $level); goto tELOI; x6O_v: KHv1R: goto JI5xT; qSNRY: $this->db->where("\x69\x64\137\x74\x70", $tp); goto aXGg2; OUgu7: if (!($level != null)) { goto jDJxR; } goto wvGL2; DP3Jc: $this->db->from("\155\x61\163\x74\x65\162\x5f\153\x65\154\x61\163"); goto qSNRY; oGHI8: $result = $this->db->get()->result(); goto sO2Zp; OG6uJ: if ($result) { goto FVFvk; } goto Vbzpe; JI5xT: return $ret; goto uj9C0; xsNAs: FVFvk: goto OiDQm; sO2Zp: $ret = []; goto OG6uJ; Bs4ph: ZUstu: goto x6O_v; d12SL: $this->db->select("\x2a"); goto DP3Jc; uj9C0: } public function getAllKeyKodeKelas($tp, $smt) { goto SgJi2; g3f30: oeir1: goto p1CtZ; SgJi2: $this->db->select("\x2a"); goto LAyQe; wXxlx: if ($result) { goto oeir1; } goto sKqa9; y4jz1: J9E1k: goto e0IBj; e0IBj: return $ret; goto jU30L; vOMhv: $result = $this->db->get()->result(); goto wXxlx; p1CtZ: foreach ($result as $key => $row) { $ret[$row->kode_kelas] = $row->nama_kelas; uRwPN: } goto AcY86; XEhuj: goto J9E1k; goto g3f30; LAyQe: $this->db->from("\155\x61\163\x74\x65\162\137\x6b\x65\x6c\x61\x73"); goto vv01v; AcY86: tV5GW: goto y4jz1; vv01v: $this->db->where("\151\x64\x5f\164\x70", $tp); goto j9O3q; sKqa9: $ret = []; goto XEhuj; j9O3q: $this->db->where("\151\x64\137\x73\x6d\x74", $smt); goto vOMhv; jU30L: } public function getAllKodeKelas($tp = null, $smt = null) { goto HZdeq; U_phE: S1L2s: goto EKbr5; DeeJ3: if (!($tp != null)) { goto sh6XC; } goto INYR9; CeosY: $this->db->where("\x69\x64\x5f\163\155\164", $smt); goto v_XpR; EKbr5: return $ret; goto DyOnd; INYR9: $this->db->where("\x69\x64\x5f\164\x70", $tp); goto jN5IB; hbkqG: qveG3: goto M0WWu; jN5IB: sh6XC: goto hSQfr; hSQfr: if (!($smt != null)) { goto r8BeL; } goto CeosY; E3syZ: goto S1L2s; goto hbkqG; gDuz7: $ret = []; goto E3syZ; M0WWu: foreach ($result as $key => $row) { $ret[$row->id_kelas] = $row->kode_kelas; GI3tf: } goto d8OXg; d8OXg: lNVyR: goto U_phE; v_XpR: r8BeL: goto lMzQN; qeoyg: $this->db->from("\155\141\163\x74\145\162\x5f\153\x65\154\x61\163"); goto DeeJ3; a4CY7: if ($result) { goto qveG3; } goto gDuz7; lMzQN: $result = $this->db->get()->result(); goto a4CY7; HZdeq: $this->db->select("\x2a"); goto qeoyg; DyOnd: } public function getNamaKelasById($tp, $smt, $id) { goto LfYIf; Vhvzw: if ($result != null) { goto s_6hS; } goto bHxrG; XZN_I: $this->db->where("\151\x64\137\163\155\164", $smt); goto gSms6; RurBR: u42zS: goto QMTwj; zdwMn: $this->db->where("\151\x64\137\x74\160", $tp); goto XZN_I; LfYIf: $this->db->select("\x6e\x61\155\x61\x5f\153\145\154\141\x73"); goto rlHbg; s4YLy: goto u42zS; goto ym0G0; rlHbg: $this->db->where("\x69\144\137\x6b\x65\154\x61\x73", $id); goto zdwMn; bHxrG: return null; goto s4YLy; ym0G0: s_6hS: goto cK8Y9; gSms6: $result = $this->db->get("\x6d\141\163\164\x65\162\137\153\145\x6c\141\x73")->row(); goto Vhvzw; cK8Y9: return $result->nama_kelas; goto RurBR; QMTwj: } public function getAllKelasByArrayId($tp, $smt, $arrId) { goto rL_hg; i5RZb: $this->db->from("\x6d\x61\163\164\x65\x72\137\153\145\154\x61\163"); goto kgcrZ; LZJ_3: $ret = []; goto veKlg; b9jfQ: $result = $this->db->get()->result(); goto LZJ_3; veKlg: if (!$result) { goto PZqZ6; } goto I1zNQ; rL_hg: $this->db->select("\52"); goto i5RZb; bpZxJ: $this->db->where_in("\x69\x64\137\x6b\x65\154\x61\x73", $arrId); goto b9jfQ; AbXHN: KQ8Rd: goto n5Gzd; I1zNQ: foreach ($result as $key => $row) { $ret[$row->id_kelas] = $row->nama_kelas; vwRI1: } goto AbXHN; kgcrZ: $this->db->where("\151\x64\137\x74\x70", $tp); goto bpZxJ; Le9_l: return $ret; goto P9rXC; n5Gzd: PZqZ6: goto Le9_l; P9rXC: } public function getAllEkskul() { goto z2EP_; ojdY4: if (!$result) { goto NFuaA; } goto AuglG; VDurw: NFuaA: goto ObO1P; AuglG: foreach ($result as $key => $row) { $ret[$row->id_ekstra] = $row->nama_ekstra; t7nXd: } goto avY0h; z2EP_: $result = $this->db->get("\x6d\141\x73\x74\x65\162\x5f\145\153\x73\164\162\x61")->result(); goto ojdY4; avY0h: OBLCB: goto VDurw; ObO1P: return $ret; goto PzzlQ; PzzlQ: } public function getAllKodeEkskul() { goto Pb0_l; Pb0_l: $result = $this->db->get("\155\141\x73\x74\x65\x72\x5f\145\153\163\x74\162\141")->result(); goto lOCtP; WQr9i: gVt3p: goto Z6Hvl; DJsz4: return $ret; goto vycub; A6Tzj: foreach ($result as $key => $row) { $ret[$row->id_ekstra] = $row->kode_ekstra; MuJoO: } goto WQr9i; Z6Hvl: GmTD4: goto DJsz4; lOCtP: if (!$result) { goto GmTD4; } goto A6Tzj; vycub: } public function getAllJurusan() { goto t1Qqs; FGIH0: return $ret; goto jdPmL; DZ387: if (!$result) { goto DvqE7; } goto gEnxz; t1Qqs: $result = $this->db->get("\x6d\141\163\x74\x65\162\137\x6a\x75\x72\x75\x73\x61\x6e")->result(); goto DZ387; CeXwz: DvqE7: goto FGIH0; j23b9: iR3KN: goto CeXwz; gEnxz: foreach ($result as $key => $row) { $ret[$row->id_jurusan] = $row->kode_jurusan; vaQrE: } goto j23b9; jdPmL: } public function getAllGuru() { goto QuZ6P; Y_Abp: return $ret; goto ZMrmR; vCUMJ: BHBaW: goto Y_Abp; QuZ6P: $this->db->select("\141\x2e\x69\x64\137\x67\165\x72\165\54\x20\141\x2e\156\x61\155\141\x5f\x67\165\x72\x75"); goto F4Kjq; VOm6i: $ret["\60"] = "\120\x69\154\151\x68\40\x47\x75\162\x75\40\72"; goto GgeZ4; F4Kjq: $this->db->from("\155\x61\x73\164\145\x72\x5f\147\x75\x72\165\x20\141"); goto wEOUZ; uXJft: cisPy: goto vCUMJ; qhA_p: $result = $this->db->get()->result(); goto VOm6i; GgeZ4: if (!$result) { goto BHBaW; } goto sMcMN; wEOUZ: $this->db->join("\165\x73\x65\162\x73\x20\145", "\x61\x2e\165\163\145\162\156\141\x6d\x65\x3d\145\x2e\165\x73\145\162\156\141\x6d\x65"); goto qhA_p; sMcMN: foreach ($result as $key => $row) { $ret[$row->id_guru] = $row->nama_guru; KkIsj: } goto uXJft; ZMrmR: } public function getAllLevelGuru() { goto ZY_xQ; DSODe: return $ret; goto p3pdl; TE2KP: if (!$result) { goto l3SxF; } goto tGOQY; s5vHx: l3SxF: goto DSODe; tGOQY: foreach ($result as $key => $row) { $ret[$row->id_level] = $row->level; uoRJs: } goto Q4gCj; okKAw: $ret[''] = "\120\x69\154\x69\150\x20\x4a\x61\142\x61\164\x61\156\40\72"; goto TE2KP; Q4gCj: gP0gB: goto s5vHx; ZY_xQ: $result = $this->db->get("\154\x65\166\x65\154\x5f\x67\165\162\165")->result(); goto okKAw; p3pdl: } public function getAllJenisUjian() { goto f5x6R; Uj1cG: fzGkC: goto Kplbf; Kplbf: GmKyJ: goto uQAsw; jtTp2: foreach ($result as $key => $row) { $ret[$row->id_jenis] = $row->nama_jenis . "\40\50" . $row->kode_jenis . "\51"; g0hA2: } goto Uj1cG; WOzYg: if (!$result) { goto GmKyJ; } goto jtTp2; uQAsw: return $ret; goto krRu2; f5x6R: $result = $this->db->get("\x63\x62\164\137\152\x65\x6e\x69\163")->result(); goto WOzYg; krRu2: } public function getAllBankSoal() { goto HZxKG; HZxKG: $result = $this->db->get("\143\x62\x74\137\x62\141\156\x6b\x5f\163\x6f\x61\154")->result(); goto Tidli; ayCBB: foreach ($result as $key => $row) { $ret[$row->id_bank] = $row->bank_kode; oYihQ: } goto UawNB; Tidli: $ret[''] = "\x50\151\154\151\150\40\102\141\156\x6b\x20\123\157\141\154\40\x3a"; goto qNFC9; UawNB: KIjJm: goto fmv99; BMyAG: return $ret; goto h_Hy1; qNFC9: if (!$result) { goto RoUnx; } goto ayCBB; fmv99: RoUnx: goto BMyAG; h_Hy1: } public function getAllJadwal($tp, $smt) { goto pcWDX; jvAVB: nDEfQ: goto kduqC; U8Tvm: $this->db->join("\143\x62\164\x5f\142\141\156\x6b\x5f\163\157\x61\x6c\40\x62", "\142\56\x69\144\137\142\141\156\153\x3d\141\56\151\x64\x5f\x62\141\x6e\153"); goto Xonep; zYtyc: return $ret; goto ArWyN; kduqC: dg43H: goto zYtyc; FW3MB: foreach ($result as $key => $row) { $ret[$row->id_jadwal] = $row->bank_kode; iwswP: } goto jvAVB; Xonep: $this->db->where("\x61\x2e\x69\x64\x5f\164\x70", $tp); goto M9LeE; pcWDX: $this->db->from("\143\x62\164\137\152\x61\144\x77\141\x6c\40\141"); goto U8Tvm; wKDgm: $result = $this->db->get()->result(); goto vMszV; vMszV: $ret = []; goto IgQkV; IgQkV: if (!$result) { goto dg43H; } goto FW3MB; M9LeE: $this->db->where("\141\56\x69\x64\x5f\x73\155\x74", $smt); goto wKDgm; ArWyN: } public function getAllJadwalGuru($tp, $smt, $guru) { goto o0VLV; KXqBR: $result = $this->db->get()->result(); goto JxAOd; K_H2w: foreach ($result as $key => $row) { $ret[$row->id_jadwal] = $row->bank_kode; FwBZo: } goto PeWvQ; o0VLV: $this->db->from("\x63\x62\x74\137\x6a\x61\144\167\x61\154\40\141"); goto qrCXO; VvXcT: if (!$result) { goto EyNW1; } goto K_H2w; CX05L: return $ret; goto fQMFk; JxAOd: $ret = []; goto VvXcT; M6_BO: $this->db->where("\x61\56\151\x64\x5f\163\155\164", $smt); goto KXqBR; IffKK: EyNW1: goto CX05L; PeWvQ: SxA8Q: goto IffKK; qrCXO: $this->db->join("\143\142\x74\x5f\x62\141\156\x6b\x5f\x73\157\x61\154\40\142", "\142\56\x69\x64\x5f\142\141\156\153\x3d\x61\56\x69\144\137\142\x61\x6e\x6b\40\101\116\x44\x20\x62\56\x62\141\156\153\x5f\147\165\162\165\137\151\x64\75" . $guru); goto OGsII; OGsII: $this->db->where("\x61\x2e\151\144\137\x74\x70", $tp); goto M6_BO; fQMFk: } public function getAllJenisJadwal($tp, $smt, $jenis, $mapel) { goto CjXOJ; w5owi: $this->db->where("\141\56\151\x64\137\163\x6d\164", $smt); goto MIzFs; A7xgv: wrC8V: goto e8rV2; R8KMd: vhrZC: goto aUqm1; HT0yJ: foreach ($result as $key => $row) { $ret[$row->id_jadwal] = $row->bank_kode; fG3AZ: } goto EzD3a; DAHfz: $this->db->join("\143\142\x74\x5f\142\141\x6e\x6b\x5f\163\157\x61\x6c\x20\142", "\x62\56\x69\x64\x5f\142\x61\156\x6b\x3d\x61\x2e\x69\x64\x5f\142\x61\156\153\x20\x41\116\x44\x20\x62\x2e\x62\x61\x6e\x6b\137\x6d\x61\x70\x65\x6c\x5f\151\144\x3d" . $mapel . "\40"); goto j2yfg; CjXOJ: $this->db->from("\x63\x62\x74\137\152\x61\144\x77\141\154\x20\x61"); goto Bhq_Z; EzD3a: yQy3G: goto A7xgv; hrKff: $this->db->where("\141\56\x69\x64\x5f\164\160", $tp); goto w5owi; rgJRP: THJLy: goto hrKff; j2yfg: goto THJLy; goto R8KMd; gzU7s: if (!$result) { goto wrC8V; } goto HT0yJ; ENwfz: $ret = []; goto gzU7s; drLE6: $result = $this->db->get()->result(); goto ENwfz; Bhq_Z: if ($mapel == "\x30") { goto vhrZC; } goto DAHfz; e8rV2: return $ret; goto deEIv; MIzFs: $this->db->where("\x61\x2e\x69\x64\137\152\x65\156\x69\x73", $jenis); goto drLE6; aUqm1: $this->db->join("\x63\142\164\137\142\x61\x6e\x6b\x5f\163\x6f\141\154\x20\x62", "\142\x2e\151\144\x5f\x62\x61\156\153\75\x61\x2e\151\144\137\x62\x61\x6e\x6b"); goto rgJRP; deEIv: } }
