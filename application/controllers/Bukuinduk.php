<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Bukuinduk extends CI_Controller { public function __construct() { goto HHWe5; fT8lD: $this->load->model("\x44\141\x73\x68\142\157\141\x72\144\x5f\x6d\157\144\145\154", "\144\141\x73\x68\142\x6f\x61\162\x64"); goto nIBSI; IHyHL: YV8ej: goto ygWrt; rxbOL: yMEtm: goto O0fVy; FNhl0: Am8uY: goto AMRIA; AMRIA: $this->load->library(["\x64\x61\164\141\x74\x61\142\x6c\145\x73", "\146\157\162\155\137\x76\141\x6c\x69\144\141\164\151\x6f\156"]); goto fT8lD; n0NnK: $this->load->model("\113\x65\x6c\x61\x73\x5f\155\157\x64\x65\154", "\153\145\x6c\141\163"); goto LxLjT; DuBY5: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\x72\x75"))) { goto YV8ej; } goto MycpK; H2zGD: $this->load->model("\x4d\141\163\164\x65\162\x5f\155\x6f\144\145\154", "\155\x61\x73\x74\x65\x72"); goto W9aD5; HHWe5: parent::__construct(); goto mu6dH; mu6dH: if (!$this->ion_auth->logged_in()) { goto yMEtm; } goto DuBY5; MycpK: show_error("\x48\141\156\x79\141\x20\101\x64\155\x69\156\x69\x73\164\162\x61\x74\157\162\x20\x79\141\x6e\147\x20\x64\151\x62\145\162\151\40\x68\x61\x6b\x20\x75\x6e\164\x75\x6b\x20\x6d\145\156\x67\x61\x6b\x73\x65\x73\40\150\x61\154\141\155\x61\156\x20\151\156\x69\54\x20\x3c\141\40\x68\162\x65\x66\x3d\x22" . base_url("\144\141\x73\150\142\x6f\x61\x72\144") . "\x22\76\x4b\145\x6d\142\141\x6c\151\40\x6b\145\x20\x6d\145\156\165\40\141\167\141\154\74\x2f\141\76", 403, "\x41\153\163\145\163\40\124\x65\x72\154\x61\x72\141\156\147"); goto IHyHL; ygWrt: goto Am8uY; goto rxbOL; LxLjT: $this->load->model("\x44\x72\157\x70\x64\x6f\x77\156\137\155\x6f\x64\x65\x6c", "\x64\x72\157\160\144\x6f\167\x6e"); goto H2zGD; nIBSI: $this->load->model("\x52\141\160\157\162\137\x6d\157\144\x65\154", "\162\141\x70\x6f\162"); goto n0NnK; W9aD5: $this->form_validation->set_error_delimiters('', ''); goto ksvKD; O0fVy: redirect("\141\x75\x74\x68"); goto FNhl0; ksvKD: } public function output_json($data, $encode = true) { goto i4DzS; Ro1qr: T1MKm: goto vn4Tf; vn4Tf: $this->output->set_content_type("\141\x70\160\154\x69\143\x61\x74\151\157\156\57\x6a\x73\x6f\156")->set_output($data); goto cqQaW; i4DzS: if (!$encode) { goto T1MKm; } goto NuK1b; NuK1b: $data = json_encode($data); goto Ro1qr; cqQaW: } function generateTahunMasuk($tp, $level) { goto WrG3M; d5mjx: if ($level == 9) { goto huBLj; } goto Ljw3I; GVLFl: XT4iM: goto LIQBk; SqdqC: $thn = $tahun; goto d5mjx; WrG3M: $tahun = explode("\57", $tp)[0]; goto SqdqC; YQXBv: oRAFl: goto KJiCA; MuIT8: $thn = $tahun; goto YQXBv; HhLuG: GvWGX: goto MuIT8; M9ywc: $thn = $tahun - 2; goto pCsDS; LIQBk: $thn = $tahun - 1; goto plFhP; pCsDS: goto oRAFl; goto GVLFl; plFhP: goto oRAFl; goto HhLuG; B7xGK: goto oRAFl; goto NeUys; s9BUk: if ($level == 7) { goto GvWGX; } goto B7xGK; KJiCA: return $thn; goto eC3rr; Ljw3I: if ($level == 8) { goto XT4iM; } goto s9BUk; NeUys: huBLj: goto M9ywc; eC3rr: } public function index() { goto NTc2k; Atv13: $data["\x73\x6d\164"] = $arrSmt; goto GlWc_; dTomO: H4WYj: goto ON1Mf; BNEyp: $data = ["\165\163\145\162" => $user, "\152\x75\x64\x75\154" => "\102\x75\x6b\165\x20\x49\x6e\x64\x75\x6b", "\x73\x75\142\x6a\165\x64\x75\154" => "\x42\165\153\165\x20\111\156\144\x75\153", "\x73\x65\164\x74\151\x6e\147" => $setting]; goto Bb8UQ; fmvjP: $deskFisik = $this->rapor->getAllDeskripsiFisikKelas(); goto TWjXZ; SIele: $data_siswa = []; goto cAd0Q; B0ScN: $this->load->view("\163\x65\164\x74\151\156\x67\x2f\151\156\x64\x75\x6b"); goto litiz; cAd0Q: $thn_siswa = []; goto Qmp5j; GlWc_: $data["\x73\155\x74\x5f\141\143\x74\151\166\145"] = $smt; goto yW5V4; ON1Mf: $data["\x72\x61\x70\157\162\137\146\x69\x73\x69\153"] = $rapor_fisik; goto oKRkz; CmySO: $arrSmt = $this->dashboard->getSemester(); goto KY9Tf; Qmp5j: foreach ($siswas as $id_siswa => $siswa) { goto NSy6E; tDQCr: snj3h: goto SaS00; mtI7m: yvEqE: goto h0ZB8; PUS1g: $tahunMasuk = ''; goto e0Kgs; u9qoW: if ($setting->jenjang == "\61") { goto yvEqE; } goto vR0SK; iCuoK: foreach ($rapor_fisik as $rf) { goto JN7xA; oSZO0: foreach ($rf->fisik as $value) { $value->kondisi = unserialize($value->kondisi); HmQVa: } goto aM0jq; aM0jq: Pvm9h: goto TJtgB; JN7xA: $rf->fisik = unserialize($rf->fisik); goto oSZO0; TJtgB: UgNZy: goto SFLzK; SFLzK: } goto pY1cj; SaS00: $noinduk[$siswa->id_siswa] = ["\x6e\151\x73" => $siswa->nis, "\156\x69\x73\156" => $siswa->nisn]; goto Hdbn2; e0Kgs: goto dFgqv; goto IkYNZ; CDXQm: goto PfkVH; goto mtI7m; m0FEg: foreach ($data_tahun as $dtp) { goto SFyXC; zTF4n: if (!isset($rapor_fisik[$dtp])) { goto lulU3; } goto DiDV5; WZVv0: $penyakit[$dtp][1] = ''; goto e6p4d; OABai: $kelainan[$dtp][2] = ''; goto zTF4n; e0XLI: $tinggi[$dtp][2] = ''; goto WZVv0; aEXg3: lulU3: goto pkaAS; DngvV: $berat[$dtp][2] = ''; goto wqOxD; iWRlq: rLIb6: goto aEXg3; SFyXC: $berat[$dtp][1] = ''; goto DngvV; DiDV5: foreach ($rapor_fisik[$dtp]->fisik as $rf) { goto PViPa; PViPa: $berat[$dtp][$rf->id_smt] = $rf->berat; goto jANPC; n_lQe: kbDEk: goto ycIjs; jANPC: $tinggi[$dtp][$rf->id_smt] = $rf->tinggi; goto n_lQe; ycIjs: } goto iWRlq; pkaAS: AooST: goto aL35Y; wqOxD: $tinggi[$dtp][1] = ''; goto e0XLI; e6p4d: $penyakit[$dtp][2] = ''; goto mK9eV; mK9eV: $kelainan[$dtp][1] = ''; goto OABai; aL35Y: } goto tDQCr; NSy6E: $rapor_fisik = isset($fisik_siswa[$id_siswa]) ? $fisik_siswa[$id_siswa] : []; goto iCuoK; vR0SK: $data_tahun = [intval($tahunMasuk) . "\x2f" . (intval($tahunMasuk) + 1), intval($tahunMasuk) + 1 . "\x2f" . (intval($tahunMasuk) + 2), intval($tahunMasuk) + 2 . "\57" . (intval($tahunMasuk) + 3)]; goto CDXQm; h0ZB8: $data_tahun = [intval($tahunMasuk) . "\57" . (intval($tahunMasuk) + 1), intval($tahunMasuk) + 1 . "\57" . (intval($tahunMasuk) + 2), intval($tahunMasuk) + 2 . "\57" . (intval($tahunMasuk) + 3), intval($tahunMasuk) + 3 . "\x2f" . (intval($tahunMasuk) + 4), intval($tahunMasuk) + 4 . "\x2f" . (intval($tahunMasuk) + 5), intval($tahunMasuk) + 5 . "\57" . (intval($tahunMasuk) + 6)]; goto D5SoV; IkYNZ: OVQOi: goto GMaL6; gmvjv: $berat = []; goto hMfGq; DLCu6: $penyakit = []; goto zcnaq; zcnaq: $kelainan = []; goto m0FEg; WeXdv: if ($siswa->tahun_masuk != null) { goto OVQOi; } goto PUS1g; D5SoV: PfkVH: goto gmvjv; lcm3U: dFgqv: goto u9qoW; XHgyw: Tf1FR: goto KanW6; GMaL6: $tahunMasuk = explode("\55", $siswa->tahun_masuk)[0]; goto lcm3U; pY1cj: Mo1NE: goto WeXdv; hMfGq: $tinggi = []; goto DLCu6; Hdbn2: $data_siswa[$siswa->id_siswa] = ["\x6e\x69\163" => $siswa->nis, "\x6e\151\x73\x6e" => $siswa->nisn, "\x70\x61\147\x65\x31" => ["\101" => ["\164\151\164\x6c\145" => "\x4b\x45\x54\x45\122\101\x4e\x47\101\116\x20\124\105\116\x54\x41\x4e\107\x20\104\111\x52\111\40\x53\111\123\x57\101", "\166\x61\x6c\x75\145" => ["\116\141\x6d\141\x20\x53\151\x73\167\141" => ["\116\x61\x6d\141\40\x4c\x65\x6e\147\153\141\160" => $siswa->nama, "\116\141\155\x61\40\120\x61\x6e\147\147\x69\x6c\141\x6e" => ''], "\112\x65\x6e\x69\163\40\113\x65\x6c\x61\155\x69\x6e" => $siswa->jenis_kelamin, "\124\145\155\160\141\164\40\144\141\x6e\40\x54\147\x6c\x20\x4c\x61\x68\x69\162" => $siswa->tempat_lahir, "\101\147\141\155\141" => $siswa->agama, "\113\x65\167\x61\x72\147\x61\156\145\147\141\x72\141\x61\x6e" => $siswa->warga_negara, "\101\156\141\153\x20\x6b\x65" => $siswa->anak_ke, "\x4a\x75\x6d\x6c\141\150\x20\x53\x64\162\56\40\113\x61\156\144\165\x6e\147" => '', "\112\165\155\154\141\150\x20\123\144\162\56\40\124\151\162\x69" => '', "\112\165\155\x6c\141\150\40\x53\144\x72\56\x20\101\156\x67\x6b\x61\164" => '', "\x41\x6e\141\153\40\131\141\164\x69\155\x2f\131\141\164\x69\x6d\40\120\x69\141\164\165" => '', "\102\141\150\141\163\141\40\123\145\150\141\x72\x69\55\150\141\x72\x69" => '']], "\102" => ["\164\x69\164\154\x65" => "\x4b\105\x54\105\122\x41\116\x47\101\x4e\x20\x54\x45\115\120\101\x54\x20\x54\x49\x4e\x47\x47\101\x4c", "\166\x61\x6c\165\x65" => ["\x41\x6c\141\x6d\x61\x74" => $siswa->alamat, "\x4e\157\x6d\157\162\40\x54\145\x6c\145\160\x6f\156" => $siswa->hp, "\x54\x69\x6e\147\x67\x61\x6c\40\x42\145\162\x73\141\x6d\x61" => '', "\x4a\x61\x72\x61\153\40\153\145\x20\x53\145\153\157\x6c\x61\x68" => '']], "\103" => ["\x74\151\164\x6c\145" => "\113\x45\124\105\122\x41\x4e\x47\101\116\x20\x4b\105\123\105\110\x41\124\x41\x4e", "\x76\x61\x6c\x75\x65" => ["\107\157\154\157\156\x67\x61\156\40\x44\x61\162\x61\x68" => '', "\x4b\x65\141\x64\141\141\156\40\x4a\141\x73\x6d\x61\156\x69" => "\133\164\141\142\x6c\145\x5d"], "\164\x61\x62\154\x65" => ["\x74\141\150\165\156" => $data_tahun, "\142\145\x72\141\x74" => $berat, "\x74\x69\x6e\x67\x67\x69" => $tinggi, "\x70\x65\156\x79\141\x6b\x69\164" => $penyakit, "\153\145\x6c\x61\151\x6e\141\156" => $kelainan]], "\x44" => ["\164\x69\164\x6c\145" => "\113\105\x54\105\122\x41\116\x47\x41\x4e\40\x50\x45\116\x44\111\x44\x49\x4b\101\116", "\166\141\154\x75\x65" => ["\120\145\156\x64\x69\144\151\x6b\x61\x6e\40\123\145\x62\145\x6c\x75\x6d\156\x79\141" => ["\x4c\165\x6c\165\x73\x61\156\40\104\x61\x72\x69" => $siswa->sekolah_asal, "\116\157\x6d\157\x72\40\x49\152\x61\172\x61\150" => ''], "\x50\151\x6e\x64\141\x68\141\156" => ["\x44\141\162\151\x20\123\x65\x6b\x6f\x6c\141\x68" => '', "\x41\x6c\141\163\x61\x6e" => ''], "\x44\151\x74\x65\162\x69\x6d\141\x20\104\151\163\x65\x6b\157\x6c\141\x68\40\x49\156\151" => ["\x44\x69\40\x54\x69\156\147\x6b\x61\164" => $siswa->kelas_awal, "\113\x65\154\157\x6d\160\157\x6b" => '', "\112\165\x72\165\163\x61\156" => '', "\x54\x61\156\147\x67\141\154" => $siswa->tahun_masuk]]]], "\160\x61\147\145\x32" => ["\105" => ["\164\151\164\154\145" => "\113\105\x54\105\x52\x41\116\107\x41\116\40\124\105\116\124\x41\116\x47\x20\x41\x59\101\x48\x20\x4b\101\116\104\x55\x4e\107", "\166\x61\x6c\x75\145" => ["\x4e\141\155\141" => $siswa->nama_ayah, "\x54\x65\155\160\141\164\x20\x64\141\156\40\x54\141\x6e\147\x67\141\154\40\x4c\x61\x68\151\162" => $siswa->tgl_lahir_ayah, "\x41\x67\141\155\x61" => '', "\113\145\167\x61\162\147\141\x6e\145\x67\x61\x72\x61\x61\156" => '', "\x50\x65\x6e\x64\151\x64\151\x6b\141\x6e" => $siswa->pendidikan_ayah, "\120\145\x6b\x65\x72\x6a\141\141\x6e" => $siswa->pekerjaan_ayah, "\x50\145\x6e\147\x68\141\x73\x69\154\141\156\40\160\145\162\x20\x42\165\x6c\141\156" => '', "\101\154\x61\x6d\x61\x74\x20\57\40\x4e\x6f\x6d\x6f\162\40\x54\x65\x6c\x65\x70\157\x6e" => $siswa->nohp_ayah, "\x4b\145\x62\145\x72\x61\144\141\141\x6e\x20\x41\x79\141\150" => "\x4d\x61\163\x69\150\x20\x48\x69\x64\x75\160\40\57\40\x4d\x65\156\151\156\x67\x67\x61\x6c\40\104\165\x6e\151\x61\40\x54\141\x68\x75\156\72\x20\x2e\56\x2e\x2e\x2e\x2e\x2e\x2e"]], "\x46" => ["\x74\x69\x74\154\x65" => "\113\105\x54\x45\x52\101\116\x47\101\x4e\x20\124\105\x4e\x54\101\x4e\107\40\111\102\x55\40\113\101\116\104\x55\116\107", "\166\141\x6c\165\145" => ["\x4e\141\155\x61" => $siswa->nama_ayah, "\x54\x65\x6d\160\x61\164\x20\x64\141\156\40\x54\141\156\x67\x67\x61\154\40\114\x61\x68\151\162" => $siswa->tgl_lahir_ayah, "\101\147\141\x6d\141" => '', "\x4b\x65\167\141\x72\147\x61\x6e\x65\x67\141\x72\x61\141\x6e" => '', "\120\145\156\144\x69\144\x69\x6b\141\156" => $siswa->pendidikan_ayah, "\x50\x65\153\145\162\x6a\x61\x61\x6e" => $siswa->pekerjaan_ayah, "\120\x65\156\x67\150\141\163\151\154\141\x6e\x20\160\x65\x72\x20\x42\x75\x6c\141\x6e" => '', "\101\154\141\155\141\164\x20\x2f\40\116\157\155\x6f\x72\x20\x54\145\154\x65\x70\x6f\x6e" => $siswa->nohp_ayah, "\113\x65\142\x65\x72\x61\144\141\141\x6e\x20\111\x62\x75" => "\x4d\x61\x73\x69\x68\40\x48\x69\144\x75\160\x20\x2f\40\x4d\x65\156\x69\156\147\x67\141\x6c\40\104\165\156\x69\x61\40\124\141\150\165\x6e"]], "\107" => ["\164\x69\x74\154\x65" => "\113\x45\x54\x45\x52\x41\x4e\107\x41\116\x20\124\105\116\124\101\116\x47\x20\x57\x41\114\111", "\166\x61\x6c\x75\x65" => ["\116\141\x6d\141" => $siswa->nama_ayah, "\x54\x65\155\160\x61\x74\x20\144\x61\156\x20\x54\141\156\147\x67\141\154\40\114\x61\x68\x69\162" => $siswa->tgl_lahir_ayah, "\101\147\141\155\x61" => '', "\113\x65\x77\x61\x72\147\x61\156\x65\147\x61\162\141\x61\156" => '', "\x50\145\x6e\x64\151\144\151\x6b\141\156" => $siswa->pendidikan_ayah, "\120\x65\x6b\x65\162\x6a\x61\x61\156" => $siswa->pekerjaan_ayah, "\120\x65\156\147\x68\141\163\x69\154\x61\x6e\x20\x70\145\x72\40\102\x75\154\x61\x6e" => '', "\101\x6c\x61\155\x61\164\40\57\x20\x4e\x6f\155\x6f\162\40\x54\145\x6c\145\x70\x6f\156" => $siswa->nohp_ayah]], "\110" => ["\164\151\164\154\x65" => "\x4b\x45\x47\x45\x4d\101\x52\x41\116\40\x53\x49\123\127\101", "\x76\141\154\x75\145" => ["\113\145\x73\x65\x6e\x69\x61\x6e" => '', "\x4f\154\141\150\40\x52\141\147\x61" => '', "\117\x72\147\x61\156\151\x73\x61\163\151" => '', "\x4c\141\x69\156\342\x80\223\154\141\x69\x6e" => '']]], "\x70\141\147\x65\x33" => ["\111" => ["\164\151\164\x6c\145" => "\113\105\x54\105\x52\101\x4e\x47\x41\x4e\40\120\105\122\113\105\115\102\101\116\107\x41\x4e\40\x53\x49\x53\x57\101", "\x76\x61\154\x75\145" => ["\x4d\x65\156\x65\162\151\x6d\141\40\x42\x65\x61\40\123\x69\163\x77\141" => "\x5b\164\x61\150\165\156\x5d", "\115\145\156\151\156\147\x67\141\x6c\x6b\x61\x6e\x20\x53\145\x6b\x6f\x6c\141\150" => ["\124\141\156\x67\147\141\x6c" => '', "\x41\x6c\141\x73\x61\x6e" => ''], "\101\153\150\x69\x72\x20\120\145\156\144\151\144\x69\153\141\156" => ["\x54\141\x6d\141\x74\40\x42\x65\x6c\141\x6a\x61\x72" => $siswa->tahun_lulus, "\x4e\x6f\155\157\162\40\x49\x6a\x61\x7a\x61\150" => $siswa->no_ijazah]], "\x74\x61\150\x75\x6e" => ["\x54\x61\150\x75\x6e\40\x2e\56\x2e\56\56\56\56\x2e\x2e\x2e\56\56\x2f\x20\x54\113\x20\342\200\xa6\xe2\200\xa6\xe2\x80\xa6\xe2\200\246\342\x80\246\342\200\xa6\342\200\xa6\xe2\x80\xa6\56\56\144\141\162\x69\342\200\xa6\xe2\200\246\xe2\200\xa6\xe2\x80\246\xe2\x80\246\342\200\xa6\342\200\xa6\342\200\xa6\x2e\x2e", "\x54\141\x68\165\x6e\40\56\56\x2e\56\x2e\x2e\x2e\56\x2e\x2e\x2e\x2e\57\x20\x54\x4b\x20\342\200\xa6\xe2\x80\xa6\xe2\x80\246\342\200\xa6\342\x80\xa6\xe2\x80\xa6\xe2\x80\246\xe2\x80\xa6\56\x2e\x64\x61\162\x69\342\x80\xa6\xe2\x80\246\342\200\xa6\xe2\200\xa6\342\x80\246\xe2\200\246\xe2\x80\246\xe2\200\xa6\x2e\56", "\124\x61\x68\165\x6e\x20\56\x2e\x2e\56\56\56\56\x2e\56\56\56\x2e\57\x20\x54\113\x20\xe2\x80\xa6\xe2\200\246\xe2\x80\xa6\xe2\200\246\xe2\200\xa6\342\x80\xa6\xe2\200\246\xe2\x80\246\x2e\56\144\x61\x72\x69\342\x80\246\xe2\200\xa6\xe2\200\246\xe2\200\246\342\200\xa6\342\200\246\xe2\x80\246\342\x80\xa6\56\x2e"]], "\x4a" => ["\x74\151\164\x6c\x65" => "\113\105\124\x45\122\x41\x4e\x47\x41\x4e\40\x53\105\x54\105\x4c\101\x48\x20\123\105\x4c\105\x53\x41\x49\x20\x50\105\x4e\104\111\x44\111\x4b\x41\x4e", "\x76\141\154\x75\x65" => ["\x4d\145\154\141\156\152\x75\164\153\x61\x6e\40\144\151" => '', "\x42\x65\x6b\145\162\152\x61" => ["\124\x61\156\147\x67\x61\154\x20\x4d\165\154\x61\151\x20\102\x65\153\x65\162\152\141" => '', "\116\x61\155\x61\40\124\x65\155\160\x61\164\x20\102\x65\153\145\x72\x6a\x61" => '', "\x50\x65\x6e\x67\150\x61\x73\x69\x6c\141\x6e" => '']]], "\x4b" => ["\x74\x69\164\154\x65" => "\x4c\x41\111\x4e\x20\xe2\x80\223\40\x4c\x41\111\116", "\166\x61\x6c\x75\x65" => ["\103\141\x74\x61\x74\141\156\x20\x59\x61\x6e\147\x20\120\x65\156\164\x69\156\x67" => '']]]]; goto XHgyw; KanW6: } goto dTomO; jrjES: $data["\152\165\x6d\x6c\x61\150\x5f\x6c\x75\154\165\163"] = $this->rapor->getJumlahLulus($tp->id_tp - 1, "\x32", $level); goto TonnW; yW5V4: $data["\x70\162\x6f\146\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto pyMmQ; KY9Tf: $tp = $this->dashboard->getTahunActive(); goto ofMlt; TWjXZ: $fisik_siswa = $this->rapor->getAllRaporFisik(); goto SIele; oKRkz: $data["\x6e\x6f\x69\156\144\165\153"] = $noinduk; goto C0xhx; litiz: $this->load->view("\137\164\x65\155\x70\x6c\141\x74\x65\x73\57\x64\x61\163\x68\142\x6f\x61\x72\x64\x2f\137\146\157\157\164\145\x72"); goto SNONY; z3i5F: if (!($count_siswa > $count_induk)) { goto OvKCV; } goto z2LIW; sqPDF: $data["\164\x70\137\141\x63\x74\151\x76\145"] = $tp; goto Atv13; HyNML: foreach ($uids as $uid) { goto ipOXZ; H6_fP: psFRk: goto Hpl1s; ipOXZ: $check = $this->db->select("\x69\144\x5f\163\151\x73\x77\141")->from("\x62\165\153\165\x5f\151\x6e\144\165\153")->where("\151\x64\x5f\x73\x69\163\x77\x61", $uid->id_siswa); goto p0j9n; rwLk3: $this->db->insert("\142\x75\x6b\165\x5f\151\x6e\x64\x75\153", $uid); goto zvScC; p0j9n: if (!($check->get()->num_rows() == 0)) { goto qnTsT; } goto rwLk3; zvScC: qnTsT: goto H6_fP; Hpl1s: } goto gSapa; gSapa: ZoBw5: goto JNyJ_; N6Uo_: $siswas = $this->master->getDataInduk(); goto fmvjP; z2LIW: $uids = $this->db->select("\x69\x64\137\163\x69\163\167\x61\x2c\x20\165\151\x64")->from("\x6d\141\163\164\145\x72\137\x73\151\163\x77\x61")->get()->result(); goto HyNML; pyMmQ: $count_siswa = $this->db->count_all("\x6d\x61\163\x74\x65\162\137\x73\151\163\167\x61"); goto P0Aqh; G560d: $setting = $this->dashboard->getSetting(); goto BNEyp; GYNQT: $data["\x64\x65\x74\x61\x69\154"] = $data_siswa; goto d3jh9; d3jh9: $data["\141\162\162\137\164\145\x73\164"] = $thn_siswa; goto IKbgQ; ofMlt: $smt = $this->dashboard->getSemesterActive(); goto W3Q4O; TonnW: $this->load->view("\x5f\x74\145\x6d\160\x6c\141\164\145\163\57\x64\141\163\150\x62\x6f\141\x72\x64\x2f\137\x68\x65\x61\144\x65\x72", $data); goto B0ScN; Bb8UQ: $arrTp = $this->dashboard->getTahun(); goto CmySO; W3Q4O: $data["\164\160"] = $arrTp; goto sqPDF; NTc2k: $user = $this->ion_auth->user()->row(); goto G560d; JNyJ_: OvKCV: goto N6Uo_; C0xhx: $data["\163\151\163\x77\x61\x73"] = $siswas; goto GYNQT; P0Aqh: $count_induk = $this->db->count_all("\142\x75\x6b\x75\x5f\151\x6e\144\165\153"); goto z3i5F; IKbgQ: $level = $setting->jenjang == "\x31" ? "\x36" : ($setting->jenjang == "\62" ? "\71" : ($setting->jenjang == "\61" ? "\63" : "\x31\62")); goto jrjES; SNONY: } }
