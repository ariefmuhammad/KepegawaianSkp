@extends('admin.template')

@push('css')
@endpush


@section('title')
    {{$pegawai->user->name}}
@endsection


@section('titleContent')
    <div class="top-bar color-scheme-transparent masariuman-height103px">
        <div class="top-menu-controls masariuman-marginleft30px">
            <div class="icon-w top-icon masariuman-titlecontent">
            <div class="fa fa-users"></div>
            </div>
            <div class="masariuman-textleft">
                <span class="masariuman-bold">PEGAWAI</span> <br/>
                <small>Manajemen Pegawai</small>
            </div>
        </div>
        <div class="top-menu-controls">
            <button class="mr-2 mb-2 btn btn-outline-primary" type="button"><i class="batch-icon-bulb-2"></i> PETUNJUK <i class="batch-icon-bulb"></i></button>
        </div>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/it/pegawai">Pegawai</a>
        </li>
        <li class="breadcrumb-item">
            <span>{{$pegawai->user->name}}</span>
        </li>
    </ul>
@endsection


@section('content')
<div class="text-center">
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info active" id="dasarB" data="{{$pegawai}}">Dasar</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_pendidikan_formalB">Riwayat Pendidikan Formal</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_diklat_fungsionalB">Riwayat Diktal Fungsional</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_diklat_teknisB">Riwayat Diklat Teknis</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_diklat_penjenjanganB">Riwayat Diklat Penjenjangan</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_kepangkatanB">Riwayat Kepangkatan</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_jabatan_strukturalB">Riwayat Jabatan Struktural</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_jabatan_fungsionalB">Riwayat Jabatan Fungsional</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_pekerjaanB">Riwayat Pekerjaan/Jabatan Teknis</button>
    @if ($pegawai->jenis_kelamin === 'W')
        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="pasanganB">Suami</button>
    @else
        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="pasanganB">Istri</button>
    @endif
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="anakB">Anak</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="seminarB">Seminar/Lokakarya/Simposium</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="jasaB">Tanda Jasa/Penghargaan</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="hukumB">Hukuman Disiplin</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="organisasiB">Keanggotaan Organisasi</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="keluargaB">Keluarga</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info">SKP</button>
</div>
<hr />
<div>
    <table class="masariuman-width100percent">
        <tr>
            <td class="masariuman-width40percent masariuman-verticalAlignBaseline">
                <div class="masariuman-nameNip text-center">
                    <p style="margin-bottom: 0;">{{$pegawai->user->name}}</p>
                    <p>NIP : {{$pegawai->nip_baru}}</p>
                </div>
                <div class="masariuman-photoProfile" style="background-image: url('/iniTemplate/gambar/chonk.jpg')"></div>
            </td>
            <td>
                <div id="benda">
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
                </div>
            </td>
        </tr>
    </table>
</div>
@endsection


@push('js')
    <script>
        $(document).ready(function() {
            $('#tabeldata').DataTable({
                "language": {
                    "search" : "Cari Data: ",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    "emptyTable": "Tidak Ada Data Pegawai",
                    "infoEmpty": "Menampilkan 0 sampai 0 dari 0 data",
                    "infoFiltered": "(Dicari dari _MAX_ total data)",
                    "lengthMenu": "Menampilkan _MENU_ Data",
                    "zeroRecords": "Data yang dicari tidak ada",
                    "paginate": {
                        "first":      "Pertama",
                        "last":       "Terakhir",
                        "next":       "Berikutnya",
                        "previous":   "Sebelumnya"
                    }
                }
            });
        } );
    </script>
    @include('admin.content.pegawai.show_partial.buttonJs')
@endpush


@section('modal')
    {{-- modal tambah --}}
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="tambahModal" role="dialog" tabindex="-1">
      <div class="modal-dialog modal-lg modal-centered" role="document">
        <div class="modal-content text-center">
          <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Tutup</span><span class="os-icon os-icon-close"></span></button>
          <div class="onboarding-side-by-side">
            <div class="onboarding-media">
              <img alt="" src="/iniTemplate/dist/iconModal/pegawaiAdd.png" width="200px">
            </div>
            <div class="onboarding-content with-gradient">
              <h4 class="onboarding-title">
                Tambah Pegawai Baru
              </h4>
              <div class="onboarding-text">
                Masukkan data dasar yang dibutuhkan untuk membuat data pegawai baru di bawah ini.
              </div>
              <form id="addForm">
                @csrf
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                        <input name="gelar_depan" id="inputAddGelarDepan" placeholder="Masukkan Gelar Depan.." type="text" class="form-control" />
                    </div>
                  </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <input name="nama" id="inputAddNama" placeholder="Masukkan Nama.." type="text" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <input name="gelar_belakang" id="inputAddGelarBelakang" placeholder="Masukkan Gelar Belakang.." type="text" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <input name="tanggal_lahir" id="inputAddTanggalLahir" placeholder="Masukkan Tanggal Lahir.." type="text" onfocus="(this.type='date')" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <input name="email" id="inputAddEmail" placeholder="Masukkan Email.." type="email" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <select class="mb-2 form-control" name="ruangan">
                            <option selected disabled>Pilih Ruangan...</option>
                            @foreach ($ruangan as $data)
                                <option value="{{$data->id}}">{{$data->ruangan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                  <div class="col-sm-12">
                    <div class="form-group text-center">
                        <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="submit">Tambah Pegawai Baru</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- end modal tambah --}}
@endsection
