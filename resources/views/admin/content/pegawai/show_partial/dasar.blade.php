<div class="text-center masariuman-titleTable">Data Pegawai</div>
<div class="table-responsive">
    <table class="table table-striped">
        <tbody>
            <tr>
                <td class="masariuman-tdBgBlack">ESELON I</td>
                <td>{{$pegawai->eselon_1}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">ESELON II</th>
                <td>{{$pegawai->eselon_2}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">ESELON III</th>
                <td>{{$pegawai->eselon_3}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">ESELON IV</th>
                <td>{{$pegawai->eselon_4}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">NIP BARU</th>
                <td>{{$pegawai->nip_baru}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">NIP LAMA</th>
                <td>{{$pegawai->nip_lama}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">NAMA PEGAWAI</th>
                <td>{{$pegawai->nama_pegawai}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">GELAR DEPAN</th>
                <td>{{$pegawai->gelar_depan}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">GELAR BELAKANG</th>
                <td>{{$pegawai->gelar_belakang}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">TANGGAL LAHIR</th>
                <td>{{$pegawai->tanggal_lahir}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">TEMPAT LAHIR</th>
                <td>{{$pegawai->tempat_lahir}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">JENIS KELAMIN</th>
                <td>{{$pegawai->jenis_kelamin}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">STATUS KELUARGA</th>
                <td>{{$pegawai->status_keluarga}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">AGAMA</th>
                <td>{{$pegawai->agama}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">PENDIDIKAN AKHIR</th>
                <td>{{$pegawai->pendidikan_akhir}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">NAMA SEKOLAH/TAHUN LULUS</th>
                <td>{{$pegawai->nama_sekolah}}/{{$pegawai->tahun_lulus}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">JURUSAN / PROGRAM STUDI</th>
                <td>{{$pegawai->jurusan_prodi}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">STATUS KEPEGAWAIAN</th>
                <td>{{$pegawai->status_kepegawaian}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">INSTANSI ASAL</th>
                <td>{{$pegawai->instansi_asal}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">TMT CALON PEGAWAI NEGERI SIPIL</th>
                <td>{{$pegawai->tmt_cpns}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">GOLONGAN/RUANG TERAKHIR</th>
                <td>{{$pegawai->golongan}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">TMT Golongan</th>
                <td>{{$pegawai->tmt_golongan}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">NAMA JABATAN</th>
                <td>{{$pegawai->nama_jabatan}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">NOMOR KARPEG</th>
                <td>{{$pegawai->nomor_karpeg}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">TASPEN</th>
                <td>{{$pegawai->taspen}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">NOMOR NPWP</th>
                <td>{{$pegawai->nomor_npwp}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">ALAMAT RUMAH</th>
                <td>{{$pegawai->alamat_rumah}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">KOTA</th>
                <td>{{$pegawai->kota}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">KODE POS</th>
                <td>{{$pegawai->kode_pos}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">NOMOR TELEPON</th>
                <td>
                    @if (!empty($pegawai->telepon->telepon))
                        {{$pegawai->telepon->telepon}}
                    @endif
                </td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">NOMOR STR (SURAT TANDA REGISTRASI)</th>
                <td>{{$pegawai->str}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">MASA BERLAKU STR</th>
                <td>{{$pegawai->masa_str}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">NOMOR SIKP (SURAT IZIN KERJA PERAWAT)</th>
                <td>{{$pegawai->sikp}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">MASA BERLAKU SIKP</th>
                <td>{{$pegawai->masa_sikp}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">NOMOR SPK (SURAT PENUGASAAN KEWENANGAN KLINIS)</th>
                <td>{{$pegawai->spk}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">MASA BERLAKU SPK</th>
                <td>{{$pegawai->masa_spk}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">NOMOR RKK (RINCIAN KEWENANGAN KLINIS)</th>
                <td>{{$pegawai->rkk}}</td>
            </tr>
            <tr>
                <th scope="row" class="masariuman-tdBgBlack">MASA BERLAKU RKK</th>
                <td>{{$pegawai->masa_rkk}}</td>
            </tr>
        </tbody>
    </table>
</div>
